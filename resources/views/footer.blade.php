
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/materialize/dist/js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js')}} "></script>
<script src="{{ asset('js/config.js')}} "></script>
@if(url()->current() === 'http://localhost:8000/consulta')
<script src="{{ asset('js/getFormData.js')}} "></script>
@endif
@if(url()->current() === 'http://localhost:8000/admin')
<script src="{{ asset('js/login.js')}} "></script>
@endif
<!-- -->
</body>
</html>
