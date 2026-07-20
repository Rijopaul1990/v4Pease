@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('Admin.partials.navbar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                                <h4 class="card-title mb-0">All Bookings</h4>

                                {{-- Counsellor filter --}}
                                <form method="GET" action="{{ route('admin.bookings') }}" class="form-inline">
                                    <label class="mr-2 mb-0">Filter by Counsellor:</label>
                                    <select name="counsellor_id" class="form-control mr-2" onchange="this.form.submit()">
                                        <option value="">All Counsellors</option>
                                        @foreach($counsellors as $c)
                                            <option value="{{ $c->counsellor_id }}" {{ (string)$counsellorId === (string)$c->counsellor_id ? 'selected' : '' }}>
                                                {{ $c->counsellor_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if($counsellorId)
                                        <a href="{{ route('admin.bookings') }}" class="btn btn-sm btn-light">Clear</a>
                                    @endif
                                </form>
                            </div>

                            {{-- Tabs --}}
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#upcoming" role="tab">
                                        Upcoming <span class="badge badge-primary ml-1">{{ $upcoming->count() }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#completed" role="tab">
                                        Completed <span class="badge badge-secondary ml-1">{{ $completed->count() }}</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content pt-3">
                                <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
                                    @include('Admin.partials.bookings_table', ['rows' => $upcoming, 'emptyText' => 'No upcoming bookings.'])
                                </div>
                                <div class="tab-pane fade" id="completed" role="tabpanel">
                                    @include('Admin.partials.bookings_table', ['rows' => $completed, 'emptyText' => 'No completed bookings.'])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
