<!-- index.php -->
<?php include('_includes/header.php'); ?>

<div class="faixa-estreita">
    Faixa estreita que acompanha largura do banner e não rotaciona.
</div>

<div class="owl-carousel owl-theme">
    <div class="item"><img src="_img/home_slider/home_banner-1.png" alt="Slider Image 1"></div>
    <div class="item"><img src="_img/home_slider/home_banner-2.png" alt="Slider Image 2"></div>
    <div class="item"><img src="_img/home_slider/home_banner-3.png" alt="Slider Image 3"></div>
</div>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
    });
</script>

<section class="imagens-menores container">
    <img src="_img/home_call-out-1.png" alt="Imagem menor 1">
    <img src="_img/home_call-out-2.png" alt="Imagem menor 2">
    <img src="_img/home_call-out-3.png" alt="Imagem menor 3">
</section>

<section class="icones container">
    <div>
        <img src="_img/home_icon-1.png" alt="Ícone Empresa Brasileira">
        <p>Empresa brasileira</p>
    </div>
    <div>
        <img src="_img/home_icon-2.png" alt="Ícone Suporte Rápido">
        <p>Suporte Rápido</p>
    </div>
    <div>
        <img src="_img/home_icon-3.png" alt="Ícone Garantia e Qualidade">
        <p>Garantia e Qualidade</p>
    </div>
    <div>
        <img src="_img/home_icon-4.png" alt="Ícone Produtos Acessíveis">
        <p>Produtos Acessíveis</p>
    </div>
</section>

<?php include('_includes/footer.php'); ?>