<?=$this->layout->headersource($module)?>
<body>
    <div id="preloader"></div>
    <header class="fixed-top scroll-change" data-menu-anima="fade-in">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header" style="margin-right:50px;margin-top:-15px">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?=base_url()?>">
                            <img class="logo-default" src="<?=base_url()?>appsources/logo_altama.png" alt="logo" />
                            <img class="logo-retina" src="<?=base_url()?>appsources/logo_altama.png" alt="logo" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?=$this->menu->treemenu()?>
                        </ul>
                        <div class="nav navbar-nav navbar-right">
                            <div class="search-box-menu">
                                <div class="search-box scrolldown">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                </div>
                                <button type="button" class="btn btn-default btn-search">
                                    <span class="fa fa-search"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?=$this->load->view($pages)?>
    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
    <footer class="footer-base">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-center text-left">
                        <img width="200" src="<?=base_url()?>appsources/logo_altama.png" alt="" />
						<h5><b>PT. Altama Surya Anugerah</b></h5>
                        <p class="text-s">Jl. Bandengan Utara<br> No.85A, RT.3/RW.16,<br> Penjaringan, North Jakarta City<br> Jakarta 14440 Indonesia</p>
                        <p class="text-s">Telp :  (021) 6680180</p>
						<p><a>Open in Google Maps</a></p>
                    </div>
                    <div class="col-md-4 footer-left text-left">
                        <div class="row">
                            <div class="col-md-6 text-s">
                                <h3></h3>
                                <a href="#" class="text-s">Contactus</a><br />
                                <a href="#" class="text-s">Career</a><br />
                                <a href="#" class="text-s">News & Event</a><br />
                                <a href="#" class="text-s">Service Center</a><br />

                            </div>
                            <div class="col-md-6 text-s">
                                <h3></h3>
                                <a href="#" class="text-s">Tekiro</a><br />
                                <a href="#" class="text-s">RYU</a><br />
                                <a href="#" class="text-s">REXCO</a><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=$this->layout->headersourcejs()?>
    </footer>
</body>