<?php include('_includes/header.php'); ?>

<img src="_img/download_center/banner-topo.png" alt="" class="top-banner">

<div class="container spaced-top spaced-bottom">
  <h2 class="prod-titles">Download Center</h2>
  <p class="txt">
    Nam sagittis, nisi non placerat tincidunt, elit ex mattis purus, ac faucibus erat libero a nunc. Mauris efficitur orci neque, sed tincidunt diam pretium a. Mauris id rhoncus lacus. In ornare ex sit amet quam pellentesque mollis. Nullam quis nibh at nibh pellentesque dignissim.
  </p>

  <button class="accordion">Nome do produto 1</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 1</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 2</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 2</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 3</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 3</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 4</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 4</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 5</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 5</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 6</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 6</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 7</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 7</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 8</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 8</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 9</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 9</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<button class="accordion">Nome do produto 10</button>
<div class="panel">
    <div class="accordion-content">
        <div>Breve descrição do produto 10</div>
        <div><a href="#">Download</a></div>
    </div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>



</div>

<?php include('_includes/footer.php'); ?>