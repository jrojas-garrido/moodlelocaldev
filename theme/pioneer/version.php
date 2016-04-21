<?php
/**
 * Theme Pioneer version file.
 *
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
$plugin->maturity = MATURITY_STABLE; // this version's maturity level.
$plugin->release = 'Pioneer v1.3.7';
$plugin->version   = 2016030800;
$plugin->requires  = 2014050800;
$plugin->component = 'theme_pioneer';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2014050800,
    'theme_clean'  => 2014050800,
);
