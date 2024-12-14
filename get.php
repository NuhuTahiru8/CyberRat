<?php

$conn = mysqli_connect('localhost', 'id21571466_root', 'Hamid5846.', 'id21571466_base');

$q = "SELECT * FROM `base`";
$res = mysqli_query($conn, $q);

$i = 0;
while ($row = mysqli_fetch_assoc($res)) {
    $i = $row["command"];
}

// printing the last command
echo $i;

?>
