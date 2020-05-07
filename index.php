<?php include('config.php'); ?>
<?php include('control.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>



  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>Machine Run Time Dashboard | RMG Tex</title>

  <!-- Fonts and icon9s     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project
  <link href="./assets/demo/demo.css" rel="stylesheet" /> -->

<style type="text/css">
  .space{
    height: 15px
  }
  .b{
   text-align: center;
   background-color: 000000
   font-color :#ffffff;
  }

.a{
 font-size: 1em;
 /*height: 10px;*/
 color:#ffffff;
 /*margin-bottom: 5px;*/
}


.b{
 font-size: 0.8em;
 /*height: 10px;*/
 color:#ffffff;
 /*margin-bottom: 5px;*/
}



/* RED dot with blinking for machine offline */ 
  .dot_r{
  height: 15px;
  width: 15px;
  background-color: red;
  border-radius: 50%;

}


/* GREEN dot for machine online/running */ 
  .dot_g{
  height: 15px;
  width: 15px;
  background-color: limegreen;
  border-radius: 50%;
}

/* YELLOW dot for machine with issues (i.e slow speed) */ 
  .dot_y{
  height: 15px;
  width: 15px;
  background-color: #ffdd40;
  border-radius: 50%;
  
}


.progress{
  /*background-color: #C91106;*/
  background-color: #B92700 !important;
  height: 20px;
  text-shadow: 1px 1px #000000;
}

.progress-bar {
  /*background-color: rgba(29,195,246,.3) !important;*/

  background-color: #04751F !important;
}



/*high chart js*/


.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}



</style>

</head>

<body style="margin-left:15px;">
   
<div style="text-align:center; font-size: 26px; color: #ffffff;"><img width="3%" src="assets/img/globe_with_satellites.svg"/><strong>Machine Run Time Dashboard</strong></div>

<div style="text-align:center;color: white;"><?php date_default_timezone_set("Asia/Dhaka");
 echo date("d-M H:i ");?></div>
<div style="text-align:center;color:limegreen;">
    <!-- <a type="button" class="btn btn" href="all-machine.php">All Machine</a> -->
</div>
   
<br>
      

<div class="container" align="center">
    <table>
      <tr>
            <th><div class="dot_r"></div></th>
              <th><div class="b">Machine On/Off/Error &nbsp;</div></th>
              <th ><div class="dot_g"></div></th>
              <th><div class="b">Running OK&nbsp;</div></th>
              <th ><div class="dot_y"></div></th>
              <th><div class="b">Running in Low RPM &nbsp;</div></th>
              
      </tr>
    
      </table>
 </div>



<!--<div class="row" style="text-shadow: 2px 2px #000000;">
&nbsp;
</div>
<div class="row" style="text-shadow: 2px 2px #000000;">
&nbsp;
</div>-->
 
 
 
 <br> <br><br>
 

  <div class="row">

  	


    <div class="col-lg-4 col-md-4 col-sm-4"> 
      <div class="a"><?php  echo "Machine no: &nbsp; " . "065". ""; ?></div>

        <table>
  <td class="a">Machine on/off &nbsp; </td>
  <td> 
  <?php
      include('config.php');
      $sql = "SELECT adc_status FROM vtex_device_adc  where device_id = '28' order by id desc limit 1";
      if ($result = mysqli_query($link, $sql))
      {
          if (mysqli_num_rows($result) > 0)
        {
        while ($row = mysqli_fetch_array($result))
        {
          $status = $row['adc_status'];
        }}}

        switch ($status) {
            case "0":
                echo '<div class="dot_r"> </div>';
                break;
            case "1":
                 echo '<div class="dot_g"> </div>';
                break;
            case "2":
                echo '<div class="dot_y"> </div>';
              }
              ?>
  </td>
  
  <td class="a">&nbsp;&nbsp;Machine status &nbsp; </td>
  <td> 
  <?php
      include('config.php');
      $sql = "SELECT rpm_status FROM vtex_device_rpm  where device_id = '28' order by id desc limit 1";
      if ($result = mysqli_query($link, $sql))
      {
          if (mysqli_num_rows($result) > 0)
        {
        while ($row = mysqli_fetch_array($result))
        {
          $status = $row['rpm_status'];
        }}}

        switch ($status) {
            case "0":
                echo '<div class="dot_r"> </div>';
                break;
            case "1":
                 echo '<div class="dot_g"> </div>';
                break;
            case "2":
                echo '<div class="dot_y"> </div>';
              }
              ?>
  </td>
  
  </table>
      
      <div class="a">
        <?php

      include('config.php');
      if ($link === false)
    {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT device_rpm FROM vtex_device_rpm where device_id = '28' order by id desc limit 1 ";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "Speed: &nbsp; " . $row['device_rpm'] . " rpm";
        }
      
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
      </div>

   <div class="a">
        <?php

      include('config.php');
      if ($link === false)
    {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT SUM(device_rpm) AS vtcount from vtex_device_rpm WHERE device_id = '28' AND cast(time_stamp as date) = CURDATE()";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "Counter: &nbsp; " . $row['vtcount'] . "";
        }
      
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
      </div>

     


   <div class="row">
      <div class="col-sm-2" >
			<P class="a">Runtime  </P>
      </div>
      <div class="col-sm-10 ">
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($progress2) ; ?>%">
      <?php echo round($progress2) ; ?>%
    </div>
  </div>
</div>
</div>


          
    <div id="container001"></div> </div>


    <div class="col-lg-4 col-md-4 col-sm-4"> 
      <div class="a"><?php  echo "Machine no: &nbsp; " . "066". ""; ?></div>

        <table>
  <td class="a">Machine on/off &nbsp; </td>
  <td> 
  <?php
      include('config.php');
      $sql = "SELECT adc_status FROM vtex_device_adc  where device_id = '29' order by id desc limit 1";
      if ($result = mysqli_query($link, $sql))
      {
          if (mysqli_num_rows($result) > 0)
        {
        while ($row = mysqli_fetch_array($result))
        {
          $status = $row['adc_status'];
        }}}

        switch ($status) {
            case "0":
                echo '<div class="dot_r"> </div>';
                break;
            case "1":
                 echo '<div class="dot_g"> </div>';
                break;
            case "2":
                echo '<div class="dot_y"> </div>';
              }
              ?>
  </td>
  
  <td class="a"> &nbsp; &nbsp;Machine status &nbsp; </td>
  <td> 
  <?php
      include('config.php');
      $sql = "SELECT rpm_status FROM vtex_device_rpm  where device_id = '29' order by id desc limit 1";
      if ($result = mysqli_query($link, $sql))
      {
          if (mysqli_num_rows($result) > 0)
        {
        while ($row = mysqli_fetch_array($result))
        {
          $status = $row['rpm_status'];
        }}}

        switch ($status) {
            case "0":
                echo '<div class="dot_r"> </div>';
                break;
            case "1":
                 echo '<div class="dot_g"> </div>';
                break;
            case "2":
                echo '<div class="dot_y"> </div>';
              }
              ?>
  </td>
  </table>

      <div class="a">
        <?php

      include('config.php');
      if ($link === false)
    {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT device_rpm FROM vtex_device_rpm where device_id = '29' order by id desc limit 1  ";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "Speed: &nbsp; " . $row['device_rpm'] . " rpm";
        }
      
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?></div>


<div class="a">
        <?php

      include('config.php');
      if ($link === false)
    {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT SUM(device_rpm) AS vtcount2 from vtex_device_rpm WHERE device_id = '29' AND cast(time_stamp as date) = CURDATE()";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "Counter: &nbsp; " . $row['vtcount2'] . "";
        }
      
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
      </div>

     

   <div class="row">
      <div class="col-sm-2" >
			<P class="a">Runtime  </P>
      </div>
      <div class="col-sm-10 ">
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($progress) ; ?>%">
      <?php echo round($progress) ; ?>%
    </div>
  </div>
</div>
</div>


 

     <div id="container002"></div>
     <div id="containerrssi101"></div>

      </div>





    <div class="col-lg-4 col-md-4 col-sm-4"> 
      <div class="a"><?php  echo "Machine no: &nbsp; " . "016". ""; ?></div>

        <table>
  <td class="a">Machine on/off &nbsp; </td>
  <td> 
  <?php
      include('config.php');
      $sql = "SELECT adc_status FROM vtex_device_adc  where device_id = '2' order by id desc limit 1";
      if ($result = mysqli_query($link, $sql))
      {
          if (mysqli_num_rows($result) > 0)
        {
        while ($row = mysqli_fetch_array($result))
        {
          $status = $row['adc_status'];
        }}}

        switch ($status) {
            case "0":
                echo '<div class="dot_r"> </div>';
                break;
            case "1":
                 echo '<div class="dot_g"> </div>';
                break;
            case "2":
                echo '<div class="dot_y"> </div>';
              }
              ?>
  </td>
  
  <td class="a"> &nbsp; &nbsp;Machine status &nbsp; </td>
  <td> 
  <?php
      include('config.php');
      $sql = "SELECT rpm_status FROM vtex_device_rpm  where device_id = '2' order by id desc limit 1";
      if ($result = mysqli_query($link, $sql))
      {
          if (mysqli_num_rows($result) > 0)
        {
        while ($row = mysqli_fetch_array($result))
        {
          $status = $row['rpm_status'];
        }}}

        switch ($status) {
            case "0":
                echo '<div class="dot_r"> </div>';
                break;
            case "1":
                 echo '<div class="dot_g"> </div>';
                break;
            case "2":
                echo '<div class="dot_y"> </div>';
              }
              ?>
  </td>
  </table>

      <div class="a">
        <?php

      include('config.php');
      if ($link === false)
    {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT device_rpm FROM vtex_device_rpm where device_id = '2' order by id desc limit 1  ";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "Speed: &nbsp; " . $row['device_rpm'] . " rpm";
        }
      
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?></div>


<div class="a">
        <?php

      include('config.php');
      if ($link === false)
    {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT SUM(device_rpm) AS vtcount from vtex_device_rpm WHERE device_id = '2' AND cast(time_stamp as date) = CURDATE()";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            echo "Counter: &nbsp; " . $row['vtcount'] . "";
        }
      
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
      </div>

     

   <div class="row">
      <div class="col-sm-2" >
			<P class="a">Runtime  </P>
      </div>
      <div class="col-sm-10 ">
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($progress3) ; ?>%">
      <?php echo round($progress3) ; ?>%
    </div>
  </div>
</div>
</div>


 

     <div id="container003"></div>
     <div id="containerrssi102"></div>

      </div>







 

</div>



      
     


<div class="footer">Powered by: <a href:"http://datasoft-bd.com/">DataSoft Systems Bangladesh Limited</a></div>

<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },60000);
</script>



  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script>



<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="plugins/moment/moment.min.js"></script> -->
<!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<?php
$host = 'localhost';
$user = 'root';
$pass = 'Ds@iot123';
$db = 'iiot';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$Count = '';
$t = '';
$RPM = '';
$sql = "SELECT SUM(device_rpm)/60 AS RPM,  DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,COUNT(rpm_status) AS Count,TIME_FORMAT(time_stamp, '%h:%i %p') AS t FROM vtex_device_rpm WHERE rpm_status > 0 AND device_id = '28' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result))
{

$RPM = $RPM . '"' . $row['RPM'] . '",';
    $Count = $Count . '"' . $row['Count'] . '",';
        $t = $t . '"' . $row['t'] . '",';


    $runtime[] = $row['Count'];
    $rpm[] = round($row['RPM']);

}


?>

<script>
Highcharts.chart('container001', {
    chart: {
      backgroundColor:'#0000',
      height: 250,
        zoomType: 'xy'
    },

        title: {
        text: ''
    },
    xAxis: [{
        categories: [<?php echo $t; ?>],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value} rpm',
            style: {
                color: '#ffffff'
            }
        },
        title: {
            text: 'Avg. RPM/hr ',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Runtime/hr',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} min',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
       enabled: false
    },




        plotOptions: {
        series: {
            animation: false,
            color: '#344675'
        }
    },
    series: [{
        name: 'Runtime/hr',
        type: 'column',
        yAxis: 1,
         data: [<?php echo join($runtime, ',') ?>]
    }, {
      color: '#ffffff',
        name: 'Avg. RPM/hr',
        type: 'spline',
        data: [<?php echo join($rpm, ',') ?>]
    }]
});
</script>



<?php
$host = 'localhost';
$user = 'root';
$pass = 'Ds@iot123';
$db = 'iiot';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$RPM1 = '';
$Count1 = '';
$t1 = '';
$sql = "SELECT SUM(device_rpm)/60 AS RPM1,  DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,COUNT(rpm_status) AS Count1,TIME_FORMAT(time_stamp, '%h:%i %p') AS t1 FROM vtex_device_rpm WHERE rpm_status > 0 AND device_id = '29' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t1 BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";


$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result))
{

    $RPM1 = $RPM1 . '"' . $row['RPM1'] . '",';
    $Count1 = $Count1 . '"' . $row['Count1'] . '",';
    $t1 = $t1 . '"' . $row['t1'] . '",';

         $runtime1[] = $row['Count1'];
          $rpm1[] = round($row['RPM1']);
  
}

?>



<script>
Highcharts.chart('container002', {
    chart: {
    	backgroundColor:'#0000',
    	height: 250,
        zoomType: 'xy'
    },

        title: {
        text: ''
    },
    xAxis: [{
        categories: [<?php echo $t1; ?>],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value} rpm',
            style: {
                color: '#ffffff'
            }
        },
        title: {
            text: 'Avg. RPM/hr ',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Runtime/hr',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} min',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
       enabled: false
    },




        plotOptions: {
        series: {
            animation: false,
            color: '#344675'
        }
    },
    series: [{
        name: 'Runtime/hr',
        type: 'column',
        yAxis: 1,
         data: [<?php echo join($runtime1, ',') ?>]
    }, {
    	color: '#ffffff',
        name: 'Avg. RPM/hr',
        type: 'spline',
        data: [<?php echo join($rpm1, ',') ?>]
    }]
});
</script>



<?php
$host = 'localhost';
$user = 'root';
$pass = 'Ds@iot123';
$db = 'iiot';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$RPM2 = '';
$Count2 = '';
$t2 = '';
$sql = "SELECT SUM(device_rpm)/60 AS RPM2,  DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,COUNT(rpm_status) AS Count2,TIME_FORMAT(time_stamp, '%h:%i %p') AS t2 FROM vtex_device_rpm WHERE rpm_status > 0 AND device_id = '2' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t2 BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";


$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result))
{

    $RPM2 = $RPM2 . '"' . $row['RPM2'] . '",';
    $Count2 = $Count2 . '"' . $row['Count2'] . '",';
    $t2 = $t2 . '"' . $row['t2'] . '",';

         $runtime2[] = $row['Count2'];
          $rpm2[] = round($row['RPM2']);
  
}

?>



<script>
Highcharts.chart('container003', {
    chart: {
    	backgroundColor:'#0000',
    	height: 250,
        zoomType: 'xy'
    },

        title: {
        text: ''
    },
    xAxis: [{
        categories: [<?php echo $t2; ?>],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value} rpm',
            style: {
                color: '#ffffff'
            }
        },
        title: {
            text: 'Avg. RPM/hr ',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Runtime/hr',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} min',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
       enabled: false
    },




        plotOptions: {
        series: {
            animation: false,
            color: '#344675'
        }
    },
    series: [{
        name: 'Runtime/hr',
        type: 'column',
        yAxis: 1,
         data: [<?php echo join($runtime2, ',') ?>]
    }, {
    	color: '#ffffff',
        name: 'Avg. RPM/hr',
        type: 'spline',
        data: [<?php echo join($rpm2, ',') ?>]
    }]
});
</script>





<?php
$host = 'localhost';
$user = 'root';
$pass = 'Ds@iot123';
$db = 'iiot';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$RSSI = '';
$HOUR = '';
$t101 = '';
$sql = "SELECT AVG(rssi) AS RSSI, DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,TIME_FORMAT(time_stamp, '%h:%i %p') AS t101 FROM vtex_device_adc WHERE device_id = '29' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t101 BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";


$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result))
{

$RSSI = $RSSI . '"' . $row['RSSI'] . '",';
        $t101 = $t101 . '"' . $row['t101'] . '",';



    $rssi1[] = round($row['RSSI']);

    // echo  $rssi1;
    // echo  $t101;

}


?>

<script>
Highcharts.chart('containerrssi101', {
    chart: {
      backgroundColor:'#0000',
      height: 250,
        zoomType: 'xy'
    },

        title: {
        text: ''
    },
    xAxis: [{
        categories: [<?php echo $t101; ?>],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value} rpm',
            style: {
                color: '#ffffff'
            }
        },
        title: {
            text: 'Avg. RPM/hr ',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Runtime/hr',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} min',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
       enabled: false
    },




        plotOptions: {
        series: {
            animation: false,
            color: '#344675'
        }
    },
    series: [{
        name: 'Runtime/hr',
        type: 'line',
        yAxis: 1,
         data: [<?php echo join($rssi1, ',') ?>]
    }]
});
</script>




<?php
$host = 'localhost';
$user = 'root';
$pass = 'Ds@iot123';
$db = 'iiot';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$RSSI2 = '';
$HOUR2 = '';
$t102 = '';
$sql = "SELECT AVG(rssi) AS RSSI2, DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,TIME_FORMAT(time_stamp, '%h:%i %p') AS t102 FROM vtex_device_adc WHERE device_id = '2' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t102 BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";


$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result))
{

$RSSI2 = $RSSI2 . '"' . $row['RSSI2'] . '",';
        $t102 = $t102 . '"' . $row['t102'] . '",';



    $rssi2[] = round($row['RSSI2']);

}


?>

<script>
Highcharts.chart('containerrssi102', {
    chart: {
      backgroundColor:'#0000',
      height: 250,
        zoomType: 'xy'
    },

        title: {
        text: ''
    },
    xAxis: [{
        categories: [<?php echo $t102; ?>],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value} rpm',
            style: {
                color: '#ffffff'
            }
        },
        title: {
            text: 'Avg. RPM/hr ',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Runtime/hr',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} min',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
       enabled: false
    },




        plotOptions: {
        series: {
            animation: false,
            color: '#344675'
        }
    },
    series: [{
        name: 'Runtime/hr',
        type: 'line',
        yAxis: 1,
         data: [<?php echo join($rssi2, ',') ?>]
    }]
});
</script>


</body>

</html>



