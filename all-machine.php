<?php include('config.php'); ?>
<?php include('control.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>Machine Run Time Dashboard | Viyellatex</title>

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
 font-size: 0.9em;
 height: 10px;
 color:#ffffff;
 margin-bottom: 5px;
}

/* RED dot with blinking for machine offline */ 
  .dot_r{
  height: 12px;
  width: 12px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
  animation: blinker 1.5s linear infinite;
}
@keyframes blinker {  
  50% { opacity: 0; }
}

/* GREEN dot for machine online/running */ 
  .dot_g{
  height: 12px;
  width: 12px;
  background-color: limegreen;
  border-radius: 50%;
  display: inline-block;
}

/* YELLOW dot for machine with issues (i.e slow speed) */ 
  .dot_y{
  height: 12px;
  width: 12px;
  background-color: #ffdd40;
  border-radius: 50%;
  display: inline-block;
}

.progress{
  height: 10px;
  text-shadow: 1px 1px #000000;
}

.progress-bar {
  background-color: rgba(29,195,246,.3) !important;
}

/* to make the mouse pointer invisible on the page */
/*.none {
 cursor: none; 
}*/

</style>

</head>

<body class="none">

<div style="text-align:center; font-size: 26px; color: #ffffff;"><img width="3%" src="assets/img/globe_with_satellites.svg"/><strong>Machine Run Time Dashboard</strong></div>

<div style="text-align:center;color: white;"><?php date_default_timezone_set("Asia/Dhaka");
 echo date("d-M H:i:s ");?></div>

  <div class="row" style="text-shadow: 2px 2px #000000;">
    <div class="col-sm ">
      <div class="b"><b> <h2 style="color:rgba(29,195,246,.9) ;"><i class="tim-icons icon-chart-pie-36"></i><strong>Total: 95 </strong></h2> </b> </div>
    </div>
    <div class="col-sm ">
     <div class="b"><b> <h2 style="color:limegreen;"><i class="tim-icons icon-user-run"></i><strong>Online: 91 </strong></h2> </b> </div>
    </div>
    <div class="col-sm ">
   <div class="b"><b> <h2 style="color:rgba(255,57,65,.9) ;"><i class="tim-icons icon-bell-55"></i><strong>Offline: 4 </strong></h2> </b> </div>
    </div>
  </div>


    <div class="row">


      <div class="col">
        
      <div class="a"><?php  echo "Machine no: " . KC1. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
      </div>




      <div class="col">
        
      <div class="a"><?php  echo "Machine no: " . KC2. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
      </div>

      <div class="col">

      <div class="a"><?php  echo "Machine no: " . KC3. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC4. ""; ?></div>
<?php
$status = "68";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC5. ""; ?></div>
<?php
$status = "55";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">86%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC6. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC7. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">79%</div>
</div> </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC8. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></div>
    </div> 
<div class="space"></div>

          <div class="row">

      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC9. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC10. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC11. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 44%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">44%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC12. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">77%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC13. ""; ?></div>
<?php
$status = "22";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC14. ""; ?></div>
<?php
$status = "0";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC15. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">33%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC16. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 15%; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
</div></div>
</div>

<div class="space"></div>

<div class="row">


      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC17. ""; ?></div>
<?php
$status = "33";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC18. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 22%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">22%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC19. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 29%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">29%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC20. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC21. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC22. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC23. ""; ?></div>
<?php
$status = "55";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC24. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">78%</div>
</div></div>

</div>
<div class="space"></div>

    <div class="row">
      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC25. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
      </div>

      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC26. ""; ?></div>
<?php
$status = "0";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC27. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC28. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC29. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">86%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC30. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC31. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">79%</div>
</div> </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC32. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></div>
    </div> 
<div class="space"></div>

          <div class="row">

      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC33. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC34. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC35. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 44%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">44%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC36. ""; ?></div>
<?php
$status = "0";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">77%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC37. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC38. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC39. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">33%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC40. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
</div></div>
</div>

<div class="space"></div>

<div class="row">


      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC41. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC42. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 22%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">22%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC43. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 29%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">29%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC44. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC45. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC46. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC47. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC48. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">78%</div>
</div></div>

</div>

<div class="space"></div>


    <div class="row">
      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC49. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
      </div>

      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC50. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC51. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC52. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC53. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">86%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC54. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC55. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">79%</div>
</div> </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC56. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></div>
    </div> 
<div class="space"></div>

          <div class="row">

      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC57. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC58. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC59. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 44%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">44%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC60. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">77%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC61. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC62. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC63. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">33%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC64. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
</div></div>
</div>

<div class="space"></div>

<div class="row">


      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC65. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC66. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 22%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">22%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC67. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 29%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">29%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC68. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC69. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC70. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC71. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC72. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">78%</div>
</div></div>

</div>
<div class="space"></div>

    <div class="row">
      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC73. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
      </div>

      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC74. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC75. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC76. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC77. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">86%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC78. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC79. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">79%</div>
</div> </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC80. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></div>
    </div> 
<div class="space"></div>

          <div class="row">

      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC81. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC82. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC83. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 44%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">44%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC84. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">77%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC85. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC86. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC87. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">33%</div>
</div> </div>
      <div class="col" >

      <div class="a"> <?php  echo "Machine no: " . KC88. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?> 
    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
</div></div>
</div>

<div class="space"></div>

<div class="row">


      <div class="col">
        
      <div class="a"> <?php  echo "Machine no: " . KC89. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
      </div>

       <div class="col">
      <div class="a"> <?php  echo "Machine no: " . KC90. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 22%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">22%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC91. ""; ?></div>
<?php
$status = "22";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 29%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">29%</div>
</div>
      </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC92. ""; ?></div>
<?php
$status = "22";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
</div>
       </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC93. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "1":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
       </div>
       <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC94. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
</div> </div>
      <div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC95. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>

<div class="col">

      <div class="a"> <?php  echo "Machine no: " . KC96. ""; ?></div>
<?php
$status = "1";
switch ($status) {
    case "0":
        echo '<div class="dot_r"> </div>';
        break;
    case "1":
         echo '<div class="dot_g"> </div>';
        break;
    default:
        echo '<div class="dot_y"> </div>';
}
?>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div> </div>

      
</div>
<div class="footer">Powered by: <a href:"http://datasoft-bd.com/">DataSoft Systems Bangladesh Limited</a></div>

<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },50000);
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

  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>

</body>

</html>
