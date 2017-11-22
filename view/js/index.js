var App = (function (app) {

    var load = function () {
      var table = $('#tblVariables').DataTable();
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      $( "#tabs" ).tabs();
      $('.clsCambio').change(drawChart);
    };

    var drawChart = function () {
      $('#inpTiempo').val($('#inpTiempos').val());
        $.ajax({
          url : 'controller/Simulacion.php',
          data : $('#frmVariables').serialize(),
          type : 'POST',
          dataType: "json",
          success : function(json) {
            var aGrafica = [];
            aGrafica.push(['Años', 'valores']);
            var iAnos = 0;
            if($('#inpTiempo').val() < 1) {
              iAnos = 3;
            } else{
              iAnos = $('#inpTiempo').val();
            }
            for (var i = 0; i < iAnos; i++) {
              aGrafica.push([json[i][0], json[i][1]]);
            }
            var data = google.visualization.arrayToDataTable(aGrafica);
            var options = {
              title: 'Simulacion ' + iAnos + ' años' ,
              legend: { position: 'bottom' }
            };
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          },
          error : function(xhr, status) {
              alert('Disculpe, existió un problema');
          }
      });
    };

    return {
        load: load
    };
})(App);

App.load();
