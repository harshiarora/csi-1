<?php

namespace App\Http\Controllers;

use App\CsiRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CreateEventRequest;
use App\Event;


class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {   
        $verified = Auth::user()->user()->is_verified;
        return view('frontend.dashboard.home', compact('verified') );
    }

    /**
     * [showProfile - profile show for any user]
     * @return [type] [description]
     */
    public function showProfile(){

        $user = Auth::user()->user();

        return view('frontend.dashboard.profile', compact('user'));
    }

    public function confirmStudentBranch() {
        return view('frontend.dashboard.confirmStudentBranch');
    }

    public function makeStudentBranch() {
        
        if(Auth::user()->user()->subType->subType->is_student_branch != 1) {
            $user = Auth::user()->user();
            
            $academic = $user->subType->subType;
            $academic->is_student_branch = 0;
            $academic->save();

            CsiRequest::create([
                'requested_by' => $user->id,
                'request_type' => 2,
            ]);
            Flash::success('Your request Has been Sent successfully');
        } else {
            Flash::success('You are already a student branch');
        }
        
        return Redirect::to('/dashboard');
    }

    /**
     * [addNominee - to add nominee, use middleware for verifying if a logged in institution]
     * @return  [type] [<description>]
     */
    public function addNominee(){

    }


    /**
     * [applyStudentBranch apply for student branch, use middleware to check for logged in academic institution]
     * @return [type] [description]
     */
    public function applyStudentBranch(){

    }


    /**
     * [showCard show CSI card details]
     * @return [type] [description]
     */
    public function showCard(){
        $user = Auth::user()->user();

        return view('frontend.dashboard.card', compact('user'));
    }

    /**
     * [bulkPayments for doing bulk payments]
     * @return [type] [description]
     */
    public function bulkPayments(){

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
    public function store(Request $request)
    {
        //
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

     public function createEvent(){
    return view('frontend.events.create-event');
    }

     public function storeEvent(CreateEventRequest $request)
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
}
