<x-layout meta-title='Edit post' meta-description='Form to edit a post'>
    <h1>Edit post</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</x-layout>