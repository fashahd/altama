<?php
    $sql    = "SELECT * FROM company_data";
    $query  = $this->db->query($sql);
    $company_overview = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $company_overview = $row->company_overview;
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
            </div>
        </div>
    </div>
</div>