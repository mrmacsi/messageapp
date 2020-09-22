@extends('general')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-200">
<div class="flex flex-col w-full max-w-2xl">
    <div class="leading-loose">
        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" _lpchecked="1">
            <p class="text-gray-800 font-medium">Create New Message</p>
            
            <div class="mt-2">
            <label class="block text-sm text-gray-600" for="subject">Subject</label>
            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="subject" name="subject" type="text" required="" placeholder="Subject" aria-label="Subject" style="">
            </div>
            
            <div class="mt-2">
            <label class="block text-sm text-gray-600" for="content">Content</label>
            <textarea placeholder="Content" class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" spellcheck="false"></textarea>
            </div><div class="mt-4 text-right">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>

</div>
@endsection