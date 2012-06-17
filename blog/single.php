<article>

	<h1><?php echo $post[0]->post_title ?></h1>
	
	<?php Blog::postDate($post[0]->post_id, "d/m/Y") ?>
	
	<?php echo $post[0]->post_body ?>
	
</article>

<?php Blog::commentForm() ?>