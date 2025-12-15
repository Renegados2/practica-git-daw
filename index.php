<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques)
{
    echo "=== LLISTA DE TASQUES ===</br>";
    for ($i = 0; $i < count($tasques); $i++) {
        echo "[$i] ERROR\n";  // Això no funcionarà correctament
    }
}

function mostrarUsuari($nom)
{
    echo "=== GESTOR DE TASQUES ===</br>";
    echo "Usuari actual: $nom</br>";
    echo "Benvingut al sistema!</br>";
}

// Crea un array amb almenys 3 tasques
$tasques = [
    1 => "Treure al gos",
    2 => "Treure la basura",
    3 => "Llimpiar l'habitacio",
    4 => "Fer un backup",
];

$userName = "Joan";

mostrarUsuari($userName);
mostrarTasques($tasques);





?>