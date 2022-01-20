<div class="block w-full h-full bg-white space-y-4">
    <div class="bg-white shadow rounded-md overflow-hidden">
        <table class="text-left w-full border-collapse">
            <thead class="border-b">
            <tr class="hover:bg-gray-200">
                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Name')}}</td>
                <td class="py-4 px-6 border-b text-gray-500">{{$role->name}} </td>
            </tr>
            <tr class="hover:bg-gray-200">
                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Permissions')}}</td>
                <td class="py-4 px-6 border-b text-gray-500 space-y-1 space-x-1">
                    @foreach($role->permissions as $permission)
                        <span
                            class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mt-1">
                            {{$permission->name}}
                        </span>
                    @endforeach
                </td>
            </tr>
            <tr class="hover:bg-gray-200">
                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Users')}}</td>
                <td class="py-4 px-6 border-b text-gray-500 space-y-1 space-x-1">
                    @foreach($role->users as $user)
                        <span
                            class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mt-1">
                            {{$user->name}}
                        </span>
                    @endforeach
                </td>
            </tr>
            </thead>
        </table>
    </div>
</div>
