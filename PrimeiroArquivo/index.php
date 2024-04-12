<?php

require 'vendor/autoload.php';

use App\Src\Usuario;
use App\Src\Prof;
use App\Src\Admin;
use App\Src\AdminSupremo;
use App\Src\UsuarioFactory;
use App\Src\Login;

$login = new Login();
$login->executar('eu', '123');