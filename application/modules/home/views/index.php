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
                <li data-slider-anima="fade-left" data-time="1000">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url(\''.base_url().'appadmin/'.$row->image_url.'\')">
                        </div>
                    </div>
                </li>
            ';
        }
    }

    $sql    = " SELECT * FROM news as a
    ORDER BY a.news_id desc limit 4";
    $query = $this->db->query($sql);
    $arraynews = array();
    if($query){
        foreach($query->result() as $row){
            $arraynews[$row->news_id] = array($row->news_id,$row->news_tittle_indo,$row->news_image,$row->news_created_date);
        }
    }
    $retlatest = "";
    $retnews = "";
    if(count($arraynews)>0){
        $lates_news = max($arraynews);
        $news_id_lates = $lates_news[0];
        $news_tittle_indo_lates = $lates_news[1];
        $news_image = $lates_news[2];
        $news_created_date = $lates_news[3];
        $retlatest = '              
            <div class="col-lg-6">
                <hr class="space visible-sm" />
                <a class="img-box" href="'.base_url().'news/read/'.$news_id_lates.'">
                    <img src="'.base_url().'appadmin/'.$news_image.'" alt="">
                </a>
                <h4 class="text-normal">'.$news_tittle_indo_lates.'</h4>
                <h6>'.date("d M Y", strtotime($news_created_date)).'</h6>
                <h3 class="title-read"><a href="'.base_url().'news/read/'.$news_id_lates.'">Read More ....</a></h3>
            </div>
        ';
    }
    if(count($arraynews)>1){
        foreach($arraynews as $row =>$val){
            list($news_idx,$news_tittle_indo_latesx,$news_imagex,$news_created_datex)=$val;
            if($news_idx != $news_id_lates){
                $retnews .= '
                <div class="col-lg-12">
                    <h4 class="text-normal"><a href="'.base_url().'news/read/'.$news_idx.'">'.$news_tittle_indo_latesx.'</a></h4>
                    <h6>'.date("d M Y", strtotime($news_created_datex)).'</h6>
                    <hr>
                </div>
                ';
            }
        }
    }
?>
    <div class="section-empty no-paddings row-21">
        <div class="section-slider row-25 white">
            <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
                <ul class="slides">
                    <?=$dataimage?>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-bg-color bg-color" style="padding:50px 0 50px 0;">
        <div class="front">
            <div class="content">
                <div class="col-md-4">
                    <h4 class="title-front"><span class="underline">Bu</span>siness Overview</h4>
                </div>
                <div class="col-md-8">
                    <p><?=$business_overview?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="section-empty section-item text-center" style="width:100%; padding:30px; 100px; 30px;100px">
                <div class="text-center">
                    <div class="col-md-4">
                        <a class="img-box" href="http://tekiro.com" target="_blank">
                            <img style="width:300px" src="<?=base_url()?>appsources/repo/tekiro.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-box" href="http://ryupowertools.com" target="_blank">
                            <img style="width:300px" src="<?=base_url()?>appsources/repo/ryu.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-box"href="http://rexco-solution.com" target="_blank">
                            <img style="width:300px" src="<?=base_url()?>appsources/repo/rexco.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row ">
                <div class="col-lg-4">
                    <h4 class="title-front">Video Profile</h4>
                    <video controls style="width:100%">
                        <source src="<?=base_url()?>appsources/repo/video.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>                
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <h4 class="title-front">Berita Terkini</h4>
                    </div>  
                    <?=$retlatest?>
                    <div class="col-lg-6">
                        <?=$retnews?>
                    </div>
                </div>
			</div>
        </div>
    </div>