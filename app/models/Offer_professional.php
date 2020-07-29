<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Offer_professional extends Model
{
    use \OwenIt\Auditing\Auditable;
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'offer_id',
        'professional_id',
    ];
}
