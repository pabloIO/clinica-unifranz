
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/materialize/dist/js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js')}} "></script>
<script src="{{ asset('js/config.js')}} "></script>
<script src="{{ asset('js/middleware.js')}} "></script>
<script src="{{ asset('js/logout.js')}} "></script>
@if(url()->current() === 'http://localhost:8000/admin/dashboard')
<script src="{{ asset('js/reserves.js')}} "></script>
@endif
<!-- <script src="{{ asset('js/login.js')}} "></script> -->
<!-- -->
</body>
</html>
