<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Partner - Edufest</title>
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
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
                    <h3 class="text-dark mb-4">Edit Partner</h3>
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
                                    <input class="form-control" type="file" accept="image/*" name="picture"
                                        id="form__img">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button id="save-picture" type="button" class="btn btn-primary"
                                        data-bs-dismiss="modal">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <form id="partner__edit-form" method="POST" enctype="multipart/form-data"> --}}
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
                                            <p class="text-primary m-0 fw-bold">Partner Detail</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label"
                                                            for="form__partner-name"><strong>Partner
                                                                Name</strong><br></label><input class="form-control"
                                                            type="text" id="form__partner-name"
                                                            placeholder="Partner Name" name="name"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <input class="btn btn-primary btn-sm" id="form__btn2" type="submit"
                                                    value="Update" name="all">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Edufest 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Success update partner.
                </div>
                <div class="modal-footer">
                    <button type="button" id="modal_update" class="btn btn-primary">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <script src="../../../assets/admin-template/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../assets/admin-template/js/script.min.js"></script>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('updateModal'), {
            keyboard: false
        })
        $(document).on('click', "#modal_update", function() {
            window.location.href = "{{ route('admin-partners-index') }}";
        });
        $.ajax({
            type: 'GET',
            url: '../../../api/partners/read',
            success: function(data) {
                $.each(data, function(key, partner) {
                    if (partner["id"] === {{ request()->route('id') }}) {
                        var img_link = '/storage/img/partners/' + partner["id"] + '/' + partner[
                            "picture"];

                        $("#before__img").after(
                            '<img id="partner__img" class="rounded-circle mb-3 mt-4" width="160" height="160" src="' +
                            img_link + '"">');
                        $('#form__partner-name').val(partner["name"]);
                    }
                });
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                var data = XMLHttpRequest.responseText;
                var jsonResponse = JSON.parse(data);
                alert(jsonResponse["message"]), alert(textStatus);
            }
        });
        // $('#form__img').click(function(){
        //     $('#save-picture').attr("disabled", false);
        //     console.log($('#form__img')[0].files[0]);
        // });
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
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var data = XMLHttpRequest.responseText;
                    var jsonResponse = JSON.parse(data);
                    alert(jsonResponse["message"]);
                }
            });

        });

        $("#form__btn2").click(function(e) {
            e.preventDefault();
            const data = {
                "name": $('#form__partner-name').val(),
            }
            $.ajax({
                type: "PUT",
                url: '../../../api/partners/update/{{ request()->route('id') }}?_method=PUT',
                data: JSON.stringify(data),
                processData: false,
                contentType: "application/json; charset=utf-8",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer {{ Auth::user()->api_token }}');
                },
                success: function(data) {
                    myModal.show();
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