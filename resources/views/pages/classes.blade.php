@extends('layouts.site')

@section('page-title', 'Classes')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>Classes</span></h1>
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

    <!-- CLASSES CONTENTS -->
    <div class="classes">
        <div class="container">
            <div class="row intro">
                <div class="col-lg-12">
                    <h1>Overview of Classes</h1>
                    <h2>Taught by our experienced instructors</h2>
                    <p>
                        At PFA we offer two types of classes. The first option is our GROUP classes while the second option is our PERSONAL classes where you receive one on one training with one of our instructors. All classes and options are listed below. We welcome you to come try one of our adult or children’s group classes for FREE. 
                    </p>
                </div>
            </div>
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/personal-classes.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Personal Classes <span class="name">Private Lesson</span></div>
                        <div class="description">During private lessons your instructor is your partner for every technique, so they can physically see and feel all of your movements and provide instant feedback on every detail.<br><br>
                            If you are eager to learn and you want to do it in the most effective way possible, private lessons are the way to go! In private lessons, you may learn your instructor's secret techniques as well as key strategies that are often overlooked or simply too complex to teach in a group class.<br><br>
                            We offer 30 min. and one hour lessons that will make you feel like you've just had the best workout possible. We offer personal lessons in all the classes listed below, or if you just want a workout we can also provide that.<br><br>
                            You can pay by the lesson or save by pre-purchasing 5 hour or 10 hour packages. Limited spaces available.</div>
                        <div class="button"><a href="/contact-us" class="fill">Contact us for pricing</a></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/group-classes.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Group Classes</div>
                        <div class="description">Students who participate in group classes are more likely to reach their fitness goals than individuals who train alone. In a group class, we provide instructors to push you to your limits; as well as your teammates &amp; training partners.<br><br>
                            Our group classes are based on ages and the type of class you are interested in taking. We offer classes for children from 5 to 8 years old, youth 9 to 12 years old and our adult classes for anyone 13 years of age or older. While the majority of PFA students train for FUN &amp; FITNESS, a few students train to compete as an amateur or even professional athlete. Below is a list of the group classes offered.</div>
                        <div class="button"><a href="/contact-us" class="fill">Contact us for pricing</a></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->

            <div class="row intro">
                <div class="col-lg-12">
                    <h1>Youth &amp; Children’s Martial Arts Classes</h1>
                </div>
            </div>

            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/lil-champs.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Lil' Champs (5-8 years old) <span class="name">Group Class</span></div>
                        <div class="description">If you’re interested in instilling your child with sure confidence while reinforcing positive values and quality character, the Junior Samurai's or Lil' Champs program is for your child!<br><br>
                        The Lil' Champs program is for kids 5-8 years old. Using “Functional Games", we teach Children basic self-defense techniques while instilling the foundational principles of leverage and control. Children will learn functional movement patterns, which will help increase their fitness levels and co-ordination. The secret to the success of this program is that we make the lessons so fun that the kids beg for more! Once a child masters all the Games, they advance to the Junior Combative program.</div>
                        <div class="button"><a href="/class-schedule" class="fill">View Schedule</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/junior-sam.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Junior Samurai's (9-12 years Old) <span class="name">Group Class</span></div>
                        <div class="description">If you’re interested in instilling your child with sure confidence while reinforcing positive values and quality character, the Junior Samurai's or Lil' Champs program is for your child!<br><br>
                        In the Jr. Samurai's program, we focus on non-violent self-defense techniques that teach children to “defuse and discuss” with the bullies. Vocal assertiveness strategies are a major part of this program. A child needs absolutely no experience to start, and we guarantee a noticeable increase in your child’s self-confidence within weeks!</div>
                        <div class="button"><a href="/class-schedule" class="fill">View Schedule</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <div class="row intro">
                <div class="col-lg-12">
                    <h1>Adult Classes (13 years and older)</h1>
                </div>
            </div>

            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/bjj.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Brazilian Jiu Jitsu <span class="name">Group Class</span></div>
                        <div class="description">Through years of training, the Brazilians have developed a simple yet evolved approach to self-defense, sport grappling and mixed martial arts. The strategies used in this class include a variety of takedowns, throws, holds, chokes, and locks. You will practice these skills and techniques with specialized training methods that allow smaller individuals to cultivate the techniques and skills necessary to control and defeat a larger foe.</div>
                        <div class="button"><a href="/class-schedule" class="fill">View Schedule</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/mma.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Mixed Martial Arts (MMA) <span class="name">Group Class</span></div>
                        <div class="description">MMA has become a very popular sport taking the world by storm. The sport has become the wave of the future combining striking arts with grappling and submission arts. Our MMA classes combine the best of the martial arts and you will learn a wide range of skills from Muay Thai and Boxing to Wrestling and Brazilian Jiu Jitsu. Our instructors have traveled the globe in search of the most up to date training methods and have learned them from the best. This has made it possible for you to learn a wide range of skills and techniques that will make you the ultimate martial artist. Our stand up portion of our mixed martial arts program is included in our Muay Thai/Kickboxing classes, while our grappling & submission portion of our mixed martial arts program is included in our Brazilian Jiu Jitsu & Wrestling classes. Anyone who wants to compete in MMA should attend all three types of classes (Muay Thai, Brazilian Jiu Jitsu & Wrestling)<br><br>
                        <strong>MMA Fusion</strong> class combines Jiu Jitsu with striking and Wrestling. It is for those who want to work on their MMA skills. Each class combines different aspects of MMA to develop your skill and technique.</div>
                        <div class="button"><a href="/class-schedule" class="fill">View Schedule</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/group-classes.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Muay Thai / Kickboxing <span class="name">Group Class</span></div>
                        <div class="description">Our group classes are for everyone - from beginner to advanced students! We have Muay Thai/Kickboxing classes in the daytime and evenings. Our workouts offer everything from serious muscle toning and increased endurance to increased power and strength. These classes include shadowboxing, bag work , pad work, and partner training. In addition to the intense, full-body workout, you will also increase your speed and coordination while learning a valuable skill that can be applied to real life situations.</div>
                        <div class="button"><a href="/class-schedule" class="fill">View Schedule</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/wrestling.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Wrestling <span class="name">Group Class</span></div>
                        <div class="description">In our Wrestling class, you'll learn how to grapple and apply various techniques such as clinch fighting, throws, take downs, joint locks, pins and other grappling holds. A wrestling bout is a physical competition between two (occasionally more) competitors or sparring partners who attempt to gain and maintain a superior position. There are a wide range of styles with varying rules with both traditional historic and modern styles. Wrestling techniques have been incorporated into other martial arts as well as military hand-to-hand combat systems. Our program focuses on Submission Wrestling.</div>
                        <div class="button"><a href="/class-schedule" class="fill">View Schedule</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/competative.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Competitive <span class="name">Group Class</span></div>
                        <div class="description">While many students join our program for fun and fitness, others want to compete. This means getting in the ring or cage or going to tournaments. We offer competitive classes for both amateur and professional athletes. What styles of competition are you interested in competing in? Is it MMA (Mixed Martial Arts), Muay Thai/ Kickboxing, or Brazilian Jiu Jitsu?<br><br>
                        The primary focus of these classes is controlled contact which includes technique and sparring. We prepare athletes for competition in these classes. If you are simply someone who wants to train like an athlete but not interested in competing you are also welcome to attend.<br><br>
                        <strong>Prerequisite:</strong> f your goal is to compete, you must train hard and be dedicated. We offer SPECIAL classes not included on our class schedule. Set up a meeting with Coach Brad!</div>
                        <div class="button"><a href="/contact-us" class="fill">Contact us for details</a> <span class="price">Members only</span></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/fight-camps.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Fight Camps <span class="name">Group Class</span></div>
                        <div class="description">Our fight camps are for those who are preparing for competition. We have had individuals from all over the globe come to PFA to prepare for their fights! If you aren't from Southern Alberta we can help find short term living arrangements. The camps are based on individual needs and include day time one on one instruction, competitive classes and group classes. These can be done for a few weeks or months if needed. Contact us for more information.</div>
                        <div class="button"><a href="/contact-us" class="fill">Contact us for details</a></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->
            <!-- Classe Block Starts -->
            <div class="row block">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <div class="picture"><img src="{{ asset('site-assets/images/management.png') }}" class="img-responsive" alt="" ></div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="info">
                        <div class="dept">Fighter Management</div>
                        <div class="description">Are you serious about your fight career? We manage professional and amateur athletes in Muay Thai/Kickboxing and MMA. If you don't have a Manager or need help getting fights we can help! Maybe you’ve plateaued in your fight career and need to make changes. We are well connected with many organizations throughout the world. A good Manager can help a fighter’s ability to negotiate with the major promotions, as individuals are fairly limited.<br><br>
                        We work for our athletes! Contact us today!</div>
                        <div class="button"><a href="/contact-us" class="fill">Contact us for details</a></div>
                    </div>
                </div>
            </div>
            <!-- Classe Block Ends -->

            <div class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <h1>How can I get started?</h1>
                            <div class="description">Come try a FREE class during any of our evening beginner or daytime mixed level classes. You'll need to sign a FREE class form, so come 5 minutes before class begins. Bring athletic clothing and a water bottle.</div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-25">
                            <div id="free-class"  class="blue-bg">
                                <h2>try a <strong>FREE</strong> class</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / CLASSES CONTENT -->

@endsection