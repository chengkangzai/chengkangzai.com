@if ($errors->any())
    <div role="alert"
         class="block text-sm text-left text-black bg-red-100 border border-red-400 h-auto flex items-center p-4 rounded-lg">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="flex items-start">
                    <p class="ml-2">
                        {{$error}}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
@endif
