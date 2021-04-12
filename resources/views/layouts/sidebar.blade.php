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

            <li class="header">{{__('BLOOD MANAGMENT')}}</li>
            <br/>


            <!--  DISTRICT MENU
              ===================-->

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


            <!--  NEAREST MENU
           ===================-->
            
            <li class="treeview {{ (Route::currentRouteName() == 'nearest_view')||(Route::currentRouteName() ==  'nearest_add')? 'active': '' }} ">
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


            <!--  BLOOD MENU
           ===================-->
          
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
            <li class="header">{{__('HEALTH QUESTIONNAIRE')}}</li>

            <!--  DISEASES MENU
           ===================-->

            <li class="treeview {{ (Route::currentRouteName() == 'diseases_view')||(Route::currentRouteName() ==  'diseases_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Diseases')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'diseases_view')? 'active': '' }}"><a href="{{route("diseases_view")}}">
                            {{__('Diseases Name')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'diseases_add')? 'active': '' }}"><a href="{{route("diseases_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>

            <!--  SURGERY MENU
           ===================-->

            <li class="treeview {{ (Route::currentRouteName() == 'surgery_view')||(Route::currentRouteName() ==  'surgery_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Surgery / Transfusion')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'surgery_view')? 'active': '' }}"><a href="{{route("surgery_view")}}">
                            {{__('Surgery/Transfusion Name')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'surgery_add')? 'active': '' }}"><a href="{{route("surgery_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>

            <li class="header">{{__('HEADING LINE')}}</li>


            <!--  SLIDER MENU
           ===================-->
  
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


            <!--  GALLERY MENU
             ===================-->

            <li class="treeview {{ (Route::currentRouteName() == 'gallery_view')||(Route::currentRouteName() == 'gallery_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Gallery')}}</span>
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
