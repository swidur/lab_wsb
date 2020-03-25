<?php
//      zadanie 1.
$trzeciWymiar = array(
    array(array("Janina", "Nowak"), array("Reks", "Mruczek"), array("Renault Clio", "Skuter Zipp")),
    array(array("Andrzej", "Pawlak"), array("Brego", "Toster"), array("Ford Fusion")),
    array(array("Jacek", "Grzybowski"), array("Bobik"), array("Iveco Daily", "Wołga"))
);
function echo3Dim($toEcho){
    foreach ($toEcho as $firstDim) {
        foreach ($firstDim as $secondDim) {
            foreach ($secondDim as $item) {
                echo $item, " ";
            }
        }
        echo "</br>";
    }
}
echo3Dim($trzeciWymiar);
echo "</br>";


//      zadanie 2.
$imiona = array("Janina", "anna", "Zenon", "krystyna", "andrzej");

function echoSorted($toEcho){
    $copy = $toEcho;
    for ($i=0; $i< count($copy); $i++){
        $copy[$i] = ucfirst(trim($copy[$i]));
    }
    asort($copy);
    foreach($copy as $a){
        echo $a, " ";
    }
}
echoSorted($imiona);
echo "</br></br>";



//      zadanie 2*

?>

<html lang="pl-PL">
<body>
<div></br>Podaj listę stringów do posortowania. Rozdziel je przecinkami</div>
<form method="post">
    Lista: <input type="text" name="list"><br>
    <div style="padding-top: 10px;"><input type="submit" value="Wyślij"></div>
</form>
</body>
</html>


<?php
$posted = isset($_POST["list"]) ? explode(',', $_POST["list"]) : [];
echoSorted($posted);

