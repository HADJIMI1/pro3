<?php

  include("connection.php");

if(isset($_POST["submit"])){
    $name=$_POST["userinput"];
    $email=$_POST["emailinput"];
    $motdepasse=$_POST["passwordinput"];
    $confirmermotdepasse=$_POST["confirmpasswordinput"];



    $sql="select * from utilisateur where nom='$name'";
    $result= mysqli_query($con , $sql);
    $user_num_ligne = mysqli_num_rows($result);



    $sql="select * from utilisateur where email='$email'";
    $result= mysqli_query($con,$sql);
    $email_num_ligne=mysqli_num_rows($result);


    if($user_num_ligne==0 & $email_num_ligne==0 ){
        $hash=password_hash($motdepasse , PASSWORD_DEFAULT);
        if($motdepasse==$confirmermotdepasse){
            $sql="INSERT INTO utilisateur (nom,email,password) VALUES('$name','$email','$ha')";
            $result=mysqli_query($con, $sql);

            if($result){
                header("Location: welcome.php");
            }
        }
        else{
            echo '
            <script>
            alert("mots de passe pas verifie")
            window.location.href="signup.php"</script>';
        }

    }

    else{
        echo '
        <script>
        alert("utilisateur & email existe deja")
        window.location.href="signup.php"
        </script>
        ';
    }


}

?>