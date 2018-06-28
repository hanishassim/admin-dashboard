<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('images/sidebar-2.jpg') }}" style="z-index: 10000;">
<!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
    {{ config('app.name', 'Laravel') }}
    </a>
</div>
<div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="39b96584-9a81-93df-84f4-f1b0c77e2828">
    <ul class="nav">
    <li class="nav-item  ">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('table') }}">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('map') }}">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('notification') }}">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    </ul>
<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
<div class="sidebar-background" style="background-image: url(&quot;{{ asset('images/sidebar-2.jpg') }}&quot;);"></div></div>
<div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="b2bbb995-2a66-3dab-f483-47aed214e6b6">