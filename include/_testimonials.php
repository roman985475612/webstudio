<section class="testimonial-area bg-color pad-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-active dots-style">
                    <?php foreach (GetEntityDataById(5) as $testimonial): ?>
                        <div class="single-testimonial black-text text-center">
                            <div class="testimonial-title">
                                <span class="icon-quote"></span>
                                <h3 class="black-text"><?= $testimonial['UF_TITLE'] ?></h3>
                            </div>
                            <p><span>"</span><?= $testimonial['UF_TEXT'] ?><span>"</span>
                            </p>
                            <div class="testimonial-author text-uppercase">
                                <span>- <?= $testimonial['UF_AUTHOR'] ?>, <?= $testimonial['UF_COMPANY'] ?>.</span>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
