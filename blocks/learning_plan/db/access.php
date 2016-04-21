<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    'block/learning_plan:viewpages' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'legacy' => array(
            'guest' => CAP_PREVENT,
            'student' => CAP_ALLOW,
            'user' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),'block/learning_plan:myaddinstance' => array(
       'riskbitmask'  => RISK_PERSONAL,
       'captype'      => 'read',
       'contextlevel' => CONTEXT_BLOCK,
       'archetypes'   => array(
         'user' => CAP_ALLOW,
         'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
           'student' => CAP_ALLOW,
       ),
       'clonepermissionsfrom' => 'moodle/my:manageblocks'
    ),
    'block/learning_plan:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
        ),
        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),
    'block/learning_plan:managepages' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'legacy' => array(
            'guest' => CAP_PREVENT,
            'student' => CAP_PREVENT,
            'teacher' => CAP_PREVENT,
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    )
);
