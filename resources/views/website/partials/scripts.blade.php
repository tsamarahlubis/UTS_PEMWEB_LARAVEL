<!-- jquery -->
<script src="{{asset('static/website/js/jquery-3.3.1.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('static/website/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script>
    var plugin_path = '{{url("static/website/js")}}/';
</script>

{{-- <!-- REVOLUTION JS FILES -->
<script src="{{asset('static/website/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/jquery.themepunch.revolution.min.js')}}"></script> --}}

{{-- <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('static/website/revolution/js/extensions/revolution.extension.video.min.js')}}"></script> --}}
<!-- revolution custom -->
{{-- <script src="{{asset('static/website/revolution/js/revolution-custom.js')}}"></script> --}}

<!-- custom -->
{{-- <script src="{{asset('static/website/js/custom.js')}}"></script> --}}

{{-- Isotope --}}
<script src="{{asset('static/website/js/isotope/isotope-pkgd.js')}}"></script>

{{-- Magnfic PopUp --}}
<script src="{{asset('static/website/js/magnific-popup/magnific-popup.js')}}"></script>

{{-- Main --}}
<script src="{{asset('static/website/js/main.js')}}"></script>

{{-- Aos Js --}}
<script src="{{asset('static/website/js/aos.js')}}"></script>

{{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}

<script>
    AOS.init({
            disable: 'phone',
            once: true
            // Opsi lain sesuai kebutuhan
        });
  </script>


{{-- owl-carousel --}}
<script src="{{ asset('static/website/js/owl-carousel-testi/jquery.min.js') }}"></script>
<script src="{{ asset('static/website/js/owl-carousel-testi/owl.carousel.min.js') }}"></script>
<script src="{{ asset('static/website/js/owl-carousel-testi/style-slider.js') }}"></script>

<script src="{{asset('js/aksa-js.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src='https://malsup.github.io/jquery.blockUI.js'></script>
@yield('scripts')

