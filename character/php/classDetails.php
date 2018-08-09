<?php

/*Illusionist*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "2,501";
            break;
            
        case 2:
            $xp = "5,001";
            break;
            
        case 3:
            $xp = "10,001";
            break;
            
        case 4:
            $xp = "20,001";
            break;
            
        case 5:
            $xp = "40,001";
            break;
            
        case 6:
            $xp = "80,001";
            break;
            
        case 7:
            $xp = "160,001";
            break;
            
        case 8:
            $xp = "310,001";
            break;
            
        case 9:
            $xp = "460,001";
            break;
            
        case 10:
            $xp = "610,001";
            break;
            
        case 11:
            $xp = "760,001";
            break;
            
        case 12:
            $xp = "910,001";
            break;
            
        case 13:
            $xp = "1,060,001";
            break;
            
        case 14:
            $xp = "1,210,001";
            break;
            
        case 15:
            $xp = "1,360,001";
            break;
            
        default:
            $xp = "";
            
    }
    
    return $xp;
}


function thacoAdjust ($level)
{
    $minusThaco = 1;
    
    if($level >= 4 && $level <= 7)
    {
        $minusThaco = 2;
    }
    else if($level >= 8 && $level <= 10)
    {
        $minusThaco = 3;
    }
    else if($level >= 11 && $level <= 12)
    {
        $minusThaco = 4;
    }
    else if($level == 13)
    {
        $minusThaco = 5;
    }
    else if($level >= 14 && $level <= 15)
    {
        $minusThaco = 6;
    }
    
    return $minusThaco;
}

function saveBreathAttacks ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 5)
    {
        $save = 16;
    }
    else if($level >= 6 && $level <= 10)
    {
        $save = 14;
    }
    else if($level >= 11 && $level <= 15)
    {
        $save = 12;
    }
    
    return $save;
}

function savePoisonDeath ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 5)
    {
        $save = 13;
    }
    else if($level >= 6 && $level <= 10)
    {
        $save = 11;
    }
    else if($level >= 11 && $level <= 15)
    {
        $save = 9;
    }
    
    return $save;
}

function savePetrify ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 5)
    {
        $save = 13;
    }
    else if($level >= 6 && $level <= 10)
    {
        $save = 11;
    }
    else if($level >= 11 && $level <= 15)
    {
        $save = 9;
    }
    
    return $save;
}


function saveWand ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 5)
    {
        $save = 13;
    }
    else if($level >= 6 && $level <= 10)
    {
        $save = 11;
    }
    else if($level >= 11 && $level <= 15)
    {
        $save = 9;
    }
    
    return $save;
}


function saveSpell ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 5)
    {
        $save = 14;
    }
    else if($level >= 6 && $level <= 10)
    {
        $save = 12;
    }
    else if($level >= 11 && $level <= 15)
    {
        $save = 8;
    }
    
    return $save;
}



?>