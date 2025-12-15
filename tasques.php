<?php
// Mòdul de tasques independent

function afegirTasca(&$tasques, $descripcio) {
    $newId = count($tasques) + 1;
    $tasques[$newId] = $descripcio;
    return $newId;
}

function eliminarTasca(&$tasques, $id) {
    $exists = key_exists($id, $tasques);

    if($exists) unset($tasques[$id]);

    return $exists;
}
?>