<?php
    session_start();
    $title = "Home";
    require_once "./utils/utils.php";
    require_once "./entity/ImagenGaleria.php";
    require_once "./entity/Asociado.php";
    require_once "./repository/ImagenGaleriaRepository.php";
    require_once "./repository/AsociadoRepository.php";
    require_once "./repository/CategoriaRepository.php";
    require_once "./entity/Categoria.php";

    $config = require_once 'app/config.php';
    App::bind('config',$config);
    App::bind('connection', Connection::make($config['database']));
    $repositorioimagenes = new ImagenGaleriaRepository();
    $galeria = $repositorioimagenes->findAll();
    
    $repositorioasociados = new AsociadoRepository();
    $asociados = $repositorioasociados->findAll();
    

    include("./views/index.view.php");