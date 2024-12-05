<div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($milestones as $milestone){?>
                <div class="swiper-slide">
                    <div class="event">
                        <h5><?php echo $milestone->title; ?></h5>
                        <p><?php echo $milestone->description;?></p>
                        <p class="date"><?= date('F j, Y', strtotime($milestone->date)); ?></p>
                        <?php if (!empty($milestone->image)){ ?>
                            <img src="<?= base_url('uploads/' . $milestone->image); ?>" alt="<?php echo $milestone->title; ?>">
                        <?php } ?>
                    </div>
                </div>
            <?php }?>
        </div>
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true, // Infinite looping
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: true,
        });
    </script>