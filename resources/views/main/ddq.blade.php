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
        <div class="col-md-12 col-xl-12 card-block" style="height: 650px;">
            <div id="world-low" style="height: 650px; overflow: hidden; text-align: left;">
                <div style="text-align: center">
                    <div class="row">
                        <div class="col-md-9 col-sm-9" style="height: 650px">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab" style="height: 650px">
                                    {{-- <div id="droppable"style="color: #1b4b72;border: solid green;padding: 25px;width: 100px; height: 80px">
                                        <p >Drop here</p>
                                    </div> --}}
                                    <div class="row" style="margin-bottom: 2rem;">
                                        <div class="col-lg-2 col-md-2" id="droppable1"style="color: #1b4b72;border: solid green;padding: 25px;height: 80px;margin: 10px;">
                                            <p>Plant</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2" id="droppable2"style="color: #1b4b72;border: solid green;padding: 25px;height: 80px;margin: 10px;">
                                            <p>Plastic</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2" id="droppable3"style="color: #1b4b72;border: solid green;padding: 25px;height: 80px; margin: 10px;">
                                            <p>metals</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 2rem;">
                                        <div class="col-lg-2 col-md-2" id="draggable1"style="color: #1b4b72;border: solid red;padding: 25px;margin: 10px; height: 80px">
                                            <p>ball</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2" id="draggable2"style="color: #1b4b72;border: solid red;padding: 25px;margin: 10px; height: 80px">
                                            <p>Apple</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2" id="draggable3"style="color: #1b4b72;border: solid red;padding: 25px;margin: 10px; height: 80px">
                                            <p>Iron</p>
                                        </div>
                                    </div>
                                    {{-- <div id="draggable"style="color: #1b4b72;border: solid red;padding: 25px;width: 100px; height: 80px">
                                        <p>a</p>
                                    </div> --}}


                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <p class="mb-0">
                                    <div class="form-group">
                                        <form action="{{url('question')}}" method="post"
                                              class="form-horizontal custm-form"
                                              role="form" enctype="multipart/form-data">
                                            @csrf
                                            <span style="font-size: 17px">ضع الاجابه الصحيحه في اول خانه</span>
                                            <br/><br/>
                                            <input type="text" class="form-control"
                                                   style="width: 100%;text-align: right" name="question"
                                                   placeholder="السؤال"/> <br/><br/>
                                            <input type="text" class="form-control"
                                                   style="width: 100%;text-align: right" name="answer1"
                                                   placeholder="الاجابة 1"/> <br/><br/>
                                            <input type="text" class="form-control"
                                                   style="width: 100%;text-align: right" name="answer2"
                                                   placeholder="الاجابة 2"/> <br/><br/>
                                            <input type="text" class="form-control"
                                                   style="width: 100%;text-align: right" name="answer3"
                                                   placeholder="الاجابة 3"/> <br/><br/>
                                            <input type="text" class="form-control"
                                                   style="width: 100%;text-align: right" name="answer4"
                                                   placeholder="الاجابة 4"/> <br/><br/>
                                            <input type="submit" class="btn btn-glow-info " value="add"/>
                                        </form>
                                    </div>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab">
                                    <p class="mb-0">
                                    <div class="form-group">
                                        <form action="{{url('question')}}" method="post"
                                              class="form-horizontal custm-form"
                                              role="form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" class="form-control"
                                                   style="width: 100%;text-align: right" name="question"
                                                   placeholder="السؤال"/> <br/><br/>
                                            <div style="text-align: right">
                                                <label for="huey">صح</label>

                                                <input type="radio" name="TF" value="true" class="form-control"
                                                       style="width: 10%;text-align: right"/>
                                            </div>
                                            <div style="text-align: right">
                                                <label for="huey">غلط</label>
                                                <input type="radio" name="TF" value="false" class="form-control"
                                                       style="width: 10%;text-align: right"/>
                                            </div>
                                            <input type="submit" class="btn btn-glow-info " value="add"/>
                                        </form>
                                    </div>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <p class="mb-0">
                                    <div class="form-group">
                                        <form action="{{url('question')}}" method="post"
                                              class="form-horizontal custm-form"
                                              role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div style="text-align: right">

                                                <input type="text" class="form-control"
                                                       style="width: 49%;text-align: right" name="question2"
                                                       placeholder="المقطع الثاني"/>
                                                <input type="text" class="form-control"
                                                       style="width: 50%;text-align: right" name="question1"
                                                       placeholder="المقطع الاول"/> <br/><br/>
                                                <input type="text" class="form-control"
                                                       style="width: 50%;text-align: right" name="question1"
                                                       placeholder="الاجابة الصحيحه"/> <br/><br/>
                                            </div>
                                            <input type="submit" class="btn btn-glow-info " value="add"/>
                                        </form>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <li><a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill"
                                       href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                       aria-selected="true">Drag and Drop</a></li>
                                <li><a class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill"
                                       href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                       aria-selected="false">Choose</a></li>
                                <li><a class="nav-link text-left" id="v-pills-messages-tab" data-toggle="pill"
                                       href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                       aria-selected="false">T & F</a></li>
                                <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill"
                                       href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                       aria-selected="false">Complete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ sample-page ] end -->
@include('part.footer')
