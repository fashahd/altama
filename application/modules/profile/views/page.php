<?php
$sql    = "SELECT * FROM company_data";
$query  = $this->db->query($sql);
$milestone = "";
$company_overview = "";
$visi = "";
$misi = "";
$value = "";
if($query->num_rows()>0){
	$row = $query->row();
	$milestone = $row->milestone_url;
	$company_overview = $row->company_overview;
	$visi = $row->visi;
	$misi = $row->misi;
	$value = $row->value;
}
    $optsidePage = "";
    if($menu_side){
        foreach($menu_side as $key){
            if($key->menu_id == $module_id){
                $active = "active";
            }else{
                $active = "";
            }
            $optsidePage .= '<a class="list-group-item '.$active.'" href="'.base_url().'profile/page/'.$key->menu_id.'">'.$key->menu_title.'</a>';
        }
    }
?>
<div class="section-empty no-paddings row-25">
    <div class="section-slider row-25 white">
        <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
            <ul class="slides">
                <li data-slider-anima="fade-left" data-time="1000">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('<?=base_url()?>appsources/banner/banner.jpeg')">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <?php if($module_id == "company-overview-and-milestone"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt"><h1 id="rBIkI">Company Overview</h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<div style="padding-left:15px;line-height:2.5;text-align:justify">
								<?=$company_overview?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt"><h1 id="rBIkI">Milestone</h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<img src="<?=base_url()."appadmin/".$milestone?>" alt="" /><br><br><br>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($module_id == "vision-mission-and-company-value"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Vision</h1>
                                <div style="padding-left:15px;line-height:2.2">
									<?=$visi?>
                                </div>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Mision</h1>
                                <?=$misi?>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Value</h1>
								<?=$value?>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($module_id == "award-and-recognition"){ 
			$sql    = " SELECT * FROM awards as a
			ORDER BY a.id asc";
			$query  = $this->db->query($sql);
			$retaward = "";
			if($query->num_rows()>0){
				foreach($query->result() as $row){
					$retaward .= '						
						<div class="col-md-4">
							<div class="img-box adv-img adv-img-down-text">
								<a class="img-box i-center" href="#">
									<img alt="" src="'.base_url().'appadmin/'.$row->award_image.'">
								</a>
								<div class="caption-bottom">
									<h5><a href="#">Top Brand Award 2014</a></h5>
									<p>Category Hand Tools</p>
								</div>
							</div>
						</div>
					';
				}
			}
		?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Award</h1>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
									<div class="text-center">
										<div class="row">
											<?=$retaward?>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($module_id == "board-of-commisioner"){ 
            $sql    = " SELECT * FROM boc as a
			ORDER BY a.boc_id asc";
			$query  = $this->db->query($sql);
			$retboc = "";
			if($query->num_rows()>0){
				foreach($query->result() as $row){
					$retboc .= '                        
                        <div class="col-md-4 ">
                            <div class="advs-box niche-box-team">
                                <a class="img-box">
                                    <img class="anima" src="'.base_url().'appadmin/'.$row->boc_image.'" alt="" />
                                </a>
                                <div class="content-box">
                                    <h2>'.$row->boc_name.'</h2>
                                    <h4>'.$row->boc_category.'</h4>
                                    <hr class="e" />
                                    <div class="btn-group social-group">
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                    <p>'.$row->boc_keterangan.'</p>
                                </div>
                            </div>
                        </div>
					';
				}
			}    
        ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Board of Commisioner</h1>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
									<div class="text-center">
										<div class="row">
                                            <?=$retboc?>
											<!-- <div class="col-md-4">
												<div class="img-box adv-img adv-img-down-text">
													<a class="img-box i-center" href="#">
														<img alt="" src="<?=base_url()?>appsources/boc/antonius-s.jpg">
													</a>
													<div class="caption-bottom">
														<h5><a href="#">ANTONIUS SUTJIADI</a></h5>
													</div>
												</div>
											</div> -->
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>        
        <?php if($module_id == "board-of-director"){ 
            $sql    = " SELECT * FROM bod as a
			ORDER BY a.bod_id asc";
			$query  = $this->db->query($sql);
			$retbod = "";
			if($query->num_rows()>0){
				foreach($query->result() as $row){
					$retbod .= '                        
                        <div class="col-md-4 ">
                            <div class="advs-box niche-box-team">
                                <a class="img-box">
                                    <img class="anima" src="'.base_url().'appadmin/'.$row->bod_image.'" alt="" />
                                </a>
                                <div class="content-box">
                                    <h2>'.$row->bod_name.'</h2>
                                    <h4>'.$row->bod_category.'</h4>
                                    <hr class="e" />
                                    <div class="btn-group social-group">
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                    <p'.$row->bod_keterangan.'</p>
                                </div>
                            </div>
                        </div>
					';
				}
			}    
        ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Board of Director</h1>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
									<div class="text-center">
										<div class="row">
                                            <?=$retbod?>
											<!-- <div class="col-md-4">
												<div class="img-box adv-img adv-img-down-text">
													<a class="img-box i-center" href="#">
														<img alt="" src="<?=base_url()?>appsources/bod/Oscar-S.jpg">
													</a>
													<div class="caption-bottom">
														<h5><a href="#">Oscar S</a></h5>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="img-box adv-img adv-img-down-text">
													<a class="img-box i-center" href="#">
														<img alt="" src="<?=base_url()?>appsources/bod/Stephanus-S.jpg">
													</a>
													<div class="caption-bottom">
														<h5><a href="#">Stephanus S</a></h5>
													</div>
												</div>
											</div> -->
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>