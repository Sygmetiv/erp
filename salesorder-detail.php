<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Sales Order Detail</title>
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
            <div class="container-fluid p-3 bg-white">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="vendors.php">Sales Orders</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SIN00001</li>
                    </ol>
                </nav>
            </div>
            
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Order Detail
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <table class="table table-sm table-striped">
                                                <tr>
                                                    <td>Sold Date</td>
                                                    <td>2022-01-13</td>
                                                </tr>
                                                <tr>
                                                    <td>Customer</td>
                                                    <td>Nation Ads</td>
                                                </tr>
                                                <tr>
                                                    <td>Order #</td>
                                                    <td>SIN00001</td>
                                                </tr>
                                                <tr>
                                                    <td>Items Count</td>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Amount</td>
                                                    <td>&#8377;150000</td>
                                                </tr>
                                                <tr>
                                                    <td>Order Status</td>
                                                    <td><span class="badge bg-warning">IN TRANSIT</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Payment Information
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <table class="table table-sm table-striped">
                                                <tr>
                                                    <td>Payment Type</td>
                                                    <td><span class="badge bg-primary">BANK</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Name</td>
                                                    <td>ICICI BANK</td>
                                                </tr>
                                                <tr>
                                                    <td>Account #</td>
                                                    <td>0111098346</td>
                                                </tr>
                                                <tr>
                                                    <td>Payment Status</td>
                                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Payment Link</td>
                                                    <td><button class="btn btn-primary btn-sm">Create Link</button></td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-items" type="button" role="tab" aria-controls="nav-items"
                                        aria-selected="true">Items(10)</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Payment Links(5)</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-items" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <table class="table table-sm table-striped">
                                        <thead>
                                            <tr>
                                                <th>Created At</th>
                                                <th>Amount</th>
                                                <th>Link</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>00001</td>
                                                <td>&#8377;1500</td>
                                                <td>10</td>
                                                <td>&#8377;150000</td>
                                            </tr>
                                            <tr>
                                                <td>00001</td>
                                                <td>&#8377;1500</td>
                                                <td>10</td>
                                                <td>&#8377;150000</td>
                                            </tr>
                                            <tr>
                                                <td>00001</td>
                                                <td>&#8377;1500</td>
                                                <td>10</td>
                                                <td>&#8377;150000</td>
                                            </tr>
                                            <tr>
                                                <td>00001</td>
                                                <td>&#8377;1500</td>
                                                <td>10</td>
                                                <td>&#8377;150000</td>
                                            </tr>
                                            <tr>
                                                <td>00001</td>
                                                <td>&#8377;1500</td>
                                                <td>10</td>
                                                <td>&#8377;150000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table table-striped table-bordered table-hover" id="example-table"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width: 12%">Created At</th>
                                                <th style="width: 10%">Amount</th>
                                                <th>Link</th>
                                                <th style="width: 10%">Status</th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2023-01-13</td>
                                                <td>&#8377;150000</td>
                                                <td>
                                                    <a
                                                        href="https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp">
                                                        https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp
                                                    </a>
                                                </td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-sm">
                                                        <i class="fas fa-trash cursor"></i>
                                                    </button>
                                                    <button class="btn btn-sm">
                                                        <i class="fas fa-envelope cursor"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2023-01-13</td>
                                                <td>&#8377;150000</td>
                                                <td>
                                                    <a
                                                        href="https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp">
                                                        https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp
                                                    </a>
                                                </td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>
                                                    <button class="btn btn-sm">
                                                        <i class="fas fa-trash cursor"></i>
                                                    </button>
                                                    <button class="btn btn-sm">
                                                        <i class="fas fa-envelope cursor"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

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

    <!-- #START - New Sale Modal -->
    <div class="modal fade" id="newSaleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Sales Order</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Sale Date</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Purchase Date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Customer</label>
                                <select class="form-control">
                                    <option>Customer 1</option>
                                    <option>Customer 2</option>
                                    <option>Customer 3</option>
                                    <option>Customer 4</option>
                                    <option>Customer 5</option>
                                    <option>Customer 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Total Amount</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Total Amount">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Payment Mode</label>
                                <select class="form-control">
                                    <option>Cash</option>
                                    <option>UPI</option>
                                    <option>Bank</option>
                                    <option>Cheque</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Note</label>
                                <textarea class="form-control" id="exampleFormControlInput1"
                                    placeholder="Note"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Products Table -->
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 35%">Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-end">
                                            <button class="btn btn-secondary btn-sm">
                                                <i class="fas fa-plus"></i> Add Line
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-control">
                                                <option>00001-Product 1</option>
                                                <option>00002-Product 2</option>
                                                <option>00003-Product 3</option>
                                                <option>00004-Product 4</option>
                                                <option>00005-Product 5</option>
                                                <option>00006-Product 6</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" placeholder="Quantity" value="2">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" placeholder="Price" value="5000">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" placeholder="Total" value="10000">
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create Order</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #END -->

    <!-- #START - Vendor History -->
    <div class="modal fade" id="vendorHistoryDetail" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sales Order Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    Order Detail
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <table class="table table-sm table-striped">
                                            <tr>
                                                <td>Sold Date</td>
                                                <td>2022-01-13</td>
                                            </tr>
                                            <tr>
                                                <td>Customer</td>
                                                <td>Nation Ads</td>
                                            </tr>
                                            <tr>
                                                <td>Order #</td>
                                                <td>SIN00001</td>
                                            </tr>
                                            <tr>
                                                <td>Items Count</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td>&#8377;150000</td>
                                            </tr>
                                            <tr>
                                                <td>Order Status</td>
                                                <td><span class="badge bg-warning">IN TRANSIT</span></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    Payment Information
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <table class="table table-sm table-striped">
                                            <tr>
                                                <td>Payment Type</td>
                                                <td><span class="badge bg-primary">BANK</span></td>
                                            </tr>
                                            <tr>
                                                <td>Bank Name</td>
                                                <td>ICICI BANK</td>
                                            </tr>
                                            <tr>
                                                <td>Account #</td>
                                                <td>0111098346</td>
                                            </tr>
                                            <tr>
                                                <td>Payment Status</td>
                                                <td><span class="badge bg-success">DELIVERED</span></td>
                                            </tr>
                                            <tr>
                                                <td>Payment Link</td>
                                                <td><span class="badge bg-success">DELIVERED</span></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-items" type="button" role="tab" aria-controls="nav-items"
                                    aria-selected="true">Items(10)</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Payment Links(5)</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-items" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>
                                            <th>Amount</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>00001</td>
                                            <td>&#8377;1500</td>
                                            <td>10</td>
                                            <td>&#8377;150000</td>
                                        </tr>
                                        <tr>
                                            <td>00001</td>
                                            <td>&#8377;1500</td>
                                            <td>10</td>
                                            <td>&#8377;150000</td>
                                        </tr>
                                        <tr>
                                            <td>00001</td>
                                            <td>&#8377;1500</td>
                                            <td>10</td>
                                            <td>&#8377;150000</td>
                                        </tr>
                                        <tr>
                                            <td>00001</td>
                                            <td>&#8377;1500</td>
                                            <td>10</td>
                                            <td>&#8377;150000</td>
                                        </tr>
                                        <tr>
                                            <td>00001</td>
                                            <td>&#8377;1500</td>
                                            <td>10</td>
                                            <td>&#8377;150000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <table class="table table-striped table-bordered table-hover" id="example-table"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="width: 12%">Created At</th>
                                            <th style="width: 10%">Amount</th>
                                            <th>Link</th>
                                            <th style="width: 10%">Status</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-01-13</td>
                                            <td>&#8377;150000</td>
                                            <td>
                                                <a href="https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp">
                                                    https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp
                                                </a>
                                            </td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-trash cursor"></i>
                                                </button>
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-envelope cursor"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2023-01-13</td>
                                            <td>&#8377;150000</td>
                                            <td>
                                                <a href="https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp">
                                                    https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp
                                                </a>
                                            </td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-trash cursor"></i>
                                                </button>
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-envelope cursor"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
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
        $(function () {
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