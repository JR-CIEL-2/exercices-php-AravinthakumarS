<?php

function triangle($nombre) {
    for($i=0; $i < $nombre ;$i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo"\n";
    }

}

?>