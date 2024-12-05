<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swipeable Timeline</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* General Swiper Styling */
        .swiper-container {
            width: 100%;
            height: 100vh;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .event {
            max-width: 90%;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .event img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
        }

        .event h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .event .date {
            font-size: 0.9rem;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .event h5 {
                font-size: 1.2rem;
            }

            .event p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($milestones as $milestone): ?>
                <div class="swiper-slide">
                    <div class="event">
                        <h5><?= esc($milestone['title']); ?></h5>
                        <p><?= esc($milestone['description']); ?></p>
                        <p class="date"><?= date('F j, Y', strtotime($milestone['date'])); ?></p>
                        <?php if (!empty($milestone['image'])): ?>
                            <img src="<?= base_url('uploads/' . $milestone['image']); ?>" alt="<?= esc($milestone['title']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
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
</body>
</html>

