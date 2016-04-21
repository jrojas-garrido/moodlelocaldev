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
 * A one column layout for the Bootstrapbase theme.
 *
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$html = theme_pioneer_get_html_for_settings($OUTPUT, $PAGE);
$PAGE->requires->jquery();
require('includes/courseimage.php'); 
echo $OUTPUT->doctype() ?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <?php require_once(dirname(__FILE__).'/includes/fonts.php'); ?>
    <?php if($PAGE->theme->settings->analyticsenabled==1) { ?>  <?php require_once(dirname(__FILE__).'/includes/guniversal.php'); ?> <?php } ?>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">
    
<?php require_once(dirname(__FILE__).'/includes/topnav.php'); ?>

    <div id="page-content" class="row-fluid">
        <div id="header-image-box">
            <div class="header-image" <?php if ($courseimage){ echo 'style="background-image: url('.$courseimage.');"'; } ?> >
            <div class="header-spacer-incourse">
            <div class="course-titlewrap">
            <div class="course-title">
            <?php echo $html->heading; ?>
           </div>
           </div>
                <div id="course-header">      
                <?php echo $OUTPUT->course_header(); ?>
                </div>
            </div>
            </div>
        </div>
        <div id="breadcrumb-container" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav> 
        </div>
        <div id="editbutton">
                <?php echo $OUTPUT->page_heading_button(); ?>
        </div> 
        <div class="coursecontents">
        <section id="region-main" class="span12">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
    </div>

    </div>

        <?php require_once(dirname(__FILE__).'/includes/socialicons.php'); ?>


    <footer id="page-footer">

        <?php require_once(dirname(__FILE__).'/includes/footertext.php'); ?>
                
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>
