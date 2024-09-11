<?php
include "includes/header.php";
?>
<h2>Formulario con GET</h2>
<form action="recibir-get.php" method="GET">
    <div class="campoForm">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">        
    </div>
    <div class="campoForm">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos">        
    </div>
    <div class="campoForm">
        <input type="submit" value="Enviar Datos">
    </div>
</form>

<?php
include "includes/footer.php";