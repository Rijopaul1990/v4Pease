@extends('layouts.app')

@section('title', 'About Page')

@section('content')
<style>
   .mt-100{margin-top: 100px}body{background: #00B4DB;background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);background: linear-gradient(to right, #0083B0, #00B4DB);color: #514B64;min-height: 100vh}
  </style>
  
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Counselor <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Qualified Counselor</h1>
        </div>
    </div>
    </div>
</section>
<div class="container mt-5 mb-5">
  <form action="{{ url('/saveBookingData') }}" method="POST">
@csrf 

    <div class="form-row">
      
      <!-- Counselor Dropdown -->
       <div class="col-md-4 mb-3">
        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
      </div>
      <div class="col-md-4 mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="col-md-4 mb-3">
        <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
      </div>
    </div>

    <div class="form-row">
      
      <!-- Counselor Dropdown -->
       <div class="col-md-4 mb-3">
        <select class="form-control" id="sel1" name="sellist1">
          <option>Gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="col-md-4 mb-3">
        <input type="text" class="form-control" id="datepicker" placeholder="Date of Birth" readonly>
      </div>
      <div class="col-md-4 mb-3">
        <select class="form-control" id="sel1" name="sellist1">
          <option>Select Mode Of Session</option>
          <option>In Person</option>
          <option>Online</option>
        </select>
      </div>
    </div>


     

    <!-- First Row: Counselor, Date, Time -->
    <div class="form-row">
      
      <!-- Counselor Dropdown -->
      <div class="col-md-4 mb-3">
        <select class="form-control" id="councellor_drop" name="sellist1">
          <option>Select Counsellors</option>
          @foreach($counsellors as $councellor)
            <option value="{{ $councellor['counsellor_id'] }}">{{ $councellor['counsellor_name'] }}</option>
          @endforeach
        </select>
      </div>

      <!-- Date Picker -->
      <div class="col-md-4 mb-3">
        <input type="text" class="form-control" id="datepicker2" placeholder="Choose your date" readonly>
      </div>

      <!-- Time Dropdown -->
      <div class="col-md-4 mb-3">
        
     <select id="choices-multiple-remove-button" placeholder="Select your time slot." multiple>
        <?php foreach($timings as $time) { ?>
            <option value="1"><?= $time['gen_day_time']; ?></option>
        <?php } ?>
            <!-- <option value="2">10:30 AM - 11:00 AM</option>
            <option value="3">11:00 AM - 11:30 AM</option>
            <option value="4">11:30 AM - 12:00 PM</option>
            <option value="5">12:00 PM - 12:30 PM</option>
            <option value="6">12:30 PM - 01:00 PM</option>
            
            <option value="7">02:00 PM - 02:30 PM</option>
            <option value="8">02:30 PM - 03:00 PM</option>
            <option value="9">03:00 PM - 03:30 PM</option>
            <option value="10">03:30 PM - 04:00 PM</option>
            <option value="11">04:00 PM - 04:30 PM</option>
            <option value="12">04:30 PM - 05:00 PM</option> -->
        </select> 

      </div>

    </div>


    
    <input type="hidden" value="" id="totalHour" name="totalHour"/>
    <input type="hidden" value="" id="totalPrice" name="totalPrice"/>

    <!-- Second Row: Submit -->
    <div class="form-row">
      <div class="col-md-12 text-center">
        <button type="submit" id="proceed-btn" class="btn btn-success px-5"><span>0$</span> </button>
      </div>
    </div>

  </form>
</div>
@endsection