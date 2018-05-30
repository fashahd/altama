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
        <?php if($module_id == "News"){ 
			$arrnews = array(
				"press_release" => "Press Release",
				"news" => "Latest News"
			);
			$tabnews = '';
			foreach($arrnews as $rownews => $valnews){
				if($rownews == $type){
					$slct = "class='active'";
				}else{
					$slct = "";
				}
				$tabnews .= '<li '.$slct.'><a href="'.base_url().'news/index/News/'.$rownews.'">'.$valnews.'</a></li>';
			}
		?>
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
										<?=$tabnews?>
									</ul>
								</div>
							</div>
							<div class="maso-box row">
								<?=$listdata?>
							</div>
						</div>
                    </div>
                </div>
				<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
				<div class="pagination-inner list-nav">
					<?=$pagination?>
				</div>
			</div>
        </div>
        <?php } ?>
        <?php if($module_id == "Event"){
			$arrnews = array(
				"external" => "Eksternal",
				"internal" => "Internal"
			);
			$tabnews = '';
			foreach($arrnews as $rownews => $valnews){
				if($rownews == $type){
					$slct = "class='active'";
				}else{
					$slct = "";
				}
				$tabnews .= '<li '.$slct.'><a href="'.base_url().'news/index/Event/'.$rownews.'">'.$valnews.'</a></li>';
			}	
		?>
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
								<?=$tabnews?>
							</ul>
						</div>
					</div>
					<div class="text-center">
                		<div class="row">
							<?=$listdata?>
						</div>
					</div>
				</div>
				<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
				<div class="pagination-inner list-nav">
					<?=$pagination?>
				</div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>