<h1>Data for show in index page</h1>


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

{!! FunctionHelpers::Settings()->full_name !!}
<img src="{{ asset('uploads/settings/' . FunctionHelpers::Settings()->profile_image) }}" alt="Profile Image">



{!! FunctionHelpers::Settings()->title !!}
{!! FunctionHelpers::Settings()->description !!}
{!! FunctionHelpers::Settings()->yearsExperience !!}
@if(!empty(FunctionHelpers::Settings()->cv))
<a class="button" target="_blank" href="{!! FunctionHelpers::Settings()->cv !!}">Download CV</a>
@endif

<h1>About</h1>
{!! FunctionHelpers::Settings()->age !!}
{!! FunctionHelpers::Settings()->residence !!}
{!! FunctionHelpers::Settings()->address !!}
{!! FunctionHelpers::Settings()->email !!}
{!! FunctionHelpers::Settings()->phone !!}
{!! FunctionHelpers::Settings()->skype !!}

{!! FunctionHelpers::Settings()->desc_contact !!}
{!! FunctionHelpers::Settings()->address !!}
{!! FunctionHelpers::Settings()->email !!}
{!! FunctionHelpers::Settings()->phone !!}

<h1>Social Medias</h1>
@foreach ($socialMedias as $socialMedia)
{{ $socialMedia->link }} , {{ $socialMedia->icon }}
@endforeach


<h1>Services</h1>
@foreach($services as $service)
<img src="{{ asset('uploads/services/'.$service->image) }}" alt="Responsive Design">
<h4>{!! $service->title !!}</h4>
<p>{!! $service->description !!}</p>
@endforeach

<h1>Clients</h1>
 @foreach($clients as $client)
<img src="{{ asset('uploads/clients/'.$client->image) }}" alt="image">
@endforeach

<h1>Testimonials</h1>

 @foreach($testimonials as $testimonial)
<p>{!! $testimonial->description !!}</p>
<img src="{{ asset('uploads/testimonials/' . $testimonial->image) }}" alt="">
<p class="testimonial-author">{!! $testimonial->author !!}</p>
<p class="testimonial-firm">{!! $testimonial->firm !!}<</p>
@endforeach

<h1>Fun Facts</h1>
@foreach($funFacts as $funFact)
@if($funFact->icon == "far fa-coffee")
    <i class="pe-7s-icon pe-7s-coffee"></i>
@else
    <i class="{!! $funFact->icon !!} pe-7s-icon"></i>
@endif
<h4>{!! $funFact->title !!}</h4>
<span class="fun-value">{!! $funFact->number !!}</span>
@endforeach

@foreach($resumesEducations as $resumesEducation)
<h5 class="event-date">{{ $resumesEducation->datetime }}</h5>
<h4 class="event-name">{{ $resumesEducation->title }}</h4>
<p>{!! $resumesEducation->description !!}</P>
@endforeach


 <h1>Design Skills</h1>
@foreach ($designSkills as $designSkill)
{{ $designSkill->title }}
{{ $designSkill->persentasie }}
@endforeach

 <h1>Coding Skills</h1>
@foreach ($codingSkills as $codingSkill)
{{ $codingSkill->title }}
{{ $codingSkill->persentasie }}
@endforeach
