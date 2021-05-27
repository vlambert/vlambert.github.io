<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
$txt = $_POST["email"];
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>