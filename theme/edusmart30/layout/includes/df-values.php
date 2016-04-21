<?php 
$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? true : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? true : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? true : $PAGE->theme->settings->googleplus;
$hasin  = (empty($PAGE->theme->settings->in)) ? true : $PAGE->theme->settings->in;
$hasyoutube  = (empty($PAGE->theme->settings->youtube)) ? true : $PAGE->theme->settings->youtube;
$copyright = (empty($PAGE->theme->settings->copyright)) ? true : $PAGE->theme->settings->copyright;


$displayslidertext1 = (empty($PAGE->theme->settings->displayslidertext1) || $PAGE->theme->settings->displayslidertext1 < 1) ? 0 : 1;
$displayslidertext2 = (empty($PAGE->theme->settings->displayslidertext2) || $PAGE->theme->settings->displayslidertext2 < 1) ? 0 : 1;
$displayslidertext3 = (empty($PAGE->theme->settings->displayslidertext3) || $PAGE->theme->settings->displayslidertext3 < 1) ? 0 : 1;
$displayslidertext4 = (empty($PAGE->theme->settings->displayslidertext4) || $PAGE->theme->settings->displayslidertext4 < 1) ? 0 : 1;

$display_welcome_text1 = (empty($PAGE->theme->settings->displaywelcometext1) || $PAGE->theme->settings->displaywelcometext1 < 1) ? 0 : 1;
$display_welcome_text2 = (empty($PAGE->theme->settings->displaywelcometext2) || $PAGE->theme->settings->displaywelcometext2 < 1) ? 0 : 1;
$display_welcome_text3 = (empty($PAGE->theme->settings->displaywelcometext3) || $PAGE->theme->settings->displaywelcometext3 < 1) ? 0 : 1;
$display_welcome_text4 = (empty($PAGE->theme->settings->displaywelcometext4) || $PAGE->theme->settings->displaywelcometext4 < 1) ? 0 : 1;


$display_slider = (empty($PAGE->theme->settings->displayslider) ||$PAGE->theme->settings->displayslider < 1) ? 0 : 1;
$display_marketing_section = (empty($PAGE->theme->settings->display_marketing_section) ||$PAGE->theme->settings->display_marketing_section < 1) ? 0 : 1;

/* slide1 settings */

	if (!empty($PAGE->theme->settings->slide1image)) {
	   $slide1image = $PAGE->theme->setting_file_url('slide1image', 'slide1image');
	} else {
	    $slide1image = $OUTPUT->pix_url('images/slider/01', 'theme');
	}

/* slide2 settings */

	if (!empty($PAGE->theme->settings->slide2image)) {
	   $slide2image = $PAGE->theme->setting_file_url('slide2image', 'slide2image');
	} else {
	    $slide2image = $OUTPUT->pix_url('images/slider/02', 'theme');
	}

/* slide3 settings */

	if (!empty($PAGE->theme->settings->slide3image)) {
	   $slide3image = $PAGE->theme->setting_file_url('slide3image', 'slide3image');
	} else {
	    $slide3image = $OUTPUT->pix_url('images/slider/03', 'theme');
	}
	
	
	
	

/* slider Text */


if ($displayslidertext1) {
	if (!empty($PAGE->theme->settings->slide1caption)) {
	    $slide1caption =  $PAGE->theme->settings->slide1caption;
	} 
	else {
	    $slide1caption = 'Clivuam tinc Nunc dignissim risus id metus';
	}
} else{

}


/* slide2 settings */

if ($displayslidertext2) {
	if (!empty($PAGE->theme->settings->slide2caption)) {
	    $slide2caption =  $PAGE->theme->settings->slide2caption;
	} 
	else {
	    $slide2caption = 'Clivuam tinc Nunc dignissim risus id metus';
	}
} else{
}

/* slide3 settings */

if ($displayslidertext3) {
	if (!empty($PAGE->theme->settings->slide3caption)) {
	    $slide3caption =  $PAGE->theme->settings->slide3caption;
	} 
	else {
	    $slide3caption = 'Clivuam tinc Nunc dignissim risus id metus';
	}
} else{

}



/* Page Link1 */	

	if (!empty($PAGE->theme->settings->sliderlink1)) {
	    $sliderlink1 = $PAGE->theme->settings->sliderlink1;
	} 
	else {
	    $sliderlink1 = 'HTTP://MOODLETHEMES.COM';
	}
	
/* Page Link2 */	

	if (!empty($PAGE->theme->settings->sliderlink2)) {
	    $sliderlink2 = $PAGE->theme->settings->sliderlink2;
	} 
	else {
	    $sliderlink2 = 'HTTP://MOODLETHEMES.COM';
	}
	
/* Page Link3 */

	if (!empty($PAGE->theme->settings->sliderlink3)) {
	    $sliderlink3 = $PAGE->theme->settings->sliderlink3;
	} 
	else {
	    $sliderlink3 = 'HTTP://MOODLETHEMES.COM';
	}
	
	
	/* Page Link1 */	

	if (!empty($PAGE->theme->settings->slidertext1)) {
	    $slidertext1 = $PAGE->theme->settings->slidertext1;
	} 
	else {
	    $slidertext1 = '';
	}
	
/* Page Link2 */	

	if (!empty($PAGE->theme->settings->slidertext2)) {
	    $slidertext2 = $PAGE->theme->settings->slidertext2;
	} 
	else {
	    $slidertext2 = '';
	}
	
/* Page Link3 */

	if (!empty($PAGE->theme->settings->slidertext3)) {
	    $slidertext3 = $PAGE->theme->settings->slidertext3;
	} 
	else {
	    $slidertext3 = '';
	}
	
	
	/* marketing spot title */	

	
	if (!empty($PAGE->theme->settings->marketing1icon)) {
	    $marketing1icon = $PAGE->theme->settings->marketing1icon;
	} else {
	    $marketing1icon = '<i class="fa fa-desktop"></i>';
	}	

	if (!empty($PAGE->theme->settings->marketing2icon)) {
	    $marketing2icon = $PAGE->theme->settings->marketing2icon;
	} else {
	    $marketing2icon = '<i class="fa fa-mouse-pointer"></i>';
	}
	
	if (!empty($PAGE->theme->settings->marketing3icon)) {
	    $marketing3icon = $PAGE->theme->settings->marketing3icon;
	} else {
	    $marketing3icon = '<i class="fa fa-users"></i>';
	}
	
	
	
	
/* marketing spot title */	

	
	if (!empty($PAGE->theme->settings->marketing1title)) {
	    $marketing1title = $PAGE->theme->settings->marketing1title;
	} else {
	    $marketing1title = 'Fully RESPONSIVE';
	}	

	if (!empty($PAGE->theme->settings->marketing2title)) {
	    $marketing2title = $PAGE->theme->settings->marketing2title;
	} else {
	    $marketing2title = 'LEARN ANY THINGS ONLINE';
	}
	
	if (!empty($PAGE->theme->settings->marketing3title)) {
	    $marketing3title = $PAGE->theme->settings->marketing3title;
	} else {
	    $marketing3title = 'COMMUNICATE WITH OTHERS';
	}
	
	
/* marketing spot discription */		

	
	if (!empty($PAGE->theme->settings->marketing1content)) {
	    $marketing1content = $PAGE->theme->settings->marketing1content;
	} 
	else {
	    $marketing1content = 'Memito dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text   => more';
	}

	if (!empty($PAGE->theme->settings->marketing2content)) {
	    $marketing2content = $PAGE->theme->settings->marketing2content;
	} 
	else {
	    $marketing2content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text   => more';
	}

	if (!empty($PAGE->theme->settings->marketing3content)) {
	    $marketing3content = $PAGE->theme->settings->marketing3content;
	} 
	else {
	    $marketing3content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text   => more';
	}

