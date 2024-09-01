<?php
echo $this->layout("_theme");
?>
<link rel="stylesheet" href=<?= url("themes/adm/assets/relatorio.css"); ?>>
<div class="sidebar">
        <h2>Paniel de ADM</h2>
        <a href="<?= url("adm/geral")?>">Visão Geral</a>
        <a href="<?= url("adm/usuario")?>">Usuários</a>
        <a href="<?= url("adm/relatorio")?>">Relatórios</a>
        <a href="#sair">Sair</a>
    </div>

    <header>
        <h1>Relatórios de Atividade</h1>
        <div class="user-info">
            <img src="https://via.placeholder.com/40" alt="Avatar">
            <span>Admin</span>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <h2>Filtros de Relatório</h2>
        <div class="report-filters">
            <div>
                <label for="date-start">Data Início:</label><br>
                <input type="date" id="date-start" name="date-start">
            </div>
            <div>
                <label for="date-end">Data Fim:</label><br>
                <input type="date" id="date-end" name="date-end">
            </div>
            <div>
                <label for="user">Usuário:</label><br>
                <select id="user" name="user">
                    <option value="todos">Todos</option>
                    <option value="usuario1">Usuário 1</option>
                    <option value="usuario2">Usuário 2</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>

        <table class="report-table">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Data</th>
                    <th>Ação</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João Silva</td>
                    <td>12/08/2023</td>
                    <td>Login</td>
                    <td>Sucesso</td>
                </tr>
                <tr>
                    <td>Maria Oliveira</td>
                    <td>15/07/2023</td>
                    <td>Logout</td>
                    <td>Sucesso</td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>

        <div class="summary">
            <div class="summary-item">
                <h3>100</h3>
                <p>Total de Logins</p>
            </div>
            <div class="summary-item">
                <h3>80</h3>
                <p>Total de Logouts</p>
            </div>
            <div class="summary-item">
                <h3>50</h3>
                <p>Ações Realizadas</p>
            </div>
        </div>
    </div>