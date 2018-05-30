<?php
    $arrmedia = array(
        "news"  => "News",
        "event" => "Events"
    );
    $tabsmedia = "";
    foreach($arrmedia as $val => $ket){
        if($val == $type){
            $act = "class='active'";
        }else{
            $act = "";
        }
        $tabsmedia .= '<li '.$act.'><a href="'.base_url().'media/front/'.$val.'">'.$ket.'</a></li>';
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
                    <?php if($type =="news"){?>
                    <div class="tab-pane active" id="news">
                        <h3 class="box-title">Add News</h3>
                        <form id="addNews">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label>News Title (Indonesia):</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <input name="news_indo" type="text" class="form-control pull-right" placeholder="News / Event Title">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>News Title (English) :</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <input name="news" type="text" class="form-control pull-right" placeholder="News / Event Title">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>News Image :</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </div>
                                        <input required name="image_upload_file" type="file" class="form-control pull-right" placeholder="News / Event Image">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>News Category :</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <select required name="category" class="form-control pull-right">
                                            <option value="">-- SELECT CATEGORY --</option>
                                            <option value="news">News</option>
                                            <option value="press_release">Press Release</option>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>News Content (Indonesia)</label>
                                    <textarea name="content_indo" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>News Content (English)</label>
                                    <textarea name="content" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-6">
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                        <?php
                            $sql 	= "SELECT * FROM news order by news_id desc";
                            $query	= $this->db->query($sql);
                            $list = "";
                            if($query->num_rows()>0){
                                $no = 1;
                                foreach($query->result() as $row){
                                    $list .= "
                                        <tr>
                                            <td><input type='checkbox' name='news_id' id='cat_$row->news_id' value='$row->news_id'/></td>
                                            <td>$no</td>
                                            <td>$row->news_tittle_indo</td>
                                            <td>$row->news_category</td>
                                            <td>".date("l, d M Y", strtotime($row->news_created_date))."</td>
                                            <td><a class='btn btn-primary' href='".base_url()."media/view/$row->news_id'>View</a></td>
                                        </tr>
                                    ";
                                    $no++;
                                }
                            }
                        ?>
                        <div class="row">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List News </h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;text-align:right">						
                                            <span onclick="deleteevent()" class="btn btn-danger"><i class="fa fa-trash"></i></span>
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
                                                <th>News Title</th>
                                                <th>News Category</th>
                                                <th>Created Date</th>
                                                <th></th>
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
                    <?php }  ?>
                    <?php if($type =="event"){
                        $sql    = "SELECT * FROM events order by event_id  desc";
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
                                                <img class="img-responsive pad" src="'.base_url().''.$row->event_image.'" alt="Photo">
                                                <p>'.$row->event_title.'</p>
                                                <p><button class="btn btn-danger" onclick="deleteeventimage(\''.$row->event_id.'\')"><i class="fa fa-trash"></i></button></p>
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
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="event">
                            <div class="box-header with-border">
                                <div class="user-block">
                                    <h4>Event</h4>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Event</button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?=$dataimage?>
                                </div>
                            </div>
                        </div>                        
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="addevent" method="post" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Add Events</h4>
                                        </div>
                                        <div class="modal-body">                   
                                            <div class="form-group">
                                                <label>Event Title</label>
                                                <input class="form-control" type="text" name="title" id="title" />
                                            </div>                    
                                            <div class="form-group">
                                                <label>Upload Image</label>
                                                <input required type="file" name="imageslider" accept="image/*"/>
                                            </div>                   
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" id="description" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>                 
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value="external">Kegiatan External</option>
                                                    <option value="internal">Kegiatan Internal</option>
                                                </select>
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
                    <?php }  ?>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
          <!-- nav-tabs-custom -->
        </div>
    </div>
</section>