      $(function(){
        
        $('#modal-button').click(function(){
        
          $('#myModal').modal({show:true})

        });



        $("#form_contact").submit(function(){

          
            valid_nom = check('#nom',2,'Et votre nom ?','Veuillez compléter');
            valid_objet = check('#objet',2,'Objet vide !','Veuillez compléter');
            valid_contenu = check('#contenu',50,'N\'oubliez pas votre message','Veuillez développer');
            valid_email = check('#email',7,'Veuillez inscrire votre email pour réponse','Email incorrect');
            valid_recaptcha = check('#recaptcha_response_field',4,'Veuillez copier le code-ci dessus','Code incorrect','captcha');

            if(valid_nom == true && valid_objet == true && valid_contenu == true && valid_email == true && valid_recaptcha == true){
            
            $('.loader').show();

              nom = $('#form_contact').find("input[name=nom]").val();
              objet = $('#form_contact').find("input[name=objet]").val();
              contenu = $('#form_contact').find("textarea[name=contenu]").val();
              email = $('#form_contact').find("input[name=email]").val();
              recaptcha_response_field = $('#form_contact').find("input[name=recaptcha_response_field]").val();
              recaptcha_challenge_field = $('#form_contact').find("input[name=recaptcha_challenge_field]").val();


              post_type = $('#form_contact').find("input[name=post-type]").val(); 
              adresse = $('#form_contact').find("input[name=adresse]").val(); 

           
                 
           $.post("scripts/mail.php",{nom:nom,objet:objet,contenu:contenu,email:email,recaptcha_response_field:recaptcha_response_field,recaptcha_challenge_field:recaptcha_challenge_field,post_type:post_type,adresse:adresse},function(data){

                
                if(data!='valid'){
                  $(".loader").hide();
                  $('.resultat-ajax').html('<strong class="text-danger">Veuillez entrer le bon code de sécurité</strong>');
                }else{
                  $(".loader").hide();
                  $('.resultat-ajax').html('<strong class="text-success">Message bien envoyé !</strong>');
                  $('#form_contact').fadeOut();
                  
                  setTimeout(function (){
                    $('.intro-contact').empty();
                    $('.intro-contact').text('Merci d\'avoir pris contact.');

                  }, 3000);
                                    
                  setTimeout(function (){
                    $('.close').trigger("click");
                  }, 8000);

                  setTimeout(function (){

                  $('.return-home').trigger("click");
                   }, 10000);
                  
                  if($("#sidebar-wrapper").is(':visible')){
                    setTimeout(function (){
                      $('#menu-close').trigger("click");
                    }, 12000);
                  }


                  setTimeout(function (){
                    $('.resultat-ajax').empty();
                    $('.intro-contact').empty();
                    $('.intro-contact').text('Bien joué.');
                  }, 13000);
                }

              });
        

            return false;



            }else{
              return false;
            }


        });


        function check(id,number,message,message2,captcha){


          if($(id).val() == ""){
            if(captcha){
              $('.recaptcha-error-message').fadeIn().text(message);
            }else{
              $(id).next('.error-message').fadeIn().text(message);
            }
            return valid = false;
          }
          if($(id).val().length<number){
            if(captcha){
              $('.recaptcha-error-message').fadeIn().text(message);
            }else{
              $(id).next('.error-message').fadeIn().text(message2);
            }
            return valid = false;
          }else{
              if(captcha){
                $('.recaptcha-error-message').fadeOut();
              }else{
                $(id).next('.error-message').fadeOut();
              }
              return valid = true;
          }
        }


        

      //fin function
      });