<div class="block w-full h-full bg-white space-y-4 mb-10 mt-5">
    <h2 class="text-2xl px-5 font-bold"> {{__('Edit')}} {{$user->name}}</h2>
    @include('partial.error-card')
    <form class="space-y-3 dark:text-white px-5" wire:submit.prevent="store">
        <div class="space-y-4 mt-4">
            <div>
                <label class="text-gray-700">{{__('Name')}}
                    <x-input type="text" name="name" value="{{old('name')}}" wire:model.debounce="name"/>
                </label>
            </div>

            <div>
                <label class="text-gray-700">{{__('Email')}}
                    <x-input type="email" name="email" value="{{old('email')}}" wire:model.debounce="email"/>
                </label>
            </div>

            <div>
                <label class="text-gray-700" for="role">{{__('Role')}}
                    <select class="form-input w-full mt-2 rounded-md focus:border-indigo-600 text-black"
                            name="role" wire:model.debounce="role">
                        <option value="" disabled hidden>{{__('Select Role')}}</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}"
                                    @if($user->roles->first()->id == $role->id) selected @endif>{{$role->name}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
        </div>

        <div class="flex justify-end pt-2">
            <input type="submit" value="{{__('Submit')}}"
                   class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight cursor-pointer">
        </div>
    </form>
</div>
