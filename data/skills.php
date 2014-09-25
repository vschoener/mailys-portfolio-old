<?php

$skills = array(
    'office' => array(
        'title' => 'Bureautique',
        'list' => array(
            array(
                'name' => 'MS Excel',
                'percentage' => '90'
            ),
            array(
                'name' => 'MS Word',
                'percentage' => '95'
            ),
            array(
                'name' => 'Power Point',
                'percentage' => '95'
            ),
            array(
                'name' => 'Google Apps',
                'percentage' => '75'
            ),
            array(
                'name' => 'NPD',
                'percentage' => '95'
            ),
            array(
                'name' => 'SAP',
                'percentage' => '80'
            ),
            array(
                'name' => 'Business Objects',
                'percentage' => '80'
            ),
        )
    ),
    'design' => array(
        'title' => 'Graphique',
        'list' => array(
            array(
                'name' => 'Adobe Photoshop',
                'percentage' => '60'
            ),
        )
    ),
    'more' => array(
        'title' => 'Autres',
        'list' => array(
            array(
                'name' => 'Cosmétiques',
                'percentage' => '95'
            ),
            array(
                'name' => 'Parfums',
                'percentage' => '85'
            ),
            array(
                'name' => 'Luxe',
                'percentage' => '80'
            ),
        )
    ),
    'hobbies' => array(
        'title' => 'Hobbies',
        'list' => array(
            array(
                'name' => 'Musique',
                'percentage' => '90'
            ),
            array(
                'name' => 'Sport',
                'percentage' => '80'
            ),
            array(
                'name' => 'Lecture',
                'percentage' => '75'
            ),
            array(
                'name' => 'Voyages',
                'percentage' => '75'
            ),
        )
    ),
    'languages' => array(
        'title' => 'Langues',
        'list' => array(
            array(
                'name' => 'Français',
                'percentage' => '100'
            ),
            array(
                'name' => 'Anglais',
                'percentage' => '90'
            ),
            array(
                'name' => 'Espagnol',
                'percentage' => '70'
            ),
        )
    )
);

i18n::translateArray($skills, 'skills');