    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar"> 
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="image text-center"><img src="{{asset("img/img1.jpg")}}" class="img-circle" alt="User Image"> </div>
          <div class="info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Gestion Hotel</li>
          <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Parking</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="/reservation_parking">Réservation</a></li>
              <li><a href="/lister_parking">Lister</a></li>
              <li><a href="apps-contacts.html">Parametrage</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Piscine</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="/reservation_piscine">Réservation</a></li>
              <li><a href="/lister_piscine">Lister</a></li>

            </ul>
          </li>
          <li> <a href="/plainte"> <i class="fa fa-bullseye"></i> <span>Plaintes</span> <span class="pull-right-container"></span> </a>
          </li>
        </ul>
      </div>
      <!-- /.sidebar --> 