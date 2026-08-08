@extends('layouts.app')

@section('title', 'Book a Counselling Session Online | V4Peace')
@section('meta_description', 'Book your confidential online counselling session with V4Peace in a few simple steps. Choose your counsellor, pick a convenient time slot and pay securely. Government approved & ISO certified.')
@section('meta_keywords', 'book counselling session, online counselling appointment, book therapist Kerala, counselling slot booking, V4Peace booking')

@section('content')
<div class="vp-booking">
<style>
   .vp-booking { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }

   .vp-booking { background: var(--vp-cream); color: #514B64; }

   /* Header */
   .vp-booking .booking-header {
       background: linear-gradient(135deg, var(--vp-brand-dark) 0%, var(--vp-brand) 100%);
       padding: 70px 0 60px;
       margin-bottom: 0;
       position: relative;
       overflow: hidden;
   }
   .vp-booking .booking-header::before {
       content: '';
       position: absolute;
       top: 0; left: 0; right: 0; bottom: 0;
       background-image: url('images/bg_5.jpg');
       background-size: cover;
       background-position: center;
       opacity: 0.12;
       z-index: 0;
   }
   .vp-booking .booking-header .container { position: relative; z-index: 1; }
   .vp-booking .booking-header .eyebrow {
       display: inline-block;
       background: rgba(255,255,255,0.14);
       border: 1px solid rgba(255,255,255,0.3);
       color: #ffe8e8;
       padding: 6px 18px;
       border-radius: 30px;
       font-size: 13px;
       letter-spacing: .06em;
       text-transform: uppercase;
       margin-bottom: 18px;
   }
   .vp-booking .booking-header h1 {
       color: #fff;
       font-size: 2.6rem;
       font-weight: 700;
       margin-bottom: 12px;
       text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
   }
   .vp-booking .booking-header .lead-text {
       color: rgba(255,255,255,0.9);
       max-width: 560px;
       margin: 0 auto;
   }
   .vp-booking .booking-header .breadcrumbs { color: rgba(255, 255, 255, 0.85); margin-bottom: 6px; }
   .vp-booking .booking-header .breadcrumbs a { color: #fff; text-decoration: none; }

   /* Form card */
   .vp-booking .booking-wrap { margin-top: -35px; }
   .vp-booking .booking-form-card {
       background: white;
       border-radius: 18px;
       box-shadow: 0 20px 55px rgba(92, 53, 53, 0.12);
       padding: 45px;
       margin-bottom: 60px;
       position: relative;
       z-index: 2;
       opacity: 1;
       scroll-margin-top: 100px;
   }

   /* Section heading with numbered badge */
   .vp-booking .vp-section-head {
       display: flex;
       align-items: center;
       gap: 14px;
       margin-bottom: 28px;
   }
   .vp-booking .vp-section-head .step-num {
       width: 40px; height: 40px; flex: 0 0 40px;
       border-radius: 50%;
       background: var(--vp-brand-light);
       color: var(--vp-brand-dark);
       display: flex; align-items: center; justify-content: center;
       font-weight: 700;
   }
   .vp-booking .vp-section-head h3 {
       margin: 0;
       color: #3b2626;
       font-weight: 700;
       font-size: 1.4rem;
   }
   .vp-booking .vp-section-head small { display: block; color: #9a8888; font-weight: 400; font-size: 13px; }

   .vp-booking .form-group label,
   .vp-booking label { font-weight: 600; color: #4a3838; margin-bottom: 8px; }

   .vp-booking .form-control {
       border-radius: 10px;
       border: 1px solid #e4d9d6;
       padding: 12px 15px;
       transition: all 0.25s ease;
       background: #fffdfc;
   }
   .vp-booking .form-control:focus {
       border-color: var(--vp-brand);
       box-shadow: 0 0 0 0.2rem rgba(123, 74, 74, 0.15);
       background: #fff;
   }
   .vp-booking select.form-control { cursor: pointer; }
   .vp-booking #remark { resize: vertical; }

   .vp-booking .vp-divider { border: none; border-top: 1px solid #efe6e2; margin: 2.2rem 0; }

   .vp-booking .text-danger { color: var(--vp-brand) !important; }
   .vp-booking .vp-terms-link { color: var(--vp-brand-dark); font-weight: 600; }

   /* Submit button */
   .vp-booking #proceed-btn {
       background: linear-gradient(135deg, var(--vp-brand) 0%, var(--vp-brand-dark) 100%);
       border: none;
       border-radius: 50px;
       padding: 15px 45px;
       font-size: 1.1rem;
       font-weight: 600;
       color: #fff;
       transition: all 0.25s ease;
   }
   .vp-booking #proceed-btn:hover {
       transform: translateY(-2px);
       box-shadow: 0 12px 28px rgba(92, 53, 53, 0.3);
   }

   /* Time-slot selectable grid */
   .vp-booking .vp-slot-grid {
       display: grid;
       grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
       gap: 12px;
       margin-top: 6px;
   }
   .vp-booking .vp-slot {
       border: 1px solid #e4d9d6;
       background: #fffdfc;
       color: #4a3838;
       border-radius: 12px;
       padding: 12px 8px;
       font-size: 14px;
       font-weight: 500;
       cursor: pointer;
       transition: all .18s ease;
       text-align: center;
       line-height: 1.25;
   }
   .vp-booking .vp-slot:hover {
       border-color: var(--vp-brand);
       color: var(--vp-brand-dark);
       box-shadow: 0 4px 12px rgba(123,74,74,0.12);
   }
   .vp-booking .vp-slot-selected,
   .vp-booking .vp-slot-selected:hover {
       background: var(--vp-brand);
       border-color: var(--vp-brand-dark);
       color: #fff;
       box-shadow: 0 6px 16px rgba(123,74,74,0.28);
   }
   .vp-booking .vp-slot-selected::after {
       content: "\2713"; margin-left: 6px; font-weight: 700;
   }
   .vp-booking .vp-slot-booked,
   .vp-booking .vp-slot-booked:hover {
       background: #f6efec;
       color: #b0a0a0;
       border-style: dashed;
       border-color: #e0d3cf;
       cursor: not-allowed;
       box-shadow: none;
       text-decoration: line-through;
   }
   .vp-booking .vp-slot-booked small {
       display: block; text-decoration: none; font-size: 10.5px; font-style: italic; margin-top: 2px;
   }
   .vp-booking .vp-slot-empty { color: #9a8888; font-size: 14px; }

   .scroller { scroll-margin-top: 100px; }

   .vp-booking .booking-form-card.fade-in { animation: fadeInUp 0.8s ease-out forwards; }
   @keyframes fadeInUp {
       from { opacity: 0; transform: translateY(30px); }
       to { opacity: 1; transform: translateY(0); }
   }
   .vp-booking .booking-form-card h3.fade-in-title { animation: fadeIn 0.6s ease-out 0.3s forwards; }
   @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

   @media (max-width: 768px) {
       .vp-booking .booking-header h1 { font-size: 1.9rem; }
       .vp-booking .booking-form-card { padding: 28px 20px; }
   }
</style>

<!-- Header Section -->
<div class="booking-header">
    <div class="container text-center">
        <p class="breadcrumbs mb-0">
            <span class="mr-2">
                <a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a>
            </span>
            <span>Slot Booking <i class="fa fa-chevron-right"></i></span>
        </p>
        <span class="eyebrow">Secure Online Booking</span>
        <h1 class="mb-0">Book Your Session</h1>
        <p class="lead-text mb-0">Choose your counsellor, pick a convenient time slot, and take the first step towards a calmer, healthier you.</p>
    </div>
</div>

<!-- Form Section -->
<div class="container scroller booking-wrap">
    <div class="booking-form-card">

        <form action="{{ url('/saveBookingData') }}" method="POST">
            @csrf

            <div class="vp-section-head">
                <span class="step-num">1</span>
                <h3>Session Details<small>Pick your counsellor, date &amp; time</small></h3>
            </div>

            <!-- Counselor, Date -->
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="councellor_drop">Select Counsellor <span class="text-danger">*</span></label>
                    <select class="form-control" id="councellor_drop" name="counsellor_id" required>
                        <option value="">Select Counsellor</option>
                        @foreach($counsellors as $councellor)
                            <option value="{{ $councellor['counsellor_id'] }}">{{ $councellor['counsellor_name'] }}</option>
                        @endforeach
                    </select>
                    <small id="counsellor_hint" class="text-muted d-block mt-1">Please select a counsellor to continue.</small>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="datepicker2">Choose Your Date <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="datepicker2" name="session_date" placeholder="Select date" readonly required>
                </div>
            </div>

            <!-- Time Slots (clickable grid) -->
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label>Select Time Slot(s) <span class="text-danger">*</span></label>
                    <div id="slot-grid" class="vp-slot-grid">
                        <span class="vp-slot-empty">Select a counsellor and a date to see available time slots.</span>
                    </div>
                    {{-- Selected slots are injected here as hidden inputs (time_slots[]) --}}
                    <div id="slot-hidden-inputs"></div>
                </div>
            </div>

            <!-- Remark Field -->
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="remark">Additional Notes / Remark (Optional)</label>
                    <textarea class="form-control" id="remark" name="remark" rows="4" placeholder="Please share any additional information or special requirements you may have..."></textarea>
                </div>
            </div>

            <hr class="vp-divider">

            <div class="vp-section-head">
                <span class="step-num">2</span>
                <h3>Personal Information<small>Tell us a little about yourself</small></h3>
            </div>

            <!-- Personal Details -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="email">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="gender">Gender <span class="text-danger">*</span></label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="datepicker">Date of Birth <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="datepicker" name="date_of_birth" placeholder="Select your date of birth" readonly required>
                    <input type="hidden" id="candidate_type" name="candidate_type" value="Adult">
                    <small id="candidate_type_note" class="text-muted d-block mt-1" style="display:none;"></small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="session_mode">Mode of Session <span class="text-danger">*</span></label>
                    <select class="form-control" id="session_mode" name="session_mode" required>
                        <option value="">Select Mode Of Session</option>
                        <option value="In Person">In Person</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
            </div>

            <hr class="vp-divider">

            <!-- Terms and Conditions -->
            <div class="form-group text-center mb-4">
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                    <label class="form-check-label" for="agreeTerms">
                        I agree to the
                        <a href="<?= url('/termsAndConditions')?>" target="_blank" class="vp-terms-link">
                            Terms &amp; Conditions
                        </a>
                    </label>
                </div>
            </div>

            <!-- Hidden Fields -->
            <input type="hidden" value="" id="totalHour" name="totalHour"/>
            <input type="hidden" value="" id="totalPrice" name="totalPrice"/>

            <!-- Submit Button -->
            <div class="form-row">
                <div class="col-md-12 text-center">
                    <button type="submit" id="proceed-btn" class="btn px-5">
                        <i class="fa fa-calendar-check-o mr-2"></i>
                        Book Session - <span id="total-price-display">$0</span>
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>

<script>
    // Update button display when price changes
    document.addEventListener('DOMContentLoaded', function() {
        const priceDisplay = document.getElementById('total-price-display');
        const totalPriceInput = document.getElementById('totalPrice');

        if (totalPriceInput && priceDisplay) {
            // Listen for changes (you may need to trigger this from your price calculation logic)
            setInterval(function() {
                const price = totalPriceInput.value || '0';
                priceDisplay.textContent = '$' + price;
            }, 500);
        }

        // Auto-scroll to form after showing banner first
        setTimeout(function() {
            const formCard = document.querySelector('.scroller');
            if (formCard) {
                // Get the current scroll position
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                // Calculate the position with navbar offset
                const navbarHeight = 100; // Adjust this value based on your navbar height
                const targetPosition = formCard.offsetTop - navbarHeight;

                // Smooth scroll
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                // Trigger animation after scroll completes
                setTimeout(function() {
                    const formSection = document.querySelector('.booking-form-card');
                    const h3Title = document.querySelector('.booking-form-card h3');

                    if (formSection) {
                        formSection.classList.add('fade-in');
                        if (h3Title) {
                            h3Title.classList.add('fade-in-title');
                        }
                    }
                }, 500);
            }
        }, 2000); // 2 second delay to show banner first
    });

    // Auto-detect Adult/Child from the Date of Birth vs the counsellor's child age limit
    document.addEventListener('DOMContentLoaded', function () {
        var childAgeLimits = @json($childAgeLimits ?? []);
        var typeEl = document.getElementById('candidate_type');       // hidden input
        var counsellorEl = document.getElementById('councellor_drop');
        var dobEl = document.getElementById('datepicker');
        var noteEl = document.getElementById('candidate_type_note');
        if (!typeEl || !dobEl) return;

        function calcAge(ddmmyyyy) {
            var parts = (ddmmyyyy || '').split('-');
            if (parts.length !== 3) return null;
            var d = parseInt(parts[0], 10), m = parseInt(parts[1], 10) - 1, y = parseInt(parts[2], 10);
            var birth = new Date(y, m, d);
            if (isNaN(birth.getTime())) return null;
            var today = new Date();
            var age = today.getFullYear() - birth.getFullYear();
            var mo = today.getMonth() - birth.getMonth();
            if (mo < 0 || (mo === 0 && today.getDate() < birth.getDate())) age--;
            return age;
        }

        // Exposed so the datepicker's onSelect (in the layout) can call it
        window.vpOnDobChange = function () {
            var age = calcAge(dobEl.value);
            var cid = counsellorEl ? counsellorEl.value : '';
            var limit = (cid && childAgeLimits[cid]) ? parseInt(childAgeLimits[cid], 10) : null;

            var type = 'Adult';
            if (age !== null && limit !== null && age <= limit) {
                type = 'Child';
            }
            typeEl.value = type;

            if (noteEl) {
                if (age !== null) {
                    var msg = 'Age ' + age + ' → ' + type;
                    if (type === 'Child' && limit) msg += ' (child price, up to ' + limit + ' yrs)';
                    noteEl.textContent = msg;
                    noteEl.style.display = 'block';
                } else {
                    noteEl.style.display = 'none';
                }
            }

            if (typeof window.vpRecalcPrice === 'function') window.vpRecalcPrice();
        };

        // Recompute when the counsellor changes (child age limit is per counsellor)
        if (counsellorEl) counsellorEl.addEventListener('change', window.vpOnDobChange);

        // Initial run (in case of pre-filled values)
        window.vpOnDobChange();

        /* --- Gate all other fields until a counsellor is selected --- */
        var gatedIds = ['datepicker2', 'remark', 'first_name', 'email', 'phone',
                        'gender', 'datepicker', 'session_mode', 'agreeTerms', 'proceed-btn'];

        function vpSetFieldsEnabled(enabled) {
            gatedIds.forEach(function (id) {
                var el = document.getElementById(id);
                if (el) el.disabled = !enabled;
            });
        }

        function vpResetSlotGrid() {
            var grid = document.getElementById('slot-grid');
            if (grid) grid.innerHTML = '<span class="vp-slot-empty">Select a counsellor and a date to see available time slots.</span>';
            if (typeof window.vpSyncSlots === 'function') window.vpSyncSlots();
            if (typeof window.vpRecalcPrice === 'function') window.vpRecalcPrice();
        }

        function vpUpdateGate() {
            var hasCounsellor = !!(counsellorEl && counsellorEl.value !== '');
            vpSetFieldsEnabled(hasCounsellor);
            var hint = document.getElementById('counsellor_hint');
            if (hint) hint.style.display = hasCounsellor ? 'none' : 'block';
        }

        if (counsellorEl) counsellorEl.addEventListener('change', vpUpdateGate);
        vpUpdateGate(); // lock everything on load

        // When the counsellor changes, refresh slots for the already-chosen date (or reset the grid)
        if (counsellorEl) {
            counsellorEl.addEventListener('change', function () {
                var dateVal = document.getElementById('datepicker2').value;
                if (counsellorEl.value && dateVal && typeof window.vpFetchSlots === 'function') {
                    window.vpFetchSlots(counsellorEl.value, dateVal);
                } else {
                    vpResetSlotGrid();
                }
            });
        }

        // Require at least one time slot before submitting
        var bookingForm = document.querySelector('form[action$="/saveBookingData"]');
        if (bookingForm) {
            bookingForm.addEventListener('submit', function (e) {
                var count = (typeof window.vpGetSelectedSlots === 'function') ? window.vpGetSelectedSlots().length : 0;
                if (count === 0) {
                    e.preventDefault();
                    if (typeof window.vpAlert === 'function') { vpAlert('Please select at least one time slot.'); }
                    else { alert('Please select at least one time slot.'); }
                }
            });
        }
    });
</script>

@endsection
