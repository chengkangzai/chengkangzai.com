@if ($errors->any())
    <div role="alert"
        class="block flex h-auto items-center rounded-lg border border-red-400 bg-red-200 p-4 text-left text-sm text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="flex items-start">
                    <p class="ml-2">
                        {{ $error }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
@endif
