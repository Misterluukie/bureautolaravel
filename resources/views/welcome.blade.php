<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/welcome.css">

</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <img src="https://www.het-bureau.com/wp-content/themes/hetbureau/assets/img/Landingpage-logo-liggend.jpg" alt="Het Bureau">
            </div>

            <div>

                @foreach($posts as $key => $data)
                    <?= $data->title ?>
                    <a href="/posts/<?= $data->title ?>">Bekijk het project</a><br><br>
                @endforeach
               
            </div>

        </div>
    </div>
</body>

</html>