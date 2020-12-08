<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            MLBlog
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="lg:flex lg:mx-10" >
                <div class="lg:w-1/6">
                    @include ('_side-nav')
                </div>
                <div class="lg:flex-1 lg:mx-10 bg-white" style="max-width:700px">
                    <div class=" mb-8 py-6 px-8">
                        <h1><strong>{{ $article->title }}</strong></h1>
                        
                        <h3>By: {{ $article->user->name }}</h3>
                        
                        <p>{{ $article->body }}</p>
                        

                    </div>
                    <div class="px-8">
                        <h2>Comments:</h2>
                    </div>
                    
                    <div class="border border-gray-300 rounded-lg bg-grey mb-8 py-6 px-8">
                        <ul>
                        @foreach($article->comment as $comment)
                        
                            <li>
                                <strong>
                                    {{ $comment->created_at->diffForHumans() }}: &nbsp
                                </strong>
                                    {{$comment->body}}
                            </li>
                            <hr>
                            
                        @endforeach
                        </ul>
                           

                    </div> 
                    <div class="border border-purple-400 rounded-lg py-6 px-8 mb-8">
                        <form method="POST" action="/articles/{{ $article->id }}/comments">
                            @csrf

                            <textarea name="body" class="w-full px-2" placeholder="Add a comment" required></textarea>

                            <hr class="my-4">

                            <footer class="flex text-sm">
                                <button type="submit" class="bg-purple-500 rounded-lg shadow py-2 px-2 text-white">Comment</button>
                            </footer>
                            
                        </form>
                    </div>                                        

                    
                </div>
                <div class="lg:w-1/6 bg-purple-100 rounded-lg p-4">
                    @include ('_members-list')
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>