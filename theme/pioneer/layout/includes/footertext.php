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
 * This is built using the bootstrapbase template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

        <div class="row-fluid customfooter">
            <?php if ($PAGE->theme->settings->fullfootertext) { ?> <div class="span12 footertext">
                <?php echo $PAGE->theme->settings->fullfootertext ?> 
            </div><?php } ?>
            <?php if ($PAGE->theme->settings->footertext1) { ?><div class="span3 footertext">
                 <?php echo $PAGE->theme->settings->footertext1 ?> 
            </div><?php } ?>
           <?php if ($PAGE->theme->settings->footertext2) { ?>  <div class="span3 footertext">
                <?php echo $PAGE->theme->settings->footertext2 ?> 
            </div><?php } ?>
            <?php if ($PAGE->theme->settings->footertext3) { ?> <div class="span3 footertext">
                <?php echo $PAGE->theme->settings->footertext3 ?> 
            </div><?php } ?>
           <?php if ($PAGE->theme->settings->footertext4) { ?>  <div class="span3 footertext">
                <?php echo $PAGE->theme->settings->footertext4 ?> 
            </div><?php } ?>
        </div>

        <?php if ($PAGE->theme->settings->copyrighttext) { ?>
            <div class="copyrighttext">
                © <?php echo $PAGE->theme->settings->copyrighttext ?>
            </div>
        <?php } ?>
