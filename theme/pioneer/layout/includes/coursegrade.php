<?php
require_once $CFG->libdir.'/gradelib.php';
require_once $CFG->dirroot.'/grade/lib.php';
require_once $CFG->dirroot.'/grade/report/user/lib.php';

$courseid=$COURSE->id;
$userid=$USER->id;
$context = context_course::instance($COURSE->id);

if (has_capability('moodle/grade:view', $context) and $COURSE->showgrades) {
    //ok - can view own grades
    $access = true;
}

//first make sure we have proper final grades - this must be done before constructing of the grade tree
grade_regrade_final_grades($courseid);

/// return tracking object
$gpr = new grade_plugin_return(array('type'=>'report', 'plugin'=>'user', 'courseid'=>$courseid, 'userid'=>$userid));

$report = new grade_report_user($courseid, $gpr, $context, $userid);

if ($report->fill_table()) {
	echo '<div class="courseheadergradepercentage">';
		echo '<br />'.$report->print_table(true);
	echo '</div>';
}
