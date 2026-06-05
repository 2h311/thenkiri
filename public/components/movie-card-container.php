<?php 


?>

<div class="flex flex-col space-y-8.5 border">
      <h1 class="font-semibold text-xl">New Dramas Upload</h1>

      <div class="grid grid-cols-6 gap-4 border">
        <?php for ($x = 1; $x <= 12; $x++) {
          echo renderMovieCard($movie['link'], $movie['imagesrc'], $movie['title'], $movie['slug']);
        } ?>
      </div>
      <a href="" class="bg-brand-blue text-white rounded-sm py-2 text-center font-semibold">
        Load More Drama
      </a>
    </div>