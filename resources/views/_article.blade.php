<div class="flex p-4 border-b border-b-orange-400">
    <div class="mr-2 flex-shrink-0">
        <img src="https://i.pravatar.cc/50?u={{ $article->user->email }}" alt="profilepic" class="mr-2">
    </div>
    <div>
        <h3 class="font-bold mb-4"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
        <h5 class="font-bold mb-4">{{ $article->user->name }}</h5>
        <p class="text-sm">
            {{ $article->body }}
        </p>

    </div>
</div>