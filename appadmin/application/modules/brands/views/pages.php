<?php
    $sql    = "SELECT * FROM company_data";
    $query  = $this->db->query($sql);
    $company_overview = "";
    $milestone_url = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $company_overview = $row->company_overview;
        $milestone_url = $row->milestone_url;
        $visi = $row->visi;
        $misi = $row->misi;
        $value = $row->value;
    }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?=$title?>
    </h1>
</section>

    <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?=$subtitle?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php if($type == "company-overview-and-milestone"){ ?>
                    <form role="form" method="post" id="formcompany">
                        <div class="box-body">
                            <div class="form-group">
                                <textarea class="form-control textarea" name="company"><?=$company_overview?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</submit>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <div class="box box-widget">
                            <div class="box-header with-border">
                                <div class="user-block">
                                    <h4>Milestone</h4>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main">
                                            <form id="uploadimage" method="post" enctype="multipart/form-data">
                                                <div id="image_preview"><img id="previewing" src="<?=base_url()?><?=$milestone_url?>" /></div>
                                                <hr id="line">
                                                <div id="selectImage">
                                                    <label>Select Your Image</label><br/>
                                                    <input type="file" name="file" id="file" required />
                                                    <button type="submit" class="submit" />Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if($type == "vision-mission-and-company-value"){ ?>
                    <form role="form" method="post" id="formvisimisi">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Visi</label>
                                <textarea class="form-control textarea" name="visi"><?=$visi?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Misi</label>
                                <textarea class="form-control textarea" name="misi"><?=$misi?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Value</label>
                                <textarea class="form-control textarea" name="value"><?=$value?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</submit>
                        </div>
                    </form>
                <?php } ?>
                <?php if($type == "award-and-recognition"){ ?>
                    <div class="box-body">					
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="4"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Awards</button></th>
                                </tr>
                                <tr>
                                    <!-- <th style="width: 10px"><input type="checkbox" id="selectall"/></th> -->
                                    <th>Award Image</th>
                                    <th>Award Name</th>
                                    <th>Award Category</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=$listaward?>
                            </tbody>
                        </table>
                    </div>
                    <!-- pagination-area-start -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-left">
                            <p>Showing <?=$from?> to <?=$to?> Of Total Product <?=$jml_record?></p>
                        </ul>
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?=$pagination?>
                        </ul>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form method="POST" enctype="multipart/form-data" id="addAwards">
                                <div class="modal-header">
                                    <span type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></span>
                                    <h4 class="modal-title">Add Awards</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Awards Title</label>
                                        <input type="text" required class="form-control" name="award_title" id="award_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Awards Category</label>
                                        <input type="text" required class="form-control" name="award_category" id="award_category">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image Awards</label>
                                        <input type="file" required name="award_file">

                                        <p class="help-block">Max Image Size 2MB.</p>
                                    </div>
                                    <div id="notif"></div>
                                </div>
                                <div class="modal-footer">
                                    <span class="btn btn-default pull-left" data-dismiss="modal">Close</span>
                                    <span id="btnaward"><button type="submit" class="btn btn-primary">Save changes</button></span>
                                </div>
                            </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php } ?>
                <?php if($type == "board-of-commisioner"){ ?>
                    <div class="box-body">					
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="4"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add BOC</button></th>
                                </tr>
                                <tr>
                                    <!-- <th style="width: 10px"><input type="checkbox" id="selectall"/></th> -->
                                    <th>BOC Image</th>
                                    <th>BOC Name</th>
                                    <th>BOC Category</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=$listbpc?>
                            </tbody>
                        </table>
                    </div>
                    <!-- pagination-area-start -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-left">
                            <p>Showing <?=$from?> to <?=$to?> Of Total Product <?=$jml_record?></p>
                        </ul>
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?=$pagination?>
                        </ul>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form method="POST" enctype="multipart/form-data" id="addBOC">
                                <div class="modal-header">
                                    <span type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></span>
                                    <h4 class="modal-title">Add BOC</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">BOC Name</label>
                                        <input type="text" required class="form-control" name="boc_name" id="boc_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">BOC Category</label>
                                        <input type="text" required class="form-control" name="boc_category" id="boc_category">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">BOC Image</label>
                                        <input type="file" required name="boc_file" accept="image/*">

                                        <p class="help-block">Max Image Size 2MB.</p>
                                    </div>
                                    <div id="notif"></div>
                                </div>
                                <div class="modal-footer">
                                    <span class="btn btn-default pull-left" data-dismiss="modal">Close</span>
                                    <span id="btnaward"><button type="submit" class="btn btn-primary">Save changes</button></span>
                                </div>
                            </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php } ?>
                <?php if($type == "board-of-director"){ ?>
                    <div class="box-body">					
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="4"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add BOC</button></th>
                                </tr>
                                <tr>
                                    <!-- <th style="width: 10px"><input type="checkbox" id="selectall"/></th> -->
                                    <th>BOD Image</th>
                                    <th>BOD Name</th>
                                    <th>BOD Category</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=$listbpc?>
                            </tbody>
                        </table>
                    </div>
                    <!-- pagination-area-start -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-left">
                            <p>Showing <?=$from?> to <?=$to?> Of Total Product <?=$jml_record?></p>
                        </ul>
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?=$pagination?>
                        </ul>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form method="POST" enctype="multipart/form-data" id="addBOD">
                                <div class="modal-header">
                                    <span type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></span>
                                    <h4 class="modal-title">Add BOD</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">BOD Name</label>
                                        <input type="text" required class="form-control" name="bod_name" id="bod_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">BOD Category</label>
                                        <input type="text" required class="form-control" name="bod_category" id="bod_category">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">BOD Image</label>
                                        <input type="file" required name="bod_file" accept="image/*">

                                        <p class="help-block">Max Image Size 2MB.</p>
                                    </div>
                                    <div id="notif"></div>
                                </div>
                                <div class="modal-footer">
                                    <span class="btn btn-default pull-left" data-dismiss="modal">Close</span>
                                    <span id="btnaward"><button type="submit" class="btn btn-primary">Save changes</button></span>
                                </div>
                            </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>