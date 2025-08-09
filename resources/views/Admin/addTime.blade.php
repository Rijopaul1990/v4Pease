@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('Admin.partials.navbar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Time</h4>

                            <form class="forms-sample" action="{{ route('admin.storeTime') }}" method="POST">
                                @csrf

                                <!-- Choose Counsellor -->
                                <div class="form-group">
                                    <label for="counsellor">Choose Counsellor</label>
                                    <select class="form-control" id="counsellor" name="counsellor">
                                        <option value="">-- Select Counsellor --</option>
                                        @foreach($counsellors as $councellor)
                                            <option value="{{ $councellor['counsellor_id'] }}">{{ $councellor['counsellor_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Choose Date Type and Date -->
                                <div class="form-group">
                                    <label class="d-block">Choose Date</label>
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="date_type" id="specific_date" value="specific" checked>
                                            <label class="form-check-label" for="specific_date">Specific Date</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 ml-3">
                                            <input class="form-check-input" type="radio" name="date_type" id="general_date" value="general">
                                            <label class="form-check-label" for="general_date">General Date</label>
                                        </div>

                                        <div id="dateField" class="ml-4">
                                            <input type="text" class="form-control" id="date" name="date" placeholder="DD-MM-YYYY" style="min-width: 160px;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Interval -->
                                <div class="form-group">
                                    <label for="interval">Set Interval (in minutes)</label>
                                    <select class="form-control" id="interval" name="interval">
                                        <option value="30">30 Minutes</option>
                                        <option value="60">1 Hour</option>
                                        <option value="90">1 Hour 30 Minutes</option>
                                        <option value="120">2 Hours</option>
                                        <option value="150">2 Hours 30 Minutes</option>
                                        <option value="180">3 Hours</option>
                                    </select>
                                </div>

                                <!-- Day Selection -->
                                <div class="form-group" id="daySelection">
                                    <label class="d-block">Day</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        @foreach($genDays as $genDay)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input day-checkbox" type="checkbox" name="days[]" id="{{ $genDay['gen_day_name'] }}" value="{{ $genDay['gen_day_id'] }}">
                                                <label class="form-check-label" for="{{ $genDay['gen_day_name'] }}">{{ $genDay['gen_day_name'] }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- First Session -->
                                <h5 class="mt-4">First Session Time</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="first_start_time">Start Time</label>
                                        <input type="text" class="form-control" id="first_start_time" name="first_start_time" placeholder="HH:MM">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>&nbsp;</label>
                                        <select class="form-control" name="first_start_ampm">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="first_end_time">End Time</label>
                                        <input type="text" class="form-control" id="first_end_time" name="first_end_time" placeholder="HH:MM">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>&nbsp;</label>
                                        <select class="form-control" name="first_end_ampm">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Second Session -->
                                <h5 class="mt-4">Second Session Time</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="second_start_time">Start Time</label>
                                        <input type="text" class="form-control" id="second_start_time" name="second_start_time" placeholder="HH:MM">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>&nbsp;</label>
                                        <select class="form-control" name="second_start_ampm">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="second_end_time">End Time</label>
                                        <input type="text" class="form-control" id="second_end_time" name="second_end_time" placeholder="HH:MM">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>&nbsp;</label>
                                        <select class="form-control" name="second_end_ampm">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

@endpush

@endsection
