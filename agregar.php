<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['productName'];
    $slug = $_POST['productSlug'];
    $description = $_POST['productDescription'];
    $features = $_POST['productFeactures'];

    // img
    if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['productImage']['tmp_name'];
        $imageName = $_FILES['productImage']['name'];

       
        $imgfile = new CURLFile($imageTmpPath, $_FILES['productImage']['type'], $imageName);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'slug' => $slug,
                'description' => $description,
                'features' => $features,
                'cover' => $imgfile, 
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 166|JXM8FRPR9CzOS3osaYaHblyQWFKihBDd6Fvdks9Q',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        echo $response;
        echo "<script>console.log('Debug Objects: " . $response . "' );</script>";
    } else {
        echo "<script>alert('Error al cargar la imagen.');</script>";
    }
}
?>
