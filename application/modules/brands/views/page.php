<?php 
	$sql    = "SELECT * FROM banner where type='$module_id'";
	$query  = $this->db->query($sql);
	$image_url = "";
	if($query->num_rows()>0){
		$row = $query->row();
		$image_url = $row->image_url;
	}
	$sql    = "SELECT * FROM description where type='$module_id'";
	$query  = $this->db->query($sql);
	$description = "";
	if($query->num_rows()>0){
		$row = $query->row();
		$description = $row->description;
	}
	$keterangan = "";
	if($module_id == "power-tools"){
		$title = "Powertools";
	}
	if($module_id == "hand-tools"){
		$title = "Hand Tools";
	}
	if($module_id == "lubricants"){
		$title = "Lubricants";
	}
?>
<div class="section-empty no-paddings row-25">
    <div class="section-slider row-25 white">
        <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
            <ul class="slides">
                <li data-slider-anima="fade-left" data-time="1000">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('<?=base_url()."appadmin/".$image_url?>')">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
				<div id="column_iCycp" class="hc_column_cnt col-sm-12">
					<div class="row">
						<div class="col-md-12 hc_title_tag_cnt">
							<h1 id="rBIkI"><?=$title?></h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<div style="padding-left:15px;line-height:2.2">
								<?=$description?>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="section-bg-color bg-color" style="padding:50px 0 50px 0;">
	<div class="front">
		<div class="content">
			<div class="col-md-4">
				<h4 class="title-front"><span class="underline">Mo</span>st Popular</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="section-empty section-item text-center" style="width:100%; padding:30px; 100px; 30px;100px">
			<div class="slickslider">
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/1.png" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/2.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/3.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/4.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/5.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>