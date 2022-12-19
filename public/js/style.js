
      var xValues = ["نسبة النجاح","نسبة الرسوب "];
      var yValues = [80,                20];
      var barColors = ["green", "red"];
      
    new Chart("chCircul", {
     
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          // text: "التقرير النهائي بالقسم لسنة 2022 "
        }
      }
    })


   var chartData = {
      labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
      datasets: [{
        backgroundColor: "green",
        label: 'نسبة النجاح',  
        data: [80, 70, 85, 78, 90]
      },
      {
        backgroundColor: "red",
        label: 'نسبة الرسوب',
        data: [20, 25, 15, 22, 10],
      }]
    };
      var chBar = document.getElementById("chBar");
    if (chBar) {
      new Chart(chBar, {
      type: 'bar',
      data: chartData,
      options: {
        scales: {
          xAxes: [{
            staced:true,
            barPercentage: 0.6,
            categoryPercentage: 0.5
          }],
          yAxes: [{
            // stacked:true,
            // max:100,
            ticks: {
               
              beginAtZero: true,
              // stacked:true
            }
          }]
        },
        legend: {
          // labels:["ggg","dd"],
          display: true
        }
      }
      });
    }
    
    var chartData = {
        labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
        datasets: [{
          backgroundColor: "green",
          label: 'نسبة النجاح',  
          data: [80, 70, 85, 78, 90]
        },
        {
          backgroundColor: "red",
          label: 'نسبة الرسوب',
          data: [20, 25, 15, 22, 10],
        }]
      };
        var chBar = document.getElementById("chBar1");
      if (chBar) {
        new Chart(chBar, {
        type: 'bar',
        data: chartData,
        options: {
          scales: {
            xAxes: [{
              staced:true,
              barPercentage: 0.6,
              categoryPercentage: 0.5
            }],
            yAxes: [{
              // stacked:true,
              // max:100,
              ticks: {
                 
                beginAtZero: true,
                // stacked:true
              }
            }]
          },
          legend: {
            // labels:["ggg","dd"],
            display: true
          }
        }
        });
      }

      var chartData = {
        labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
        datasets: [{
          backgroundColor: "green",
          label: 'نسبة النجاح',  
          data: [80, 70, 85, 78, 90]
        },
        {
          backgroundColor: "red",
          label: 'نسبة الرسوب',
          data: [20, 25, 15, 22, 10],
        }]
      };
        var chBar = document.getElementById("chBar2");
      if (chBar) {
        new Chart(chBar, {
        type: 'bar',
        data: chartData,
        options: {
          scales: {
            xAxes: [{
              staced:true,
              barPercentage: 0.6,
              categoryPercentage: 0.5
            }],
            yAxes: [{
              // stacked:true,
              // max:100,
              ticks: {
                 
                beginAtZero: true,
                // stacked:true
              }
            }]
          },
          legend: {
            // labels:["ggg","dd"],
            display: true
          }
        }
        });
      }

      var chartData = {
        labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
        datasets: [{
          backgroundColor: "green",
          label: 'نسبة النجاح',  
          data: [80, 70, 85, 78, 90]
        },
        {
          backgroundColor: "red",
          label: 'نسبة الرسوب',
          data: [20, 25, 15, 22, 10],
        }]
      };
        var chBar = document.getElementById("chBar3");
      if (chBar) {
        new Chart(chBar, {
        type: 'bar',
        data: chartData,
        options: {
          scales: {
            xAxes: [{
              staced:true,
              barPercentage: 0.6,
              categoryPercentage: 0.5
            }],
            yAxes: [{
              // stacked:true,
              // max:100,
              ticks: {
                 
                beginAtZero: true,
                // stacked:true
              }
            }]
          },
          legend: {
            // labels:["ggg","dd"],
            display: true
          }
        }
        });
      }

      var chartData = {
        labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
        datasets: [{
          backgroundColor: "green",
          label: 'نسبة النجاح',  
          data: [80, 70, 85, 78, 90]
        },
        {
          backgroundColor: "red",
          label: 'نسبة الرسوب',
          data: [20, 25, 15, 22, 10],
        }]
      };
        var chBar = document.getElementById("chBar4");
      if (chBar) {
        new Chart(chBar, {
        type: 'bar',
        data: chartData,
        options: {
          scales: {
            xAxes: [{
              staced:true,
              barPercentage: 0.6,
              categoryPercentage: 0.5
            }],
            yAxes: [{
              // stacked:true,
              // max:100,
              ticks: {
                 
                beginAtZero: true,
                // stacked:true
              }
            }]
          },
          legend: {
            // labels:["ggg","dd"],
            display: true
          }
        }
        });
      }

      var chartData = {
        labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
        datasets: [{
          backgroundColor: "green",
          label: 'نسبة النجاح',  
          data: [80, 70, 85, 78, 90]
        },
        {
          backgroundColor: "red",
          label: 'نسبة الرسوب',
          data: [20, 25, 15, 22, 10],
        }]
      };
        var chBar = document.getElementById("chBar5");
      if (chBar) {
        new Chart(chBar, {
        type: 'bar',
        data: chartData,
        options: {
          scales: {
            xAxes: [{
              staced:true,
              barPercentage: 0.6,
              categoryPercentage: 0.5
            }],
            yAxes: [{
              // stacked:true,
              // max:100,
              ticks: {
                 
                beginAtZero: true,
                // stacked:true
              }
            }]
          },
          legend: {
            // labels:["ggg","dd"],
            display: true
          }
        }
        });
      }
        
      var chartData = {
        labels: ["هندسة حاسوب","هندسة  الالكترونية","هندسة معمارية","هندسة مدنية","هندسة كيميائية","هندسة بترولية"],
        datasets: [{
          backgroundColor: "green",
          label: 'نسبة النجاح',  
          data: [80, 70, 85, 78, 90,70]
        },
        {
          backgroundColor: "red",
          label: 'نسبة الرسوب',
          data: [20, 25, 15, 22, 10,30],
        }]
      };
        var chBar = document.getElementById("chBar6");
      if (chBar) {
        new Chart(chBar, {
        type: 'bar',
        data: chartData,
        options: {
          scales: {
            xAxes: [{
              staced:true,
              barPercentage: 0.6,
              categoryPercentage: 0.5
            }],
            yAxes: [{
              // stacked:true,
              // max:100,
              ticks: {
                 
                beginAtZero: true,
                // stacked:true
              }
            }]
          },
          legend: {
            // labels:["ggg","dd"],
            display: true
          }
        }
        });
      }
        
      