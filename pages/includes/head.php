<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stéphane Wouters</title>

    <?php if (getenv('APP_ENV') === 'prod'): ?>
        <?php $manifest = json_decode(file_get_contents(__DIR__ . '/../../dist/.vite/manifest.json'), true); ?>
        <script type="module" src="<?= $manifest['src/main.jsx']['file'] ?>"></script>
        <link rel="stylesheet" href="<?= $manifest['src/main.jsx']['css'][0] ?>"/>
    <?php else: ?>
        <script type="module" src="http://localhost:5173/@vite/client"></script>

        <link rel="stylesheet" href="http://localhost:5173/src/index.scss"/>
        <script type="module" src="http://localhost:5173/src/main.jsx"></script>
    <?php endif ?>

</head>
