<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $name = $_POST['productName'];
     $slug = $_POST['productSlug'];
     $description = $_POST['productDescription'];
     $features = $_POST['productFeactures'];
     
     
     $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/' . $slug, 
            // ... otras opciones
        ));

     curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'POST',
         CURLOPT_POSTFIELDS => array('name' => $name, 'slug' => $slug, 'description' => $description, 'features' => $features),
         CURLOPT_HTTPHEADER => array(
             'Authorization: Bearer 224|IGHqrFx21BI83DsuDFOS7jvF7jGApECxHOtqpAww',
            
         ),
     ));
     
     $response = curl_exec($curl);
     
     curl_close($curl);
     echo $response;
     echo "<script>console.log('Debug Objects: " . $response . "' );</script>";
 }