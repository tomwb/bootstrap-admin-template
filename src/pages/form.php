<?php include '../elements/head.php'; ?>
<?php include '../elements/header.php'; ?>
<?php include '../elements/menu.php'; ?>

<section class="p-3">
	<?php include '../elements/breadcrumb.php'; ?>

<div class="row">

	<div class="col-12">
    <div class="card mb-3">
			<div class="card-header">
			  Form
			</div>
			<div class="card-body">

				<form class="form-horizontal">
				  <div class="row">
				  	<div class="col-12">
				  		<div class="form-group">
						    <label class="form-label">Name</label>
						     <input type="text" class="form-control">
						  </div>
						</div>
				  	<div class="col-6">
						  <div class="form-group">
						    <label class="form-label">Email</label>
						    <input type="email" class="form-control">
						  </div>
				  	</div>
				  	<div class="col-6">
						  <div class="form-group">
						    <label class="form-label">Password</label>
						    <input type="password" class="form-control">
						  </div>
						</div>
						<div class="col-12">
						  <div class="form-group">
						    <label class="form-label">Your Full Address</label>
						     <input type="text" class="form-control">
						  </div>
						</div>
						<div class="col-12">
						  <div class="form-group">
						    <label class="form-label">Select</label>
								<select class="form-control">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						      <option>5</option>
							  </select>
						  </div>
						</div>
						<div class="col-12">
						  <div class="form-group">
						    <label class="form-label">Select multiple</label>
								<select multiple class="form-control">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						      <option>5</option>
							  </select>
						  </div>
						</div>
						<div class="col-12">
						  <div class="form-group form-success">
						    <label class="form-label">Success</label>
						    <input type="text" class="form-control" placeholder=".form-success">
						  </div>
						  <small class="form-help text-success">Success</small>
						</div>
						<div class="col-12">
						  <div class="form-group form-danger">
						    <label class="form-label">Error</label>
						    <input type="text" class="form-control" placeholder=".form-danger">
						  </div>
						  <small class="form-help text-danger">Fill the input</small>
						</div>
						<div class="col-12">
						  <div class="form-group">
						    <label class="form-label">Readonly</label>
						    <input type="text" class="form-control" placeholder="readonly" readonly>
						  </div>
						</div>
						<div class="col-12">
						  <div class="form-group">
						    <label class="form-label">Range</label>
						    <input type="range" class="form-control custom-range" min="5" max="100">
						  </div>
						</div>
						<div class="col-6">
						  <div class="form-group">
						    <label class="form-label">Radio Button</label>
						    <div>
							    <div class="form-check">
									  <input class="form-check-input" type="radio" value="option1" checked>
									  <label class="form-check-label">
									    Default radio
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" value="option2">
									  <label class="form-check-label">
									    Second default radio
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" value="option3" disabled>
									  <label class="form-check-label">
									    Disabled radio
									  </label>
									</div>
						    </div>
						  </div>
						</div>
						<div class="col-6">
						  <div class="form-group">
						    <label class="form-label">Checkbox</label>
						    <div>
							    <div class="form-check">
									  <input class="form-check-input" type="checkbox" value="option1" checked>
									  <label class="form-check-label">
									    Default checkbox
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="option2">
									  <label class="form-check-label">
									    Second default checkbox
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="option3" disabled>
									  <label class="form-check-label">
									    Disabled checkbox
									  </label>
									</div>
						    </div>
						  </div>
						</div>
						
				  </div>
				  <div class="text-center mb-2 mt-5">
				  	<button type="submit" class="btn btn-lg btn-primary">Send</button>
				  </div>
				</form>

			</div>
		</div>
	</div>

  <div class="col-12 col-md-6">
    <div class="card mb-3">
			<div class="card-header">
			  Size
			</div>
			<div class="card-body">
				<div class="form-group">
					<label class="form-label form-label-lg">Label .form-label-lg</label>
			  	<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
			  </div>
			  <div class="form-group">
					<label class="form-label">Label Default</label>
					<input class="form-control" type="text" placeholder="Default input">
			  </div>
			  <div class="form-group">
					<label class="form-label form-label-md">Label .form-label-md</label>
					<input class="form-control form-control-md" type="text" placeholder=".form-control-md">
				</div>
			</div>
	  </div>
	</div>

	<div class="col-12 col-md-6">
    <div class="card mb-3">
			<div class="card-header">
			  Media File
			</div>
			<div class="card-body">
				<form>
					<div>
						<div class="text-center mb-2">
					  	<img src="https://via.placeholder.com/150" class="img-thumbnail rounded">
					  </div>
					  <div class="custom-file">
						  <input type="file" class="custom-file-input" id="customFile">
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>

</section>

<?php include '../elements/footer.php'; ?>