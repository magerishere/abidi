<div class="col-md-3 left_col hidden-print">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="../build/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>خوش آمدید,</span>
                <h2>مرتضی کریمی</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>عمومی</h3>
                <ul class="nav side-menu">
                    @foreach($menus as $menu)
                        <li><a><i class="{{$menu['icon_class']}}"></i> {{$menu['title']}} <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @foreach($menu['children'] as $item)
                                    <li><a href="{{$item['href']}}">{{$item['title']}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <x-back.form action="{{route('admin.logout')}}" isFlat class="d-block">
                <a data-toggle="tooltip" data-placement="top" data-form-submitter title="خروج" href="#">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </x-back.form>

        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
