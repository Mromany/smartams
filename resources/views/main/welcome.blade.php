@include('part.head')
@include('part.navigation')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
<style>
   



        @import "compass/css3";
    
        @import url(https://fonts.googleapis.com/css?family=Oswald:300);
        * { box-sizing: border-box; }
        html { width: 100%; height: 100%; overflow: hidden; background: #1f323e; background: radial-gradient(80% 0%, ellipse cover, rgba(66,97,104,1) 0%,rgba(49,67,74,.1) 100%), radial-gradient(20% 100%, ellipse cover, rgba(8,13,17,1) 0%,rgba(36,58,67,1) 100%); }
        body { 
            
            font-family: 'Oswald', sans-serif;
        
        }
    
        video { border-radius: 6px; }
    
        /* video container */
        .videoContainer{
            width:380px;
            height:163px;
            position:relative;
            overflow:hidden;
            background:#000;
            color:#ccc;
            border-radius: 6px;
            border: 1px solid rgba(0,0,0,0.8);
            box-shadow: 0 0 5px rgba(0,0,0,0.5);
            margin: 50px auto 0;
        }
        .videoContainer:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-shadow: inset 0 1px 2px rgba(255,255,255,0.3);
            z-index: 6;
            border-radius: 6px;
            pointer-events: none;
        }
    
        /* video caption css */
        .caption{
            display:none;
            position:absolute;
            top:0;
            left:0;
            width:100%;
            padding: 5px 10px;
            color:#ddd;
            font-size:14px;
            font-weight:300;
            text-align: center;
            background: rgba(0,0,0,0.4);
            text-transform: uppercase;
            border-radius: 6px 6px 0 0;
            -webkit-backface-visibility: hidden;
        -moz-backface-visibility:    hidden;
        -ms-backface-visibility:     hidden;
        }
    
        /*** VIDEO CONTROLS CSS ***/
        /* control holder */
        .control{
            color:#ccc;
            position:absolute;
            bottom:10px;
            left:10px;
            width:360px;
            z-index:5;
            display:none;
        }
        /* control bottom part */
        .btmControl{
            clear:both;
        }
        .control .btnPlay {
            margin-right: 0;
            float:left;
            width:34px;
            height:30px;
            padding:5px;
            background: rgba(0,0,0,0.5);
            cursor:pointer;
            border-radius: 6px 0 0 6px;
            border: 1px solid rgba(0,0,0,0.7);
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
        }
        .control .icon-play{
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat -11px 0;
            width: 6px;
            height: 9px;
            display: block;
            margin: 4px 0 0 8px;
        }
        .control .icon-pause{
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat -34px -1px;
            width: 8px;
            height: 9px;
            display: block;
            margin: 4px 0 0 8px;
        }
        .control .btnFS{
            width: 30px;
            height: 30px;
            border-radius: 0 6px 6px 0;
            float:left;
            background: rgba(0,0,0,0.5);
            border: 1px solid rgba(0,0,0,0.7);
            border-left: none;
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
    
        }
        .control .icon-fullscreen {  
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat 0 0;
            width: 10px;
            height: 10px;
            display: block;
            margin: 8px 0 0 9px;
        }
    
        /* PROGRESS BAR CSS */
        /* Progress bar */
        .progress-bar {
            height: 30px;
            padding: 10px;
            background: rgba(0,0,0,0.6);
            border: 1px solid rgba(0,0,0,0.7);
            border-left: none;
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
            float:left;
    
        }
        .progress {
            width:240px;
            height:7px;
            position:relative;
            cursor:pointer;
            background: rgba(0,0,0,0.4); /* fallback */
            box-shadow: 0 1px 0 rgba(255,255,255,0.1), inset 0 1px 1px rgba(0,0,0,1);
            border-radius:10px;
        }
        .progress span {
            height:100%;
            position:absolute;
            top:0;
            left:0;
            display:block;
            border-radius:10px;
        }
        .timeBar{
            z-index:10;
            width:0;
            background: -webkit-linear-gradient(top, rgba(107,204,226,1) 0%,rgba(29,163,208,1) 100%);
            box-shadow: 0 0 7px rgba(107,204,226,.5);
        }
        .bufferBar{
            z-index:5;
            width:0;
            background: rgba(255,255,255,0.2);
        }
    
        /* VOLUME BAR CSS */
        /* volume bar */
        .volume{
            position:relative;
            cursor:pointer;
            width:70px;
            height:10px;
            float:right;
            margin-top:10px;
            margin-right:10px;
        }
        .timeBar{
            width: 65px;
            padding: 0.2rem;
            height: 30px;
            border-radius: 0 6px 6px 0;
            float: left;
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(0, 0, 0, 0.7);
            border-left: none;
            box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.5);
        }
        .control .sound{
            padding: 0.2rem;
        }
        .icon-play:before {
            content: "";
        }
        .icon-pause:before {
            content: "";
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
                                {{-- <video class="card-block"  id="vd" style="width: 450px;height: 400px;" autoplay>
                                    <source src="{{asset('http://localhost/smartams/public/video').'/'.$GAMSs->Path}}" type="video/mp4">
                                </video> --}}
                                <section id="wrapper">
                                    <div class="videoContainer">
                                        
                                    <video id="myVideo" controls preload="auto" poster="https://s.cdpn.io/6035/vp_poster.jpg" width="380" >
                                        <source src="http://simplypx.com/images/Prometheus.mp4" type="video/mp4" />
                                            <p>Your browser does not support the video tag.</p>
                                        </video>
                                        <div class="control">
                                            <div class="btmControl">
                                                <div class="btnPlay btn" title="Play/Pause video"><span class="icon-play"></span></div>
                                                <div class="progress-bar">
                                                    <div class="progress">
                                                        <span class="bufferBar"></span>
                                                        <span class="timeBar" style="width: 37.5%;
                                                        background: red;"></span>
                                                    </div>
                                                </div>
                                                <div class="timeBar">12:12:22</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </section>
                               {{--  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
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
    </script> --}}
    @endforeach
</div>
<script>
        $(document).ready(function(){
            //INITIALIZE
            var video = $('#myVideo');
            //remove default control when JS loaded
            video[0].removeAttribute("controls");
            $('.control').fadeIn(500);
            $('.caption').fadeIn(500);
            //CONTROLS EVENTS
            //video screen and play button clicked
            video.on('click', function() { playpause(); } );
            $('.btnPlay').on('click', function() { playpause(); } );
            var playpause = function() {
                if(video[0].paused || video[0].ended) {
                    $('.btnPlay').addClass('paused');
                    $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
                    video[0].play();
                }
                else {
                    $('.btnPlay').removeClass('paused');
                    $('.btnPlay').find('.icon-pause').removeClass('icon-pause').addClass('icon-play');
                    video[0].pause();
                }
            };
            
        });
    </script>
<!-- [ sample-page ] end -->
@include('part.footer')
