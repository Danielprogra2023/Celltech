<?php
echo $this->layout("_theme");
?>
<link rel="stylesheet" href="<?= url("themes/adm/assets/home.css"); ?>">
<div class="sidebar">
        <h2>Painel de ADM</h2>
        <a href="<?= url("adm/geral")?>">Visão Geral</a>
        <a href="<?= url("adm/usuario")?>">Usuários</a>
        <a href="<?= url("adm/relatorio")?>">Relatórios</a>
        <a href="#sair">Sair</a>
    </div>

    <!-- Cabeçalho -->
    <header>
        <h1>Painel de Administração</h1>
        <div class="user-info">
            <img src="https://via.placeholder.com/40" alt="Avatar">
            <span>Admin</span>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <h2>Bem-vindo, Admin!</h2>
        <p>Aqui você pode gerenciar e monitorar as operações do sistema.</p>

        <div class="cards">
            <div class="card">
                <h3>Usuários Registrados</h3>
                <p>Gerencie os usuários registrados no sistema.</p>
            </div>
            <div class="card">
                <h3>Relatórios de Atividade</h3>
                <p>Acesse os relatórios detalhados de atividades.</p>
            </div>
            <div class="card">
                <h3>Configurações</h3>
                <p>Modifique as configurações do sistema conforme necessário.</p>
            </div>
        </div>
    </div>
