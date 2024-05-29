
<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>

<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>Locker Room Sports</title>
</head>
<body>
	<!-- container - wraps whole page -->
   
		<!-- // navbar -->
        <?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<div class="container">
		<?php include( ROOT_PATH . '/loginbanner.php')?>
        <?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- Page content -->
		<div class="content">
			
			<!-- more content still to come here ... -->
	<?php foreach ($posts as $post): ?>
		<div class="post" style="margin-left: 0px;">
			<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
			
			<!--<?php if (isset($post['topic']['name'])): ?>
				<a 
					href = "<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
					class = "btn category">
					<?php echo $post ['topic']['name'] ?>

				</a>
				<?php endif ?> -->

				<a href="/single_post.php?post-slug=<?php echo $post['slug']; ?>">
				<div class="post_info">
					<h3><?php echo $post['title'] ?></h3>
					<div class="info">
						
						<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
						<span class="read_more">Read more...</span>
					</div>
				</div>
			</a>
		</div>
		
	<?php endforeach ?>
		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>