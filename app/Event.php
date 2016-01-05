<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =['event_name','event_type_id','event_description','event_venue','event_start_date','event_end_date','event_start_time','event_end_time','max_seats','registration_open_date','registration_close_date'];

	public function eventType() {
        return $this->hasOne('App\EventType', 'event_type_id', 'event_type_id');
    }

}