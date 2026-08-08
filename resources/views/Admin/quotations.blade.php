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
                            <h4 class="card-title mb-4">Quotation Requests</h4>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Company / Organisation</th>
                                            <th>Contact Email</th>
                                            <th>Mobile</th>
                                            <th>People</th>
                                            <th>Additional Information</th>
                                            <th>Received On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($quotations as $q)
                                        <tr>
                                            <td><strong>{{ $q->company_name }}</strong></td>
                                            <td><a href="mailto:{{ $q->contact_email }}">{{ $q->contact_email }}</a></td>
                                            <td><a href="tel:{{ $q->mobile }}">{{ $q->mobile }}</a></td>
                                            <td><span class="badge badge-info">{{ $q->people }}</span></td>
                                            <td>
                                                @if($q->additional_info)
                                                    <small class="text-muted">{{ Str::limit($q->additional_info, 90) }}</small>
                                                @else
                                                    <small class="text-muted">—</small>
                                                @endif
                                            </td>
                                            <td><small>{{ optional($q->created_at)->format('d M Y, h:i A') }}</small></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">No quotation requests yet.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            @if($quotations->count() > 0)
                            <div class="mt-3">
                                {{ $quotations->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
