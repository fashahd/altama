<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Layout {
        
    
        public function content($view,$data = null){
            $CI =   &get_instance();
            $data["pages"]  = $view;
            $CI->load->view("templates/content",$data);
        }

        public function headersource($module = null){
            $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $ret = '
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="x-ua-compatible" content="ie=edge">
                    <title>Altama | '.$module.'</title>
                    <meta name="title" content="Altama | '.$module.'">
                    <meta name="description" content="">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="canonical" href="'.$actual_link.'" />

            
                    <script src="'.base_url().'appsources/HTWF/scripts/jquery.min.js"></script>
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/scripts/bootstrap/css/bootstrap.css">
                    <script src="'.base_url().'appsources/HTWF/scripts/script.js"></script>
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/style.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/css/font-awesome.min.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/css/content-box.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/css/image-box.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/css/animations.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/css/components.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/scripts/flexslider/flexslider.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/scripts/magnific-popup.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/scripts/php/contact-form.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/HTWF/scripts/social.stream.css">
                    <link rel="stylesheet" href="'.base_url().'appsources/skin.css">

					<link rel="stylesheet" type="text/css" href="'.base_url().'appsources/HTWF/slick/slick.css">
					<link rel="stylesheet" type="text/css" href="'.base_url().'appsources/HTWF/slick/slick-theme.css"/>
                    <link rel="icon" href="'.base_url().'appsources/favicon.png">
                    <style type="text/css">
                    @font-face{
                        font-family: "Myriad-Pro";  
                        src: url('.base_url().'appsources/myriadpro/MyriadPro-Regular.otf) format("truetype");
                    }
                    body{ font-family:Myriad-Pro; }
                    </style>
                </head>
            ';

            return $ret;
        }

        function headersourcejs(){
            $ret = '
            <link rel="stylesheet" href="'.base_url().'appsources/HTWF/scripts/font-awesome/css/font-awesome.css">
            <script async src="'.base_url().'appsources/HTWF/scripts/bootstrap/js/bootstrap.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/imagesloaded.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/parallax.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/flexslider/jquery.flexslider-min.js"></script>
            <script async src="'.base_url().'appsources/HTWF/scripts/isotope.min.js"></script>
            <script async src="'.base_url().'appsources/HTWF/scripts/php/contact-form.js"></script>
            <script async src="'.base_url().'appsources/HTWF/scripts/jquery.progress-counter.js"></script>
            <script async src="'.base_url().'appsources/HTWF/scripts/jquery.tab-accordion.js"></script>
            <script async src="'.base_url().'appsources/HTWF/scripts/bootstrap/js/bootstrap.popover.min.js"></script>
            <script async src="'.base_url().'appsources/HTWF/scripts/jquery.magnific-popup.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/social.stream.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/jquery.slimscroll.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/smooth.scroll.min.js"></script>
			<script src="'.base_url().'appsources/HTWF/slick/slick.min.js"></script>
            <script src="'.base_url().'appsources/HTWF/scripts/custom.js"></script>
            ';
            return $ret;
        }
    }
?>