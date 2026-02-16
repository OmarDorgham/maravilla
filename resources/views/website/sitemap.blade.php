{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- صفحات ثابتة --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.00</priority>
    </url>

    <url>
        <loc>{{ url('/about') }}</loc>
        <priority>0.80</priority>
    </url>

    <url>
        <loc>{{ url('/services') }}</loc>
        <priority>0.80</priority>
    </url>

    <url>
        <loc>{{ url('/contact') }}</loc>
        <priority>0.80</priority>
    </url>

    {{-- مقالات --}}
    @foreach($posts as $post)
        <url>
            <loc>{{ url('/blog/' . $post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->toDateString() }}</lastmod>
            <priority>0.70</priority>
        </url>
    @endforeach

    {{-- سياسات --}}
    <url>
        <loc>{{ url('/privacy-policy') }}</loc>
        <priority>0.50</priority>
    </url>

    <url>
        <loc>{{ url('/terms-and-conditions') }}</loc>
        <priority>0.50</priority>
    </url>

    <url>
        <loc>{{ url('/cookie-policy') }}</loc>
        <priority>0.50</priority>
    </url>

</urlset>
