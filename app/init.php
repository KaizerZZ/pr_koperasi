<?php
    spl_autoload_register(function ($class_name) {
        require_once 'app/controller/'.$class_name . '.php';
    });