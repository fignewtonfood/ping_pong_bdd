<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    session_start();
    $_SESSION['number'] = array();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function () use ($app){
        return $app['twig']->render('input.html.twig', array('input' => $input_number));
    });

    $app->post("/ping-pong", function () use ($app){
        return $app['twig']->render('output.html.twig' array('output' => $final_array));
    })
?>
