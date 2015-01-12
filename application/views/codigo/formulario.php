<?= form_open('/code/recibirdatos')?>

<?php
    $nombre = array(
        'name'=>'nombre',
        'id' => 'usuario',
        'placeholder' => 'ingrese nombre',
        'maxlength' => '100',
        'size' => '50',
        'style' => 'width:25%'
    );
?>
<?php
$video = array(
    'name'=>'video',
    'id' => 'video',
    'placeholder' => 'ingrese videos',
    'maxlength' => '100',
    'size' => '50',
    'style' => 'width:25%'
);
?>

<?= form_label('Nombre: ','nombre')?>
<?= form_input($nombre) ?>
<br><br>
<?= form_label('Videos: ','video')?>
<?= form_input($video) ?>
<br><br>





<?= form_submit('','Subir Info') ?>
<?= form_close()?>


</body>
</html>