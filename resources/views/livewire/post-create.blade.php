<div class="mb-4">
    <form wire:submit.prevent="addPost">
        <div class="form-group">
            <label for="body" class="sr-only">Your post</label>
            <textarea name="body" id="body" class="form-control" wire:model="body @error('body') is-invalid @enderror"></textarea>

            @error('body')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">
            Post
        </button>
    </form>
</div>
