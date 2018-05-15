<?php
	$menu_side = array("News"=>"NEWS", "Event"=>"EVENT");
    $optsidePage = "";
    if($menu_side){
        foreach($menu_side as $key => $title){
            if($key == $module_id){
                $active = "active";
            }else{
                $active = "";
            }
            $optsidePage .= '<a class="list-group-item '.$active.'" href="'.base_url().'news/index/'.$key.'">'.$title.'</a>';
        }
    }
?>
<div class="section-empty">
    <div class="container content">
        <?php if($module_id == "News"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="maso-list maso-30 list-sm-6">
							<div class="navbar navbar-inner">
								<div class="navbar-toggle"><i class="fa fa-bars"></i><span>MENU</span><i class="fa fa-angle-down"></i></div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav over inner ms-minimal maso-filters">
										<li class="active"><a data-filter="maso-item">Latest News</a></li>
										<li><a data-filter="cat1">Press Release</a></li>
										<li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="maso-box row">
								<div data-sort="2" class="maso-item col-md-12 cat1 cat3">
									<div class="advs-box advs-box-side" data-anima="fade-left" data-trigger="hover">
										<div class="row">
											<div class="col-md-4">
												<div class="img-box"><img src="<?=base_url()?>appsources/images/gallery/image-1.jpg" alt=""></div>
											</div>
											<div class="col-md-8">
												<h3>Virtual Reality Heads</h3>
												<hr class="anima">
												<p>
													Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin odio suspendisse, nostra. Cumque facilis assumenda
												</p>
												<a class="btn-text" href="#">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div data-sort="4" class="maso-item col-md-12 cat2 cat3">
									<div class="advs-box advs-box-side" data-anima="fade-left" data-trigger="hover">
										<div class="row">
											<div class="col-md-4">
												<div class="img-box"><img src="<?=base_url()?>appsources/images/gallery/image-2.jpg" alt=""></div>
											</div>
											<div class="col-md-8">
												<h3>Yellow Business design</h3>
												<hr class="anima">
												<p>
													Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin odio suspendisse, nostra. Cumque facilis assumenda
												</p>
												<a class="btn-text" href="#">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
				<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
				<div class="pagination-inner list-nav">
					<ul class="pagination-lg hide-first-last pagination-grid pagination" data-page-items="6" data-options="scrollTop:true,prev:<i class='fa fa-angle-left'></i> Prev,next:Next<i class='fa fa-angle-right'></i>">
					<li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i> <span>First</span></a></li><li class="prev disabled"><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li><li class="page active"><a href="#">1</a></li><li class="page"><a href="#">2</a></li><li class="next"><a href="#">Next<i class="fa fa-angle-right"></i></a></li><li class="last"><a href="#"><span>Last</span> <i class="fa fa-angle-double-right"></i></a></li></ul>
				</div>
			</div>
        </div>
        <?php } ?>
        <?php if($module_id == "Event"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
				<div class="maso-list gallery">
					<div class="navbar navbar-inner">
						<div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav over ms-minimal inner maso-filters">
								<li class="current-active active"><a data-filter="maso-item">Kegiatan Internal</a></li>
								<li><a data-filter="cat1">Kegiatan Eksternal</a></li>
								<li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="maso-box row" data-lightbox-anima="fade-top">
						<div data-sort="1" class="maso-item col-md-4 cat1 cat2 cat4">
							<a class="img-box" href="<?=base_url()?>appsources/images/gallery/image-13.jpg" data-lightbox-anima="fade-top">
								<img src="<?=base_url()?>appsources/images/gallery/image-13.jpg" alt="" />
							</a>
						</div>
						<div data-sort="1" class="maso-item col-md-4 cat2 cat4">
							<a class="img-box" href="<?=base_url()?>appsources/images/gallery/image-13.jpg" data-lightbox-anima="fade-top">
								<img src="<?=base_url()?>appsources/images/gallery/image-14.jpg" alt="" />
							</a>
						</div>
						<div data-sort="1" class="maso-item col-md-4 cat1 cat2">
							<a class="img-box" href="<?=base_url()?>appsources/images/gallery/image-13.jpg" data-lightbox-anima="fade-top">
								<img src="<?=base_url()?>appsources/images/gallery/image-16.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
				<div class="pagination-inner list-nav">
					<ul class="pagination-lg hide-first-last pagination-grid pagination" data-page-items="6" data-options="scrollTop:true,prev:<i class='fa fa-angle-left'></i> Prev,next:Next<i class='fa fa-angle-right'></i>">
						<li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i> <span>First</span></a></li>
						<li class="prev disabled"><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
						<li class="page active"><a href="#">1</a></li>
						<li class="page"><a href="#">2</a></li>
						<li class="next"><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
						<li class="last"><a href="#"><span>Last</span> <i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>