<?php

function level1Spells ($level)
{
    $spells = 0;
    
    if($level == 1)
    {
        $spells = 1;
    }
    else if($level >= 2 && $level <= 6)
    {
        $spells = 2;
    }
    else if($level >= 7 && $level <= 10)
    {
        $spells = 3;
    }
    else if($level >= 11 && $level <= 14)
    {
        $spells = 4;
    }
    else if($level >= 15)
    {
        $spells = 5;
    }
    
    return $spells;
    
}

function level2Spells ($level)
{
    $spells = 0;
    
    if($level == 3)
    {
        $spells = 1;
    }
    else if($level >= 4 && $level <= 7)
    {
        $spells = 2;
    }
    else if($level >= 8 && $level <= 11)
    {
        $spells = 3;
    }
    else if($level >= 12 && $level <= 15)
    {
        $spells = 4;
    }
    
    return $spells;
    
}


function level3Spells ($level)
{
    $spells = 0;
    
    if($level == 5)
    {
        $spells = 1;
    }
    else if($level >= 6 && $level <= 8)
    {
        $spells = 2;
    }
    else if($level >= 9 && $level <= 12)
    {
        $spells = 3;
    }
    else if($level >= 13 && $level <= 16)
    {
        $spells = 4;
    }
    
    return $spells;
    
}


function level4Spells ($level)
{
    $spells = 0;
    
    
    if($level == 7)
    {
        $spells = 1;
    }
    else if($level >= 8 && $level <= 9)
    {
        $spells = 2;
    }
    else if($level >= 10 && $level <= 13)
    {
        $spells = 3;
    }
    else if($level >= 14 && $level <= 17)
    {
        $spells = 4;
    }
    
    return $spells;
    
}

function level5Spells ($level)
{
    $spells = 0;
    
    if($level == 9)
    {
        $spells = 1;
    }
    else if($level >= 10 && $level <= 11)
    {
        $spells = 2;
    }
    else if($level >= 12 && $level <= 14)
    {
        $spells = 3;
    }
    else if($level >= 15 && $level <= 18)
    {
        $spells = 4;
    }
    
    return $spells;
    
}


function level6Spells ($level)
{
    $spells = 0;
    
    if($level == 11)
    {
        $spells = 1;
    }
    else if($level >= 12 && $level <= 13)
    {
        $spells = 2;
    }
    else if($level >= 14 && $level <= 15)
    {
        $spells = 3;
    }
    else if($level >= 16 && $level <= 19)
    {
        $spells = 4;
    }
    
    return $spells;
    
}


function level7Spells ($level)
{
    $spells = 0;
    
    if($level == 13)
    {
        $spells = 1;
    }
    else if($level >= 14 && $level <= 15)
    {
        $spells = 2;
    }
    else if($level == 16)
    {
        $spells = 3;
    }
    else if($level >= 17)
    {
        $spells = 4;
    }
    
    return $spells;
    
}


function level8Spells ($level)
{
    $spells = 0;
    
    if($level == 15)
    {
        $spells = 1;
    }
    else if($level == 16)
    {
        $spells = 2;
    }
    else if($level == 17)
    {
        $spells = 3;
    }
    else if($level >= 18)
    {
        $spells = 4;
    }
    
    return $spells;
    
}



?>