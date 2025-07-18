<?php
require_once './tp1cnx.php';
?>
<table>
    <tr>
        <th>identifiant</th>
        <th>marque</th>
        <th>modèle</th>
        <th>carburant</th>
    </tr>
    <?php
    try {
        $modeles = $pdo->query('SELECT id_modele, marque, modele, carburant FROM modeles ORDER BY marque;')->fetchAll(PDO::FETCH_NAMED);
        foreach ($modeles as $ligne) {
            ?>
            <tr>
                <td><?= $ligne['id_modele'] ?></td>
                <td><?= $ligne['marque'] ?></td>
                <td><?= $ligne['modele'] ?></td>
                <td><?= $ligne['carburant'] ?></td>
            </tr>
            <?php
        }
    } catch (PDOException $e) {
        $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
        die($msg);
    }
    ?>
</table>
