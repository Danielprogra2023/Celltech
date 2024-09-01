<?php
    echo $this->layout("_theme");
?>
<link rel="stylesheet" href="themes/web/assets/css/contato.css">
<div class="container">
        <h1 class="title">Entre em Contato</h1>
        <div class="contact-info">
            <h3 class="section-title">Informações de Contato</h3>
            <ul>
                <li><strong>Endereço:</strong> Marcionilio Da Fonseca 250 Centro</li>
                <li><strong>Telefone:</strong> 55519946284910</li>
                <li><strong>Email</strong> Celltechphonr@gmail.com</li>
                <li><strong>localização:</strong> <a href="https://www.google.com/maps">Google Maps</a></li>
            </ul>
        </div>
        <div class="contact-form">
            <h3 class="section-title">Envie uma Mensagem</h3>
            <form>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button>Enviar</button>
            </form>
        </div>
    </div>

