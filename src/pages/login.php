<?php include '../elements/head.php'; ?>
<form class="login" action="dashboard.php">

	<img src="/assets/images/logo-placeholder.png">

	<div class="card">
		<div class="card-body">
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

			<div class="form-group">
				<label for="email" class="sr-only">Email address</label>
				<input type="email" id="email" class="form-control form-control-lg" placeholder="Email address" required autofocus>
			</div>
			<div class="form-group">
				<label for="password" class="sr-only">Password</label>
				<input type="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
			</div>
			
			<div class="form-group form-check">
				<input type="checkbox" value="remember-me" class="form-check-input" id="checkboxRemember">
				<label class="form-check-label" for="checkboxRemember">Remember me</label>
			</div>
			<button class="btn btn-lg btn-success btn-block" type="submit">
				Sign in
			</button>
		</div>
	</div>
</form>
<?php include '../elements/footer.php'; ?>