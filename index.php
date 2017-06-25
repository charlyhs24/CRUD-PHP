<?php
include ("functions/database.php");

$usename = 'root';
$password = 'merdeka';

if ( isset($_POST['login']) ) {
  # code...
  if ($_POST['username'] == $usename && $_POST['password'] == $password) {
    # code...
    header('Location: profile.php');
  }else {
    # code...
    echo "LOGIN GAGAL";
  }
}
?>

	<title>LOGIN</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/style.css">
  <style>
	.box{
    margin-top: 30px;
    margin-left: 600px;
		border:5px solid;
		border-color: #666;
		width: 300px;
		height: 300px;
	}
	.container{

		}
	.img-container{
		margin: auto;
    position: relative;
    top: 10px;
	}
  .bg-0{
    margin-left: 30px;
  }
  .jumbotron{
    margin-top: 2px;
    background-color: #e1e1ea;
    padding-bottom: 0px;
    padding-top: 0px;
  }
  #login{
    position: relative;
    left: 10px;
  }
	</style>
<body>
  <div class="container">
    <div class="jumbotron">
      <h4>untuk username dan password dapat Dilihat dibawah ini</h4>
      <p>username : root</p>
      <p>password : merdeka</p><br>
    </div>
  </div>
	<div class="box">
		<form action="index.php" method="post">
			<div class="img-container">
				<img style="margin-left : 120px" src="icon/login.png">
			</div>

			<div class="container bg-0 ">
				<label for="username"><b> Username</b></label><br>
				<input type="text" name="username"><br><br>

				<label for="password"><b>Password</b></label><br>
				<input type="Password" name="password"><br><br>

				<input id="login" style="margin-left: 50px;" type="submit" name="login" value="login">
			</div>
		</form>
	</div>
</body>
</html>

<?php include 'view/footer.php';
