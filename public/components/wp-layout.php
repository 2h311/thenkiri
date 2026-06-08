<?php
// Keep VS Code quiet
if (!isset($content)) {
  $content = '';
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome To Nkiri | <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Download Hollywood Movies, Series &amp; Dramas" ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link href="./assets/css/output.css" rel="stylesheet">
</head>

<body class="w-full min-h-screen relative">
  <?php require_once __DIR__ . "/wp-notification-banner.php"; ?>
  <?php require_once __DIR__ . "/wp-navbar.php"; ?>

  <main class="w-full">
    <?php echo $content; ?>
  </main>

  <?php require_once __DIR__ . "/wp-footer.php"; ?>
</body>

</html>