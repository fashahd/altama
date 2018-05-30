<?php
    $sql    = "SELECT * FROM company_data";
    $query  = $this->db->query($sql);
    $business_overview = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $business_overview = $row->business_overview;
    }
    $sql    = "SELECT * FROM banner where type='home'";
    $query  = $this->db->query($sql);
    $dataimage = "";
    if($query->num_rows()>0){
        foreach($query->result() as $row){
            $dataimage .= '               
                <div class="col-md-4">
                    <!-- Box Comment -->
                    <div class="box box-widget">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <img class="img-responsive pad" src="'.base_url().''.$row->image_url.'" alt="Photo">

                            <p><button class="btn btn-danger" onclick="deleteslider(\''.$row->id.'\')"><i class="fa fa-trash"></i></button></p>
                        </div>
                        <!-- /.box-footer -->
                        <div class="box-footer">
                        </div>
                    </div>
                </div>
            ';
        }
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
        <div class="col-md-12">
            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <h4>Home Slider</h4>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Image Slider</button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?=$dataimage?>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Business Overview</h2>                        
                            <form role="form" method="post" id="formbusiness">
                                <div class="box-body">
                                    <div class="form-group">
                                        <textarea class="form-control textarea" name="business"><?=$business_overview?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</submit>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addslider" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input required type="file" name="imageslider" />
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="btn btn-default pull-left" data-dismiss="modal">Close</span>
                    <div id="buttondownload">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <div id="notif"></div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>