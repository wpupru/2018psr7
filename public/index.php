<?php
use Framework\Http\Request;
    
    chdir(dirname(__DIR__));
    require 'vendor/autoload.php';
    
    ### Initialization
    
    $request = new Request();
    
    ### Action
    
    session_start();
    
    function getLang(Request $request, $default)
    {
        return
            !empty($request->getQueryGet()['lang']) ? $_GET['lang']:
                (!empty($request->getCookies()['lang']) ? $_COOKIE['lang'] :
                    (!empty($request->getSession()['lang']) ? $_SESSION['lang']:
                        (!empty($request->getServer()['HTTP_ACCEPT_LANGUAGE']) ?substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2):
        $default)));
    }
    
   
    
    
    
    
    
    $name = $_GET['name'] ?? ['Guest'];
    $lang = getLang($request, 'en');
    
    header('X-Developer: NikoIvs');
    
    echo 'Hello ' . $name . '! Your lang is ' . $lang;
