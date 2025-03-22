<!-- http://localhost/dashboard/project/index.php  offlne 50 words with all function in pdf file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

/* General Reset */
body {
    margin: 20px;
    padding: 20px;
    box-sizing: border-box;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
    background-color: #a9ff68;
    color: black;
    border: 5px red solid;
}

/* Header */
header {
    background-color: #21b4e2;
    padding: 20px;
    text-align: center;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.search-bar, .search-bar1 {
    font-size: 16px;
    width: 100px;
    height: 40px;
    border-radius: 22px;
    border: 2px solid #eb0511;
    background-color: white;
}

.search-bar1 {
    text-align: center;
}

nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
    background-color: #1e3a5f;
}

nav ul li {
    padding: 10px 20px;
}

nav ul li a {
    text-decoration: none;
    color: white;
}

nav ul li a:hover {
    color: yellow;
}

.top-bar {
    background-color: rgb(95, 108, 209);
    padding: 10px;
    text-align: center;
}

.top-bar h1 {
    font-size: 30px;
    color: black;
}

/* Main Dictionary Section */
.dictionary-container {
    background-color: white;
    margin: 50px auto;
    padding: 30px;
    width: 50%;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

#searchWord {
    padding: 10px;
    width: 80%;
    margin-bottom: 20px;
    font-size: 16px;
    border-radius: 5px;
    border: 2px solid #21b4e2;
}

li {
    margin: 10px;
    padding:  20px;
    background-color:rgb(204, 114, 181);
    color: black;
    border: 5px solid red;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: darkorange;
}

/* Footer */
footer {
    background-color: #111;
    color: white;
    padding: 40px 20px;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
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

.footer-column ul {
    list-style: none;
    padding: 0;
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

.download-btn {
    background-color: #25D366;
    border: none;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.download-btn:hover {
    background-color: #1EBE5D;
}

.footer-bottom p, .footer-bottom a {
    font-size: 12px;
    color: white;
    text-decoration: none;
}

.footer-bottom a:hover {
    text-decoration: underline;
}

/* Wavy Text Styling */
.wave-text {
    font-size: 3rem;
    font-weight: bold;
    color: white;
    display: flex;
    gap: 5px;
}

.wave-text span {
    display: inline-block;
    animation: wave 1.5s infinite ease-in-out, colorChange 2s infinite alternate;
}

@keyframes wave {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

@keyframes colorChange {
    0% { color: red; }
    50% { color: yellow; }
    100% { color: black; }
}

/* Animated Book */
.book {
    position: relative;
    width: 250px;
    height: 350px;
    perspective: 1200px;
    text-align: center;
    align-items: center;
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

.page:nth-child(odd) { background: red; }
.page:nth-child(even) { background: blue; }

@keyframes flip {
    0% { transform: rotateY(0deg); }
    100% { transform: rotateY(-180deg); }
}

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
    


</style>

    <title>Sindhi Dictionary 2.0</title>
   
</head>
<body>
    <!-- <form action="sear33ch.php" method="post"> -->
    <form action="search.php" method="post">
    <header>
        <div class="header-container">
         <!-- <marquee behavior="2" direction="left">  <h1>Sindhi Dictionary 2.0 Web Application</h1></marquee>  -->
        <marquee behavior="2" direction=" left"> <div class="wave-text">
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
    </div></marquee>
 
         
         <div class="search-bar1">
          <h5><a href="login.php">Login</a>
          <a href="#"></a></h5>
           </div>
           <div class="search-bar">
            <h5><a href="#"></a>
            <a href="registor.php">Register</a></h5>
             </div>
            <!-- <input type="text" placeholder="Login or Register" class="search-bar"> -->
        </div>
        
     <div class="top-bar">
     <h1> <span class="easy">English</span> <span class="to">TO</span> <span class="earn">Sindhi</span> <span class="and">Dictionary</span> <span class="i"></span> </h1>
        <div class="menu">
        
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="getapp.php">Get App</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="Favourite.php"> Add Favourite</a></li>
                <li><a href="addword.php">Add Word</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="policy.php">Privacy</a></li>
             </ul>
        </nav>
        </div>
</div>
    </header>   
    <main>
         <section class="dictionary-container">
         <marquee behavior="2" direction="down"> <h1><B><I> ENGLISH TO SINDHI DICTIONARY</I></B></h1><BR></BR></marquee>
       
         <p><h1><b><i><u>English To Sindhi</u></i></b></h1></p><br>
            <form method="POST" action="search.html1">
    <input type="text" id="searchWord" name="search" placeholder="Enter a word" required>
    <button type="submit">Search</button>
</form>         
<h2>Sindhi Language Overview</h2>
            <div class="word-details">

            
            سمورا انسان آزاد ۽ عزت ۽ حقن جي حوالي کان برابر پيدا ٿيا آهن.
انهن کي عقل ۽ ضمير حاصل ٿيو آهي، ان ڪري انهن کي هڪ ٻئي سان ڀائيچاري وارو سلوڪ اختيار ڪرڻ گهرجي.
<br><br>

	Sindhi is an Indo-Aryan language primarily spoken in the Sindh region of Pakistan and by Sindhi communities in India and globally. Recognized as an official language in both Pakistan and India, it holds a rich literary and cultural history. The language is written in two scripts: the Pero-Arabic script in Pakistan and the Devanagari script in India. Despite its historical importance, Sindhi lacks sufficient digital linguistic resources, making it harder for the language to keep pace with the global digital landscape.
            </div>
    <div id="result"></div>

<br><br>
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
        </section>
    </main> 

<div class="ab">
  <h1>INTRODUCTION </h1>
    
 	<h3>Sindhi dictionary have an especial scope which are used in Sindhi language. In dictionary contain thousands of word with meaning, this dictionary is help to learners. Learner can take more benefit from the dictionary and Sindhi dictionary can run on every device which are user can use it. When dictionary work offline for the user and user can access very easy without any internet source and anywhere.  Most people live in the hard area of the country side where they don’t have any source of network, once user install the dictionary after that run in hard area. Sindhi dictionary is user friendly and light weight for large or mini device can accept. Dictionary have many modern feature, which help to the user and like the dictionary 
     </h3> <br><br>
     <h1>Printed Dictionaries </h1>
<h3>
Mirza Kalich Beg’s Sindhi Dictionary (1892): A classical Sindhi dictionary that contains traditional vocabulary but is only available in print.
Soomro’s Sindhi Dictionary: A more modern printed dictionary, focusing on contemporary Sindhi words. However, access is limited since it’s only in physical form.
</h3>
<h1>Online Sindhi Dictionaries</h1>

<h1>Sindh Salamat Dictionary </h1>
<h3>An online, community-driven dictionary. Users can look up words in Sindhi and see translations in English and Urdu, but the coverage is limited, and it primarily supports the Perso-Arabic script.
</h3>
<h1>Sindhi Language Authority Digital Dictionary:</h1>
<h3>An official government-run digital dictionary that provides translations in Sindhi, English, and Urdu. However, it is not very comprehensive and has limited features for pronunciation or dialect variations.
</h3>

</div><BR></BR>




    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>Dictionary</h2>
            </div>
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>What we do</h3>
                    <ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">For Business</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Who we are</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Brand Center</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Use Dictionary</h3>
                    <ul>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">iPhone</a></li>
                        <li><a href="#">Mac/PC</a></li>
                        <li><a href="#">Dictionary Web</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Need help?</h3>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Apps</a></li>
                        <li><a href="#">Security Advisories</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <!-- <button class="download-btn">Download ⬇️</button> -->
                <p>2025 © Dictionary LLC | <a href="#">Terms & Privacy Policy</a> | <a href="#">Sitemap</a></p>
                          </div>
        </div>
    </footer>
</form>
</body>
</html>
