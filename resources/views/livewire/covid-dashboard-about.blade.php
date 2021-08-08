<div class="py-10 px-2 rounded-2xl dark:bg-white dark:text-black my-4 bg-gray-50 shadow" id="about">
    <h2 class="text-3xl font-bold">{{__('About this project')}}</h2>
    <ul class="text-sm sm:text-base list-disc list-inside">
        <li>
            {{__('Cases data Updated at')}}
            : {{$dashboardValue->updated_at->caseMalaysia->toDateString()}}
        </li>
        <li>
            {{__('Death data Updated at')}}
            : {{$dashboardValue->updated_at->deathMalaysia->toDateString()}}
        </li>
        <li>
            {{__('Tested data Updated at')}}
            : {{$dashboardValue->updated_at->tested->toDateString()}}
        </li>
        <li>
            {{__('Cluster data Updated at')}}
            : {{\Carbon\Carbon::parse($dashboardValue->updated_at->cluster)->toDateString()}}
        </li>
        <li>
            {{__('Vaccination data Updated at')}}
            : {{\Carbon\Carbon::parse($dashboardValue->updated_at->vaxMalaysia)->toDateString()}}
        </li>
        <li>
            {{__('Vaccination registration data Updated at')}}
            : {{\Carbon\Carbon::parse($dashboardValue->updated_at->vaxMalaysia)->toDateString()}}
        </li>
    </ul>
    <div>
        <p><span
                class="font-black text-black">***</span> {{__('Any feedback/recommendation/correction is welcomed, contact me by email or twitter')}}
        </p>
    </div>
</div>
