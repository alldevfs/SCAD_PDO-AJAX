<?php

require_once 'model/class/Config.php';

spl_autoload_register('carregarClasse');

function carregarClasse($nameClasse)
{
    if (file_exists('model/class/' . $nameClasse . '.php')) {
        require_once 'model/class/' .$nameClasse . '.php';
    }
}