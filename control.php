<?php include('config.php'); ?>
<?php 
        // $sql = "SELECT device_id FROM device_data where device_id ='KC001'";
        // if ($result = mysqli_query($link, $sql))
        // {
        //   if (mysqli_num_rows($result) > 0)
        //   {
        // while ($row = mysqli_fetch_array($result))
        // {
        //   $machine_no1 = $row['device_id'];
        // }}}      


        // $sql = "SELECT device_id FROM device_data where device_id ='KC002'";
        // if ($result = mysqli_query($link, $sql))
        // {
        //   if (mysqli_num_rows($result) > 0)
        //   {
        // while ($row = mysqli_fetch_array($result))
        // {
        //   $machine_no2 = $row['device_id'];
        // }}}      



        // $sql = "SELECT device_id FROM machine_data where device_id ='kc103'";
        // if ($result = mysqli_query($link, $sql))
        // {
        //   if (mysqli_num_rows($result) > 0)
        //   {
        // while ($row = mysqli_fetch_array($result))
        // {
        //   $machine_no3 = $row['device_id'];
        // }}}      



        // $sql = "SELECT device_id FROM machine_data where device_id ='kc104'";
        // if ($result = mysqli_query($link, $sql))
        // {
        //   if (mysqli_num_rows($result) > 0)
        //   {
        // while ($row = mysqli_fetch_array($result))
        // {
        //   $machine_no4 = $row['device_id'];
        // }}}      


//progress bar code

                // $sql = "SELECT count(device_status)/60 as progs,DATE(time_stamp) AS DAY,TIME_FORMAT(time_stamp, '%h:%i %p') AS t from device_data WHERE device_status = 1 and device_id = 'KC001' GROUP BY DAY(time_stamp) HAVING t BETWEEN '00:01 AM' AND '11:59 PM' AND DAY= CURDATE() ";

                 $sql = "SELECT COUNT(rpm_status)/60 AS progs2 FROM `vtex_device_rpm` WHERE (rpm_status=2 or rpm_status=1) and device_id='28' and DATE(time_stamp)=CURDATE()";



        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $progres2 = $row['progs2'];
          $progress2 = (100 * $progres2)/24;


        }
    }}



                        // $sql2 = "SELECT count(device_status)/60 as progs2,DATE(time_stamp) AS DAY,TIME_FORMAT(time_stamp, '%h:%i %p') AS t from device_data WHERE device_status = 1 and device_id = 'KC002' GROUP BY DAY(time_stamp) HAVING t BETWEEN '00:01 AM' AND '11:59 PM' AND DAY= CURDATE() ";
// for device 2

                $sql = "SELECT COUNT(rpm_status)/60 AS progs FROM `vtex_device_rpm` WHERE (rpm_status=2 or rpm_status=1) and device_id='29' and DATE(time_stamp)=CURDATE()";

        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $progres = $row['progs'];
          $progress = (100 * $progres)/24;

        }
    }}





  $sql = "SELECT COUNT(rpm_status)/60 AS progs3 FROM `vtex_device_rpm` WHERE (rpm_status=2 or rpm_status=1) and device_id='2' and DATE(time_stamp)=CURDATE()";

        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $progres3 = $row['progs3'];
          $progress3 = (100 * $progres3)/24;

        }
    }}







//counter 

                     $sql = "SELECT DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,COUNT(device_status) AS Count,TIME_FORMAT(time_stamp, '%h:%i %p') AS t FROM device_data WHERE device_status = 1 and device_id = 'KC001' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";

        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $counter = $row['Count'];
          $count = $counter; 


        }
    }}


$sql = "SELECT sum(rpm) as rpm1 , DATE(rpm_time) AS DAY,HOUR(rpm_time) AS HOUR,TIME_FORMAT(rpm_time, '%h:%i %p') AS t1 FROM device_rpm WHERE device_id='KC001' GROUP BY DAY(rpm_time), HOUR(rpm_time) HAVING t1 BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";


        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $counter_rpm = $row['rpm1'];
          $count1 = $counter_rpm; 


        }
    }}


// device for KC002


                     $sql = "SELECT DATE(time_stamp) AS DAY,HOUR(time_stamp) AS HOUR,COUNT(device_status) AS Count,TIME_FORMAT(time_stamp, '%h:%i %p') AS t FROM device_data WHERE device_status = 1 and device_id = 'KC002' GROUP BY DAY(time_stamp), HOUR(time_stamp) HAVING t BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";

        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $counter = $row['Count'];
          $count2 = $counter; 


        }
    }}


$sql = "SELECT sum(rpm) as rpm1 , DATE(rpm_time) AS DAY,HOUR(rpm_time) AS HOUR,TIME_FORMAT(rpm_time, '%h:%i %p') AS t1 FROM device_rpm WHERE device_id='KC002' GROUP BY DAY(rpm_time), HOUR(rpm_time) HAVING t1 BETWEEN '00:00 AM' AND '23:59 PM' AND DAY= CURDATE()";


        if ($result = mysqli_query($link, $sql))
        {
          if (mysqli_num_rows($result) > 0)
          {
        while ($row = mysqli_fetch_array($result))
        {
          $counter_rpm = $row['rpm1'];
          $count3 = $counter_rpm; 


        }
    }}




        ?>



