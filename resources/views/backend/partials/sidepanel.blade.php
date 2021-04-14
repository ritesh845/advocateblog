<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

@role('super_admin')
    <li class="nav-item">
        <a href="" class="nav-link">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('category.index')}}" class="nav-link">
            <i class="fas fa-users"></i>
            <span>Category</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDomain"
            aria-expanded="true" aria-controls="collapseDomain">
            <i class="fas fa-fw fa-cog"></i>
            <span>Domain</span>
        </a>
        <div id="collapseDomain" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('domain.index')}}">Domain</a>
                <a class="collapse-item" href="{{route('domain.assgine')}}">Add Domain</a>
                
            </div>
        </div>
    </li>

    
@endrole

@permission('add_post')
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-cog"></i>
        <span>Posts</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('post.index')}}">Post</a>
            <a class="collapse-item" href="{{route('post.create')}}">Add Post</a>
            
        </div>
    </div>
</li>
@endpermission


@role('user')
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Profile</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('profile.index')}}">Profile</a>
            <a class="collapse-item" href="{{route('profile.edit')}}">Edit Profile</a>
            <a class="collapse-item" href="{{route('specialization')}}">Specialization</a>
             <a class="collapse-item" href="{{route('practicing_court')}}">Practicing Court</a>
            <a class="collapse-item" href="{{route('qualification')}}">Qualification</a>
        </div>
    </div>
</li>
@endrole
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

