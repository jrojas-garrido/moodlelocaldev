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
 * pioneerd theme with the underlying Bootstrap theme.
 *
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');
require_once($CFG->dirroot . "/course/renderer.php");
require_once($CFG->libdir. '/coursecatlib.php');

 class theme_pioneer_core_renderer extends theme_bootstrapbase_core_renderer {
    /*
     * Returns HTML to display a "Turn editing on/off" button in a form.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     * @return string HTML the button
     * Written by G J Barnard
     */
    public function edit_button(moodle_url $url) {
        $url->param('sesskey', sesskey());
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $btn = 'btn-danger';
            $title = get_string('turneditingoff');
            $icon = 'fa-power-off';
        } else {
            $url->param('edit', 'on');
            $btn = 'btn-success';
            $title = get_string('turneditingon');
            $icon = 'fa-edit';
        }
        return html_writer::tag('a', html_writer::start_tag('i', array('class' => $icon . ' fa fa-fw')) .
            html_writer::end_tag('i') . $title, array('href' => $url, 'class' => 'btn ' . $btn, 'title' => $title));
    }

    /*
     * This renders the navbar.
     * Uses bootstrap compatible html.
     */
    public function navbar() {
        $items = $this->page->navbar->get_items();
        $breadcrumbs = array();
        foreach ($items as $item) {
            $item->hideicon = true;
            $breadcrumbs[] = $this->render($item);
        }
        $divider = '<i class="fa fa-chevron-right"></i>';
        $listitems = '<li>'.join(" $divider</li><li>", $breadcrumbs).'</li>';
        $title = '<span class="accesshide">'.get_string('pagepath').'</span>';
        return $title . "<ul class=\"breadcrumb\">$listitems</ul>";
    }


    public function navigation_menu() {
        global $PAGE, $COURSE, $OUTPUT, $CFG;
        $menu = new custom_menu();
        
        if (isloggedin() && !isguestuser()) {

            if (!empty($PAGE->theme->settings->displaymycourses)) {
                $mycoursetitle = $this->page->theme->settings->mycoursetitle;
            if ($mycoursetitle == 'module') {
                $branchtitle = get_string('mymodules', 'theme_pioneer');
            } else if ($mycoursetitle == 'unit') {
                $branchtitle = get_string('myunits', 'theme_pioneer');
            } else if ($mycoursetitle == 'class') {
                $branchtitle = get_string('myclasses', 'theme_pioneer');
            } else {
                $branchtitle = get_string('mycourses', 'theme_pioneer');
            }
            $branchlabel = '<i class="fa fa-briefcase"></i>'.$branchtitle;
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 10001;

                $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
                list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();

                if ($sortedcourses) {
                    foreach ($sortedcourses as $course) {
                        if ($course->visible) {
                            $branch->add(format_string($course->fullname), new moodle_url('/course/view.php?id='.$course->id),
                                    format_string($course->shortname));
                        }
                    }
                } else {
                    $noenrolments = get_string('noenrolments', 'theme_pioneer');
                    $branch->add('<em>'.$noenrolments.'</em>', new moodle_url('/'), $noenrolments);
                }
            }
            
            if (!empty($PAGE->theme->settings->enablethiscourse)) {
                if (ISSET($COURSE->id) && $COURSE->id > 1) {
                    $branchtitle = get_string('thiscourse', 'theme_pioneer');
                    $branchlabel = '<i class="fa fa-sitemap"></i><span class="menutitle">'.$branchtitle.'</span>';
                    $branchurl = new moodle_url('#');
                    $branch = $menu->add($branchlabel, $branchurl, $branchtitle, 10002);

                    $branchtitle = "People";
                    $branchlabel = '<i class="fa fa-users"></i>'.$branchtitle;
                    $branchurl = new moodle_url('/user/index.php', array('id' => $PAGE->course->id));
                    $branch->add($branchlabel, $branchurl, $branchtitle, 100003);

                    $data = theme_pioneer_get_course_activities();

                    foreach ($data as $modname => $modfullname) {
                        if ($modname === 'resources') {
                            $icon = $OUTPUT->pix_icon('icon', '', 'mod_page', array('class' => 'icon'));
                            $branch->add($icon.$modfullname, new moodle_url('/course/resources.php', array('id' => $PAGE->course->id)));
                        } else {
                            $icon = '<img src="'.$OUTPUT->pix_url('icon', $modname) . '" class="icon" alt="" />';
                            $branch->add($icon.$modfullname, new moodle_url('/mod/'.$modname.'/index.php',
                                    array('id' => $PAGE->course->id)));
                        }
                    }
                }
            }
        }

        return $this->render_custom_menu($menu);
    }

public function tools_menu() {
        global $PAGE;
        $custommenuitems = '';
        if (!empty($PAGE->theme->settings->toolsmenu)) {
            $custommenuitems .= "<i class='fa fa-wrench'> </i>".get_string('toolsmenulabel', 'theme_pioneer')."|#|".
                    get_string('toolsmenulabel', 'theme_pioneer')."\n";
            $arr = explode("\n", $PAGE->theme->settings->toolsmenu);
            // We want to force everything inputted under this menu.
            foreach ($arr as $key => $value) {
                $arr[$key] = '-' . $arr[$key];
            }
            $custommenuitems .= implode("\n", $arr);
        }
        $custommenu = new custom_menu($custommenuitems);
        return $this->render_custom_menu($custommenu);
    }

    public function lang_menu() {
        global $CFG;
        $langmenu = new custom_menu();

        $addlangmenu = true;
        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2
            or empty($CFG->langmenu)
            or ($this->page->course != SITEID and !empty($this->page->course->lang))
        ) {
            $addlangmenu = false;
        }

        if ($addlangmenu) {
            $strlang = get_string('language');
            $currentlang = current_language();
            if (isset($langs[$currentlang])) {
                $currentlang = $langs[$currentlang];
            } else {
                $currentlang = $strlang;
            }
            $this->language = $langmenu->add('<i class="fa fa-flag"></i><span class="langdesc">'.$currentlang.'</span>',
                    new moodle_url('#'), $strlang, 100);
            foreach ($langs as $langtype => $langname) {
                $this->language->add($langname, new moodle_url($this->page->url, array('lang' => $langtype)), $langname);
            }
        }
        return $this->render_custom_menu($langmenu);
    }

    public function custom_menu($custommenuitems = '') {
        global $CFG;

        if (empty($custommenuitems) && !empty($CFG->custommenuitems)) {
            $custommenuitems = $CFG->custommenuitems;
        }
        $custommenu = new custom_menu($custommenuitems, current_language());
        return $this->render_custom_menu($custommenu);
    }
    /*
     * This renders the bootstrap top menu.
     *
     * This renderer is needed to enable the Bootstrap style navigation.
     */
    protected function render_custom_menu(custom_menu $menu) {
        global $CFG;

        // TODO: eliminate this duplicated logic, it belongs in core, not
        // here. See MDL-39565.
        $addlangmenu = true;
        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2
            or empty($CFG->langmenu)
            or ($this->page->course != SITEID and !empty($this->page->course->lang))) {
            $addlangmenu = false;
        }

        if (!$menu->has_children() && $addlangmenu === false) {
            return '';
        }

        $content = '<ul class="nav">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return $content.'</ul>';
    }


}
?>
