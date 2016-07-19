<!DOCTYPE html>
<html>
	<head>
		<?php include 'php/needed-files.php'; ?>
		<title>Title</title>
	</head>
	<body>
		<?php include 'php/header.php'; ?>
		<?php include 'php/nav-bar.php'; ?>
		<div class="container">
			<div class="row">
				<div class="box">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">McSmash Designs
							<strong>blog</strong>
						</h2>
						<hr>
					</div>
					<div class="col-lg-12 text-center">
						
						<h2 class="blog-center">Title
							<br>
							<small>Date</small>
						</h2><br>
						<?php include 'php/share-buttons.php'; ?>
						<br><br>

						<img class="img-responsive img-border img-center" src="img/maximizing-technology.jpg" alt="How I own technology instead of letting it own me.">

						<br><br>

						<p class="blog-center"><span class="blog">Opening question/topic</span> </p>

						<!-- Blog text - classes in css are: blog(font, size), blog-left and blog-center (alignment), blog-big and blog-small (font size override) -->

						<p></p>
						
						<?php include 'php/signature.php'; ?>
			   
			   			<a href="blog.html" class="btn btn-default btn-lg">Back</a>
					</div>	
				</div>
			</div>
		</div>	
		<?php include 'php/footer.php'; ?>	
	</body>
</html>