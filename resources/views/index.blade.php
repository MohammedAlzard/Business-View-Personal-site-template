@extends('layouts-website.app')
@section('content')

     <!-- Main Content -->
        <div id="main" class="site-main">
            <!-- Page changer wrapper -->
            <div class="pt-wrapper" style="background-image: url(images/bg.png);">
                <!-- Subpages -->
                <div class="subpages">

                    <!-- Home Subpage -->
                    <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
                        <div class="section-inner">
                            <div class="home-page-block">
                                <h2>{!! FunctionHelpers::Settings()->full_name !!}</h2>
                                <div class="owl-carousel text-rotation">
                                    <div class="item">
                                        <p class="home-page-description">Web Designer</p>
                                    </div>
                                    <div class="item">
                                        <p class="home-page-description">Frontend-developer</p>
                                    </div>
                                </div>
                                <h3 style="text-align: center">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}">Login</a>
                                            @endauth
                                        </div>
                                    @endif
                                </h3>
                            </div>
                        </div>
                    </section>
                    <!-- End of Home Subpage -->

                    <!-- About Me Subpage -->
                    <section class="pt-page pt-page-2" data-id="about_me">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper clearfix">
                                    <h2 class="section-title">About Me</h2>
                                    <h5 class="section-description">Artist, Thinker, Creative Doer</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                    <div class="my-photo-block tilt-effect">
                                        <img src="{{ asset('uploads/settings/' . FunctionHelpers::Settings()->profile_image) }}" alt="Profile Image">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <h3>{!! FunctionHelpers::Settings()->title !!}</h3>
                                    <p>{!! FunctionHelpers::Settings()->description !!}</p>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                    <ul class="info-list">
                                        <li><span class="title">Age</span><span class="value">{!! FunctionHelpers::Settings()->age !!}</span></li>
                                        <li><span class="title">Residence</span><span class="value">{!! FunctionHelpers::Settings()->residence !!}</span></li>
                                        <li><span class="title">Address</span><span class="value">{!! FunctionHelpers::Settings()->address !!}</span></li>
                                        <li><span class="title">e-mail</span><span class="value"><a href="mailto:{!! FunctionHelpers::Settings()->email !!}">{!! FunctionHelpers::Settings()->email !!}</a></span></li>
                                        <li><span class="title">Phone</span><span class="value">{!! FunctionHelpers::Settings()->phone !!}</span></li>
                                        <li><span class="title">Skype</span><span class="value">{!! FunctionHelpers::Settings()->skype !!}</span></li>
                                        {{-- <li><span class="title">Freelance</span><span class="value available">Available</span></li> --}}
                                    </ul>

                                    <ul class="social-links">
                                        @foreach ($socialMedias as $socialMedia)
                                            <li><a class="tip social-button" href="{{ $socialMedia->link }}"><i class="{{ $socialMedia->icon }}" target="_blank"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Services block -->
                            <div class="block-title">
                                <h3>Services</h3>
                            </div>

                            <div class="row">
                                @foreach($services as $service)
                                <div class="col-sm-6 col-md-3 subpage-block">
                                    <div class="service-block">
                                        <div class="service-info">
                                            <img src="{{ asset('uploads/services/'.$service->image) }}" alt="Responsive Design">
                                            <h4>{!! $service->title !!}</h4>
                                            <p>{!! $service->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- End of Services block -->

                            <!-- Clients block -->
                            <div class="block-title">
                                <h3>Clients</h3>
                            </div>

                            <div class="row">
                                @foreach($clients as $client)
                                <div class="col-sm-4 col-md-2 subpage-block">
                                    <div class="client-block">
                                        <a href="" target="_blank"><img src="{{ asset('uploads/clients/'.$client->image) }}" alt="image"></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- End of Clients block -->

                            <div class="row">
                                <div class="col-sm-12 col-md-12 subpage-block">
                                    <div class="block-title">
                                        <h3>Testimonials</h3>
                                    </div>
                                    <div class="testimonials owl-carousel">
                                        @foreach($testimonials as $testimonial)
                                        <!-- Testimonial 1 -->
                                        <div class="testimonial-item">
                                            <!-- Testimonial Content -->
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <p>{!! $testimonial->description !!}</p>
                                                </div>
                                            </div>
                                            <!-- /Testimonial Content -->
                                            <!-- Testimonial Author -->
                                            <div class="testimonial-credits">
                                                <!-- Picture -->
                                                <div class="testimonial-picture">
                                                    <img src="{{ asset('uploads/testimonials/' . $testimonial->image) }}" alt="">
                                                </div>
                                                <!-- /Picture -->
                                                <!-- Testimonial author information -->
                                                <div class="testimonial-author-info">
                                                    <p class="testimonial-author">{!! $testimonial->author !!}</p>
                                                    <p class="testimonial-firm">{!! $testimonial->firm !!}<</p>
                                                </div>
                                            </div>
                                            <!-- /Testimonial author information -->
                                        </div>
                                        <!-- End of Testimonial 1 -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Fun facts block -->
                            <div class="block-title">
                                <h3>Fun Facts</h3>
                            </div>

                            <div class="row">
                                @foreach($funFacts as $funFact)
                                    <div class="col-sm-6 col-md-3 subpage-block">
                                        <div class="fun-fact-block gray-bg tilt-effect">
                                            @if($funFact->icon == "far fa-coffee")
                                                <i class="pe-7s-icon pe-7s-coffee"></i>
                                            @else
                                                <i class="{!! $funFact->icon !!} pe-7s-icon"></i>
                                            @endif
                                            <h4>{!! $funFact->title !!}</h4>
                                            <span class="fun-value">{!! $funFact->number !!}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End of Fun fucts block -->
                        </div>
                    </section>
                    <!-- End of About Me Subpage -->

                    <!-- Resume Subpage -->
                    <section class="pt-page pt-page-3" data-id="resume">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Resume</h2>
                                    <h5 class="section-description">{!! FunctionHelpers::Settings()->yearsExperience !!} </h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Education</h3>
                                    </div>
                                    <div class="timeline">
                                        @foreach($resumesEducations as $resumesEducation)
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">{{ $resumesEducation->datetime }}</h5>
                                            <h4 class="event-name">{{ $resumesEducation->title }}</h4>
                                            <span class="event-description">--------</span>
                                            <p>{!! $resumesEducation->description !!}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Experience</h3>
                                    </div>
                                    <div class="timeline">
                                        @foreach($resumesExperiences as $resumesExperience)
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">{{ $resumesExperience->datetime }}</h5>
                                            <h4 class="event-name">{{ $resumesExperience->title }}</h4>
                                            <span class="event-description">--------</span>
                                            <p>{!! $resumesExperience->description !!}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Design Skills</h3>
                                    </div>
                                    <div class="skills-info">
                                        @foreach ($designSkills as $designSkill)
                                        <h4>{{ $designSkill->title }}</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage {{ $designSkill->persentasie }}"></div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="block-title">
                                        <h3>Coding Skills</h3>
                                    </div>
                                    <div class="skills-info">
                                        @foreach ($codingSkills as $codingSkill)
                                        <h4>{{ $codingSkill->title }}</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage {{ $codingSkill->persentasie }}"></div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @if(!empty(FunctionHelpers::Settings()->cv))
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="download-cv-block">
                                        <a class="button" target="_blank" href="{!! FunctionHelpers::Settings()->cv !!}">Download CV</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </section>
                    <!-- End Resume Subpage -->


                    <!-- Portfolio Subpage -->
                    <section class="pt-page pt-page-4" data-id="portfolio">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Portfolio</h2>
                                    <h5 class="section-description">My Best Works</h5>
                                </div>
                            </div>

                            <!-- Portfolio Content -->
                            <div class="portfolio-content">

                                <!-- Portfolio filter -->
                                <ul id="portfolio_filters" class="portfolio-filters">
                                    <li class="active">
                                        <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                                    </li>
                                </ul>
                                <!-- End of Portfolio filter -->

                                <!-- Portfolio Grid -->
                                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                                    <!-- Portfolio Item 1 -->
                                    <figure class="item" data-groups='["all", "media"]'>
                                        <a class="ajax-page-load" href="portfolio-1.html">
                                            <img src="{{ asset('design/website/images/portfolio/1.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Media</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 1 -->

                                    <!-- Portfolio Item 2 -->
                                    <figure class="item" data-groups='["all", "video"]'>
                                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                                            <img src="{{ asset('design/website/images/portfolio/2.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Video</small>
                                                <i class="pe-7s-icon pe-7s-video"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 2 -->

                                    <!-- Portfolio Item 3 -->
                                    <figure class="item" data-groups='["all","illustration"]'>
                                        <a href="images/portfolio/full/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                                            <img src="{{ asset('design/website/images/portfolio/3.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Illustration</small>
                                                <i class="pe-7s-icon pe-7s-photo"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 3 -->

                                    <!-- Portfolio Item 4 -->
                                    <figure class="item" data-groups='["all", "media"]'>
                                        <a class="ajax-page-load" href="portfolio-2.html">
                                            <img src="{{ asset('design/website/images/portfolio/4.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Media</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 4 -->

                                    <!-- Portfolio Item 5 -->
                                    <figure class="item" data-groups='["all", "illustration"]'>
                                        <a href="images/portfolio/full/5.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
                                            <img src="{{ asset('design/website/images/portfolio/5.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Illustration</small>
                                                <i class="pe-7s-icon pe-7s-photo"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 5 -->

                                    <!-- Portfolio Item 6 -->
                                    <figure class="item" data-groups='["all", "media"]'>
                                        <a class="ajax-page-load" href="portfolio-3.html">
                                            <img src="{{ asset('design/website/images/portfolio/6.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Media</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 6 -->

                                    <!-- Portfolio Item 7 -->
                                    <figure class="item" data-groups='["all", "video"]'>
                                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
                                            <img src="{{ asset('design/website/images/portfolio/7.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Video</small>
                                                <i class="pe-7s-icon pe-7s-video"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 7 -->

                                    <!-- Portfolio Item 8 -->
                                    <figure class="item" data-groups='["all",  "media"]'>
                                        <a class="ajax-page-load" href="portfolio-4.html">
                                            <img src="{{ asset('design/website/images/portfolio/8.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Media</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 8 -->

                                    <!-- Portfolio Item 9 -->
                                    <figure class="item" data-groups='["all","illustration"]'>
                                        <a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
                                            <img src="{{ asset('design/website/images/portfolio/9.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Illustration</small>
                                                <i class="pe-7s-icon pe-7s-photo"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 9 -->

                                    <!-- Portfolio Item 10 -->
                                    <figure class="item" data-groups='["all", "video"]'>
                                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                                            <img src="{{ asset('design/website/images/portfolio/10.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Video</small>
                                                <i class="pe-7s-icon pe-7s-video"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 10 -->

                                    <!-- Portfolio Item 11 -->
                                    <figure class="item" data-groups='["all","illustration"]'>
                                        <a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                                            <img src="{{ asset('design/website/images/portfolio/11.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Illustration</small>
                                                <i class="pe-7s-icon pe-7s-photo"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 11 -->

                                    <!-- Portfolio Item 12 -->
                                    <figure class="item" data-groups='["all","media"]'>
                                        <a class="ajax-page-load" href="portfolio-5.html">
                                            <img src="{{ asset('design/website/images/portfolio/12.jpg') }}" alt="">
                                            <div>
                                                <h5 class="name">Project Name</h5>
                                                <small>Media</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 12 -->
                                </div>
                                <!-- /Portfolio Grid -->

                            </div>
                            <!-- /Portfolio Content -->
                        </div>
                    </section>
                    <!-- /Portfolio Subpage -->

                    <!-- Contact Subpage -->
                    <section class="pt-page pt-page-5" data-id="contact">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Contact</h2>
                                    <h5 class="section-description">Get in Touch</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 subpage-block">
                                    <div class="block-title">
                                        <h3>Get in Touch</h3>
                                    </div>
                                    <p>{!! FunctionHelpers::Settings()->desc_contact !!}</p>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-map-marker"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>{!! FunctionHelpers::Settings()->address !!}</h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-mail"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>{!! FunctionHelpers::Settings()->email !!}</h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-call"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>{!! FunctionHelpers::Settings()->phone !!}</h5>
                                        </div>
                                    </div>
                                    {{-- <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-check"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>Freelance Available</h5>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="col-sm-6 col-md-6 subpage-block">
                                    <div class="block-title">
                                        <h3>Contact Form</h3>
                                    </div>
                                    <form id="contact-form" method="post" action="http://lmpixels.com/demo/unique/unique-vcard/contact_form/contact_form.php">

                                        <div class="messages"></div>

                                        <div class="controls">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-user"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-mail"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required"
                                                    data-error="Please, leave me a message."></textarea>
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-comment"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <input type="submit" class="button btn-send" value="Send message">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Contact Subpage -->

                </div>
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->

@endsection