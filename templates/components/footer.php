<?php
/**
 * Footer
 *
 * @package CargoPress
 */
?>

<footer class="footer py-4" role="contentinfo">
    <div class="container">
       <div class="row">
           <div class="col-sm-6">
               <p class="mb-4 mb-sm-0"><?php the_field('footer_main_text'); ?></p>
           </div>

           <div class="col-sm-6">
               <p class="text-sm-end"><a href="<?php the_field('footer_privacy_policy_link'); ?>">Privacy Policy</a> |  <a href="<?php the_field('footer_faq_link'); ?>">FAQ</a>  |  <a href="<?php the_field('footer_contact_link'); ?>">Contact</a></p>
           </div>
       </div>
    </div>
</footer>
</div><!-- end of .boxed-container -->

<?php wp_footer(); ?>
</body>
</html>
