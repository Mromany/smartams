@include('part.head')
@include('part.navigation')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- [ sample-page ] start -->
<div class="row">
@foreach($GAMS as $GAMSs)
<div class="col-md-4 col-xl-4">
    <div class="card">
        <div class="card-header">
            <h5>{{$GAMSs->Title}}</h5>
            <div class="card-header-right">
                <div class="btn-group card-option">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div>
                        <video id="vd"  style="width: 450px;height: 400px"> <!-- autoplay -->
                            <source src="{{asset('http://localhost/smartams/public/video').'/'.$GAMSs->Path}}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
<!-- [ sample-page ] end -->
@include('part.footer')
