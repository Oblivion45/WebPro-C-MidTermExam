<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-le">
        <img class="img-profile rounded-circle " src="{{ asset('img/user.png') }}" style="margin-right : 60px">
        <span class="d-none d-lg-inline text-white-600 medium">
          {{ Auth::user()->name }}
        </span>
      </a>
      <!-- Dropdown - User Information -->
      <div   style="margin-right = 30px"class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{ route('pengaturan') }}">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Setting
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
      <span>Dashboard</span></a>
  </li>
  <!-- Nav Item - Data Master Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('rute.index') }}">
      <span>Route</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('transportasi.index') }}">
      <span>Transportation</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('category.index') }}">
      <span>Category</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('user.index') }}">
      <span>User</span></a>
  </li>

  <!-- Nav Item - Verifikasi -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('petugas') }}">
      <span>Verification</span></a>
  </li>
  <!-- Nav Item - Transaksi -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('transaksi') }}">
      <span>Transaction</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
</ul>