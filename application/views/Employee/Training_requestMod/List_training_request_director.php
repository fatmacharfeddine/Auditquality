
<body>


    <div class="page-wrapper" style="min-height: 314px;">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">List of training requests</h4>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    if (isset($empty)) {
                                    ?>
                                        <p> No Requests !! </p>
                                    <?php } else { ?>
                                        <table class="table table-border table-striped custom-table datatable mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Title</th>

                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Requested by</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Status</th>


                                                    <!--th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 51px;">Action</th-->
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                //echo print_r($training_request);
                                                if (isset($training_request)) {

                                                ?>
                                                    <?php
                                                    foreach ($training_request as $row) {

                                                    ?>
                                                        <tr role="row" class="odd">

                                                            <td><?php echo  $row['Title_training_request'] ?></td>
                                                            <td><?php echo  $row['Description_training_request'] ?></td>
                                                            <td><?php echo  $row['Name_employee'] . ' ' . $row['Lastname_employee']  ?></td>
                                                            <td><?php echo  $row['Date_creation_training_request'] ?></td>

                                                            <td>
                                                                <!----------------------------->
                                                                <?php //if (isset($validation_form)) {
                                                                if ($row['Validatedby_training_request'] == 0) {
                                                                ?>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <a href="<?php echo base_url(); ?>Employee_Account/Training_request_director?ID_training_request=<?php echo $row['ID_training_request'] ?>&action=accept" class="btn btn-outline-primary take-btn">Accept</a>
                                                                    <a href="<?php echo base_url(); ?>Employee_Account/Training_request_director?ID_training_request=<?php echo $row['ID_training_request'] ?>&action=refuse" class="btn btn-outline-primary take-btn">Refuse</a>
                                                                    <?php } else if ($row['Validatedby_training_request'] != 0) {
                                                                    if ($row['Refusedstatus_training_request'] == 1) { ?>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <span class="custom-badge status-red">Refused</span>
                                                                    <?php    } else { ?>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;

                                                                        <span class="custom-badge status-green">Accepted</span>
                                                                <?php //}
                                                                    }
                                                                } ?>
                                                                <!----------------------------->
                                                            </td>


                                                        </tr>
                                                <?php }
                                                    // }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row" style="margin-top:2%">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"> </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        <!-------------------------------PAGING------------------------------------->

                                        <!----------------------------End PAGING------------------------------------>
                                        <ul class="pagination">
                                            <?php
                                            //   $nb = 0;
                                            for ($i = 1; $i < $nb + 1; $i++) {
                                                /****************** No page selected **************** */
                                                if (!isset($_GET['page'])) {
                                                    if ($i == 1) {
                                            ?>
                                                        <li class="paginate_button page-item active"><a href="?page=<?php echo $i; ?>" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i; ?></a></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class="paginate_button page-item"><a href="?page=<?php echo $i; ?>" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $i; ?></a></li>
                                                    <?php
                                                    }
                                                }
                                                /************** End No page selected **************** */
                                                /****************** Selected page **************** */
                                                if (isset($_GET['page'])) {
                                                    if ($i == $_GET['page']) {
                                                    ?>
                                                        <li class="paginate_button page-item active"><a href="?page=<?php echo $i; ?>" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i; ?></a></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class="paginate_button page-item"><a href="?page=<?php echo $i; ?>" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $i; ?></a></li>
                                            <?php
                                                    }
                                                }
                                                /************** End Selected page **************** */
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() . "/includes/ext/"; ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() . "/includes/ext/"; ?>assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() . "/includes/ext/"; ?>assets/js/.slimscroll.js"></script>
    <script src="<?php echo base_url() . "/includes/ext/"; ?>assets/js/select2.min.js"></script>
    <script src="<?php echo base_url() . "/includes/ext/"; ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() . "/includes/ext/"; ?>assets/js/bootstrap-datetimepicker.min.js"></script>
