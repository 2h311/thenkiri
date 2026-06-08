<?php

$movie = [
  "title" => "Jae-seok's B&B Rules! S01 (Episode 10 Added) | TV Series",
  "slug" => "Jae-seoks-BB-Rules-2026-Reality-Korean",
  "link" => "/hello",
  "imagesrc" => "./wp-content/Jae-seoks-BB-Rules-2026-Reality-Korean-200x300.webp"
];

require_once __DIR__ . "/../components/wp-movie-card.php";

ob_start();
?>

<section class="w-full h-fit min-h-fit flex  justify-center">
  <div class="w-9/11 my-14 flex flex-col space-y-26">
    <div class="flex flex-col space-y-5 text-sm">
      <p class="font-semibold text-brand-dark">Search for what to download here</p>
      <input type="text" class="border border-brand-grey px-2.5 py-2 outline-none" name="" id="" placeholder="Search Here">
    </div>

    <?php echo renderMovieCardContainer($movie); ?>
    <?php echo renderMovieCardContainer($movie); ?>
    <?php echo renderMovieCardContainer($movie); ?>

  </div>
</section>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../components/wp-layout.php';
?>