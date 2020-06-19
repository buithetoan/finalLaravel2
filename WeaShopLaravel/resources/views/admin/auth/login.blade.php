@extends('admin.layout.app')
@section('title')
	Add new brand
@endsection
@section('content')
	<div id="login_page">
		<div class="container">
			<div class="login_inner">
				<!-- Form login -->
				<div class="col-xs-12 col-sm-6">
					<div class="login_form">
						<h3>WeaShop</h3>
						<form>
							<div class="form-group">
								<input type="email" class="form-control form_custom" placeholder="Enter email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control form_custom" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary submit_button">Submit</button>
						</form>
					</div>
				</div>
				<!-- Image -->
				<div class="col-xs-12 col-sm-6">
					<div class="gallery">
						<img src="{{ asset('images/sunflower.png') }}" alt="#">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

