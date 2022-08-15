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
    'collection' => [
        'home'   =>
        [
            'cover_photo' => '/assets/images/collection_ditre_high.jpg',
            'title' => 'World Class Home Furniture',
            'description' => 'Modern, Stylish and exclusive. Blue Gallery only stocks the highest standards of sofas, armchairs, coffee tables, Beds and mattresses for the contemporary living room',
            'sections' => [
                [
                    'section_header' => 'Sofas for the comfort of your family and your guests',
                    'section_description' => 'Our Sofas combine comfort and practicality. They\'re both beautiful and versatile.',
                    'section_items' => [
                        [
                            'name' =>  'first sofa',
                            'description' =>  'first sofa description',
                        ],
                        [
                            'name' =>  'second sofa',
                            'description' =>  'second sofa description',
                        ],
                    ]
                ],
                [
                    'section_header' => 'Our Armchairs have Style, Strength and Grace',
                    'section_description' => 'Sturdy, chique and with personality',
                    'section_items' => [
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'first Armchair',
                            'description' =>  'first Armchair description',
                        ],
                        [
                            'name' =>  'second Armchair',
                            'description' =>  'second Armchair description',
                        ],
                    ]
                ],
                [
                    'section_header' => 'Our Beds',
                    'section_description' => 'You spend a third of your life in bed. Make the best out of it.',
                    'section_items' => [
                        [
                            'name' =>  'first sofa',
                            'description' =>  'first sofa description',
                        ],
                        [
                            'name' =>  'second sofa',
                            'description' =>  'second sofa description',
                        ],
                    ]
                ],
            ]
        ]
    ]
];
