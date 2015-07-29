global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

FinancialDashboard = dandelion.namespace('App.FinancialDashboard', global)
FinancialDashboard.status = {}
FinancialDashboard.dictionaries = {}
FinancialDashboard.htmlBindings = {}
FinancialDashboard.functions = {}
FinancialDashboard.eventHandlers = {}
FinancialDashboard.init = (chartData) ->
  # TODO: Initialize code here...
  console.log "financial dashboard initializer"
  AmCharts.ready( ->
    chart = new AmCharts.AmSerialChart()
    chart.creditsPosition = 'bottom-right'
    chart.dataProvider = chartData
    chart.categoryField = "NET"
    chart.plotAreaBorderAlpha = 0.2
#    chart.depth3D = 20;
#    chart.angle = 30;

    # AXES
    # Category
    categoryAxis = chart.categoryAxis;
    categoryAxis.gridAlpha = 0.1;
    categoryAxis.axisAlpha = 0;
    categoryAxis.axisColor = '#444'
    categoryAxis.gridPosition = "start";
    categoryAxis.title = 'NET'


    # value
    valueAxis = new AmCharts.ValueAxis();
    valueAxis.stackType = "regular";
    valueAxis.gridAlpha = 0.1
    valueAxis.axisAlpha = 0

    chart.addValueAxis(valueAxis)

    # GRAPHS

    # secondgraph
    graph = new AmCharts.AmGraph()
    graph.title = "Account Receivable"
    graph.color = '#FFFFFF'
    graph.labelText = "$ [[value]]"
    graph.valueField = "Account Receivable"
    graph.type = "column"
    graph.lineAlpha = 0
    graph.fillAlphas = 1
    graph.lineColor = "#99cc66"
    graph.balloonText = "<b><span style='color:#99cc66'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
    graph.labelPosition = "middle"
    chart.addGraph(graph)

    # third graph
    graph = new AmCharts.AmGraph()
    graph.title = "Cash"
    graph.color = '#FFFFFF'
    graph.labelText = "$ [[value]]"
    graph.valueField = "Cash"
    graph.type = "column"
    graph.lineAlpha = 0
    graph.fillAlphas = 1
    graph.lineColor = "#cccc66"
    graph.balloonText = "<b><span style='color:#cccc66'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
    graph.labelPosition = "middle"
    chart.addGraph(graph)

    # fifth graph
    graph = new AmCharts.AmGraph()
    graph.title = "WIP"
    graph.color = '#FFFFFF'
    graph.labelText = "$ [[value]]"
    graph.valueField = "WIP"
    graph.type = "column"
    graph.lineAlpha = 0
    graph.fillAlphas = 1
    graph.lineColor = "#3399cc"
    graph.balloonText = "<b><span style='color:#3399cc'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
    graph.labelPosition = "middle"
    chart.addGraph(graph)

    # fourth graph
    graph = new AmCharts.AmGraph()
    graph.title = "Account Payable"
    graph.color = '#FFFFFF'
    graph.labelText = "$ [[value]]"
    graph.valueField = "Account Payable"
    graph.type = "column"
    graph.lineAlpha = 0
    graph.fillAlphas = 1
    graph.lineColor = "#cc3333"
    graph.balloonText = "<b><span style='color:#cc3333'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>"
    graph.labelPosition = "middle"
    chart.addGraph(graph)



    # LEGEND
    legend = new AmCharts.AmLegend()
    legend.align = "center"
    legend.markerType = "square"
    chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>"
    legend.horizontalGap = 10
    chart.addLegend(legend)

    chart.write("financial-chart")
  )


