<?php
use Core\Router;
Router::connect('/', ['controller' => 'app', 'action' => 'index']);

Router::connect('/register', ['controller' => 'user', 'action' => 'add']);
Router::connect('/register/done', ['controller' => 'user', 'action' => 'register']);

Router::connect('/login', ['controller' => 'user', 'action' => 'log']);
Router::connect('/login/done', ['controller' => 'user', 'action' => 'login']);

Router::connect('/gecko', ['controller' => 'gecko', 'action' => 'add']);
Router::connect('/gecko/done', ['controller' => 'gecko', 'action' => 'gecko']);

Router::connect('/pangolin', ['controller' => 'pangolin', 'action' => 'add']);