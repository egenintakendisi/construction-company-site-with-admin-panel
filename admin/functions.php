<?php

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


function input_control($input) {
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    $input = trim($input);
    $input = stripslashes($input);
    $input = addslashes($input);
    return $input;
}

function deleteLineFromFile($fileName, $lineNumber) {
    $lines = file($fileName);

    $indexToDelete = $lineNumber - 1;

    if ($indexToDelete >= count($lines) || $indexToDelete < 0) {
        return 0;
    }

    unset($lines[$indexToDelete]);

    file_put_contents($fileName, implode('', $lines));

    return 1;
}


function updateLineInFile($fileName, $lineNumber, $newData) {
    $lines = file($fileName);

    $indexToUpdate = $lineNumber - 1;

    if ($indexToUpdate >= count($lines) || $indexToUpdate < 0) {
        return 0;
    }

    $lines[$indexToUpdate] = $newData . PHP_EOL; // PHP_EOL ile satır sonu karakterini ekliyoruz

    file_put_contents($fileName, implode('', $lines));

    return 1;
}



function authcontrol($username,$password){
    $username = input_control($username);
    $password = input_control($password);

    $myfile = fopen("adminbilgileri.txt","r");
        while($satir = fgets($myfile)){
            $dilim = explode("|",$satir);
            if($dilim[0] == $username && $dilim[1] == $password){
                setcookie("login",$username,time()+3600);
                echo "<div class='alert alert-success'>Giriş Başarılı</div>";
                sleep(2);
                header("location:admin.php");
            }
        }
    fclose($myfile);
}


function kayitkontrol($username){
    $myfile = fopen("adminbilgileri.txt","r");
    while($satir = fgets($myfile))
    {
        $dilim = explode("|",$satir);
        if($username == $dilim[0]){
            return 0;
        }
    }
    fclose($myfile);
    return 1;
}
?>