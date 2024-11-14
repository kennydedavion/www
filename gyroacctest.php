<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyroskop a Akcelerometr</title>
    <style>
    </style>
</head>
<body>

<div>
    <h1>Data z gyroskopu a akcelerometru</h1>
    <p>Očekávání dat...</p>
    <div id="output"></div>
</div>

<script>
    // Kód pro povolení přístupu k senzorům
    if (typeof DeviceOrientationEvent.requestPermission === 'function') {
        DeviceOrientationEvent.requestPermission()
            .then(response => {
                if (response === 'granted') {
                    window.addEventListener('deviceorientation', handleOrientation);
                    window.addEventListener('devicemotion', handleMotion);
                } else {
                    console.error('Permission denied for Device Orientation');
                }
            })
            .catch(console.error);
    } else {
        // Prohlížeč nepodporuje vyžádání povolení, přidejte události přímo
        window.addEventListener('deviceorientation', handleOrientation);
        window.addEventListener('devicemotion', handleMotion);
    }

    function handleOrientation(event) {
        const alpha = event.alpha;
        const beta = event.beta;
        const gamma = event.gamma;

        // Zobrazte data na stránce
        document.getElementById("output").innerHTML = `
            <p>Úhel Alpha: ${alpha}°</p>
            <p>Úhel Beta: ${beta}°</p>
            <p>Úhel Gamma: ${gamma}°</p>
        `;
    }

    function handleMotion(event) {
        const accX = event.acceleration.x;
        const accY = event.acceleration.y;
        const accZ = event.acceleration.z;

        // Zobrazte akceleraci na stránce
        document.getElementById("output").innerHTML += `
            <p>Akcelerace X: ${accX} m/s²</p>
            <p>Akcelerace Y: ${accY} m/s²</p>
            <p>Akcelerace Z: ${accZ} m/s²</p>
        `;
    }
</script>

</body>
</html>

