<?php
echo $this->layout("_theme");
?>
<link rel="stylesheet" href=<?= url("themes/adm/assets/usuario.css"); ?>>
<div class="sidebar">
        <h2>Paniel de ADM</h2>
        <a href="<?= url("adm/geral")?>">Visão Geral</a>
        <a href="<?= url("adm/usuario")?>">Usuários</a>
        <a href="<?= url("adm/relatorio")?>">Relatórios</a>
        <a href="#sair">Sair</a>
    </div>

    <!-- Cabeçalho -->
    <div class="main-content">
        <h2>Usuários</h2>
        <table class="user-list">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Registro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://via.placeholder.com/40" alt="Avatar"> João Silva</td>
                    <td>joao.silva@example.com</td>
                    <td>12/08/2023</td>
                    <td class="actions">
                        <button class="edit">Editar</button>
                        <button class="delete">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td><img src="https://via.placeholder.com/40" alt="Avatar"> Maria Oliveira</td>
                    <td>maria.oliveira@example.com</td>
                    <td>15/07/2023</td>
                    <td class="actions">
                        <button class="edit">Editar</button>
                        <button class="delete">Excluir</button>
                    </td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>