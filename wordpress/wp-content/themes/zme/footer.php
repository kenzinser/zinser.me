<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package zme
 * @since zme 1.0
 */
?>

	</div><!-- #main .site-main -->

<section class="twitter">
	<h3>On Twitter</h3>
	<div class="tweet"></div>
	
	<p class="twitter-follow">Follow me → <a href="http://twitter.com/kenzinser" title="@kenzinser">@kenzinser</a></p>
</section>



<section class="elsewhere">
	<h2>Elsewhere</h2>
	<ul>
		<li><a href="http://reference.zdsn.co" target="_blank">Tumblr</a></li>
		<li><a href="http://be.net/zin-ser" target="_blank">Behance</a></li>
	</ul>
</section>

<footer class="contact">
	<p>Get in touch → <a href="mailto:<?php echo get_bloginfo ( 'admin_email' );  ?>?subject=Hey, Ken!"><?php echo get_bloginfo ( 'admin_email' );  ?></a></p>
</footer>
</div><!-- #page .hfeed .site -->
<script>
	jQuery(function($){
		$(".tweet").tweet({
			username: "kenzinser",
			count: 1,
			loading_text: "",
			template: "{text} → {time}"
		});
	});
</script>
<?php wp_footer(); ?>

</body>
</html>