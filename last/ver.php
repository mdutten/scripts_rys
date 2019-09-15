<?php
if ($_POST) {
    $day=$_POST['day'];
    if ($_POST && $_POST['visualizar']) {//&& ($day && $day <= 31)) {        
        $directorio = 'snap';
        $imgs = glob("snap/*{$day}????.jpg");
        //var_dump($imgs); die;
}}
?>
<!DOCTYPE html>
<html>
<head>
<title>Herramienta para visualizar imagnes de un dia especifico.</title>   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        function nextElement() {
            var imageUrls = <?php echo json_encode($imgs) ?>;
            var i = document.getElementById('sld-image').getAttribute('number');
            var nFotos = imageUrls.length;
            console.log(i);
            console.log(nFotos);
            if (i < nFotos) {
                document.getElementById("sld-image").src = imageUrls[i];
                document.getElementById('sld-image').setAttribute("number", ++i);    
            } else if (i == nFotos){
                document.getElementById('sld-image').setAttribute("number", 0);
                var i = 0;
                document.getElementById("sld-image").src = imageUrls[i];
                document.getElementById('sld-image').setAttribute("number", ++i);    
            
            }
        }

    </script>
 </head>
 <body>
     <img id='sld-image' src="https://www.cisco.com/c/en_sg/partners/sell-integrate-consult/incentives-promotions/ciscostart/_jcr_content/Grid/category_atl_d8e8/layout-category-atl/blade_dceb/bladeContents/thirds_da4/Th-Third-1/tile_6ce3/image.img.jpg/1505201383392.jpg" onclick="nextElement()" number = 0> 

    <form method="POST">
        Dia y hora (dd-hh) de la imagen a visualizar:<br>
        <input type="string" name="day" >
        <br>
        <button type="submit" name="visualizar" value="true"> Seleccionar imagenes </button>
    </form>
</body>
</html>