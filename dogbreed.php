<?php
$breeds = array("Beagle", "Poodle", "Bulldog", "Labrador", "Husky", "Boxer");

$q = $_GET["q"];
$hint = "";

if ($q !== "") {
    $q = strtolower($q);

    foreach ($breeds as $breed) {
        if (stristr($breed, $q)) {
            if ($hint === "") {
                $hint = $breed;
            } else {
                $hint .= "<br>" . $breed;
            }
        }
    }
}

if ($hint === "") {
    echo "Dog breed not found";
} else {
    echo $hint;
}
?>