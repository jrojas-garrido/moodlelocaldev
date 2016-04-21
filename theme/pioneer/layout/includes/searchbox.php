<form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get">
    <input type="text" placeholder="<?php echo get_string('fpsearch' , 'theme_pioneer'); ?>" name="search" value="">
    <input type="submit" value="<?php echo get_string('fpsearchbutton' , 'theme_pioneer'); ?>">
</form>