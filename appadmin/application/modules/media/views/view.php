<?php
    $sql 	= "SELECT * FROM news where news_id ='$news_id'";
    $query	= $this->db->query($sql);
    $list = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $news_tittle_indo = $row->news_tittle_indo;
        $news_tittle = $row->news_tittle;
        $news_content_indo = $row->news_content_indo;
        $news_content = $row->news_content;
        $news_category = $row->news_category;
    }
    $arrcategory = array(
        "" => "-- SELECT CATEGORY --",
        "news" => "News",
        "press_release" => "Press Release"
    );

    $optcategory = "";
    foreach($arrcategory as $row => $value){
        if($row == $news_category){
            $slct = "selected";
        }else{
            $slct = "";
        }
        $optcategory .='<option '.$slct.' value="'.$row.'">'.$value.'</option>';
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
                <div class="tab-content">
                    <div class="tab-pane active" id="news">
                        <h3 class="box-title">Edit News</h3>
                        <form id="updateNews">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label>News Title (Indonesia):</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <input name="news_indo" type="text" class="form-control pull-right" value="<?=$news_tittle_indo?>">
                                        <input type="hidden" name="news_id" id="news_id" value="<?=$news_id?>"/>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>News Title (English) :</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <input name="news" type="text" class="form-control pull-right" value="<?=$news_tittle?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>News Image :</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </div>
                                        <input name="image_upload_file" type="file" class="form-control pull-right" placeholder="News / Event Image">
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
                                            <?=$optcategory?>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>News Content (Indonesia)</label>
                                    <textarea name="content_indo" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$news_content_indo?></textarea>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>News Content (English)</label>
                                    <textarea name="content" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$news_content?></textarea>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-lg-6">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <a href="<?=base_url()?>media/front/" class="btn btn-default">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
          <!-- nav-tabs-custom -->
        </div>
    </div>
</section>