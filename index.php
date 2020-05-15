<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}

        include('config.php');
        $sql = "SELECT * FROM lampu"; //You don't need a ; like you do in SQL
        $result = mysqli_query($db, "SELECT * FROM lampu");
        $temp = mysqli_query($db, "SELECT Temp From data ORDER BY id_data DESC LIMIT 1");
        $hum = mysqli_query($db, "SELECT Humid From data ORDER BY id_data DESC LIMIT 1");
        $datatemp = mysqli_fetch_array($temp);
        $datahum = mysqli_fetch_array($hum);
	?>

<html>

    <head>
        <meta http-equiv="refresh" content="60">
        <title>Dashboard</title>
        <link rel=stylesheet href="css/style.css">
        <script>
           function startTime() {
           var today = new Date();
           var h = today.getHours();
           var m = today.getMinutes();
           var d = today.getDate();
           var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
           var day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
            document.getElementById("date").innerHTML = d + " " + months[today.getMonth()] + " , " +day[today.getDay()];
            m = checkTime(m);
            document.getElementById('clock').innerHTML = h + ":" + m;
            document.getElementById('date').innerHTML = da + dy + "," + mo ;
           var t = setTimeout(startTime, 500);
           }
            function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
            }
            
        </script>
    </head>
    
    <body class="bodyin" onload="startTime()">
        <p class="hey">Hi, User!</p>
        <div class=sidebar>
        <img class="ava2" src="img/avatar1.png">
        <div class="dash">
            <div class="dimg">
            </div>
        </div>
        
        <a href="logout.php">
        <div class="logout">
            <div class="limg">
            </div>
        </div>
        </a>
        </div>
        
        <div class="overview">
            <p class="title">Overview</p>
            <div class="temp">
            <?php echo "<p class='numa'>".$datatemp['Temp']."°C</p>" ?>
            <p class="stitlet">Temp</p>
            </div>
            
            <div class="humid">
            <?php echo "<p class='num'>".$datahum['Humid']."</p>" ?>
            <p class="stitle">Humid</p>
            </div>
        </div>
        
        <div class="chart">
        <p class="titlealt">Chart</p>
        <p class="not">Content Not Yet Available</p>
        </div>
        
        <div class="date">
        <p id="clock" style="font-family: Segoe UI; color: black; font-weight: bold; font-size:250%;margin-left:37%; position:relative; bottom:8%;"></p>
        <p id="date" style="font-family: Segoe UI Light; color: #FC6E5E; font-weight: bold; font-size:180%;text-align:center; position:relative; bottom:27%;"></p>
        </div>
        
        <div class="control">
        <p class="titlealt">Chats</p>
        <div class="lar">
        <img src="img/lar.png" class="larimg">
        <p class="chittle">Lara Jean</p>
        <p class="chtext">Hello, this is your daily report. Temp : 27°C...</p>
        </div>
        <div class="sab">
        <img src="img/sab.png" class="sabimg">
        <p class="chittle">Sabrina</p>
        <p class="chtext">Hello, this is your daily report. Temp : 18°C...</p>
        </div>
        </div>
    </body>
    
</html>