@extends('general')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="flex flex-col w-full max-w-2xl">
        <div class="leading-loose">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                {{ Form::open(array('url' => route('message.store'), 'method' => 'POST', 'class'=>'max-w-xl m-4 p-10 bg-white rounded shadow-xl')) }}
                <p class="text-gray-800 font-medium">Create New Message</p>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="subject">Subject</label>
                        <input class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded" maxlength="255" id="subject" name="subject" type="text" required="" placeholder="Subject" aria-label="Subject" style="">
                    </div>
                    
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="Body">Body</label>
                        <textarea placeholder="Body" required name="body" class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" spellcheck="false"></textarea>
                    </div>

                    <div class="mt-4 text-right">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
                    </div>
                {{ Form::close() }}
        </div>
    </div>
</div>
@endsection