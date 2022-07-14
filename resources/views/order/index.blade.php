@extends('layout.main')

@section('content')
<div class="mb-5">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Order Page</span>
</div>

@if (session()->has('success'))
	<div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
		{{ session('success') }}
	</div>
	@endif

<a href="/order/create" class="btn btn-primary px-3 mb-2">Create</a>

<div class="row">
	<div class="col-10">
		<table class="table table-striped text-center">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Code</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($order as $o)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $o->customer->nameCustomer }}</td>
					<td>{{ $o->code }}</td>
					<td>
						<a href="/order/show/{{ $o->id }}" class="btn btn-info">Show</a>
						<a href="/order/edit/{{ $o->id }}" class="btn btn-warning">Edit</a>
						<a href="/order/destroy/{{ $o->id }}" class="btn btn-danger"
						onclick="return confirm('Sure?')">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection