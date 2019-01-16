@section('alljs')
<script src="{{asset('js/vendor-all.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/pcoded.min.js')}}"></script>
<script src="{{asset('js/horizontal-menu.js')}}"></script>
<script src="{{asset('js/menu-setting.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/sweetalert/js/sweetalert.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    var countc = 0;
    var count = 1;
    $("#plus").click(function()
    {
        $("#ST"+countc).clone().attr("id","ST"+count).attr("value","").insertAfter("#ST"+countc);
        $("#ST"+countc).val(document.getElementById('vda').currentTime);
        countc = count;
        count++;
    });
</script>
<script type="text/javascript">
    // Collapse menu
    (function() {
        if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
            return;
        }
        try {
            window.layoutHelpers.setCollapsed(
                localStorage.getItem('layoutCollapsed') === 'true',
                false
            );
        } catch (e) {}
    })();
    $(function() {
        // Initialize sidenav
        $('#layout-sidenav').each(function() {
            new SideNav(this, {
                orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
            });
        });

        // Initialize sidenav togglers
        $('body').on('click', '.layout-sidenav-toggle', function(e) {
            e.preventDefault();
            window.layoutHelpers.toggleCollapsed();
            if (!window.layoutHelpers.isSmallScreen()) {
                try {
                    localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));
                } catch (e) {}
            }
        });
    });
    $(document).ready(function() {
        $("#pcoded").pcodedmenu({
            themelayout: 'horizontal',
            MenuTrigger: 'hover',
            SubMenuTrigger: 'hover',
        });
    });

    $("#vd").hover(function() {
        $(this).prop("controls", false);
    });

    $("#vd").click(function() {
        if( this.paused)
            this.play();
        else
            this.pause();
    });


</script>

@endsection