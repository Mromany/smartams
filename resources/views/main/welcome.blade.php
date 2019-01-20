@include('part.head')
@include('part.navigation')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
    button {
        background-color: Transparent;
        background-repeat:no-repeat;
        border: none;
        cursor:pointer;
        overflow: hidden;
        width: 100%;
    }
</style>
<!-- [ sample-page ] start -->
<div class="row">
    @foreach($GAMS as $GAMSs)
    <div class="col-md-4 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5>{{$GAMSs->Title}}</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item close-card">
                                <a href="javascript:"><i class="feather icon-edit-2"></i>Edit</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-block" style="height: 450px;">
                <div id="world-low" style="height: 450px; overflow: hidden; text-align: left;">
                    <div style="position: relative;" class="amcharts-main-div">
                        <div id="video_box">
                            <div id="video_overlays">
                                <table id="cpanels" border="0" width="100%" style="height:400px">

                                </table>
                            </div>
                            <div>
                                <video class="card-block"  id="vd" style="width: 450px;height: 400px;" controls="" autoplay>
                                    <source src="{{asset('http://localhost/smartams/public/video').'/'.$GAMSs->Path}}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var vid = document.getElementById("vd");
        var i =1;
        vid.addEventListener("timeupdate", function ()
        {
        @foreach($GAMS_Events as $GAMS_Event)
        @if($GAMS_Event->VP == $GAMSs->Path)
            if (vid.currentTime > {{$GAMS_Event->VT}} && vid.currentTime < {{($GAMS_Event->VT)+1}})
            {
                while(i <  {{$GAMS_Event->Table_Size}})
                {
                    $('#cpanels').append('<tr>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '<td width="10%" id="'+(i++)+'"><button>'+'</button></td>' +
                        '</tr>');
                }
                @php
                    $valuesa = explode(',', $GAMS_Event->cordy);
                @endphp
                @foreach($valuesa as $etime)
                    $('#{{$etime}}').click(function() {
                        if (vid.currentTime > {{$GAMS_Event->VT}} && vid.currentTime < {{($GAMS_Event->VT)+1}})
                        {
                            movvide({{$GAMS_Event->Act}});
                            vid.play();
                        }
                    });
                @endforeach
                vid.pause();
            }
        @endif
        @endforeach
        });
    </script>
    @endforeach
</div>

<!-- [ sample-page ] end -->
@include('part.footer')
