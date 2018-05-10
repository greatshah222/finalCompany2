@include('_includes.navbar.head')
<div class="row">
    @include('_includes.navbar.side')
    <div class="col-md-10 display-area">
        <div class="row text-center">
            <div class="col-md-10 col-md-offset-1">
                <div class="content-box-large">

                    @if(session()->has('notif'))
                        <div class="row">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Notificaton</strong> {{session()->get('notif')}}
                            </div>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div><!--/Display area after sidenav-->
</div>

</div>