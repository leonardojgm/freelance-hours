<x-layouts.app>
    {{--  @dd(request()->route('project')); --}}
    {{--  <livewire:projects.show :p="request()->route('project')" /> --}}
    <div class="grid grid-cols-3 gap-6">
        <livewire:projects.show :$project />
        <livewire:projects.proposals :$project />
    </div>
</x-layouts.app>
