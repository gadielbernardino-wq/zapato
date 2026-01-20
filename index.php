<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasos & Estilo - Catálogo</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Ruta corregida (no hay carpeta css) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <!-- Imagen corregida: logo1.webp -->
            <img src="img/logo1.webp" alt="Logo Pasos & Estilo">
            <h1>Pasos & Estilo</h1>
        </div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-bag-shopping"></i> Catálogo</a>
            <a href="tienda.php"><i class="fa-solid fa-cart-shopping"></i> Tienda</a>
            <a href="admin/index.php"><i class="fa-solid fa-gear"></i> Admin</a>
        </nav>
    </header>

    <section class="catalogo">
        <h2>Nuestra Colección</h2>
        <div class="productos-grid">
            <?php
            include "conexion.php";

            $resultado = $conexion->query("SELECT * FROM productos");

            if ($resultado->num_rows > 0) {
                while ($producto = $resultado->fetch_assoc()) {
            ?>
                    <div class="producto-card">
                        <!-- Imágenes corregidas: formato .webp -->
                        <img src="img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                        <h3><?php echo $producto['nombre']; ?></h3>
                        <p><?php echo $producto['descripcion']; ?></p>
                        <p class="precio">$<?php echo number_format($producto['precio'], 2); ?></p>
                        <a href="tienda.php?id=<?php echo $producto['id_producto']; ?>" class="btn">
                            <i class="fa-solid fa-plus-circle"></i> Agregar al Carrito
                        </a>
                    </div>
            <?php
                }
            } else {
                echo "<p class='sin-productos'>No hay productos registrados aún.</p>";
            }

            $conexion->close();
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Pasos & Estilo Zapatería - Toluca, México</p>
        <p><i class="fa-solid fa-phone"></i> (722) 123-4567 | <i class="fa-solid fa-envelope"></i> contacto@pasosyestilo.com</p>
    </footer>
</body>
</html>