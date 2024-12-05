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
<?php echo $content_for_layout; ?>
</body>
</html>
