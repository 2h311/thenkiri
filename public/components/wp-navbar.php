<?php

$filename = __DIR__ . '/../data/links.json';
if (!file_exists($filename)) {
  die("Error: The file $filename does not exists.");
}

$jsonString = file_get_contents($filename);
$data = json_decode($jsonString, true);
$mainLinks = $data["mainLinks"];
$genre = $data["Genre"];
$movies = $data["Movies"];
$asianMovies = $data["Asian Movies"];

?>

<nav class="flex justify-center items-center text-sm font-light w-full py-8 border-b border-brand-grey mt-15">
  <div class="w-9/11 flex justify-between items-center">

    <div class="w-fit">
      <img class="size-14" src="../assets/imgs/cropped-cropped-logo.png" />
    </div>

    <ul class="flex space-x-5 items-center">
      <li class="hover:text-brand-darkblue cursor-pointer transition-colors duration-200">
        <a class="" href="<?php echo htmlspecialchars($mainLinks['Home']); ?>">Home</a>
      </li>

      <li class="hover:text-brand-darkblue cursor-pointer transition-colors duration-200">
        <a class="" href="<?php echo htmlspecialchars($mainLinks['Chinese Drama']); ?>">Chinese Drama</a>
      </li>

      <li class="hover:text-brand-darkblue cursor-pointer transition-colors duration-200">
        <a class="" href="<?php echo htmlspecialchars($mainLinks['K-Drama']); ?>">K-Drama</a>
      </li>

      <li class="hover:text-brand-darkblue cursor-pointer transition-colors duration-200">
        <a class="" href="<?php echo htmlspecialchars($mainLinks['TV Series']); ?>">TV Series</a>
      </li>

      <li class="group/level1 cursor-pointer relative">

        <div class="group-hover/level1:text-brand-darkblue flex items-center transition-colors duration-200">
          <span>Movies</span>
          <span class="scale-75">
            <?php readfile(__DIR__ . "/../assets/imgs/svgs/chevron-down.svg"); ?>
          </span>
        </div>

        <ul class="dropdown-animate absolute top-10 shadow-md bg-white w-52 border-t-3 border-t-brand-darkblue z-50 flex flex-col
               group-hover/level1:opacity-100 group-hover/level1:visible ">

          <li class="border-brand-grey border-b px-2 py-2.5 hover:text-brand-darkblue">
            <a class="block w-full" href="<?php echo htmlspecialchars($movies['International']); ?>">International</a>
          </li>

          <li class="group/level2 flex justify-between items-center border-brand-grey px-2 py-2.5 hover:text-brand-darkblue relative pr-1 transition-colors duration-200">

            <a class="block w-full" href="<?php echo htmlspecialchars($movies['Asian Movies']); ?>">Asian Movies</a>
            <span class="scale-75">
              <?php readfile(__DIR__ . "/../assets/imgs/svgs/chevron-right.svg"); ?>
            </span>

            <ul class="dropdown-animate absolute top-0 left-full shadow-md bg-white w-52 border-t-3 border-t-brand-darkblue z-100 flex flex-col
                       group-hover/level2:opacity-100 group-hover/level2:visible">
              <?php foreach ($asianMovies as $linkText => $url): ?>
                <li class="hover:text-brand-darkblue border-brand-grey border-b px-2 py-2.5 text-black">
                  <a class="block w-full" href="tag<?php echo $url; ?>"><?php echo $linkText; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        </ul>
      </li>

      <li class="group cursor-pointer relative z-100">
        <div class="group-hover:text-brand-darkblue flex items-center transition-colors duration-200">
          <span class="">Genres</span>
          <span class="scale-75">
            <?php readfile(__DIR__ . "/../assets/imgs/svgs/chevron-down.svg"); ?>
          </span>
        </div>

        <div class="dropdown-animate group-hover:opacity-100 group-hover:visible absolute top-10 bg-white shadow-md border-t-3 border-t-brand-darkblue transition-colors duration-200">
          <ul class="w-46">
            <?php foreach ($genre as $linkText => $url): ?>
              <li class="hover:text-brand-darkblue border-brand-grey border-b px-2.5 py-2">
                <a class="block w-full" href="tag<?php echo $url; ?>"><?php echo $linkText; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </li>

      <li class="hover:text-brand-darkblue cursor-pointer transition-colors duration-200">
        <a class="w-full block" href="<//?php echo htmlspecialchars($mainLinks['How to download']); ?>">How to download</a>
      </li>

      <li class="scale-75">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
          <path d="m21 21-4.34-4.34" />
          <circle cx="11" cy="11" r="8" />
        </svg>
      </li>
    </ul>

  </div>
</nav>