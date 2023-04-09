<?php
include_once 'CardModel.php';
include_once 'DataBase.php';
$cardsObj = new CardModel();
$cards = $cardsObj->getCardsUser(1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Zabiray</title>
</head>
<body>

<div class="container">
    <h1>Credit card access.</h1>
        <form action="insert_order.php">
            <div class="row">
                <div class="col-4">
                    <select class="form-select" id="NumberCard">
                    <?php
                        foreach ($cards as $card){
                            echo '<option value='.$card["id"].'>'.$card["number"].'</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="col-3">
                <?php
                foreach ($cards as $card){
                    echo '<input class="form-control" type="date"  id="ExpireDate" value='.$card["expire_date"].' >';
                   break;
                }
                ?>
                </div>
            </div>
                <p id="Message">Message</p>
            <div class="row">
                <div class="col offset-8">
                    <input type="submit"  class="btn-primary" value="Отправить заявку">
                </div>
            </div>
        </form>
</div>
<script src="js/script.js"></script>
</body>
</html>