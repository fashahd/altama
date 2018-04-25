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
    <div class="section-empty no-paddings row-25">
        <div class="section-slider row-25 white">
            <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
                <ul class="slides">
                    <?=$dataimage?>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?=base_url()?>appsources/repo/milestone.png" alt="" />
                </div>
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
                <div class="col-lg-3">
                    <h4 class="title-front">Video Profile</h4>
					<a class="img-box" href="#">
						<img src="<?=base_url()?>appadmin/<?=$milestone?>" alt="">
					</a>
                </div>
                <div class="col-lg-9">
					<div class="col-lg-12">
					<h4 class="title-front">Berita Terkini</h4>
					</div>
					<div class="col-lg-4">
						<hr class="space visible-sm" />
						<a class="img-box" href="#">
							<img src="<?=base_url()?>appsources/images/gallery/image-1.jpg" alt="">
						</a>
						<h4 class="text-normal">Official research team</h4>
						Uaculis eu lacus nunc mi elit, vehicidatat atque nesciunt diula ut laoreet aue nesciunt dicta justoui variusamet justo nunc tempor, metus velocipiede marzian pertollio partiso.
						<hr class="space s" />
						<h4 class="title-read">Read More ....</h4>
					</div>
					<div class="col-lg-4">
						<hr class="space visible-sm" />
						<a class="img-box" href="#">
							<img src="<?=base_url()?>appsources/images/gallery/image-1.jpg" alt="">
						</a>
						<h4 class="text-normal">Official research team</h4>
						Uaculis eu lacus nunc mi elit, vehicidatat atque nesciunt diula ut laoreet aue nesciunt dicta justoui variusamet justo nunc tempor, metus velocipiede marzian pertollio partiso.
						<hr class="space s" />
						<h4 class="title-read">Read More ....</h4>
					</div>
					<div class="col-lg-4">
						<hr class="space visible-sm" />
						<a class="img-box" href="#">
							<img src="<?=base_url()?>appsources/images/gallery/image-1.jpg" alt="">
						</a>
						<h4 class="text-normal">Official research team</h4>
						Uaculis eu lacus nunc mi elit, vehicidatat atque nesciunt diula ut laoreet aue nesciunt dicta justoui variusamet justo nunc tempor, metus velocipiede marzian pertollio partiso.
						<hr class="space s" />
						<h4 class="title-read">Read More ....</h4>
					</div>
                </div>
			</div>
        </div>
    </div>