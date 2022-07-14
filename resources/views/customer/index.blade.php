@extends('layout.main')

@section('content')

<div class="mb-5">
	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Customer page</span>
</div>

@if (session('success'))
    <p class="alert mt-4 alert-success alert-dismissible fade show" role="alert">{{ session('success') }}</p>
@endif

<a href="/customer/create" class="btn btn-primary px-3 mb-2">Create</a>

<div class="row">
    <div class="col-10">
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
</thead>
</tbody>
@foreach ($customers as $customer)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $customer->nameCustomer }}</td>
    <td>
        <a href="/customer/edit/{{ $customer->id }}" class="btn btn-warning">Edit</a>
        <a href="/customer/destroy/{{ $customer->id }}" class="btn btn-danger" onclick="return confirm('sure?')">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection