<?php 


if(isset($_POST['action']) && $_POST['action'] === 'login'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authController = new AuthController();
    $authController->login($email, $password);
}

class AuthController {
    public function login($email, $password) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => array('email' => $email, 'password' => $password),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        if (isset($response->message) && $response->message === 'Registro obtenido correctamente' && is_object($response->data)) {
            $_SESSION['authenticated'] = true;
            header('Location: Main.php');
            exit();
        } else {
            echo "<script>alert('Usuario y/o contraseña incorrectos'); window.location.href = 'Login.php';</script>";
        }
    }
}
?>
