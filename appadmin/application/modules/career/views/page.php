<?php
    $arrmedia = array(
        "job"  => "Job Vacancy",
        "testimoni" => "Testimoni"
    );
    $tabsmedia = "";
    foreach($arrmedia as $val => $ket){
        if($val == $type){
            $act = "class='active'";
        }else{
            $act = "";
        }
        $tabsmedia .= '<li '.$act.'><a href="'.base_url().'career/page/'.$val.'">'.$ket.'</a></li>';
    }
?>
<section class="content-header">
    <h1>
        <?=$title?>
    </h1>
</section>

    <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <?=$tabsmedia?>
                </ul>
                <div class="tab-content">
                    <?php if($type =="job"){
                        $sql 	= "SELECT * FROM job";
                        $query	= $this->db->query($sql);
                        $list = "";
                        if($query->num_rows()>0){
                            $no = 1;
                            foreach($query->result() as $row){
                                $list .= "
                                    <tr>
                                        <td><input type='checkbox' name='job_id' id='cat_$row->job_id' value='$row->job_id'/></td>
                                        <td>$no</td>
                                        <td>$row->job_position</td>
                                    </tr>
                                ";
                                $no++;
                            }
                        }        
                    ?>
                    <div class="tab-pane active" id="job">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Add Job Vacancy</h3>
                                    </div>
                                    <div class="box-body">
                                        <form id="addJob">
                                            <div class="row">
                                                <!-- time Picker -->
                                                <div class="form-group col-lg-6">
                                                    <div class="form-group">
                                                        <label>Position</label>
                                                        <input required  id="position" name="position" type="text" class="form-control" placeholder="ex : Graphic Designer">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label>Requirement</label>
                                                    <textarea class="textarea" id="requirement" name="requirement" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                    <!-- /.input group -->
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button class="btn btn-primary" type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                           
                            <div class="col-xs-6">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">List Job Vacancy</h3>

                                        <div class="box-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;text-align:right">						
                                                <span onclick="deletejob()" class="btn btn-danger"><i class="fa fa-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px"><input type="checkbox" id="selectall"/></th>
                                                    <th>#</th>
                                                    <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?=$list?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($type =="testimoni"){                        
                        $sql 	= "SELECT * FROM testimoni";
                        $query	= $this->db->query($sql);
                        $list = "";
                        if($query->num_rows()>0){
                            $no = 1;
                            foreach($query->result() as $row){
                                $list .= "
                                    <tr>
                                        <td><input type='checkbox' name='testimoni_id' id='cat_$row->testimoni_id' value='$row->testimoni_id'/></td>
                                        <td>$no</td>
                                        <td>$row->fullname</td>
                                        <td>$row->position</td>
                                        <td>".substr($row->testimoni,0,200)." .....</td>
                                    </tr>
                                ";
                                $no++;
                            }
                        }                            
                    ?>
                    <div class="tab-pane active" id="testimoni">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Add <?=$title?> Testimoni</h3>
                                    </div>
                                    <div class="box-body">
                                        <form id="addTesti">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Fullname</label>
                                                    <input required name="fullname" type="text" class="form-control pull-right" placeholder="ex : John Doe">
                                                    <!-- /.input group -->
                                                </div>
                                                <!-- time Picker -->
                                                <div class="form-group col-lg-6">
                                                    <div class="form-group">
                                                        <label>Position</label>
                                                        <input required  id="position" name="position" type="text" class="form-control" placeholder="ex : Graphic Designer">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label>Testimoni</label>
                                                    <textarea class="textarea" id="testimoni" name="testimoni" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                    <!-- /.input group -->
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button class="btn btn-primary" type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                           
                            <div class="col-xs-6">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">List <?=$title?> Testimoni</h3>

                                        <div class="box-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;text-align:right">						
                                                <span onclick="deletetesti()" class="btn btn-danger"><i class="fa fa-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px"><input type="checkbox" id="selectall"/></th>
                                                    <th>#</th>
                                                    <th>Fullname</th>
                                                    <th>Position</th>
                                                    <th>Testimoni</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?=$list?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>