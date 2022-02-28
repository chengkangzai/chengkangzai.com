<div class="bg-white shadow rounded-md overflow-hidden">
    <table class="text-left w-full border-collapse">
        <thead class="border-b">
        <tr class="hover:bg-gray-200">
            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Name')}}</td>
            <td class="py-4 px-6 border-b text-gray-500">{{$user->name}} </td>
        </tr>
        <tr class="hover:bg-gray-200">
            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Email')}}</td>
            <td class="py-4 px-6 border-b text-gray-500">
                <a href="mailto:{{$user->email}}">{{$user->email}}</a>
            </td>
        </tr>
        <tr class="hover:bg-gray-200">
            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Role')}}</td>
            <td class="py-4 px-6 border-b text-gray-500">
                @foreach($user->roles as $role)
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                        {{$role->name}}
                    </span>
                @endforeach
            </td>
        </tr>
        <tr class="hover:bg-gray-200">
            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Join at')}}</td>
            <td class="py-4 px-6 border-b text-gray-500">{{$user->created_at}}</td>
        </tr>
        <tr class="hover:bg-gray-200">
            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Action')}}</td>
            <td class="py-4 px-6 border-b text-gray-500">
                <x-button-lg type="submit" wire:click="sendForgetPasswordLink">
                    {{__('Send forget password link')}}
                </x-button-lg>
        </tr>
        </thead>
    </table>
</div>
