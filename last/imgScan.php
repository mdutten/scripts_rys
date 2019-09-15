<?php
    $directorio = 'snap';
    $imgs = glob("snap/*.jpg");
    print json_encode($imgs);
