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
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                    <div class="border border-gray-300 rounded-lg">
                        {{ $article->title }}
                        <br>
                        By:{{ $article->user->name }}
                        <br>
                        {{ $article->body }}
                        <br>

                    </div>
                    <h2>Comments:</h2>
                    
                    <div class="border border-gray-300 rounded-lg">
                        <ul>
                        @foreach($article->comment as $comment)
                        
                            <li> {{$comment->body}}</li>
                            <hr>
                            
                        @endforeach
                        </ul>
                           

                    </div> 
                    <div class="border border-purple-400 rounded-lg py-6 px-8 mb-8">
                        <form method="POST" action="/comments">
                            @csrf

                            <textarea name="body" class="w-full " placeholder="Add a comment" required></textarea>

                            <hr class="my-4">

                            <footer class="flex text-sm">
                                <button type="submit" class="bg-purple-500 rounded-lg shadow py-2 px-2 text-white">Comment</button>
                            </footer>
                            
                        </form>
                    </div>                                        

                    
                </div>
                <div class="lg:w-1/6 bg-orange-100 rounded-lg p-4">
                    @include ('_members-list')
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>