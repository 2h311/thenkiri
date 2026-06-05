<section id="comment-section" class="w-3/6 flex flex-col space-y-5">
  <div class="font-semibold text-lg">
    <p>Leave a Reply</p>
  </div>

  <form action="/wp-comments-post.php" method="POST" class="flex flex-col space-y-6 text-sm">
    <div class="">
      <textarea cols="39" rows="4" name="comment" class="border border-brand-grey outline-0 w-full h-42 p-2" placeholder="Your comment here..."></textarea>
    </div>

    <div class="flex max-full space-x-3.5">
      <div class="w-4/5">
        <input name="name" class="w-full rounded-sm border border-brand-grey outline-0 px-2.5 py-2" type="text" placeholder="Name (required)" autocomplete="off" />
      </div>
      <div class="w-4/5">
        <input name="email" class="w-full rounded-sm border border-brand-grey outline-0 px-2.5 py-2" type="email" placeholder="Email (required)" autocomplete="off" />
      </div>
      <div class="w-4/5">
        <input id="" name="url" class="w-full rounded-sm border border-brand-grey outline-0 px-2.5 py-2" type="text" placeholder="Website" autocomplete="off" />
      </div>
    </div>

    <div class="flex space-x-2.5 font-light">
      <input type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" />
      <label for="wp-comment-cookies-consent" class="cursor-pointer">Save my name, email, and website in this browser for the next time I comment.</label>
    </div>

    <div class="w-fit self-end">
      <input type="submit" value="post comment" class="bg-brand-blue text-white uppercase px-5.5 py-2.5 font-bold cursor-pointer" />
    </div>
  </form>
</section>