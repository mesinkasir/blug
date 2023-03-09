<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<?php Theme::plugins('pageBegin'); ?>
<div class="bg-white py-4 sm:py-3 mb-5">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
<div class="mt-10 sm:mt-0">
<div class="md:grid md:grid-cols-5 md:gap-6">
<div class="mt-5 md:col-span-4 md:mt-0">
<?php if ($page->title()): ?><h1 class="text-3xl font-bold tracking-tight text-indigo-600 sm:text-4xl mb-3"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h1><?php endif ?>
<?php if ($page->description()): ?><h2 class="mt-1 text-sm text-gray-600 mb-3"><?php echo $page->description(); ?></h2><?php endif ?>
<?php if ($page->coverImage()): ?><img class="rounded-2xl mb-5" alt="<?php echo $page->description(); ?>" width="100%" src="<?php echo $page->coverImage(); ?>"/><?php endif ?>
<?php if ($page->date()): ?><time datetime="2020-03-16" class="text-gray-500 text-sm mb-3">Publish : <?php echo $page->date(); ?></time><?php endif ?><br/>
<?php if ($page->tags()): ?><?php echo $tag ?><p class="text-gray-500 text-sm mb-5">Tag : <?php echo $page->tags(); ?></p><?php endif ?>
<div class="text-gray-600">
<?php echo $page->content(); ?>
</div>
</div>
<div class="md:col-span-1 text-gray-600 text-sm">
<?php include(THEME_DIR_PHP.'plugins.php'); ?>	 
</div>
</div>
</div>
</div>
</div>
<?php Theme::plugins('pageEnd'); ?>