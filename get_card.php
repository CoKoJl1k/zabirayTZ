<?php

include_once 'CardModel.php';
include_once 'DataBase.php';
if (!empty($_REQUEST['id_card'])) {
    $card = new CardModel();
    $resp = $card->getCard($_REQUEST['id_card']);
    echo json_encode($resp);
} else {
    return false;
}
