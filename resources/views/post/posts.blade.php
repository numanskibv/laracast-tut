<x-layout>

    <h1>My blogs</h1>
    @foreach ($posts as $post)
        <article>
             <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <a href="/posts/{{ $post->slug }}">
                <h1 class="title">{{ $post->title }}</h1>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
 
</x-layout>
