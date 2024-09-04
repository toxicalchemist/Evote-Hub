
<?php 
    session_start();
    require_once("config.php");

    if($_SESSION['key'] != "AdminKey")
    {
        echo "<script> location.assign('logout.php'); </script>";
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel - E-vote hub</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body onload="initClock()">
    
    <div class="container-fluid">
        <div class="row bg-black text-white">
            <div class="col-1"> 
                <img src="../assets/images/logo.gif" width="80px"/>
            </div>
            <div class="col-11 my-auto">
                <h3> E-vote hub: Online Voting System  - <small> Welcome  <?php echo $_SESSION['username']; ?></small> </h3>

       
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span><br>
    
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
</div>

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    
    </script>
            </div>
        </div>
