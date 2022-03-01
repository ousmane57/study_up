<script>
    var newsletter_text = document.getElementById("newsletter-text");
    var newsletter_form = document.getElementById("newsletter-form");
    var newsletter_email = document.getElementById("newsletter-email");
    var newsletter_result = document.getElementById("newsletter-result");

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function submitNewsletter(){

        if (newsletter_email.value=="") {
            newsletter_email.focus();
            newsletter_result.innerHTML = "Veuillez saisir une adresse email valide";
        }else{

            if(validateEmail(newsletter_email.value)){
                $.ajax({
                    type: "POST",
                    url: window.location.origin+'/request/module/moduleApp/req_subscribe.php',
                    data: {email:newsletter_email.value},
                    dataType: "json",
                    success: function (data) {

                        if(data.statut==200){
                            newsletter_form.innerHTML = "";
                            newsletter_result.innerHTML = "";
                            newsletter_text.innerHTML = data.content;
                            newsletter_text.style.transition = "all .30s ease-in-out";
                        }else{
                            newsletter_result.innerHTML = data.content;
                            newsletter_result.style.transition = "all .30s ease-in-out";
                        }
                        
                    }
                });
            }else{
                newsletter_email.focus();
                newsletter_result.innerHTML = "Veuillez saisir une adresse email valide";
            }
        }

        

    }
</script>