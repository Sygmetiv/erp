<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Settings</title>
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
                <h1 class="page-title my-0">Settings</h1>
            </div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row pb-4">
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Categories</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Vendors</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Customers</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Products</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Purcase Orders</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Sales Orders</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Transactions</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input form-check-input-lg" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Reports</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <button class="btn btn-primary">Update</button>
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