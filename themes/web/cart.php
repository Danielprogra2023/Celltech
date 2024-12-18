<?php
echo $this->layout("_theme");
?>
<link rel="stylesheet" href="themes/web/assets/css/carrinho.css">
<main>
        <div class="page-title">Seu Carrinho</div>
        <div class="content">
          <section>
            <table>
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  <th>Total</th>
                  <th>-</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="product">
                      <img src="https://picsum.photos/100/120" alt="" />
                      <div class="info">
                        <div class="name">Nome do produto</div>
                        <div class="category">Categoria</div>
                      </div>
                    </div>
                  </td>
                  <td>R$ 120</td>
                  <td>
                    <div class="qty">
                      <button><i class="bx bx-minus"></i></button>
                      <span>2</span>
                      <button><i class="bx bx-plus"></i></button>
                    </div>
                  </td>
                  <td>R$ 240</td>
                  <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="product">
                      <img src="https://picsum.photos/100/120" alt="" />
                      <div class="info">
                        <div class="name">Nome do produto</div>
                        <div class="category">Categoria</div>
                      </div>
                    </div>
                  </td>
                  <td>R$ 120</td>
                  <td>
                    <div class="qty">
                      <button><i class="bx bx-minus"></i></button>
                      <span>2</span>
                      <button><i class="bx bx-plus"></i></button>
                    </div>
                  </td>
                  <td>R$ 240</td>
                  <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="product">
                      <img src="https://picsum.photos/100/120" alt="" />
                      <div class="info">
                        <div class="name">Nome do produto</div>
                        <div class="category">Categoria</div>
                      </div>
                    </div>
                  </td>
                  <td>R$ 120</td>
                  <td>
                    <div class="qty">
                      <button><i class="bx bx-minus"></i></button>
                      <span>2</span>
                      <button><i class="bx bx-plus"></i></button>
                    </div>
                  </td>
                  <td>R$ 240</td>
                  <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
          <aside>
            <div class="box">
              <header>Resumo da compra</header>
              <div class="info">
                <div><span>Sub-total</span><span>R$ 418</span></div>
                <div><span>Frete</span><span>Gratuito</span></div>
                <div>
                  <button>
                    Adicionar cupom de desconto
                    <i class="bx bx-right-arrow-alt"></i>
                  </button>
                </div>
              </div>
              <footer>
                <span>Total</span>
                <span>R$ 418</span>
              </footer>
            </div>
            <button>Finalizar Compra</button>
          </aside>
        </div>
      </main>