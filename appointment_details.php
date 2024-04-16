<?php
session_start();

if ($_SESSION["user_id"] != "admin") {
    header('Location: signin.php');
    exit;
}
$mysqli = require __DIR__ . "/database.php";
                                              
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/admin_table.css">

    <title>Appointments</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5"><a href="#" class="more">Appointments</a> | <a href="logout_admin.php" class="more">Logout</a></h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Doctor Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Contact Number</th>
            </tr>
          </thead>
          <tbody>
          <?php
    $sql = "SELECT * FROM appointment ORDER BY appointment.id DESC";

$result = mysqli_query($mysqli, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
  ?>
            <tr scope="row"> 
                      <td>
                      <?php echo $row['fName']; ?>
                      </td>
<td><?php echo $row['LName']; ?></td>
                      <td>
                      <?php echo $row['doctor']; ?>
                      </td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phonenum']; ?></td>            
            </tr>
            <?php 
        }
    }
    ?>
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>