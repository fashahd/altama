<?php
	$sql    = " SELECT * FROM news as a
	WHERE news_id = '$news_id'";
	$query 	= $this->db->query($sql);
	if($query->num_rows()>0){
		$row = $query->row();
		$news_image = $row->news_image;
		$news_title = $row->news_tittle_indo;
		$news_created_date = $row->news_created_date;
		$news_content_indo = $row->news_content_indo;
	}
	$sql    = " SELECT * FROM news as a
				ORDER BY a.news_id desc
				LIMIT 4";
	$query  = $this->db->query($sql);
	$ret = "";
	if($query->num_rows()>0){
		foreach($query->result() as $row){
			$titik = "";
			if (strlen($row->news_content_indo) > 500){
				$titik = '...';
			}
			$ret .= '
				<div class="list-group-item latest-post-list">
					<div class="row">
						<div class="col-md-4">
							<a class="img-box circle">
								<img alt="Post thumb" src="'.base_url().'appadmin/'.$row->news_image.'">
							</a>
						</div>
						<div class="col-md-8">
							<a href="'.base_url().'news/read/'.$row->news_id.'">
								<h5>'.$row->news_tittle_indo.'</h5>
							</a>
							<div class="tag-row icon-row"><span><i class="fa fa-calendar"></i>'.date("d M Y", strtotime($row->news_created_date)).'</span></div>
						</div>
					</div>
				</div>
			';
		}
	}
?>
<div class="header-title overlay-container  white ken-burn" data-parallax="scroll" data-natural-height="650" data-natural-width="1920" data-position="top" data-image-src="<?=base_url()?>appsources/banner/news_wallpaper.jpg" data-sub-height="">
	<div class="overlay-content overlaybox">
		<!-- <div class="container">
			<div class="title-base">
				<hr class="anima" />
				<h1>About us</h1>
				<p>We must let go of the life we have planned, so as to accept the one that is waiting for us.</p>
			</div>
		</div> -->
	</div>
</div>
<div id="section_5ZtkF" class="section-item section-empty"  style="">
    <div class="content container" style="">
    	<div class="row ">
       	 	<div id="column_uZ0RM" class="hc_column_cnt col-md-8  col-sm-12  " style="" >
    			<div class="row">
					<div class="col-md-12 hc_pt_grid_list_cnt">
						<div class="grid-list     one-row-list" style="">
    						<div class="grid-box row" style="margin: -30px; width: calc(100% + 60px)">
        						<div class="grid-item col-md-12 "  style='padding:30px'>
									<div class="advs-box advs-box-top-icon-img niche-box-post  ">
										<div class="block-infos">
											<div class="block-data">
												<p class="bd-day"><?=date("d", strtotime($news_created_date))?></p>
												<p class="bd-month"><?=date("m Y", strtotime($news_created_date))?></p>
											</div>
										</div>
										<a class="img-box" href="http://themes.framework-y.com/yellowbusiness/blog-post-3/">
											<img alt="" src="<?=base_url()?>appadmin/<?=$news_image?>" />
										</a>
										<div class="advs-box-content">
											<h3>
												<a href="http://themes.framework-y.com/yellowbusiness/blog-post-3/" class="text-l">
													<?=$news_title?>
												</a>
											</h3>
											<div class="tag-row icon-row">
												<span><i class="fa fa-calendar"></i><a> <?=date("d m Y", strtotime($news_created_date))?></a></span></span>
											</div>
											<?=$news_content_indo?>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div id="column_H98jZ" class="hc_column_cnt col-md-4  boxed-inverse col-sm-12  shadow-2" style="" >
					<div class="row">
						<div class="list-group list-blog">
							<p class="list-group-item active">Latest News</p>
							<?=$ret?>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>