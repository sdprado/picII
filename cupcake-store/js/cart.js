// Adiciona o evento de clique para o botão "Comprar"
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', function() {
      let id = this.getAttribute('data-id');
      let name = this.getAttribute('data-name');
      let price = this.getAttribute('data-price');

      // Cria um objeto para o produto
      let product = { id: id, name: name, price: price };

      // Envia os dados para o PHP via AJAX
      fetch('add_to_cart.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: `id=${id}&name=${name}&price=${price}`
      })
      .then(response => response.text())
      .then(data => {
          alert('Produto adicionado ao carrinho');
          updateCart();  // Atualiza a visualização do carrinho
      });
  });
});

// Função para atualizar a lista de itens no carrinho
function updateCart() {
  fetch('get_cart.php')
  .then(response => response.json())
  .then(data => {
      let cartList = document.getElementById('cart-list');
      cartList.innerHTML = '';

      let total = 0;
      data.forEach(item => {
          let li = document.createElement('li');
          li.textContent = `${item.name} - R$ ${item.price}`;
          cartList.appendChild(li);
          total += parseFloat(item.price);
      });

      // Atualiza o total do carrinho
      document.getElementById('cart-total').textContent = `Total: R$ ${total.toFixed(2)}`;
  });
}
