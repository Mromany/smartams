@include('part.head')
@include('part.navigation')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
                                    <p class="mb-0">
                                        @foreach($ClUF as $ClUFs)
                                        <input type="text" value="{{$ClUFs}}" class="btn btn-warning "/>
                                        @endforeach
                                    </p>
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
        </div>
        <div class="col-md-5 col-xl-5">
            <video class="card-block" id="vda" style="width: 450px;height: 400px" controls="">
                <source src="{{asset('http://localhost/smartams/public/video')}}/{{$ID}} " type="video/mp4">
            </video>
        </div>
    </div>
</div>
<script type="text/javascript">
    var vid = document.getElementById('vda');
    var avd = document.getElementById('Time');
    window.setInterval(function () {
        avd.value = vid.currentTime;
        /*.toString().split('.')[0]*/
    }, 100);
</script>
<!-- [ sample-page ] end -->
@include('part.footer')
