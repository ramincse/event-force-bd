<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
</head>

<body>
    <!-- START HEADER -->
    @include('frontend.layouts.header')
    <!-- END HEADER -->

    <!-- START SECTION BREADCRUMB -->
    @if( Route::currentRouteName() == 'about.page' || Route::currentRouteName() == 'service.page' || Route::currentRouteName() == 'documentary.page' || Route::currentRouteName() == 'client.page' || Route::currentRouteName() == 'gallery.page' || Route::currentRouteName() == 'contact.page' )
    @include('frontend.layouts.page-header')
    @endif

    @section('main-content')
    @show

    <!-- START FOOTER -->
    @include('frontend.layouts.footer')
    <!-- END FOOTER -->
    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    @include('frontend.layouts.partials.scripts')
</body>

</html>