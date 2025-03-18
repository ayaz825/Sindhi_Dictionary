<?php
// Connect to database
include 'db_connection.php'; // Ensure you have a valid database connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data safely
    $word = isset($_POST['word']) ? trim($_POST['word']) : '';
    $meaning = isset($_POST['meaning']) ? trim($_POST['meaning']) : '';
    $synonyms = isset($_POST['synonyms']) ? trim($_POST['synonyms']) : '';
    $sentences = isset($_POST['sentences']) ? trim($_POST['sentences']) : '';
    $reference = isset($_POST['reference']) ? trim($_POST['reference']) : '';

    // Check if the word is not empty
    if (empty($word)) {
        echo "<script>alert('Please enter a word!');</script>";
        exit;
    }

    // Check if the word already exists in the database
    $check_sql = "SELECT * FROM words WHERE word = '$word'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('The word already exists, please choose another word!');</script>";
    } else {
        // Insert Data
        $sql = "INSERT INTO words (word, meaning, synonyms, sentences, reference) 
                VALUES ('$word', '$meaning', '$synonyms', '$sentences', '$reference')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Word added successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Word in Dictionary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #f8c471, #85c1e9);
            text-align: center;
            padding: 20px;
            border: 10px green dotted;
        }
        .container {
            max-width: 600px;
            background:rgb(133, 237, 129);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
            margin: auto;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            text-align: left;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }
        input:focus, textarea:focus {
            border-color: #ff5733;
            transform: scale(1.02);
        }
        button {
            background: #ff5733;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
            transition: 0.3s;
        }
        button:hover {
            background: #c70039;
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
  
        .word-box {
            background: #d5f5e3;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            text-align: left;
            animation: slideIn 0.5s ease-in-out;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .book {
            position: relative;
            width: 250px;
            height: 350px;
            perspective: 1200px;
        }

        .page {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            backface-visibility: hidden;
            transform-origin: left;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            color: white;
            animation: flip 10s infinite alternate ease-in-out;
        }

        /* Apply different colors to pages */
        .page:nth-child(odd) { background: red; }
        .page:nth-child(even) { background: blue; }

        /* Delay animation for each page */
        .page:nth-child(1) { animation-delay: 0s; }
        .page:nth-child(2) { animation-delay: 1s; }
        .page:nth-child(3) { animation-delay: 2s; }
        .page:nth-child(4) { animation-delay: 3s; }
        .page:nth-child(5) { animation-delay: 4s; }
        .page:nth-child(6) { animation-delay: 5s; }
        .page:nth-child(7) { animation-delay: 6s; }
        .page:nth-child(8) { animation-delay: 7s; }
        .page:nth-child(9) { animation-delay: 8s; }
        .page:nth-child(10) { animation-delay: 9s; }
        .page:nth-child(11) { animation-delay: 10s; }
        .page:nth-child(12) { animation-delay: 11s; }
        .page:nth-child(13) { animation-delay: 12s; }
        .page:nth-child(14) { animation-delay: 13s; }
        .page:nth-child(15) { animation-delay: 14s; }
        .page:nth-child(16) { animation-delay: 15s; }
        .page:nth-child(17) { animation-delay: 16s; }
        .page:nth-child(18) { animation-delay: 17s; }
        .page:nth-child(19) { animation-delay: 18s; }
        .page:nth-child(20) { animation-delay: 19s; }

        @keyframes flip {
            0% { transform: rotateY(0deg); }
            100% { transform: rotateY(-180deg); }
        }

    </style>
</head>
<body>
<h2>All favourite words here</h2>
    <div class="container">
        <h2>Add Word in favourite</h2>
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
        
        
    </form>
    <!-- </div>  </div> -->

        <form action="Dictionary.php" method="GET">
    <!-- <a href="#" class="button">Login</a> -->

        <button type="submit" class="button">Back</button>
    </form>
    </div><br><br>
    <div class="container">

    <div class="book">
        <div class="page">Sindhi Dictionary 1</div>
        <div class="page">Sindhi Dictionary 2</div>
        <div class="page">Sindhi Dictionary 3</div>
        <div class="page">Sindhi Dictionary 4</div>
        <div class="page">Sindhi Dictionary 5</div>
        <div class="page">Sindhi Dictionary 6</div>
        <div class="page">Sindhi Dictionary 7</div>
        <div class="page">Sindhi Dictionary 8</div>
        <div class="page">Sindhi Dictionary 9</div>
        <div class="page">Sindhi Dictionary 10</div>
        <div class="page">Sindhi Dictionary 11</div>
        <div class="page">Sindhi Dictionary 12</div>
        <div class="page">Sindhi Dictionary 13</div>
        <div class="page">Sindhi Dictionary 14</div>
        <div class="page">Sindhi Dictionary 15</div>
        <div class="page">Sindhi Dictionary 16</div>
        <div class="page">Sindhi Dictionary 17</div>
        <div class="page">Sindhi Dictionary 18</div>
        <div class="page">Sindhi Dictionary 19</div>
        <div class="page">Sindhi Dictionary 20</div>
    </div>

        
            <h2>Dictionary Words</h2>
        <?php
        $result = $conn->query("SELECT * FROM words ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='word-box'>";
            echo "<strong>Word:</strong> " . $row['word'] . "<br>";
            echo "<strong>Meaning:</strong> " . $row['meaning'] . "<br>";
            echo "<strong>Synonyms:</strong> " . $row['synonyms'] . "<br>";
            echo "<strong>sentences:</strong> " . $row['sentences'] . "<br>";
            echo "<strong>Reference:</strong> " . $row['reference'] . "<br>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
