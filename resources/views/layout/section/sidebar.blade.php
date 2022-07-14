<div class="d-flex flex-column p-4 bg-light" style="width: 280px; height: 100vh;">
	<a href="/" class="mb-0 text-dark text-decoration-none">
	</a>
	<span class="fs-4">WARUNG BAKSO JJ</span>
	<hr>
	<strong class="ms-3">{{ auth()->user()->name }}</strong>
	<hr>
	<ul class="nav nav-pills flex-column mb-auto">
		<li>
			<a href="/dashboard/" class="nav-link {{ Request::is('dashboard/*') ? 'active' : 'text-dark' }}">Dashboard</a>
		</li>
		<li>
			<a href="/customer/index" class="nav-link {{ Request::is('customer/*') ? 'active' : 'text-dark' }}">Customers</a>
		</li>
		@if (auth()->user()->role == 'admin')
		<li>
			<a href="/menu/" class="nav-link {{ Request::is('menu/*') ? 'active' : 'text-dark' }}">Menu</a>
		</li>
		@endif
		<li>
			<a href="/order/index" class="nav-link {{ Request::is('order/*') ? 'active' : 'text-dark' }}">Orders</a>
		</li>
	</ul>
	<a href="{{ route('signout') }}" class="nav-link text-dark">Logout</a>
	<hr>
	<small>&copy; {{ date('Y') }}</small>
</div>

<style type="text/css">
  body{
  background-color: #ccf5f6;
}
</style>