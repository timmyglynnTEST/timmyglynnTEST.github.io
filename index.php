<?php
require_once 'includes/header.php'; 
require_once 'classes/entry.php';
?>

	<!-- Main -->
		<div id="main">

        					<section id="intro">
								<a href="create.php" class="logo"><img src="images/logo.jpg" alt=""></a>
								<header>
									<h2>M.E.P. Social Health</h2>
									<p>The road to a well balanced mental, emotional, and physical life </p>
								</header>

							</section>



<?php 
            $query = 'SELECT * FROM entries ORDER BY entry_id DESC LIMIT 7;';
            require_once('classes/dbh.php');
            $dbh = new Dbh();
            $rows = $dbh->executeSelect($query);
            //print_r($rows);
            foreach ($rows as $row) {
	        $entry = new Entry();
	        $entry->setByRow($row);
?>
 






							<!--
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="single.html">Magna sed adipiscing</a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt=""></a>
									</div>
								</header>
								<a href="single.html" class="image featured"><img src="images/pic01.jpg" alt=""></a>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
								<footer>
									<ul class="actions">
										<li><a href="single.html" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article> -->


						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="editor.php?entry_id=<?php echo $entry->getId(); ?>"><?php echo $entry->getTitle(); ?></a></h2>
										<p><?php echo $entry->getExcerpt(); ?></p>
									</div>
									<div class="meta">
										<time class="published"><?php echo $entry->getDate(); ?></time>
										<a href="#" class="author"><span class="name">><?php echo $entry->getAuthor(); ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>

								<!-- <a href="create.php" class="image featured"><img src="images/pic01.jpg" alt=""></a> -->

								

								<div style="display: inline-block; overflow: hidden; text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 2; 
												-webkit-box-orient: vertical;">
								<p>  <?php echo $entry->getContent(); ?> </p>
								</div> 
								<p></p>
								<footer>
									<ul class="actions">
										<li><a href="editor.php?entry_id=<?php echo $entry->getId(); ?>" class="button big">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<!--<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li> -->
									</ul>
								</footer>
							</article>
<?php } ?>
				
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">


						<!-- Mini Posts 
							<section>
								<div class="mini-posts">

									
										<article class="mini-post">
											<header>
												<h3><a href="#">Vitae sed condimentum</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
										</article>

 
								</div> 
							</section> -->

												
<?php 
            $query = 'SELECT * FROM entries ORDER BY entry_id DESC LIMIT 7;';
            require_once('classes/dbh.php');
            $dbh = new Dbh();
            $rows = $dbh->executeSelect($query);
            //print_r($rows);
            foreach ($rows as $row) {
	        $entry = new Entry();
	        $entry->setByRow($row);
?>
						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
											<h3><a href="editor.php?entry_id=<?php echo $entry->getId(); ?>"><?php echo $entry->getTitle(); ?></a></h3>
												<time class="published"><?php echo $entry->getDate(); ?></time>
												<a href="#" class="author"><span class="name">><?php echo $entry->getAuthor(); ?></span><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a> 
										</article>
									</li> 
								</ul>
							</section>

	<?php } ?>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>This where a note from the Author (Kevin Walls) will be placed</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<!--<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li> -->
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Design By: <a href="http://timmyglynnv3.github.io">TG Software Solutions</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
