<header class="header_wrap fixed-top header_with_topbar">   
    @php
        $all_settings = App\Models\Setting::find(1);
    @endphp
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="{{ URL::to('/') }}/media/settings/{{ $all_settings->logo }}" alt="logo" />
                    <img class="logo_dark" src="{{ URL::to('/') }}/media/settings/{{ $all_settings->logo }}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'home.page') ? 'active' : '' }}" href="{{ route('home.page') }}">Home</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'about.page') ? 'active' : '' }}" href="{{ route('about.page') }}">About Us</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'service.page') ? 'active' : '' }}" href="{{ route('service.page') }}">Event Services</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'documentary.page') ? 'active' : '' }}" href="{{ route('documentary.page') }}">Documentary</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'client.page') ? 'active' : '' }}" href="{{ route('client.page') }}">Clients</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'gallery.page') ? 'active' : '' }}" href="{{ route('gallery.page') }}">Gallery</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'contact.page') ? 'active' : '' }}" href="{{ route('contact.page') }}">Contact Us</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                @php
                    $hotline_arr = json_decode($all_settings->hotline);
                @endphp  
                    <div>
                        <h6 class="m-0" style="font-size: 14px; color: #333; text-transform: uppercase; text-align: center;">Hotline:</h4>
                        <p class="mb-0" style="line-height: 18px;"><i style="margin-right: 6px; font-size: 14px; color: #333;" class="fas fa-headset"></i><span style="font-size: 14px; color: #333;">{{ $hotline_arr->cell_1 }}</span></p>
                        <hr style="background: #333;" class="m-0">
                        <p class="mb-0" style="line-height: 18px;"><i style="margin-right: 6px; font-size: 14px; color: #333;" class="fas fa-headset"></i><span style="font-size: 14px; color: #333;">{{ $hotline_arr->cell_2 }}</span></p>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</header>