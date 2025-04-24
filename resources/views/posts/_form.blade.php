@csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Post Title</label>
                                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Post title"
            value="{{ old('title', isset($post) ? $post->title : null) }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Post Body</label>
                                <textarea class="form-control" name="body">{{ old('body', isset($post) ? $post->body : null) }}</textarea>

                                @error('body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Publish Post</button>
    

