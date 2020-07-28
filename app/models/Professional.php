<?php

namespace App;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Professional extends Model
{
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql-bolsa_empleo';
    protected $fillable = [
        'identity',
        'first_name',
        'last_name',
        'email',
        'nationality',
        'civil_state',
        'birthdate',
        'gender',
        'phone',
        'address',
        'about_me',
        'state',
    ];

    public function offers()
    {
        return $this->belongsToMany('App\Offer')->withTimestamps();
    }

    public function companies()
    {
        return $this->belongsToMany('App\Company')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function academicFormations()
    {
        return $this->hasMany('App\AcademicFormation');
    }

    public function abilities()
    {
        return $this->hasMany('App\Ability');
    }

    public function languages()
    {
        return $this->hasMany('App\Language');
    }

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function professionalExperiences()
    {
        return $this->hasMany('App\ProfessionalExperience');
    }

    public function professionalReferences()
    {
        return $this->hasMany('App\ProfessionalReference');
    }


}
