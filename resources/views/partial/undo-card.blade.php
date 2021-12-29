@if (session('undo'))
    <div class="mb-2 w-4/5 mx-auto">
        <div
            class="block text-sm text-left text-black font-bold bg-green-200 border border-green-400 h-auto flex items-center p-4 rounded-sm"
            role="alert">
            {!! session('undo') !!}
        </div>
    </div>
@endif
