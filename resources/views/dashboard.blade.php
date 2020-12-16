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

                <div class="lg:flex-1 lg:mx-10" >
               
                    @include ('_publish-article-form')

                    <div class="mt-12 max-w-lg mx-auto grid grid-flow-row-dense gap-4 lg:grid-cols-2 lg:max-w-none">
                        @foreach($articles as $article)
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                            
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                
                                <div class="flex-1">
                                    @include ('_article')
                                </div>
                                    
                            </div>
                            
                        </div>
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

