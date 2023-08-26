<?php 
require_once "connection.php";

if (isset($_REQUEST["submit"])){
  $id=$_REQUEST["id"];
  $name=$_REQUEST["name"];
  $date=$_REQUEST["date"];
  $dob=$_REQUEST["dob"];
  $phone=$_REQUEST["phone"];
  $coach=$_REQUEST["coach"];


  $ins="INSERT into member (id,name,date,dob,phone,coach) VALUES ('$id','$name','$date','$dob','$phone','$coach')";
  $query = mysqli_query($con, $ins);

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF">
        <meta name ="viewport" content="width=device-device,initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>THE PLAY MACKERS </title>
    </head>
    <body>
        <!--Navbar start-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="admin-login.php"><img src="./assets./logo.png" alt="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Gym Management System</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="billing.php">Billing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="coach.php">coach</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="members.php">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="receptionist.php">Receptionist</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    <!--navbar end-->
    <!--form start-->
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="NAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of joining</label>
    <input type="text" name="date" class="form-control" id="inputAddress" placeholder="Date">
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of Birth</label>
    <input type="text" name="dob" class="form-control" id="inputAddress" placeholder="Date of birth">
  </div>
  <div class="form-group">
    <label for="inputAddress">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputAddress" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="inputAddress2">coach</label>
    <input type="text" name="coach" class="form-control" id="inputAddress2" placeholder="coach">
  </div>   
  <div class="form-group">
    <input type="submit" name="submit" class="form-control" id="inputAddress2" value="Submit">
  </div>   
</form>
    <!--form end-->





        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>