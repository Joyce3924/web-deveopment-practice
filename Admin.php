<?php

$car= new mysqli("localhost", "username", "password", "database_name");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $small_vehicle_price = $_POST["small_vehicle_price"];
  $medium_vehicle_price = $_POST["medium_vehicle_price"];
  $large_vehicle_price = $_POST["large_vehicle_price"];
$truck_price=$_POST["truck_price"];
  
  $stmt = $db->prepare("UPDATE parking_prices SET small_vehicle_price = ?, medium_vehicle_price = ?, large_vehicle_price = ?,truck_price=?");
  $stmt->bind_param("ddd", $small_vehicle_price, $medium_vehicle_price, $large_vehicle_price,$truck_price);
  $stmt->execute();

  
  echo "Prices updated successfully!";
}


$result = $db->query("SELECT small_vehicle_price, medium_vehicle_price, large_vehicle_price FROM parking_prices");
$row = $result->fetch_assoc();
$small_vehicle_price = $row["small_vehicle_price"];
$medium_vehicle_price = $row["medium_vehicle_price"];
$large_vehicle_price = $row["large_vehicle_price"];
$truck_price=$row["truck_price"];
?>


<h2>Update Parking Prices</h2>
<form method="post">
  <label for="small_vehicle_price">small vehicle Price:</label>
  <input type="number" id="small_vehicle_price" name="small_vehicle_price" value="<?php echo $small_vehicle_price; ?>"><br><br>

  <label for="medium_vehicle_price">Medium vehicle Price:</label>
  <input type="number" id="medium_vehicle_price" name="medium_vehicle_price" value="<?php echo $medium_vehicle_price; ?>"><br><br>

  <label for="large_vehicle_price">large vehicle Price:</label>
  <input type="number" id="large_vehicle_price" name="large_vehicle_price" value="<?php echo $large_vehicle_price; ?>"><br><br>
  <label for="truck_price">truck price:</label>
  <input type="number" id="truck_price" name="truck_price" value="<?php echo $truck_price;?>"><br><br>
 
  <button type="submit">Update Prices</button>
</form>
