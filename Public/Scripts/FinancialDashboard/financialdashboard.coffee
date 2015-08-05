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
  offset = 3
  if not (strValue.indexOf('.') == -1)
    offset += strValue.slice(strValue.indexOf('.')).length
  if strValue.length > 3
    result = strValue.slice(0, -1*offset) + separator + strValue.slice(-1*offset)
    if strValue.length > 6
      result.slice(0, -1*(offset+4)) + separator + result.slice(-1*(offset+4))
    else
      result
  else
    strValue
FinancialDashboard.eventHandlers = {}
FinancialDashboard.init = (chartData) ->
  console.log("creating chart")
  chart = new AmCharts.AmSerialChart()
  chart.creditsPosition = 'bottom-right'
  chart.dataProvider = chartData
  chart.categoryField = "net"
  chart.plotAreaBorderAlpha = 0
  chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>"


#    chart.depth3D = 20;
#    chart.angle = 30;

  # AXES
  # Category
  categoryAxis = chart.categoryAxis;
  categoryAxis.gridAlpha = 0.1;
  categoryAxis.axisAlpha = 0;
  categoryAxis.axisColor = '#444'
  categoryAxis.gridPosition = "start";
  categoryAxis.titleBold = true
  categoryAxis.title = 'NET: $ ' + FinancialDashboard.functions.formatToCurrency(chartData[0].net)
  categoryAxis.labelsEnabled = false


  # value
  valueAxis = new AmCharts.ValueAxis();
  valueAxis.stackType = "regular";
  valueAxis.gridAlpha = 0.1
  valueAxis.axisAlpha = 0
  valueAxis.labelsEnabled = false


  chart.addValueAxis(valueAxis)

  # GRAPHS

  # Account Payable
  graph = new AmCharts.AmGraph()
  graph.title = "Account Payable"
  graph.color = '#FFFFFF'
  graph.labelText = "$ [[value]]"
  graph.valueField = "ap"
  graph.type = "column"
  graph.lineAlpha = 0
  graph.fillAlphas = 1
  graph.lineColor = "#cc3333"
  graph.balloonText = "<b><span style='color:#cc3333'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
  graph.labelPosition = "middle"
  chart.addGraph(graph)


  # Work in Process
  graph = new AmCharts.AmGraph()
  graph.title = "Work in Process"
  graph.color = '#FFFFFF'
  graph.labelText = "$ [[value]]"
  graph.valueField = "wip"
  graph.type = "column"
  graph.lineAlpha = 0
  graph.fillAlphas = 1
  graph.lineColor = "#cccc33"
  graph.balloonText = "<b><span style='color:#cccc33'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
  graph.labelPosition = "middle"
  chart.addGraph(graph)

  # Inventory
  graph = new AmCharts.AmGraph()
  graph.title = "Inventory"
  graph.color = '#FFFFFF'
  graph.labelText = "$ [[value]]"
  graph.valueField = "inventory"
  graph.type = "column"
  graph.lineAlpha = 0
  graph.fillAlphas = 1
  graph.lineColor = "#3399cc"
  graph.balloonText = "<b><span style='color:#3399cc'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
  graph.labelPosition = "middle"
  chart.addGraph(graph)

  # Cash
  graph = new AmCharts.AmGraph()
  graph.title = "Cash"
  graph.color = '#FFFFFF'
  graph.labelText = "$ [[value]]"
  graph.valueField = "cash"
  graph.type = "column"
  graph.lineAlpha = 0
  graph.fillAlphas = 1
  graph.lineColor = "#006633"
  graph.balloonText = "<b><span style='color:#006633'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
  graph.labelPosition = "middle"
  chart.addGraph(graph)

  # Account Receivable
  graph = new AmCharts.AmGraph()
  graph.title = "Account Receivable"
  graph.color = '#FFFFFF'
  graph.labelText = "$ [[value]]"
  graph.valueField = "ar"
  graph.type = "column"
  graph.lineAlpha = 0
  graph.fillAlphas = 1
  graph.lineColor = "#99cc66"
  graph.balloonText = "<b><span style='color:#99cc66'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
  graph.labelPosition = "middle"
  chart.addGraph(graph)

  # LEGEND
  legend = new AmCharts.AmLegend()
  legend.align = "center"
  legend.markerType = "square"
  legend.horizontalGap = 10
  legend.labelWidth = 150
  legend.position = 'right'
  legend.reversedOrder = true
  chart.addLegend(legend)

  chart.write("financial-chart")

