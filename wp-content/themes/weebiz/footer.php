    <!-- Light Footer -->
    <footer class="light-footer">
      <div class="container">
        <p class="footer-info"><strong>UIdeck</strong> - Bootstrap 4 UI Kit. © 2017 - All Rights Reserved. <span class="pull-right">Designed by <a href="https://uideck.com">UIdeck</a></span></p>
      </div>
    </footer>
  </div>
  <!-- Page Wrapper End -->

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/tether.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>

  <script src="<?php echo get_template_directory_uri()?>/js/jquery.mixitup.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/form-validator.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/contact-form-script.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>

  <script>
    $(document).ready(function() {
      //MixitUp
      $(function() {
        $('#portfolio').mixItUp();
      });
    });
  </script>

  <?php wp_footer()?>
</body>

</html>