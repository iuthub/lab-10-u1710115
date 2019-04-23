@if(!Auth::check())
		<li><a href="{{ url('/login') }}">Login</a></li>
		<li><a href="{{ url('/register') }}">Register</a></li>
@else
		<li><a href="{{ route('admin.index') }}">Posts</a></li>	
		<li>
			<a href="{{ route('blog.index') }}" onclick="event@preventDefault();
										document.getElementByid('logout-form').submit();">Logout</a>
	
			<form action="{{ url('/logout') }}" id="logout-form" method="post" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
@endif
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route('blog.index') }}" class="navbar-brand">Laravel Guide</a>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('other.about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>