<?php

namespace App;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Language extends Model
{
    use \OwenIt\Auditing\Auditable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'description',
        'written_level',
        'spoken_level',
        'reading_level',
        'state',
    ];

    public function profsesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
