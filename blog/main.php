<form method="get" action="<?php echo $_GET['page'] ?>/search">
	<input type="text" name="q" placeholder="Search" />
</form>

<?php if (!empty($posts)) : foreach ($posts as $key => $post) : ?>
		
		<article>	
			
			<h2>
				<a href="<?php Blog::postUri($post->post_id) ?>">
					<?php echo $post->post_title ?>
				</a>
			</h2>
			
			<?php Blog::postDate($post->post_id, "d/m/Y") ?>
			
			<?php Blog::postExcerpt($post->post_id, 400); ?>
			
			
			<a href="<?php Blog::postUri($post->post_id) ?>" title="View Post">View Post</a>
			
			<a href="<?php Blog::postUri($post->post_id) ?>#disqus_thread" data-disqus-identifier="<?php echo $post->post_id ?>" class="comment-link"></a>
	
		</article>
		
<?php endforeach; else : ?>
	
		Sorry, there are no posts available
		
<?php endif; ?>

<?php Blog::prevLink('&larr; Previous Posts', 'bloglink prev');
Blog::nextLink('Next Posts &rarr;', 'bloglink next'); ?>