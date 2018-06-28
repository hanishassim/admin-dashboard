<footer class="footer">
    <div class="container-fluid">
    <nav class="float-left">
        <ul>
        <li>
            <a href="{{ route('home') }}">
            About Us
            </a>
        </li>
        <li>
            <a href="{{ route('home') }}">
            Blog
            </a>
        </li>
        <li>
            <a href="{{ route('home') }}">
            Licenses
            </a>
        </li>
        </ul>
    </nav>
    <div class="copyright float-right">
        ©
        <script>
        document.write(new Date().getFullYear())
        </script> made with <i class="material-icons" style="font-size:1.2em; color:red;">favorite</i> by
        <a href="{{ route('home') }}" target="_blank">{{ config('app.name', 'Laravel') }}</a>.
    </div>
    </div>
</footer>