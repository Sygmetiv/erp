<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Cash Books</title>
    <!-- CSS-->
    <?php include('dependency-css.php'); ?>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

        <!-- START HEADER-->
        <?php include('header.php'); ?>
        <!-- END HEADER-->

        <!-- START SIDEBAR-->
        <?php include('sidebar.php'); ?>
        <!-- END SIDEBAR-->
        </br>

        <div class="content-wrapper">

            <div class="page-heading">
                <h1 class="page-title my-0">Reports</h1>
            </div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row pb-4">
                            <div class="col-auto">
                                <label>Type</label>
                                <select name="" id="" class="form-control">
                                    <option>--- Select ---</option>
                                    <option>VENDOR</option>
                                    <option>CUSTOMER</option>
                                    <option>PRODUCT</option>
                                    <option>SALES</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label>Start Date</label>
                                <input type="date" class="form-control" placeholder="Start Date" />
                            </div>
                            <div class="col-auto">
                                <label>End Date</label>
                                <input type="date" class="form-control" placeholder="End Date" />
                            </div>

                            <div class="col-auto pt-4">
                                <button class="btn btn-primary">Search</button>
                            </div>

                            <div class="col-auto pt-4">
                                <button class="btn btn-success"><i class="fa fa-file-excel-o"></i> Excel</button>
                            </div>
                            <div class="col-auto pt-4">
                                <button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> PDF</button>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-auto">
                                Tables
                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>

            <!-- END PAGE CONTENT-->
            <?php include('footer.php'); ?>
        </div>
    </div>

    <!-- #START - New Vendor Modal -->
    <div class="modal fade" id="newCashBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New CashBook</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">CashBook Name</label>
                        <input type="text" class="form-control" id="name" placeholder="CashBook Name">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc" placeholder="Description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #END -->

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <?php include('dependency-js.php'); ?>

    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>