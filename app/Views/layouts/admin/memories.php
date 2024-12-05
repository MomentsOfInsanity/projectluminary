<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Memory Lane</title>
    <style>
        .timeline {
            position: relative;
            margin: 20px 0;
        }
        .timeline::before {
            content: '';
            position: absolute;
            width: 4px;
            background: #6c757d;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        .timeline-item {
            margin-bottom: 20px;
            position: relative;
        }
        .timeline-item .content {
            padding: 10px 20px;
            background: #f8f9fa;
            border-radius: 5px;
            position: relative;
            width: 45%;
        }
        .timeline-item.left .content {
            float: left;
            margin-left: 5%;
        }
        .timeline-item.right .content {
            float: right;
            margin-right: 5%;
        }
        .timeline-item .date {
            font-size: 0.9em;
            color: #6c757d;
        }
    </style>
</head>
<body>
<?php echo $content_for_layout; ?> 
</body>
</html>
