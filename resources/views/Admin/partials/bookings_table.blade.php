<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Client</th>
                <th>Counsellor</th>
                <th>Type</th>
                <th>Date</th>
                <th>Time Slots</th>
                <th>Duration</th>
                <th>Amount</th>
                <th>Payment ID</th>
                <th>Booked On</th>
            </tr>
        </thead>
        <tbody>
            @forelse($rows as $b)
                @php
                    // Individual booked slots (shown separately)
                    $slotList = array_values(array_filter(array_map('trim', explode(',', (string) $b->time_slots))));
                @endphp
                <tr>
                    <td>
                        <strong>{{ $b->name }}</strong><br>
                        <small class="text-muted">{{ $b->email }}</small><br>
                        <small class="text-muted">{{ $b->phone }}</small>
                    </td>
                    <td>{{ $b->counsellor_name ?? ($b->counsellor_id ? 'Counsellor #' . $b->counsellor_id : '—') }}</td>
                    <td>
                        @if($b->candidate_type)
                            <span class="badge {{ $b->candidate_type == 'Child' ? 'badge-info' : 'badge-success' }}">{{ $b->candidate_type }}</span>
                        @else
                            —
                        @endif
                    </td>
                    <td>{{ $b->session_date ?: '—' }}</td>
                    <td>
                        @forelse($slotList as $s)
                            <span class="d-inline-block mr-1 mb-1" style="padding:4px 10px; border-radius:6px; background:#7b4a4a; color:#ffffff; font-size:12px; white-space:nowrap;">{{ $s }}</span>
                        @empty
                            —
                        @endforelse
                        @if(count($slotList) > 1)
                            <br><small class="text-muted">{{ count($slotList) }} slots</small>
                        @endif
                    </td>
                    <td>{{ $b->total_hour ? $b->total_hour . ' hr(s)' : '—' }}</td>
                    <td><strong>${{ number_format((float) $b->amount, 2) }}</strong></td>
                    <td><small>{{ $b->razorpay_payment_id ?: '—' }}</small></td>
                    <td><small>{{ optional($b->created_at)->format('d M Y') }}</small></td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center text-muted py-4">{{ $emptyText ?? 'No bookings found.' }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
