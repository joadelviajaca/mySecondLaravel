<div class="form-group">
    <label for="title">{{__('Title')}}</label>
    <input class="form-control" type="text" name="title" id="title" value="{{old('title', $post->title)}}">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>