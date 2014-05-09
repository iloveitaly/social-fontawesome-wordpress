<aside id="social-fontawesome">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>&t=<?php echo $title; ?>" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
	<a href="http://twitter.com/share?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
	<a href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
	<a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=&description=<?php echo $title; ?>" target="_blank" title="Share on Pinterest"><i class="fa fa-pinterest"></i></a>
	<a href="mailto:?subject=<?php echo urldecode($title); ?>&amp;body=Check out this article on <?php echo get_bloginfo(); ?>%0D%0A%0D%0A<?php echo $url; ?>" target="_blank" title="Share using Email"><i class="fa fa-envelope"></i></a>
</aside>