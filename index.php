<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1> Three Equal Columns</h1>
 <?php 
    include 'conn.php';
    include 'action_page.php';

   ?> 

    <?php 

// Select all rows from the playstation_users table
$query = "SELECT * FROM gamers";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
  // Start a table and echo the table headings
  echo "<table>";
  echo "<tr><th>Username</th><th>Phone Number</th><th>Email</th></tr>";

  // Iterate over the rows in the result and echo the values of each column
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["username"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["email"] . "</td></tr>";
  } 

  // End the table
  echo "</table>";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>

<div class="row">
  <div class="column-1" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
</div>

<div class="column-1" style="background-color:#aaa;">
    <h2>Column 5</h2>
    <p>Some text..</p>
  </div> 

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 6</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 7</h2>
    <p>Some text..</p>
  </div>
  
  <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 8</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 9</h2>
    <p>Some text..</p>
  </div>

</body>
</html>


