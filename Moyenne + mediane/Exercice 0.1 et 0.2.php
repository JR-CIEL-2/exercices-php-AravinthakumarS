<?php
Function moyenne($tab){
    $moyenne=0;
    $n=count($tab);
    for($i=0;$i<$n;$i++){
        $moyenne += $tab[$i];
    }
    return $moyenne/$n;
}

Function mediane(&$tab){
    $n =count($tab);
    if(($n % 2) == 0){
        return ($tab[$n/2] + ($tab[$n/2 - 1])) / 2;

    }else{
        return $tab[($n)/2];
    }
}

$Notes = array(15,12,9);

$salaire_i = array(1000,1500,2000,1200,6000,900,2100);
$salaire_p = array(1000,1500,2000,1200,6000,9000);
sort($salaire_p);
sort($salaire_i);

echo "La moyenne des notes est de ".moyenne($Notes)." / 20. \n" ;

echo "La moyenne des salaires impaire est de ".moyenne($salaire_i).". \n" ;
echo "La moyenne des salaires paire est de ".moyenne($salaire_p).". \n" ;
echo "La mediane impaire est de ".mediane($salaire_i).".\n";
echo "La mediane paire est de ".mediane($salaire_p).".\n";

?>