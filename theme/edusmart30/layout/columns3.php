<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's ababil theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_ababil
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_edusmart30_get_html_for_settings($OUTPUT, $PAGE);

// Set default (LTR) layout mark-up for a two column page (side-pre-only).
$regionmain = 'span9 pull-right';
$sidepre = 'span3 desktop-first-column';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmain = 'span9';
    $sidepre = 'span3 pull-right';
}

$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? true : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? true : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? true : $PAGE->theme->settings->googleplus;
$hasin  = (empty($PAGE->theme->settings->in)) ? true : $PAGE->theme->settings->in;
$hasyoutube  = (empty($PAGE->theme->settings->youtube)) ? true : $PAGE->theme->settings->youtube;
$copyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;


echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <style type="text/css">
@font-face {
	font-family: 'fjallaoneregular';
	src: url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fjallaone-regular-webfont.eot');
	src: url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fjallaone-regular-webfont.eot?#iefix') format('embedded-opentype'),  url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fjallaone-regular-webfont.woff2') format('woff2'),  url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fjallaone-regular-webfont.woff') format('woff'),  url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fjallaone-regular-webfont.ttf') format('truetype'),  url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fjallaone-regular-webfont.svg#ralewaythin') format('svg');
	font-weight: normal;
	font-style: normal;
}

@font-face {
    font-family: 'open_sansregular';
    src: url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/opensans-regular-webfont.eot');
    src: url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/opensans-regular-webfont.woff2') format('woff2'),
         url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/opensans-regular-webfont.woff') format('woff'),
         url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/opensans-regular-webfont.ttf') format('truetype'),
         url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/opensans-regular-webfont.svg#open_sansregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
  font-family: 'FontAwesome';
  src: url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fontawesome-webfont.eot');
  src: url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fontawesome-webfont.eot') format('embedded-opentype'),
       url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fontawesome-webfont.woff2') format('woff2'),
       url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fontawesome-webfont.woff') format('woff'),
       url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fontawesome-webfont.ttf') format('truetype'),
       url('<?php echo $CFG->wwwroot ?>/theme/edusmart30/font/fontawesome-webfont.svg') format('svg');
  font-weight: normal;
  font-style: normal;
}

</style>

     <script type="text/javascript" src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/js/jquery.min.js"></script>

<script>
	 $(document).ready(function(){
		 var asd = $('.inner-banner .container-fluid #page-header #page-navbar').html();
		 $('.inner-banner .container-fluid #page-header #page-navbar').html(' ');
		 $('.wrapper-nav').html(asd);
		 
	 });

</script>

<!-- Style CHUM -->
<link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot ?>/theme/edusmart30/css/chumstyle.css">    
    
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <div class="logo_section">
                <div class="chum-logo">
                   <a href="<?php echo $CFG->wwwroot ?>/?redirect=0"><span class="chum-logo-imagen"></span><h1><span>FORMATION CHUM</span></h1></a>
                  
                </div>
              <div class="clearfix"></div>
            </div>  
            <div class="cusMenu offset3">    
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
             
             
<?php if(isloggedin()){ ?>
                            
 <?php echo $OUTPUT->user_menu();  ?>
                            
	<?php if(isguestuser()){ ?>
	
	<a href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> "> <?php echo get_string('login') ?></a>	
	
	<?php }else{ ?>
										
	<?php } ?>
											
	<?php }else{ ?>	

	<?php require_once(dirname(__FILE__).'/includes/loginfo.php'); ?>  
						
<?php } ?>
             
            </div>  <!--End cusMenu -->
        </div> <!--End container-fluid -->
    </nav>
</header>

<div id="page" class="container-fluid">
    <?php echo $OUTPUT->full_header(); ?>
    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>

    <footer id="page-footer">
     	 
      <div id="bottom-footer-wrapper">
     	 <div class="container-fluid">
	     	 <div class="footer-left">
				<ul class="footer-link-list">
		     	 	<li><a class="footer-link" target="_blanck" href="http://www.chumontreal.qc.ca/enseignement-academie/direction-de-l-enseignement-et-de-l-academie-chum/nous-joindre"><img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/list-black.png" alt="" />Nous joindre</a></li>
		     	 	<li><a class="footer-link" target="_blanck" href="http://www.chumontreal.qc.ca/"><img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/list-black.png" alt="" />Accueil général du CHUM</a></li>		     	 
		     	</ul>
		     	<p>Réalisé par l'Académie CHUM</p>
		     	<p class="chum-footer-copy"><b><?php echo $copyright; ?></b>&#169; 2016 CHUM - Tous droits réservés</p>		     	
	     	 </div>
	     	 
	     	 <div class="footer-middle">
			    <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
		        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
		        <?php
		        echo $html->footnote;
		        echo $OUTPUT->login_info();
		        if (empty($PAGE->theme->settings->hidemoodlelogo)) {
	        		echo $OUTPUT->home_link();
	        	}
		        echo $OUTPUT->standard_footer_html();
		        ?>
	     	 </div>
     	  

	     <div class="footer-right">
 			<div class="social-net">
		        <div class="socials">
		        <ul class="socials unstyled">
		          <?php if ($hasfacebook) { ?>
		          <li><a href="<?php echo $hasfacebook; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_facebook', 'theme')?>" alt="facebook" /></a></li>
		          <?php } ?>
		          <?php if ($hastwitter) { ?>
		          <li><a href="<?php echo $hastwitter; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_twitter', 'theme')?>" alt="twitter" /></a></li>
		          <?php } ?>
		          <?php if ($hasyoutube) { ?>
		          <li><a href="<?php echo $hasyoutube; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_youtube', 'theme')?>" alt="Youtube" /></a></li>
		          <?php } ?>
		          <li><a href="https://www.flickr.com/photos/chumontreal" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_deuxrond', 'theme')?>" alt="flickr" /></a></li>
		          <?php if ($hasin) { ?>
		          <li><a href="<?php echo $hasin; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_linkedin', 'theme')?>" alt="linked in" /></a></li>
		          <?php } ?>
		          
		        </ul>
		        </div>
		    </div>
		 </div>
		    
		    <div class="clearfix"></div>

	      </div>
	    </div>
	       
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>



</body>
</html>
