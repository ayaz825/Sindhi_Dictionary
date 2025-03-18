<?php
// Database Connection
$host = "localhost";  // Change if needed
$user = "root";       // Database username
$pass = "";           // Database password
$dbname = "sindhi_dictionary";  // Database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert Data into Database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST["word"];
    $meaning = $_POST["meaning"];
    $sentences = $_POST["sentences"];
    $synonyms = $_POST["synonyms"];
    $reference = $_POST["reference"];

    $sql = "INSERT INTO words (word, meaning, sentences, synonyms, reference) 
            VALUES ('$word', '$meaning', '$sentences', '$synonyms', '$reference')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Word added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Favorite Word</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 60px;
            margin: 15px;
            background-color:rgb(216, 150, 200);
            border: 5px red dotted;
      ;
        }
        form {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px gray;
        }
        h2 {
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
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
    /* body{
        margin: 20px;
        padding: 20px;
        background:rgb(176, 115, 202);
        border: 5px yellow solid;
    } */
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

        /* Wavy text styling */
        .wave-text {
            padding: 2px;
            align-items: center;
            font-size: 3rem;
            font-weight: bold;
            color: white;
            display: flex;
            gap: 5px;
            background: greenyellow;
        }

        .wave-text span {
            padding: 0;
            display: inline-block;
            animation: wave 1.5s infinite ease-in-out, colorChange 2s infinite alternate;
            background: green;
        }

        /* Wave effect */
        @keyframes wave {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); } /* Moves up */
            
        }

        /* Color-changing effect */
        @keyframes colorChange {
            0% { color: red; }
            50% { color: yellow; }
            100% { color: cyan; }
            
            
        }

        /* Delay each letter for wave effect */
       
.wave-text span:nth-child(1) { animation-delay: 0s; }
        .wave-text span:nth-child(2) { animation-delay: 0.1s; }
        .wave-text span:nth-child(3) { animation-delay: 0.2s; }
        .wave-text span:nth-child(4) { animation-delay: 0.3s; }
        .wave-text span:nth-child(5) { animation-delay: 0.4s; }
        .wave-text span:nth-child(6) { animation-delay: 0.5s; }
        .wave-text span:nth-child(7) { animation-delay: 0.6s; }
        .wave-text span:nth-child(8) { animation-delay: 0.7s; }
        .wave-text span:nth-child(9) { animation-delay: 0.8s; }
        .wave-text span:nth-child(10) { animation-delay: 0.9s; }
        .wave-text span:nth-child(11) { animation-delay: 1s; }
        .wave-text span:nth-child(12) { animation-delay: 1.1s; }
        .wave-text span:nth-child(13) { animation-delay: 1.2s; }
        .wave-text span:nth-child(14) { animation-delay: 1.3s; }
        .wave-text span:nth-child(15) { animation-delay: 1.4s; }
        .wave-text span:nth-child(16) { animation-delay: 1.5s; }
        .wave-text span:nth-child(17) { animation-delay: 1.6s; }
        .wave-text span:nth-child(18) { animation-delay: 1.7s; }
        .wave-text span:nth-child(19) { animation-delay: 1.8s; }
        .wave-text span:nth-child(20) { animation-delay: 1.9s; }
        .wave-text span:nth-child(21) { animation-delay: 2s; }
        .wave-text span:nth-child(22) { animation-delay: 2.1s; }
        .wave-text span:nth-child(23) { animation-delay: 2.2s; }
        .wave-text span:nth-child(24) { animation-delay: 2.3s; }
        .wave-text span:nth-child(25) { animation-delay: 2.4s; }
        .wave-text span:nth-child(26) { animation-delay: 2.5s; }
        .wave-text span:nth-child(27) { animation-delay: 2.6s; }
        .wave-text span:nth-child(28) { animation-delay: 2.7s; }
        .wave-text span:nth-child(29) { animation-delay: 2.8s; }
        .wave-text span:nth-child(30) { animation-delay: 2.9s; }
        .wave-text span:nth-child(31) { animation-delay: 3s; }
        .wave-text span:nth-child(32) { animation-delay: 3.1s; }
        .wave-text span:nth-child(33) { animation-delay: 3.2s; }
        .wave-text span:nth-child(34) { animation-delay: 3.3s; }
        .wave-text span:nth-child(35) { animation-delay: 3.4s; }
        .wave-text span:nth-child(36) { animation-delay: 3.5s; }
        .wave-text span:nth-child(37) { animation-delay: 3.6s; }
        .wave-text span:nth-child(38) { animation-delay: 3.7s; }
    
.ab{
    background:burlywood;
}

        footer {
    background-color:rgb(116, 221, 87);
    color: black;
    padding: 40px 20px;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-logo h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.footer-columns {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-column {
    width: 20%;
    min-width: 150px;
}

.footer-column h3 {
    font-size: 16px;
    margin-bottom: 10px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 8px;
}

.footer-column ul li a {
    color: white;
    text-decoration: none;
    font-size: 14px;
}

.footer-column ul li a:hover {
    text-decoration: underline;
}

.footer-bottom {
    text-align: center;
    margin-top: 30px;
}


    </style>
</head>
<body>
    <!-- Wavy Text -->
    <u> <div class="wave-text">
        <span>S</span>
        <span>i</span>
        <span>n</span>
        <span>d</span>
        <span>h</span>
        <span>i</span>
        <span>&nbsp;</span>
        <span>D</span>
        <span>i</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
        <span>a</span>
        <span>r</span>
        <span>y</span>
        <span>&nbsp;</span>
        <span>2</span>
        <span>.</span>
        <span>0</span> 
        <span>&nbsp;</span>
        <span>W</span> <span>e</span> <span>b</span> 
        <span>&nbsp;</span>
        <span>A</span> 
        <span>p</span> 
        <span>p</span> 
        <span>l</span>
         <span>i</span> 
         <span>c</span> 
         <span>a</span> 
         <span>t</span> 
         <span>i</span>        
         <span>o</span> 
         <span>n</span>  
         <span>&nbsp;</span>
    </div></u>
 
       

    <h2>Add Word in Dictionary</h2>
    <div class="a">
    <form action="" method="POST">
        <label for="word">Word:</label>
        <input type="text" name="word" required>

        <label for="meaning">Meaning:</label>
        <textarea name="meaning" required></textarea>

        <label for="synonyms">Synonyms:</label>
        <input type="text" name="synonyms">

        <label for="example">Example/Sentences:</label>
        <textarea name="sentences"></textarea>

       
        <label for="reference">Reference:</label>
        <input type="text" name="reference">

        <button type="submit">Add</button>
        </div>
        
    </form>
<br><br>
    <form action="Dictionary.php" method="GET">
    <!-- <a href="#" class="button">Login</a> -->

        <button type="submit" class="button">Back</button>
    </form>
    </div>
</body>
</html>
