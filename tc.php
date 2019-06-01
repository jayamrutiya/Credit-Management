<?php
session_start();
include "db.php";


	
if(isset($_POST['submit'])){
	if(!empty($_POST['name'])){
		$name = $_POST['name'];
		$q1 = "SELECT current_credit FROM userdata WHERE name='$name'";
		$res = mysqli_query($conn,$q1);
		while($data = mysqli_fetch_array($res,MYSQLI_BOTH)){
			$cc = $data['current_credit'];
		}
		if($cc != 0){


			$qu = "UPDATE userdata SET status='selected' WHERE name='$name'";
			if(mysqli_query($conn,$qu)){
			$_SESSION['name'] = $_POST['name'];
			header("Location:tcmideater.php");
			}else{
			echo mysqli_error($conn);
			}
		}else{
				echo "<script>alert('".$name." have 0 current credit')</script>";
		}
	}else{
	echo "<script>alert('Pls select User')</script>";
}
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>TC</title>
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
	<div class="container">
		<br>
		<div class="row">
			<h2 class="ml-5"><i class="fa fa-exchange mr-5" aria-hidden="true"></i>Select one user for transfer thair  credit to another user.</h2>
		</div>
		<br>
<form action="tc.php" method="post">
	<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Phone_No</th> -->
                    <th>Current_Credit</th>
    				<!-- <th>Select From Transfer</th> -->
                </tr>
            </thead>


            <?php
				$query = "SELECT id,name,email,current_credit FROM userdata";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
					$id = $row['id'];
					$name = $row['name'];
					$email = $row['email'];
					//$phone_no = $row['phone_no'];
					$current_credit = $row['current_credit'];
			?>

            <tbody>
                <tr>
                	
                    <th scope="row"><?php echo $id; ?></th>
                    <th><label><input type="radio" name="name" class="mr-5" value="<?php echo $name; ?>"><?php echo $name; ?></label></th>
                    <!--<td><input type="hidden" name="name" value="<?php echo $name; ?>"><?php echo $name; ?></td>-->
                    <td><?php echo $email; ?></td>
                    <td><?php echo $current_credit; ?></td>
                    
                    
                </tr>
            </tbody>
            <?php

}

?>
			
        </table>
        

<div class="row">
				<input type="submit" name="submit" value="Transfer" class="form-control btn btn-info">
			</div>

<br>	





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</form>
</div>
</body>
</html>