<script src='https://www.google.com/recaptcha/api.js'></script>
<section id="contato" class="container pt-3 mb-5">
        <h3 class="text-center f-medium pb-4">Entre em contato</h3>
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <form action="<?php echo get_theme_file_uri('mail.php') ?>" method="post" class="form-megusta f-light">
                    <div class="row pb-3">
                        <div class="col-md col-12 mb-3">
                            <input type="text" name="name" class="form-control p-3 pl-4" placeholder="Nome" required>
                        </div>
                        <div class="col-md col-12 mb-3">
                            <input type="text" name="email" class="form-control p-3 pl-4" placeholder="E-mail" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <textarea id="" name="message" cols="30" rows="8" placeholder="Sua mensagem" class="form-control p-3 pl-4" required></textarea>
                    </div>
                    <button class=" btn btn-lg btn-light d-block mt-4o g-recaptcha" data-sitekey="6LeZqWwUAAAAAA0UO6ilz6-NPl6l85EIpAJ-GPwS">Enviar</button>
                </form>
                <p id="return-message" class="f-medium p-3 text-center"></p>
            </div>
        </div>
    </section>