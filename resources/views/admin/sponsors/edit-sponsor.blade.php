<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Sponsor - Edufest</title>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Photo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input class="form-control" type="file" accept="image/*" name="picture" id="form__img">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button id="save-picture" type="button" class="btn btn-primary"
                                    data-bs-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Sponsor</h3>
                    <form id="sponsor__edit-form" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center shadow">
                                        <div id="before__img"></div>
                                        <div class="my-3 mx-5">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Update Photo
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Sponsor Detail</p>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="form__sponsor-name"><strong>Sponsor
                                                                    Name</strong><br></label><input
                                                                class="form-control" type="text"
                                                                id="form__sponsor-name" placeholder="Sponsor Name"
                                                                name="name"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><label class="form-label"
                                                        for="form__sponsor-detail"><strong>Detail</strong></label>
                                                    <textarea class="form-control" type="text"
                                                        id="form__sponsor-detail" placeholder="Sponsor Detail"
                                                        name="detail" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm"
                                                        type="submit">Save Changes</button></div>
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
        $('#save-picture').click(function(e) {
            e.preventDefault();
            var formData = new FormData();
            // alert('ok');
            var files = $('#form__img')[0].files[0];
            formData.append('picture', files);
            $.ajax({
                type: "POST",
                url: '../../../api/partners/image/{{ request()->route('id') }}?_method=PUT',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer {{ Auth::user()->api_token }}');
                },
                success: function(data) {
                    alert("check")
                    // window.location.href = "{{ route('admin-partners-index') }}";
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var data = XMLHttpRequest.responseText;
                    var jsonResponse = JSON.parse(data);
                    alert(jsonResponse["message"]);
                }
            });

        });

        $.ajax({
            type: 'GET',
            url: '../../../api/sponsors/read',
            success: function(data) {
                $.each(data, function(key, sponsor) {
                    if (sponsor["id"] === {{ request()->route('id') }}) {
                        var img_link = '/storage/img/sponsors/' + sponsor["name"] + '/' + sponsor[
                            "picture"];

                        $("#before__img").after(
                            '<img id="sponsor__img" class="rounded-circle mb-3 mt-4" width="160" height="160" src="' +
                            img_link + '"">');
                        $('#form__sponsor-name').val(sponsor["name"]);
                        $('#form__sponsor-detail').val(sponsor["detail"]);
                    }
                });
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                var data = XMLHttpRequest.responseText;
                var jsonResponse = JSON.parse(data);
                alert(jsonResponse["message"]), alert(textStatus);
            }
        });
        $("#sponsor__edit-form").submit(function(e) {

            e.preventDefault();
            var form = $("#sponsor__edit-form");
            var formData = new FormData();
            var files = $('#form__img')[0].files[0];
            formData.append('picture', files);
            formData.append('name', $('#form__sponsor-name').val());
            formData.append('detail', $('#form__sponsor-detail').val());
            var urlpost = '../../../api/sponsors/insert';
            $.ajax({
                type: "POST",
                url: urlpost,
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer {{ Auth::user()->api_token }}');
                },
                success: function(data) {
                    console.log('after ajax')
                    window.location.href = "{{ route('admin-sponsors-index') }}";
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var data = XMLHttpRequest.responseText;
                    var jsonResponse = JSON.parse(data);
                    alert(jsonResponse["message"]);
                }
            });
        });
    </script>
</body>

</html>
