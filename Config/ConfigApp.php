<?php

class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=>'YMCAController#home',
        'home'=>'YMCAController#home',
        'edicion'=>'YMCAController#edicion',
        'equipos'=>'YMCAController#equipos',
        'resultados'=>'YMCAController#resultados',
        'reglamento'=>'YMCAController#reglamento',
        'inscripciones'=>'YMCAController#inscripciones',
        'contacto'=>'YMCAController#contacto',
        'login'=>'LoginController#login'
    ];
}