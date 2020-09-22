<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Messages</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <span class="font-semibold text-xl tracking-tight">Elixirr Messages</span>
            </div>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              <div class="text-sm lg:flex-grow">
                <a href="/messages" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                  Show All Messages
                </a>
              </div>
              <div>
                <a href="/new-message" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                    Create New Message
                </a>
              </div>
            </div>
          </nav>
        <!-- component -->
        <div class="flex items-center justify-center min-h-screen bg-gray-200 py-8">
            <div class="flex flex-col w-full max-w-2xl shadow bg-white p-4">
                <h2 class="flex flex-row items-center justify-between mt-2">
                    <span class="font-bold text-xl text-gray-900">Messages</span>
                    <a href="/create-new" class="text-gray-600 hover:text-gray-700">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </h2>
                
                <ul class="flex flex-col mt-4 space-y-2 overflow-y-auto" style="height:400px">
                    
                    <li class="flex flex-row items-center relative bg-gray-200 hover:bg-gray-100 p-2 rounded">
                        <div class="absolute flex items-center justify-center h-full right-0 top-0 mr-2">
                            <span class="flex items-center justify-center shadow bg-blue-600 h-6 w-6 text-xs rounded-full text-white">4</span>
                        </div>
                        <div class="relative flex-shrink-0">
                            <span class="absolute right-0 top-0 border-2 border-white mt-px mr-px flex items-center justify-center h-4 w-4 rounded-full bg-green-500"></span>
                            <a href="#" class="flex rounded-full w-16 h-16">
                                <img src="https://images.unsplash.com/photo-1568967729548-e3dbad3d37e0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;w=128&amp;h=128&amp;q=60&amp;facepad=1.5" alt="" class="w-full h-full rounded-full">
                            </a>
                        </div>
                        <div class="flex flex-col ml-4">
                            <h3 class="font-bold">Zac Wayne</h3>
                            <p class="text-sm text-gray-600">Hey, how are you today?</p>
                        </div>
                    </li>
                    <li class="flex flex-row items-center relative hover:bg-gray-100 p-2 rounded">
                        <div class="absolute flex items-center flex-row space-x-1 right-0 top-0 mr-2 h-full">
                            <span class="block rounded-full h-2 w-2 bg-gray-300"></span>
                            <span class="block rounded-full h-2 w-2 bg-gray-400"></span>
                            <span class="block rounded-full h-2 w-2 bg-gray-500"></span>
                        </div>
                        <div class="relative flex-shrink-0">
                            <span class="absolute right-0 top-0 border-2 border-white mt-px mr-px flex items-center justify-center h-4 w-4 rounded-full bg-green-500"></span>
                            <a href="#" class="flex rounded-full w-16 h-16">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;w=128&amp;h=128&amp;q=60&amp;facepad=1.5" alt="" class="w-full h-full rounded-full">
                            </a>
                        </div>
                        <div class="flex flex-col ml-4">
                            <h3 class="font-bold">Amina Mkalcha</h3>
                            <p class="text-sm text-gray-600">Wach omri cava?</p>
                        </div>
                    </li>
                    
                    <li class="flex flex-row items-center relative hover:bg-gray-100 p-2 rounded">
                        <div class="relative flex-shrink-0">
                            <span class="absolute right-0 top-0 border-2 border-white mt-px mr-px flex items-center justify-center h-4 w-4 rounded-full bg-green-500"></span>
                            <a href="#" class="flex rounded-full w-16 h-16">
                                <img src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;w=128&amp;h=128&amp;q=60&amp;facepad=1.5" alt="" class="w-full h-full rounded-full">
                            </a>
                        </div>
                        <div class="flex flex-col ml-4">
                            <h3 class="font-bold">Hamid Imad</h3>
                            <p class="text-sm text-gray-600">Tessema fiha</p>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </body>
</html>
