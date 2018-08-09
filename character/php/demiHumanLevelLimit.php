<?php
/*Magic User Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Elf")
    {
        if($level <= 11)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 11;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 10)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 10;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>