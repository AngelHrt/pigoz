<?php
$archivo = "ips.txt";

if (file_exists($archivo)) {
    echo "<pre>" . htmlspecialchars(file_get_contents($archivo)) . "</pre>";
} else {
    echo "No hay IPs registradas.";
}
?>
