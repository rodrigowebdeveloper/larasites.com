<?php echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($routes as $route)
  <url>
    <loc>{{ $route }}</loc>
  </url>
@endforeach
</urlset>
