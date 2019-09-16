



  <form method="post" id="form_contact">
    <!--php if-->
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Votre nom" id="nom" name="nom" value="">
      <p class="error-message text-right text-danger"></p>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Objet de votre requête" id="objet" name="objet" value="">
      <p class="error-message text-right text-danger"></p>

    </div>

    <div class="form-group">

    <textarea class="form-control" name="contenu" id="contenu" placeholder="Votre message">Votre message</textarea>
    <p class="error-message text-right text-danger"></p>

    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Votre email" id="email" name="email">
      <p class="error-message text-right text-danger"></p>

    </div>


    <input type="hidden" name="post-type" id="post-type" value="message">

    <div class="form-group">
    <label for="recaptcha_response_field">Anti-Spam</label>
      <?php
        echo recaptcha_get_html($recaptcha_key);

      ?>
    <p class="recaptcha-error-message text-right text-danger"></p>
    </div> 

    <input type="hidden" name="adresse" id="adresse" placeholder="Vous ne pouvez pas voir ce champ" value="">

    <div class="form-group">
      <div class="form-statement">
        <p class="error-message text-right text-danger"></p>
        <p class="valid-message text-right text-success"></p>
      </div>
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-primary pull-right" value="Envoyer">
    </div>


    <!--hidden by default-->
    <div class="form-group">
      <div class="loader" style="display:none" alt="loader"><img src="<?php //echo WEBROOT;?>graphics/ajax-loaders/ajax-loader.gif"></div>
    </div>

  </form>

  <div class="container">
    <p class="resultat-ajax">

    </p>
  </div>
