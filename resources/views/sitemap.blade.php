<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($staticRoutes as $route)
    <url>
        <loc>{{ $route['loc'] }}</loc>
        <changefreq>{{ $route['freq'] }}</changefreq>
        <priority>{{ $route['priority'] }}</priority>
    </url>
@endforeach
@foreach($blogs as $blog)
    <url>
        <loc>{{ url('/blog/' . $blog->slug) }}</loc>
        @if($blog->updated_at)<lastmod>{{ $blog->updated_at->toAtomString() }}</lastmod>@endif
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
@endforeach
</urlset>
