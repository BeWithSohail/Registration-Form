<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Retrieve form data using POST method
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$desc = isset($_POST['description']) ? $_POST['description'] : '';
if (!empty($name)) {
$sql = "INSERT INTO `students` (`name`, `age`, `gender`, `email`, `phone`, `description`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

// SQL query to insert data into 'users' table
if ($conn->query($sql) === TRUE) {
    // echo "New record inserted successfully";
    $successMessage = "Thank you for your submission!";
    // header("Location: {$_SERVER['PHP_SELF']}");
    // exit();
   // header("Location: thank_you.php");
} else {
    $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
}
}else{
    $errorMessage = "Name is required!";
}

// Close connection
$conn->close();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2> 
        Welcome to student registration form 
    </h2>
    <p style="margin-top: 10px;">
        Enter your details and submit this forms to confirm your particiapation in the registration 
    </p>
    <?php 
        if (isset($successMessage)) {
            echo '<p id="succes_msg">' . $successMessage . '</p>';
        } elseif (isset($errorMessage)) {
            echo '<p style="color: red;">' . $errorMessage . '</p>';
        }
        ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" id="gender" placeholder="Enter your gender" name="gender">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Mobile:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter email" name="phone">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
            </div>
       
            <button type="submit" class="btn btn-default">Submit</button>
     </form>

<!-- data inserted -->
<!-- INSERT INTO `students` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `description`, `date`) VALUES ('1', 'sohail', '30', 'male', 'sohailalam6027@gmail.com', '1234567890', 'first test ccreated', '');
-->

    <!-- end -->
</div>

</body>
</html>