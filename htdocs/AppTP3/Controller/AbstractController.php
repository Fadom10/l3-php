<?php


namespace AppTP3\Controller;

abstract class AbstractController
{
    const TEMPLATE_PATH = '/templates/';

    function render(String $template, array $args = [])
    {
        include 'C:\wamp64\www\l3-php\htdocs\\' . self::TEMPLATE_PATH . $template;
    }
}