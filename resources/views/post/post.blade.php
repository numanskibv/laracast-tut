<x-layout>
    <article>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <h1>{{ $post->title }}</h1>
        <div class="body">{{ $post->body }}</div>
        <button><a href="/">RETURN</a></button>
    </article>
</x-layout>
