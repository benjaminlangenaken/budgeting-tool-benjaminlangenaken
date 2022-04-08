<x-layout>

    @include('_partials.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">

        <h1 class="text-3xl font-bold">Budget Overview</h1>

{{--        {{ dd($categories) }}--}}

        @if ($transactions->count() > 0)
            <x-categories-grid :categories="$categories"/>

        @else
            <p class="text-center">Please add some transactions to create your budget...</p>
        @endif

    </main>

    @include('_partials.footer')

</x-layout>
