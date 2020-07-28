<?php

namespace App;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Course extends Model
{
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'event_type',
        'institution',
        'event_name',
        'start_date',
        'finish_date',
        'hours',
        'type_certification',
        'state',
    ];

    public function profsesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
