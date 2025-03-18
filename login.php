<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sindhi_dictionary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create tables if not exists
$conn->query("CREATE TABLE IF NOT EXISTS contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    message VARCHAR(255) NOT NULL
)");

// Handle login
if (isset($_POST['login'])) {
    
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $result = $conn->query("SELECT * FROM contacts WHERE email='$email' AND message='$message'");
    
    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
    } else {
        $login_error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vocabulary System</title>
    <!-- href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<style>
     .container{
        background:rgb(201, 155, 195);
        border: 5px red dotted;
        align-items: center;
        text-align: center;
     }
.button {
    background-color: yellowgreen; /* White background */
    color: purple; /* Purple text */
    font-size: 18px; /* Adjust text size */
    font-weight: bold;
    border: 3px solid red; /* Red border */
    border-radius: 30px; /* Rounded corners */
    padding: 10px 30px; /* Padding */
    text-align: center;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    width: 300px;
}

/* Optional: Add hover effect */
.button:hover {
    background-color: lightgray;
}
   
.button1 {
    background-color: yellow; /* White background */
    color: red; /* Purple text */
    font-size: 18px; /* Adjust text size */
    font-weight: bold;
    border: 3px solid red; /* Red border */
    border-radius: 30px; /* Rounded corners */
    padding: 10px 30px; /* Padding */
    text-align: center;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    width: 300px;
}

/* Optional: Add hover effect */
.button:hover {
    background-color: lightgray;
}
</style>
<body class="container">
<!-- <body> -->

<?php if (!isset($_SESSION['loggedin'])): ?>
        <!-- Login Form -->
        <div class="card" style="max-width: 400px; margin: 0 auto;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <?php if (isset($login_error)): ?>
                    <div class="alert alert-danger"><?php echo $login_error; ?></div>
                <?php endif; ?>
                <form action="Dictionary.php" method="POST">
                    <div class="mb-3">
                        <label>Username:</label>
                        <input type="text" name="email" class="button1" required>
                    </div>
                    <div class="mb-3">
                        <label>Password:</label>
                        <input type="password" name="message" class="button1" required>
                    </div> <br>
                    <button type="submit" name="login" class="button">Login</button><br>
                </form>
            </div>
            

        </div>
    <?php endif; ?>
    
    <h1>Once you logged in  You can go to dashboard</h1>
    <form action="Dictionary.php" method="GET">
      <!-- <a href="#" class="button">Login</a>  -->

        <button type="submit" class="button">Back</button>
    </form><br><br>
</body>
</html>
<?php $conn->close(); ?>
