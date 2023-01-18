<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Ledgers</title>
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
                <h1 class="page-title my-0">Ledgers</h1>
            </div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row pb-4">
                            <div class="col-auto">
                                <label>Ledgers</label>
                                <select name="" id="" class="form-control">
                                    <option>ALL</option>
                                    <option>PURCHASE</option>
                                    <option>SALES ORDER</option>
                                    <option>PETTY CASH</option>
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
                            <div class="col-auto">
                                <label>Keyword</label>
                                <input type="text" class="form-control" placeholder="Type Keyword & Enter" />
                            </div>
                            <div class="col-auto pt-4">
                                <button class="btn btn-primary">Search</button>
                            </div>

                            <div class="col-auto pt-4" data-bs-toggle="modal" data-bs-target="#newCashBookModal">
                                <button class="btn btn-primary">New Cash Book</button>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-auto">
                                Total Amount: &#8377; 55,000
                            </div>
                        </div>

                        <div class="pb-4">
                            <label>PURCHASE - &#8377; 15,000</label>
                            <div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%">25%</div>
                                </div>
                            </div>
                        </div>

                        <div class="pb-4">
                            <label>SALES ORDER - &#8377; 35,000 </label>
                            <div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 55%">55%</div>
                                </div>
                            </div>
                        </div>

                        <div class="pb-4">
                            <label>PETTY CASH - &#8377; 15,000 </label>
                            <div>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 25%">25%</div>
                                </div>
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