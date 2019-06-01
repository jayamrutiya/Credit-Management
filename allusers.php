<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   	<title>ALL users</title>
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

	<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone_No</th>
                    <th>Current_Credit</th>
                </tr>
            </thead>


            <?php
				$query = "SELECT id,name,email,phone_no,current_credit FROM userdata";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
					$id = $row['id'];
					$name = $row['name'];
					$email = $row['email'];
					$phone_no = $row['phone_no'];
					$current_credit = $row['current_credit'];
			?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $id; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone_no; ?></td>
                    <td><?php echo $current_credit; ?></td>
                </tr>
            </tbody>
            <?php
}
?>
        </table>







 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</div>
</body>
</html>