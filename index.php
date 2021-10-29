<?php
    $title = "Home";
    require_once "./utils/utils.php";
    require_once "./entity/imagenGaleria.php";
    $galeria[] = new ImagenGaleria("1.jpg", "Descripción imagen 1",1,5,6);
    $galeria[] = new ImagenGaleria("2.jpg", "Descripción imagen 2",3,4,5);
    $galeria[] = new ImagenGaleria("3.jpg", "Descripción imagen 3",4,6,1);
    $galeria[] = new ImagenGaleria("4.jpg", "Descripción imagen 4",3,5,8);
    $galeria[] = new ImagenGaleria("5.jpg", "Descripción imagen 5",4,8,2);
    $galeria[] = new ImagenGaleria("6.jpg", "Descripción imagen 6",6,9,8);
    $galeria[] = new ImagenGaleria("7.jpg", "Descripción imagen 7",9,10,16);
    $galeria[] = new ImagenGaleria("8.jpg", "Descripción imagen 8",10,1,56);
    $galeria[] = new ImagenGaleria("9.jpg", "Descripción imagen 9",11,3,66);
    $galeria[] = new ImagenGaleria("10.jpg", "Descripción imagen 10",14,5,3);
    $galeria[] = new ImagenGaleria("11.jpg", "Descripción imagen 11",13,4,0);
    $galeria[] = new ImagenGaleria("12.jpg", "Descripción imagen 12",15,1,1);

    require_once "./entity/Asociado.php";
    
    
    $asociados[] = new Asociado("Logo","Descripcion imagen","pexels-photo-2486168.jpeg");
    $asociados[] = new Asociado("Logo2","Descripcion imagen","2MB.jpg");
    $asociados[] = new Asociado("Logo3","Descripcion imagen","1.jpg");
    $asociados[] = new Asociado("Logo4","Descripcion imagen","2.jpg");

    $asociados = getAsociados($asociados);
    include("./views/index.view.php");
