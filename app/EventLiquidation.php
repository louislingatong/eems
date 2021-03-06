<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLiquidation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'event_id'
    ];

    /**
     * Get user record associated with the liquidation.
     *
     * return mixed
     */
    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get event record associated with the liquidation.
     *
     * return mixed
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    /**
     * Get all expenses associated with the liquidation.
     *
     * @return mixed
     */
    public function expenses()
    {
        return $this->hasMany('App\EventLiquidationExpense');
    }
}
