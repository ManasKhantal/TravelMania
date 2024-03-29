<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Mania | Bus Booking</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="css/icon.ico" type="image/x-icon">
</head>
<style>
  .main {
    display: flex;
    flex-direction: row;
    margin: 70px 130px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: white;
  }
  .container{
    background-color: black;
    opacity: 0.8;
    padding: 30px 120px 40px 80px;
    border-radius: 10px;
  }
  .image {
    text-align: center;
    margin-top: 80px;
    margin-left: 300px;
  }
  .button{
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  }
  .button:hover{
    background-color: gold;
  }
  body{
    background-image: url(images/51.jpg);
    background-size: 100% 100%;
  }
  .travel{
    padding: 5px 20px 5px 20px ;
  }
</style>

<body>
  <div class="header1">
    <img src="css/logo.png" class="tourImage" alt="logo">
    <h1 class="header">Travel Mania</h1>
    <nav class="navigation">
    <a href=""> HI_<?php echo strtoupper($_SESSION["name"]); ?></a>
            <a href="logout.php">LOGOUT</a>
    </nav>
</div>
  <div class="main">
    <div class="container">

        <h1>BOOK A BUS</h1>
      <form class="" action="searchbus.php" method="post">
        <div >
          <label class="form-label">Origin</label><br>
          <select name="origin" id="" class="travel">
            <option value="" disabled selected>Select</option>
            <?php
            include "config.php";
            $sql="SELECT * FROM place;";
            $result=mysqli_query($conn,$sql) or die("Query Unsucessful");
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
                 <option value="<?php echo $row['place_id']?>"><?php echo $row['place_name']?></option>
            <?php
            }
          ?>
          </select><br><br>
        </div>
        <div >
          <label class="form-label">Destination</label><br>
          <select name="destination" id="" class="travel">
            <option value="" disabled selected>Select</option>
            <?php
            include "config.php";
            $sql="SELECT * FROM place;";
            $result=mysqli_query($conn,$sql) or die("Query Unsucessful");
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
                 <option value="<?php echo $row['place_id']?>"><?php echo $row['place_name']?></option>
            <?php
            }
          ?>
          </select><br><br>
        </div>
        <div >
          <label class="form-label">No of passengers</label><br>
          <input type="number" class="form-control" name="passengers" required><br><br>
        </div>
        <div>
          <label class="form-label">Departure Date</label><br>
          <input type="date" class="form-control" name="departure_date" required><br><br>
        </div>
        <br>
        <div >
          <input type="submit" class="button" name="search_bus">
        </div>
      </form>
    </div>
    <div class="image">
      <img src="images/bus.jpg" alt="" style="border-style: solid; border-width: 5px;border-color: burlywood;">
    </div>
  </div>
</body>

</html>