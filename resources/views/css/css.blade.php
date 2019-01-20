@section('allcss')
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<!-- Favicon icon -->
<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
<!-- fontawesome icon -->
<link rel="stylesheet" href="{{asset('fonts/fontawesome/css/fontawesome-all.min.css')}}">
<!-- animation css -->
<link rel="stylesheet" href="{{asset('plugins/animation/css/animate.min.css')}}">
<!-- vendor css -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<link rel="stylesheet" href="{{asset('plugins/data-tables/css/datatables.min.css')}}">
<!-- materialdesignicons css -->
<link rel="stylesheet" href="{{asset('fonts/material/css/materialdesignicons.min.css')}}">
<style>

    .tab-content {
    padding: 35px 30px;
    margin-top: 15px;
    color: #fff;
    background: #04a9f5;
    -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    border-radius: 5px;
}

    #video_box{
        float:left;
    }
    #video_overlays {
        position:absolute;
        float:left;
        width:450px;
        min-height:400px;
        background-color:#0000;
        z-index:1;
    }
</style>
@endsection
