<li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
    <a href="{!! url('/dashboard') !!}"><i class="fa fa-home"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{!! route('settings.index') !!}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

<li class="{{ Request::is('socialMedia*') ? 'active' : '' }}">
    <a href="{!! route('socialMedia.index') !!}"><i class="fas fa-link"></i><span> Social Media</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fas fa-server"></i><span> Services</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fas fa-fire"></i> Clients</span></a>
</li>

<li class="{{ Request::is('testimonials*') ? 'active' : '' }}">
    <a href="{!! route('testimonials.index') !!}"><i class="fa fa-users"></i><span>Testimonials</span></a>
</li>

<li class="{{ Request::is('funFacts*') ? 'active' : '' }}">
    <a href="{!! route('funFacts.index') !!}"><i class="fas fa-filter"></i><span> Fun Facts</span></a>
</li>

<li class="{{ Request::is('resumes*') ? 'active' : '' }}">
    <a href="{!! route('resumes.index') !!}"><i class="fas fa-file"></i><span> Resumes</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{!! route('skills.index') !!}"><i class="fas fa-server"></i><span> Skills</span></a>
</li>

