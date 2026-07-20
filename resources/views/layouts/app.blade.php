<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $siteName = 'V4Peace Counselling Centre';
        $defaultTitle = 'Online Counselling & Therapy in Kerala | ' . $siteName;
        $defaultDescription = 'V4Peace Counselling Centre offers confidential online counselling and therapy across Kerala & India — career, relationship, stress, trauma, parenting and life coaching. Government approved, ISO 9001:2015 certified. Book a session today.';
        $defaultKeywords = 'online counselling, counselling centre Kerala, therapy Kochi, mental health support, career counselling, relationship counselling, marriage counselling, stress management, trauma recovery, V4Peace, Kothamangalam counsellor, online therapist India';
        $ogImage = asset('images/about_new.PNG');
    @endphp

    {{-- SEO --}}
    <title>@yield('title', $defaultTitle)</title>
    <meta name="description" content="@yield('meta_description', $defaultDescription)">
    <meta name="keywords" content="@yield('meta_keywords', $defaultKeywords)">
    <meta name="author" content="{{ $siteName }}">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="theme-color" content="#7b4a4a">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', $defaultTitle)">
    <meta property="og:description" content="@yield('meta_description', $defaultDescription)">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', $ogImage)">
    <meta property="og:locale" content="en_IN">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', $defaultTitle)">
    <meta name="twitter:description" content="@yield('meta_description', $defaultDescription)">
    <meta name="twitter:image" content="@yield('og_image', $ogImage)">

    {{-- Structured data: the counselling centre --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": ["MedicalBusiness", "LocalBusiness"],
        "name": "V4Peace Counselling Centre",
        "description": {!! json_encode($defaultDescription) !!},
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/new_log_tr1.PNG') }}",
        "image": "{{ $ogImage }}",
        "telephone": "+91-9495702172",
        "email": "v4peacecounselling@gmail.com",
        "priceRange": "$$",
        "medicalSpecialty": "Psychiatric",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Kothamangalam",
            "addressRegion": "Kerala",
            "postalCode": "686691",
            "addressCountry": "IN"
        },
        "areaServed": { "@type": "Country", "name": "India" },
        "availableService": [
            { "@type": "MedicalTherapy", "name": "Career Counselling & Guidance" },
            { "@type": "MedicalTherapy", "name": "Relationship & Marriage Counselling" },
            { "@type": "MedicalTherapy", "name": "Stress Management & Resilience Coaching" },
            { "@type": "MedicalTherapy", "name": "Trauma Recovery Support" },
            { "@type": "MedicalTherapy", "name": "Life Coaching" }
        ]
    }
    </script>
    @stack('schema')

    <link rel="icon" type="image/x-icon" href="{{ asset('images/trade.PNG') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Hand+Pre:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
    @include('partials.header')
    </header>
    <main>
    @yield('content')
    </main>
    <footer>
    @include('partials.footer')
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }} "></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/choices.min.js') }}"></script>

    <!-- Branded alert (replaces native alert()) -->
    <style>
      .vp-alert-overlay {
        position: fixed; inset: 0; z-index: 20000;
        background: rgba(45, 20, 25, 0.55);
        display: flex; align-items: center; justify-content: center;
        opacity: 0; visibility: hidden; transition: opacity .2s ease;
      }
      .vp-alert-overlay.show { opacity: 1; visibility: visible; }
      .vp-alert-box {
        background: #fff; border-radius: 16px;
        max-width: 390px; width: 90%; padding: 34px 28px 28px;
        text-align: center; box-shadow: 0 25px 60px rgba(0,0,0,.3);
        transform: translateY(14px) scale(.96); transition: transform .22s ease;
        font-family: 'Roboto', sans-serif;
      }
      .vp-alert-overlay.show .vp-alert-box { transform: none; }
      .vp-alert-icon {
        width: 66px; height: 66px; border-radius: 50%;
        background: #f6ecec; color: #7b4a4a;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 18px; font-size: 30px;
      }
      .vp-alert-msg { color: #3b2626; font-size: 1.05rem; margin-bottom: 26px; line-height: 1.55; }
      .vp-alert-btn {
        background: #7b4a4a; color: #fff; border: none; border-radius: 30px;
        padding: 11px 38px; font-weight: 600; font-size: 1rem; cursor: pointer;
        transition: all .2s ease;
      }
      .vp-alert-btn:hover { background: #5c3535; transform: translateY(-1px); box-shadow: 0 8px 20px rgba(92,53,53,.3); }
    </style>
    <script>
    (function () {
        var overlay, msgEl, btnEl;
        function build() {
            overlay = document.createElement('div');
            overlay.className = 'vp-alert-overlay';
            overlay.innerHTML =
                '<div class="vp-alert-box" role="alertdialog" aria-modal="true" aria-live="assertive">' +
                    '<div class="vp-alert-icon"><span class="fa fa-exclamation-triangle"></span></div>' +
                    '<div class="vp-alert-msg"></div>' +
                    '<button type="button" class="vp-alert-btn">OK</button>' +
                '</div>';
            document.body.appendChild(overlay);
            msgEl = overlay.querySelector('.vp-alert-msg');
            btnEl = overlay.querySelector('.vp-alert-btn');
            btnEl.addEventListener('click', hide);
            overlay.addEventListener('click', function (e) { if (e.target === overlay) hide(); });
            document.addEventListener('keydown', function (e) {
                if (overlay.classList.contains('show') && (e.key === 'Escape' || e.key === 'Enter')) hide();
            });
        }
        function hide() { if (overlay) overlay.classList.remove('show'); }
        window.vpAlert = function (message) {
            if (!overlay) build();
            msgEl.textContent = message;
            overlay.classList.add('show');
            btnEl.focus();
        };
    })();
    </script>

    <script>
    $(function() {
      
      $("#datepicker").datepicker({
          dateFormat: "dd-mm-yy",
          maxDate: new Date(new Date().setFullYear(new Date().getFullYear() - 5)),
          changeMonth: true,
          changeYear: true,
          yearRange: "1900:" + (new Date().getFullYear() - 5),
          onSelect: function () {
              if (typeof window.vpOnDobChange === 'function') window.vpOnDobChange();
          }
      });



      $("#datepicker2").datepicker({
    dateFormat: "dd-mm-yy",
    minDate: 0,
    changeMonth: true,
    changeYear: true,
    yearRange: "1900:2100",

    onSelect: function (dateText, inst) {
        var counsellorId = $('#councellor_drop').val();

        if (!counsellorId) {
            vpAlert("Please select a counsellor first.");
            return;
        }

        $.ajax({
            url: '/admin/get-time-slots', // Laravel route
            type: 'POST',
            data: {
                counsellor_id: counsellorId,
                date: dateText,
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function (response) {
                if (response.status === 'success') {
                    let timeArray = response.time_slots.split(',').map(item => item.trim()).filter(Boolean);
                    let booked = (response.booked_slots || []).map(item => item.trim());

                    if (choices) {
                        choices.clearChoices(); // Clear old options
                        choices.setChoices(
                            timeArray.map(slot => {
                                var isBooked = booked.indexOf(slot) !== -1;
                                return {
                                    value: slot,
                                    label: isBooked ? (slot + '  —  Booked') : slot,
                                    selected: false,
                                    disabled: isBooked
                                };
                            }),
                            'value',
                            'label',
                            false
                        );
                    }
                } else {
                    if (choices) {
                      choices.clearChoices();
                    }
                    vpAlert("No time slots found for this date.");
                }
            },
            error: function (xhr, status, error) {
              debugger;
                choices.clearChoices();
            }
        });
    }
});



    });
  </script>
  <script>
  $(document).ready(function(){
    choices = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount: 12,
        searchResultLimit: 5,
        renderChoiceLimit: 12
    });
     // Step 1: Sort the options by time
  const select = document.getElementById('choices-multiple-remove-button');
  const options = Array.from(select.options);

  options.sort((a, b) => {
    // Extract start times (like "10:00" from "10:00-10:30")
    const getStartTime = (option) => {
      const time = option.value.split('-')[0];
      const [hours, minutes] = time.split(':').map(Number);
      return hours * 60 + minutes; // convert to total minutes
    };

    return getStartTime(a) - getStartTime(b);
  });

  // Step 2: Replace options in sorted order
  select.innerHTML = '';
  options.forEach(opt => select.appendChild(opt));

  // Step 3: Initialize Choices
  // const multipleCancelButton = new Choices('#choices-multiple-remove-button', {
  //   removeItemButton: false,
  //   maxItemCount: 12,
  //   searchResultLimit: 5,
  //   renderChoiceLimit: 12
  // });
     document.querySelector('#choices-multiple-remove-button').addEventListener('change', function () {
        var counsellorId = $('#councellor_drop').val();
        if (!counsellorId) {
            vpAlert("Please select a counsellor first.");
            return;
        }
        vpRecalcPrice();
     });

    // Reusable price calculation — factors in the selected candidate type (Adult/Child).
    // Exposed globally so the booking page can trigger it when the candidate type changes.
    window.vpRecalcPrice = function () {
        var select = document.getElementById('choices-multiple-remove-button');
        if (!select) return;

        var selected = Array.from(select.selectedOptions).map(function (opt) { return opt.value; });
        var totalHours = calculateTotalHours(selected);
        var counsellorId = $('#councellor_drop').val();
        var candidateType = $('#candidate_type').length ? $('#candidate_type').val() : 'Adult';

        $('#totalHour').val(totalHours);

        var btn = document.getElementById('proceed-btn');
        if (!counsellorId || !totalHours || parseFloat(totalHours) <= 0) {
            $('#totalPrice').val('');
            if (btn) btn.textContent = 'Book Session';
            return;
        }

        $.ajax({
            url: '/admin/get-final-amount',
            type: 'POST',
            data: {
                counsellor_id: counsellorId,
                totalHours: totalHours,
                candidate_type: candidateType,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                var amount = (response && typeof response === 'object') ? response.amount : response;
                var hasPrice = (response && typeof response === 'object') ? response.has_price : true;
                $('#totalPrice').val(amount);
                if (btn) {
                    btn.textContent = hasPrice
                        ? amount + '$ Proceed to Payment...'
                        : 'Price not set for ' + candidateType;
                }
            }
        });
    };

function calculateTotalHours(selectedTimes) {
    let totalMinutes = 0;

    selectedTimes.forEach(slot => {
        const [start, end] = slot.split(' - ').map(timeStr => {
            const [time, modifier] = timeStr.trim().split(' ');
            let [hours, minutes] = time.split(':').map(Number);
            if (modifier === 'PM' && hours !== 12) hours += 12;
            if (modifier === 'AM' && hours === 12) hours = 0;
            return hours * 60 + minutes;
        });

        totalMinutes += (end - start);
    });

    return (totalMinutes / 60).toFixed(1); // return hours with 1 decimal
}

     
 });
 </script>
</body>
</html>