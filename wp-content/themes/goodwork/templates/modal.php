<!-- Modal ORDER -->
<div class="modal fade" id="order" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="background-image: url('<?= get_template_directory_uri() ?>/img/modal-bg.png')">

            <div class="modal-header">
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h2 class="text-center">Оставить заявку сейчас!</h2>
            </div>

            <div class="modal-body text-center">
                <div class="contact-form">
                    <?= do_shortcode('[contact-form-7 id="62" title="Форма в модальном окне" html_class="use-floating-validation-tip"]');?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal ORDER -->

<!-- Modal ORDER -->
<div class="modal fade" id="order-country" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="background-image: url('<?= get_template_directory_uri() ?>/img/modal-bg.png')">

            <div class="modal-header">
                <h2 class="text-center">Оставить заявку сейчас!</h2>
            </div>

            <div class="modal-body text-center">
                <div class="contact-form">
                    <?= do_shortcode('[contact-form-7 id="115" title="Форма в модальном окне на старанице Работа по странам" html_class="use-floating-validation-tip"]');?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal ORDER -->

<!-- Modal  THX -->
<div class="modal fade" id="thanks" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="background-image: url('<?= get_template_directory_uri() ?>/img/modal-thx-bg.png')">

            <div class="modal-header">
                <h2>Спасибо!</h2>
            </div>

            <div class="modal-body">
                <p>Мы свяжемся с вами в ближайшее время!</p>
                <img src="<?= get_template_directory_uri() ?>/img/modal-thx-phone.png" alt="Good Work">
            </div>

        </div>
    </div>
</div>
<!-- Modal THX -->