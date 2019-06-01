<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
	<title>Credit Management</title>
	<style type="text/css">
		
	{

      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
  


    .button{
	margin: 0;
	padding: 0;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	height: 100vh;
}
.button a{
	position: relative;
	padding: 15px 40px;
	margin: 0 10px;
	border: 2px solid #262626;
	font-family: sans-serif;
	display: inline-block;
	text-transform: uppercase;
	text-decoration: none;
	color: #262626;
	font-size: 24px;
	letter-spacing: 4px;
	transition: 0.5s;
}
.button a:hover{
	color: #fff;
}
.button a:before{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #fff;
	z-index: -2;
}
.button a:after{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: -1;
}
.button a:nth-child(1):after{
	background: #44acff;
	transition: transform 0.5s;
	transform-origin: right;
	transform: scaleY(0);
}
.button a:hover:nth-child(1):after{
	transition: transform 0.5s;
	transform-origin: left;
	transform: scaleY(1);
}
.button a:nth-child(2):after{
	background: #44acff;
	transition: transform 0.5s;
	transform-origin: bottom;
	transform: scaleX(0);
}
.button a:hover:nth-child(2):after{
	transition: transform 0.5s;
	transform-origin: top;
	transform: scaleX(1);
}
.button a:nth-child(3):after{
	background: #44acff;
	transition: transform 0.5s;
	transform-origin: right;
	transform: scaleY(0);
}
.button a:hover:nth-child(3):after{
	transition: transform 0.5s;
	transform-origin: left;
	transform: scaleY(1);
}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php">Credit Management</a>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="tc.php">Transfer Credit</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="allusers.php">See All Users</a>
                  </li class="nav-item">
              </ul>
          </div>
    </nav>


<div class="button">
		<a href="allusers.php"><b>All Users</b></a>
		<a href="tc.php"><b>Transfer Credit</b></a>
		<a href="sou.php"><b>See One User</b></a>
	</div>





	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>