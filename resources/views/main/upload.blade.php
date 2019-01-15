@include('part.head')
@include('part.navigation')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- [ sample-page ] start -->
<div class="col-md-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Upload</h5>
            <div class="card-header-right">

            </div>
        </div>
        <div class="card-block" style="height: 450px;">
            <div id="world-low" style="height: 450px; overflow: hidden; text-align: left;">
                <div style="text-align: center">
                    <form action="{{asset('upload')}}" method="post" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="file-upload">
                                <label for="upload" class="upload">
                                    <div class="details">
                                        <input id="fname" type="text" value="Name" readonly class="inpust"  >
                                        <input id="fsize" type="text" value="Size" readonly class="inpust">
                                    </div>
                                    <i class="feather icon-upload"
                                       style="font-size: 120px;margin-top: 40px;color: #96b0be"></i>
                                    <br/>
                                    <br/>
                                    <span class="progress" style="display: none">
                                        <span class="progress-bar" role="progressbar" style="width: 1%;"
                                              aria-valuenow="25"
                                              aria-valuemin="0" aria-valuemax="100">1%</span>
                                     </span>
                                </label>
                                <input id="upload" name="upload" class="file-upload__input" onchange="change()"  type="file"
                                       name="file-upload" accept="video/*" hidden>
                            </div>
                            <div style="text-align: right">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-check-circle"> </i>رفع
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ sample-page ] end -->
<script>
    function change()
    {
        document.getElementById("fname").value = 'Name : ' + document.getElementById("upload").files[0].name;
        size = document.getElementById("upload").files[0].size / 1048576;
        document.getElementById("fsize").value = 'Size : ' + size.toString().substring(0, 4) + " MB";
        $(".progress").css('display' , "block");
        var i = 0;
        setInterval(function()
        {
            i += Math.floor(Math.random() * Math.floor(3));

            if (i <= 100)
            {
                $(".progress-bar").css('width' , i+"%");
                $(".progress-bar").text(i+"%");
            }
            else {
                $(".progress-bar").css('width' , "100%");
                $(".progress-bar").text("100%");
            }

        }, 200);
    }

</script>
@include('part.footer')
<style>
    .upload {
        border: #04a9f52e;
        border-width: 2px;
        border-style: dotted;
        width: 450px;
        height: 250px;
        background-color: #04a9f526;
    }

    .inpust {
        border: none;
        display: inline;
        font-family: inherit;

        padding: none;
        background-color: #daf2fe;
        width: 100%;
        color: #676464;
        padding: 0.2rem 1rem;
    }

    .details {
        position: relative;
        top: 17rem;
        display: block;
        margin: auto;
        width: 70%;
        font-size: 1rem;
    }

    .btn-primary {
        display: block;
        margin: auto;
        position: relative;
        top: 6rem;
    }
</style>