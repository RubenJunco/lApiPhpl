<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['productIdEdit'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/' . $id, 
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE', 
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer 166|JXM8FRPR9CzOS3osaYaHblyQWFKihBDd6Fvdks9Q',
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;

    header('location: Main.php ');
}
?>
