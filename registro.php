<?php
include("Kong.php");

   if (isset($_POST['Postear'])) {
     if(strlen($_POST['user_title']) >= 1 &&
     strlen($_POST['user_description']) >= 1 &&
     strlen($_POST['user_date']) >= 1 &&
     strlen($_POST['user_name']) >= 1){
           $user_title = trimm($_POST['user_title']);
           $user_description = trimm($_POST['user_description']);
           $user_date = date("d/m/y");
           $user_name = trimm($_POST['user_name']);
           $consult = "INSERT INTO articulos(Titulo, Descripcion, Fecha, Autor) VALUES ('$user_title','$user_description','$user_date','$user_name')";
           $result = mysqli_query($connect,$consult);
           if ($result) {
            ?>
            <h3 class="ok">Articulo publicado</h3>
            <?php
           } else ($result) {
                ?>
                <h3 class="no">Articulo NO publicado</h3>
                <?php
            } else {
                ?>
                <h3 class="no">Articulo Inválido</h3>
                <?php   
            }
           

    }
   }
?>