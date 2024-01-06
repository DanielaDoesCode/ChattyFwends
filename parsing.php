
  <?php
  // Establish a database connection (Update with your DB credentials)
  $servername = "localhost";
  $username = "";
  $password = "";
  $dbname = "";
 //im leaving the credentials out of github cause i still wanna make this project public
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // Get form data and sanitize inputs
  $username = mysqli_real_escape_string($conn, $_RQUEST['username']);
  $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
  
  
  // Insert data into the database
  $sql = "INSERT INTO login_information (username, password) VALUES ('$username', '$password')";
  
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close database connection
  $conn->close();


  ?>