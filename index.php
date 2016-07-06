<?php
// Read package version so we can include built js and css
$pkg = json_decode(file_get_contents('package.json'));
$version = $pkg->version;
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <title>Web developer vakance | Webit</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="build/app.min-<?php echo $version ?>.css" type='text/css' media='all' />
</head>
<body>
    <section class="vakance">
        <header class="vakance__header">
            <h1 class="vakance__heading vakance__heading--main">Vajadzīgs palīgs<span class="vakance__heading-sub">"web developer"</span></h1>
        </header>

        <article class="vakance__article">
            <p>Darba pieredze nav vajadzīga. Galvenais, lai tev ir vēlme strādāt par programmētāju.
            Mācīsies un apgūsi jaunas lietas darot reālus darbus.</p>

            <h4 class="vakance__heading vakance__heading--small">Tavas prasības:</h4>
            <ul class="vakance__details">
                <li>Tu studē universitātē</li>
                <li>Tev patīk programmēt un jau skolas laikā programmēji</li>
                <li>Matemātika ir viens no taviem mīļākajiem priekšmetiem</li>
                <li>Tev patīk viss, kas saistīts ar WEB</li>
                <li>Tev interesē, Javascript, PHP, HTML, CSS, datubāzes utt</li>
                <li>Tev interesē Wordpress, Laravel, React</li>
                <li>Zini, kas ir github. Ir savs github konts vai vismaz esi tur reģistrējies</li>
                <li>Atbildības sajūta</li>
            </ul>

            <h4 class="vakance__heading vakance__heading--small">Piedāvāju:</h4>
            <ul class="vakance__details">
                <li>Darbu varēsi apvienot ar mācībām</li>
                <li>Mācīsies darot reālus darbus</li>
                <li>Algu</li>
            </ul>

            <p class="vakance__note">Ja ir interese sūti pieteikumu uz <a href="mailto:kaspars@webit.lv">kaspars@webit.lv</a></p>
        </article>
    </section>
    <script src="build/app.min-<?php echo $version ?>.js"></script>
</body>
</html>