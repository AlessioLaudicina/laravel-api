
<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link" aria-current="page">
                Dashboard
            </a>
        </li>

        <li class="nav-item">
        <a href="{{route('admin.posts.create')}}" class="nav-link">Crea nuovo progetto</a>
        </li>


        <li class="nav-item">
            <a href="{{route('admin.posts.index')}}" class="nav-link">
                I tuoi progetti
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.technologies.index')}}" class="nav-link">
                Tecnologie
            </a>
        </li>

    </ul>
</div>
