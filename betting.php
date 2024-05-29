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

		<?php if (isset($_SESSION['user']['username'])) { ?>
			<div class="logged_in_info">
				<span><?php echo $_SESSION['user']['username'] ?></span>
				|
				<span><a href="logout.php">Log Out</a></span>
			</div>
		<?php }else{ ?>
			<div class = "second-login">
				<a href = "login.php">Log In</a>
			</div>
		
		<?php }?>

    <!-- CAROUSEL -->
            <div class="carousel">
                <div class="carousel__item">
                    <div class = "carousel-title">Jack's Parlay</div>
                    <div class = "carousel-content">
                        <div class = "carousel-legs">Bengals -6.5</div>
                        <div class = "carousel-legs">Lions +3.5</div>
                        <div class = "carousel-legs">Falcons +5.5</div>
                        <div class = "carousel-legs">Colts Over 45.5</div>
                    	<div class = "carousel-legs">Chargers ML</div>
                        <div class = "carousel-legs">Jags +2.5</div>
                        <div class = "carousel-legs">Bucs -2.5</div>
						<div class = "carousel-legs">Seahawks +6.5</div>
                    </div>
                </div>
                <div class="carousel__item">
                    <div class = "carousel-title">Rob's Parlay</div>
                      <div class = "carousel-content">
                      <div class = "carousel-legs">Bills Over 52.5</div>
                      <div class = "carousel-legs">Cooper Kupp Anytime TD</div>
                      <div class = "carousel-legs">Henderson Over 34.5 Rush</div>
					  <div class = "carousel-legs">Bills -2.5</div>
                      
                    </div>
                </div>
                <div class="carousel__item">
                    <div class = "carousel-title">Zach's Parlay</div>
                </div>

				  <a class="arrow" id = "prev">&#10094;</a>
  				  <a class="arrow" id = "next">&#10095;</a>
				  
            </div>

			<br>
			<br>
			
	<!-- STRAIGHT BETS -->
			<div class = "sport-all">
				<div class = "sport">
					<div class = "sport-title">NFL</div>
					<hr>

					<br>
					
						<div class = "straight-bets">
						<div class = "bets-frontpage">Rams +2.5</div>
						<div class = "bets-frontpage">Bengals -6.5</div>
						<div class = "bets-frontpage">Eagles ML</div>
						<div class = "bets-frontpage">Colts -8.5</div>
						<div class = "bets-frontpage">Falcons ML</div>
						<div class = "bets-frontpage">Jets +6.5</div>
          				<div class = "bets-frontpage">Dolphins ML</div>
          				<div class = "bets-frontpage">Panthers -2.5</div>
					</div>

          				<a href = "includes/nflbets.php">More...</a>

					<br>
					<br>
					
				</div>

				<div class = "sport">
					<div class = "sport-title">NCAAF</div>
					<hr>

					<br>
					
						<div class = "straight-bets">
						<div class = "bets-frontpage">Penn State -24.5</div>
						<div class = "bets-frontpage">Missouri +7.5</div>
						<div class = "bets-frontpage">Pittsburgh +6.5</div>
						<div class = "bets-frontpage">Wisconsin -17.5</div>
						<div class = "bets-frontpage">Iowa St. ML</div>
						<div class = "bets-frontpage">Jets +6.5</div>
          				<div class = "bets-frontpage">Texas Tech ML</div>
          				<div class = "bets-frontpage">Vanderbilt +11.5</div>
					</div>

          				<a href = "#ncaafbets.php">More...</a>

					<br>
					<br>
					
				</div>

				<div class = "sport">
					<div class = "sport-title">NBA</div>
					<hr>
					<br>
				</div>

				<div class = "sport">
					<div class = "sport-title">MLB</div>
					<hr>
					<br>
				</div>

				<div class = "sport">
					<div class = "sport-title">NHL</div>
					<hr>
					<br>
				</div>

			</div>
			
			
		</div>
        

<script src="static/css/main.js"></script>
</body>

<!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>