<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ericky Santana - Dev WEB</title>
    <link rel="stylesheet" href="<?= URL_BASE ?>assets/css/style.css">
</head>

<body>
    <div class="conteudo">
        <div class="base-cabecalho">
            <img width="150px" src="<?= URL_BASE ?>assets/img/logo.png">
            <nav>
                <a href="<?= URL_BASE ?>">Home</a>
                <a href="<?= URL_BASE ?>home/somar">Somar</a>
                <a href="<?= URL_BASE ?>home/multiplicar">Multiplicar</a>
                <a href="<?= URL_BASE ?>home/dividir">Dividir</a>
                <a href="<?= URL_BASE ?>home/subtrair">Subtrair</a>
            </nav>
        </div>

        <?= $this->load($view, $viewData) ?>


        <div class="base-rodape">
            <small><a href="http://github.com/erickystn">github.com/erickystn</a></small>
        </div>
    </div>
</body>

</html>