<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aimy Live USB Camera front / Stream</title>
</head>
<body>
    <?php
    $status_file = '/tmp/stream_status';

    // Spuštění nebo zastavení streamu
    if (isset($_POST['toggle_stream'])) {
        if (file_exists($status_file)) {
            // Pokud je stream spuštěn, zastavíme ho
            $command = 'pkill -f /var/www/stream.py';
            exec($command);
            unlink($status_file);
            $streaming = false;
            echo "<p>Stream stopped!</p>";
        } else {
            // Pokud stream neběží, spustíme ho
            $command = 'python3 /var/www/stream.py > /dev/null 2>&1 &';
            exec($command);
            file_put_contents($status_file, 'streaming');
            $streaming = true;
            echo "<p>Stream started!</p>";
        }
    } else {
        // Nastavíme proměnnou podle toho, zda status soubor existuje
        $streaming = file_exists($status_file);
    }
    ?>

    <!-- Tlačítko pro spuštění nebo zastavení streamu -->
    <form method="post">
        <input type="submit" name="toggle_stream" value="<?php echo $streaming ? 'Stop Stream' : 'Start Stream'; ?>">
    </form>

    <!-- Zobrazení živého streamu, pokud je spuštěn -->
    <?php if ($streaming): ?>
        <img src="http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8081/video_feed" alt="Live Stream" style="width: 533px; height: 400px;" />
    <?php endif; ?>
</body>
</html>

