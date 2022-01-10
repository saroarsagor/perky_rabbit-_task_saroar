<style type="text/css">
@media only screen and  (min-width:1000px) {
.baricon i{display: none}
}
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light hdrstyle" style="background-color: #dedede">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link baricon" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
  </ul>


   <ul class="navbar-nav ml-auto">
    <li class="dropdown user user-menu" style="color: black">
        <a href="/locale/bn"><span class="hidden-xs" style="color: black;font-size: 22px">Bangla</span></a> | 
        <a href="/locale/en"><span class="hidden-xs" style="color: black;font-size: 22px">English</span></a>
    </li>
  </ul>

  
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="dropdown user user-menu" style="color: black">
      <a href="https://adminlte.io/themes/AdminLTE/index.html#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{asset('backend/user/user1.jpg')}}"  class ="user-image" alt="user image" style="height: 45px;width: 45px;margin-top: 2px;margin-bottom: 3px;">
        <span class="hidden-xs" style="color: black"> {{ Auth::user()->name }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a  href="{{route('profile')}}" class="dropdown-item"> <i class="fas fa-user mr-2"></i>Profile</a>
        
        <div class="dropdown-divider"></div>
        <a href="" class="dropdown-item"
          
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" >
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </a>
        <div class="dropdown-divider"></div>
      </div>
    </li>
  </ul>
</nav>