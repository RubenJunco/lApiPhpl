<?php
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['productIdEdit'];
    $name = $_POST['productNameEdit'];
    $slug = $_POST['productSlugEdit'];
    $description = $_POST['productDescriptionEdit'];
    $features = $_POST['productFeacturesEdit'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => http_build_query([
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'features' => $features,
            'id' => $id
        ]),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer 224|IGHqrFx21BI83DsuDFOS7jvF7jGApECxHOtqpAww',
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    
    echo $response;

    header('location: Ejercicio12.php ');
//puse esto para que se envie el commit
}
?>
