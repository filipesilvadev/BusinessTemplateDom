<footer id="contato">
    <div class="rodape-container">
        <div>
            <h4>Suporte ao cliente</h4>
            <a href="#"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            <a tel:+552130226118><i class="fa-solid fa-phone"></i> 00000-000000</a>
            <a href="mailto:fellipow@gmail.com"><i class="fa-solid fa-envelope"></i> email@exemplo.com.br</a>
            <p>CNPJ: 27.654.215/00001-21</p>
            <p>Estrada do Capenha, 840 - Rio de Janeiro | RJ</p>
        </div>
        <div>
            <h4>Sobre Nós</h4>
            <p><a href="institucional.php">Quem somos</a></p>
            <p><a href="#trabalhe-conosco" id="open-popup">Trabalhe conosco</a></p>
              <div id="popup" class="popup-container">
                <div class="popup-content">
                    <span class="popup-close">&times;</span>
                    <h2>Trabalhe Conosco</h2>
                    <p>Envie seu currículo para:<br><br>
                    <a href="mailto:vagas@exemplo.com.br">vagas@exemplo.com.br</a></p>
                </div>
              </div>
            <p><a href="politica-de-privacidade.php">Política de privacidade</a></p>
        </div>
        <div>
            <h4>Redes sociais</h4>
            <p><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></p>
            <p><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></p>
            <p><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></p>
        </div>
        <div>
            <h4>Seja Nosso Parceiro</h4>
            <p><a href="seja-um-parceiro.php">Quero ser um revendedor</a></p>
            <p><a href="seja-um-parceiro.php">Quero ser uma assistência técnica autorizada</a></p>
            <p><a href="onde-comprar.php">Onde comprar</a></p>
        </div>
    </div>
    <p class="copyright container">Copyright todos direitos reservados.</p>
    
    <div id="cookie-notice" class="cookie-notice">
    <p>Utilizamos cookies para melhorar sua experiência em nosso site. Para mais informações, leia nossa <a href="politica-de-privacidade.php">Política de Privacidade</a>.</p>
    <div class="cookie-actions">
        <button id="accept-cookies">Aceitar</button>
        <button id="reject-cookies">Recusar</button>
    </div>
</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function(){
        $(".menu-toggle").click(function(){
            $("nav ul").toggleClass("showing");
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    // Get the popup and open link
    var popup = document.getElementById("popup");
    var openPopup = document.getElementById("open-popup");

    // Open the popup when the link is clicked
    openPopup.onclick = function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        popup.style.display = "flex";
    };

    // Close the popup when the close button is clicked
    document.querySelector(".popup-close").onclick = function() {
        popup.style.display = "none";
    };

    // Close the popup when clicking outside of it
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    };
    var cookieNotice = document.getElementById("cookie-notice");
    var acceptButton = document.getElementById("accept-cookies");
    var rejectButton = document.getElementById("reject-cookies");

    // Check if the user has already accepted or rejected cookies
    if (localStorage.getItem("cookiesAccepted") === "true" || localStorage.getItem("cookiesRejected") === "true") {
        cookieNotice.style.display = "none";
    }

    // Accept cookies
    acceptButton.onclick = function() {
        localStorage.setItem("cookiesAccepted", "true");
        cookieNotice.style.display = "none";
        // Add any code here to enable cookies
    };

    // Reject cookies
    rejectButton.onclick = function() {
        localStorage.setItem("cookiesRejected", "true");
        cookieNotice.style.display = "none";
        // Add any code here to disable cookies
    };

});

</script>


</body>
</html>