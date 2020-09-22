@extends('general')

@section('content')
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
                
                @foreach ($messages as $message)
                    <a href="/view/{{ $message->id }}">
                        <li class="flex flex-row items-center relative @if (!$message->readDate) bg-gray-200 @endif hover:bg-gray-100 p-2 rounded">
                            @if (!$message->readDate)
                                <div class="absolute flex items-center justify-center h-full right-0 top-0 mr-2">
                                    <span class="flex items-center justify-center shadow bg-blue-600 h-6 w-12 text-xs text-white">Unread</span>
                                </div>
                            @endif
                            
                            <div class="flex flex-col ml-4">
                                <h3 class="font-bold">{{$message->subject}}</h3>
                                <p class="text-sm text-gray-600">{{$message->body}}</p>
                            </div>
                        </li>
                    </a>
                @endforeach

            </ul>
            
        </div>
    </div>
@endsection