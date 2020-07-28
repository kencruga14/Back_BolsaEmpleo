<?php

namespace App;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Company extends Model
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
        'nature',
        'trade_name',
        'email',
        'comercial_activity',
        'phone',
        'cell_phone',
        'web_page',
        'address',
        'state',
    ];

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function professionals()
    {
        return $this->belongsToMany('App\Professional')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
