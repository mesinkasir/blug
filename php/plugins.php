<?php Theme::plugins('siteSidebar') ?>
<?php foreach (Theme::socialNetworks() as $key=>$label): ?><a class="col-md-3 p-1 col-4" href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?>.</a><?php endforeach; ?>
<?php if (Theme::rssUrl()): ?><a class="col-md-3 p-1 col-4" href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a></li><?php endif; ?>