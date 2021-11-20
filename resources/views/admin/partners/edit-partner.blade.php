<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Event - Edufest</title>
    <link rel="stylesheet" href="../../../assets/admin-template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spartan&amp;display=swap">
    <link rel="stylesheet" href="../../../assets/admin-template/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../../assets/admin-template/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/admin-template/fonts/fontawesome5-overrides.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- Favicon start -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/icons/edufest-icon.png">
    <!-- Favicon end -->
</head>

<body id="page-top">
    <div id="wrapper">

        @include('admin.layouts.side-nav')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                @include('admin.layouts.top-nav')

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Event</h3>
                    <form id="event__edit-form" method="put" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><div id="before__img"></div>
                                <div class="my-3 mx-5">
                                    <label for="formFile" class="form-label">Change Photo</label>
                                    <input class="form-control" type="file" accept="image/*" name="picture" id="form__img">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Event Detail</p>
                                        </div>
                                        <div class="card-body">

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="form__event-title"><strong>Event Title</strong><br></label><input
                                                                class="form-control" type="text" id="form__event-title"
                                                                placeholder="Event Title" name="title"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="form__event-region"><strong>Region</strong><br></label>
                                                                <select class="form-select" id="form__event-region" name="region">
                                                                    <optgroup label="Select region">
                                                                        <option value="all_region">All Region</option>
                                                                        <option value="timtengka">Timur Tengah dan Afrika</option>
                                                                        <option value="amerop">Amerika dan Eropa</option>
                                                                        <option value="asia_oseania">Asia dan Oseania</option>
                                                                    </optgroup>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="form__event-date"><strong>Event Date</strong><br></label><input class="form-control"
                                                                id="form__event-date" type="date" name="date"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="form__event-link"><strong>Form Link</strong><br></label><input class="form-control"
                                                                type="text" id="form__event-link"
                                                                placeholder="Form Link" name="form_link"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><label class="form-label"
                                                        for="form__event-detail"><strong>Details</strong></label><input
                                                        class="form-control" type="text" id="form__event-detail" placeholder="Event Detail" name="detail"></div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm"
                                                        type="submit">Save Info</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Edufest 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../../../assets/admin-template/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../assets/admin-template/js/script.min.js"></script>
    <script>
        $.ajax({
            type: 'GET',
            url: '../../../api/events/read',
            success: function(data) {
                $.each(data, function(key, event){
                    if(event["id"]==={{ request()->route('id') }}){
                        var img_link = '/storage/img/events/'+event["id"]+'/'+event["picture"];

                        $( "#before__img" ).after( '<img id="event__img" class="rounded-circle mb-3 mt-4" width="160" height="160" src="'+img_link+'"">');
                        $('#form__event-title').val(event["title"]);
                        $('#form__event-region').val(event["region"]);
                        $('#form__event-date').val(event["date"]);
                        $('#form__event-link').val(event["form_link"]);
                        $('#form__event-detail').val(event["detail"]);
                        // $('#form__img').val(event["picture"]);
                        // var file = new Blob([data], {type: 'application/pdf'});
                        // new File("/path/to/file");
                        // let file = new File([data], img_link, metadata);
                        // document.getElementById('form__img').files[0] = file;
                    }
                });
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var data=XMLHttpRequest.responseText;
                    var jsonResponse = JSON.parse(data);
                    alert(jsonResponse["message"]), alert(textStatus);
                }
        });
        $("#event__edit-form").submit(function(e) {

            e.preventDefault();
            var form = $("#event__edit-form");
            var formData = new FormData();
            var files = $('#form__img')[0].files[0];
            formData.append('picture', files);
            formData.append('title', $('#form__event-title').val());
            formData.append('region',$('#form__event-region').val());
            formData.append('date',$('#form__event-date').val());
            formData.append('form_link',$('#form__event-link').val());
            formData.append('detail',$('#form__event-detail').val());

            if(files === undefined){
                $.ajax({
                    type: 'GET',
                    url: '../../../api/events/read',
                    success: function(data) {
                        $.each(data, function(key, event){
                            if(event["id"]==={{ request()->route('id') }}){
                                var img_link = '/storage/img/events/'+event["id"]+'/'+event["picture"];
                                jQuery.ajax({
                                            url:'../../..'+img_link,
                                            cache:false,
                                            xhr:function(){
                                                var xhr = new XMLHttpRequest();
                                                xhr.responseType= 'blob'
                                                return xhr;
                                            },
                                            success: function(data){
                                                console.log(data)
                                                // document.getElementById('form__img').files[0] = data;
                                                // var files = data[0].files[0];

                                                var fd = new FormData();
                                                var files = data[0].files;

                                                // var imgHandler = URL.createObjectURL(data)
                                                formData.append('picture', files);
                                            },
                                            error:function(){
                                                console.log("Fail to get img");
                                            }
                                });
                            }
                        });
                    },
                });
            }
            $.ajax({
                type: "POST",
                url: '../../../api/events/update/{{ request()->route('id') }}?_method=PUT',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer {{ Auth::user()->api_token }}');
                },
                success: function(data)
                {
                    let headers = new Headers({'Content-Type': 'application/json'});
                    let token = 'Bearer {{ Auth::user()->api_token }}';
                    headers.append('Authorization', token);
                    window.location.href = "{{ route('admin-events-index') }}";
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var data=XMLHttpRequest.responseText;
                    var jsonResponse = JSON.parse(data);
                    alert(jsonResponse["message"]);
                }
            });
        });

    </script>
</body>

</html>
