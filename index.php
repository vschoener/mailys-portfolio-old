<?php

require_once __DIR__.'/config/core.php';

echo $twig->render('layout.twig', array(
        'skills' => $skills,
        'experiences' => $experiences,
    )
);