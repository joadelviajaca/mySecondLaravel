@component('components.layout')
    <h1>Blog </h1>
    

    <a class="btn btn-primary" href="{{ route('posts.create')}}" >Crear nueva entrada</a>
    @foreach ($posts as $post)
        <h4>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post['title'] }}
            </a>
            <a href="{{route('posts.edit', $post)}}" class="btn btn-primary ms-3">Edit</a>
        </h4>
    @endforeach
@endcomponent
