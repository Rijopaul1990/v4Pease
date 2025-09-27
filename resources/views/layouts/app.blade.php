<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My Laravel App')</title>
    
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
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
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
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script>
    $(function() {
      
      $("#datepicker").datepicker({
          dateFormat: "dd-mm-yy",
          maxDate: new Date(new Date().setFullYear(new Date().getFullYear() - 5)),
          changeMonth: true,
          changeYear: true,
          yearRange: "1900:" + (new Date().getFullYear() - 5)
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
            alert("Please select a counsellor first.");
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
              debugger;
                if (response.status === 'success') {
                    let timeArray = response.time_slots.split(',').map(item => item.trim());

                    if (choices) {
                        choices.clearChoices(); // Clear old options
                        choices.setChoices(
                            timeArray.map(slot => ({
                                value: slot,
                                label: slot,
                                selected: false
                            })),
                            'value',
                            'label',
                            false
                        );
                    }
                } else {
                    if (choices) {
                      choices.clearChoices();
                    }
                    alert("No time slots found for this date.");
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
    const selected = Array.from(this.selectedOptions).map(opt => opt.value);
    const totalHours = calculateTotalHours(selected);
    
    var counsellorId = $('#councellor_drop').val();

    if (!counsellorId) {
        alert("Please select a counsellor first.");
        return;
    }
    $.ajax({
            url: '/admin/get-final-amount', // Laravel route
            type: 'POST',
            data: {
                counsellor_id: counsellorId,
                totalHours: totalHours,
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function (response) {
                $('#totalHour').val(totalHours);
                $('#totalPrice').val(response);
                document.getElementById('proceed-btn').textContent = `${response}$ Proceed to Payment...`;
            }
        });
});

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