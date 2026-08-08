<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+91 9495 702 172</a> 
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> v4peacecounselling@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end align-items-center">
                <div class="vp-geo-flag align-items-center mr-3" id="vpGeoFlag" style="display:none;" title="Your location">
                    <img id="vpFlagImg" src="" alt="" class="vp-flag-img">
                    <span id="vpFlagName" class="vp-geo-country"></span>
                    <span class="vp-geo-divider"></span>
                </div>
                <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                </p>
        </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" style="background-color:#e5dbdb  !important" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/new_log_tr1.PNG') }}" style="width: 138px;" alt="V4Peace Counselling Centre logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        

        <div class="collapse navbar-collapse" id="ftco-nav">
        @php $seg = request()->segment(1); @endphp
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ ($seg == '' || $seg == 'Home') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item {{ $seg == 'about' ? 'active' : '' }}"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
            <li class="nav-item {{ in_array($seg, ['counselor', 'councellor']) ? 'active' : '' }}"><a href="{{ url('/counselor') }}" class="nav-link">Counsellor</a></li>
            <li class="nav-item {{ $seg == 'slotBooking' ? 'active' : '' }}"><a href="{{ url('/slotBooking') }}" class="nav-link">Book your slot</a></li>
            <li class="nav-item {{ $seg == 'blog' ? 'active' : '' }}"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item {{ $seg == 'career' ? 'active' : '' }}"><a href="{{ url('/career') }}" class="nav-link">Career</a></li>
            <li class="nav-item {{ $seg == 'contactus' ? 'active' : '' }}"><a href="{{ url('/contactus') }}" class="nav-link">Contact</a></li>
            @if(config('constants.SHOW_SEND_QUOTATION'))
            <li class="nav-item vp-quote-nav-item">
                <a href="#" class="nav-link vp-quote-btn" data-toggle="modal" data-target="#quotationModal">
                    <i class="fa fa-file-text-o mr-1"></i> Send Quotation
                </a>
            </li>
            @endif
        </ul>
        </div>
    </div>
</nav>

@if(config('constants.SHOW_SEND_QUOTATION'))
<!-- Send Quotation Modal -->
<div class="modal fade" id="quotationModal" tabindex="-1" role="dialog" aria-labelledby="quotationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content vp-quote-modal">
            <div class="modal-header">
                <h5 class="modal-title" id="quotationModalLabel">Request a Quotation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('quotation.send') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <p class="text-muted mb-4" style="font-size:14px;">Tell us about your organisation and we'll prepare a tailored counselling quotation for you.</p>

                    @if(isset($errors) && ($errors->has('company_name') || $errors->has('contact_email') || $errors->has('mobile') || $errors->has('people') || $errors->has('additional_info')))
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-3">
                                @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="q_company">Name of the Company <span class="text-danger">*</span></label>
                        <input type="text" name="company_name" id="q_company" class="form-control" placeholder="School, church, company, organisation, etc." value="{{ old('company_name') }}" required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="q_email">Contact Email <span class="text-danger">*</span></label>
                            <input type="email" name="contact_email" id="q_email" class="form-control" placeholder="you@example.com" value="{{ old('contact_email') }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="q_mobile">Mobile Number <span class="text-danger">*</span></label>
                            <input type="text" name="mobile" id="q_mobile" class="form-control" placeholder="e.g., +91 98765 43210" value="{{ old('mobile') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="q_people">Number of People (requiring counselling) <span class="text-danger">*</span></label>
                        <input type="number" name="people" id="q_people" class="form-control" min="1" placeholder="e.g., 25" value="{{ old('people') }}" required>
                    </div>
                    <div class="form-group mb-0">
                        <label for="q_info">Additional Information</label>
                        <textarea name="additional_info" id="q_info" class="form-control" rows="4" placeholder="Any specific requirements, preferred dates, and your contact details...">{{ old('additional_info') }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn vp-quote-submit">Send Quotation</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

<style>
  /* Quotation feature button + modal */
  #ftco-navbar .vp-quote-btn {
    background: #7b4a4a; color: #fff !important;
    border-radius: 30px; padding: 8px 20px !important;
    font-weight: 600; transition: all .2s ease;
  }
  #ftco-navbar .vp-quote-btn:hover { background: #5c3535 !important; color: #fff !important; }
  #ftco-navbar .vp-quote-btn:after { display: none !important; }
  @media (min-width: 992px) {
    .vp-quote-nav-item { margin-left: 14px; display: flex; align-items: center; }
  }
  .vp-quote-modal { border-radius: 14px; border: none; }
  .vp-quote-modal .modal-header { border-bottom: 1px solid #f1e8e4; }
  .vp-quote-modal .modal-title { color: #3b2626; font-weight: 700; }
  .vp-quote-modal .form-group label { font-weight: 600; color: #4a3838; }
  .vp-quote-modal .form-control { border-radius: 8px; border: 1px solid #e4d9d6; }
  .vp-quote-modal .form-control:focus { border-color: #7b4a4a; box-shadow: 0 0 0 0.2rem rgba(123,74,74,0.15); }
  .vp-quote-submit { background: #7b4a4a; color: #fff; border: none; border-radius: 30px; padding: 10px 28px; font-weight: 600; transition: all .2s ease; }
  .vp-quote-submit:hover { background: #5c3535; color: #fff; }

  /* Active nav-item highlight (brand color) */
  #ftco-navbar .navbar-nav > .nav-item > .nav-link { position: relative; transition: color .2s ease; }
  #ftco-navbar .navbar-nav > .nav-item.active > .nav-link,
  #ftco-navbar .navbar-nav > .nav-item > .nav-link:hover { color: #7b4a4a !important; font-weight: 600; }
  #ftco-navbar .navbar-nav > .nav-item.active > .nav-link:after {
    content: ""; position: absolute; left: 0.75rem; right: 0.75rem; bottom: 6px;
    height: 2px; background: #7b4a4a; border-radius: 2px;
  }
  /* Mobile menu toggler ("MENU") — brand colour so it's visible on the light navbar */
  #ftco-navbar .navbar-toggler {
    color: #7b4a4a !important;
    border: 1px solid rgba(123, 74, 74, 0.4) !important;
    border-radius: 6px;
    padding: 6px 12px;
  }
  #ftco-navbar .navbar-toggler .oi { color: #7b4a4a !important; }

  @media (max-width: 991.98px) {
    #ftco-navbar .navbar-nav > .nav-item.active > .nav-link:after { display: none; }
    /* Menu tabs dark for readability on the light dropdown; active/hover in brand */
    #ftco-navbar .navbar-nav > .nav-item > .nav-link { color: #3b2626 !important; font-weight: 500; padding: 10px 0; }
    #ftco-navbar .navbar-nav > .nav-item.active > .nav-link,
    #ftco-navbar .navbar-nav > .nav-item > .nav-link:hover { color: #7b4a4a !important; font-weight: 600; }
    #ftco-navbar .navbar-nav > .nav-item { border-top: 1px solid rgba(123, 74, 74, 0.1); }
  }

  /* IP-based country flag in the top bar */
  .wrap .vp-geo-flag { display: none; }
  .wrap .vp-geo-flag.is-ready { display: inline-flex !important; }
  .wrap .vp-flag-img {
    width: 22px; height: 16px; object-fit: cover;
    border-radius: 2px; margin-right: 7px;
    box-shadow: 0 0 0 1px rgba(255,255,255,0.25);
  }
  .wrap .vp-geo-country {
    color: #fff; font-size: 13px; font-weight: 500; letter-spacing: .02em;
  }
  .wrap .vp-geo-divider {
    width: 1px; height: 16px; background: rgba(255,255,255,0.28); margin: 0 14px 0 16px;
  }
</style>

<script>
  (function () {
    // Detect the visitor's country from their IP (client-side, so it uses the real public IP)
    function setFlag(code, name) {
      if (!code) return;
      code = code.toLowerCase();
      var wrap = document.getElementById('vpGeoFlag');
      var img = document.getElementById('vpFlagImg');
      var label = document.getElementById('vpFlagName');
      if (!wrap || !img) return;
      img.src = 'https://flagcdn.com/40x30/' + code + '.png';
      img.srcset = 'https://flagcdn.com/80x60/' + code + '.png 2x';
      img.alt = (name || code.toUpperCase()) + ' flag';
      if (label) label.textContent = name || code.toUpperCase();
      wrap.style.display = 'inline-flex';
      wrap.classList.add('is-ready');
    }

    fetch('https://ipwho.is/')
      .then(function (r) { return r.json(); })
      .then(function (d) {
        if (d && d.success && d.country_code) {
          setFlag(d.country_code, d.country);
        }
      })
      .catch(function () {
        // Fallback provider if the first one is unavailable
        fetch('https://ipapi.co/json/')
          .then(function (r) { return r.json(); })
          .then(function (d) {
            if (d && d.country_code) setFlag(d.country_code, d.country_name);
          })
          .catch(function () {});
      });
  })();
</script>

@if(config('constants.SHOW_SEND_QUOTATION'))
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Re-open the quotation modal if its submission had validation errors
    @if(isset($errors) && ($errors->has('company_name') || $errors->has('contact_email') || $errors->has('mobile') || $errors->has('people') || $errors->has('additional_info')))
      if (window.jQuery) { $('#quotationModal').modal('show'); }
    @endif
    // Show a confirmation after a successful send
    @if(session('quotation_success'))
      var msg = @json(session('quotation_success'));
      if (typeof window.vpAlert === 'function') { vpAlert(msg); } else { alert(msg); }
    @endif
  });
</script>
@endif