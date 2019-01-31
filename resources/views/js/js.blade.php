@section('alljs')
<script src="{{asset('js/vendor-all.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/horizontal-menu.js')}}"></script>
<script src="{{asset('plugins/sweetalert/js/sweetalert.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $("#vd").prop("controls", false);
    var countc = 0;
    var count = 1;
    $("#plus").click(function () {
        $("#ST" + countc).clone().attr("id", "ST" + count).attr("value", "").insertAfter("#ST" + countc);
        $("#ST" + countc).val(document.getElementById('vd').currentTime);
        countc = count;
        count++;
    });
</script>
<script>
    $(function () {
        $("#draggable1").draggable();
        $("#draggable2").draggable();
        $("#draggable3").draggable();

        $("#droppable1").droppable({//plant
            drop: function (event, ui)
            {
                if(ui.draggable.attr('id') == 'draggable2')
                {
                    $(this).find("p").html('Yes');
                }
                else {
                    $(this).find("p").html('NO');
                }
            }
        });
        $("#droppable2").droppable({//plastic
            drop: function (event, ui)
            {
                if(ui.draggable.attr('id') == 'draggable1')
                {
                    $(this).find("p").html('Yes');
                }
                else {
                    $(this).find("p").html('NO');
                }
            }
        });
        $("#droppable3").droppable({//metal
            drop: function (event, ui)
            {
                if(ui.draggable.attr('id') == 'draggable3')
                {
                    $(this).find("p").html('Yes');
                }
                else {
                    $(this).find("p").html('NO');
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $("#vd").click(function () {
        if (this.paused)
            this.play();
        else
            this.pause();
    });

    function movvide(currentTimea) {
        var vid = document.getElementById("vd");
        vid.currentTime = currentTimea;
    }
</script>

@endsection