<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live USB Camera Stream</title>
    <style>
        .button {
            background-color: #4CAF50; /* Zelená barva */
            border: none;
            color: white; /* Barva textu */
            padding: 15px 32px; /* Vnitřní okraje */
            text-align: center; /* Zarovnání textu */
            text-decoration: none; /* Bez podtržení */
            display: inline-block; /* Inline blok */
            font-size: 16px; /* Velikost textu */
            margin: 4px 2px; /* Okraje */
            cursor: pointer; /* Změna kurzoru na ukazatel */
            border-radius: 8px; /* Zaoblení rohů */
        }
    </style>
</head>
<body>
    <h1>Live Stream from USB Camera</h1>
    
    <!-- Odkaz na spuštění Python skriptu -->
    <form method="post">
        <input type="submit" name="start_steam" value="Start Steam">
    </form>

    <?php
    if (isset($_POST['start_stream'])) {
        // Spuštění Python skriptu
        $command = 'python3 /var/www/steam.py > /dev/null 2>&1 &';
        exec($command);
        echo "<p>Steam started!</p>";
    }
    ?>

    <!-- Zobrazení živého streamu -->
    <img src="http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8081/video_feed" alt="Live Steam" />

    <!-- Tlačítko pro přechod na usbcamweb.php -->
    <br>
    <a href="webusbcam.php" class="button">Go to USB Camera Web</a>
</body>
</html>
