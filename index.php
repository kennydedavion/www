<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMY-Ultra Space</title>
    <style>
        /* Základní styl pro navigační lištu */
        .navbar {
            display: flex;
            align-items: center;
            background-color: #333;
            padding: 10px;
        }
        .navbar a, .navbar .dropdown {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-size: 18px;
        }
        .navbar .home-icon::before {
            content: "🏠 ";
        }
        .navbar .dropdown-content {
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .navbar .dropdown:hover .dropdown-content {
            display: block;
        }
        .navbar .dropdown-content a {
            color: white;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .navbar .dropdown-content a:hover {
            background-color: #555;
        }
        .login-icon {
            margin-left: auto;
            font-size: 18px;
            cursor: pointer;
            color: white;
        }
        /* Modální okno pro přihlášení */
        .modal {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            text-align: center;
        }
        .modal-content input[type="text"], .modal-content input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .modal-content input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .modal-close {
            color: black;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

</head>
<body>

<!-- Navigační lišta -->
<div class="navbar">
    <a href="index.php" class="home-icon">Domů</a>
    <a href="webusbcam.php" onclick="loadPage('webcam.php')">Cam1</a>
    <a href="home2.php" onclick="loadPage('home2.php')">Cam1</a>
    <a href="pokus.php" onclick="loadPage('pokus.php')">Cam1</a>
    <a href="motioncam2.php" onclick="loadPage('motioncam2.php')">MotionCam</a>
    <div class="dropdown">
        <span>🧭 Gyro Pages</span>
        <div class="dropdown-content">
            <a href="gyroacctest.php" onclick="loadPage('gyroacctest.php')">Gyro & Acc Test</a>
            <a href="gyro_stereocam.php" onclick="loadPage('gyro_stereocam.php')">Gyro Stereocam</a>
            <a href="gyrotest.php" onclick="loadPage('gyrotest.php')">Gyro Test</a>
            <a href="gyrotest2.php" onclick="loadPage('gyrotest2.php')">Gyro Test 2</a>
            <a href="gyrotest3.php" onclick="loadPage('gyrotest3.php')">Gyro Test 3</a>
            <a href="gyrotest4.php" onclick="loadPage('gyrotest4.php')">Gyro Test 4</a>
            <a href="ar.php" onclick="loadPage('ar.php')">AR</a>
            <a href="vr.php" onclick="loadPage('vr.php')">VR</a>
        </div>
    </div>
    <!-- Přihlášení ikona -->
    <span class="login-icon" onclick="document.getElementById('loginModal').style.display='block'">⚫</span>
</div>

<!-- Modální přihlašovací formulář -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="modal-close" onclick="document.getElementById('loginModal').style.display='none'">&times;</span>
        <h3>Přihlášení</h3>
        <form method="post" action="admin.php">
            <input type="text" name="username" placeholder="Zrádce" required>
            <input type="password" name="password" placeholder="Heslo" required>
            <input type="submit" value="Projít">
        </form>
    </div>
</div>

<script>
    // Zavření modálního okna při kliknutí mimo
    window.onclick = function(event) {
        if (event.target == document.getElementById('loginModal')) {
            document.getElementById('loginModal').style.display = "none";
        }
    }
</script>
 <script>
        function loadPage(page) {
            const contentDiv = document.getElementById('content');
            const xhr = new XMLHttpRequest();
            xhr.open('GET', page);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    contentDiv.innerHTML = xhr.responseText;
                } else {
                    contentDiv.innerHTML = 'Zahod tu kraksnu a zacni se sebou neco delat.';
                }
            };
            xhr.send();
        }

        // Načíst výchozí stránku při načtení
        window.onload = function() {
            loadPage('home2.php');
        };
    </script>


</body>
</html>

