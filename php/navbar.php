<header class="bg-white">
<nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
<div class="flex lg:flex-1">
<a href="<?php echo Theme::siteUrl(); ?>" class="-m-1.5 p-1.5">
<span class="sr-only"><?php echo $site->title(); ?></span>
<img class="h-8 w-auto  rounded-full" width="40" height="40" loading="lazy" src="<?php echo $site->logo(); ?>" alt="<?php echo $site->title(); ?>"/>
</a>
</div>  
<div class="relative">
<a href="<?php echo Theme::siteUrl(); ?>" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
<?php foreach ($staticContent as $staticPage): ?>
<a href="<?php echo $staticPage->permalink(); ?>" class="text-sm font-semibold leading-6 text-gray-900"><?php echo $staticPage->title(); ?></a>
<?php endforeach ?>
<a href="https://www.fiverr.com/creativitas/design-your-website-with-phyton-django" class="text-sm font-semibold leading-6 text-gray-900">Hire Me</a>
</div>
</nav>
</header>