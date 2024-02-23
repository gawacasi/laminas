<?php
namespace Album;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
  'controllers' => [
    'factories' => [
      Controller\AlbumController::class => InvokableFactory::class,
      ]
    ],
    "view_manager" => [
      'template_path_stack' => [
        __DIR__ . '/../view',
      ],
    ]
  ];
