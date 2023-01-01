@if (session('success'))
    <div class="mx-auto mb-2 w-4/5">
        <div class="block flex h-auto items-center rounded-sm border border-green-400 bg-green-200 p-4 text-left text-sm font-bold text-black"
            role="alert">
            {!! session('success') !!}
        </div>
    </div>
@endif
