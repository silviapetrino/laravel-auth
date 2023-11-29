{{-- link admin  --}}

<aside class="bg-dark">
    {{-- contiene una nav della dashboard  --}}

    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.home')}}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.projects.index')}}">Project list</a>
            </li>
        </ul>
    </nav>
</aside>
