<?php

if(!function_exists('originPage')){
    function originPage(String $origin): string
    {
        switch($origin){
            case 'internship':
                return "Internship";
            case 'skills':
                return "Professional Skills Development";
            case 'adult':
                return "Adult Education";
            default:
                return "Unknown Origin";
        }

    }
}
