@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Hero Section -->
<div class="hero-wrap d-flex align-items-center justify-content-center text-center" 
     style="background-image: url('images/home_l.png'); background-size: cover; background-position: center; height: 100vh; position: relative;">

  <!-- Overlay -->
  <div class="overlay" 
       style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; 
              background: rgba(0, 0, 0, 0.45); backdrop-filter: blur(2px); z-index: 1;">
  </div>

  <!-- Content -->
  <div class="container position-relative z-2" style="z-index: 2;">
    <div class="row justify-content-center">
      <div class="col-md-8 text-white animate__animated animate__fadeInUp hero-content">
        <h1 class="display-4 fw-bold mb-3" 
            style="font-family: 'Edu NSW ACT Hand', cursive; color: #f5e6e6;">
          v4peace<span style="color:#ffbcbc;"></span>
        </h1>
        <h5 class="mb-4" style="font-family: 'Edu NSW ACT Hand', cursive; color: #ffe8e8;">
          Recognize Beats of Peace
        </h5>
        <p class="lead mb-5" style="font-family: 'Edu NSW ACT Hand', cursive; color: #fff9f9;">
          A globally trusted online counselling centre, empowering individuals to find peace of
          mind, personal growth, and happiness through compassionate, professional, and accessible
          mental health support.
        </p>

        <div class="d-flex justify-content-center gap-3">
          <a href="#contact-form" class="btn btn-primary btn-lg px-4 py-2" 
             style="border-radius: 30px; background-color: #7b4a4a; border: none;">
            Contact Us
          </a>
          <a href="#services-section" class="btn btn-outline-light btn-lg px-4 py-2" 
             style="border-radius: 30px;">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- WhatsApp Button -->
  <!--<a href="https://wa.me/yourwhatsapplink" target="_blank" -->
  <!--   class="position-absolute bottom-0 end-0 m-4 d-flex align-items-center justify-content-center rounded-circle shadow" -->
  <!--   style="background-color: #25d366; width: 60px; height: 60px; z-index: 3;">-->
  <!--  <i class="fa fa-whatsapp fa-2x text-white"></i>-->
  <!--</a>-->
</div>

<!-- Optional Animation CSS -->
<style>
  html {
    scroll-behavior: smooth;
  }
  
  /* Smooth scroll with offset for fixed header */
  section[id] {
    scroll-margin-top: 80px;
  }
  
  /* Hero content margin - only for desktop/computer devices */
  @media (min-width: 992px) {
    .hero-content {
      margin-left: -519px;
    }
  }
  
  /* Remove margin for tablets and mobile */
  @media (max-width: 991px) {
    .hero-content {
      margin-left: 0 !important;
    }
  }
</style>

<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="intro aside-stretch d-lg-flex w-100">
                    <div class="icon">
                        <span class="flaticon-checklist"></span>
                    </div>
                    <div class="text">
                        <h2>Flexible & Accessible Services </h2>
                        <p>We’re here to meet your needs with convenience and flexibility.
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-1 d-lg-flex w-100">
                    <div class="icon">
                        <span class="flaticon-employee"></span>
                    </div>
                    <div class="text">
                        <h2>Qualified Team</h2>
                        <p>Master's, Doctorates and certifications in Psychology, Counseling & Mental Health
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-2 d-lg-flex w-100">
                    <div class="icon">
                        <span class="flaticon-umbrella"></span>
                    </div>
                    <div class="text">
                        <h2>Individual Approach</h2>
                        <p>We recognize that every client’s journey is unique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Services</span>
        <h2>How It Works</h2>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-calendar"></span>
                        </div>
                    </div>
                    <h2>Online Booking System</h2>
                    <p>Book your appointments quickly and easily online.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-qa"></span>
                        </div>
                    </div>
                    <h2>Start Discussion</h2>
                    <p>Begin a conversation with our expert counselors today.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-checklist"></span>
                        </div>
                    </div>
                    <h2>Enjoy Plan</h2>
                    <p>Follow your personalized plan and see the results unfold.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/who_we_are.png);">
            </div>
            <div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
        <div class="heading-section">
        <span class="subheading">Welcome to Counselor</span>
        <h2 class="mb-4">Who We Are</h2>

        <p>Founded on the principles of empathy, professionalism, and credibility, V4Peace brings together a diverse team of experienced counselors and therapists with extensive expertise across mental health, personal development, and well-being. Our mission is simple yet powerful: to support individuals, couples, and families in overcoming obstacles and achieving emotional balance.
</p>
        <p>We combine evidence-based techniques with a client-centered approach, ensuring that you feel heard, understood, and empowered throughout your journey with us.
</p>

        <!-- <a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center mt-4">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></div>
            <span class="watch">Watch Our Consultant Video</span>
        </a> -->
        </div>

            </div>
        </div>
    </div>
</section>
<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-3">We Can Help You With These Situations</h2>
        </div>
        </div>
        <div class="row tabulation mt-4 ftco-animate">
        <div class="col-md-4">
                <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                    <li class="nav-item text-left">
                    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Career Counseling & Guidance</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Relationship & Marriage Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Life Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Parenting Support & Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Stress Management & Resilience Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Grief & Loss Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-7">Trauma Recovery Support</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-8">Behavioral Coaching & Habit Change</a>
                    </li>
                    <!-- <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-9">Financial Counseling</a>
                    </li> -->
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-10">Support for LGBTQIA+ Clients</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-11">Health & Wellness Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-12">Digital Well-being Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-13">Crisis Intervention Services</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-14">Cultural Adaptation & Cross-Cultural Support</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-15">Peer Support Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-16">Mindfulness & Meditation Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-17">Performance Mindset Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-18">Focus & Concentration Enhancement</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-19">Work-Life Balance for Professionals</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane container p-0 active" id="services-1">
                    <div class="img" style="background-image: url(images/career_counselling_home.png);"></div>
                    <h3><a href="#">Shape Your Future with Confidence</a></h3>
                    <p>Choosing the right career is one of the most important decisions in life. Whether you're a student exploring options, a graduate unsure about your next step, or a professional seeking a career shift, our Career Counseling & Guidance services are designed to help you make informed, confident, and fulfilling choices.</p>
                    <h2>What is Career Counseling?</h2>
                    <p>Career counseling is a structured process that helps individuals understand their strengths, interests, skills, and values to make informed decisions about their education, career path, or professional development. Our expert counselors work one-on-one with clients to explore various career opportunities and create a personalized action plan.</p>
                    <h2>Who Can Benefit?</h2>
                    <ul>
                        <li>
                        <strong>High School Students</strong> – Discover suitable streams and courses aligned with your potential.
                        </li>
                        <li>
                        <strong>College Students</strong> – Find clarity on career options based on your education and interests.
                        </li>
                        <li>
                        <strong>Graduates</strong> – Learn about industry trends, competitive exams, and higher education pathways.
                        </li>
                        <li>
                        <strong>Working Professionals</strong> – Make smooth transitions, explore growth opportunities, or switch careers with confidence.
                        </li>
                    </ul>
                    <h2>Our Approach</h2>
                    <ul>
                        <li>
                        <strong>Aptitude and Personality Assessments</strong><br>
                        We use scientifically validated tools to identify your core strengths and career preferences.
                        </li>
                        <li>
                        <strong>Goal Setting &amp; Planning</strong><br>
                        Our counselors help you define your short-term and long-term career goals, along with actionable steps to achieve them.
                        </li>
                        <li>
                        <strong>Market &amp; Industry Insights</strong><br>
                        Get updated information about trending careers, job prospects, salaries, and skill requirements.
                        </li>
                        <li>
                        <strong>Interview &amp; Resume Support</strong><br>
                        We offer training on resume building, interview preparation, and soft skills development.
                        </li>
                    </ul>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-2">
                    <div class="img" style="background-image: url(images/relationship_counselling_home.png);"></div>
                    <h3><a href="#">Couples Counseling</a></h3>
                    <h2>Relationship &amp; Marriage Counseling</h2>
  <p>
    Healthy relationships are the foundation of emotional well-being. Our <strong>Relationship &amp; Marriage Counseling</strong> services are designed to help couples and individuals build strong, respectful, and fulfilling partnerships.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>Couples</strong> – Strengthen communication, resolve conflicts, and build emotional intimacy.
    </li>
    <li>
      <strong>Married Individuals</strong> – Address issues like trust, compatibility, and stress that may affect the relationship.
    </li>
    <li>
      <strong>Pre-marital Couples</strong> – Prepare for marriage with clarity on expectations, values, and future planning.
    </li>
    <li>
      <strong>Individuals Facing Breakups or Divorce</strong> – Receive emotional support, clarity, and coping strategies.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Open &amp; Safe Communication</strong><br>
      We create a non-judgmental space for both partners to express themselves and be heard.
    </li>
    <li>
      <strong>Conflict Resolution Strategies</strong><br>
      Learn how to manage disagreements constructively and respectfully.
    </li>
    <li>
      <strong>Emotional Connection Building</strong><br>
      Strengthen the bond between partners through empathy, trust, and shared goals.
    </li>
    <li>
      <strong>Guidance for Life Transitions</strong><br>
      Navigate major life events like parenting, relocation, or career shifts with mutual understanding.
    </li>
  </ul>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-3">
                    <div class="img" style="background-image: url(images/life_coaching_home.png);"></div>
                    <h2>Life Coaching</h2>
  <p>
    Life Coaching is a powerful, client-focused process that helps individuals unlock their full potential and achieve personal and professional goals. Our expert life coaches guide you in gaining clarity, building confidence, and creating a meaningful, purpose-driven life.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>Individuals Seeking Direction</strong> – Discover your passions, strengths, and a clear sense of purpose.
    </li>
    <li>
      <strong>Professionals Wanting Growth</strong> – Improve productivity, leadership skills, and work-life balance.
    </li>
    <li>
      <strong>People in Transition</strong> – Navigate life changes such as career shifts, relocation, or personal reinvention.
    </li>
    <li>
      <strong>Anyone Feeling Stuck</strong> – Break free from limiting beliefs, procrastination, or negative patterns.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Goal Clarification</strong><br>
      We help you define meaningful, realistic goals aligned with your values and aspirations.
    </li>
    <li>
      <strong>Action-Oriented Planning</strong><br>
      Develop a practical, step-by-step strategy to move forward confidently.
    </li>
    <li>
      <strong>Mindset Shifting</strong><br>
      Learn techniques to overcome self-doubt, fear, and mental roadblocks.
    </li>
    <li>
      <strong>Accountability &amp; Support</strong><br>
      Stay on track with regular check-ins, motivation, and constructive feedback.
    </li>
  </ul>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-4">
                    <div class="img" style="background-image: url(images/services-4.jpg);"></div>
                    <h2>Parenting Support &amp; Counseling</h2>
  <p>
    Parenting is one of life’s most rewarding yet challenging roles. Our <strong>Parenting Support &amp; Counseling</strong> services offer guidance, strategies, and emotional support to help parents build strong, healthy relationships with their children and confidently navigate every stage of parenthood.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>New Parents</strong> – Adjust to parenting roles, understand infant needs, and manage early-stage challenges.
    </li>
    <li>
      <strong>Parents of School-Age Children</strong> – Learn effective discipline, communication, and support strategies.
    </li>
    <li>
      <strong>Parents of Teenagers</strong> – Deal with emotional changes, peer influence, and academic stress.
    </li>
    <li>
      <strong>Parents Facing Special Challenges</strong> – Get support for parenting children with behavioral, emotional, or developmental issues.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Child-Centered Understanding</strong><br>
      Understand your child's developmental needs, emotions, and behaviors.
    </li>
    <li>
      <strong>Positive Parenting Techniques</strong><br>
      Learn proven strategies to foster trust, discipline with empathy, and build confidence in children.
    </li>
    <li>
      <strong>Emotional Support for Parents</strong><br>
      Address stress, guilt, burnout, and find emotional balance in your parenting journey.
    </li>
    <li>
      <strong>Family Communication Skills</strong><br>
      Strengthen parent-child relationships through healthy communication and conflict resolution.
    </li>
  </ul>
                    </div>
      <div class="tab-pane container p-0 fade" id="services-5">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Stress Management &amp; Resilience Coaching</h2>
        <p>In today’s fast-paced world, stress has become a common part of life. Our <strong>Stress Management &amp; Resilience Coaching</strong> helps individuals identify sources of stress, develop healthy coping mechanisms, and build emotional resilience to face challenges with confidence and calm.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            <strong>Students &amp; Exam Candidates</strong> – Cope with academic pressure, anxiety, and performance stress.
          </li>
          <li>
            <strong>Working Professionals</strong> – Manage work-related stress, burnout, and time pressures.
          </li>
          <li>
            <strong>Caregivers &amp; Homemakers</strong> – Find emotional balance while managing responsibilities at home or in caregiving roles.
          </li>
          <li>
            <strong>Anyone Facing Life Challenges</strong> – Build strength to deal with loss, change, uncertainty, or emotional overload.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Stress Awareness &amp; Identification</strong><br>
            Learn to recognize early signs of stress and understand its sources.
          </li>
          <li>
            <strong>Relaxation &amp; Mindfulness Techniques</strong><br>
            Practice deep breathing, meditation, and body awareness for emotional balance.
          </li>
          <li>
            <strong>Resilience Building Strategies</strong><br>
            Cultivate optimism, adaptability, and a proactive mindset to overcome challenges.
          </li>
          <li>
            <strong>Lifestyle &amp; Time Management Tips</strong><br>
            Improve sleep, nutrition, work-life balance, and personal boundaries for long-term well-being.
          </li>
        </ul>
    </div>
                    <div class="tab-pane container p-0 fade" id="services-6">
                    <div class="img" style="background-image: url(images/grief_and_loss_counselling.png);"></div>
                    <h2>Grief &amp; Loss Counseling</h2>
  <p>
    Coping with the loss of a loved one or experiencing major life changes can be overwhelming. Our <strong>Grief &amp; Loss Counseling</strong> services provide a compassionate space to process emotions, find meaning, and begin the journey toward healing and acceptance.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>Individuals Mourning a Loved One</strong> – Navigate the emotional stages of grief and loss.
    </li>
    <li>
      <strong>People Facing Major Life Changes</strong> – Cope with separation, divorce, job loss, or retirement.
    </li>
    <li>
      <strong>Caregivers &amp; Survivors</strong> – Deal with anticipatory grief or survivor’s guilt in caregiving or traumatic situations.
    </li>
    <li>
      <strong>Children &amp; Teens Experiencing Loss</strong> – Get age-appropriate emotional support to understand and express grief.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Compassionate Listening</strong><br>
      We provide a safe, empathetic environment where you can express your thoughts and feelings freely.
    </li>
    <li>
      <strong>Grief Education &amp; Awareness</strong><br>
      Understand the stages and individual nature of grief to reduce confusion and self-blame.
    </li>
    <li>
      <strong>Emotional Healing Techniques</strong><br>
      Engage in reflection, journaling, mindfulness, or creative expression to work through pain.
    </li>
    <li>
      <strong>Hope &amp; Meaning-Making</strong><br>
      Explore ways to honor the past, rebuild life, and find purpose after loss.
    </li>
  </ul>
                    </div>
      <div class="tab-pane container p-0 fade" id="services-7">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Trauma Recovery Support</h2>
        <p>Recovering from trauma takes time, care, and the right support. Our Trauma Recovery services
            help individuals process painful experiences, build resilience, and regain a sense of safety and
            control in their lives.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Survivors of Abuse or Violence – Heal from physical, emotional, or sexual trauma in a
            safe, nonjudgmental space.
          </li>
          <li>
            Accident or Disaster Survivors – Process shock, fear, and recurring memories after
            traumatic events.
          </li>
          <li>
            Individuals with PTSD Symptoms – Manage triggers, flashbacks, and emotional
            numbness effectively.
          </li>
          <li>
            First Responders or Caregivers – Address compassion fatigue and secondary trauma
            exposure.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Safety &amp; Stabilization</strong><br>
            Establish emotional safety and grounding techniques.
          </li>
          <li>
            <strong>Trauma-Informed Therapy</strong><br>
            Understand how trauma impacts thoughts, behavior, and the body.
          </li>
          <li>
            <strong>Emotional Regulation Tools</strong><br>
            Develop strategies to reduce anxiety, panic, and distress.
          </li>
          <li>
            <strong>Empowerment &amp; Growth</strong><br>
            Rebuild trust, self-worth, and confidence through guided recovery.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-8">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Behavioral Coaching &amp; Habit Change</h2>
        <p>Breaking unhelpful patterns and building healthier habits can transform your daily life. Our
            Behavioral Coaching helps you identify what holds you back and guides you toward consistent,
            positive change.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Individuals Seeking Personal Growth – Build discipline and self-awareness.
          </li>
          <li>
            Professionals Managing Procrastination or Burnout – Replace unproductive habits with
            goal-oriented routines.
          </li>
          <li>
            People with Addictive Behaviors – Develop self-control and mindful choices.
          </li>
          <li>
            Anyone Seeking Motivation – Create sustainable lifestyle changes for long-term success.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Behavioral Assessment</strong><br>
            Understand current patterns and their triggers.
          </li>
          <li>
            <strong>Goal-Oriented Coaching</strong><br>
            Set realistic, measurable milestones.
          </li>
          <li>
            <strong>Accountability Systems</strong><br>
            Stay on track with guided follow-ups and feedback.
          </li>
          <li>
            <strong>Positive Reinforcement</strong><br>
            Strengthen progress through encouragement and reward-based methods.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-10">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Support for LGBTQIA+ Clients</h2>
        <p>We provide a respectful, affirming, and confidential space for LGBTQIA+ individuals to explore
            identity, relationships, and emotional well-being without fear of judgment or discrimination.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Individuals Exploring Gender or Sexual Identity – Find clarity, confidence, and
            acceptance.
          </li>
          <li>
            Those Facing Discrimination or Rejection – Heal from social stigma and internalized
              stress.
          </li>
          <li>
            Couples &amp; Families – Navigate communication, acceptance, and relationship dynamics.
          </li>
          <li>
            Youth in Transition – Access emotional support and guidance during identity formation.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Affirmative Counseling</strong><br>
            Celebrate and validate each person’s unique identity.
          </li>
          <li>
            <strong>Safe &amp; Inclusive Environment</strong><br>
            Foster openness, respect, and belonging.
          </li>
          <li>
            <strong>Identity Empowerment</strong><br>
            Strengthen self-acceptance and resilience.
          </li>
          <li>
            <strong>Community Resource Guidance </strong><br>
            Connect clients with inclusive networks and support Systems.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-7">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Trauma Recovery Support</h2>
        <p>Recovering from trauma takes time, care, and the right support. Our Trauma Recovery services
            help individuals process painful experiences, build resilience, and regain a sense of safety and
            control in their lives.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Survivors of Abuse or Violence – Heal from physical, emotional, or sexual trauma in a
            safe, nonjudgmental space.
          </li>
          <li>
            Accident or Disaster Survivors – Process shock, fear, and recurring memories after
            traumatic events.
          </li>
          <li>
            Individuals with PTSD Symptoms – Manage triggers, flashbacks, and emotional
            numbness effectively.
          </li>
          <li>
            First Responders or Caregivers – Address compassion fatigue and secondary trauma
            exposure.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Safety &amp; Stabilization</strong><br>
            Establish emotional safety and grounding techniques.
          </li>
          <li>
            <strong>Trauma-Informed Therapy</strong><br>
            Understand how trauma impacts thoughts, behavior, and the body.
          </li>
          <li>
            <strong>Emotional Regulation Tools</strong><br>
            Develop strategies to reduce anxiety, panic, and distress.
          </li>
          <li>
            <strong>Empowerment &amp; Growth</strong><br>
            Rebuild trust, self-worth, and confidence through guided recovery.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-7">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Trauma Recovery Support</h2>
        <p>Recovering from trauma takes time, care, and the right support. Our Trauma Recovery services
            help individuals process painful experiences, build resilience, and regain a sense of safety and
            control in their lives.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Survivors of Abuse or Violence – Heal from physical, emotional, or sexual trauma in a
            safe, nonjudgmental space.
          </li>
          <li>
            Accident or Disaster Survivors – Process shock, fear, and recurring memories after
            traumatic events.
          </li>
          <li>
            Individuals with PTSD Symptoms – Manage triggers, flashbacks, and emotional
            numbness effectively.
          </li>
          <li>
            First Responders or Caregivers – Address compassion fatigue and secondary trauma
            exposure.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Safety &amp; Stabilization</strong><br>
            Establish emotional safety and grounding techniques.
          </li>
          <li>
            <strong>Trauma-Informed Therapy</strong><br>
            Understand how trauma impacts thoughts, behavior, and the body.
          </li>
          <li>
            <strong>Emotional Regulation Tools</strong><br>
            Develop strategies to reduce anxiety, panic, and distress.
          </li>
          <li>
            <strong>Empowerment &amp; Growth</strong><br>
            Rebuild trust, self-worth, and confidence through guided recovery.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-7">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Trauma Recovery Support</h2>
        <p>Recovering from trauma takes time, care, and the right support. Our Trauma Recovery services
            help individuals process painful experiences, build resilience, and regain a sense of safety and
            control in their lives.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Survivors of Abuse or Violence – Heal from physical, emotional, or sexual trauma in a
            safe, nonjudgmental space.
          </li>
          <li>
            Accident or Disaster Survivors – Process shock, fear, and recurring memories after
            traumatic events.
          </li>
          <li>
            Individuals with PTSD Symptoms – Manage triggers, flashbacks, and emotional
            numbness effectively.
          </li>
          <li>
            First Responders or Caregivers – Address compassion fatigue and secondary trauma
            exposure.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Safety &amp; Stabilization</strong><br>
            Establish emotional safety and grounding techniques.
          </li>
          <li>
            <strong>Trauma-Informed Therapy</strong><br>
            Understand how trauma impacts thoughts, behavior, and the body.
          </li>
          <li>
            <strong>Emotional Regulation Tools</strong><br>
            Develop strategies to reduce anxiety, panic, and distress.
          </li>
          <li>
            <strong>Empowerment &amp; Growth</strong><br>
            Rebuild trust, self-worth, and confidence through guided recovery.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-7">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Trauma Recovery Support</h2>
        <p>Recovering from trauma takes time, care, and the right support. Our Trauma Recovery services
            help individuals process painful experiences, build resilience, and regain a sense of safety and
            control in their lives.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Survivors of Abuse or Violence – Heal from physical, emotional, or sexual trauma in a
            safe, nonjudgmental space.
          </li>
          <li>
            Accident or Disaster Survivors – Process shock, fear, and recurring memories after
            traumatic events.
          </li>
          <li>
            Individuals with PTSD Symptoms – Manage triggers, flashbacks, and emotional
            numbness effectively.
          </li>
          <li>
            First Responders or Caregivers – Address compassion fatigue and secondary trauma
            exposure.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Safety &amp; Stabilization</strong><br>
            Establish emotional safety and grounding techniques.
          </li>
          <li>
            <strong>Trauma-Informed Therapy</strong><br>
            Understand how trauma impacts thoughts, behavior, and the body.
          </li>
          <li>
            <strong>Emotional Regulation Tools</strong><br>
            Develop strategies to reduce anxiety, panic, and distress.
          </li>
          <li>
            <strong>Empowerment &amp; Growth</strong><br>
            Rebuild trust, self-worth, and confidence through guided recovery.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-11">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Health &amp; Wellness Counseling</h2>
        <p>Achieving mental wellness goes hand in hand with physical health. Our Health &amp; Wellness Counseling focuses on lifestyle balance, stress management, and overall well-being to help you thrive holistically.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Individuals Managing Stress or Fatigue</strong> – Learn strategies to restore energy and calm.</li>
          <li><strong>Those Coping with Chronic Illness</strong> – Build emotional strength to live meaningfully.</li>
          <li><strong>People Seeking Healthier Lifestyles</strong> – Balance diet, exercise, and rest with professional guidance.</li>
          <li><strong>Anyone Seeking Preventive Wellness</strong> – Foster resilience and mental clarity for long-term health.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Mind-Body Connection</strong><br>Explore how emotions influence physical health.</li>
          <li><strong>Lifestyle Coaching</strong><br>Set achievable goals for fitness, sleep, and nutrition.</li>
          <li><strong>Stress Reduction Techniques</strong><br>Practice mindfulness, breathing, and relaxation.</li>
          <li><strong>Holistic Health Planning</strong><br>Integrate physical, emotional, and spiritual well-being.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-12">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Digital Well-being Counseling</h2>
        <p>Technology should serve your life, not control it. Our Digital Well-being Counseling helps individuals manage screen time, digital addiction, and online stress for healthier, more mindful living.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students &amp; Professionals</strong> – Balance productivity and screen dependency.</li>
          <li><strong>Parents &amp; Families</strong> – Develop healthy digital habits for children and teens.</li>
          <li><strong>Individuals Facing Social Media Burnout</strong> – Reduce comparison stress and information overload.</li>
          <li><strong>Gamers &amp; Content Creators</strong> – Manage engagement without losing emotional balance.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Digital Habit Assessment</strong><br>Understand your online behavior patterns.</li>
          <li><strong>Screen-Time Management</strong><br>Set boundaries and digital detox routines.</li>
          <li><strong>Mindful Technology Use</strong><br>Learn conscious engagement and emotional regulation online.</li>
          <li><strong>Balance Restoration</strong><br>Reconnect with real-life relationships and interests.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-13">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Crisis Intervention Services</h2>
        <p>In times of emotional crisis, immediate and compassionate support can make all the difference. Our Crisis Intervention Services offer timely guidance to help you stabilize and regain control during distress.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Individuals Experiencing Acute Stress or Panic</strong> – Get immediate coping tools.</li>
          <li><strong>Those Facing Suicidal Thoughts or Self-Harm Urges</strong> – Access urgent emotional support.</li>
          <li><strong>Families in Crisis</strong> – Navigate conflict, trauma, or sudden loss together.</li>
          <li><strong>Victims of Violence or Disasters</strong> – Receive immediate psychological first aid.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>24/7 Support Access</strong><br>Immediate help when it’s needed most.</li>
          <li><strong>Crisis Stabilization</strong><br>Techniques to calm intense emotions safely.</li>
          <li><strong>Short-Term Counseling</strong><br>Focused sessions for immediate problem-solving.</li>
          <li><strong>Referral &amp; Follow-Up</strong><br>Continued care for long-term recovery and safety.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-14">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Cultural Adaptation &amp; Cross-Cultural Support</h2>
        <p>Adapting to a new culture or environment can be both exciting and stressful. Our Cultural Adaptation Support helps individuals manage transitions, identity shifts, and emotional adjustments in multicultural settings.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>International Students &amp; Professionals</strong> – Adjust to new cultural and academic environments.</li>
          <li><strong>Migrants &amp; Expats</strong> – Navigate homesickness and cultural identity challenges.</li>
          <li><strong>Intercultural Couples &amp; Families</strong> – Strengthen understanding and communication.</li>
          <li><strong>Returnees</strong> – Reintegrate smoothly after living abroad.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Cultural Awareness Building</strong><br>Understand cultural values and differences.</li>
          <li><strong>Emotional Adjustment Support</strong><br>Manage culture shock and loneliness.</li>
          <li><strong>Communication Skills Coaching</strong><br>Improve interpersonal and workplace adaptability.</li>
          <li><strong>Resilience Training</strong><br>Develop confidence and cross-cultural empathy.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-15">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Peer Support Counseling</h2>
        <p>Sometimes, healing begins with being heard by someone who understands. Our Peer Support Counseling connects individuals with trained peers who provide empathy, encouragement, and shared understanding.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students &amp; Young Adults</strong> – Discuss stress, relationships, and identity with relatable support.</li>
          <li><strong>Individuals Facing Loneliness</strong> – Build connection and community.</li>
          <li><strong>People in Recovery</strong> – Share progress and challenges with peers who’ve walked similar paths.</li>
          <li><strong>Caregivers</strong> – Gain emotional relief through peer understanding.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Empathetic Listening</strong><br>Engage in safe, judgment-free conversations.</li>
          <li><strong>Mutual Support</strong><br>Build strength through shared experience.</li>
          <li><strong>Guided Peer Training</strong><br>Ensure supportive and ethical interactions.</li>
          <li><strong>Connection to Resources</strong><br>Access professional help when needed.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-16">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Mindfulness &amp; Meditation Coaching</h2>
        <p>Find calm and clarity amid life’s chaos. Our Mindfulness &amp; Meditation Coaching helps individuals cultivate awareness, emotional balance, and present-moment living.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Individuals Seeking Stress Relief</strong> – Learn techniques to calm the mind.</li>
          <li><strong>Professionals Managing Burnout</strong> – Reconnect with purpose and focus.</li>
          <li><strong>Students</strong> – Enhance concentration and emotional stability.</li>
          <li><strong>Anyone Seeking Inner Peace</strong> – Develop lifelong mindfulness practices.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Guided Meditation Sessions</strong><br>Practice breathwork and focus techniques.</li>
          <li><strong>Mindful Awareness Training</strong><br>Strengthen presence and self-compassion.</li>
          <li><strong>Stress &amp; Emotion Regulation</strong><br>Manage anxiety through mindfulness.</li>
          <li><strong>Integration in Daily Life</strong><br>Bring mindfulness into routines and relationships.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-17">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Performance Mindset Coaching</h2>
        <p>Unlock your peak potential through structured mindset development. Our Performance Mindset Coaching equips individuals to overcome mental barriers and perform with confidence, consistency, and purpose.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students &amp; Professionals</strong> – Improve focus, discipline, and motivation.</li>
          <li><strong>Athletes &amp; Artists</strong> – Build resilience and mental toughness.</li>
          <li><strong>Leaders &amp; Entrepreneurs</strong> – Cultivate clarity under pressure.</li>
          <li><strong>Anyone Striving for Excellence</strong> – Turn potential into sustained performance.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Mindset Reframing</strong><br>Replace limiting beliefs with empowering thoughts.</li>
          <li><strong>Goal Visualization</strong><br>Train the mind for success through mental imagery.</li>
          <li><strong>Resilience Building</strong><br>Handle setbacks with confidence and adaptability.</li>
          <li><strong>Peak Performance Strategies</strong><br>Apply proven tools for sustained results.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-18">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Focus &amp; Concentration Enhancement</h2>
        <p>In an age of constant distraction, sharpening focus is essential for success. Our Focus Enhancement sessions teach mental discipline and practical tools to improve attention span and productivity.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students Preparing for Exams</strong> – Enhance study focus and retention.</li>
          <li><strong>Working Professionals</strong> – Improve concentration and task efficiency.</li>
          <li><strong>Creatives &amp; Innovators</strong> – Sustain creative flow without distraction.</li>
          <li><strong>Individuals with Attention Challenges</strong> – Develop structured focus routines.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Attention Training</strong><br>Practice techniques to sustain mental engagement.</li>
          <li><strong>Distraction Management</strong><br>Identify and minimize attention drains.</li>
          <li><strong>Cognitive Exercises</strong><br>Strengthen memory, clarity, and thinking speed.</li>
          <li><strong>Mindful Focus Practice</strong><br>Combine mindfulness and concentration for lasting improvement.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-19">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Work-Life Balance for Professionals</h2>
        <p>In the modern world, maintaining harmony between work and personal life is vital. Our Work-Life Balance Coaching helps professionals manage time, reduce stress, and create sustainable lifestyles.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Corporate Employees &amp; Managers</strong> – Manage professional stress effectively.</li>
          <li><strong>Entrepreneurs &amp; Business Owners</strong> – Create balance without compromising growth.</li>
          <li><strong>Working Parents</strong> – Juggle responsibilities with calm and clarity.</li>
          <li><strong>Remote Workers</strong> – Build structure and emotional boundaries.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Time &amp; Priority Management</strong><br>Optimize routines for balance and fulfillment.</li>
          <li><strong>Boundary Setting</strong><br>Separate work and personal spaces effectively.</li>
          <li><strong>Stress Reduction Techniques</strong><br>Learn tools to recharge mentally and physically.</li>
          <li><strong>Life Integration Coaching</strong><br>Align career goals with personal well-being.</li>
        </ul>
      </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
(function() {
  function scrollToPane(hash) {
    var el = document.querySelector(hash);
    if (!el) return;
    var y = el.getBoundingClientRect().top + window.pageYOffset - 20;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }

  if (window.jQuery) {
    jQuery(function($) {
      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        if (window.innerWidth <= 768) {
          var target = $(e.target).attr('href');
          if (target && target.charAt(0) === '#') {
            scrollToPane(target);
          }
        }
      });

      $('a[data-toggle="tab"]').on('click', function() {
        if (window.innerWidth <= 768) {
          var target = $(this).attr('href');
          if (target && target.charAt(0) === '#') {
            setTimeout(function() { scrollToPane(target); }, 150);
          }
        }
      });
    });
  } else {
    var links = document.querySelectorAll('a[data-toggle="tab"]');
    Array.prototype.forEach.call(links, function(link) {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 768) {
          var target = link.getAttribute('href');
          if (target && target.charAt(0) === '#') {
            setTimeout(function() { scrollToPane(target); }, 200);
          }
        }
      });
    });
  }
})();
</script>
@include('happyClient')
<section class="ftco-appointment ftco-section img" id="contact-form" style="background-image: url(images/happy_client_6.png);">
    <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-md-6 half ftco-animate">
                <h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
                <form action="#" class="appointment">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <div class="form-field">
                            <div class="select-wrap">
                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                        <select name="" id="" class="form-control">
                        <option value="">Services</option>
                        <option value="">Relation Problem</option>
                        <option value="">Couple Counseling</option>
                        <option value="">Depression Treatment</option>
                        <option value="">Family Problem</option>
                        <option value="">Personal Problem</option>
                        <option value="">Business Problem</option>
                        </select>
                    </div>
                        </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                        <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                    </div>
                            </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
</section>
<!-- <section class="ftco-section">
    <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Blog</span>
        <h2>Recent Blog</h2>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a mb-3></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>              
                        </div>
        </div>
        </div>
    </div>
    </div>
</section>	 -->
@endsection