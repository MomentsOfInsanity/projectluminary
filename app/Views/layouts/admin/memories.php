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
            padding-bottom: 50px; /* Add space at the bottom for the dots */
        }

        .swiper-pagination {
            bottom: 10px; /* Position the dots near the bottom of the swiper container */
        }

        .event {
            max-width: 90%;
            margin: 0 auto;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .event img {
            max-width: 100%;
            max-height: 300px; /* Adjust based on your design needs */
            height: auto;
            object-fit: cover; /* Ensures the image is cropped neatly */
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
