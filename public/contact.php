<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'php/needed-files.html'; ?>

		<title>Contact - McSmash Designs</title>

	</head>
	<body>
		<?php include 'php/header.html'; ?>
		<?php include 'php/nav-bar.html'; ?>
		<div class="container">
			<div class="row">
				<div class="box">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">Contact<strong>Ashley Marie Callahan</strong></h2>
						<hr>
					</div>
					<div class="col-md-8" id="map"></div>
					<div class="col-md-4">
						<p>Phone:
							<strong>(210) 802-7397</strong>
						</p>
						<p>Email:
							<strong><a href="mailto:mcsmashdesigns@gmail.com">mcsmashdesigns@gmail.com</a></strong>
						</p>
						<p>Address:
							<strong>600 Navarro St #350  
								<br>San Antonio, TX 78205</strong>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="row">
				<div class="box">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">Contact<strong> form</strong></h2>
						<hr>
						<p>If you have any questions or comments, please let me know! </p>
						<form role="form">
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Email Address</label>
									<input type="email" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Phone Number</label>
									<input type="tel" class="form-control">
								</div>
								<div class="clearfix"></div>
								<div class="form-group col-lg-12">
									<label>Message</label>
									<textarea class="form-control" rows="6"></textarea>
								</div>
								<div class="form-group col-lg-12">
									<input type="hidden" name="save" value="contact">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
		<?php include 'php/footer.html'; ?>
	</body>
</html>
