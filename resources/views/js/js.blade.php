@section('alljs')
<script src="{{asset('js/vendor-all.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/horizontal-menu.js')}}"></script>
<script src="{{asset('plugins/sweetalert/js/sweetalert.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
<script type="text/javascript">
    $("#vd").click(function () {
        if (this.paused)
            this.play();
        else
            this.pause();
    });
    function movvide(currentTimea)
    {
        var vid = document.getElementById("vd");
        vid.currentTime = currentTimea;
    }
</script>

@endsection