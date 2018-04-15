<?php
if ($_POST) {
    $day = intval($_POST['day']);
    
    if ($_POST['delete'] && ($day && $day <= 31)) {
        $deletedImages = deleteImageByDay($_POST['day']);
        $response = "Error al eliminar imagenes";
        if ($deletedImages) {
            $response = "Se eliminaron" . count($deletedImages);
        } 
        echo $response;
    }
}

/**
 * Delete an image in the directory SNAP.
 * Search in the timestamp of the name of the images
 * @param [int] Day
 * 
 * return [array] of deleted images
 */
function deleteImageByDay($day)
{
    return array_map('unlink', glob("*{$day}???????.jpg"));
}
?>

<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
    <form method="POST">
        Dia de la imagen a borrar:<br>
        <input type="number" name="day" >
        <br>
        <button type="submit" name="delete" value="true"> Borrar imagen </button>
    </form>
</body>
</html>