<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span>All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex ">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="/idea" class="hover:underline">Random title can go here...</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae qui possimus harum molestias
                        ut voluptas atque eius suscipit alias recusandae id ad at exercitationem, aliquid est dolor
                        dolorem asperiores.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos in odit, quaerat nesciunt
                        voluptates blanditiis minus magni excepturi nemo reprehenderit quas enim, possimus, aut nobis
                        labore nisi quia tempore esse.</p>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <a href="#" class="text-gray-900 font-bold">John Doe</a>
                        <div>&bull;</div>
                        <div>10 Hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open</div>
                        <button
                            class="relative bg-gray-200 hover:bg-gray-300 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul
                                class="hidden absolute ml-8 w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3">
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
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End idea container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="submit"
                class="flex items-center justify-center h-11 w-32 text-white text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                <span class="">Submit</span>
            </button>

            <button type="button"
                class="flex items-center justify-center h-11 w-36 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Set Status</span>
                <svg class="h-4 w-4 text-gray-600 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            <button type="button"
                class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            </button>
        </div>
    </div> <!-- End buttons-container -->

    <div class="comments-container relative space-y-6 ml-22 pt-4 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="/idea" class="hover:underline">Random title can go here...</a>
                    </h4> --}}
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

                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-200 hover:bg-gray-300 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    class="hidden absolute ml-8 w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3">
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment-container -->
        
        <div class="comment-container is-admin relative bg-white rounded-xl flex ">
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

                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-200 hover:bg-gray-300 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    class="hidden absolute ml-8 w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3">
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment-container -->

        <div class="comment-container relative bg-white rounded-xl flex ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="/idea" class="hover:underline">Random title can go here...</a>
                    </h4> --}}
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

                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-200 hover:bg-gray-300 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    class="hidden absolute ml-8 w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3">
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End comment-container -->
    </div> <!-- End commnets-container -->
</x-app-layout>
