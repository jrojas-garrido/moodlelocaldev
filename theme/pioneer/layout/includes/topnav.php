<div class="fpcustomnav-container">
<header class="fixed-top-nav">
        <nav role="navigation" class="navbar navbar-inner">

        <?php if ($PAGE->theme->settings->logo) { ?><a href="<?php echo $CFG->wwwroot;?>"><div id="logo"> </div></a>
        <?php } else { ?>
                <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
        <?php } ?> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </a>
          
        <?php echo $OUTPUT->user_menu(); ?>
          
        <div class="nav-collapse collapse">
          <div>
         <?php if(isloggedin()) { ?> 
          
          <div class="top-search">
            <?php if($PAGE->theme->settings->fpsearchboxtop) { ?>
            <?php require(dirname(__FILE__).'/searchbox.php'); ?>
            <?php } ?>
           </div>

            <?php 
              if($PAGE->theme->settings->toggleiconnav==1) {
              require_once(dirname(__FILE__).'/iconnav.php');
              } else if($PAGE->theme->settings->toggleiconnav==2) {
              require_once(dirname(__FILE__).'/iconnav.php');
              }
            ?>
           </div>
           <?php } else { ?>
           <?php } ?>
                <?php echo $OUTPUT->navigation_menu(); ?>
                <?php echo $OUTPUT->tools_menu(); ?>
                <?php echo $OUTPUT->custom_menu(); ?>
                <?php if (empty($PAGE->layout_options['langmenu']) || $PAGE->layout_options['langmenu']) { echo $OUTPUT->lang_menu(); } ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
          </div>
        </nav>
</header>
</div>

<div class="clearfix"></div>