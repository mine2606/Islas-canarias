

<h1>Bienvenida al mundo de la programación</h1>

<?php
    echo "Nombre: ".$_REQUEST["Nombre"];
    echo "Apellidos: ".$_REQUEST["Apellidos"];
    echo "Correo: ".$_REQUEST["Correo"];
    echo "Codigo: ".$_REQUEST["Codigo"];
?>


<pre>
<?php
    print_r($_REQUEST);
?>
</pre>