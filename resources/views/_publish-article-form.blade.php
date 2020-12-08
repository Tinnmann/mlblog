<div class="border border-purple-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/articles">
    	@csrf

        <textarea name="title" placeholder="Article Title" required></textarea>

        <textarea name="body" class="w-full " placeholder="Write something cool" required></textarea>

        <hr class="my-4">

        <footer class="flex justify-between text-sm">
            <img src="https://i.pravatar.cc/40u={{ auth()->user()->email }}" alt="pic" class="mr-2">
            
            <button type="submit" class="bg-purple-500 rounded-lg shadow py-2 px-2 text-white">New Article</button>
        </footer>
        
    </form>
</div>