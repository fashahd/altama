<?php
	$sql    = "SELECT * FROM testimoni order by testimoni_id  desc";
	$query  = $this->db->query($sql);
	$datatesti = "";
	if($query->num_rows()>0){
		foreach($query->result() as $row){
			$datatesti .= ' 
			<div class="col-md-6" style="margin-bottom:60px">
				<div class="col-md-12">
					<div class="title-base text-left">
						<p>'.$row->position.'</p>
						<h2>'.$row->fullname.'</h2>
					</div>
					<p style="text-align:justify">
					<!-- <img src="<?php echo base_url()?>appsources/images/avatar.png" width="50"height="50"style="float:left" /> Teks postingan  -->
					<img width="220"height="220" style="float:left; margin-right:15px" src="'.base_url().'appsources/images/avatar.png" alt="" />
					'.$row->testimoni.'

					</p>
				</div>
			</div>
			';
		}
	}
	$sql    = "SELECT * FROM job order by job_id  desc";
	$query  = $this->db->query($sql);
	$dataJob = "";
	if($query->num_rows()>0){
		foreach($query->result() as $row){
			$dataJob .= ' 
			<div class="list-group-item career">
				<a href="#">'.$row->job_position.'</a>
				<div class="panel">
					<div class="inner">
						'.$row->job_requirement.'
					</div>
				</div>
			</div>
			';
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
            <div class="row">
                <div class="col-md-12 hc_text_block_cnt">
					<div id="XGlP2" class="text-center">
						Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Proin eget tortor risus. Praesent sapien massa.
					</div>
				</div>
				<div class="col-md-12 hc_space_cnt"><hr class="space xl    "  /></div>
					<h4 class="text-center" style="font-size:52pt;word-spacing: 30px;font-weight:900;color:#174894;margin-bottom:40px">
						<b>C A R A S I P</b>
					</h4>
					<h4 class="text-center" >CARASIP EXPLANATION</h4>
				</div>
				<div class="col-md-12 hc_separator_cnt"><hr class="default"></div>
            </div>
        </div>
    </div>
    <div class="section-empty section-item  no-paddings">
		<div class="container content">
			<div class="row">
				<?=$datatesti?>
			</div>
		</div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row ">
                <div class="col-md-8">
                    <div class="list-group accordion-list">
						<?=$dataJob?>
					</div>
                </div>
                <div class="col-md-4">
					<form id="formJob" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name *</label>
							<input required class="form-control" name="name" id="name"/>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input required class="form-control" name="phone" id="phone" />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input required class="form-control" name="email" id="email" />
						</div>
						<div class="form-group">
							<label>Position</label>
							<input class="form-control" name="position" id="position" />
						</div>
						<div class="form-group">
							<label>Attach Your CV</label>
							<input required type="file" name="attach_file" id="attach_file"/>
						</div>
						<div class="form-group">
							<label>Your Message</label>
							<textarea class="form-control" name="message" id="message"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-indigo">Send</button>
						</div>
					</form>
                </div>
			</div>
        </div>
    </div>