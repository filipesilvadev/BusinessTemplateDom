<?php include('_includes/header.php'); ?>

<div class="container spaced-top">
  <h2 class="prod-titles" id="top">Clique nos produtos para ser direcionado à loja</h2>
  <div class="owl-carousel prods owl-theme" id="carousel1">
    <div class="item"><a class="tab-trigger" href="#"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a></div>
    <div class="item"><a class="tab-trigger" href="#"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a></div>
    <div class="item"><a class="tab-trigger" href="#"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a></div>
    <div class="item"><a class="tab-trigger" href="#"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a></div>
    <div class="item"><a class="tab-trigger" href="#"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a></div>
    <div class="item"><a class="tab-trigger" href="#"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a></div>
    <!-- Adicione as outras imagens -->
  </div>

  <h2 class="prod-titles" id="top">Veja todos os nossos produtos nas lojas parceiras</h2>
  <div class="thumbs-grid">
    <div class="row-buy">
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
    </div>
    <div class="row-buy">
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
      <a href="#" class="thumb"><img src="_img/produtos_e_solucoes/1.png" alt="Imagem"></a>
    </div>
  </div>

</div>

<script>
    $(document).ready(function() {
        // Inicializa os carrosséis
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            items: 4,
            responsiveClass: true,
            responsive: {
                0:{
                  items: 1
                },
                480:{
                  items: 2
                },
                769:{
                  items: 4
                }
            }
        });
    });
</script>
<?php include('_includes/footer.php'); ?>