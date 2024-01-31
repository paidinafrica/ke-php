<?php

namespace PaidInAfrica\Kenya\Telcos\Airtel;

use PaidInAfrica\Kenya\Telcos\Airtel\Apis\Collection;

class Api
{
    public static function collection(): Collection
    {
        return new Collection();
    }


}