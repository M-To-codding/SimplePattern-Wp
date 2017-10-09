<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple-project
 */

?>

	</div><!-- #content -->

<footer class="contacts">
    <h2 class="heading">
        Lorem ipsum
    </h2>

    <div class="container">
        <p class="info">
            Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
        </p>

        <div id="contacts"></div>

        <form action="<?php get_template_directory() . 'inc/email-form-handler.php'?>" method="post" class="contact-form">
            <input type="text" id="email" name="email" placeholder="Email">
            <textarea name="message" id="message" name="message" placeholder="Message" cols="15" rows="4"></textarea>
            <button type="submit" name="submit-button" id="submit-button" class="send-message">Send</button>
        </form>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
