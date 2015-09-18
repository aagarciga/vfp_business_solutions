global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

FinancialDashboard = dandelion.namespace('App.FinancialDashboard', global)
FinancialDashboard.status = {}
FinancialDashboard.dictionaries = {}
FinancialDashboard.htmlBindings = {}
FinancialDashboard.functions = {}
FinancialDashboard.functions.formatToCurrency = (value, separator = ',')->
  strValue = value.toString()
  commaCount = parseInt((strValue.length / 3) - 1, 10)
  offset = 0
  included = !!~ strValue.indexOf('.') # Using bitwise operator instead (!== -1)

  if included # strValue.indexOf('.') isnt -1
    offset = strValue.slice(strValue.indexOf('.')).length

  strValue = strValue.split('').reverse().join('') # reversing string

  while commaCount isnt 0
    strValue = strValue.slice(0, (commaCount * 3) + offset) + separator + strValue.slice((commaCount * 3) + offset)
    commaCount -= 1

  strValue = strValue.split('').reverse().join('') # reversing string back

  if strValue.charAt(0) == separator
    strValue = strValue.slice(1)
  strValue

FinancialDashboard.eventHandlers = {}

FinancialDashboard.init = (chartData) ->
  chartData[0].urlARDashboard = FinancialDashboard.urls.ARDashboard
  financialChart = AmCharts.makeChart( "financial-chart",{
    'type': "serial",
    'titles': [{
      'text': "Financial Summary"
      'size': 12
      'color': '#444'
    }]
    'dataProvider': chartData,
    'creditsPosition': "bottom-right",
    'categoryField': "net",
    'plotAreaBorderAlpha': 0,
    'balloonText': "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    'categoryAxis':
      'gridAlpha': 0.1,
      'axisAlpha': 0,
      'axisColor': '#444',
      'gridPosition': "start",
      'titleBold': true,
      'labelsEnabled': false,
      'title': "NET: $ " + FinancialDashboard.functions.formatToCurrency(chartData[0].net)
    'valueAxes': [ {
      'stackType': "regular",
      'gridAlpha': 0.1,
      'axisAlpha': 0,
      'labelsEnabled': false
    } ]
    'graphs':[
      {
        'title': "Account Payable",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "ap",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#cc3333",
        'balloonText': "<b><span style='color:#cc3333'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"

      },
      {
        'title': "Work in Process",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "wip",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#cccc33",
        'balloonText': "<b><span style='color:#cccc33'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Inventory",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "inventory",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#3399cc",
        'balloonText': "<b><span style='color:#3399cc'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Cash",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "cash",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#006633",
        'balloonText': "<b><span style='color:#006633'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Account Receivable",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "ar",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#99cc66",
        'balloonText': "<b><span style='color:#99cc66'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
        'urlField': 'urlARDashboard'
      }
    ]
    'legend':
      'align': "center",
      'valueText': "[[value]]"
      'forceWidth': true
      'markerType': "square",
      'horizontalGap': 10,
      'labelWidth': 120,
      'position': 'right',
      'reversedOrder': true
    'export':
      'enabled': true
    'responsive': {
      "enabled": true
      'rules': [
        {
          "minWidth": 500,
          "legendPosition": "right",
          "overrides": {
            "legend": {
              "enabled": true
            }
          }
        },
        {
          "maxWidth": 499,
          "legendPosition": "right",
          "overrides": {
            "legend": {
              "enabled": false
            }
          }
        }
      ]
    }
  })
#  financialChart.addListener("clickGraph", FinancialDashboard.eventHandlers.onClickGraph)
#  financialChart.addListener("rollOverGraph", FinancialDashboard.eventHandlers.onHoverGraph)

  $.ajax(
    data: {}
    url: FinancialDashboard.urls.getARData
    type: 'get'
    beforeSend: ->
      $('.loading').show()
    success: (response) ->
      data = $.parseJSON(response);

      data.chartData.urlARDashboard = FinancialDashboard.urls.ARDashboard
      console.log data.chartData
      arSummaryChart = AmCharts.makeChart("ar-summary-chart",
        'type': "pie"
#        'titles': [{
#          'text': "Account Receivable"
#          'size': 12
#          'color': '#444'
#        }]
        'titleField': "interval"
        'valueField': "value"
        'dataProvider': data.chartData
        'urlField': 'urlARDashboard'
        'labelText': "[[title]]"
        'allLabels': [{
            "y": '47%'
  #            "y": 20
            "text": 'Account Receivable'
            "align": "center"
            "size": 12
            "color": "#222"
            "alpha": 1,
            "rotation": 0,
            "bold": true,
            "url": FinancialDashboard.urls.ARDashboard
          },
          {
            "y": '52%'
#            "y": 20
            "text": '$ ' + FinancialDashboard.functions.formatToCurrency(chartData[0].ar)
            "align": "center"
            "size": 12
            "color": "#444"
            "alpha": 1,
            "rotation": 0,
            "bold": true,
            "url": FinancialDashboard.urls.ARDashboard
          }
        ]
#        'startDuration': 0
        'startEffect': 'easeInSine'
        'outlineColor': "#FFFFFF"
        'outlineAlpha': 0.8
        'outlineThickness': 2
        'innerRadius': '75%'
#        'radius': '15%'
#        'showZeroSlices': true
#        'labelRadius': -20
        'balloonText': "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>"
        'colors': ["#B0DE09", "#F8FF01", "#FCD202", "#FF9E01", "#FF6600", "#cc3333"]
        'legend':
            'align': "center",
            'forceWidth': true
            'valueText': "$ [[value]]"
            'markerType': "square",
            'horizontalGap': 10,
            'labelWidth': 120,
            'position': 'right',
          'export':
            'enabled': true
          'responsive': {
            "enabled": true
            'rules': [
              {
                "minWidth": 500,
                "legendPosition": "right",
                "overrides": {
                  "legend": {
                    "enabled": true
                  }
                }
              },
              {
                "maxWidth": 499,
                "legendPosition": "right",
                "overrides": {
                  'allLabels': [
                    {
                      "y": '47%'
                      "text": 'Account Receivable'
                    },
                    {
                      "y": '52%'
                    }
                  ]
                  "legend": {
                    "enabled": false
                  }
                }
              }
            ]
          }
      )
      $('.loading').hide();
  )

