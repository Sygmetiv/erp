<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Sales Orders</title>
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
                <h1 class="page-title my-0">Sales Orders</h1>
            </div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row pb-4">
                            <div class="col-auto">
                                <label>Customer</label>
                                <select name="" id="" class="form-control">
                                    <option>CUSTOEMR 4441</option>
                                    <option>CUSTOEMR 4562</option>
                                    <option>CUSTOEMR 3456</option>
                                    <option>CUSTOEMR 4565464</option>
                                    <option>CUSTOEMR 545656</option>
                                    <option>CUSTOEMR 67890</option>
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
                            <div class="col-auto pt-4">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSaleModal">New Sale</button>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sold Date</th>
                                    <th>Customer</th>
                                    <th>Order #</th>
                                    <th>Items Count</th>
                                    <th>Total</th>
                                    <th>Payment Type</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sold Date</th>
                                    <th>Customer</th>
                                    <th>Order #</th>
                                    <th>Items Count</th>
                                    <th>Total</th>
                                    <th>Payment Type</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-warning">IN TRANSIT</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>Nation Ads</td>
                                    <td>SIN00001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check-circle"></i> Approve
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-hourglass-half"></i> In Transit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-truck"></i> Delivered
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-list"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                                        <i class="fa fa-download"></i> Invoice
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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
                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Purchase Date">
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
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Total Amount">
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
                                <textarea class="form-control" id="exampleFormControlInput1" placeholder="Note"></textarea>
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
                                                <i class="fa fa-plus"></i> Add Line
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
    <div class="modal fade" id="vendorHistoryDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            Items (10)
                        </div>
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Product Code</th>
                                    <th>Product Price</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
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