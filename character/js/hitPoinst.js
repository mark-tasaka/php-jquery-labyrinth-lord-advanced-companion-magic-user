/*HitPoints randomly generate hit points*/
function hitPoints (level, hdOption, constitutionModifier)
{
    let hitPoints = 0;
    let hitDice = 0;
    //let hitDice = level;
    
    
    if(level <= 9)
        {
            hitDice = level;
        }
    else
        {
            hitDice = 9;
        }
    
    if(hdOption == 1)
        {
    
            for(let counter = 0; counter < hitDice; counter++)
                {
                    let points = 0;

                    points = Math.floor((Math.random() * 4) + 1) + constitutionModifier;

                    if(points < 2)
                        {
                            points = 2;
                        }

                    hitPoints += points;
                }
        }
    else
    {
    
            for(let counter = 0; counter < hitDice; counter++)
                {
                    let points = 0;

                    points = Math.floor((Math.random() * 6) + 1) + constitutionModifier;

                    if(points < 3)
                        {
                            points = 3;
                        }

                    hitPoints += points;
                }
    }

    return hitPoints;
}

function addHighLevelHp(input)
{
    let addHp = 0;
    
    if(input == 10)
        {
            addHp = 1;
        }
    else if(input == 11)
        {
            addHp = 2;
        }
    else if(input == 12)
        {
            addHp = 3;
        }
    else if(input == 13)
        {
            addHp = 4;
        }
    else if(input == 14)
        {
            addHp = 5;
        }
    else if(input == 15)
        {
            addHp = 6;
        }
    
    return addHp;
}