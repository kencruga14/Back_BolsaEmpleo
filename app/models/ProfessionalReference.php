<?php

namespace App;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProfessionalReference extends Model
{
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'institution',
        'position',
        'contact',
        'phone',
        'state',
    ];

    public function profssesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
