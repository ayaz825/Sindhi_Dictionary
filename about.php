<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Animated</title>
    <style>
        /* Smooth background animation */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background: linear-gradient(-45deg, #ff7e5f,rgb(46, 181, 93),rgb(58, 107, 206),rgb(187, 35, 221));
            background-size: 400% 400%;
            animation: backgroundAnimation 10s infinite alternate;
            color: white;
            text-align: center;
            border: 5px yellow double;
        }

        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Container for content */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
            animation: slideIn 1.5s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        /* Team section */
        .team {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .team-member {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: scale(1.1);
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
    </style>
</head>
<body>
<h2> About the Developer</h2>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to **Sindhi Dictionary 2.0** – your ultimate platform for learning and understanding the Sindhi language.</p>

        <h2>🌟 Ayaz Ali</h2>
        <p>We aim to preserve and promote the Sindhi language through technology.</p>

        <h2>🚀 Muhammad Ameen</h2>
        <p>To make the Sindhi language accessible to everyone, anywhere in the world.</p>

        <h2>👨‍💻 Team</h2>
        <div class="team">
            <div class="team-member">Ayaz - Developer</div>
            <div class="team-member">M Ameen - Designer</div>
            <div class="team-member">Ayaz - Content Writer</div>
        </div>
    </div><br><br>
    <div class="container">
        <h2>🌟 Our Mission</h2>
        
        <p>Welcome to **Sindhi Dictionary 2.0** – your ultimate platform for learning and understanding the Sindhi language.</p>
        <h2>🚀 Make Easy Dictionary</h2>
        <p>We aim to preserve and promote the Sindhi language through technology.</p>

        <h2>🚀 Fast dictionary</h2>
        <p>To make the Sindhi language accessible to everyone, anywhere in the world.</p>

        <h2>👨‍💻 Simple Dictionary</h2>
        <div class="team">
            <div class="team-member">Ayaz - Developer</div>
            <div class="team-member">M Ameen - Designer</div>
            <div class="team-member">Ayaz - Content Writer</div>
        </div>
    </div><br><br>
    <div class="container">
        <h2>🚀 Our Vision</h2>
        <p>Welcome to **Sindhi Dictionary 2.0** – your ultimate platform for learning and understanding the Sindhi language.</p>
        
        <h2>🌟 Anyone access</h2>
        <p>We aim to preserve and promote the Sindhi language through technology.</p>
        
        <h1>Hold every right</h1>
        <p>To make the Sindhi language accessible to everyone, anywhere in the world.</p>

        <h2>👨‍💻 response</h2>
        <div class="team">
            <div class="team-member">Ayaz - Developer</div>
            <div class="team-member">M Ameen - Designer</div>
            <div class="team-member">Ayaz - Content Writer</div>
        </div>
    </div><br><br>
    <div class="container">
        <h2>👨‍💻 Meet Our Team</h2>
        <p>Welcome to **Sindhi Dictionary 2.0** – your ultimate platform for learning and understanding the Sindhi language.</p>
        
       
        <p>We aim to preserve and promote the Sindhi language through technology.</p>
        
        
        <p>To make the Sindhi language accessible to everyone, anywhere in the world.</p>
       

        <div class="team">
            <div class="team-member">Ayaz - Developer</div>
            <div class="team-member">M Ameen - Designer</div>
            <div class="team-member">Ayaz - Content Writer</div>
        </div>

        </div><br><br>
        <form action="Dictionary.php" method="GET">
    <!-- <a href="#" class="button">Login</a> -->

        <button type="submit" class="button">Back</button>
    </form><br><br>

        <form action="acb">
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
<!-- </form> -->

    

</body>
</html>
