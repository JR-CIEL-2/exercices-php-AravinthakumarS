<?php
if(isset($_GET['nb'])) {
    $nombre = intval($_GET['nb']);

    function triangle($nombre) {
        for ($i = 1; $i <= $nombre; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    echo "Triangle : <br>";
    triangle($nombre);
}

?>