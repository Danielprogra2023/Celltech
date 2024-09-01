<?php
echo $this->layout("_theme");
echo "Olá eu sou o app";
?>
 <div class="admin-area">
        <h1>Adicionar Celular</h1>
        <form id="productForm">
            <label for="productName">Nome do Celular:</label>
            <input type="text" id="productName" required>
            
            <label for="productPrice">Preço:</label>
            <input type="number" id="productPrice" step="0.01" required>
            
            <label for="productBrand">Marca:</label>
            <input type="text" id="productBrand" required>
            
            <button type="submit">Adicionar</button>
        </form>
        <h2>Lista de Celulares</h2>
        <ul id="productList"></ul>
    </div>
    <script src="script.js"></script>