@extends('layouts.site')

@section('page-title', 'About Us')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>About Us</span></h1>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="box blue-bg">
                            <h2><strong>Join</strong> the team and achieve your goals</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US BANNER ENDS -->

@endsection

@section('content')

    <!-- ABOUT US -->
    <div class="about-us">
        <!-- INTRO STARTS -->
        <div class="container intro">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h1>The Academy</h1>
                    <div class="description">We are <strong>Lethbridge's only certified Muay Thai/Kickboxing program.</strong> We are certified by the World Muay Thai Council. Our Brazilian Jiu Jitsu program is certified under professor Joe Moreira Brazilian Jiu Jitsu Association &amp; professor Anderson Goncalves.
                    <br><br>
                        Today we have a variety of instructors who teach group classes and private lessons. Our instructors include Brad Wall, Tom O'Connor, Roberta Nikkel, Connor Derry, Trevor Hardy, Kyle Larson, Lucas Neufeld, Vladimir Tatarinov and Andrew Turner.<br><br>
                    </div>
                    <h1>We are known for three main aspects of our training</h1>
                    <div class="description"><strong>Excellence in teaching:</strong> We have some of the best instructors in southern Alberta who are instructed to teach in a safe and effective manner. Whether you want to lose weight, gain confidence, become a professional World Champion or just have FUN; our trainers will help you achieve your goals in the shortest amount of time.<br><br>
                    </div>
                    <div class="description"><strong>Excellence in Martial Arts:</strong> The Progressive Fighting Academy has produced World, North American, Canadian and regional Champions. We have an unsurpassed record to date in southern Alberta. We teach authentic Muay Thai direct from Thailand and our Gi- &amp; No-Gi Brazilian Jiu Jitsu and Mixed Martial Arts (MMA) programs are the best in Lethbridge. Our program is respected all over Canada. Few people have the depth of knowledge that the Progressive Fighting Academy has.<br><br>
                    </div>
                    <div class="description"><strong>Safety:</strong> The hardest part of martial arts is starting your first class. Some people are worried to try martial arts for fear they will get hurt; that's why we guarantee your safety in every class and have non-contact training available. Our programs are healthy sport designed to build your body. Since we work with professional athletes daily, we have a smart and respectful approach to training<br><br>
                    </div>

                    <blockquote style="width: 100%;">
                        <p><strong>Our goal is to make better athletes and better people! Join us today and let us help you.</strong>
                        </p>
                        <div class="quote"></div>
                    </blockquote>

                    <h1>Memberships</h1>
                    <div class="description">Memberships options provide full access to the PFA facility and group classes. Members are allowed the flexibility to choose what classes are right for them as well as the frequency in which they attend. There are no designated start or end dates to our group classes, so members can attend as little or as much as wanted.<br><br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="picture"><img src="{{ asset('site-assets/images/about.jpg') }}" class="img-responsive" alt=""></div>
                    <div class="description-2">Head instructor Brad Wall speaking to students during a class. At PFA we offer two types of classes. The first option is our GROUP classes while the second option is our PERSONAL classes with one of our instructors. </div>
                </div>
            </div>
        </div>
        <!-- / INTRO -->

        <!-- TEAM -->
        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h1>How can I get started?</h1>
                        <div class="description">Come try a FREE class during any of our evening beginner or daytime mixed level classes. You'll need to sign a FREE class form, so come 5 minutes before class begins. Bring athletic clothing and a water bottle.</div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-25">
                        <div id="free-class" class="blue-bg">
                            <h2>try a <strong>FREE</strong> class</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / TEAM -->
    
    </div>
    <!-- / ABOUT US -->

@endsection