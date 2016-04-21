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
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;


    $ADMIN->add('themes', new admin_category('theme_pioneer', 'Pioneer'));

    // "geneictemp" settingpage
    $temp = new admin_settingpage('theme_pioneer_generic',  get_string('geneicsettings', 'theme_pioneer'));
    
    // Block alignment
    $name = 'theme_pioneer/blockposition';
    $title = get_string('blockposition', 'theme_pioneer');
    $description = get_string('blockposition_desc', 'theme_pioneer');;
    $default = 'pull-right';
    $choices = array(
        'pull-left' => get_string('blocksleft', 'theme_pioneer'),
        'pull-right' => get_string('blocksright', 'theme_pioneer'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
// Description
    $name = 'theme_pioneer/customlogininfo';
    $heading = get_string('customlogininfo', 'theme_pioneer');
    $information = get_string('customlogindesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

 // Show hide toggle.
    $name = 'theme_pioneer/createuser';
    $title = get_string('createusertoggle', 'theme_pioneer');
    $description = get_string('createusertoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // Show hide toggle.
    $name = 'theme_pioneer/forgotpass';
    $title = get_string('forgotpasstoggle', 'theme_pioneer');
    $description = get_string('forgotpasstoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


// Description
    $name = 'theme_pioneer/headerimageinfo';
    $heading = get_string('headerimageinfo', 'theme_pioneer');
    $information = get_string('headerimageinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);


    // Frontpage Image Background spacing setting.
    $name = 'theme_pioneer/fpheaderimagepadding';
    $title = get_string('fpheaderimagepadding', 'theme_pioneer');
    $description = get_string('fpheaderimagepadding_desc', 'theme_pioneer');;
    $default = '50px';
    $choices = array(
        '10px' => '10px',
        '25px' => '25px',
        '50px' => '50px',
        '75px' => '75px',
        '100px' => '100px',
        '125px' => '125px',
        '150px' => '150px',
        '175px' => '175px',
        '200px' => '200px',
        '225px' => '225px',
        '275px' => '275px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Background spacing setting.
    $name = 'theme_pioneer/headerimagepadding';
    $title = get_string('headerimagepadding', 'theme_pioneer');
    $description = get_string('headerimagepadding_desc', 'theme_pioneer');;
    $default = '140px';
    $choices = array(
        '10px' => '10px',
        '20px' => '20px',
        '40px' => '40px',
        '80px' => '80px',
        '100px' => '100px',
        '120px' => '120px',
        '140px' => '140px',
        '180px' => '180px',
        '200px' => '200px',
        '220px' => '220px',
        '240px' => '240px',
        '300px' => '300px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Background spacing setting.
    $name = 'theme_pioneer/headerincourseimagepadding';
    $title = get_string('headerincourseimagepadding', 'theme_pioneer');
    $description = get_string('headerincourseimagepadding_desc', 'theme_pioneer');;
    $default = '40px';
    $choices = array(
        '10px' => '10px',
        '20px' => '20px',
        '30px' => '30px',
        '40px' => '40px',
        '80px' => '80px',
        '100px' => '100px',
        '120px' => '120px',
        '140px' => '140px',
        '180px' => '180px',
        '200px' => '200px',
        '220px' => '220px',
        '240px' => '240px',
        '300px' => '300px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // allow or disallow teacher header images.
    $name = 'theme_pioneer/headerbackgroundtoggle';
    $title = get_string('headerbackgroundtoggle', 'theme_pioneer');
    $description = get_string('headerbackgroundtoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Background image setting.
    $name = 'theme_pioneer/headerbackgroundimage';
    $title = get_string('headerbackgroundimage', 'theme_pioneer');
    $description = get_string('headerbackgroundimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'headerbackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// Description
    $name = 'theme_pioneer/stylinginfo';
    $heading = get_string('stylinginfo', 'theme_pioneer');
    $information = get_string('stylinginfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Logo file setting.
    $name = 'theme_pioneer/logo';
    $title = get_string('logo','theme_pioneer');
    $description = get_string('logodesc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //Topic and Weekly Section Titles Icon
    $name = 'theme_pioneer/sectionheadericon';
    $title = get_string('sectionheadericon','theme_pioneer');
    $description = get_string('sectionheadericondesc', 'theme_pioneer');
    $default = '\f02d';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_pioneer/customcss';
    $title = get_string('customcss', 'theme_pioneer');
    $description = get_string('customcssdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // generalalert setting.
    $name = 'theme_pioneer/generalalert';
    $title = get_string('generalalert', 'theme_pioneer');
    $description = get_string('generalalertdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Description
    $name = 'theme_pioneer/fptextboxinfo';
    $heading = get_string('fptextboxinfo', 'theme_pioneer');
    $information = get_string('fptextboxinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);


    // Toggle FP Textbox Spots.
    $name = 'theme_pioneer/togglefptextbox';
    $title = get_string('togglefptextbox' , 'theme_pioneer');
    $description = get_string('togglefptextboxdesc', 'theme_pioneer');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_pioneer');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_pioneer');
    $displayafterlogin = get_string('displayafterlogin', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = 'dontdisplay';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Frontpage Textbox.
    $name = 'theme_pioneer/fptextbox';
    $title = get_string('fptextbox', 'theme_pioneer');
    $description = get_string('fptextboxdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Description
    $name = 'theme_pioneer/mycorusesinfo';
    $heading = get_string('mycorusesinfo', 'theme_pioneer');
    $information = get_string('mycorusesinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Toggle courses display in custommenu.
    $name = 'theme_pioneer/displaymycourses';
    $title = get_string('displaymycourses', 'theme_pioneer');
    $description = get_string('displaymycoursesdesc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set terminology for dropdown course list
    $name = 'theme_pioneer/mycoursetitle';
    $title = get_string('mycoursetitle','theme_pioneer');
    $description = get_string('mycoursetitledesc', 'theme_pioneer');
    $default = 'course';
    $choices = array(
        'course' => get_string('mycourses', 'theme_pioneer'),
        'unit' => get_string('myunits', 'theme_pioneer'),
        'class' => get_string('myclasses', 'theme_pioneer'),
        'module' => get_string('mymodules', 'theme_pioneer')
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/enablethiscourse';
    $title = get_string('enablethiscourse', 'theme_pioneer');
    $description = get_string('enablethiscoursedesc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/toolsmenu';
    $title = get_string('toolsmenu', 'theme_pioneer');
    $description = get_string('toolsmenudesc', 'theme_pioneer');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// Description
    $name = 'theme_pioneer/coursegradeinfo';
    $heading = get_string('coursegradeinfo', 'theme_pioneer');
    $information = get_string('coursegradeinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

// Show or Hide Course Grades toggle.
    $name = 'theme_pioneer/coursegradetoggle';
    $title = get_string('coursegradetoggle', 'theme_pioneer');
    $description = get_string('coursegradetoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course Grades Button Text.
    $name = 'theme_pioneer/coursegradestext';
    $title = get_string('coursegradestext', 'theme_pioneer');
    $description = get_string('coursegradestext', 'theme_pioneer');
    $default = 'Course Grades';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


// Promoted Courses Start.
    // Promoted Courses Heading.
    $name = 'theme_pioneer_promotedcoursesheading';
    $heading = get_string('promotedcoursesheading', 'theme_pioneer');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable / Disable Promoted Courses.
    $name = 'theme_pioneer/pcourseenable';
    $title = get_string('pcourseenable', 'theme_pioneer');
    $description = '';
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Block title.
    $name = 'theme_pioneer/promotedtitle';
    $title = get_string('pcourses', 'theme_pioneer').' '.get_string('title', 'theme_pioneer');
    $description = get_string('promotedtitledesc', 'theme_pioneer');
    $default = 'lang:promotedtitledefault';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/promotedcourses';
    $title = get_string('pcourses', 'theme_pioneer');
    $description = get_string('pcoursesdesc', 'theme_pioneer');
    $default = array();

    $courses[0] = '';
    $cnt = 0;
    if ($ccc = get_courses('all', 'c.sortorder ASC', 'c.id,c.shortname,c.visible,c.category')) {
        foreach ($ccc as $cc) {
            if ($cc->visible == "0" || $cc->id == "1") {
                continue;
            }
            $cnt++;
            $courses[$cc->id] = $cc->shortname;
            // Set some courses for default option.
            if ($cnt < 8) {
                $default[] = $cc->id;
            }
        }
    }
    $coursedefault = implode(",", $default);
    $setting = new admin_setting_configtextarea($name, $title, $description, $coursedefault);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Promoted Courses End.

    $ADMIN->add('theme_pioneer', $temp);


$temp = new admin_settingpage('theme_pioneer_colorheading', get_string('colorheading', 'theme_pioneer'));

        // @textColor setting.
    $name = 'theme_pioneer/textcolor';
    $title = get_string('textcolor', 'theme_pioneer');
    $description = get_string('textcolor_desc', 'theme_pioneer');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @linkColor setting.
    $name = 'theme_pioneer/linkcolor';
    $title = get_string('linkcolor', 'theme_pioneer');
    $description = get_string('linkcolor_desc', 'theme_pioneer');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @login button color.
    $name = 'theme_pioneer/loginbuttoncolor';
    $title = get_string('loginbuttoncolor', 'theme_pioneer');
    $description = get_string('loginbuttoncolor_desc', 'theme_pioneer');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tab slider button color.
    $name = 'theme_pioneer/tabbuttoncolor';
    $title = get_string('tabbuttoncolor', 'theme_pioneer');
    $description = get_string('tabbuttoncolor_desc', 'theme_pioneer');
    $default = 'rgba(0, 0, 0, 0.7)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tab slider button hover color.
    $name = 'theme_pioneer/tabbuttonhovercolor';
    $title = get_string('tabbuttonhovercolor', 'theme_pioneer');
    $description = get_string('tabbuttonhovercolor_desc', 'theme_pioneer');
    $default = 'rgba(255, 255, 255, 1)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // block border
    $name = 'theme_pioneer/blockbordercolor';
    $title = get_string('blockbordercolor', 'theme_pioneer');
    $description = get_string('blockbordercolor_desc', 'theme_pioneer');
    $default = '#273844';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // block background
    $name = 'theme_pioneer/blockcolor';
    $title = get_string('blockcolor', 'theme_pioneer');
    $description = get_string('blockcolor_desc', 'theme_pioneer');
    $default = '#DCE0E5';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Content Background
    $name = 'theme_pioneer/contentbackgroundcolor';
    $title = get_string('contentbackgroundcolor', 'theme_pioneer');
    $description = get_string('contentbackgroundcolor_desc', 'theme_pioneer');
    $default = '#F2F5FB';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // icon navigation Background
    $name = 'theme_pioneer/iconnavbackgroundcolor';
    $title = get_string('iconnavbackgroundcolor', 'theme_pioneer');
    $description = get_string('iconnavbackgroundcolor_desc', 'theme_pioneer');
    $default = '#fff';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb bar color
    $name = 'theme_pioneer/breadcrumbcolor';
    $title = get_string('breadcrumbcolor', 'theme_pioneer');
    $description = get_string('breadcrumbcolor_desc', 'theme_pioneer');
    $default = '#DCE0E5';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Activity Background setting.
    $name = 'theme_pioneer/activitybackground';
    $title = get_string('activitybackground', 'theme_pioneer');
    $description = get_string('activitybackground_desc', 'theme_pioneer');
    $default = '#f9f9f9';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Topic and Week Background setting.
    $name = 'theme_pioneer/topicweekcolor';
    $title = get_string('topicweekcolor', 'theme_pioneer');
    $description = get_string('topicweekcolor_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Description
    $name = 'theme_pioneer/backgroundimageinfo';
    $heading = get_string('backgroundimageinfo', 'theme_pioneer');
    $information = get_string('backgroundimageinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // @bodyBackground setting.
    $name = 'theme_pioneer/bodybackground';
    $title = get_string('bodybackground', 'theme_pioneer');
    $description = get_string('bodybackground_desc', 'theme_pioneer');
    $default = '#d6d6d6';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background image setting.
    $name = 'theme_pioneer/backgroundimage';
    $title = get_string('backgroundimage', 'theme_pioneer');
    $description = get_string('backgroundimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background repeat setting.
    $name = 'theme_pioneer/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_pioneer');
    $description = get_string('backgroundrepeat_desc', 'theme_pioneer');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_pioneer'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_pioneer'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_pioneer'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_pioneer'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background position setting.
    $name = 'theme_pioneer/backgroundposition';
    $title = get_string('backgroundposition', 'theme_pioneer');
    $description = get_string('backgroundposition_desc', 'theme_pioneer');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_pioneer'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_pioneer'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_pioneer'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_pioneer'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_pioneer'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_pioneer'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_pioneer'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_pioneer'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_pioneer'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background fixed setting.
    $name = 'theme_pioneer/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_pioneer');
    $description = get_string('backgroundfixed_desc', 'theme_pioneer');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_pioneer', $temp);


/* Frontpage Settings temp*/
    $temp = new admin_settingpage('theme_pioneer_googleheading', get_string('googleheading', 'theme_pioneer'));

    // Google fonts Heading,body,size,weight
    $name = 'theme_pioneer/gheadingimporturl';
    $title = get_string('gheadingimporturl','theme_pioneer');
    $description = get_string('gheadingimporturldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/headingfont';
    $title = get_string('headingfont','theme_pioneer');
    $description = get_string('headingfontdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/gbodyimporturl';
    $title = get_string('gbodyimporturl','theme_pioneer');
    $description = get_string('gbodyimporturldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/bodyfont';
    $title = get_string('bodyfont','theme_pioneer');
    $description = get_string('bodyfontdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/bodysize';
    $title = get_string('bodysize','theme_pioneer');
    $description = get_string('bodysizedesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/bodyweight';
    $title = get_string('bodyweight','theme_pioneer');
    $description = get_string('bodyweightdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_pioneer', $temp);



/* Frontpage Settings temp*/
    $temp = new admin_settingpage('theme_pioneer_iconnav', get_string('iconnavheading', 'theme_pioneer'));

//Custom Navigation Icons on homepage
    // Toggle FP Textbox Spots.
    $name = 'theme_pioneer/toggleiconnav';
    $title = get_string('toggleiconnav' , 'theme_pioneer');
    $description = get_string('toggleiconnav_desc', 'theme_pioneer');
    $bothpositions = get_string('bothpositions', 'theme_pioneer');
    $intopnav = get_string('intopnav', 'theme_pioneer');
    $inmaincontent = get_string('inmaincontent', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = 'bothpositions';
    $choices = array('1'=>$bothpositions, '2'=>$intopnav, '3'=>$inmaincontent, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

  // Toggle icon navigation and searchbox.
    $name = 'theme_pioneer/fpsearchboxtop';
    $title = get_string('fpsearchboxtop', 'theme_pioneer');
    $description = get_string('fpsearchboxtop_desc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Toggle icon navigation and searchbox.
    $name = 'theme_pioneer/fpsearchboxmain';
    $title = get_string('fpsearchboxmain', 'theme_pioneer');
    $description = get_string('fpsearchboxmain_desc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for icon One
    $name = 'theme_pioneer/navicon1info';
    $heading = get_string('navicon1', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // icon One
    $name = 'theme_pioneer/nav1icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav1buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'My Home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav1buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/my/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon One
    $name = 'theme_pioneer/navicon2info';
    $heading = get_string('navicon2', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav2icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav2buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'Calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav2buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/calendar/view.php?view=month';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon three
    $name = 'theme_pioneer/navicon3info';
    $heading = get_string('navicon3', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav3icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'bookmark';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav3buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'Badges';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav3buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/badges/mybadges.php';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_pioneer/navicon4info';
    $heading = get_string('navicon4', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav4icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'book';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav4buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'All Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav4buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/course/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_pioneer/navicon5info';
    $heading = get_string('navicon5', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav5icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav5buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav5buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon six
    $name = 'theme_pioneer/navicon6info';
    $heading = get_string('navicon6', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav6icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav6buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav6buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon seven
    $name = 'theme_pioneer/navicon7info';
    $heading = get_string('navicon7', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav7icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav7buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav7buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon eight
    $name = 'theme_pioneer/navicon8info';
    $heading = get_string('navicon8', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav8icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav8buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav8buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_pioneer', $temp);

/* Marketing Spot Settings temp*/
    $temp = new admin_settingpage('theme_pioneer_marketing', get_string('marketingheading', 'theme_pioneer'));

    // @Marketing Box background color setting.
    $name = 'theme_pioneer/marketboxcolor';
    $title = get_string('marketboxcolor', 'theme_pioneer');
    $description = get_string('marketboxcolor_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Toggle Marketing Spots.
    $name = 'theme_pioneer/togglemarketing';
    $title = get_string('togglemarketing' , 'theme_pioneer');
    $description = get_string('togglemarketingdesc', 'theme_pioneer');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_pioneer');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_pioneer');
    $displayafterlogin = get_string('displayafterlogin', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = 'display';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for Marketing Spot One
    $name = 'theme_pioneer/marketing1info';
    $heading = get_string('marketing1', 'theme_pioneer');
    $information = get_string('marketinginfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Marketing Spot One
    $name = 'theme_pioneer/marketing1';
    $title = get_string('marketingtitle', 'theme_pioneer');
    $description = get_string('marketingtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background image setting.
    $name = 'theme_pioneer/marketing1image';
    $title = get_string('marketingimage', 'theme_pioneer');
    $description = get_string('marketingimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing1content';
    $title = get_string('marketingcontent', 'theme_pioneer');
    $description = get_string('marketingcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing1buttontext';
    $title = get_string('marketingbuttontext', 'theme_pioneer');
    $description = get_string('marketingbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/marketing1icon';
    $title = get_string('marketingicon', 'theme_pioneer');
    $description = get_string('marketingicondesc', 'theme_pioneer');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing1buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_pioneer');
    $description = get_string('marketingbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing1target';
    $title = get_string('marketingurltarget' , 'theme_pioneer');
    $description = get_string('marketingurltargetdesc', 'theme_pioneer');
    $target1 = get_string('marketingurltargetself', 'theme_pioneer');
    $target2 = get_string('marketingurltargetnew', 'theme_pioneer');
    $target3 = get_string('marketingurltargetparent', 'theme_pioneer');
    $default = 'target1';
    $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for Marketing Spot Two
    $name = 'theme_pioneer/marketing2info';
    $heading = get_string('marketing2', 'theme_pioneer');
    $information = get_string('marketinginfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Marketing Spot Two.
    $name = 'theme_pioneer/marketing2';
    $title = get_string('marketingtitle', 'theme_pioneer');
    $description = get_string('marketingtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background image setting.
    $name = 'theme_pioneer/marketing2image';
    $title = get_string('marketingimage', 'theme_pioneer');
    $description = get_string('marketingimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing2content';
    $title = get_string('marketingcontent', 'theme_pioneer');
    $description = get_string('marketingcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing2buttontext';
    $title = get_string('marketingbuttontext', 'theme_pioneer');
    $description = get_string('marketingbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/marketing2icon';
    $title = get_string('marketingicon', 'theme_pioneer');
    $description = get_string('marketingicondesc', 'theme_pioneer');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing2buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_pioneer');
    $description = get_string('marketingbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing2target';
    $title = get_string('marketingurltarget' , 'theme_pioneer');
    $description = get_string('marketingurltargetdesc', 'theme_pioneer');
    $target1 = get_string('marketingurltargetself', 'theme_pioneer');
    $target2 = get_string('marketingurltargetnew', 'theme_pioneer');
    $target3 = get_string('marketingurltargetparent', 'theme_pioneer');
    $default = 'target1';
    $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for Marketing Spot Three
    $name = 'theme_pioneer/marketing3info';
    $heading = get_string('marketing3', 'theme_pioneer');
    $information = get_string('marketinginfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Marketing Spot Three.
    $name = 'theme_pioneer/marketing3';
    $title = get_string('marketingtitle', 'theme_pioneer');
    $description = get_string('marketingtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background image setting.
    $name = 'theme_pioneer/marketing3image';
    $title = get_string('marketingimage', 'theme_pioneer');
    $description = get_string('marketingimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing3content';
    $title = get_string('marketingcontent', 'theme_pioneer');
    $description = get_string('marketingcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing3buttontext';
    $title = get_string('marketingbuttontext', 'theme_pioneer');
    $description = get_string('marketingbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing3icon';
    $title = get_string('marketingicon', 'theme_pioneer');
    $description = get_string('marketingicondesc', 'theme_pioneer');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/marketing3buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_pioneer');
    $description = get_string('marketingbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/marketing3target';
    $title = get_string('marketingurltarget' , 'theme_pioneer');
    $description = get_string('marketingurltargetdesc', 'theme_pioneer');
    $target1 = get_string('marketingurltargetself', 'theme_pioneer');
    $target2 = get_string('marketingurltargetnew', 'theme_pioneer');
    $target3 = get_string('marketingurltargetparent', 'theme_pioneer');
    $default = 'target1';
    $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_pioneer', $temp);




/* Help Spot Settings temp*/
$temp = new admin_settingpage('theme_pioneer_tab', get_string('tabheading', 'theme_pioneer'));

    // Show or Hide Frontpage Tabs.
    $name = 'theme_pioneer/tabtoggle';
    $title = get_string('tabtoggle', 'theme_pioneer');
    $description = get_string('tabtoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tab Button Text.
    $name = 'theme_pioneer/tabbuttontext';
    $title = get_string('tabbuttontext', 'theme_pioneer');
    $description = get_string('tabbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab1info';
    $heading = get_string('tab1', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab1';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab1content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    // This is the descriptor for tab Spot Two
    $name = 'theme_pioneer/tab2info';
    $heading = get_string('tab2', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // tab Spot Two
    $name = 'theme_pioneer/tab2';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab2content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for tab Spot Three
    $name = 'theme_pioneer/tab3info';
    $heading = get_string('tab3', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // tab Spot Three.
    $name = 'theme_pioneer/tab3';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab3content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab4info';
    $heading = get_string('tab4', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab4';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab4content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab5info';
    $heading = get_string('tab5', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab5';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab5content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab6info';
    $heading = get_string('tab6', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab6';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab6content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    
    $ADMIN->add('theme_pioneer', $temp);

/* Custom Footer Text Settings temp*/
$temp = new admin_settingpage('theme_pioneer_footertextboxes', get_string('footertextboxes', 'theme_pioneer'));
    
    $name = 'theme_pioneer/fullfootertext';
    $title = get_string('fullfootertext', 'theme_pioneer');
    $description = get_string('fullfootertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext1';
    $title = get_string('footertext1', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext2';
    $title = get_string('footertext2', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext3';
    $title = get_string('footertext3', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext4';
    $title = get_string('footertext4', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //Topic and Weekly Section Titles Icon
    $name = 'theme_pioneer/copyrighttext';
    $title = get_string('copyrighttext','theme_pioneer');
    $description = get_string('copyrighttext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_pioneer', $temp);





$temp = new admin_settingpage('theme_pioneer_socialiconnav', get_string('socialiconheading', 'theme_pioneer'));

    $name = 'theme_pioneer/social1buttonurl';
    $title = get_string('socialicon1', 'theme_pioneer');
    $description = get_string('socialicon1', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social2buttonurl';
    $title = get_string('socialicon2', 'theme_pioneer');
    $description = get_string('socialicon2', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social3buttonurl';
    $title = get_string('socialicon3', 'theme_pioneer');
    $description = get_string('socialicon3', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social4buttonurl';
    $title = get_string('socialicon4', 'theme_pioneer');
    $description = get_string('socialicon4', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social5buttonurl';
    $title = get_string('socialicon5', 'theme_pioneer');
    $description = get_string('socialicon5', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social6buttonurl';
    $title = get_string('socialicon6', 'theme_pioneer');
    $description = get_string('socialicon6', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social7buttonurl';
    $title = get_string('socialicon7', 'theme_pioneer');
    $description = get_string('socialicon7', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social8buttonurl';
    $title = get_string('socialicon8', 'theme_pioneer');
    $description = get_string('socialicon8', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

//Custom Navigation Icons on homepage
$ADMIN->add('theme_pioneer', $temp);


/*Socialwall Settings temp*/
$temp = new admin_settingpage('theme_pioneer_socialwall', get_string('socialwallheading', 'theme_pioneer'));

    // Socialwall add a post bkg color.
    $name = 'theme_pioneer/swaddpost';
    $title = get_string('swaddpost', 'theme_pioneer');
    $description = get_string('swaddpost_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall post color.
    $name = 'theme_pioneer/swpost';
    $title = get_string('swpost', 'theme_pioneer');
    $description = get_string('swpost_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Message color.
    $name = 'theme_pioneer/swmessage';
    $title = get_string('swmessage', 'theme_pioneer');
    $description = get_string('swmessage_desc', 'theme_pioneer');
    $default = '#F0F3F7';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Attachment color.
    $name = 'theme_pioneer/swattach';
    $title = get_string('swattach', 'theme_pioneer');
    $description = get_string('swattach_desc', 'theme_pioneer');
    $default = '#F6FAA0';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Attachment color.
    $name = 'theme_pioneer/swcomment';
    $title = get_string('swcomment', 'theme_pioneer');
    $description = get_string('swcomment_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


$ADMIN->add('theme_pioneer', $temp);

/*Analytics Settings temp*/
$temp = new admin_settingpage('theme_pioneer_analytics', get_string('analyticsheading', 'theme_pioneer'));

    $name = 'theme_pioneer/analyticsenabled';
    $title = get_string('analyticsenabled', 'theme_pioneer');
    $description = get_string('analyticsenableddesc', 'theme_pioneer');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/analyticstrackingid';
    $title = get_string('analyticstrackingid', 'theme_pioneer');
    $description = get_string('analyticstrackingiddesc', 'theme_pioneer');
    $default = 'UA-XXXXXXXX-X';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/analyticstrackadmin';
    $title = get_string('analyticstrackadmin', 'theme_pioneer');
    $description = get_string('analyticstrackadmindesc', 'theme_pioneer');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/analyticscleanurl';
    $title = get_string('analyticscleanurl', 'theme_pioneer');
    $description = get_string('analyticscleanurldesc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_pioneer', $temp);