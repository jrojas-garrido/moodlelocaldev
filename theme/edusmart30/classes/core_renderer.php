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

require_once($CFG->dirroot . '/theme/bootstrapbase/renderers.php');

/**
 * ababil core renderers.
 *
 * @package    theme_ababil
 * @copyright  2015 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class theme_edusmart30_core_renderer extends theme_bootstrapbase_core_renderer {

    /**
     * Either returns the parent version of the header bar, or a version with the logo replacing the header.
     *
     * @since Moodle 2.9
     * @param array $headerinfo An array of header information, dependant on what type of header is being displayed. The following
     *                          array example is user specific.
     *                          heading => Override the page heading.
     *                          user => User object.
     *                          usercontext => user context.
     * @param int $headinglevel What level the 'h' tag will be.
     * @return string HTML for the header bar.
     */
    public function context_header($headerinfo = null, $headinglevel = 1) {

        if ($this->should_render_logo($headinglevel)) {
            return html_writer::tag('div', '', array('class' => 'logo'));
        }
        return parent::context_header($headerinfo, $headinglevel);
    }

    /**
     * Determines if we should render the logo.
     *
     * @param int $headinglevel What level the 'h' tag will be.
     * @return bool Should the logo be rendered.
     */
    protected function should_render_logo($headinglevel = 1) {
        global $PAGE;

        // Only render the logo if we're on the front page or login page
        // and the theme has a logo.
        if ($headinglevel == 1 && !empty($this->page->theme->settings->logo)) {
            if ($PAGE->pagelayout == 'frontpage' || $PAGE->pagelayout == 'login') {
                return true;
            }
        }

        return false;
    }
}


require_once($CFG->dirroot . "/course/renderer.php");

class theme_edusmart30_core_course_renderer extends core_course_renderer {
    
    protected function coursecat_coursebox_content(coursecat_helper $chelper, $course) {
        global $CFG;
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            return '';
        }
        if ($course instanceof stdClass) {
            require_once($CFG->libdir. '/coursecatlib.php');
            $course = new course_in_list($course);
        }
        $content = '';
        
        
               // print enrolmenticons
        if ($icons = enrol_get_course_info_icons($course)) {
            $content .= html_writer::start_tag('div', array('class' => 'enrolmenticons'));
            foreach ($icons as $pix_icon) {
                $content .= $this->render($pix_icon);
            }
            $content .= html_writer::end_tag('div'); // .enrolmenticons
        }

        $content .= html_writer::end_tag('div'); // .info
        
          // Display course overview files.
   $content .= html_writer::start_tag('div', array('class' => 'content'));//start content
         //print_r($course);
         //   exit();
        // display course overview files
            $courses = get_courses();
            $totalcount = count($courses);
        for($x=1; $x<=$totalcount; $x++){
            $url = $CFG->wwwroot."/theme/edusmart30/pix/defaultcourse.jpg";
            foreach ($course->get_course_overviewfiles() as $file) {
                $isimage = $file->is_valid_image();
                $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                        '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                        $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                if (!$isimage) {
                    $url = $CFG->wwwroot."/theme/edusmart30/pix/defaultcourse.jpg";
                }
            }
        }

            $content .= html_writer::start_tag('div', array('class' => 'coursepic'));//start image div
            $coursepic = html_writer::empty_tag('img', array('src' => $url,'class' => 'img-responsive course_image', 'alt'=> 'Course Image'));

            $content .= html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)),
                                            $coursepic, array('class' => $course->visible ? '' : 'dimmed'));
            $content .= html_writer::end_tag('div'); // .image div


        if ($course->has_summary()) {

            $summs = $chelper->get_course_formatted_summary($course, array('overflowdiv' => false, 'noababil' => true,
                    'para' => false));
            $summs = strip_tags($summs);
            $truncsum = strlen($summs) > 100 ? substr($summs, 0, 100)."..." : $summs;
            $content .= html_writer::tag('div', $truncsum ,array('class' => 'summary', 'style' => 'display:none'));
           $content .= html_writer::tag('div', $summs, array('class' => 'fullsum', 'style' => 'display:block'));
           
        }  







        // Display course category if necessary (for example in search results).
        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_EXPANDED_WITH_CAT) {
            require_once($CFG->libdir. '/coursecatlib.php');
            if ($cat = coursecat::get($course->category, IGNORE_MISSING)) {
                $content .= html_writer::start_tag('div', array('class' => 'coursecat'));
                $content .= get_string('category').': '.
                        html_writer::link(new moodle_url('/course/index.php', array('categoryid' => $cat->id)),
                                $cat->get_formatted_name(), array('class' => $cat->visible ? '' : 'dimmed'));
                $content .= html_writer::end_tag('div'); // .coursecat
            }
        }
        
                // display course contacts. See course_in_list::get_course_contacts()
        if ($course->has_course_contacts()) {
            $content .= html_writer::start_tag('ul', array('class' => 'teachers'));
            foreach ($course->get_course_contacts() as $userid => $coursecontact) {
            	global $DB, $OUTPUT;
            	$user = $DB->get_record('user', array('id'=> $userid));
            	$face = $OUTPUT->user_picture($user, array('size'=>50));
                $name = $coursecontact['rolename'].': '. $face.
                        html_writer::link(new moodle_url('/user/view.php',
                                array('id' => $userid, 'course' => SITEID)),
                            $coursecontact['username']);
                $content .= html_writer::tag('li', $name);
            }
            $content .= html_writer::end_tag('ul'); // .teachers
        }
        
        
        
        
        
        
        
                // display course overview files
            $courses = get_courses();
            $totalcount = count($courses);
        for($x=1; $x<=$totalcount; $x++){
            $url = $CFG->wwwroot."/theme/edusmart30/pix/defaultcourse.jpg";
            foreach ($course->get_course_overviewfiles() as $file) {
                $isimage = $file->is_valid_image();
                $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                        '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                        $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                if (!$isimage) {
                    $url = $CFG->wwwroot."/theme/edusmart30/pix/defaultcourse.jpg";
                }
            }
        }
        
        
         
         if ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $icondirection = 'left';
            if ('ltr' === get_string('thisdirection', 'langconfig')) {
                $icondirection = 'right';
            }
            if (is_enrolled(context_course::instance($course->id))) {
                $arrow = html_writer::tag('span', '', array('class' => ' glyphicon glyphicon-arrow-'.$icondirection));
                $visit = html_writer::tag('span', "Lire la suite" . ' ' . $arrow);
                $visitlink = html_writer::link(new moodle_url('/course/view.php',
                    array('id' => $course->id)), $visit);
                  $content .= html_writer::tag('div', $visitlink, array('class' => 'visitlink'));
    
               
            }
        }
        
        
        

        return $content;
    }
    
    


    
}


