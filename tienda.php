<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasos & Estilo - Tienda</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Ruta corregida -->
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

    <section class="carrito-contenedor">
        <h2>Tu Carrito de Compras</h2>

        <?php
        include "conexion.php";

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array();
        }

        if (isset($_GET['id'])) {
            $id_producto = $_GET['id'];
            $producto = $conexion->query("SELECT * FROM productos WHERE id_producto = $id_producto")->fetch_assoc();
            
            if ($producto) {
                $_SESSION['carrito'][$id_producto] = array(
                    'nombre' => $producto['nombre'],
                    'precio' => $producto['precio'],
                    'cantidad' => isset($_SESSION['carrito'][$id_producto]) ? $_SESSION['carrito'][$id_producto]['cantidad'] + 1 : 1
                );
                echo "<p class='mensaje-exito'><i class='fa-solid fa-check'></i> Producto agregado correctamente!</p>";
            }
        }

        if (isset($_GET['eliminar'])) {
            $id_eliminar = $_GET['eliminar'];
            unset($_SESSION['carrito'][$id_eliminar]);
            echo "<p class='mensaje-exito'><i class='fa-solid fa-check'></i> Producto eliminado!</p>";
        }
        ?>

        <?php if (!empty($_SESSION['carrito'])): ?>
            <table class="tabla-carrito">
                <tr>
                    <th>Producto</th>
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
                <?php
                $total = 0;
                foreach ($_SESSION['carrito'] as $id => $item):
                    $subtotal = $item['precio'] * $item['cantidad'];
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><?php echo $item['nombre']; ?></td>
                        <td>$<?php echo number_format($item['precio'], 2); ?></td>
                        <td><?php echo $item['cantidad']; ?></td>
                        <td>$<?php echo number_format($subtotal, 2); ?></td>
                        <td><a href="tienda.php?eliminar=<?php echo $id; ?>" class="btn-eliminar"><i class="fa-solid fa-trash"></i> Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <div class="total-carrito">
                <p>Total a Pagar: $<?php echo number_format($total, 2); ?></p>
                <a href="proceso-compra.php" class="btn">
                    <i class="fa-solid fa-credit-card"></i> Procesar Compra
                </a>
            </div>
        <?php else: ?>
            <p class="sin-productos">Tu carrito está vacío. Ve al <a href="index.php">catálogo</a> para agregar productos.</p>
        <?php endif; ?>

        <?php $conexion->close(); ?>
    </section>

    <footer>
        <p>&copy; 2026 Pasos & Estilo Zapatería - Toluca, México</p>
        <p><i class="fa-solid fa-phone"></i> (722) 123-4567 | <i class="fa-solid fa-envelope"></i> contacto@pasosyestilo.com</p>
    </footer>
</body>
</html>