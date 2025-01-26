<?php

 namespace App\Enums;
 
 use App\Traits\EnumTrait;

enum TypeBacEnum: string
{
    use EnumTrait;

    case MATH = 'MATH';
    case FRENCH = 'FRENCH';
    case PHYSICS = 'PHYSICS';
    case SCIENCE = 'SCIENCE';
}