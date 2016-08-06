<?php
//Multiplication Table
echo "<table border = 1 width=50%>";

echo "<tr>";

echo "<td> X </td>";

for ($i = 1; $i <= 12; $i++) {

    echo "<td>" . $i . "</td>";
}

echo "</tr>";



for ($i = 1; $i <= 12; $i++ ) {

    echo "<tr>";

    echo "<td>".$i."</td>";

    for ( $j = 1; $j <= 12; $j++ ) {

        echo "<td>".$i * $j."</td>";
    }

    echo "</tr>";

}

echo "</table>";

?>