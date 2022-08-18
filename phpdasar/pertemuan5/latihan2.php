<?php 
// Pengulangan pada array
// for / foreach
$angka = [3,4,15,20,11,77,89,24];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 2</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>

    <div class=" clear"></div>

    <?php foreach( $angka as $a )  { ?>
    <div class="kotak"><?php echo $a; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
    <div class="kotak">
        <?= $a; ?>
    </div>
    <?php endforeach;
    ?></<body>

</html>