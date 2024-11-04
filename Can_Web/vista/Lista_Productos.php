<?php 
    $conexion=mysqli_connect('localhost','root','','lan_blast')
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Lista.css">
    <script src="https://kit.fontawesome.com/4446ec27ea.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="encabezado">
        <img src="Imagenes/Logo proyecto.jpeg" alt="Vet pet">
        <h1 id="t1">Gestion veterinaria</h1>
        <h1 id="t2">Clinica de mascotas MVPET</h1>
        <div class="clearfix"></div>
        <nav>
            <a href="index.html">
                <i class="fa-solid fa-right-to-bracket"></i> Salir</a>
            <a href="lista_empleados.php">
                <i class="fa-regular fa-person"></i> Empleado</a>
            <a href="lista_clientes.php">
                <i class="fa-solid fa-address-book"></i> Cliente</a>
            <a href="lista_mascotas.php">
                <i class="fa-regular fa-dog"></i> Mascotas</a>
            <a href="lista_Servicios.php">
                <i class="fa-light fa-briefcase"></i> Servicios</a>
            <a href="lista_usuarios.php">
                <i class="fa-solid fa-user"></i> Usuarios</a>
            <a href="lista_productos.php">
            <i class="fa-solid fa-shelves"></i> Inventario</a>
            <a href="generarcomprobantes.html">
            <i class="fa-thin fa-file-medical"></i> Comprobantes</a>
            <a href="cita.html">
               <i class="fa-solid fa-books-medical"></i> Citas</a>
            <a href="Historial_clinico.html">
            <i class="fa-solid fa-notes-medical"></i>Historial Clinico</a>
                    
        </nav>
    </header>
    
    <div class="lista">
        <table>
            <h2>Productos</h2> <br>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Existencias</th>
                <th>Precio</th>
                <th colspan="2">Operaciones</th>
            </tr>
            <?php
                $sql="SELECT * from producto";
                $result = mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
                    ?>
            <tr>
                <td><?php echo $mostrar['ID']?></td>
                <td><?php echo $mostrar['Nombre']?></td>
                <td><?php echo $mostrar['Descripcion']?></td>
                <td><?php echo $mostrar['Existencias']?></td>
                <td><?php echo $mostrar['Precio']?></td>
                <td><a href="formproducto.php">
                    <i class="fa-solid fa-pencil"></i>
                    </a>
                </td>
                <td>
                    <i class="fa-solid fa-trash"></i>
                </td>
            </tr>
            <?php
                }
                ?>
        </table>
        <div class="nuevo">
            <a href="generarproducto.php">
            <i class="fa-solid fa-plus"></i><br>
            <h3>Nuevo Producto</h3>
            </a>
        </div>

        
    </div>
    <footer class="footer">
        <table>
        <tr>
            <td>
                &#169; Lan Blast 2024 todos lo derechos reservados <br>
                Clinica de mascotas MVPET <br>
                <i id="loca" class="fa-solid fa-location-dot"></i>
                Calle La verdolaga 105 Col.Benito Juarez Estado de Mexico <br>
                
            </td>
            <td>
                Can Web <br> 
                <i id="whats"  class="fa-brands fa-whatsapp"></i>5537656125 
                <i id="face"  class="fa-brands fa-facebook"></i>

            </td>
        </tr>
    </table>
</footer>
</body>
</html>