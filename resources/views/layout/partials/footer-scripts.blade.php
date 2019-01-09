<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
  $('.continue').click(function(){
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
  });
  $('.back').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });
</script>

<script>
    $('#loginForm').submit(function(){
        $('#loginBtn').html('Login...');
    });
</script>

<script>
    $('#registerForm').submit(function(){
        $('#registerBtn').html('Registering...');
    });
</script>

<script>
$( function() {
  var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
  ];
  $( "#search" ).autocomplete({
    source: 'http://127.0.0.1:8000/search'
  });
} );
</script>

<!-- <script src="{{url('assets/js/intlTelInput.js')}}"></script> -->
<!-- <script>
  var input = document.querySelector("#jquery-intl-phone");
  window.intlTelInput(input);
</script> -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> -->

<!-- Script -->
  <!-- <script src="{{url('assets/js/jquery.min.js')}}"></script> -->
  <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/js/owl.carousel.js')}}"></script>
  <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
  <script src="{{url('assets/js/map.js')}}"></script>
  <script src="{{url('assets/js/custom.js')}}"></script>
