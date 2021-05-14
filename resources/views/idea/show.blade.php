<x-app-layout>
    <div>
        <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span>All Ideas (or back to chosen category with filters)</span>
        </a>
    </div>

    @livewire('idea-show', [
        'idea' => $idea, 
        'votesCount' => $votesCount
    ])

    @livewire('edit-idea', [])

    <div class="comments-container relative space-y-6 md:ml-22 pt-4 my-8 mt-1">
        @foreach(range(1, 3) as $comment)
            <div class="comment-container relative bg-white rounded-xl flex ">
                <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                                class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
                    <div class="mx-4 md:w-full">
                        <div class="text-gray-600 xmt-3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae qui possimus harum
                                molestias
                                ut voluptas atque eius suscipit alias recusandae id ad at exercitationem, aliquid est dolor
                                dolorem asperiores.</p>
                        </div>
    
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <a href="#" class="text-gray-900 font-bold">John Doe</a>
                                <div>&bull;</div>
                                <div>10 Hours ago</div>
                            </div>
    
                            <div x-data="{isOpen : false}" class="flex items-center space-x-2">
                                <div class="relative">
                                    <button @click="isOpen = !isOpen"
                                        class="relative bg-gray-200 hover:bg-gray-300 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                        <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                    <ul
                                        x-cloak x-show.transition.origin.top.left="isOpen"
                                        @click.away="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="absolute ml-8 w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3 z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                        <li>
                                            <a href="#"
                                                class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                                as Span</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Delete
                                                Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End comment-container -->
        @endforeach

        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="font-semibold text-xxs text-blue text-center uppercase mt-2">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="/idea" class="hover:underline">Status Changes to "Under Contraction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae qui possimus harum
                            molestias
                            ut voluptas atque eius suscipit alias recusandae id ad at exercitationem, aliquid est dolor
                            dolorem asperiores.</p>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <a href="#" class="text-gray-900 font-bold">John Doe</a>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                        </div>

                        <div x-data="{isOpen: false}" class="flex items-center space-x-2">
                            <div class="relative">
                                <button @click="isOpen = !isOpen"
                                    class="relative bg-gray-200 hover:bg-gray-300 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                    <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                                <ul
                                    x-cloak x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute z-10 ml-8 w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                            as Span</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment-container -->
    </div> <!-- End commnets-container -->
</x-app-layout>
