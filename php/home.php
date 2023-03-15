<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<?php include(THEME_DIR_PHP.'header.php'); ?>




<div class="bg-white py-12 sm:py-12">
	<?php if (pluginActivated('pluginSearch')): ?>
<div class="form-inline d-block">
<input id="search-input" class="form-control mr-sm-2" type="search" placeholder="<?php $language->p('Search') ?>" aria-label="Search">
<button class="btn btn-outline-dark my-2 my-sm-0" type="button" onClick="searchNow()"><?php $language->p('Search') ?></button>
<script>
function searchNow() {
var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
window.open(searchURL + document.getElementById("search-input").value, "_self");
}
document.getElementById("search-input").onkeypress = function(e) {
if (!e) e = window.event;
var keyCode = e.keyCode || e.which;
if (keyCode == '13') {
searchNow();
return false;
}
}
</script>
</div>
<?php endif ?>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h3 class="text-3xl font-bold tracking-tight text-indigo-600 sm:text-4xl">Update News</h3>
      <p class="mt-2 text-lg leading-8 text-gray-600">Explore all article content</p>
    </div>

    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
	<?php foreach ($content as $page): ?>
<?php Theme::plugins('pageBegin'); ?>
    <article class="flex max-w-xl flex-col items-center justify-between">
	          <div class="relative mt-8 flex items-center gap-x-4">
<?php if ($page->coverImage()): ?><img src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->title(); ?>" loading="lazy" class="h-40 w-40 rounded-full bg-gray-50 "><?php endif ?>
        
        </div>

        <div class="group relative">
        <div class="flex items-start gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 mt-3"><?php echo $page->date(); ?></time>
        </div>
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="<?php echo $page->permalink(); ?>">
              <span class="absolute inset-0"></span>
              <?php echo $page->title(); ?>
            </a>
          </h3>
          <?php if ($page->description()): ?><p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3"><?php echo $page->description(); ?></p><?php endif ?>
		  <?php if ($page->tags()): ?><span class="relative z-10 text-xs py-1.5 font-medium text-gray-500 mt-3">Tag : <?php echo $page->tags(); ?></span><?php endif ?>
        </div>
          </article>
	  
<?php Theme::plugins('pageEnd'); ?>
<?php endforeach ?>
    </div>
	<?php include(THEME_DIR_PHP.'pagination.php'); ?>
</div>
</div>
