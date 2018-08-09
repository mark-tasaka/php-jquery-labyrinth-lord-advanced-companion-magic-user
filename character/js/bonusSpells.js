
function spellProbability (intelligence)
{
    let message = "";
    
    if(intelligence === 3)
        {
            message = "20% spell learning probability; minimum spells per level: 2; maximum spells per level: 3";
        }
    else if(intelligence >= 4 && intelligence <= 5)
        {
            message = "30% spell learning probability; minimum spells per level: 2; maximum spells per level: 4";
        }
    else if(intelligence >= 6 && intelligence <= 7)
        {
            message = "35% spell learning probability; minimum spells per level: 2; maximum spells per level: 5";
        }
    else if(intelligence >= 8 && intelligence <= 9)
        {
            message = "40% spell learning probability; minimum spells per level: 3; maximum spells per level: 6";
        }
    else if(intelligence >= 10 && intelligence <= 12)
        {
            message = "50% spell learning probability; minimum spells per level: 4; maximum spells per level: 7";
        }
    else if(intelligence >= 13 && intelligence <= 14)
        {
            message = "70% spell learning probability; minimum spells per level: 5; maximum spells per level: 9";
        }
    else if(intelligence >= 15 && intelligence <= 16)
        {
            message = "75% spell learning probability; minimum spells per level: 6; maximum spells per level: 11";
        }
    else if(intelligence === 17)
        {
            message = "85% spell learning probability; minimum spells per level: 7; maximum spells per level: Unlimited";
        }
    else if(intelligence === 18)
        {
            message = "90% spell learning probability; minimum spells per level: 8; maximum spells per level: Unlimited";
        }
    
    return message;
}