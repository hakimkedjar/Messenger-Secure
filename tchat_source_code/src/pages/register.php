<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>

<h2 class="header header-form">S'inscrire</h2>

<?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));
        $password2 = sha1(htmlspecialchars(trim($_POST['password2'])));

        $response = $_POST["g-recaptcha-response"];

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => '6LfZpqYUAAAAAPPObbPbGqN-J7xEuHl4LJIHcSfJ',
            'response' => $_POST["g-recaptcha-response"]
        );
        $options = array(
            'http' => array (
                'header' => "Content-Type: application/x-www-form-urlencoded", 
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success=json_decode($verify);

        if(email_taken($email) == 1) {
            $error_email = "L'adresse email est déjà utilisée...";
        } else if ($password != $password2) {
            $error_email = "Les deux mots de passes ne correspendent pas";
        } else if ($captcha_success->success==false) {
            $captcha_error = "Confirmez que vous n'êtes pas un rebot";
        } else {
            register($name, $email, $password);
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=membres");
        }
    }

?>

<form method="post" id="regForm">

    <div class="field">
        <label class="field-label" for="name">Votre nom</label>
        <input class="field-input" type="text" name="name" id="name"/>
    </div>

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Confirmez votre mot de passe</label>
        <input class="field-input" type="password" name="password2" id="password2"/>
    </div>
    <p class="error"><?php echo (isset($error_email)) ? $error_email : ''; ?></p>
	
	<!-- Google reCAPTCHA box -->
    <p class="error"><?php echo (isset($captcha_error)) ? $captcha_error : ''; ?></p>
    <center> <div class="g-recaptcha" data-sitekey="6LfZpqYUAAAAANd9rMZHO3y2IDIVjNd1wZEt9wb_"></div></center>
    
	
    <button type="submit" name="submit">S'inscrire</button>
	

</form>

<script>
       // when form is submit
    $('#regForm').submit(function(event) {
        // we stoped it
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $("#comment").val();
        // needs for recaptacha ready
        grecaptcha.ready(function() {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha.execute('6LfZpqYUAAAAANd9rMZHO3y2IDIVjNd1wZEt9wb_', {action: 'rgister'}).then(function(token) {
                // add token to form
                $('#regForm').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                $.post("register.php",{name: name, email: email, password: password, token: token}, function(result) {
                        // console.log(result);
                        if(result.success) {
                                alert('Thanks for posting comment.')
                        } else {
                                alert('You are spammer ! Get the @$%K out.')
                        }
                });
            });;
        });
    });
  </script>