<?php

    include '../src/class.igdb.php';

    $IGDB = new IGDB('<YOUR API KEY>');

    $options = array(
        'id' => array(1, 2, 3), // first three games by ID
        'fields' => array('name', 'themes.url', 'themes.name', 'themes.slug'), // Fields from game and themes tables
        'expand' => array('game', 'themes') // connecting the game and themes tables
    );

    $result = $IGDB->game($options);

    var_dump($result);

?>