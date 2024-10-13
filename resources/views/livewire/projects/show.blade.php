<div class="col-span-2">
    {{-- component livewire projects.show --}}
    {{-- @dump($project) --}}
    {{-- c<pre>
        title: {{ $project->title }}
        description: {!! $project->description !!}
    </pre> --}}
    <x-projects.card :$project />
</div>
