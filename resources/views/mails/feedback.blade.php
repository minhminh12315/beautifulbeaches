<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Card</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
        }
        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            border: none;
            border-radius: 12px;
            padding: 20px;
            margin: 0 auto;
        }
        .card h1 {
            font-size: 3rem;
            margin: 20px 0;
            color: #269bd1;
        }
        .card p {
            font-size: 1em;
            color: #269bd1;
            line-height: 1.8;
            margin: 15px 0;
        }
        .Name {
            font-size: 20px;
            margin: 20px 0;
            color: #269bd1;
            font-weight: bold;
        }
        .card .signature {
            font-size: 3.5rem;
            color: #269bd1;
            margin: -30px 90px 30px 30px;
            font-weight: bold;
            font-family: 'Brush Script MT', cursive;
            text-align: end;
        }
        .formEmail{
            border-radius: 2rem;
            border:#269bd1 solid 5px
        }
    </style>
</head>
<body>
    <div class="card formEmail">
        <h1>Thank You!</h1>
        <div class="Name">Dear {{$name}},</div>
        <p>We are deeply grateful for the time and effort you put into providing us
            with such detailed and constructive feedback. Your comments are
            invaluable and have highlighted several aspects we hadn't considered. We
            would love to have the opportunity to discuss your insights further.
            Would you be available to meet with us next week? If so, please let us
            know a convenient day and time for you.</p>
        <p>Ocean will notify you of any upcoming promotions.</p>
        <p class="signature">OCEAN</p>
    </div>
</body>
</html>
