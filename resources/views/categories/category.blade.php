<x-layout>

    <h1>
        {{ $category->name }}
    </h1>

    @foreach($posts as $post)

        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p>
                <a href="#">{{ $post->category->name }}</a>
            </p>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>

    @endforeach

    <br>

    <a href="/">Go Back</a>

</x-layout>