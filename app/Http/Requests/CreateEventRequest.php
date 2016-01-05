<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event_name'=>'required|string',
            'event_type_id'=>'required',
            'event_start_date'=>'required|date_format:d/m/Y',
            'event_end_date'=>'required|date_format:d/m/Y',
            'event_start_time'=>'required',
            'event_end_time'=>'required',
            'event_venue'=>'required|string',
            'event_description'=>'required|string',
            'max_seats'=>'required',
            'payment_option'=>'required',
            'registration_close_date'=>'required|date_format:d/m/Y',
            'registration_open_date'=>'required|date_format:d/m/Y',
            'payment_deadline_date'=>'date_format:d/m/Y',

            //'payment_deadline_time'=>
            //
        ];
    }
}
