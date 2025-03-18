
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database Connection
$host = "localhost";
$user = "root";
$password = "";
$database = "sindhi_dictionary";

$conn = new mysqli($host, $user, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Debugging: Check if search input is received
if (!isset($_POST['search'])) {
    die("Error: No search word received!");
}

$search = $_POST['search'];
echo "<h1>English To Sindhi <br></h1> " . "<br>"; // Debugging line
// echo "English To Sindhi: " . htmlspecialchars($search) . "<br>";

// Query to search the word
$mysqli = "SELECT * FROM words WHERE word LIKE ?";
$stmt = $conn->prepare($mysqli);

if (!$stmt) {
    die("Query Preparation Failed: " . $conn->error);
}

$likeSearch = "%" . $search . "%";
$stmt->bind_param("s", $likeSearch);
$stmt->execute();
$result = $stmt->get_result();

// Display results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3><b>Word:</b> " . $row["word"] . "<br>";
        echo "<b>Meaning:</b> " . $row["meaning"] . "<br>";
        echo "<b>Example/sentence:</b> " . $row["sentences"] . "<br>";
        echo "<b>Synonyms:</b> " . $row["synonyms"] . "<br>";
        echo "<b>Reference:</b> " . $row["reference"] . "<br><hr>";
         echo "<b> Link:</b> " .'<a href="https://translate.google.com" target="_blank">Google Translate</a></h3>' . "<br><hr>";
        
        ;
    }
} else {
    echo '<br> No results found! <br><br> <b>Link:</b> <a href="https://translate.google.com" target="_blank">Google Translate</a><br><hr>';
}

$stmt->close();
$conn->close();


$text = ""; // Initialize variable

if (isset($_POST['search'])) { 
    $text = $_POST['search']; // Get value from form input
}

if (!isset($text) || empty($text)) {
    $text = "No results found!"; // Default value
}

echo $text; // No more undefined error

?>
<style>
    body{
        margin: 20px;
        padding: 20px;
        background:rgb(194, 188, 122);
        border: 3px solid red;
        align-items: center;
        text-align:center;
    }
    .container{
        background:rgb(114, 160, 201);

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
body { font-family: Arial, sans-serif; background: #c2b57d; text-align: center; padding: 20px; }
        .container1 { display: inline-block; padding: 5px; background:rgb(67, 228, 234); border-radius: 5px; }
        .speaker { cursor: pointer; font-size: 24px; margin-left: 10px; }
   
</style>
<html>
<body>
<div class="container1">
    <p><b><?php echo "" ?></b> 
    <span class="speaker" onclick="speakText()">🔊</span></p>
</div> <br><br>

<script>
    function speakText() {
        let text = <?php echo json_encode($text); ?>;
        let speech = new SpeechSynthesisUtterance(text);
        speech.lang = "en-US"; 
        speech.volume = 1.5; // Very Loud
        speech.rate = 1; 
        speech.pitch = 1;
        window.speechSynthesis.speak(speech);
    } 
</script>


    <div class="container">
<!-- <div class="text">Sindhi Dictionary</div> -->
    <div class="bnt">
    <form action="Dictionary.php" method="GET">
    <!-- <a href="#" class="button">Login</a> -->
    <h2>Objectives </h2>	
		We are enhancing access Sindhi dictionaries, and making web interfaces to a wider audience. We expanded the dictionary to a large area with the huge vocabularies to specialized terminology and colloquial expressions. When some function which may not be used in other web applications of the dictionary which will auto-suggest the user while using this application. So that the user participates very easily through content submission, it has compatibility and use across multiple devices like desktops, laptops, tablets and smartphones	
<br><br>
        <button type="submit" class="button">Back</button>
    </form>
    </div>
</div>
    </body>
    
</html>




