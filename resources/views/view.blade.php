@extends('general')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="flex flex-col w-full max-w-2xl">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" _lpchecked="1">
                <p class="text-gray-800 font-medium">View Message</p>
                
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="subject">Subject</label>
                    <p>Subject</p>
                </div>
                
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Content</label>
                    <p>Content</p>
                </div>

                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Sent Date</label>
                    <p>Sent Date</p>
                </div>

                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Read Date</label>
                    <p>Read Date</p>
                </div>

                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Archived Date</label>
                    <p>Archived Date</p>
                </div>

                <div class="mt-4 text-right">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Archive</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection