<?php

namespace App;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProfessionalExperience extends Model
{
   
    use \OwenIt\Auditing\Auditable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'employer',
        'position',
        'job_description',
        'start_date',
        'finish_date',
        'reason_leave',
        'current_work',
        'state',
    ];

    public function profsesional()
    {
        return $this->belongsTo('App\Professional');
    }

}
