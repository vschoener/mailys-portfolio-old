<?php

$intl_fields = array(
    'date_start',
    'date_end',
    'name',
    'short_desc',
    'business_name',
    'location',
    'description'
);

$experiences = array(
    'company' => array(
        'title' => 'Experience',
        'list' => array(),
        'company_list' => array(
            'swaroski',
            'sa_bassa_torja',
            'carat',
            'INSEEC',
            'asso_ece',
            'sephora',
            'bpi',
        )
    ),
    'education' => array(
        'title' => 'Education',
        'list' => array(),
        'company_list' => array(
            'lycee',
            'groningen',
            'ece_lyon',
            'ium'
        )
    ),
);

foreach($experiences as $experience_type => $experience_data) {
    foreach($experience_data['company_list'] as $company_name) {
        $tmp = array();
        foreach($intl_fields as $field_name) {
            $tmp[$field_name] = __('L::experiences_'.$experience_type.'_'.$company_name.'_'.$field_name);
        }
        $experiences[$experience_type]['list'][] = $tmp;
    }
}

// Order by the end
krsort($experiences['education']['list']);
krsort($experiences['company']['list']);