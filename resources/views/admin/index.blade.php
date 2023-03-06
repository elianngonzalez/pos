@extends('layouts.admin')
@section('title','panel principal')
@section('content')

<style type="text/css">
  .unstyled-button {
    border: none;
    padding: 0;
    background: none;
  }
</style>

<div class="content-wrapper">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <i class="fa fa-home"></i>
        Panel principal
      </h3>
    </div>
    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">

              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                  Avg Time
                </p>
                <h2>123.50</h2>
                <label class="badge badge-outline-danger badge-pill">30% decrease</label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                  Downloads
                </p>
                <h2>3500</h2>
                <label class="badge badge-outline-success badge-pill">12% increase</label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-check-circle mr-2"></i>
                  Update
                </p>
                <h2>7500</h2>
                <label class="badge badge-outline-success badge-pill">57% increase</label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-chart-line mr-2"></i>
                  Sales
                </p>
                <h2>9000</h2>
                <label class="badge badge-outline-success badge-pill">10% increase</label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-circle-notch mr-2"></i>
                  Pending
                </p>
                <h2>7500</h2>
                <label class="badge badge-outline-danger badge-pill">16% decrease</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-gift"></i>
              Orders
            </h4>
            <h2 class="mb-5">56000 <span class="text-muted h4 font-weight-normal">Sales by month</span></h2>
            <canvas id="orders-chart-test"></canvas>
            <div id="orders-chart-legend" class="orders-chart-legend"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-chart-line"></i>
              Sales
            </h4>
            <h2 class="mb-5">56000 <span class="text-muted h4 font-weight-normal">Sales</span></h2>
            <canvas id="sales-chart-test"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <h4 class="card-title">
              <i class="fas fa-chart-pie"></i>
              Sales status
            </h4>
            <div class="flex-grow-1 d-flex flex-column justify-content-between">
              <canvas id="sales-status-chart-test" class="mt-3"></canvas>
              <div class="pt-4">
                <div id="sales-status-chart-test-legend" class="sales-status-chart-test-legend"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <h4 class="card-title">
              <i class="fas fa-tachometer-alt"></i>
              Daily Sales
            </h4>
            <p class="card-description">Daily sales for the past one month</p>
            <div class="flex-grow-1 d-flex flex-column justify-content-between">
              <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
              <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
            </div>
          </div>
        </div>
      </div-->
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-calendar-alt"></i>
              Calendar
            </h4>
            <div id="inline-datepicker-example" class="datepicker"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-envelope"></i>
              Inbox(31)
            </h4>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <img src="images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle" />
                    </td>
                    <td class="font-weight-bold">
                      Andrew Bowen
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Development</label>
                    </td>
                    <td>
                      The required fields are added in the database
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <img src="images/faces/face2.jpg" alt="profile" class="img-sm rounded-circle" />
                    </td>
                    <td class="font-weight-bold">
                      Mae Saunders
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Development</label>
                    </td>
                    <td>
                      The application will be completed by tomorrow
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <div class="img-sm rounded-circle bg-warning profile-image-text">M</div>
                    </td>
                    <td class="font-weight-bold">
                      Manuel Yates
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Design</label>
                    </td>
                    <td>
                      The new design is uploaded in zeplin
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <img src="images/faces/face11.html" alt="profile" class="img-sm rounded-circle" />
                    </td>
                    <td class="font-weight-bold">
                      Marguerite Phillips
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Development</label>
                    </td>
                    <td>
                      Please send me the latest requirements
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </td>
                    <td class="py-1">
                      <div class="img-sm rounded-circle bg-info profile-image-text">C</div>
                    </td>
                    <td class="font-weight-bold">
                      Clifford Wilson
                    </td>
                    <td>
                      <label class="badge badge-light badge-pill">Testing</label>
                    </td>
                    <td>
                      The issues are documented in the shared sheet
                    </td>
                    <td>
                      <i class="fas fa-ellipsis-v"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-table"></i>
              Sales Data
            </h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Customer</th>
                    <th>Item code</th>
                    <th>Orders</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-weight-bold">
                      Clifford Wilson
                    </td>
                    <td class="text-muted">
                      PT613
                    </td>
                    <td>
                      350
                    </td>
                    <td>
                      <label class="badge badge-success badge-pill">Dispatched</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Mary Payne
                    </td>
                    <td class="text-muted">
                      ST456
                    </td>
                    <td>
                      520
                    </td>
                    <td>
                      <label class="badge badge-warning badge-pill">Processing</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Adelaide Blake
                    </td>
                    <td class="text-muted">
                      CS789
                    </td>
                    <td>
                      830
                    </td>
                    <td>
                      <label class="badge badge-danger badge-pill">Failed</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Adeline King
                    </td>
                    <td class="text-muted">
                      LP908
                    </td>
                    <td>
                      579
                    </td>
                    <td>
                      <label class="badge badge-primary badge-pill">Delivered</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Bertie Robbins
                    </td>
                    <td class="text-muted">
                      HF675
                    </td>
                    <td>
                      790
                    </td>
                    <td>
                      <label class="badge badge-info badge-pill">On Hold</label>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div-->
    <!--div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-thumbtack"></i>
              Todo
            </h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
              <button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Meeting with Alisa
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Call John
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Create invoice
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Print Statements
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Pick up kids from school
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div-->
    <!--div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-md-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-facebook btn-rounded">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Facebook</h5>
                  <p class="mb-0">813 friends</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-twitter btn-rounded">
                  <i class="fab fa-twitter"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Twitter</h5>
                  <p class="mb-0">9000 followers</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-google btn-rounded">
                  <i class="fab fa-google-plus-g"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Google plus</h5>
                  <p class="mb-0">780 friends</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <button class="btn btn-social-icon btn-linkedin btn-rounded">
                  <i class="fab fa-linkedin-in"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Linkedin</h5>
                  <p class="mb-0">1090 connections</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div-->
  </div>
</div>
<div id="myCha"></div>

@stop

@section('js')
{!!Html::script("melody/js/data-table.js")!!}

<script>
  $(document).ready(function() {

    async function test() {
      const response = await fetch('/test')
      const products = await response.json();

      let groupedProducts = {};

      for (let i = 0; i < products.length; i++) {
        let day = products[i].day;
        if (!groupedProducts[day]) {
          groupedProducts[day] = [];
        }
        groupedProducts[day].push(products[i]);
      }

      console.log({groupedProducts});
    }

    //test()

    async function ajax() {

      const response = await fetch('/chartData')
      const Data = await response.json();
      console.log({
        Data
      });


      if ($("#orders-chart-test").length) {
        var currentChartCanvas = $("#orders-chart-test").get(0).getContext("2d");
        var currentChart = new Chart(currentChartCanvas, {
          type: 'bar',
          data: {
            labels: Data.map(item => item.month),
            /* {
              label: 'Ganancias mensuales - 10 %',
              data: Data.map(item => item.total_profit - (item.total_profit / 10)),
              backgroundColor: '#392c70'
            }, */
            datasets: [{
              label: 'Ganancias mensuales',
              data: Data.map(item => item.total_profit),
              backgroundColor: '#392c70'
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            layout: {
              padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
              }
            },
            scales: {
              yAxes: [{
                gridLines: {
                  drawBorder: false,
                },
                ticks: {
                  stepSize: 1,
                  fontColor: "#686868"
                }
              }],
              xAxes: [{
                stacked: true,
                ticks: {
                  beginAtZero: true,
                  fontColor: "#686868"
                },
                gridLines: {
                  display: false,
                },
                barPercentage: 0.4
              }]
            },
            legend: {
              display: false,
            },
            elements: {
              point: {
                radius: 0
              }
            }
          }
        });
      }


      const responseLine = await fetch('/SalesDay')
      const DataLine = await responseLine.json();
      console.log({
        DataLine
      });
      if ($('#sales-chart-test').length) {
        var lineChartCanvas = $("#sales-chart-test").get(0).getContext("2d");
        var data = {
          labels: DataLine.map(item => item.hour),
          datasets: [{
            label: 'Ventas',
            data: DataLine.map(item => item.sales_count),
            borderColor: [
              '#392c70'
            ],
            borderWidth: 3,
          }]
        };
        var options = {
          scales: {
            yAxes: [{
              gridLines: {
                drawBorder: true
              },
              ticks: {
                stepSize: 1,
                fontColor: "#686868"
              }
            }],
            xAxes: [{
              display: true,
              gridLines: {
                drawBorder: true
              }
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 3
            }
          },
          stepsize: DataLine.map(item => item.hour)
        };
        var lineChart = new Chart(lineChartCanvas, {
          type: 'line',
          data: data,
          options: options
        });
      }



      const responsePie = await fetch('/ProductsDay')
      const DataPie = await responsePie.json();
      console.log({
        DataPie
      });
      if ($("#sales-status-chart-test").length) {
        var pieChartCanvas = $("#sales-status-chart-test").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas, {
          type: 'pie',
          data: {
            datasets: [{
              data: DataPie.map(item => item.quantity_sold),
              backgroundColor: [
                '#392c70',
                '#04b76b',
                '#ff5e6d',
                '#eeeeee',
                '#70d939',
                '#392c70'
              ],
              borderColor: [
                '#392c70',
                '#04b76b',
                '#ff5e6d',
                '#eeeeee',
                '#70d939',
                '#392c70'
              ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: DataPie.map(item => item.name)
          },
          options: {
            responsive: true,
            animation: {
              animateScale: true,
              animateRotate: true
            },
            legend: {
              display: false
            },
            legendCallback: function(chart) {
              var text = [];
              text.push('<ul class="legend' + chart.id + '">');
              for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
                text.push('<li><span class="legend-label" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
                if (chart.data.labels[i]) {
                  text.push(chart.data.labels[i]);
                }
                text.push('<label class="badge badge-light badge-pill legend-percentage ml-auto">' + chart.data.datasets[0].data[i] + '</label>');
                text.push('</li>');
              }
              text.push('</ul>');
              return text.join("");
            }
          }
        });
        document.getElementById('sales-status-chart-test-legend').innerHTML = pieChart.generateLegend();
      }
    }

    ajax()
  })
</script>

@stop