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

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_edusmart30_process_css($css, $theme) {

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_edusmart30_set_logo($css, $logo);
    
    
     // Set the Header color.
    if (empty($theme->settings->headerbgc)) {
        $headerbgc = '#6c87b5'; // default 
    } else {
        $headerbgc = $theme->settings->headerbgc;
    }
    $css = edusmart30_set_headerbgc($css, $headerbgc);
    
    
    // Set the font reference size  
	
    if (empty($theme->settings->fontsizereference)) {
        $fontsizereference = '13'; // default
    } else {
        $fontsizereference = $theme->settings->fontsizereference;
    }
    
	$css = edusmart30_set_fontsizereference($css, $fontsizereference);
    
    
    // Set the Theme color.
    if (empty($theme->settings->themecolor)) {
        $themecolor = '#6c87b5'; // default 
    } else {
        $themecolor = $theme->settings->themecolor;
    }
    $css = edusmart30_set_themecolor($css, $themecolor);
    
    
    // Set the page Link color   
           
    if (empty($theme->settings->linktxtc)) {
        $linktxtc = '#0070a8'; // default 
    } else {
        $linktxtc = $theme->settings->linktxtc;
    } 
    $css = edusmart30_set_linktxtc($css, $linktxtc);
   
   // Set the page footer Top color   
           
    if (empty($theme->settings->footertopcolor)) {
        $footertopcolor = '#0070a8'; // default 
    } else {
        $footertopcolor = $theme->settings->footertopcolor;
    }
    $css = edusmart30_set_footertopcolor($css, $footertopcolor); 
    
    
    // Set the page footer bottom color   
           
    if (empty($theme->settings->footerbtmcolor)) {
        $footerbtmcolor = '#1f1e26'; // default 
    } else {
        $footerbtmcolor = $theme->settings->footerbtmcolor;
    }

    $css = edusmart30_set_footerbtmcolor($css, $footerbtmcolor); 
    
    

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_edusmart30_set_customcss($css, $customcss);

    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_edusmart30_set_logo($css, $logo) {
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_edusmart30_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('edusmart30');
        // By default, theme files must be cache-able by both browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } 
    
    else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slide1image') {
        $theme = theme_config::load('edusmart30');
        return $theme->setting_file_serve('slide1image', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slide2image') {
        $theme = theme_config::load('edusmart30');
        return $theme->setting_file_serve('slide2image', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slide3image') {
        $theme = theme_config::load('edusmart30');
        return $theme->setting_file_serve('slide3image', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slide4image') {
        $theme = theme_config::load('edusmart30');
        return $theme->setting_file_serve('slide4image', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_edusmart30_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function edusmart30_set_themecolor($css, $themecolor) {
    $tag = '[[setting:themecolor]]';
    $css = str_replace($tag, $themecolor, $css);
    return $css;
}

function edusmart30_set_headerbgc($css, $headerbgc) {
    $tag = '[[setting:headerbgc]]';
    $css = str_replace($tag, $headerbgc, $css);
    return $css;
}

function edusmart30_set_linktxtc($css, $linktxtc) {
    $tag = '[[setting:linktxtc]]';
    $css = str_replace($tag, $linktxtc, $css);
    return $css;
}

function edusmart30_set_footerbtmcolor($css, $footerbtmcolor) {
    $tag = '[[setting:footerbtmcolor]]';
    $css = str_replace($tag, $footerbtmcolor, $css);
    return $css;
}


function edusmart30_set_footertopcolor($css, $footertopcolor) {
    $tag = '[[setting:footertopcolor]]';
    $css = str_replace($tag, $footertopcolor, $css);
    return $css;
}


function edusmart30_set_fontsizereference($css, $fontsizereference) {
	global $PAGE;
	//var_dump($PAGE->theme->settings);
	

	if (!empty($PAGE->theme->settings->customfontsize) && isset($_COOKIE['yuifont'])){
		$fontsizereference=$_COOKIE['yuifont'];
	}
    $tag = '[[setting:fontsizereference]]';
    $css = str_replace($tag, $fontsizereference.'px', $css);
    $css =  edusmart30_mk_height_asbar($fontsizereference, $css);
	return $css;
}


function edusmart30_mk_height_asbar($asbheight, $css){
	$tag = '[[setting:asbheight]]';
	
	// +1 can be tricky it is used tackle height of asweombar 
	// when redirect to other page, in that time 
	//$height = 30 + ($asbheight - 13) + 1 ; 
	$height = 30 + ($asbheight - 13) ;
	$css = str_replace($tag, $height.'px', $css);
	return $css;
}


/**
 * Returns an object containing HTML for the areas affected by settings.
 *
 * Do not add edusmart30 specific logic in here, child themes should be able to
 * rely on that function just by declaring settings with similar names.
 *
 * @param renderer_base $output Pass in $OUTPUT.
 * @param moodle_page $page Pass in $PAGE.
 * @return stdClass An object with the following properties:
 *      - navbarclass A CSS class to use on the navbar. By default ''.
 *      - heading HTML to use for the heading. A logo if one is selected or the default heading.
 *      - footnote HTML to use as a footnote. By default ''.
 */
function theme_edusmart30_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;

    $return->navbarclass = '';
    if (!empty($page->theme->settings->invert)) {
        $return->navbarclass .= ' navbar-inverse';
    }

    if (!empty($page->theme->settings->logo)) {
        $return->heading = html_writer::tag('div', '', array('class' => 'logo'));
    } else {
        $return->heading = $output->page_heading();
    }

    $return->footnote = '';
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>';
    }

    return $return;
}

/**
 * All theme functions should start with theme_edusmart30_
 * @deprecated since 2.5.1
 */
function edusmart30_process_css() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

/**
 * All theme functions should start with theme_edusmart30_
 * @deprecated since 2.5.1
 */
function edusmart30_set_logo() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

/**
 * All theme functions should start with theme_edusmart30_
 * @deprecated since 2.5.1
 */
function edusmart30_set_customcss() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
