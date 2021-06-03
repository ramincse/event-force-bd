    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'admin.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'events.index') ? 'active' : '' }}">
                        <a href="{{ route('events.index') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> <span>Event Concern</span></a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'event.portfolio') ? 'active' : '' }}">
                        <a href="{{ route('event.portfolio') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> <span>Portfolio</span></a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-info" aria-hidden="true"></i> <span>About Us</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'about-management.index') ? 'ok' : '' }}"><a href="{{ route('about-management.index') }}">Management</a></li>
                            <li class="{{ (Route::currentRouteName() == 'about-vice.index') ? 'ok' : '' }}"><a href="{{ route('about-vice.index') }}">Director Message</a></li>
                            <li class="{{ (Route::currentRouteName() == 'about.text.message') ? 'ok' : '' }}"><a href="{{ route('about.text.message') }}">Background History</a></li>
                        </ul>
                    </li>
                    
                    
                    <li class="submenu">
                        <a href="#"><i class="fa fa-server" aria-hidden="true"></i> <span>Event Services</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'provide.index') ? 'ok' : '' }}">
                                <a href="{{ route('provide.index') }}">Services Provide</a>
                            </li>
                            <li class="{{ (Route::currentRouteName() == 'management.index') ? 'ok' : '' }}">
                                <a href="{{ route('management.index') }}">Event Management</a>
                            </li>
                            <li class="{{ (Route::currentRouteName() == 'logistics.index') ? 'ok' : '' }}">
                                <a href="{{ route('logistics.index') }}">Event Logistics</a>
                            </li>
                            <li class="{{ (Route::currentRouteName() == 'event.services.document') ? 'ok' : '' }}">
                                <a href="{{ route('event.services.document') }}">Production House</a>
                            </li>
                            <li class="{{ (Route::currentRouteName() == 'security.index') ? 'ok' : '' }}">
                                <a href="{{ route('security.index') }}">Event Security</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-server" aria-hidden="true"></i> <span>Documentary</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'who.we.are') ? 'ok' : '' }}">
                                <a href="{{ route('who.we.are') }}">Who We Are</a>
                            </li>
                            <li class="{{ (Route::currentRouteName() == 'sofar.index') ? 'ok' : '' }}">
                                <a href="{{ route('sofar.index') }}">Documentary List</a>
                            </li>
                            <li class="{{ (Route::currentRouteName() == 'videos.index') ? 'ok' : '' }}">
                                <a href="{{ route('videos.index') }}">Documentary Videos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'client.index') ? 'active' : '' }}">
                        <a href="{{ route('client.index') }}"><i class="fe fe-activity"></i> <span>Clients</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'gallery.index') ? 'active' : '' }}">
                        <a href="{{ route('gallery.index') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Gallery</span></a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-compress" aria-hidden="true"></i> <span>Contact</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'contact.banner') ? 'ok' : '' }}"><a href="{{ route('contact.banner') }}">Banner Photo</a></li>
                            <li class="{{ (Route::currentRouteName() == 'contact.map') ? 'ok' : '' }}"><a href="{{ route('contact.map') }}">Google Location</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-vector"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'slider.index') ? 'ok' : '' }}"><a href="{{ route('slider.index') }}"> Slider </a></li>
                            <li class="{{ (Route::currentRouteName() == 'theme.option') ? 'ok' : '' }}"><a href="{{ route('theme.option') }}">Theme Option</a></li>
                            <li class="{{ (Route::currentRouteName() == 'theme.footer') ? 'ok' : '' }}"><a href="{{ route('theme.footer') }}">Footer Option</a></li>
                        </ul>
                    </li>

                    <form id="logout_form" action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                </form>
                    
                </ul>
            </div>
        </div>
    </div>