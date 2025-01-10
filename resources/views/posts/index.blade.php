@component('components.layout')
    <h1>Blog </h1>

    @foreach ($posts as $post)
        <h4>
            <a href="{{route('posts.show',$post)}}">
                {{ $post['title'] }}
            </a>

        </h4>
    @endforeach
@endcomponent
