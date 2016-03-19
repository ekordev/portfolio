<?php $this->load->view('includes/page_head');?>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php $this->load->view('includes/top_head');?>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('includes/side_menu');?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Skills</h4>
                                <p class="text-muted page-title-alt">Skills Information!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-box">
                                    <h4>Skills</h4>
                                    <form action="<?php echo base_url()?>Resume/UploadEducation" method="post">
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName1">From</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" id="Name" name="From" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName1">To</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" id="Name" name="To" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName1">Title</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" id="Name" name="Title" type="text" placeholder="MS Computer Science">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName1">Description</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" id="Name" name="Desc" type="text" placeholder="University of Engineering and Technology">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1"></label>
                                            <div class="col-lg-6">
                                                <input type="submit" name="saveeducation" value="Save Education" class="btn btn-default">
                                                <input type="reset" value="Clear Form" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <!-- End #wizard-vertical -->
                            </div>
                            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>From</th>
                                <th>To</th>
                                <th>Title</th>
                                <th>Institute Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($Table)){ foreach($Table as $EachTable){?>
                            <tr>
                                <th><?php echo date("D M Y",strtotime($EachTable->from)); ?></th>
                                <th><?php echo date("D M Y",strtotime($EachTable->to)); ?></th>
                                <th><?php echo $EachTable->title; ?></th>
                                <th><?php echo $EachTable->name; ?></th>
                                <th><a href="<?php echo base_url();?>Resume/DeleteEduc/<?php echo $EachTable->id;?>"><i class="fa fa-trash"></i></a></th>
                            </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
               </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->
                
                <footer class="footer text-right">
                    2016 © PortFolio.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
<?php $this->load->view('includes/page_footer');?>
<script>
    $('textarea#textarea').maxlength({
                alwaysShow: true
            });
</script>