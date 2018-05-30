<?php
    $sql    = "SELECT * FROM banner where type='$type'";
    $query  = $this->db->query($sql);
    $image_url = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $image_url = $row->image_url;
    }
    $sql    = "SELECT * FROM description where type='$type'";
    $query  = $this->db->query($sql);
    $description = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $description = $row->description;
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
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main">
                                <form id="uploadbanner" method="post" enctype="multipart/form-data">
                                    <div id="image_preview"><img id="previewing" src="<?=base_url()?><?=$image_url?>" /></div>
                                    <hr id="line">
                                    <div id="selectImage">
                                        <label>Select Your Banner</label><br/>
                                        <input type="file" name="filebanner" id="filebanner" required />
                                        <input type="hidden" name="category" id="category" value="<?=$type?>" />
                                        <button type="submit" class="submit" />Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="message"></div>
                <form role="form" method="post" id="formdescription">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control textarea" name="description"><?=$description?></textarea>
                            <input type="hidden" name="category" id="category" value="<?=$type?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</submit>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>