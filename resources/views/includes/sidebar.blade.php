<!-- SIDE BAR -->
<div class="sidebar" data-color="purple" data-background-color="black" data-image="/img/desk.jpg">
    <div class="logo"><a href="javascript:void(0)" class="simple-text logo-normal">
        <i class="material-icons">desktop_windows</i>
        Bookable Office
      </a></div>
    <div class="sidebar-wrapper">

      <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="/home">
            <i class="material-icons">home</i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/users">
                <i class="material-icons">group</i>
                <p>Office Management</p>
            </a>
        </li>


        @if (auth()->check() && auth()->user()->loggedInUserHasRoleByIdentifier(User::SUPER_ADMIN))
            <div class="nav-divider">
            <h5 class="nav-divider-heading">  ADMIN</h5>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="/users">
                <i class="material-icons">apartment</i>
                <p>Users</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/roles">
                <i class="material-icons">recent_actors</i>
                <p>Roles</p>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/permissions">
                <i class="material-icons">flaky</i>
                <p>Permissions</p>
                </a>
          </li> --}}
        @endif
      </ul>


    </div>
  </div>
