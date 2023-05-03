<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function home()
    {
        return response()->file('home.json');
    }

    public function project()
    {
        return response()->file('json/project.json');
    }


    public function about()
    {
        return response()->json(
            [
                'title' => 'About Me',
                'className' => 'about',
                'element' => 'div',
                'content' => [
                    'element-1' => [
                        'className' => 'about--container',
                        'element' => 'div',
                        'content' => [
                            'child-1' => [
                                'className' => 'about__text',
                                'element' => 'p',
                                'content' => 'My name is Estarlyn. I am Dominican and I live in Naples, Italy. I love technology and want to know how these machines work with only electricity and can do so many things. I want to know how these machines respond to every action and how I can create or control one. These are the motivations that led me to want to learn programming. I am currently trying to answer those questions and ask myself more. I want to learn everything, but this is impossible. However, I will try to make it come true.'
                            ]
                        ]
                    ],
                ]
            ]
        );
    }

    public function skill()
    {
        return response()->json(
            [
                'title' => 'Skills',
                'className' => 'skill',
                'element' => 'div',
                'content' => [
                    'element-1' => [
                        'className' => 'skill__list',
                        'element' => 'div',
                        'content' => [
                            'title' => [
                                'className' => 'skill__title',
                                'element' => 'h3',
                                'content' => 'Front'
                            ],
                            'child-1' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'CSS'
                            ],
                            'child-2' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'HTML'
                            ],
                            'child-3' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'JavaScript'
                            ],
                            'child-4' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'React'
                            ]
                        ]
                    ],
                    'element-2' => [
                        'className' => 'skill__list',
                        'element' => 'div',
                        'content' => [
                            'title' => [
                                'className' => 'skill__title',
                                'element' => 'h3',
                                'content' => 'Back'
                            ],
                            'child-1' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'PHP'
                            ],
                            'child-2' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'MySql'
                            ],
                            'child-3' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'Laravel'
                            ],
                            'child-4' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'Symfony'
                            ]
                        ]
                    ],
                    'element-3' => [
                        'className' => 'skill__list',
                        'element' => 'div',
                        'content' => [
                            'title' => [
                                'className' => 'skill__title',
                                'element' => 'h3',
                                'content' => 'App'
                            ],
                            'child-1' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'Figma'
                            ],
                            'child-2' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'Adobe xd'
                            ],
                            'child-3' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'vs Studio code'
                            ],
                            'child-4' => [
                                'className' => 'skill__text',
                                'element' => 'p',
                                'content' => 'Asana'
                            ]
                        ]
                    ]
                ]
            ]
        );
    }

    public function contact()
    {
        return response()->json(
            [
                'title' => 'Contact',
                'className' => 'contact',
                'element' => 'div',
                'content' => [
                    'element-1' => [
                        'className' => 'contact__text',
                        'element' => 'p',
                        'content' =>
                        [
                            'social' => [
                                'className' => 'contact__social',
                                'element' => 'span',
                                'content' => 'LinkedIn: '
                            ],
                            'link' => [
                                'className' => 'contact__link',
                                'element' => 'a',
                                'link' => 'https://www.linkedin.com/in/estarlyn-francisco-hernandez-ulloa-aa029a208/',
                                'content' => 'Estarlyn Hernandez'
                            ]
                        ],
                    ],
                    'element-2' => [
                        'className' => 'contact__text',
                        'element' => 'p',
                        'content' =>
                        [
                            'social' => [
                                'className' => 'contact__social',
                                'element' => 'span',
                                'content' => 'GitHub: '
                            ],
                            'link' => [
                                'className' => 'contact__link',
                                'element' => 'a',
                                'link' => 'https://github.com/EstarlynHernandez',
                                'content' => 'EstarlynHernandez'
                            ]
                        ],
                    ],
                    'element-3' => [
                        'className' => 'contact__text',
                        'element' => 'p',
                        'content' =>
                        [
                            'social' => [
                                'className' => 'contact__social',
                                'element' => 'span',
                                'content' => 'Mail: '
                            ],
                            'link' => [
                                'className' => 'contact__link',
                                'element' => 'a',
                                'link' => 'mailto:estarlynhernandez@hotmail.com',
                                'content' => 'Estarlyn Hernandez'
                            ]
                        ],
                    ],
                    'element-4' => [
                        'className' => 'contact__text',
                        'element' => 'p',
                        'content' =>
                        [
                            'social' => [
                                'className' => 'contact__social',
                                'element' => 'span',
                                'content' => 'Telegram: '
                            ],
                            'link' => [
                                'className' => 'contact__link',
                                'element' => 'a',
                                'link' => 'http://t.me/estarlyn',
                                'content' => 'Estarlyn'
                            ]
                        ],
                    ]
                ]
            ]
        );
    }
}
