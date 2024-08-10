<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-profile">
    <div class="user-image">
      <img src="pemanis/assets/images/atmin.png">
    </div>
    <div class="user-name">
        ADMIN
    </div>
    {{-- <div class="user-designation">
        Developer
    </div> --}}
  </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="icon-box menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard.layanan')}}">
        <i class="icon-box menu-icon"></i>
        <span class="menu-title">Layanan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard.berita')}}">
        <i class="icon-box menu-icon"></i>
        <span class="menu-title">Berita</span>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->