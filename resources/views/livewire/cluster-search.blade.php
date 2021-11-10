<div class="min-h-screen container">
    <div class="w-full my-2 py-4 px-4 rounded-2xl dark:bg-white bg-gray-50 rounded-2xl shadow">
        <div class="pb-2">
            <label class="text-left w-full">
                <span>{{__('Search any input')}}</span>
                <input type="text" class="mx-12 px-8 py-2 border rounded-xl border-blue-300 "
                       wire:model.debounce.500ms="search"
                       placeholder="{{__('Search by any keyword')}}">
            </label>
        </div>
        <div class="pb-2">
            <label class="text-left w-full">
                <span>{{__('Filter By Cluster Category')}}</span>
                <select wire:model="categoryFilter" class="mx-8 px-12 py-2 border rounded-xl border-blue-300">
                    <option value="" selected>{{__('All')}}</option>
                    <option value="" disabled>--------</option>
                    @foreach(\App\Models\Covid\Cluster::CLUSTER_CATEGORY as $key=> $category)
                        <option value="{{$key}}">{{__($category)}}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div class="pb-2">
            <label class="text-left w-full">
                <span>{{__('Filter By State')}}</span>
                <select wire:model="state" class="mx-8 px-12 py-2 border rounded-xl border-blue-300">
                    <option value="" selected>{{__('All')}}</option>
                    <option value="" disabled>--------</option>
                    @foreach(\App\Models\Covid\Cluster::STATE as $key=> $state)
                        <option value="{{$key}}">{{__($state)}}</option>
                    @endforeach
                </select>
            </label>
        </div>

    </div>

    <section class="flex flex-col mt-8 mb-8" id="healthcare-state">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="10" class="py-2 border-b">
                                <a href="#healthcare-state">
                                    <h3 class="font-bold text-2xl uppercase">{{__('Active Cluster')}}</h3>
                                </a>
                                <span
                                    class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$updated_at}}
                            </th>
                        </tr>
                        <tr>
                            <th scope="col"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r">
                                {{__('Cluster Name')}}
                            </th>
                            <th scope="col"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r">
                                {{__('State')}}
                            </th>
                            <th scope="col"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r">
                                {{__('District')}}
                            </th>
                            <th scope="col"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r">
                                {{__('Cluster Category')}}
                            </th>
                            <th scope="col" wire:click="sort('cases_new')"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r cursor-pointer hover:text-blue-500 hover:font-bold">
                                {{__('New Case')}}
                            </th>
                            <th scope="col" wire:click="sort('cases_active')"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r cursor-pointer hover:text-blue-500 hover:font-bold">
                                {{__('Active Case')}}
                            </th>
                            <th scope="col" wire:click="sort('cases_total')"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r cursor-pointer hover:text-blue-500 hover:font-bold">
                                {{__('Total Case')}}
                            </th>
                            <th scope="col" wire:click="sort('positiveRate')"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r cursor-pointer hover:text-blue-500 hover:font-bold">
                                {{__('Positive Rate')}}
                            </th>
                            <th scope="col" wire:click="sort('date_announced')"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r cursor-pointer hover:text-blue-500 hover:font-bold">
                                {{__('Announced Date')}}
                            </th>
                            <th scope="col" wire:click="sort('date_last_onset')"
                                class="px-2 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-r cursor-pointer hover:text-blue-500 hover:font-bold">
                                {{__('Last Active Date')}}
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($clusters as $cluster)
                            <tr class="@if($loop->even) bg-gray-50 @endif ">
                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{str_replace('Kluster','K.',$cluster->cluster)}}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-left border-r border-l">
                                    @if(count(explode(',',$cluster->state))  == 1 )
                                        {{__($cluster->state)}}
                                    @else
                                        <ul class="list-disc list-inside">
                                            @foreach(explode(',',$cluster->state) as $state)
                                                <li>{{__($state)}}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-left border-r">
                                    @if(count(explode(',',$cluster->district)) == 1 )
                                        {{$cluster->district}}
                                    @else
                                        <ul class="list-disc list-inside">
                                            @foreach(explode(',',$cluster->district) as $district)
                                                <li>{{$district}}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{__(\App\Models\Covid\Cluster::CLUSTER_CATEGORY[$cluster->category])}}
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{$cluster->cases_new}}
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{$cluster->cases_active}}
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{$cluster->cases_total}}
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{number_format(($cluster->cases_total/$cluster->tests)*100,2).'%'}}
                                    <small class="text-xs">
                                        ({{$cluster->cases_total}}/{{$cluster->tests}})
                                    </small>
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{$cluster->date_announced->format('d/m/y')}}
                                </td>
                                <td class="py-4 whitespace-nowrap border-r">
                                    {{$cluster->date_last_onset->format('d/m/y')}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="py-4 whitespace-nowrap border-r">
                                    {{__('No Data')}}
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="10" class="bg-white py-2 px-2">
                                {{$clusters->links()}}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
