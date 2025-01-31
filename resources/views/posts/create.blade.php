<x-layout meta-title='Create new post' meta-description='Form to create a new post'>

    <h1>Create new post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form-fields')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
