<?php
$g = isset($_POST["command"]) ? $_POST["command"] : "";

$conn = mysqli_connect('localhost', 'id21571466_root', 'Hamid5846.', 'id21571466_base');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$q = "INSERT INTO `base`(`command`) VALUES (?)";
$stmt = mysqli_prepare($conn, $q);

mysqli_stmt_bind_param($stmt, "s", $g);
$r = mysqli_stmt_execute($stmt);

if ($r) {
    echo "<script>window.location.assign('/index.php');</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
