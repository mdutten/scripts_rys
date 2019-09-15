<!DOCTYPE html>
<html>
<?php
    const DS = DIRECTORY_SEPARATOR;

    $files = glob("snap/*.jpg");
    $lastImageIndex = count($files) - 1; 
    $lastImage = $files[$lastImageIndex];
    $image = ($lastImage) ? curPageURL() . $lastImage :  'https://es.stackoverflow.com/questions/95312/c%C3%B3mo-mostrar-una-imagen-de-pre-carga-con-angular-2?rq=1';  
?>
<head>
<title>Herramienta para visualizar la ultima imagen.</title>   
<body>
    <img id='sld-image' src=<?php echo $image ?> onclick="nextElement()" number = 0> 
</body>
            
   
 </html>

 <?php
function curPageURL() {
 return "http://roboticayseguridad.com.ar/d/cielo/FI9900P_00626E6C464B/";
 ;
}
?>