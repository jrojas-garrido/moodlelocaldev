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
<div class="clearfix"></div>
<div id="tab-spots">
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <?php if ($PAGE->theme->settings->tab1) { ?>
    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><?php echo $PAGE->theme->settings->tab1 ?></a></li>
    <?php } ?>
    <?php if ($PAGE->theme->settings->tab2) { ?>
    <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><?php echo $PAGE->theme->settings->tab2 ?></a></li>
    <?php } ?>
    <?php if ($PAGE->theme->settings->tab3) { ?>
    <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><?php echo $PAGE->theme->settings->tab3 ?></a></li>
    <?php } ?>
    <?php if ($PAGE->theme->settings->tab4) { ?>
    <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"><?php echo $PAGE->theme->settings->tab4 ?></a></li>
    <?php } ?>
    <?php if ($PAGE->theme->settings->tab5) { ?>
    <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"><?php echo $PAGE->theme->settings->tab5 ?></a></li>
    <?php } ?>
    <?php if ($PAGE->theme->settings->tab6) { ?>
    <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"><?php echo $PAGE->theme->settings->tab6 ?></a></li>
    <?php } ?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  <?php if ($PAGE->theme->settings->tab1) { ?>
  <div role="tabpanel" class="tab-pane fade in active" id="tab1"> <?php echo $PAGE->theme->settings->tab1content ?> </div>
  <?php } ?>
  <?php if ($PAGE->theme->settings->tab2) { ?>
  <div role="tabpanel" class="tab-pane fade" id="tab2"> <?php echo $PAGE->theme->settings->tab2content ?> </div>
  <?php } ?>
  <?php if ($PAGE->theme->settings->tab3) { ?>
  <div role="tabpanel" class="tab-pane fade" id="tab3"> <?php echo $PAGE->theme->settings->tab3content ?> </div>
  <?php } ?>
  <?php if ($PAGE->theme->settings->tab4) { ?>
  <div role="tabpanel" class="tab-pane fade" id="tab4"> <?php echo $PAGE->theme->settings->tab4content ?> </div>
  <?php } ?>
  <?php if ($PAGE->theme->settings->tab5) { ?>
  <div role="tabpanel" class="tab-pane fade" id="tab5"> <?php echo $PAGE->theme->settings->tab5content ?> </div>
  <?php } ?>
  <?php if ($PAGE->theme->settings->tab6) { ?>
  <div role="tabpanel" class="tab-pane fade" id="tab6"> <?php echo $PAGE->theme->settings->tab6content ?> </div>
  <?php } ?>
</div>
</div>
</div>
