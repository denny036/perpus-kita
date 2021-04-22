<!-- Javascript files-->
<script src="{{ asset('templates/js/jquery.min.js') }}"></script>
<script src="{{ asset('templates/js/popper.min.js') }}"></script>
<script src="{{ asset('templates/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('templates/js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('templates/js/plugin.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('templates/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('templates/js/custom.js') }}"></script>
<!-- javascript -->
<script src="{{ asset('templates/js/owl.carousel.js') }}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
     $(".fancybox").fancybox({
     openEffect: "none",
     closeEffect: "none"
     });

     $(".zoom").hover(function(){

     $(this).addClass('transition');
     }, function(){

     $(this).removeClass('transition');
     });
     });
</script>
<script>
    function openNav() {
     document.getElementById("myNav").style.width = "100%";
     }
     function closeNav() {
     document.getElementById("myNav").style.width = "0%";
     }
</script>
