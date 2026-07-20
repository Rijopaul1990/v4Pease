<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+91 98468 86752</a> 
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> v4peacecounselling@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
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
        <a class="navbar-brand" href="index.html"><img src="./images/new_v4peace.com.png" style="width: 138px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if(request()->segment(1) == '' || request()->segment(1) == 'Home') { echo 'active'; } ?>"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item" <?php if(request()->segment(1) == 'about') { echo 'active'; }?>><a href="{{ url('/about') }}" class="nav-link">About</a></li>
            <li class="nav-item" <?php if(request()->segment(1) == 'counselor') { echo 'active'; } ?>><a href="{{ url('/counselor') }}" class="nav-link">Counselor</a></li>
            <li class="nav-item"><a href="{{ url('/slotBooking') }}" class="nav-link">Book your slot</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item" <?php if(request()->segment(1) == 'contactus') { echo 'active'; }?>><a href="{{ url('/contactus') }}" class="nav-link">Contact</a></li>
        </ul>
        </div>
    </div>
</nav>