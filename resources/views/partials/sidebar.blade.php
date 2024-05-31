<nav id="sidebar">
    <a href="/" class="nav-link text-white">
        <h2>BoolPress</h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" href="{{route('admin.posts.index')}}">Posts</a>
        </li>
    </ul>
</nav>
