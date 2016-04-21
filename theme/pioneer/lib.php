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
 * Theme pioneer lib.
 *
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Extra LESS code to inject.
 *
 * This will generate some LESS code from the settings used by the user. We cannot use
 * the {@link theme_pioneer_less_variables()} here because we need to create selectors or
 * alter existing ones.
 *
 * @param theme_config $theme The theme config object.
 * @return string Raw LESS code.
 */
function theme_pioneer_extra_less($theme) {
    $content = '';
    $imageurl = $theme->setting_file_url('backgroundimage', 'backgroundimage');
    // Sets the background image, and its settings.
    if (!empty($imageurl)) {
        $content .= 'body { ';
        $content .= "background-image: url('$imageurl');";
        if (!empty($theme->settings->backgroundfixed)) {
            $content .= 'background-attachment: fixed;';
        }
        if (!empty($theme->settings->backgroundposition)) {
            $content .= 'background-position: ' . str_replace('_', ' ', $theme->settings->backgroundposition) . ';';
        }
        if (!empty($theme->settings->backgroundrepeat)) {
            $content .= 'background-repeat: ' . $theme->settings->backgroundrepeat . ';';
        }
        $content .= ' }';
    }
   
    return $content;
}

/**
 * Returns variables for LESS.
 *
 * We will inject some LESS variables from the settings that the user has defined
 * for the theme. No need to write some custom LESS for this.
 *
 * @param theme_config $theme The theme config object.
 * @return array of LESS variables without the @.
 */
function theme_pioneer_less_variables($theme) {
    $variables = array();
    if (!empty($theme->settings->bodybackground)) {
        $variables['bodyBackground'] = $theme->settings->bodybackground;
    }
    if (!empty($theme->settings->textcolor)) {
        $variables['textColor'] = $theme->settings->textcolor;
    }
    if (!empty($theme->settings->linkcolor)) {
        $variables['linkColor'] = $theme->settings->linkcolor;
    }
    return $variables;
}

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_pioneer_process_css($css, $theme) {

    // Set the background image for the logo.

    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_pioneer_set_logo($css, $logo, $theme);

    $headerbackgroundimage = $theme->setting_file_url('headerbackgroundimage', 'headerbackgroundimage');
    $css = theme_pioneer_set_headerbackgroundimage($css, $headerbackgroundimage, $theme);

    $css = theme_pioneer_set_gheadingimporturl($css, $gheadingimporturl);
    $css = theme_pioneer_set_gbodyimporturl($css, $gbodyimporturl);

    // Set header font.
    if (!empty($theme->settings->headingfont)) {
        $headingfont = $theme->settings->headingfont;
    } else {
        $headingfont = '';
    }
    $css = theme_pioneer_set_headingfont($css, $headingfont);

   //Set activitybackground
    if (!empty($theme->settings->activitybackground)) {
        $activitybackground = $theme->settings->activitybackground;
    } else {
        $activitybackground = '';
    }
    $css = theme_pioneer_set_activitybackground($css, $activitybackground);

    //Set body font
    if (!empty($theme->settings->bodyfont)) {
        $bodyfont = $theme->settings->bodyfont;
    } else {
        $bodyfont = '';
    }
    $css = theme_pioneer_set_bodyfont($css, $bodyfont);

    //Set body font
    if (!empty($theme->settings->bodysize)) {
        $bodysize = $theme->settings->bodysize;
    } else {
        $bodysize = '';
    }
    $css = theme_pioneer_set_bodysize($css, $bodysize);


    $css = theme_pioneer_set_bodyweight($css, $bodyweight);

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_pioneer_set_customcss($css, $customcss);

    // Set header image padding.
    if (!empty($theme->settings->fpheaderimagepadding)) {
        $fpheaderimagepadding = $theme->settings->fpheaderimagepadding;
    } else {
        $fpheaderimagepadding = null;
    }
    $css = theme_pioneer_set_fpheaderimagepadding($css, $fpheaderimagepadding);

    // Set header image padding.
    if (!empty($theme->settings->headerimagepadding)) {
        $headerimagepadding = $theme->settings->headerimagepadding;
    } else {
        $headerimagepadding = null;
    }
    $css = theme_pioneer_set_headerimagepadding($css, $headerimagepadding);

    // Set header image padding.
    if (!empty($theme->settings->headerincourseimagepadding)) {
        $headerincourseimagepadding = $theme->settings->headerincourseimagepadding;
    } else {
        $headerincourseimagepadding = null;
    }
    $css = theme_pioneer_set_headerincourseimagepadding($css, $headerincourseimagepadding);
    
   // Set topic week background CSS.
    if (!empty($theme->settings->topicweekcolor)) {
        $topicweekcolor = $theme->settings->topicweekcolor;
    } else {
        $topicweekcolor = '';
    }
    $css = theme_pioneer_set_topicweekcolor($css, $topicweekcolor);


    if (!empty($theme->settings->blockbordercolor)) {
        $blockbordercolor = $theme->settings->blockbordercolor;
    } else {
        $blockbordercolor = '';
    }
    $css = theme_pioneer_set_blockbordercolor($css, $blockbordercolor);

    if (!empty($theme->settings->loginbuttoncolor)) {
        $loginbuttoncolor = $theme->settings->loginbuttoncolor;
    } else {
        $loginbuttoncolor = '';
    }
    $css = theme_pioneer_set_loginbuttoncolor($css, $loginbuttoncolor);

    if (!empty($theme->settings->tabbuttoncolor)) {
        $tabbuttoncolor = $theme->settings->tabbuttoncolor;
    } else {
        $tabbuttoncolor = '';
    }
    $css = theme_pioneer_set_tabbuttoncolor($css, $tabbuttoncolor);

    if (!empty($theme->settings->tabbuttonhovercolor)) {
        $tabbuttonhovercolor = $theme->settings->tabbuttonhovercolor;
    } else {
        $tabbuttonhovercolor = '';
    }
    $css = theme_pioneer_set_tabbuttonhovercolor($css, $tabbuttonhovercolor);

    if (!empty($theme->settings->blockcolor)) {
        $blockcolor = $theme->settings->blockcolor;
    } else {
        $blockbcolor = '';
    }
    $css = theme_pioneer_set_blockcolor($css, $blockcolor);


    if (!empty($theme->settings->contentbackgroundcolor)) {
        $contentbackgroundcolor = $theme->settings->contentbackgroundcolor;
    } else {
        $contentbackgroundcolor = '';
    }
    $css = theme_pioneer_set_contentbackgroundcolor($css, $contentbackgroundcolor);


    if (!empty($theme->settings->iconnavbackgroundcolor)) {
        $iconnavbackgroundcolor = $theme->settings->iconnavbackgroundcolor;
    } else {
        $iconnavbackgroundcolor = '';
    }
    $css = theme_pioneer_set_iconnavbackgroundcolor($css, $iconnavbackgroundcolor);

    // Set marketbox CSS.
    if (!empty($theme->settings->marketboxcolor)) {
        $marketboxcolor = $theme->settings->marketboxcolor;
    } else {
        $marketboxcolor = '';
    }
    $css = theme_pioneer_set_marketboxcolor($css, $marketboxcolor);

    // Set Socialwall post background color CSS.
    if (!empty($theme->settings->swpost)) {
        $swpost = $theme->settings->swpost;
    } else {
        $swpost = '';
    }
    $css = theme_pioneer_set_swpost($css, $swpost);

    // Set Socialwall add post color CSS.
    if (!empty($theme->settings->swaddpost)) {
        $swaddpost = $theme->settings->swaddpost;
    } else {
        $swaddpost = '';
    }
    $css = theme_pioneer_set_swaddpost($css, $swaddpost);

    // Set Socialwall message color CSS.
    if (!empty($theme->settings->swmessage)) {
        $swmessage = $theme->settings->swmessage;
    } else {
        $swmessage = '';
    }
    $css = theme_pioneer_set_swmessage($css, $swmessage);

    // Set Socialwall attachment color CSS.
    if (!empty($theme->settings->swattach)) {
        $swattach = $theme->settings->swattach;
    } else {
        $swattach = '';
    }
    $css = theme_pioneer_set_swattach($css, $swattach);

    // Set Socialwall attachment color CSS.
    if (!empty($theme->settings->swcomment)) {
        $swcomment = $theme->settings->swcomment;
    } else {
        $swcomment = '';
    }
    $css = theme_pioneer_set_swcomment($css, $swcomment);

    // Set section/week icon
    if (!empty($theme->settings->sectionheadericon)) {
        $sectionheadericon = $theme->settings->sectionheadericon;
    } else {
        $sectionheadericon = null;
    }
    $css = theme_pioneer_set_sectionheadericon($css, $sectionheadericon);

    // breadcrumb color
    if (!empty($theme->settings->breadcrumbcolor)) {
        $breadcrumbcolor = $theme->settings->breadcrumbcolor;
    } else {
        $breadcrumbcolor = '';
    }
    $css = theme_pioneer_set_breadcrumbcolor($css, $breadcrumbcolor);

    return $css;

}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_pioneer_set_logo($css, $logo, $theme) {
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $theme->pix_url('logo','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
//Adds custom background color to marketboxes
function theme_pioneer_set_marketboxcolor($css, $marketboxcolor) {
    $tag = '[[setting:marketboxcolor]]';
    $replacement = $marketboxcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds activity background
function theme_pioneer_set_activitybackground($css, $activitybackground) {
    $tag = '[[setting:activitybackground]]';
    $replacement = $activitybackground;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom background color to breadcrumbs
function theme_pioneer_set_breadcrumbcolor($css, $breadcrumbcolor) {
    $tag = '[[setting:breadcrumbcolor]]';
    $replacement = $breadcrumbcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_headerbackgroundimage($css, $headerbackgroundimage, $theme) {
    $tag = '[[setting:headerbackgroundimage]]';
    $replacement = $headerbackgroundimage;
    if (is_null($replacement)) {
        $replacement = $theme->pix_url('headerbackgroundimage','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_fpheaderimagepadding($css, $fpheaderimagepadding) {
    $tag = '[[setting:fpheaderimagepadding]]';
    $replacement = $fpheaderimagepadding;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_headerimagepadding($css, $headerimagepadding) {
    $tag = '[[setting:headerimagepadding]]';
    $replacement = $headerimagepadding;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_headerincourseimagepadding($css, $headerincourseimagepadding) {
    $tag = '[[setting:headerincourseimagepadding]]';
    $replacement = $headerincourseimagepadding;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds Google Font Settings
function theme_pioneer_set_gheadingimporturl($css, $gheadingimporturl) {
    $tag = '[[setting:gheadingimporturl]]';
    $replacement = $gheadingimporturl;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_pioneer_set_gbodyimporturl($css, $gbodyimporturl) {
    $tag = '[[setting:gbodyimporturl]]';
    $replacement = $gbodyimporturl;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_pioneer_set_headingfont($css, $headingfont) {
    $tag = '[[setting:headingfont]]';
    $replacement = $headingfont;
    if (is_null($replacement)) {
        $replacement = 'Georgia';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_pioneer_set_bodyfont($css, $bodyfont) {
    $tag = '[[setting:bodyfont]]';
    $replacement = $bodyfont;
    if (is_null($replacement)) {
        $replacement = 'Arial';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_pioneer_set_bodysize($css, $bodysize) {
    $tag = '[[setting:bodysize]]';
    $replacement = $bodysize;
    if (is_null($replacement)) {
        $replacement = '16';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_pioneer_set_bodyweight($css, $bodyweight) {
    $tag = '[[setting:bodyweight]]';
    $replacement = $bodyweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


//Adds custom background color to topics and weeks
function theme_pioneer_set_topicweekcolor($css, $topicweekcolor) {
    $tag = '[[setting:topicweekcolor]]';
    $replacement = $topicweekcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_loginbuttoncolor($css, $loginbuttoncolor) {
    $tag = '[[setting:loginbuttoncolor]]';
    $replacement = $loginbuttoncolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_tabbuttoncolor($css, $tabbuttoncolor) {
    $tag = '[[setting:tabbuttoncolor]]';
    $replacement = $tabbuttoncolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_tabbuttonhovercolor($css, $tabbuttonhovercolor) {
    $tag = '[[setting:tabbuttonhovercolor]]';
    $replacement = $tabbuttonhovercolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_blockbordercolor($css, $blockbordercolor) {
    $tag = '[[setting:blockbordercolor]]';
    $replacement = $blockbordercolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_blockcolor($css, $blockcolor) {
    $tag = '[[setting:blockcolor]]';
    $replacement = $blockcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_contentbackgroundcolor($css, $contentbackgroundcolor) {
    $tag = '[[setting:contentbackgroundcolor]]';
    $replacement = $contentbackgroundcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_set_iconnavbackgroundcolor($css, $iconnavbackgroundcolor) {
    $tag = '[[setting:iconnavbackgroundcolor]]';
    $replacement = $iconnavbackgroundcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_pioneer_set_swpost($css, $swpost) {
    $tag = '[[setting:swpost]]';
    $replacement = $swpost;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_pioneer_set_swaddpost($css, $swaddpost) {
    $tag = '[[setting:swaddpost]]';
    $replacement = $swaddpost;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_pioneer_set_swmessage($css, $swmessage) {
    $tag = '[[setting:swmessage]]';
    $replacement = $swmessage;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall attachment color
function theme_pioneer_set_swattach($css, $swattach) {
    $tag = '[[setting:swattach]]';
    $replacement = $swattach;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall attachment color
function theme_pioneer_set_swcomment($css, $swcomment) {
    $tag = '[[setting:swcomment]]';
    $replacement = $swcomment;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
//Adds custom icon to section and weekly topic titles
function theme_pioneer_set_sectionheadericon($css, $sectionheadericon) {
    $tag = '[[setting:sectionheadericon]]';
    $replacement = $sectionheadericon;
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
function theme_pioneer_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'logo' || $filearea === 'backgroundimage' || $filearea === 'headerbackgroundimage' || $filearea === 'marketing1image'|| $filearea === 'marketing2image' || $filearea === 'marketing3image'  )) {
        $theme = theme_config::load('pioneer');
        // By default, theme files must be cache-able by both browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

function theme_pioneer_get_setting($setting, $format = false) {
    global $CFG;
    require_once($CFG->dirroot . '/lib/weblib.php');
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('pioneer');
    }
    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}
function theme_pioneer_get_course_activities() {
    GLOBAL $CFG, $PAGE, $OUTPUT;
    // A copy of block_activity_modules.
    $course = $PAGE->course;
    $content = new stdClass();
    $modinfo = get_fast_modinfo($course);
    $modfullnames = array();

    $archetypes = array();

    foreach ($modinfo->cms as $cm) {
        // Exclude activities which are not visible or have no link (=label).
        if (!$cm->uservisible or !$cm->has_view()) {
            continue;
        }
        if (array_key_exists($cm->modname, $modfullnames)) {
            continue;
        }
        if (!array_key_exists($cm->modname, $archetypes)) {
            $archetypes[$cm->modname] = plugin_supports('mod', $cm->modname, FEATURE_MOD_ARCHETYPE, MOD_ARCHETYPE_OTHER);
        }
        if ($archetypes[$cm->modname] == MOD_ARCHETYPE_RESOURCE) {
            if (!array_key_exists('resources', $modfullnames)) {
                $modfullnames['resources'] = get_string('resources');
            }
        } else {
            $modfullnames[$cm->modname] = $cm->modplural;
        }
    }
    core_collator::asort($modfullnames);

    return $modfullnames;
}
/**
 * Fetch the hide course ids
 *
 * @return array
 */
function theme_pioneer_hidden_courses_ids() {
    global $DB;
    $hcourseids = array();
    $result = $DB->get_records_sql("SELECT id FROM {course} WHERE visible='0' ");
    if (!empty($result)) {
        foreach ($result as $row) {
            $hcourseids[] = $row->id;
        }
    }
    return $hcourseids;
}


function theme_pioneer_strip_html_tags( $text ) {
    $text = preg_replace(
        array(
            // Remove invisible content.
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
            // Add line breaks before and after blocks.
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text
    );
    return strip_tags( $text );
}

/**
 * Cut the Course content.
 *
 * @param $str
 * @param $n
 * @param $end_char
 * @return string
 */
function theme_pioneer_course_trim_char($str, $n = 500, $endchar = '&#8230;') {
    if (strlen($str) < $n) {
        return $str;
    }

    $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));
    if (strlen($str) <= $n) {
        return $str;
    }

    $out = "";
    $small = substr($str, 0, $n);
    $out = $small.$endchar;
    return $out;
}


function theme_pioneer_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;
    $return->heading = $output->page_heading();
    $return->generalalert = '';
    if (!empty($page->theme->settings->generalalert)) {
        $return->generalalert = '<div class="generalalert text-center">'.format_text($page->theme->settings->generalalert).'</div>';
    }

    return $return;
}

function theme_pioneer_get_html_for_fptextbox(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;
    $return->heading = $output->page_heading();
    $return->fptextbox = '';
    if (!empty($page->theme->settings->fptextbox)) {
        $return->fptextbox = '<div class="fptextbox">'.format_text($page->theme->settings->fptextbox).'</div>';
    }

    return $return;
}



/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_pioneer_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_pioneer_page_init(moodle_page $page) {
$page->requires->jquery_plugin('bootstrap-tooltip', 'theme_pioneer');
}

function theme_pioneer_lang($key = '') {
    $pos = strpos($key, 'lang:');
    if ($pos !== false) {
        list($l, $k) = explode(":", $key);
        $v = get_string($k, 'theme_pioneer');
        return $v;
    } else {
        return $key;
    }
}