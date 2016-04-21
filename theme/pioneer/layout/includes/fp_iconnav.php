<?php if (isloggedin() ) { ?> 
<div class="fpstartwrap">
<div class="fpstart">
    <div class="iconset">
		<?php if ($PAGE->theme->settings->nav1icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav1buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav1buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav1icon ?>"></i></a>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav2icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav2buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav2buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav2icon ?>"></i></a>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav3icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav3buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav3buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav3icon ?>"></i></a>
        <?php } ?>
		<?php if ($PAGE->theme->settings->nav4icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav4buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav4buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav4icon ?>"></i></a>
        <?php } ?>
		<?php if ($PAGE->theme->settings->nav5icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav5buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav5buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav5icon ?>"></i></a>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav6icon) { ?>
		<a href="<?php echo $PAGE->theme->settings->nav6buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav6buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav6icon ?>"></i></a>
        <?php } ?>
		<?php if ($PAGE->theme->settings->nav7icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav7buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav7buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav7icon ?>"></i></a>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav8icon) { ?>
        <a href="<?php echo $PAGE->theme->settings->nav8buttonurl ?>" target="_self" id="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $PAGE->theme->settings->nav8buttontext ?>"><i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav8icon ?>"></i></a>
        <?php } ?>
    </div>
    <?php if($PAGE->theme->settings->fpsearchboxmain) { ?>
        <div class="fpsearch">
            <?php require(dirname(__FILE__).'/searchbox.php'); ?>
        </div> 
    <?php } ?>
</div>
</div>
<?php } else { ?>
<?php } ?>