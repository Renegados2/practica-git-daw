<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===</br>";
    foreach($tasques as $id => $descripcio) {
        echo "[$id] $descripcio</br>";
    }
}

// Crea un array amb almenys 3 tasques
$tasques = [
    1 => "Treure al gos",
    2 => "Treure la basura",
    3 => "Llimpiar l'habitacio",
    4 => "Fer un backup",
];

echo "=== GESTOR DE TASQUES ===</br>";
echo "Benvingut al sistema!</br>";
mostrarTasques($tasques)
?>