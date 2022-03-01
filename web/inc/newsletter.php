<!---Part Configuration en cours--->
<div class="row pl-5 pr-5">
    <div class="col-md-12 col-lg-12 col-sm-12 p-5 text-center card border-0 shadow rounded mt-5 mb-5 bg-dark">
        <div class="card-body">

            <!---Part Title--->
            <img class="text-center" alt="sl-loader" src="assets/img/sl-loader.gif">
            <div class="mt-2">
                <h2 class="text-center text-white"><?php echo toolsLang::tool_get_text("sanlam_bientot_disponible"); ?>...</h2>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 ">
                        <h4 class="text-center text-white"><?php echo toolsLang::tool_get_text("sanlam_newsletter"); ?></h4>
                        <br>

                        <?php if(toolsApp::tool_check_session("user_subscribe")){ ?>
                            <div id="newsletter-result" class="mt-2">
                                <?php echo toolsApp::tool_get_session("user_subscribe"); ?>
                            </div>
                        <?php }else{ ?>
                            <p id="newsletter-text" class="text-center text-white mb-2"><?php echo toolsLang::tool_get_text("sanlam_newsletter_inscription"); ?></p>

                            <div id="newsletter-form">
                                <input class="form-control" type="email" id="newsletter-email" placeholder="<?php echo toolsLang::tool_get_text("sanlam_entrer_email"); ?>">
                                <button class="btn btn-primary btn-block mt-2" onclick="submitNewsletter()" role="button"><?php echo toolsLang::tool_get_text("sanlam_valider"); ?></button>
                            </div>

                            <div id="newsletter-result" class="mt-2">
                            </div>
                        <?php } ?>

                    </div>
                </div>
                
            </div>
            <!---Part Title--->

        </div>
    </div>
</div>
<!---Part Configuration en cours--->