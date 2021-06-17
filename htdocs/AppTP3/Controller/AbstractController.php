<?php


namespace AppTP3\Controller;


abstract class AbstractController
{
    function render(String $template, array $args = []) : String
    {
        // TODO recuperer + afficher template
        return '';
    }
}