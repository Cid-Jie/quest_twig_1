<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);

/*echo $twig->render('home.html.twig', array(
    'name' => 'Michel',
    'age' => 10,

    'users' => array(
        array('name' => 'Max', 'age' => 22),
        array('name' => 'James', 'age' => 35),
        array('name' => 'Billy', 'age' => 56)
    )
));*/
