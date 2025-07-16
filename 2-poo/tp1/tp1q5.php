<?php
require_once 'Form.php';

$form1 = new Form('Formulaire de test', '#');
$form1->setText('nom de famille', 'nom');
$form1->setText('prénom', 'prenom');
$form1->setSubmit('Envoyer le formulaire');
echo $form1->getForm();
