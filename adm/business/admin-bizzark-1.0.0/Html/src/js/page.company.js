(function(){
  'use strict';
    
  $('[data-toggle="tab"]').on('hide.bs.tab', function (e) {
    $(e.target).removeClass('active')
  })

  Charts.init()
  
  var EarningsTraffic = function(id, type = 'line', options = {}) {
    options = Chart.helpers.merge({
      elements: {
        line: {
          fill: 'start',
          backgroundColor: settings.charts.colors.area
        }
      }
    }, options)

    var data = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Traffic",
        data: [10, 2, 5, 15, 10, 12, 15, 25, 22, 30, 25, 40]
      }]
    }

    Charts.create(id, type, options, data)
  }

  ///////////////////
  // Create Charts //
  ///////////////////
  
  EarningsTraffic('#earningsTrafficChart')
  // LocationDoughnut('#locationDoughnutChart')
  // Products('#productsChart')
  // Courses('#coursesChart')

  // Orders('#ordersChartSwitch')

})()