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
 * Moodle's edusmart30 theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_edusmart30
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

	//LogoHeading.
	$name = 'theme_edusmart30/logohere';
	$heading = get_string('logohere', 'theme_edusmart30');
 	$information = get_string('logoheredesc', 'theme_edusmart30');
 	$setting = new admin_setting_heading($name, $heading, $information);
 	$settings->add($setting);

 	//Logofilesetting.
    $name = 'theme_edusmart30/logo';
    $title = get_string('logo','theme_edusmart30');
    $description = get_string('logodesc', 'theme_edusmart30');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Custom css heading.
    $name = 'theme_edusmart30/cus_css';
    $heading = get_string('cus_css', 'theme_edusmart30');
    $information = get_string('cus_cssdesc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Custom CSS file.
    $name = 'theme_edusmart30/customcss';
    $title = get_string('customcss', 'theme_edusmart30');
    $description = get_string('customcssdesc', 'theme_edusmart30');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Moodlelogo.
    $name = 'theme_edusmart30/moodlelogo';
    $heading = get_string('moodlelogo', 'theme_edusmart30');
    $information = get_string('moodlelogo', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    //Hide moogle logo
    $name = 'theme_edusmart30/hidemoodlelogo';
    $title = get_string('hidemoodlelogo','theme_edusmart30');
    $description = get_string('hidemoodlelogodesc', 'theme_edusmart30');
    $default=0;
    $choices=array(0=>'No',1=>'Yes');
    $setting=new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
    //Marketing Spot One.
    $name = 'theme_edusmart30/copyright';
    $title = get_string('copyright', 'theme_edusmart30');
    $description = get_string('copyrightdesc', 'theme_edusmart30');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //Slide Image 1
    $name = 'theme_edusmart30/slider_image1';
    $heading = get_string('slider_image1', 'theme_edusmart30');
    $information = get_string('slider_image1desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    //Hide Show Image slider
    $name = 'theme_edusmart30/displayslider';
    $title = get_string('displayslider','theme_edusmart30');
    $description = get_string('displaysliderdesc', 'theme_edusmart30');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Image.
    $name = 'theme_edusmart30/slide1image';
    $title = get_string('slide1image', 'theme_edusmart30');
    $description = get_string('slide1imagedesc', 'theme_edusmart30');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Text.
    $name = 'theme_edusmart30/slider_text1';
    $heading = get_string('slider_text1', 'theme_edusmart30');
    $information = get_string('slider_text1desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    //Hide Show Image slider text
    $name = 'theme_edusmart30/displayslidertext1';
    $title = get_string('displayslidertext1','theme_edusmart30');
    $description = get_string('displayslidertext1desc', 'theme_edusmart30');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Caption.2
    $name = 'theme_edusmart30/slide1caption';
    $title = get_string('slide1caption', 'theme_edusmart30');
    $description = get_string('slide1captiondesc', 'theme_edusmart30');
    $default ='Clivuam tinc Nunc dignissim risus id metus';
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //text.
    $name = 'theme_edusmart30/slidertext1';
    $title = get_string('slidertext1', 'theme_edusmart30');
    $description = get_string('slidertext1desc', 'theme_edusmart30');
    $default ='HTTP://MOODLETHEMES.COM';
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Caption.
    $name = 'theme_edusmart30/sliderlink1';
    $title = get_string('sliderlink1', 'theme_edusmart30');
    $description = get_string('sliderlink1desc', 'theme_edusmart30');
    $default ='HTTP://MOODLETHEMES.COM';
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Hide Show Image slider text
    $name = 'theme_edusmart30/slider_text1';
    $heading = get_string('slider_text1', 'theme_edusmart30');
    $information = get_string('slider_text1desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    $name = 'theme_edusmart30/slider_image2';
    $heading = get_string('slider_image2', 'theme_edusmart30');
    $information = get_string('slider_image2desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Image.
    $name = 'theme_edusmart30/slide2image';
    $title = get_string('slide2image', 'theme_edusmart30');
    $description = get_string('slide2imagedesc', 'theme_edusmart30');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Hide Show Image slider text
    $name = 'theme_edusmart30/slider_text2';
    $heading = get_string('slider_text2', 'theme_edusmart30');
    $information = get_string('slider_text2desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    $name = 'theme_edusmart30/displayslidertext2';
    $title = get_string('displayslidertext2','theme_edusmart30');
    $description = get_string('displayslidertext2desc', 'theme_edusmart30');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Caption.
    $name = 'theme_edusmart30/slide2caption';
    $title = get_string('slide2caption', 'theme_edusmart30');
    $description = get_string('slide2captiondesc', 'theme_edusmart30');
    $default ='Clivuam tinc Nunc dignissim risus id metus';
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //text.
    $name = 'theme_edusmart30/slidertext2';
    $title = get_string('slidertext2', 'theme_edusmart30');
    $description = get_string('slidertext2desc', 'theme_edusmart30');
    $default ='HTTP://MOODLETHEMES.COM';
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //Caption.
    $name = 'theme_edusmart30/sliderlink2';
    $title = get_string('sliderlink2', 'theme_edusmart30');
    $description = get_string('sliderlink2desc', 'theme_edusmart30');
    $default ='HTTP://MOODLETHEMES.COM';
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //slider image text
    $name = 'theme_edusmart30/slider_image3';
    $heading = get_string('slider_image3', 'theme_edusmart30');
    $information = get_string('slider_image3desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    //Image.
    $name = 'theme_edusmart30/slide3image';
    $title = get_string('slide3image', 'theme_edusmart30');
    $description = get_string('slide3imagedesc', 'theme_edusmart30');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //slider image text
    $name = 'theme_edusmart30/slider_text3';
    $heading = get_string('slider_text3', 'theme_edusmart30');
    $information = get_string('slider_text3desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Hide Show Image slider text
    $name = 'theme_edusmart30/displayslidertext3';
    $title = get_string('displayslidertext3','theme_edusmart30');
    $description = get_string('displayslidertext3desc', 'theme_edusmart30');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Caption.
    $name = 'theme_edusmart30/slide3caption';
    $title = get_string('slide3caption', 'theme_edusmart30');
    $description = get_string('slide3captiondesc', 'theme_edusmart30');
    $default ='Clivuam tinc Nunc dignissim risus id metus';
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //text.
    $name = 'theme_edusmart30/slidertext3';
    $title = get_string('slidertext3', 'theme_edusmart30');
    $description = get_string('slidertext3desc', 'theme_edusmart30');
    $default ='HTTP://MOODLETHEMES.COM';
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //Caption.
    $name = 'theme_edusmart30/sliderlink3';
    $title = get_string('sliderlink3', 'theme_edusmart30');
    $description = get_string('sliderlink3desc', 'theme_edusmart30');
    $default ='HTTP://MOODLETHEMES.COM';
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //This is the descriptor for Marketing Spot One.
    $name = 'theme_edusmart30/marketing1info';
    $heading = get_string('marketing1', 'theme_edusmart30');
    $information = get_string('marketinginfodesc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    $name = 'theme_edusmart30/display_marketing_section';
    $title = get_string('display_marketing_section','theme_edusmart30');
    $description = get_string('display_marketing_sectiondesc', 'theme_edusmart30');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
     //Marketing Spot icon1.
    $name = 'theme_edusmart30/marketing1icon';
    $title = get_string('marketing1icon', 'theme_edusmart30');
    $description = get_string('marketing1icondesc', 'theme_edusmart30');
    $default = '<i class="fa fa-desktop"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //Marketing Spot One.
    $name = 'theme_edusmart30/marketing1title';
    $title = get_string('marketing1title', 'theme_edusmart30');
    $description = get_string('marketing1titledesc', 'theme_edusmart30');
    $default = 'Fully RESPONSIVE';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    $name = 'theme_edusmart30/marketing1content';
    $title = get_string('marketing1content', 'theme_edusmart30');
    $description = get_string('marketing1contentdesc', 'theme_edusmart30');
    $default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //This is the descriptor for Marketing Spot One.
    $name = 'theme_edusmart30/marketing2info';
    $heading = get_string('marketing2', 'theme_edusmart30');
    $information = get_string('marketinginfodesc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
        
     //Marketing Spot icon1.
    $name = 'theme_edusmart30/marketing2icon';
    $title = get_string('marketing2icon', 'theme_edusmart30');
    $description = get_string('marketing2icondesc', 'theme_edusmart30');
    $default = '<i class="fa fa-mouse-pointer"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
     //Marketing Spot Two.
    $name = 'theme_edusmart30/marketing2title';
    $title = get_string('marketing2title', 'theme_edusmart30');
    $description = get_string('marketing2titledesc', 'theme_edusmart30');
    $default = 'LEARN ANY THINGS ONLINE';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    $name = 'theme_edusmart30/marketing2content';
    $title = get_string('marketing2content', 'theme_edusmart30');
    $description = get_string('marketing2contentdesc', 'theme_edusmart30');
    $default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
     //This is the descriptor for Marketing Spot One.
    $name = 'theme_edusmart30/marketing3info';
    $heading = get_string('marketing3', 'theme_edusmart30');
    $information = get_string('marketinginfodesc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    //Marketing Spot icon1.
    $name = 'theme_edusmart30/marketing3icon';
    $title = get_string('marketing3icon', 'theme_edusmart30');
    $description = get_string('marketing3icondesc', 'theme_edusmart30');
    $default = '<i class="fa fa-users"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //Marketing Spot Three.
    $name = 'theme_edusmart30/marketing3title';
    $title = get_string('marketing3title', 'theme_edusmart30');
    $description = get_string('marketing3titledesc', 'theme_edusmart30');
    $default = 'COMMUNICATE WITH OTHERS';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    $name = 'theme_edusmart30/marketing3content';
    $title = get_string('marketing3content', 'theme_edusmart30');
    $description = get_string('marketing3contentdesc', 'theme_edusmart30');
    $default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //This is the descriptor for Marketing Spot One.
    $name = 'theme_edusmart30/footertext';
    $heading = get_string('footertext', 'theme_edusmart30');
    $information = get_string('footertext_desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    //Footnote setting.
    $name = 'theme_edusmart30/footnote';
    $title = get_string('footnote', 'theme_edusmart30');
    $description = get_string('footnotedesc', 'theme_edusmart30');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    //This is the descriptor for Marketing Spot One.
    $name = 'theme_edusmart30/colortheme';
    $heading = get_string('colortheme', 'theme_edusmart30');
    $information = get_string('colortheme_desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //page header background colour setting
    $name = 'theme_edusmart30/headerbgc';
    $title = get_string('headerbgc','theme_edusmart30');
    $description = get_string('headerdesc', 'theme_edusmart30');
    $default = '#202628';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting); 
    
    //theme background colour setting
    $name = 'theme_edusmart30/themecolor';
    $title = get_string('themecolor','theme_edusmart30');
    $description = get_string('themecolordesc', 'theme_edusmart30');
    $default = '#ff685a';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting); 
    
    //page link colour setting
    $name = 'theme_edusmart30/linktxtc';
    $title = get_string('linktxtc','theme_edusmart30');
    $description = get_string('linktxtcdesc', 'theme_edusmart30');
    $default = '#ff685a';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);
    
    //page link colour setting
    $name = 'theme_edusmart30/footertopcolor';
    $title = get_string('footertopcolor','theme_edusmart30');
    $description = get_string('footertopcolordesc', 'theme_edusmart30');
    $default = '#26252c';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);
    
    //page link colour setting
    $name = 'theme_edusmart30/footerbtmcolor';
    $title = get_string('footerbtmcolor','theme_edusmart30');
    $description = get_string('footerbtmcolordesc', 'theme_edusmart30');
    $default = '#1f1e26';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);
    
     //This is the descriptor for Marketing Spot One.
    $name = 'theme_edusmart30/socialmdatxt';
    $heading = get_string('socialmdatxt', 'theme_edusmart30');
    $information = get_string('socialmdatxt_desc', 'theme_edusmart30');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    $name = 'theme_edusmart30/facebook';
	$title = get_string('facebook','theme_edusmart30');
	$description = get_string('facebookdesc', 'theme_edusmart30');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
    
	//Facebook url setting
	$name = 'theme_edusmart30/facebook';
	$title = get_string('facebook','theme_edusmart30');
	$description = get_string('facebookdesc', 'theme_edusmart30');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
   
	//Twitter url setting
	$name = 'theme_edusmart30/twitter';
	$title = get_string('twitter','theme_edusmart30');
	$description = get_string('twitterdesc', 'theme_edusmart30');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	//google plus url setting
	$name = 'theme_edusmart30/googleplus';
	$title = get_string('googleplus','theme_edusmart30');
	$description = get_string('googleplusdesc', 'theme_edusmart30');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);    

	//Rss
	$name = 'theme_edusmart30/in';
	$title = get_string('in','theme_edusmart30');
	$description = get_string('indesc', 'theme_edusmart30');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	//Youtube
	$name = 'theme_edusmart30/youtube';
	$title = get_string('youtube','theme_edusmart30');
	$description = get_string('youtubedesc', 'theme_edusmart30');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

    //Youtube
    $name = 'theme_edusmart30/matacho';
    $title = get_string('youtube','theme_edusmart30');
    $description = get_string('youtubedesc', 'theme_edusmart30');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);

}
