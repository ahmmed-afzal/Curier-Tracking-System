<?php 
include_once 'Database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="index.php">Tracking System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Branch1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin2.php">Branch2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="admin3.php">Branch3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="admin4.php">Branch4</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="container">
  <h1 class="text-center top">Tracking System</h1>
  <div class="tbl">
        <table class="table table-striped" style="margin-top:20px;">
            <tr>
              <th>Name</th>
              <th>Time</th>
              <th>Location</th>
              <th>Total time</th>
            </tr>
        <?php 
            $query = "select * from tbl_admin1";
            $result = $db ->select($query);
            if($result !=false){
                while($value = mysqli_fetch_array($result)){
        ?>
        <tr>
                  <td><?= $value['name']; ?></td>
                  <td><?= $value['time']; ?> am/pm</td>
                  <td><?= $value['location']; ?></td>
                  <td><?= $value['total_time']; ?></td>
                </tr>
              <?php }} ?>
        </div>
        
    <form  method="post" action="auth1.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Admin name">
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="text" class="form-control" id="time" name="time" placeholder="Add time">
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="admin location">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form> 
    <div class="mt-2">
    <a href="admin2.php" class="btn btn-dark">Next Branch</a>
    </div>
  </div>  
</body>
</html>