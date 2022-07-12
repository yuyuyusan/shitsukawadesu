<!-- footer -->
<footer id="footer" class="footer">
  <div class="footerContainer">
    <div class="footerContainer__logo">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/" alt="">
      </a>
    </div>

    <nav id="footerNav" class="footerNav">
      <ul class="footerNav__list">
        <li class="footerNav__listItem">
          <a href="<?php echo esc_url(home_url()); ?>/about/">
            <span class="jp">私たち</span><span class="en">About</span>
          </a>
        </li>
        <li class="footerNav__listItem">
          <a href="<?php echo esc_url(home_url()); ?>/recruit/">
            <span class="jp">採用情報</span><span class="en">Recruit</span>
          </a>
        </li>
        <li class="footerNav__listItem">
          <a href="<?php echo esc_url(home_url()); ?>/contact/">
            <span class="jp">お問い合わせ</span><span class="en">Contact</span>
          </a>
        </li>
      </ul>
    </nav>

  </div>

  <p class="copy">&copy;2022 inc.</p>

</footer>
<!-- wrapper -->
</div> 

<!-- bootstrap -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<!-- cookieconsent -->
<!-- <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
	<script src="src/js/lib/consent.js"></script> -->
<!-- bubble.js -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/lib/bubbly-bg.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/js/lib/bubbly-bg.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/bubbly.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/bubbly-bg.js')); ?>"></script>
<!-- swiper -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/lib/swiper-bundle.min.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/js/lib/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/swiper.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/swiper.js')); ?>"></script>
<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/lib/jquery-3.6.0.min.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/js/lib/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/function.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/function.js')); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>