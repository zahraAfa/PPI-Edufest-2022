<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Speakers - Edufest</title>
    <link rel="stylesheet" href="../../assets/admin-template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spartan&amp;display=swap">
    <link rel="stylesheet" href="../../assets/admin-template/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/admin-template/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/admin-template/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- Favicon start -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/icons/edufest-icon.png">
    <!-- Favicon end -->
</head>

<body id="page-top">
    <div id="wrapper">

        @include('admin.layouts.side-nav')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                @include('admin.layouts.top-nav')

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Speakers</h3>
                    <a class="btn btn-info btn-icon-split" role="button" style="margin-bottom: 15px;"
                        href="{{ route('admin-speaker-add') }}"><span class="text-white-50 icon"><i
                                class="fas fa-plus" style="color: rgb(255,255,255);"></i></span>
                        <span class="text-white text">New Speaker</span></a>
                    <div class="card shadow" style="border-radius: 20px;">
                        <div class="card-header py-3"
                            style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                            <p class="text-primary m-0 fw-bold">Speaker Info</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>PPI</th>
                                            <th>Major</th>
                                            <th>School</th>
                                            <th>Event</th>
                                            <th>Detail</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="speakers__row">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this speaker?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="modal_delete" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/admin-template/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/admin-template/js/script.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        // get modal element
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
            keyboard: false
        });
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../../../api/events/read",
                success: function(events) {
                    $.ajax({
                        type: "GET",
                        url: "../../../api/speakers/read",
                        success: function(speakers) {
                            var eventTitle;

                            var speakerItems = '';
                            console.log(speakers);
                            if (speakers.length === 0) {
                                $('#speakers__row').after(
                                    '<td colspan="7" class="text-center" >There is no data exist here</td>'
                                );
                            } else {
                                $.each(speakers, function(key, speaker) {
                                    $.each(events, function(key,
                                        event) {
                                        if (speaker[
                                                "event_id"
                                            ] === event[
                                                "id"]) {
                                            eventTitle =
                                                event[
                                                    "title"
                                                ];

                                        }
                                    });
                                    speakerItems += '<tr class="align-middle">' +
                                        '<td id="speaker__name-crud"><img class="rounded-circle me-2" width="150" height="150" src="../../storage/img/speakers/' +
                                        speaker["id"] + '/' +
                                        speaker["picture"] +
                                        '">' +
                                        speaker["name"] +
                                        '</td>' +
                                        '<td id="speaker__ppi-crud">' +
                                        speaker["ppi"] +
                                        '</td>' +
                                        '<td id="speaker__major-crud">' +
                                        speaker["major"] +
                                        '</td>' +
                                        '<td id="speaker__school-crud">' +
                                        speaker["school"] +
                                        '</td>';
                                    speakerItems +=
                                        '<td id="speaker__event-crud">' +
                                        eventTitle + '</td>' +
                                        '<td id="speaker__detail-crud">' +
                                        speaker["detail"] +
                                        '</td>' +
                                        '<td>' +
                                        '<a style="background-color:#1cc88a!important;" class="btn btn-success btn-circle ms-1" role="button" id="speaker__edit" href="../../admin/speakers/edit/' +
                                        speaker["id"] +
                                        '"><i class="fas fa-edit text-white"></i></a>' +
                                        '<a style="background-color:#e74a3b!important;" class="btn btn-danger btn-circle ms-1 delete-btn-speaker" role="button" id="' +
                                        speaker["id"] +
                                        '"><i class="fas fa-trash text-white"></i></a>' +
                                        '</td>' +
                                        '</tr>';
                                });
                                $('#speakers__row').append(speakerItems);
                                $('#dataTable').DataTable();
                            }

                        }
                    });
                }
            });
        });
        $(document).on('click', ".delete-btn-speaker", function() {
            var del_id = $(this).attr('id');
            myModal.show();
            $("#modal_delete").attr("delete-id", del_id);
        });

        $(document).on('click', "#modal_delete", function() {
            let del_id = $(this).attr('delete-id');

            $.ajax({
                type: "DELETE",
                url: '../../../api/speakers/delete/' + del_id,
                data: 'id=' + del_id,
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
            myModal.hide();
        });
    </script>
</body>

</html>
