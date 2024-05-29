<?php require_once('config.php') ?>

<?php if (isset($_SESSION['user']['username'])) { ?>
			<div class="logged_in_info">
				<span><?php echo $_SESSION['user']['username'] ?></span>
				|
				<span><a href="logout.php">Log Out</a></span>
			</div>
		<?php }else{ ?>
			<div class = "second-login">
				<a href = "login.php">Login</a>
			</div>
		
		<?php }?>