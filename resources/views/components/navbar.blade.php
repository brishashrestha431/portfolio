<div class="main-container">
    <div class="aside">
        <div class="logo">
            <a href="#"> <span></span></a>
        </div>
    </div>
</div>


<div class="nav-toggler">
    <span></span>
</div>


<ul class="nav">
    <li>
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">
            <i class="fa fa-home"></i> Home
        </a>
    </li>
    <li>
        <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">
            <i class="fa fa-user"></i> About
        </a>
    </li>
    <li>
        <a href="{{ route('skills') }}" class="{{ Request::is('skills') ? 'active' : '' }}">
            <i class="fa fa-list"></i> Skills
        </a>
    </li>
    <li>
        <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">
            <i class="fa fa-comments"></i> Contact
        </a>
    </li>
</ul>

