<link href="{{asset('dist/css/admin.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->

    <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
            <ul class="nav">
                <!-- Main menu -->
                <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                        General</a></li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Dashboard
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="#">View  Dashboard</a></li>

                    </ul>



                </li>
                <li class="#"><a href="#"><i class="glyphicon glyphicon-home"></i>
                        Administration</a></li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Manage User
                        <span class="caret pull-right"></span>
                    </a>
                    <ul>
                        <li><a href="{{asset('manage/users  ')}}">Mangage User</a></li>

                    </ul>
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Roles and Permission
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="#">Mangage Roles</a></li>

                    </ul>



                </li>

            </ul>
        </div>
    </div> <!-- ADMIN SIDE NAV-->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");
            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>