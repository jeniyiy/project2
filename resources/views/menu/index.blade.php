@extends('layout.main')

@section('content')

<div class="mb-5">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Menu Page</span>
</div>

	@if (session()->has('success'))
	<div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
		{{ session('success') }}
	</div>
	@endif

	<a href="/menu/create" class="btn btn-primary px-3 mb-2">Create</a>

	<div class="row">
		<div class="col-10">
			<table class="table table-responsive table-hover table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Menu</th>
						<th>Description</th>
						<th>Foto</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($menus as $menu)

					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $menu->nameMenu }}</td>
						<td>{{ $menu->descMenu }}</td>
						{{-- <td><img width="200px" height="150px" src="{{ ($menu->photoMenu) ? asset("storage/" . $menu->photoMenu) : "" }}" alt="photo menu" class="img-thumbnail img-fluid"></td> --}}
						<td>
							@if(!$menu->photoMenu)
							<img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset("storage/images/defaultmenu.jpg") }}">
							@else
							<img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset("storage/". $menu->photoMenu ) }}">
							@endif
						</td>
						<td>{{ $menu->price }}</td>
						<td>
							<a href="/menu/{{ $menu->id }}/edit" class="btn me-1 text-white btn-sm btn-warning">Edit
								<span data-feather="edit"></span>
							</a>
							<form action="/menu/{{ $menu->id }}" method="POST" class="d-inline">
								@method('delete')
								@csrf
								<button type="submit" onclick="return confirm('Sure?')" class="btn btn-danger btn-sm">Hapus
									<span data-feather="trash-2"></span>
								</button>
							</form>
						</td>
					</tr>

					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	@endsection