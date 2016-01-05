<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
        $event=new Event;
       
        $event->event_name = Input::get('event_name');
        $event->event_type_id = Input::get('event_type_id');
        $event->membership_id= Auth::user()->user('id');
        $event->event_start_date = Input::get('event_start_date');
        $event->event_end_date = Input::get('event_end_date');
        $event->event_start_time = Input::get('event_start_time');
        $event->event_end_time = Input::get('event_end_time');
        $event->event_venue = Input::get('event_venue');
        $event->event_description = Input::get('event_description');
        $event->max_seats = Input::get('max_seats');
        $event->payment_option = Input::get('payment_option');
        $event->payment_deadline_date = Input::get('payment_deadline_date');
        $event->payment_deadline_time = Input::get('payment_deadline_time');
        $event->registration_close_date = Input::get('registration_close_date');
        $event->registration_open_date = Input::get('registration_open_date');

             $event->save();   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
