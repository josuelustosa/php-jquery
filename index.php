<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meu primeiro site em PHP!</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    
    <script src="accordion.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Apresentação</h1>
    <p>Esse projeto foi desenvolvido durante o curso <strong>Primeiros passos para desenvolvimento web</strong>, oferecido pela <a href="https://www.dio.me/" target="_blank" rel="noopener noreferrer">DIO</a> (Digital Innovate One). Para tal foi feito o uso das seguintes tecnologias: </p>
    <ul>
        <li>Apache com XAMPP;</li>
        <li>jQuery;</li>
        <li>HTML, CSS, JavaScript e PHP.</li>
    </ul>

    <hr>

    <h3>Acordeão com jQuery</h3>

    <div id="accordion">
        <?php
            for ($i = 1; $i < 11; $i++) {
                echo
                '<h3 class="titleAccordion">' . 'Section ' . $i . '</h3>' .
                '<p class="textAccordion">
                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>';
            }
        ?>
    </div>
</body>
</html>