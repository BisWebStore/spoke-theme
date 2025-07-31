<?php

/**
 * @copyright Tim Bischoff - Software Developer
 * @link https://bisweb.de
 * @author Tim Bischoff - Software Developer <tim.bischoff@bisweb.de>
 */

declare(strict_types=1);

$aTheme = [
    'id' => 'spoke',
    'title' => 'Spoke Theme',
    'description' => 'Spoke - Bootstrap 5 TWIG Theme',
    'thumbnail' => 'spoke.png',
    'version' => '1.0.0',
    'author' => 'Tim Bischoff, Software Developer BisWeb.de',
    'settings' => [
        [
            'group' => 'footer',
            'name'  => 'sGitHubUrl',
            'type'  => 'str',
            'value' => 'https://github.com',
        ],
    ],
    'parentTheme' => 'apex',
    'parentVersions' => ['2.1.0'],
];
