<?php  
 $connect = mysqli_connect("localhost", "root", "", "courier_db");  
 $query = "SELECT uptime as number FROM server_live GROUP BY uptime ";  
 $querys = "SELECT downtime as number1 FROM server_live GROUP BY downtime ";  
 $result = mysqli_query($connect, $query, $querys);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Database Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['number', 'number1'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["number"]."', ".$row["number1"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Postal Types',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Postal Type Statistics</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  