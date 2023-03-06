<?php require_once("api.php");
$precioDolar = new precio();
$db_handle = new DBController();
$con = $db_handle->connectDB();
$precioOficial = $precioDolar->PrecioDolar("oficial");
$precioBlue = $precioDolar->PrecioDolar("blue");
$precioBolsa = $precioDolar->PrecioDolar("bolsa");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>OviTec - Precio Dolar API </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css">

    <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DFYMR44FY9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DFYMR44FY9');
</script>
</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
  
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        
                        <div class="row widget-statistic">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-followers">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <img src="assets/img/simbolo-de-moneda-dolar.png" width="18" >
                                        </div>
                                        <p class="w-value"><?php echo 'Compra: '.number_format($precioOficial["cotizacion_compra"], 2).' - Venta: '.number_format($precioOficial["cotizacion_venta"], 2).'';?></p>
                                        <h5 class="">Oficial</h5>
                                    </div>
                                    <div class="widget-content">    
                                        <div class="w-chart">
                                            <div id="hybrid_followers"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-referral">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <img src="assets/img/simbolo-de-moneda-dolar.png" width="18" >
                                        </div>
                                        <p class="w-value"><?php echo 'Compra: '.number_format($precioBlue["cotizacion_compra"], 2).' - Venta: '.number_format($precioBlue["cotizacion_venta"], 2).'';?></p>
                                        <h5 class="">Informal</h5>
                                    </div>
                                    <div class="widget-content">    
                                        <div class="w-chart">
                                            <div id="hybrid_followers1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-engagement">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <img src="assets/img/simbolo-de-moneda-dolar.png" width="18" >
                                        </div>
                                        <p class="w-value"><?php echo 'Compra: '.number_format($precioBolsa["cotizacion_compra"], 2).' - Venta: '.number_format($precioBolsa["cotizacion_venta"], 2).'';?></p>
                                        <h5 class="">Bolsa</h5>
                                    </div>
                                    <div class="widget-content">    
                                        <div class="w-chart">
                                            <div id="hybrid_followers3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Grafico de los ultimos 30 dias</h5>
                                <ul class="tabs tab-pills">
                                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Mensual</a></li>
                                </ul>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent"> 
                                        <div id="revenueMonthly"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2022 <a target="_blank" href="http://ovitec.com.ar">OviTec</a>, All rights reserved.</p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/apex/apexcharts.min.js"></script>
    <script>
        var options1 = {
  chart: {
    fontFamily: 'Quicksand, sans-serif',
    height: 365,
    type: 'area',
    zoom: {
        enabled: false
    },
    dropShadow: {
      enabled: true,
      opacity: 0.3,
      blur: 5,
      left: -7,
      top: 22
    },
    toolbar: {
      show: false
    },
    events: {
      mounted: function(ctx, config) {
        const highest1 = ctx.getHighestValueInSeries(0);
        const highest2 = ctx.getHighestValueInSeries(1);
        const highest3 = ctx.getHighestValueInSeries(2);

        ctx.addPointAnnotation({
          x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
          y: highest1,
          label: {
            style: {
              cssClass: 'd-none'
            }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
        })

        ctx.addPointAnnotation({
          x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
          y: highest2,
          label: {
            style: {
              cssClass: 'd-none'
            }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
        })

        ctx.addPointAnnotation({
          x: new Date(ctx.w.globals.seriesX[2][ctx.w.globals.series[2].indexOf(highest3)]).getTime(),
          y: highest3,
          label: {
            style: {
              cssClass: 'd-none'
            }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#009688" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
        })
      },
    }
  },
  colors: ['#1b55e2', '#e7515a', '#009688'],
  dataLabels: {
      enabled: false
  },
  markers: {
    discrete: [{
    seriesIndex: 0,
    dataPointIndex: 7,
    fillColor: '#000',
    strokeColor: '#000',
    size: 5
  }, {
    seriesIndex: 2,
    dataPointIndex: 11,
    fillColor: '#000',
    strokeColor: '#000',
    size: 4
  }]
  },
  subtitle: {
    text: 'Precio a valor del cierre para la venta',
    align: 'left',
    margin: 0,
    offsetX: -10,
    offsetY: 35,
    floating: false,
    style: {
      fontSize: '14px',
      color:  '#888ea8'
    }
  },
  title: {
    text: 'Cotizacion del dolar del ultimo mes',
    align: 'left',
    margin: 0,
    offsetX: -10,
    offsetY: 0,
    floating: false,
    style: {
      fontSize: '25px',
      color:  '#bfc9d4'
    },
  },
  stroke: {
      show: true,
      curve: 'smooth',
      width: 2,
      lineCap: 'square'
  },
  series: [{
      name: 'Oficial',
      data: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 29; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			$fecha_day= date('d', strtotime($fecha));
			$fecha_month= date('m', strtotime($fecha));
			$fecha_year= date('Y', strtotime($fecha));
			$tenenciawallets = $con->query("SELECT * FROM dolar_historialcierre WHERE YEAR(cierre_fecha) = $fecha_year AND DAY(cierre_fecha) = $fecha_day AND MONTH(cierre_fecha) = $fecha_month AND cierre_tipo = 'oficial'");
			if($tenenciawallet = $tenenciawallets->fetch_array()){
			$tenencia = $tenenciawallet["cierre_precioVenta"];
			}else{
			$tenencia = "0";
		  }
		  echo $tenencia.',';
		} echo $precioOficial["cotizacion_venta"];?>]
  }, {
      name: 'Informal',
      data: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 29; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			$fecha_day= date('d', strtotime($fecha));
			$fecha_month= date('m', strtotime($fecha));
			$fecha_year= date('Y', strtotime($fecha));
			$tenenciawallets = $con->query("SELECT * FROM dolar_historialcierre WHERE YEAR(cierre_fecha) = $fecha_year AND DAY(cierre_fecha) = $fecha_day AND MONTH(cierre_fecha) = $fecha_month AND cierre_tipo = 'blue'");
			if($tenenciawallet = $tenenciawallets->fetch_array()){
			$tenencia = $tenenciawallet["cierre_precioVenta"];
			}else{
			$tenencia = "0";
		  }
		  echo '"'.$tenencia.'",';
		} echo $precioBlue["cotizacion_venta"];?>]
  }, {
    name: 'Bolsa',
    data: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 29; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			$fecha_day= date('d', strtotime($fecha));
			$fecha_month= date('m', strtotime($fecha));
			$fecha_year= date('Y', strtotime($fecha));
			$tenenciawallets = $con->query("SELECT * FROM dolar_historialcierre WHERE YEAR(cierre_fecha) = $fecha_year AND DAY(cierre_fecha) = $fecha_day AND MONTH(cierre_fecha) = $fecha_month AND cierre_tipo = 'bolsa'");
			if($tenenciawallet = $tenenciawallets->fetch_array()){
			$tenencia = $tenenciawallet["cierre_precioVenta"];
			}else{
			$tenencia = "0";
		  }
		  echo '"'.$tenencia.'",';
		} echo $precioBolsa["cotizacion_venta"];?>]
}
],
  labels: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 29; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			echo '"'.$fecha.'",';
		  } echo '"'.$hoy.'"';?>],
  xaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      show: true
    },
    labels: {
      offsetX: 0,
      offsetY: 5,
      style: {
          fontSize: '12px',
          fontFamily: 'Quicksand, sans-serif',
          cssClass: 'apexcharts-xaxis-title',
      },
    }
  },
  yaxis: {
    labels: {
      formatter: function(value, index) {
        return value
      },
      offsetX: -22,
      offsetY: 0,
      style: {
          fontSize: '12px',
          fontFamily: 'Quicksand, sans-serif',
          cssClass: 'apexcharts-yaxis-title',
      },
    }
  },
  grid: {
    borderColor: '#191e3a',
    strokeDashArray: 5,
    xaxis: {
        lines: {
            show: true
        }
    },   
    yaxis: {
        lines: {
            show: false,
        }
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: -10
    }, 
  }, 
  legend: {
    position: 'top',
    horizontalAlign: 'right',
    offsetY: -50,
    fontSize: '16px',
    fontFamily: 'Quicksand, sans-serif',
    markers: {
      width: 10,
      height: 10,
      strokeWidth: 0,
      strokeColor: '#fff',
      fillColors: undefined,
      radius: 12,
      onClick: undefined,
      offsetX: 0,
      offsetY: 0
    },    
    itemMargin: {
      horizontal: 0,
      vertical: 20
    }
  },
  tooltip: {
    theme: 'dark',
    marker: {
      show: true,
    },
    x: {
      show: false,
    }
  },
  fill: {
      type:"gradient",
      gradient: {
          type: "vertical",
          shadeIntensity: 1,
          inverseColors: !1,
          opacityFrom: .28,
          opacityTo: .05,
          stops: [45, 100]
      }
  },
  responsive: [{
    breakpoint: 575,
    options: {
      legend: {
          offsetY: -30,
      },
    },
  }]
}
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <script src="assets/js/dashboard/dash_1.js"></script>
    <script>
         try {

Apex.tooltip = {
  theme: 'dark'
}

/*

  Dropdown

*/

var filterDropdown = function() {
    var getDropdownElement = document.querySelectorAll('.filter.custom-dropdown-icon .dropdown-item');
    for (var i = 0; i < getDropdownElement.length; i++) {
        getDropdownElement[i].addEventListener('click', function() {
          console.log(this.getAttribute('data-value'))
            document.querySelectorAll('.custom-dropdown-icon .dropdown-toggle > span.text')[0].innerHTML = this.getAttribute('data-value');
        })
    }
}

  /*
      ==============================
      |    @Options Charts Script   |
      ==============================
  */

  /*
      ======================================
          Visitor Statistics | Options
      ======================================
  */

  
  // Total Visits

  var spark1 = {
      chart: {
          id: 'unique-visits',
          group: 'sparks2',
          type: 'line',
          height: 80,
          sparkline: {
              enabled: true
          },
          dropShadow: {
              enabled: true,
              top: 1,
              left: 1,
              blur: 2,
              color: '#e2a03f',
              opacity: 0.7,
          }
      },
      series: [{
          data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25]
      }],
      stroke: {
        curve: 'smooth',
        width: 2,
      },
      markers: {
          size: 0
      },
      grid: {
        padding: {
          top: 35,
          bottom: 0,
          left: 40
        }
      },
      colors: ['#e2a03f'],
      tooltip: {
          x: {
              show: false
          },
          y: {
              title: {
                  formatter: function formatter(val) {
                      return '';
                  }
              }
          }
      },
      responsive: [{
          breakpoint: 1351,
          options: {
             chart: {
                height: 95,
            },
            grid: {
                padding: {
                  top: 35,
                  bottom: 0,
                  left: 0
                }
            },
          },
      },
      {
          breakpoint: 1200,
          options: {
             chart: {
                height: 80,
            },
            grid: {
                padding: {
                  top: 35,
                  bottom: 0,
                  left: 40
                }
            },
          },
      },
      {
          breakpoint: 576,
          options: {
             chart: {
                height: 95,
            },
            grid: {
                padding: {
                  top: 45,
                  bottom: 0,
                  left: 0
                }
            },
          },
      }

      ]
  }

  // Paid Visits

  var spark2 = {
      chart: {
        id: 'total-users',
        group: 'sparks1',
        type: 'line',
        height: 80,
        sparkline: {
          enabled: true
        },
        dropShadow: {
          enabled: true,
          top: 3,
          left: 1,
          blur: 3,
          color: '#009688',
          opacity: 0.7,
        }
      },
      series: [{
        data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69]
      }],
      stroke: {
        curve: 'smooth',
        width: 2,
      },
      markers: {
        size: 0
      },
      grid: {
        padding: {
          top: 35,
          bottom: 0,
          left: 40
        }
      },
      colors: ['#009688'],
      tooltip: {
        x: {
          show: false
        },
        y: {
          title: {
            formatter: function formatter(val) {
              return '';
            }
          }
        }
      },
      responsive: [{
          breakpoint: 1351,
          options: {
             chart: {
                height: 95,
            },
            grid: {
                padding: {
                  top: 35,
                  bottom: 0,
                  left: 0
                }
            },
          },
      },
      {
          breakpoint: 1200,
          options: {
             chart: {
                height: 80,
            },
            grid: {
                padding: {
                  top: 35,
                  bottom: 0,
                  left: 40
                }
            },
          },
      },
      {
          breakpoint: 576,
          options: {
             chart: {
                height: 95,
            },
            grid: {
                padding: {
                  top: 35,
                  bottom: 0,
                  left: 0
                }
            },
          },
      }
      ]
  }
  

  /*
      ===================================
          Unique Visitors | Options
      ===================================
  */

  var d_1options1 = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
          show: false,
        }
    },
    colors: ['#5c1ac3', '#ffbb44'],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'  
        },
    },
    dataLabels: {
        enabled: false
    },
    legend: {
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 10,
            height: 10,
          },
          itemMargin: {
            horizontal: 0,
            vertical: 8
          }
    },
    grid: {
      borderColor: '#191e3a',
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
    }],
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: 'vertical',
        shadeIntensity: 0.3,
        inverseColors: false,
        opacityFrom: 1,
        opacityTo: 0.8,
        stops: [0, 100]
      }
    },
    tooltip: {
      theme: 'dark',
        y: {
            formatter: function (val) {
                return val
            }
        }
    }
  }

  /*
      ==============================
          Statistics | Options
      ==============================
  */

  // Followers

  var d_1options3 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    series: [{
      name: 'Precio Venta',
      data: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 6; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			$fecha_day= date('d', strtotime($fecha));
			$fecha_month= date('m', strtotime($fecha));
			$fecha_year= date('Y', strtotime($fecha));
			$tenenciawallets = $con->query("SELECT * FROM dolar_historialcierre WHERE YEAR(cierre_fecha) = $fecha_year AND DAY(cierre_fecha) = $fecha_day AND MONTH(cierre_fecha) = $fecha_month AND cierre_tipo = 'oficial'");
			if($tenenciawallet = $tenenciawallets->fetch_array()){
			$tenencia = $tenenciawallet["cierre_precioVenta"];
			}else{
			$tenencia = "0";
		  }
		  echo $tenencia.',';
		} echo $precioOficial["cotizacion_venta"];?>]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#1b55e2'],
    tooltip: {
      x: {
        show: false,
      }
    },
    fill: {
        type:"gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
  }

  // Referral

  var d_1options4 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    series: [{
      name: 'Precio Venta',
      data: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 6; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			$fecha_day= date('d', strtotime($fecha));
			$fecha_month= date('m', strtotime($fecha));
			$fecha_year= date('Y', strtotime($fecha));
			$tenenciawallets = $con->query("SELECT * FROM dolar_historialcierre WHERE YEAR(cierre_fecha) = $fecha_year AND DAY(cierre_fecha) = $fecha_day AND MONTH(cierre_fecha) = $fecha_month AND cierre_tipo = 'blue'");
			if($tenenciawallet = $tenenciawallets->fetch_array()){
			$tenencia = $tenenciawallet["cierre_precioVenta"];
			}else{
			$tenencia = "0";
		  }
		  echo '"'.$tenencia.'",';
		} echo $precioBlue["cotizacion_venta"];?>]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#e7515a'],
    tooltip: {
      x: {
        show: false,
      }
    },
    fill: {
        type:"gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
  }

  // Engagement Rate

  var d_1options5 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: 'Precio Venta',
      data: [<?php
		  $hoy = date('d-m-Y');
		  for($i = 6; $i>=1; $i--){
			$fecha = date('d-m-Y', strtotime($hoy.'- '.$i.' days'));
			$fecha_day= date('d', strtotime($fecha));
			$fecha_month= date('m', strtotime($fecha));
			$fecha_year= date('Y', strtotime($fecha));
			$tenenciawallets = $con->query("SELECT * FROM dolar_historialcierre WHERE YEAR(cierre_fecha) = $fecha_year AND DAY(cierre_fecha) = $fecha_day AND MONTH(cierre_fecha) = $fecha_month AND cierre_tipo = 'bolsa'");
			if($tenenciawallet = $tenenciawallets->fetch_array()){
			$tenencia = $tenenciawallet["cierre_precioVenta"];
			}else{
			$tenencia = "0";
		  }
		  echo '"'.$tenencia.'",';
		} echo $precioBolsa["cotizacion_venta"];?>]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#009688'],
    tooltip: {
      x: {
        show: false,
      }
    },
    fill: {
        type:"gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
  }

  


  /*
      ==============================
      |    @Render Charts Script    |
      ==============================
  */


  /*
      ======================================
          Visitor Statistics | Script
      ======================================
  */

  // Total Visits
  d_1C_1 = new ApexCharts(document.querySelector("#total-users"), spark1);
  d_1C_1.render();

  // Paid Visits
  d_1C_2 = new ApexCharts(document.querySelector("#paid-visits"), spark2);
  d_1C_2.render();

  /*
      ===================================
          Unique Visitors | Script
      ===================================
  */

  var d_1C_3 = new ApexCharts(
      document.querySelector("#uniqueVisits"),
      d_1options1
  );
  d_1C_3.render();

  /*
      ==============================
          Statistics | Script
      ==============================
  */


  // Followers

  var d_1C_5 = new ApexCharts(document.querySelector("#hybrid_followers"), d_1options3);
  d_1C_5.render()

  // Referral

  var d_1C_6 = new ApexCharts(document.querySelector("#hybrid_followers1"), d_1options4);
  d_1C_6.render()

  // Engagement Rate

  var d_1C_7 = new ApexCharts(document.querySelector("#hybrid_followers3"), d_1options5);
  d_1C_7.render()



/*
    =============================================
        Perfect Scrollbar | Notifications
    =============================================
*/
const ps = new PerfectScrollbar(document.querySelector('.mt-container'));

filterDropdown();

} catch(e) {
// statements
console.log(e);
}

    </script>
     <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>