</div><!--content-->
</div> <!--wrapper-->
<div class="overlay"></div>  

</body>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="bootstrap/js/slim.js"></script>
<!-- Popper.JS -->
<script src="bootstrap/js/popper.js"></script>
<!-- Bootstrap JS -->
<script src="bootstrap/js/bootstrap.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="bootstrap/js/scroller.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});
</script>

</html>