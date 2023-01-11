<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Cash Flow</title>
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
                <h1 class="page-title my-0">Cash Flow</h1>
            </div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row pb-4">
                            <div class="col-auto">
                                <label>Cash Book</label>
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
                            <div class="col-auto pt-4">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newIncomeModal">New Income</button>
                            </div>
                            <div class="col-auto pt-4">
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#newExpenseModal">New Expense</button>
                            </div>
                        </div>

                        <div class="row pb-4 float-end">
                            <div class="col-auto text-end fw-bold text-secondary">
                                Net Balance: &#8377; 30,000
                            </div>
                            <div class="col-auto text-end fw-bold text-success">
                                Income: &#8377; 55,000
                            </div>
                            <div class="col-auto text-end fw-bold text-danger">
                                Expense: &#8377; 25,000
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th class="text-end">Amount</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Description</th>
                                    <th class="text-end">Amount</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        Paid for SALES ORDER # SINV00001<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 55,000
                                        <i class="fa fa-long-arrow-up text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Purchased product # 0001254<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 25,000
                                        <i class="fa fa-long-arrow-down text-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Paid for SALES ORDER # SINV00001<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 55,000
                                        <i class="fa fa-long-arrow-up text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Paid for SALES ORDER # SINV00001<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 55,000
                                        <i class="fa fa-long-arrow-up text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Purchased product # 0001254<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 25,000
                                        <i class="fa fa-long-arrow-down text-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Paid for SALES ORDER # SINV00001<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 55,000
                                        <i class="fa fa-long-arrow-up text-success"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Paid for SALES ORDER # SINV00001<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 55,000
                                        <i class="fa fa-long-arrow-up text-success"></i>
                                        <span class="badge text-bg-danger">Danger</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Purchased product # 0001254<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 25,000
                                        <i class="fa fa-long-arrow-down text-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Paid for SALES ORDER # SINV00001<br />
                                        <small class="text-secondary">TX ID: 1246896232232</small>
                                    </td>
                                    <td class="align-middle text-end">
                                        &#8377; 55,000
                                        <i class="fa fa-long-arrow-up text-success"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <!-- END PAGE CONTENT-->
        <?php include('footer.php'); ?>
    </div>
    </div>

    <!-- #START - New Income Modal -->
    <div class="modal fade" id="newIncomeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="addIncomeForm" class="needs-validation" novalidate>
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-left">Income</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-hand-holding-usd"></i> Source</label>
                                <select class="form-control" id="source" name="source" required>
                                    <option value="CASH">Cash</option>
                                    <option value="BANK">Bank</option>
                                </select>
                                <div class="invalid-feedback">Select Source</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-rupee-sign"></i> Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                                <!-- <div class="valid-feedback">Success! You've done it.</div> -->
                                <div class="invalid-feedback">Enter Amount</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-border-all"></i> Category</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                                <div class="invalid-feedback">Select Category</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-calendar-alt"></i> Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                                <div class="invalid-feedback">Select Date</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label>Note</label>
                                <input type="text" class="form-control" id="note" name="note" placeholder="Note" required>
                                <div class="invalid-feedback">Enter Note</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fa fa-times"></i> Close</button>
                        <button type="submit" id="submitBtn" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- #END -->

    <!-- #START - New Expense Modal -->
    <div class="modal fade" id="newExpenseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="addExpenseForm" class="needs-validation" novalidate>
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-left">Expense</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-hand-holding-usd"></i> Source</label>
                                <select class="form-control" name="source" required>
                                    <option value="CASH">Cash</option>
                                    <option value="BANK">Bank</option>
                                </select>
                                <div class="invalid-feedback">Select Source</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-rupee-sign"></i> Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="Amount" required>
                                <!-- <div class="valid-feedback">Success! You've done it.</div> -->
                                <div class="invalid-feedback">Enter Amount</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-border-all"></i> Category</label>
                                <select class="form-control" name="category_id" required>

                                </select>
                                <div class="invalid-feedback">Select Category</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label><i class="fa fa-calendar-alt"></i> Date</label>
                                <input type="text" class="form-control" name="date" placeholder="Date" required>
                                <div class="invalid-feedback">Select Date</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label>Note</label>
                                <input type="text" class="form-control" name="note" placeholder="Note" required>
                                <div class="invalid-feedback">Enter Note</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </form>
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