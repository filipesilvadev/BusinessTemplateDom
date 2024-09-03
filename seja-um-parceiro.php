<?php include('_includes/header.php'); ?>
<?php include('_includes/send_mail.php'); ?>

<img src="_img/seja_um_parceiro/banner-topo.png" alt="" class="top-banner">

<div class="container spaced-top spaced-bottom">
  <h2 class="prod-titles">Seja um Parceiro</h2>
  <p class="txt">
    Maecenas tempus ante justo, sed volutpat purus pulvinar non. Sed id purus dignissim, faucibus dolor quis, pulvinar mi. Sed vel risus nec orci vestibulum scelerisque id sed velit. Aliquam bibendum augue vitae massa dignissim mattis. In vel mauris nec augue euismod sagittis. Duis a nibh velit. Cras luctus accumsan ex. Nam sagittis, nisi non placerat tincidunt, elit ex mattis purus, ac faucibus erat libero a nunc. Mauris efficitur orci neque, sed tincidunt diam pretium a. Mauris id rhoncus lacus. In ornare ex sit amet quam pellentesque mollis. Nullam quis nibh at nibh pellentesque dignissim.
  </p>
  <p class="txt">
    Praesent blandit maximus est eu bibendum. Nullam quis urna quis magna efficitur gravida. Curabitur odio dui, efficitur sit amet lacus ac, lacinia dictum massa.
  </p>

  <form action="" method="POST" id="form-send">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cnpj">CNPJ:</label><br>
        <input type="text" id="cnpj" name="cnpj" required><br><br>

        <label for="estado">Estado:</label><br>
        <select id="estado" name="estado" required>
            <option value="">Selecione...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="assistencia_tecnica">Assistência Técnica:</label><br>
        <input type="text" id="assistencia_tecnica" name="assistencia_tecnica" required><br><br>

        <label for="interesse">Interesse:</label><br>
        <input type="radio" id="revenda" name="interesse" value="Revenda" required>
        <label for="revenda">Revenda</label><br>
        <input type="radio" id="comentarios" name="interesse" value="Assistência Técnica" required>
        <label for="comentarios">Assistência Técnica</label><br><br>

        <label for="comentarios">Comentários:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <script>
        $(document).ready(function(){
            // Máscara para o campo de telefone
            $("#telefone").mask("(99) 99999-9999");

            // Máscara para o campo de CNPJ
            $("#cnpj").mask("99.999.999/9999-99");
        });
    </script>
</div>
<?php include('_includes/footer.php'); ?>