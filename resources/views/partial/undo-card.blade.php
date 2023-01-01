@if (session('undo'))
    <div class="mx-auto mb-2 w-4/5">
        <div class="block flex h-auto items-center rounded-sm border border-yellow-400 bg-yellow-200 p-4 text-left text-sm font-bold text-black"
            role="alert">
            {!! session('undo') !!}
        </div>
    </div>
@endif
