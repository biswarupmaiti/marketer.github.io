<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>

<head>
    <meta charset="<?php echo get_bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?><?php  if (is_front_page()) { echo "|"; bloginfo( 'description' ); } ?></title>

	<?php wp_head();  ?>
    <style>
        html{
            margin-top: 0px !important;
        }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
    
</head>
<body>
    
    <!--begin top-intro -->
    <div class="top-intro" id="top-intro">
    
        <!--begin container-->
        <div class="container"> 

            <!--begin row-->
            <div class="row">
            
                <!--begin col-sm-4-->
                <div class="col-sm-4 details-wrapper">

                    <!--begin header_social -->
                    <ul class="header_social">
                        <li>
                            <a href="#" class="twitter">
                                <i class="icon icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pinterest">
                                <i class="icon icon-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="facebook">
                                <i class="icon icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram">
                                <i class="icon icon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="skype">
                                <i class="icon icon-skype"></i>
                            </a>
                        </li>
                    </ul>
                    <!--end header_social -->

                </div>
                <!--end col-sm-4 -->
                 
                <!--begin col-sm-8-->
                <div class="col-sm-8">

                    <!--begin header_contact -->
                    <ul class="header_contact pull-right">
                        <li><i class="icon icon-call-phone"></i> 1-987-654-3210</li>
                        <li><i class="icon icon-pin-map"></i> 123, Regal Garden, London, UK</li>
                    </ul>
                    <!--end header_contact -->

                </div>
                <!--end col-sm-8 -->
                       
            </div>
            <!--end row -->
                    
        </div>
        <!--end container -->
                
    </div>
    <!--end top-intro -->

    <!--begin header -->
    <header class="header">

        <!-- begin navbar -->
        <div class="navbar yamm navbar-default">
          
            <!-- begin container -->
            <div class="container">

                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php  $logoimg=get_header_image(); ?>
                    <a href="<?php echo site_url();  ?>" class="navbar-brand brand scrool"><img src="<?php  echo $logoimg; ?>" alt="Logo"></a>
                </div>
                <!-- end navbar-header -->

                <!-- begin navbar -->
                <div id="navbar-collapse-02" class="navbar-collapse collapse">
                    
                    <!-- begin nav -->
                    <ul class="nav navbar-nav text-right">
                      <?php wp_nav_menu(array(
                            'theme_location'=>'primary-menu',
                            
                        ));  ?>
                        
                         
                
                    </ul>
                    <!-- end nav -->

                </div>
                <!-- end navbar -->

            </div>
            <!-- end container -->

        </div>
        <!-- end navbar -->
            
    </header>