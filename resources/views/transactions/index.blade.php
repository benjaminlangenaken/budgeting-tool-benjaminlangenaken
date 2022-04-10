<x-layout>

    @include('_partials.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($transactions->count() > 0)

            <h1 class="text-3xl font-bold text-center">Remaining budget =
                {{ number_format($income[0]->sum - $expenses[0]->sum, 2, ',', '.') . ' ' . 'EUR' }}
            </h1>

            <x-categories-grid :categories="$categories"/>

        @else
            <p class="text-center">Please add some transactions to create your budget...</p>
        @endif

    </main>

    @include('_partials.footer')

</x-layout>
