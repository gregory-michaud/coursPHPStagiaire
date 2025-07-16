<?php
require_once 'VilleAvecRegion.php';

$lr = new VilleAvecRegion('La Roche sur Yon', 'Vendée', 'Pays de la Loire');
echo $lr;

$q = new VilleAvecRegion('Quimper', 'Finistère', 'Bretagne');
echo $q;
