<html>
<head> </head>
<body>
<?php
// Address error handing.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

if(isset($_POST['submit'])){
$opinionfile = fopen("useropinions.txt", "a");
$opinion = $_POST ['useropinions'].PHP_EOL;
fwrite($opinionfile, $opinion);
fclose($opinionfile);
}

header("Location: user_opinions.html");
exit;

?>
</body>
</html>
