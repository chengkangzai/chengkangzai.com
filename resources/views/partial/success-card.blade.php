@if (session('success'))
    <div
        class="block text-sm text-left text-black bg-green-200 border border-green-400 h-auto flex items-center p-4 rounded-lg">
        <div class="flex items-start">
            <p class="ml-2">
                {!! session('success') !!}
            </p>
        </div>
    </div>
@endif
