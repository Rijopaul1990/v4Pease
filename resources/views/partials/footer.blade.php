<footer class="ftco-footer">
    <div class="container">
    <div class="row mb-5">
        <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 logo"><a href="#">Dear Client!</a></h2>
            <p>Your journey matters. We’re here to guide you with care, clarity, and confidence. Book a session today and take the next step towards a better tomorrow.</p>
            <ul class="ftco-footer-social list-unstyled mt-2">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Explore</h2>
            <ul class="list-unstyled">
            <li><a href="<?= url('/about');?>"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
            <li><a href="<?= url('/slotBooking');?>"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Legal</h2>
            <ul class="list-unstyled">
            <li><a href="{{ route('privacy.policy') }}"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
            <li><a href="#" data-toggle="modal" data-target="#qualityPolicyModal"><span class="fa fa-chevron-right mr-2"></span>Quality Policy</a></li>
            <li><a href="{{ url('/termsAndConditions') }}"><span class="fa fa-chevron-right mr-2"></span>Terms &amp; Conditions</a></li>
            <li><a href="{{ route('refund.policy') }}"><span class="fa fa-chevron-right mr-2"></span>Refund Policy</a></li>
            <li><a href="{{ route('shipping.policy') }}"><span class="fa fa-chevron-right mr-2"></span>Shipping/Delivery Policy</a></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Company</h2>
            <ul class="list-unstyled">
            <li><a href="{{ url('/about') }}"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
            <li><a href="{{ url('/blog') }}"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
            <li><a href="{{ url('/contactus') }}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
            <li><a href="{{ url('/career') }}"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-12 col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Question?</h2>
            <div class="block-23 mb-3">
                <ul>
                <li><span class="icon fa fa-map marker"></span><span class="text">v4peace.com, Ernakulam, Kothamangalam</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 9495702172</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">v4peacecounselling@gmail.com</span></a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Accreditation / Trust badges -->
    <div class="vp-cert-strip">
        <div class="container">
            <div class="vp-cert-inner">
                <div class="vp-cert-heading"><span class="fa fa-certificate"></span> Accredited &amp; Government Recognised</div>
                <div class="vp-cert-items">
                    <div class="vp-cert-item" title="Government Approved — Official Certification">
                        <span class="vp-cert-badge"><img src="{{ asset('images/GOVERNMENT_badge.png') }}" alt="Government Approved — V4Peace Counselling Centre"></span>
                        <div class="vp-cert-text"><strong>Government Approved</strong><small>Official Certification</small></div>
                    </div>
                    <div class="vp-cert-item" title="ISO 9001:2015 Certified — Quality Management System">
                        <span class="vp-cert-badge"><img src="{{ asset('images/ISO_badge.png') }}" alt="ISO 9001:2015 Certified — V4Peace Counselling Centre"></span>
                        <div class="vp-cert-text"><strong>ISO 9001:2015 Certified</strong><small>Quality Management System</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 py-5 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">v4peace.com</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
    </div>
</footer>

<!-- Quality Policy Modal -->
<div class="modal fade" id="qualityPolicyModal" tabindex="-1" role="dialog" aria-labelledby="qualityPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qualityPolicyModalLabel">Quality Policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-weight-bold">"Compassion with Professional Excellence."</p>
                <p>V4Peace Counselling Centre is committed to providing ethical, confidential, and client-centered counselling services that promote emotional well-being, mental health, and personal growth.</p>
                <p>Our goal is to be a trusted and preferred counselling centre by delivering high-quality therapeutic services that meet client needs and comply with applicable statutory and regulatory requirements.</p>
                <p class="mb-2"><strong>We demonstrate our commitment to quality by:</strong></p>
                <p class="mb-1"><strong>Client-Centered Care</strong></p>
                <ul>
                    <li>Ensuring confidentiality, dignity, and respect in every interaction</li>
                    <li>Providing evidence-based counselling interventions</li>
                    <li>Understanding client needs through active listening and structured assessment</li>
                    <li>Striving for measurable improvement in client well-being and satisfaction</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<style>
  /* Keep footer social icons on a single row (theme's 50px + float caused wrapping) */
  .ftco-footer .ftco-footer-social {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding-left: 0;
  }
  .ftco-footer .ftco-footer-social li {
    margin: 0 8px 8px 0;
    display: inline-flex;
  }
  .ftco-footer .ftco-footer-social li a {
    width: 42px;
    height: 42px;
    float: none;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .ftco-footer .ftco-footer-social li a span {
    position: static;
    top: auto;
    left: auto;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  /* Accreditation / trust badges strip */
  .ftco-footer .vp-cert-strip {
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    padding: 36px 0;
  }
  .ftco-footer .vp-cert-inner {
    display: flex; flex-direction: column; align-items: center;
    gap: 22px; text-align: center;
  }
  .ftco-footer .vp-cert-heading {
    color: rgba(255, 255, 255, 0.6);
    text-transform: uppercase; letter-spacing: .1em;
    font-size: 13px; font-weight: 600;
  }
  .ftco-footer .vp-cert-heading .fa { color: #c9a24a; margin-right: 7px; }
  .ftco-footer .vp-cert-items {
    display: flex; flex-wrap: wrap; justify-content: center; gap: 48px;
  }
  .ftco-footer .vp-cert-item {
    display: flex; align-items: center; gap: 15px;
    transition: transform .25s ease;
  }
  .ftco-footer .vp-cert-item:hover { transform: translateY(-4px); }
  .ftco-footer .vp-cert-badge {
    width: 92px; height: 92px; flex: 0 0 92px;
    display: inline-flex;
  }
  .ftco-footer .vp-cert-badge img {
    width: 100%; height: 100%; object-fit: contain; display: block;
    filter: drop-shadow(0 6px 16px rgba(0, 0, 0, 0.45));
  }
  .ftco-footer .vp-cert-text { text-align: left; }
  .ftco-footer .vp-cert-text strong { display: block; color: #fff; font-size: 15px; font-weight: 600; }
  .ftco-footer .vp-cert-text small { color: rgba(255, 255, 255, 0.55); font-size: 12.5px; }
  @media (max-width: 575.98px) {
    .ftco-footer .vp-cert-items { gap: 30px; }
    .ftco-footer .vp-cert-item { flex-direction: column; text-align: center; }
    .ftco-footer .vp-cert-text { text-align: center; }
  }
</style>