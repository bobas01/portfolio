<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // verify captchaResponse have value
    if (empty($_POST['recaptchaResponse'])) {
        header('Location:index.php');
    } else {
        //prepare URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=6Ld8sFEpAAAAAO5vxspCebck0E4yv-Roya5nrcuD&response={$_POST['recaptchaResponse']}";
        // verify if curl installed
        if (function_exists('curl_version')) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        } else {
            // use file_get_content
            $response = file_get_contents($url);
        }
        if (empty($response) || is_null($response)) {
            header('Location:index.php');
        } else {
            $data = json_decode($response);
            if ($data->success) {

                if (
                    isset($_POST['name']) && !empty($_POST['name']) &&
                    isset($_POST['surname']) && !empty($_POST['surname']) &&
                    isset($_POST['phone']) && !empty($_POST['phone']) &&
                    isset($_POST['email']) && !empty($_POST['email']) &&
                    isset($_POST['message']) && !empty($_POST['message'])
                ) {
                    // content clean
                    $name = strip_tags($_POST['name']);
                    $surname = strip_tags($_POST['surname']);
                    $email = strip_tags($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);
                    if (!preg_match('/^[0-9]{10}$/', $_POST['phone'])) {
                        echo '<p>Numéro de téléphone invalide.</p>';
                        exit;
                    }
                    echo "Message de {$surname} envoyé";
                } else {
                    header('Location:index.php');
                }
            }
        }
    }
} else {
    http_response_code(405);
    echo 'Méthode non authorisée';
}
