<?php

function renderMovieCard(string $movieLink, string $movieImageSource, string $movieTitle, string $movieSlug): string
{
  $safeMovieLink = htmlspecialchars($movieLink);
  $safeMovieImageSource =  htmlspecialchars($movieImageSource);
  $safeMovieTitle = htmlspecialchars($movieTitle);
  $safeMovieSlug = htmlspecialchars($movieSlug);

  return "
    <div class='text-xs color-brand-grey border border-brand-grey relative w-full flex flex-col'>
      <div class='relative group'>
        <img class='w-full aspect-[2/3] object-cover' src={$safeMovieImageSource} alt={$safeMovieSlug} />
        <a href={$safeMovieLink} class='dropdown-animate group-hover:visible group-hover:opacity-100 block absolute top-0 left-0 bg-brand-dark/70 w-full h-full flex items-center justify-center'>
          <span class='text-white font-bold'>-></span>
        </a>
      </div>
  
      <span class='block w-full px-4 py-6.5 hover:text-brand-darkblue'>
        <a href={$safeMovieLink}>{$safeMovieTitle}</a>
      </span>
    </div>
  ";
}

function renderMovieCardContainer(array $movie): string
{
  $cardsHTML = "";
  for ($x = 1; $x <= 12; $x++) {
    $cardsHTML .= renderMovieCard($movie['link'], $movie['imagesrc'], $movie['title'], $movie['slug']);
  }

  return "
    <div class='flex flex-col space-y-8.5'>
      <h1 class='font-semibold text-xl'>New Dramas Upload</h1>
      <div class='grid grid-cols-6 gap-4 '>{$cardsHTML}</div>
      <a href='' class='bg-brand-blue text-white rounded-sm py-2 text-center font-semibold'>
        Load More Drama
      </a>
    </div>
  ";
}
