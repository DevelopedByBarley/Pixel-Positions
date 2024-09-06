@props(['job'])


<x-panel>
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-800 font-bold duration-300">Video Producer</h3>
        <p class="text-sm mt-4">{{ $job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>

</x-panel>
