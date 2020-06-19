@extends('admin.layout.main')
@section('title')
	Brands
@endsection
@section('content')
	<div class="content_yield">
		<h3 class="page_title">Brands</h3>
		<a href="{{ route('brand.create') }}" class="btn btn-primary add_new_button"><i class="fas fa-plus"></i> Add new</a>
		<table class="table table_xk">
			<thead class="thead_green">
				<tr>
					<th class="text-center">Id</th>
					<th class="text-center">Name</th>
					<th class="text-center">Logo</th>
					<th class="text-center">Address</th>
					<th class="text-center">PhoneNo</th>
					<th class="text-center">Slug</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<!-- Loop -->
				<tr>
					<td class="text-center">1</td>
					<td class="text-center">Dell</td>
					<td class="text-center"><img src="images/dell-logo.jpg" width="50" height="50" alt="logo"></td>
					<td class="text-center">36 Ham Nghi, Da Nang</td>
					<td class="text-center">0236 3653 747</td>
					<td class="text-center">Slug 1</td>
					<td class="text-center action_icon">
						<a href="#"><i class="fas fa-info-circle info"></i></a>
						<a href="#"><i class="far fa-edit edit"></i></a>
						<a href="#"><i class="fa fa-trash delete"></i></a>
					</td>
				</tr>
				<!-- End loop -->
				<!-- Loop -->
				<tr>
					<td class="text-center">2</td>
					<td class="text-center">ASUS</td>
					<td class="text-center"><img src="images/asus-logo.jpg" width="50" height="50" alt="logo"></td>
					<td class="text-center">10 Phan Dang Luu, Da Nang</td>
					<td class="text-center">090 505 53 83</td>
					<td class="text-center">Slug 2</td>
					<td class="text-center action_icon">
						<a href="#"><i class="fas fa-info-circle info"></i></a>
						<a href="#"><i class="far fa-edit edit"></i></a>
						<a href="#"><i class="fa fa-trash delete"></i></a>
					</td>
				</tr>
				<!-- End loop -->
				<!-- Loop -->
				<tr>
					<td class="text-center">3</td>
					<td class="text-center">Lenovo</td>
					<td class="text-center"><img src="images/Lenovo-Logo.jpg" width="50" height="50" alt="logo"></td>
					<td class="text-center">30 Duy Tan, Da Nang</td>
					<td class="text-center">0236 3688 266</td>
					<td class="text-center">Slug 3</td>
					<td class="text-center action_icon">
						<a href="#"><i class="fas fa-info-circle info"></i></a>
						<a href="#"><i class="far fa-edit edit"></i></a>
						<a href="#"><i class="fa fa-trash delete"></i></a>
					</td>
				</tr>
				<!-- End loop -->
			</tbody>
		</table>
	</div>
@endsection