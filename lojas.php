<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nossas lojas</title>
</head>

<body>
    <div class="container-flex">
            <?php
            require_once('menu.html');
            ?>

            <div class="container">
                <section class="row py-5">
                    <div class="col text-center">
                        <h2>Loja A</h2>
                        <h2>Rio de Janeiro</h2>
                        <h4>Presidente Vargas, Nº 438</h>
                        <h4>Centro</h4>
                        <h4>(21) 3340-2574</h4><br>
                    </div>
                    <div class="col text-center">
                        <h2>Loja B</h2>
                        <h2>São Paulo</h2>
                        <h4>Rua Vinte e Quatro de Maio, Nº62</h4>
                        <h4>Guarulhos</h4>
                        <h4>(11) 3567-0872</h4><br>
                    </div>
                    <div class="col text-center">
                        <h2>Loja 3</h2>
                        <h2>Curitiba</h2>
                        <h4>Rua Delegado Leopoldo Belczak, Nº14</h4>
                        <h4>Capão da Imbuia</h4>
                        <h4>(41) 2356-7890</h4><br>
                    </div>
                </section>
            </div>
            
            <div class="container">
                <?php
                require_once('rodape.html');
                ?>
            </div>
    </div>
</body>

</html>