@include('part.head')
@include('part.navigation')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



<style>
        button {
            background-color: Transparent;
            background-repeat:no-repeat;
            border: none;
            cursor:pointer;
            overflow: hidden;
            width: 100%;
        }
        .video {
        width: 100%;
        border: 1px solid black;
    }
    .wrapper{
        display:table;
        width:auto;
        position:relative;
        width:50%;
    }
    .playpause {
        background-image:url(http://png-4.findicons.com/files/icons/2315/default_icon/256/media_play_pause_resume.png);
        background-repeat:no-repeat;
        width:10%;
        height:10%;
        position:absolute;
        left:0rem;
        top: 17rem;
        bottom:0;
        margin:auto;
        background-size:contain;
        background-position: center;
    }
    .pause {
        background-image:url("../public/imge/pause.png");
        background-repeat:no-repeat;
        width:10%;
        height:10%;
        position:absolute;
        left:0rem;
        top: 17rem;
        bottom:0;
        margin:auto;
        background-size:contain;
        background-position: center;
    }
    .reload {
        background-image:url("../public/imge/reload.png");
        background-repeat:no-repeat;
        width:10%;
        height:10%;
        position:absolute;
        left:0rem;
        top: 17rem;
        bottom:0;
        margin:auto;
        background-size:contain;
        background-position: center;
    }
    .left{
        left: 3rem;
    }
</style>

{{-- <style>
   



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
</style> --}}





{{-- ////////////////////////////////////////////// --}}
<!-- [ sample-page ] start -->
<div class="card">
    <div class="card-header">
        <h5>Edit</h5>
        <div class="card-header-right">

        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-xl-7 card-block" style="height: 650px;">
            <div id="world-low" style="height: 650px; overflow: hidden; text-align: left;">
                <div style="text-align: center">
                    <div class="row">
                        <div class="col-md-7 col-sm-7" style="height: 650px">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab">
                                    <div class="form-group">

                                        <form action="{{url('Spottime')}}" method="post"
                                              class="form-horizontal custm-form" role="form"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div style="width: 70%" >
                                                    <input id="ST0" type="text" class="form-control" style="width: 100%;margin-bottom: 10px"  name="sp[]" placeholder="Time"/>
                                                </div>
                                                <div style="width: 29%">
                                                   <a id="plus"  class="btn  btn-outline-warning ">+</a>
                                                </div>
                                            </div>
                                            <br/>
                                            <br/>
                                            <input type="submit" value="Save" class="btn btn-warning "/>
                                            <input name="videos"  type="text" value="{{$ID}}"  hidden/>
                                        </form>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <div class="mb-0">
                                        <div class="row">
                                        @foreach($ClUF as $ClUFs)
                                        <div style="width: 25%;margin: 4px">
                                            <input onclick="movvide({{$ClUFs}})" type="button" value="{{$ClUFs}}" class="btn btn-warning" style="width: 100%;" />
                                        </div>
                                        @endforeach
                                        </div>
                                        <input onclick="Tables()"  type="button" class="btn  btn-outline-warning " value="ADD ROW" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab">
                                    <p class="mb-0">
                                        3
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <p class="mb-0">
                                    <form action="{{url('question')}}" method="post" class="form-horizontal custm-form"
                                          role="form" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" class="form-control" style="width: 100%" name="question"
                                               placeholder="question"/> <br/><br/>
                                        <input type="text" class="form-control" name="answer1" placeholder="answer1"/>
                                        <input type="text" class="form-control" name="Timea1"
                                               placeholder="Time"/><br/><br/>
                                        <input type="text" class="form-control" name="answer2" placeholder="answer2"/>
                                        <input type="text" class="form-control" name="Timea2"
                                               placeholder="Time"/><br/><br/>
                                        <input type="text" class="form-control" name="answer3" placeholder="answer3"/>
                                        <input type="text" class="form-control" name="Timea3"
                                               placeholder="Time"/><br/><br/>
                                        <input type="text" class="form-control" name="answer4" placeholder="answer4"/>
                                        <input type="text" class="form-control" name="Timea4"
                                               placeholder="Time"/><br/><br/>
                                        <input type="text" class="form-control" id="Time" placeholder="Time"/><br/><br/>
                                        <input type="text" name="type" value="1" hidden/>

                                        <input type="submit" value="add"/>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <li><a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill"
                                       href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                       aria-selected="true">chosse</a></li>
                                <li><a class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill"
                                       href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                       aria-selected="false">Profile</a></li>
                                <li><a class="nav-link text-left" id="v-pills-messages-tab" data-toggle="pill"
                                       href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                       aria-selected="false">Messages</a></li>
                                <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill"
                                       href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                       aria-selected="false">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <a class="boxs" href=""></a>

        </div>
        <div id="mma" class="col-md-5 col-xl-5">
            <div id="video_box">
                <div id="video_overlays">
                    <table id="cpanels" border="1" width="100%" style="height:400px">

                    </table>
                </div>
               <div>
                   <video class="card-block"  id="vd" style="width: 450px;height: 400px;" controls="">
                       <source src="{{asset('http://localhost/smartams/public/video')}}/{{$ID}} " type="video/mp4">
                   </video>
               </div>
            </div>
        </div>
    </div>
</div>
{{-- ////////////////////////////////////////////// --}}





{{--  --}}
{{-- <section id="wrapper">
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
                    </div>
                </div>
                <div class="timeBar">12:12:22</div>
            </div>
            
        </div>
    </div>
</section> --}}
       
{{--  --}}


   



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

<script type="text/javascript">

    var i =1;
    function Tables()
    {
        $('#cpanels').append('<tr>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '<td width="10%">'+(i++)+'</td>' +
            '</tr>');
    }

</script>
<!-- [ sample-page ] end -->
@include('part.footer')
