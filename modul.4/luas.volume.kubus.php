<?php
$sisi = $_POST["sisi"];

if ($_POST["submit"] == "Hitung Luas kubus"){
    $hasil1 = 6 * $sisi;
     echo "<h3>Rumus Kubus</h3>";
     echo "Luas	(L) = 6 x s² .<br>
     Volume	(V) = s x s x s";
     echo "<h3>Hasil Luas Kubus: </h3>";
     echo "6 x $sisi = $hasil1";
}
else if ($_POST["submit"] == "Hitung Volume kubus"){
    $hasil1 = $sisi * $sisi * $sisi;
    echo "<h3>Rumus Kubus</h3>";
    echo "Luas	(L) = 6 x s² .<br>
    Volume	(V) = s x s x s";
    echo "<h3>Hasil Volume Kubus: </h3>";
    echo "$sisi x $sisi x $sisi = $hasil1 ";
}
?>