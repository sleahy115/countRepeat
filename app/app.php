<?php

    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

   $app->get("/", function() use ($app) {
       return $app['twig']->render('phrase-input.html.twig');
   });

   $app->post("/phrase-output", function() use ($app) {

       $new_phrase = new RepeatCounter($_POST["phrase"],$_POST["search"]);
       $matches = RepeatCounter:: countRepeats($_POST["phrase"],$_POST["search"]);
       $how_many_chars = RepeatCounter::countChars($_POST["phrase"]);
       $how_many_words = RepeatCounter::countWords($_POST["phrase"]);

       return $app['twig']->render('phrase-output.html.twig',array("count"=>$matches, "phrase" =>$_POST["phrase"], "word"=>$_POST["search"], "number_chars"=>$how_many_chars, "number_words"=>$how_many_words));
   });

   return $app;
?>
