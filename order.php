<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su pedido ha sido enviado</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/order.css">
</head>
 
 <?php
    $country = $_POST['country'];

    $name = $_POST['name'];
    $name = trim($name);

    $cel = $_POST['cel'];
    $cel = trim($cel);

    $user = $name." ".$cel." ".$country;

    $datos = fopen("orderlogs.txt", "w");
    fputs($datos, "datos escritos");
 
 ?>

<section class="main">
        <div class="main__content container">
            <h1>¡Felicitaciones! Su Pedido Ha Sido Enviado</h1>
            <p>En breve nos comunicaremos para confirmar los detalles de tu compra.</p>
            <div class="main__caution">
                <p><span>COVID-19 IMPORTANTE</span> Debido a la pandemia estamos experimentando demoras en la entrega en algunas zonas.</p>
            </div>

            <div class="main__details">
                <div class="main__details_block">
                    <span>Detalles del pedido</span>
                    <ul class="main__details__order">
                        <li><p><strong>Producto:</strong>Oxys</p></li>
                        <li><p><strong>Precio:</strong> $10</p></li>
                        <li><p><strong>Número de Orden:</strong> 984647878</p></li>
                    </ul>
                </div>
                <div class="main__details_block">
                    <span>Detalles de contacto</span>
                    <p>Por favor, revisa tu información de contacto:</p>
                    <ul class="main__details__order">
                        <li><p><strong>Nombre:</strong> <?php echo $name ?> </p></li>
                        <li><p><strong>Teléfono:</strong> <?php echo $cel ?></p></li>
                    </ul>
                    <a href="index.php">Si cometiste un error, regresa y completa el formulario nuevamente.</a>
                </div>
                <div class="main__newsletter">
                    <h3 >¡Consigue más descuentos!</h3>
                    <p >Ingrese su correo electrónico para obtener más descuentos exclusivos</p>
                    <form>
                        <div class="form__block--input" data-svg="woman">
                            <input type="text" id="direction" name="direction" placeholder="Ingresa tu dirección">
                        </div>
                        <button type="submit" class="hero__btn"><span>Enviar</span></button>
                    </form>
                </div>
                <div class="main__details__images">
                    <img src="assets/img/product.png" alt="">
                    <img src="assets/img/product.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <span> © 2023 Copyright. All rights reserved. </span><br>
        <a href="//febatigr.com/content/shared/html/policy_en.html" target="_blank"> Privacy policy </a> | <a
            href="http://ac-feedback.com/report_form/"> Report </a>
    </footer>
    </body>

</html>