<div>
    @if(session()->has('message'))
        {{ session('message') }}
    @endif
    <livewire:post-create />
    @foreach($posts as $post)
        <livewire:post-single :post="$post" :key="$post->id" />
    @endforeach
    {{ $posts->links() }}
</div>
