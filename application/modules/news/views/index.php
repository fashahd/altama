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
        <?php if($module_id == "News"){ ?>
        <div class="row">
            <div class="col-md-3 widget no-paddings">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12"   style="margin-left:45px;" >
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">News</h1></div>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                                <p style="padding-left:15px;line-height:2.2">
                                Bapak Antoni Sutjiadi adalah sosok jenius yang ada dibalik kesuksesan PT. Altama Surya Arsa. Dengan ketekunan serta kejeliannya melihat peluang bisnis, mengantarkan PT. Altama Surya Arsa menjadi sebuah perusahaan terkemuka dan terdepan dalam menyediakan alat teknik bermutu dan terjamin kualitasnya. Bapak Antonius Sutjiadi mengawali bisnis di dunia teknik dengan mendirikan CV. Sumber Daya. Sebuah CV yang memiliki divisi-divisi penjualan seperti divisi teknik dan bangunan, divisi mainan, dan divisi spare parts. Divisi ini men-supply bahan atau produk yang diperlukan dalam proses suatu pabrik. Seiring perkembangannya yang melaju pesat, divisi tersebut akhirnya dipisahkan untuk berdiri sendiri sebagai perusahaan yang mandiri agar mampu mengakomodasi perkembangan aktivitas bisnisnya. Pada Januari 1997, para pemegang saham mendirikan PT. Altama Surya Anugerah yang berkonsentrasi pada penjualan produk – produk berkualitas tinggi dalam rangka memenuhi kepuasan pelanggan. PT Altama Surya Anugerah berkonsentrasi pada penjualan produk Handtools, Powertools, Lubricant, Epoxy, dan Welding Equipment  yang berkualitas tinggi.
    Oscar Andrew Sutjiadi adalah putra ke-3 dari Bapak Antonius Sutjiadi. Seperti pepatah mengatakan bahwa buah tak pernah jatuh jauh dari pohonnya. Talenta berbisnis seperti mendarah daging ke dalam diri beliau. Pada krisis moneter 1998, melalui tangan dinginnya, PT Altama Surya Anugerah yang baru berumur 1 tahun mampu tetap bertahan dan berdiri kokoh serta menciptakan inovasi dan strategi yang mumpuni sehingga menjadikan PT Altama Surya Anugerah menjadi perusahaan ternama di bidang teknik.
    PT. Atama Surya Anugerah yang merupakan bagian dari Sumber Daya Holding mengalami pertumbuhan sangat cepat, dengan diawali memiliki belasan karyawan kini telah memiliki ratusan karyawan yang bekerja secara professional. Konsistensi dan nilai-nilai yang tertanam di karyawan merupakan faktor penting menjadikan besarnya perusahaan. Sikap kekeluargaan dan rasa memiliki yang tertanam pada tiap diri karyawan, mewujudkan saling terintegrasi untuk melakukan perbaikan terus menerus demi visi perusahaan Yaitu: “Menjadi perusahaan marketing terdepan di Indonesia yang bersinergi dengan mitra kerja dalam mendistribusikan product hardware ternama dan berkualitas sesuai dengan kebutuhan pasar”
    Pengembangan dalam system manajemen memberikan bentuk nyata perbaikan internal untuk menjawab kebutuhan pasar, mulai dari system Marketing (seperti: ALTAMA SUMMIT ), system ERP, system HR (seperti: Sunfish ), system Logistics (seperti: Warehouse Management System), sampai system IT (seperti: Business Intelligent) membuahkan kebanggaan dengan menjadi pemimpin pasar di bidang teknik dan menyabet penghargaan TOP BRAND product TEKIRO dalam 3 tahun berturut-turut ditahun 2014 sampai 2016.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 widget paddings">
                <div class="list-group list-blog">
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12"  style="margin-left:90px;">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Milestone</h1></div>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                                <img src="<?=base_url()?>appsources/repo/milestone.png" alt="" /><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($module_id == "Event"){ ?>
        <div class="row">
            <div class="col-md-3 widget no-paddings">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12"   style="margin-left:45px;margin-bottom:30px" >
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Event</h1>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                                <p style="padding-left:15px;line-height:2.2">
                                Menjadi perusahaan marketing terdepan di Indonesia yang bersinergi dengan mitra kerja dalam mendistribusikan produk hardware ternama dan berkualitas sesuai dengan kebutuhan pasar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12"   style="margin-left:45px;" >
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Mision</h1>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                                <ul>
									<li>Inovasi Marketing Strategy.</li>
									<li>Keuntungan Jangka Panjang bagi Karyawan, Customer, Supplier dan Pemilik Perusahaan.</li>
									<li>Distribusi Product Tools, Machinery, Lubricant, Epoxy dan Powertools di Pasar hardware Modern dan Automotive secara Merata dan Akurat, Tepat Waktu untuk mencapai kepuasan pelanggan.</li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12"   style="margin-left:45px;" >
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h1 id="rBIkI">Value</h1>
                                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
								<p>Lima sikap dasar yang melandasi pribadi dan sikap melayani dari seluruh karyawan PT Altama Surya Anugerah untuk menuju Visi dan Misi Perusahaan atau sering disingkat dengan CaRaSIP, adalah:</p>
                                <ul>
									<li>Cara Kerja Profesional</li>
									<li>Rasa Memiliki</li>
									<li>Sikap Kekeluargaan</li>
									<li>Integrasi</li>
									<li>Perbaikan Terus Menerus</li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>