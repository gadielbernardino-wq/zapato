<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Exitosa - Pasos & Estilo</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
            color: #2d2d2d;
            line-height: 1.6;
        }

        .contenedor {
            width: 90%;
            max-width: 800px;
            margin: 2rem auto;
            text-align: center;
        }

        /* Estilo de la imagen del zapato */
        .img-zapato {
            max-width: 100px;
            height: auto;
            margin: 1rem 0;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        /* Título de la marca */
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 1.5rem;
        }

        /* Icono de confirmación */
        .icono-check {
            font-size: 3rem;
            color: #4ecdc4; /* Color turquesa como en la imagen */
            margin-bottom: 1rem;
        }

        /* Título de éxito */
        h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        /* Texto descriptivo */
        p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 2rem;
        }

        /* Enlace de regreso */
        a {
            display: inline-block;
            padding: 0.8rem 2rem;
            color: #4ecdc4;
            text-decoration: none;
            border: 2px solid #4ecdc4;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        a:hover {
            background-color: #4ecdc4;
            color: #fff;
        }

        /* Pie de página */
        footer {
            font-size: 0.9rem;
            color: #777;
            padding-top: 1rem;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <img src="img/logo1.webp" alt="Zapato comprado" class="img-zapato">
        
        <h1>Pasos & Estilo</h1>
        
        <div class="icono-check">✅</div>
        
        <h2>¡Compra Realizada con Éxito!</h2>
        
        <p>Gracias por tu compra. Tu pedido será procesado pronto.</p>
        
        <a href="index.php">Volver al Catálogo</a>
        
        <footer>
            <p>&copy; 2026 Pasos & Estilo Zapatería - Toluca, México</p>
        </footer>
    </div>
</body>
</html>