<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">BLOOD MANAGMENT</li>
            <br/>


            <li class="treeview {{ (Route::currentRouteName() == 'district_view')||(Route::currentRouteName() == 'district_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Manage District')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'district_view')? 'active': '' }}"><a href="{{route("district_view")}}">
                            {{__('All District')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'district_add')? 'active': '' }}"><a href="{{route("district_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>
            
            <li class="treeview {{ (Route::currentRouteName() == 'nearest_view')||(Route::currentRouteName() == 'nearest_view')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Manage Nearest')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'nearest_view')? 'active': '' }}"><a href="{{route("nearest_view")}}">
                            {{__('All Nearest')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'nearest_add')? 'active': '' }}"><a href="{{route("nearest_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>
          
            <li class="treeview {{ (Route::currentRouteName() == 'blood_group_view')||(Route::currentRouteName() == 'blood_group_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Manage Blood Group')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'blood_group_view')? 'active': '' }}"><a href="{{route("blood_group_view")}}">
                            {{__('All Blood Group')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'blood_group_add')? 'active': '' }}"><a href="{{route("blood_group_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>
            <li class="header">BLOOD MANAGMENT</li>
  
            <li class="treeview {{ (Route::currentRouteName() == 'sliders_view')||(Route::currentRouteName() == 'slider_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Slider')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'sliders_view')? 'active': '' }}"><a href="{{route("sliders_view")}}">
                            {{__('All Slider')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'slider_add')? 'active': '' }}"><a href="{{route("slider_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Route::currentRouteName() == 'gallery_view')||(Route::currentRouteName() == 'gallery_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Slider')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'gallery_view')? 'active': '' }}"><a href="{{route("gallery_view")}}">
                            {{__('All Slider')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'gallery_add')? 'active': '' }}"><a href="{{route("gallery_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
