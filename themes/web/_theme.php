<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Meu sistema ::..</title>
    <link rel="stylesheet" href="themes/web/assets/css/full.css">
    <script src="themes/web/assets/js/index.js"></script>
    <?php if ($this->section("specific-script")): ?>
        <?= $this->section("specific-script"); ?>
    <?php endif; ?>
</head>
<body>
<nav>
     <div class="logo"><img src="themes/web/assets/img/CELLTECH.png" alt=""></div>
        <ul>
            <li><a href="<?= url("inicio")?>">início</a></li>
            <li><a href="<?= url("sobre")?>">Sobre</a></li>
            <li><a href="<?= url("contato")?>">Contato</a></li>
            <li><a href="<?= url("produtos")?>">Produtos</a></li>
            <li><a href="<?= url("carrinho")?>">Carrinho</a></li>
            <li><a href="<?= url("faqs")?>">Faq</a></li>
        </ul>
        <div class="login-button">
            <button><a href="<?= url("perfil")?>">Perfil</a></button>
        </div>
        </ul>
    </nav>

<div id="content">
    <!-- Your content goes here -->
    <?php
        echo $this->section("content");
    ?>
</div>

<footer>
</footer>
</body>
</html>