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
               
                    @include ('_publish-article-form')
                
                    <div class="border border-orange-300 rounded-lg">
                        @foreach($articles as $article)
                            @include ('_article')
                        @endforeach
                    </div>
                </div>
                <div class="lg:w-1/6 border border-green-100 rounded-lg p-4">
                    @include ('_members-list')
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

