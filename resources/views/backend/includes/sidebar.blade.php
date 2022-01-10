


<style>
.slimScrollBar{
width: 10px!important;
height: 100%;
position: absolute;
top: 0px;
display: block!important;
border-radius: 7px;
background: rgb(51, 51, 51);
opacity: 0.2;
z-index: 90;
right: 1px;

}
</style>
<style type="text/css">
.bgclr{background-color: #41a75a!important;color: white}
.logo-mini {
display: none;
}
.logo-lg{
display: block;
}
@media (min-width: 992px){
/* .sidebar-mini.sidebar-collapse.layout-fixed .brand-link{
width: 300px;
}*/
.sidebar-mini.sidebar-collapse.layout-fixed .brand-link>.logo-lg {
display: none;
}
.sidebar-mini.sidebar-collapse.layout-fixed .brand-link>.logo-mini {
display: block;
}
}
</style>

<style type="text/css">
  /*.sidemenuFullstyle{background-color: blue;color: red}
  .menuClrp{color: red!important}
  #menuClri{color: yellow!important}

  .bgclr {background-color: cyan!important}
  .SubMenup{color: blue!important}
  .SubMenuI{color: blue!important}*/

  /* .nav-sidebar li a:hover{
    background-color:yellow!important;
    opacity: .90!important;
    color: white!important;
  }*/

  [class*=sidebar-dark] .brand-link {
     border-bottom: 1px solid #ffffff!important; */
    /* color: rgba(255,255,255,.8); */
}
  
  [class*=sidebar-dark-] {
    background-color:#dedede!important;
  }
  [class*=sidebar-dark-] .sidebar a {
    color: black!important;
  }

  [class*=sidebar-dark-] .nav-sidebar>.nav-item.menu-open>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus {
    background-color: #ddd!important;

   color: black!important;
    }



    .bgclr {background-color: #f4f6f9!important}
    [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link{color: blue!important}

    [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link:hover {
    background-color: #c8d5ea!important;
    color: black!important;
  }

  .logo{height: 67px;z-index: 100}
  

  [class*=sidebar-dark-] .sidebar a {
    font-size: 18px!important;
  }

  .nav-sidebar .nav-item>.nav-link {
     /*margin-bottom: -7px!important;*/
  }

  .logo-mini img{width: 95%;}
  .logo-lg img{width: 95%;}

</style>


<aside class="main-sidebar sidebar-dark-primary elevation-4 sidemenuFullstyle" style="margin-bottom: 40px">
  <!-- Brand Logo -->
  <a href="#" class="brand-link text-center logo" style="">
    <div class="logo-mini">
      <img src="" alt="">
      <!-- <p>Edu</p> -->
    </div>
    <div class="logo-lg">
      <img src="" alt="">
      <!-- <p>Eduleam</p> -->
    </div>
  </a>
  <br>
  <!-- Sidebar -->
  <div class="sidebar" style="margin-top: -20px;">
    <!-- Sidebar Menu -->
    <nav class="mt-2" style="margin-bottom: 40px">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="">
       
         <li class="nav-item has-treeview">
          <a href="{{url('dashboard')}}" class="nav-link">
            <!-- <p>Dashboard</p> -->
            <p>{{__('home.Dashboard')}}</p>
          </a>
        </li>



         <li class="nav-item has-treeview">
          <a href="{{route('category.index')}}" class="nav-link">
           <!--  <p>Category</p> -->
            <p>{{__('home.Category')}}</p>
          </a>
        </li>

      
        <li class="nav-item has-treeview">
          <a href="{{route('brand.index')}}" class="nav-link">
            <!-- <p>Brand</p> -->
            <p>{{__('home.Brand')}}</p>
          </a>
         
        </li>

        <li class="nav-item has-treeview">
          <a href="{{route('product-admin.index')}}" class="nav-link">
           <!--  <p>Product</p> -->
            <p>{{__('home.Product')}}</p>
          </a>
         
        </li>


      @can('user-permission-access-controll')
      
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-angle-left right"></i>
             <!--  <p>
                Access Control
                <i class=""></i>
              </p> -->
               <p>{{__('home.Access Control')}}</p>
            </a>
            <ul class="nav nav-treeview bgclr">
              @can('role-list')
              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link">
                  <i class=""></i>
                  <!-- <p>Manage Role</p> -->
                  <p>{{__('home.Manage Role')}}</p>
                </a>
              </li>
               @endcan
              @can('user-list')
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <i class=""></i>
                  <!-- <p>Manage User</p> -->
                  <p>{{__('home.Manage User')}}</p>
                </a>
              </li>
               @endcan
              <!-- <li class="nav-item">
                <a href="" class="nav-link">
                  <i class=""></i>
                  <p>Assign Permission</p>
                </a>
              </li> -->
            </ul>
          </li>
         @endcan
         

      </ul>
    </nav>
  </div>
</aside>
<!--   <li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-th"></i>
    <p>
      Menu
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview bgclr">
    <li class="nav-item active">
      <a href="{{URL::to('backend-sidebar-menu')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Backend Menu</p>
      </a>
    </li>
  </ul>
</li> -->