
<?php
// Database configuration
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

// Create contacts table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

// Handle form submission
$success = "";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } else {
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        
        if ($stmt->execute()) {
            $success = "Registration successfully!";
        } else {
            $error = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
       * {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #3498db, #8e44ad);
            text-align: center;
            padding: 10px;
            /* border: 6px greenyellow dotted; */
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 50%;
            margin: auto;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.2s ease-in-out;
        }

        h2 {
            color: #333;
        }

        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
        }

        button {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: #2980b9;
            transform: scale(1.05);
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
}

/* Optional: Add hover effect */
.button:hover {
    background-color: lightgray;
}

    </style>
  
</head>
<body>
    <h1><b><u><p><mark>Sindhi dictionary</mark></p></u></b></h1>

<div class="card" style="max-width: 600px; margin: 0 auto;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Register</h2>
            
            <!-- Note -->
            <div class="alert alert-info mb-4">
                <strong>Note:</strong> We value your feedback! Please fill out this form and we'll respond within 24 hours.
            </div>

            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php elseif ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <?php if (!$success): ?>
                <form method="post">
                    <div class="mb-3">
                        <label>Your Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Your Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Your Password:</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            <?php endif; ?>
        </div>
<br>
<form action="Dictionary.php" method="GET">
    <!-- <a href="#" class="button">Login</a> -->

        <button type="submit" class="button">Back</button>
    </form><br><br>

</body>
</html>