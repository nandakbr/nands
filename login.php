<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<html>

    <head>
        <title>Login</title>
        <link rel=stylesheet href="css/style.css">
        <script>
            function validasi() {
		      var username = document.getElementById("username").value;
		      var password = document.getElementById("password").value;
              var secret = document.getElementById("secret").value;
		      if (username != "" && password!="" && secret!="") {
            return true;
		      }else{
			 alert('Username ,Password, dan Secret Key harus di isi !');
            return false;
		          }
            }

        </script>
    </head>

    <body class="bodylog" style="background: #F3F3E7;">
    <div class="container1">
        <img src="img/avatar1.png" class="ava1">
        <div class="text">
        <p class="t1">Welcome Back!</p>
        <p class="t2">Please Login</p>
        </div>
    </div>
    <div class="container2">
     <div class="col">
       <form action="prlogin.php" method="post">
        <input type="text" name=username class="input" placeholder="Username" id="username"><br><br>
        <input type="password" name=password class="input" placeholder="Password" id="password"><br><br>
        <input type="password" name=secret class="input" placeholder="Secret Key" id="secret"><br><br>
        <input type="submit" name="submit" class="loginbtn" value="Login">
       </form> 
     </div>   
    </div>
    </body>
</html>