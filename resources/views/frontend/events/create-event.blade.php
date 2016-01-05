@extends('frontend.master')

@section('custom-styles')
  
@endsection
@section('title', 'Create Event')
@section('main')
  <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div>
              <h3 class="section-header-style">Create Event Form</h3>
          </div>
           
           @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          
           <!-- <div class="page-header">
            <div class="col-md-8">
              <h3 id="stepText"> <small id="stepSubText"></small></h3>
            </div>
            <div class="col-md-4">
              <p class="pull-right" style="    font-size: 14px;    margin: 35px 15px; color: RED;font-weight: bold;letter-spacing: 1px;">field with * are required</p>
            </div>
          </div> -->

            {!! Form::open(['url' => ['createEvent']]) !!}
            <div class="steps" data-stp=1>

              <div class="form-group">
              <label for="event_name" class="req">Event Title*</label>
              {!! Form::text('event_name', null, ['class' => 'form-control', 'placeholder' => 'Title of the Event']) !!}
               </div>
            
              
               <div class="form-group">
                <label for="event_type_id" class="req">Event Type*</label><br>
               {!! Form::select('event_type_id', array('1' => 'Conference', '2' => 'Seminar or Talks','3'=>'Cultural','4'=>'Workshop',5=>'Other')); !!}
               <br>
               </div>


            <div class="form-group">
              <label for="event_start_date" class="req">Start Date*</label>
              {!! Form::text('event_start_date', null, ['class'=>'form-control', 'id'=>'event_start_date'])!!}
              <span class="help-text"></span>
            </div>

            

             <div class="form-group">
              <label for="event_end_date" class="req">End Date*</label>
              {!! Form::text('event_end_date', null, ['class'=>'form-control', 'id'=>'event_end_date'])!!}
              <span class="help-text"></span>
            </div>

              <div class="form-group">
              <label for="event_start_time" class="req">Start Time(HH:MM:SS)*</label>
              {!! Form::text('event_start_time', null, ['class' => 'form-control', 'placeholder' => 'Start Time']) !!}
               </div>

                <div class="form-group">
              <label for="event_end_time" class="req">End Time(HH:MM:SS)*</label>
              {!! Form::text('event_end_time', null, ['class' => 'form-control', 'placeholder' => 'End Time']) !!}
               </div>


            <div class="form-group">
              <label for="event_venue" class="req">Event Venue*</label>
              {!! Form::text('event_venue', null, ['class' => 'form-control', 'placeholder' => 'Venue of the Event']) !!}
            </div>

            <div class="form-group">
              <label for="event_description" class="req">Event Description*</label>
              {!! Form::text('event_description', null, ['class' => 'form-control', 'placeholder' => 'Description of the Event']) !!}
            </div>

            <div class="form-group">
              <label for="max_seats" class="req">Event Seats*</label>
              {!! Form::text('max_seats', null, ['class' => 'form-control', 'placeholder' => 'Maximum seats of the Event']) !!}
            </div>


           <div class="form-group">
              <label class="req">Payment Option*</label>
                  <div class="radio">
                <label class="radio-inline">
                <input type="radio" name="payment_option" id="payment_option" value="0"> Unpaid
              </label>
              <label class="radio-inline">
                <input type="radio" name="payment_option" id="payment_option" value="1"> Paid
              </label>
                
              </div>
            </div>

            <div class="form-group">
              <label for="registration_open_date" class="req">Registration Open Date*</label>
              {!! Form::text('registration_open_date', null, ['class'=>'form-control', 'id'=>'registration_open_date'])!!}
              <span class="help-text"></span>
            </div>

             <div class="form-group">
              <label for="registration_close_date" class="req">Registration Close Date*</label>
              {!! Form::text('registration_close_date', null, ['class'=>'form-control', 'id'=>'registration_close_date'])!!}
              <span class="help-text"></span>
            </div>

            <div class="form-group">
              <label for="payment_date_deadline" class="req">Payment Deadline Date(If Paid)*</label>
              {!! Form::text('payment_date_deadline', null, ['class'=>'form-control', 'id'=>'payment_date_deadline'])!!}
              <span class="help-text"></span>
            </div>

             <div class="form-group">
              <label for="payment_time_deadline" class="req">Payment Deadline Time(HH:MM:SS)*</label>
              {!! Form::text('payment_time_deadline', null, ['class' => 'form-control', 'placeholder' => 'Deadline Time']) !!}
               </div>

                <div class="form-group">
            {!! Form::submit('Submit') !!}    
            </div>  
            
            
          


            

          

          {!! Form::Close() !!}
          </div>
        </div>
      </div>
    </section>
@endsection


@section('footer-scripts')
  
  <script src={{ asset('js/events.js') }}></script>
  <script src={{ asset("js/validateit.js") }}></script>
@endsection