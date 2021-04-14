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
            <div class="relative">
                <button type="submit"
                    class="flex items-center justify-center h-11 w-32 text-white text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                    <span class="">Reply</span>
                </button>
                <div
                    class="hidden absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="pso_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, don't be shy. Share ..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="submit"
                                class="flex items-center justify-center h-11 w-1/2 text-white text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                Post Comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 h-4 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="relative">
                <button type="button"
                    class="flex items-center justify-center h-11 w-36 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span>Set Status</span>
                    <svg class="h-4 w-4 text-gray-600 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status"
                                        value="1" checked>
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-purple border-none" name="status"
                                        value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow border-none" name="status"
                                        value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-green border-none" name="status"
                                        value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red border-none" name="status"
                                        value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
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
