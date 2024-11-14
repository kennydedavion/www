<!DOCTYPE html>
<html>
<head>
    <title>HTML Frames</title>
</head>
<frameset rows="70%,30%">
    <frameset cols="50%,50%">
        <frame name="left_top" src="/webcam.php" />
        <frame name="right_top" src="/control-child.php" />
    </frameset>
    <frameset cols="40%,60%">
        <frame name="left_bottom" src="/gyrotest.php" />

</frameset>
</html>

