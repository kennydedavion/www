<!DOCTYPE html>
<html>
<body>

<?php
// Funkce pro spuštění skriptu podle zadaného směru
function run_script($direction) {
    $script_path = "/var/www/$direction.sh";
    if (file_exists($script_path)) {
        exec("sh $script_path");
        echo "<p>$direction script executed.</p>";
    } else {
        echo "<p>Script $direction.sh not found.</p>";
    }
}

// Kontrola směru z GET parametrů a spuštění odpovídajícího skriptu
if (isset($_GET['direction'])) {
    $direction = $_GET['direction'];
    if (in_array($direction, ['up', 'down', 'left', 'right'])) {
        run_script($direction);
    } else {
        echo "<p>Invalid direction!</p>";
    }
}
?>

<!-- Tlačítka pro ovládání -->
<a href="?direction=up"><center><img src="up.jpg" alt="Up" style="width:50px;height:50px"></center></a>

<center>
    <a href="?direction=left"><img src="left.jpg" alt="Left" style="width:50px;height:50px"></a>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="?direction=right"><img src="right.jpg" alt="Right" style="width:50px;height:50px"></a>
</center>

<a href="?direction=down"><center><img src="down.jpg" alt="Down" style="width:50px;height:50px"></center></a>

</body>
</html>

