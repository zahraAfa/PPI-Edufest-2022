<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Events - Edufest</title>
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
    <link rel="icon" type="image/png" sizes="292x292" href="../../../assets/icons/edufest-icon.png" />
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
    {{-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> --}}
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
                    <h3 class="text-dark mb-4">Events</h3>
                    <a class="btn btn-info btn-icon-split" role="button" style="margin-bottom: 15px;"
                        href="{{ route('admin-event-add') }}"><span class="text-white-50 icon"><i class="fas fa-plus"
                                style="color: rgb(255,255,255);"></i></span>
                        <span class="text-white text">New Event</span></a>
                    <div class="card shadow" style="border-radius: 20px;">
                        <div class="card-header py-3"
                            style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                            <p class="text-primary m-0 fw-bold">Event Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row d-none">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label class="form-label">Show&nbsp;<select
                                                class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label
                                            class="form-label"><input type="search"
                                                class="form-control form-control-sm" aria-controls="dataTable"
                                                placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th class="d-none">Num. Participants</th>
                                            <th>Region</th>
                                            <th>Date</th>
                                            <th>Detail</th>
                                            <th>Form Link</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="events__row">

                                    </tbody>
                                </table>
                            </div>
                            <div class="row d-none">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav
                                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"
                                                    aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
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
    <script src="../../assets/admin-template/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/admin-template/js/script.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#dataTable').dataTable();
            $.ajax({
                type: "GET",
                url: "../../../api/events/read",
                header: {
                    "Authorization": "Bearer {{ Auth::user()->api_token }}"
                },
                success: function(result) {

                    var eventItems = '';
                    $.each(result, function(key, event) {

                        var region = '';
                        switch (event["region"]) {
                            case 'timtengka':
                                region = "Timur Tengah dan Afrika";
                                break;
                            case 'amerop':
                                region = "Amerika dan Eropa";
                                break;
                            case 'asia_oseania':
                                region = "Asia dan Oseania";
                                break;
                        }
                        eventItems += '<tr>' +
                            '<td><img class="rounded-circle me-2" width="150" height="150" src="../../storage/img/events/' +
                            event["id"] + '/' + event["picture"] + '">' + event["title"] +
                            '</td>' +
                            '<td id="event__region-crud">' + region + '</td>' +
                            '<td id="event__date-crud">' + event["date"] + '</td>' +
                            '<td id="event__detail-crud">' + event["detail"] + '</td>' +
                            '<td><a style="background-color:#858796!important;" class="btn btn-secondary btn-icon-split" role="button" href="' +
                            event["form_link"] +
                            '"><span class="text-white-50 icon"><i class="fas fa-share-square" style="color: rgb(255,255,255);"></i></span><span class="text-white text">Form</span></a></td>' +
                            '<td>' +
                            '<a style="background-color:#1cc88a!important;" class="btn btn-success btn-circle ms-1" role="button" id="event__edit" href="../../admin/events/edit/' +
                            event["id"] + '"><i class="fas fa-edit text-white"></i></a>' +
                            '<a style="background-color:#e74a3b!important;" class="btn btn-danger btn-circle ms-1 delete-btn-event" role="button" id="' +
                            event["id"] + '"><i class="fas fa-trash text-white"></i></a>' +
                            '</td>' +
                            '</tr>';
                    });
                    $('#events__row').after(eventItems);
                }
            });
        });
        $(document).on('click', ".delete-btn-event", function() {

            var del_id = $(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: '../../../api/events/delete/' + del_id,
                data: 'id=' + del_id,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer {{ Auth::user()->api_token }}');
                },
                success: function(data) {
                    alert(data["response"]);
                    location.reload();
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
