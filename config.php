<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Blue Gallery Ghana',
    'description' => 'Website description.',
    'collections' => [
        'news' => [
            'path' => 'news/{date|Y-m-d}/{filename}',
            'sort'  => '-date',
        ],
    ],
    'active' => function ($page, $k) {
        return $page->key == $k ? 'active' : '';
    },
    'customer_logos'    =>  [
        'accra_brewery.png',
        'agility.jpg',
        'alisa_hotels.png',
        'barclays.png',
        'cocobod.png',
        'desimone.png',
        'ecobank.png',
        'eni.png',
        'ericsson.jpg',
        'first-atlantic.png',
        'ghanagas.jpg',
        'gridco.png',
        'gt_bank.png',
        'imperialhomes.jpg',
        'interplast.png',
        'japanmotors.jpg',
        'kosmos.png',
        'mantrac.jpg',
        'movis.jpg',
        'queiroz.png',
        'ranamotors.png',
        'silver_star.png',
        'societegenerale.png',
        'swissport.jpg',
        'tullow.png',
        'vitol.png',
        'voltic.jpg',
        'vra.jpg',
        'zenith.png',
    ],
];
