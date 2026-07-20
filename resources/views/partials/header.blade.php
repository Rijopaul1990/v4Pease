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
        </ul>
        </div>
    </div>
</nav>

<style>
  /* Active nav-item highlight (brand color) */
  #ftco-navbar .navbar-nav > .nav-item > .nav-link { position: relative; transition: color .2s ease; }
  #ftco-navbar .navbar-nav > .nav-item.active > .nav-link,
  #ftco-navbar .navbar-nav > .nav-item > .nav-link:hover { color: #7b4a4a !important; font-weight: 600; }
  #ftco-navbar .navbar-nav > .nav-item.active > .nav-link:after {
    content: ""; position: absolute; left: 0.75rem; right: 0.75rem; bottom: 6px;
    height: 2px; background: #7b4a4a; border-radius: 2px;
  }
  @media (max-width: 991.98px) {
    #ftco-navbar .navbar-nav > .nav-item.active > .nav-link:after { display: none; }
    #ftco-navbar .navbar-nav > .nav-item.active > .nav-link { color: #7b4a4a !important; }
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