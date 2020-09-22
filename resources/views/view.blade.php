@extends('general')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="flex flex-col w-full max-w-2xl">
        <div class="leading-loose">
            <div class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" _lpchecked="1">
                <p class="text-gray-800 font-medium">View Message</p>
                
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="subject">Subject</label>
                    <p>{{ $message->subject }}</p>
                </div>
                
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Content</label>
                    <p>{{ $message->body }}</p>
                </div>

                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Sent Date</label>
                    <p>{{ $message->sentDate }}</p>
                </div>

                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Read Date</label>
                    <p>{{ $message->readDate }}</p>
                </div>

                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="content">Archived Date</label>
                    <p>{{ $message->archivedDate }}</p>
                </div>

                @if(!$message->archivedDate)
                    <div class="mt-4 text-right">
                        {{ Form::open(array('url' => '/archive/'.$message->id, 'method' => 'PUT', 'class'=>'col-md-12')) }}
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Archive</button>
                        {{ Form::close() }}
                    </div>
                @else
                This message archived
                @endif
            </div>
        </div>
    </div>
</div>
@endsection