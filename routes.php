<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',

    '/campeons' => '../App/Controllers/CampeonsController.php@index',
    '/campeons/create' => '../App/Controllers/CampeonsController.php@create',
    '/campeons/store' => '../App/Controllers/CampeonsController.php@store',
    '/campeons/edit/{id}' => '../App/Controllers/CampeonsController.php@edit',
    '/campeons/update/{id}' => '../App/Controllers/CampeonsController.php@update',
    '/campeons/delete/{id}' => '../App/Controllers/CampeonsController.php@delete',
    '/campeons/destroy/{id}' => '../App/Controllers/CampeonsController.php@destroy',
    '/campeons/confirm-delete/{id}' => '../App/Controllers/CampeonsController.php@confirmDelete',

];