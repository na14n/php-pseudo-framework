<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Pseudo Framework</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="/globals.css" rel="stylesheet" />
    <?php if (isset($page_styles) && is_array($page_styles)): ?>
        <?php foreach ($page_styles as $page_style): ?>
            <link href="<?php echo htmlspecialchars($page_style); ?>" rel="stylesheet" />
        <?php endforeach; ?>
    <?php endif; ?>
    <link rel="icon" type="image/svg+xml" href="<?php echo '/favicon.svg'; ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative flex w-dvw bg-[#EFEFEF]">