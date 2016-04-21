<?php 
if (!empty($CFG->loginpasswordautocomplete)) {
    $autocomplete = 'autocomplete="off"';
} else {
    $autocomplete = '';
}
?>
<div class="not-login pull-right">
    <nav class="main-nav">
        <ul>
            <!-- inser more links here -->
            <li><a class="cd-signin" href="#0"><img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/login.png" alt="" />Connexion</a></li>
        </ul>
    </nav>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Connexion</a></li>			
				<?php 
                if (!empty($CFG->registerauth)) {
                    $authplugin = get_auth_plugin($CFG->registerauth);	
                    if ($authplugin->can_signup()) {	?>
                        <li> <a href="#0">Créer un compte</a></li>
                    <?php 
                    } 
                }?>
			</ul>

            <div id="cd-login"> <!-- log in form -->
			    <?php
                if(isset($_POST['username']) || isset($_POST['password'])){
                    echo get_string("invalidlogin");
                }else{
                     //echo '<h2>'.get_string("login").'</h2>';
                }
    
                if (!empty($errormsg)) {
                    echo html_writer::start_tag('div', array('class' => 'loginerrors'));
                    echo html_writer::link('#', $errormsg, array('id' => 'loginerrormessage', 'class' => 'accesshide'));
                    echo $OUTPUT->error_text($errormsg);
                    echo html_writer::end_tag('div');
                } ?>
                
                <form action="<?php echo $CFG->httpswwwroot; ?>/login/index.php" method="post" class="cd-form" <?php echo $autocomplete; ?> >

            	    <p class="fieldset">
            			<label class="image-replace cd-username full-width has-padding has-border" for="signup-username"></label>
            			<input type="text" class="username full-width has-padding has-border username" required="" name="username" id="signup-username" value="" placeholder="Code P">
            			<span class="cd-error-message">Message d'erreur </span>
            		</p>
    
            		<p class="fieldset">
            		    <label class="image-replace cd-password" for="signin-password">Mot de passe</label>     		
                        <input type="password" class="password full-width has-padding has-border full-width has-padding has-border" required="" name="password" id="signup-password" placeholder="Mot de passe" value="">   		
                        <a href="#0" class="hide-password">Montrer</a>
                        <span class="cd-error-message">Message d'erreur </span>
            		</p>
    
                  	<p class="fieldset">
            			<input type="checkbox" id="remember-me" checked>
            			<label for="remember-me">Se souvenir du nom de l'utilisateur</label>
            		</p>           
                    <div class="clearfix"></div>
          
                    <?php 
                    if (!right_to_left()) { ?>
                        <button class="full-width" value="Login" onclick="checkuserdetail()">S'identifier</button>
                    <?php } else { ?>
                        <button class="full-width" value="Login">S'identifier</button>
                    <?php } ?>
                    <div style="clear:both;"></div>
        
                    <!-- <p class="cd-form-bottom-message"><a href="login/forgot_password.php" id="forgotten"><?php echo get_string('passwordforgotten'); ?></a></p> -->
                </form>
            </div> <!-- cd-login -->
                    <div id="cd-signup"> <!-- sign up form -->
            <?php 
            if (!empty($CFG->registerauth)) {
                $authplugin = get_auth_plugin($CFG->registerauth);	
                $mform_signup = $authplugin->signup_form();
                if ($authplugin->can_signup()) {	?>			           

                        <?php
                           //$mform_signup = $authplugin->signup_form();
                           //http://localhost/moodle30/login/signup.php
                           //require_once($CFG->dirroot.'/login/signup_form.php');
                           $formurl = $CFG->httpswwwroot.'/login/signup.php';
                           $mform_signup = new login_signup_form($formurl, null, 'post', '', array('autocomplete'=>'off'));
                           $mform_signup->display(); 
                        ?>
                   
				<?php 
                } 
            }?>
             </div> <!-- cd-signup -->
        </div>
    </div>
</div>

<!--register link -->


