<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Master Entry</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('customer.index') }}">Costomers</a></li>
            <li><a class="nav-link" href="{{ route('service.index') }}">Services</a></li>
            <li><a class="nav-link" href="{{ route('transection.index') }}">Transaction</a></li>
          </ul>
        </li>


      </ul>
    </aside>
  </div>
