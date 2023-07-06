<?php

namespace App\Enum;

enum MovieTypes : string
{
    case Action = "Action";
    case Fantasy = "Fantastique";
    case ScienceFiction = "Science fiction";
    case Drama = "Drame";
    case Comedy = "Comédie";
    case Thriller = "Thriller";
    case adventure = "Aventure";
}