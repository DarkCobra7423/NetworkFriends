<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

if(isset($_POST['Enviar']) && !empty($_FILES['file']['name'])){

if(move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name'])){

echo 'Archivo subido correctamente.';

}else{

echo 'Ocurrió algunos problemas. Inténtelo más tarde.';

}

}
?>

