    <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{{ route('articles.index') }}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>

