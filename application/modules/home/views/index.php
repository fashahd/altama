<?php
    $sql    = "SELECT * FROM company_data";
    $query  = $this->db->query($sql);
    $milestone = "";
    if($query->num_rows()>0){
        $row = $query->row();
        $milestone = $row->milestone_url;
    }
    $sql    = "SELECT * FROM banner";
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
                    <p>PT. Altama Surya Anugerah memfokuskan untuk terjun di dunia alat - alat serta perkakas konstruksi seperti Handtools, Powertools dan Lubricant.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="section-empty section-item text-center" style="width:100%; padding:30px; 100px; 30px;100px">
                <div class="text-center">
                    <div class="col-md-4">
                        <a class="img-box" href="#">
                            <img style="width:300px" src="<?=base_url()?>appsources/repo/tekiro.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-box" href="#">
                            <img style="width:300px" src="<?=base_url()?>appsources/repo/ryu.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-box" href="#">
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
                    <div class="col-lg-6">
                        <hr class="space visible-sm" />
                        <a class="img-box" href="#">
                            <img src="<?=base_url()?>appsources/images/gallery/image-1.jpg" alt="">
                        </a>
                        <h2 class="text-normal">Official research team</h2>
                        <h6>27 April 2018</h6>
                        <h3 class="title-read">Read More ....</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <h2 class="text-normal">Official research team</h2>
                            <h6>27 April 2018</h6>
                            <hr>
                        </div>
                        <div class="col-lg-12">
                            <h2 class="text-normal">Official research team</h2>
                            <h6>27 April 2018</h6>
                            <hr>
                        </div>
                        <div class="col-lg-12">
                            <h2 class="text-normal">Official research team</h2>
                            <h6>27 April 2018</h6>
                            <hr>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>