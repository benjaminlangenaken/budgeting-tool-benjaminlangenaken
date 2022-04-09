<x-layout>

    @include('_partials.header')

    @if ($transactions->count() > 0)
        <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6 mb-auto">

            <h1 class="text-3xl font-bold">Remaining budget=
                {{ number_format($income[0]->sum - $expenses[0]->sum, 2, ',', '.') . ' ' . 'EUR' }}
            </h1>

            <x-categories-grid :categories="$categories"/>
        </main>
    @else
        <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6 mb-auto flex h-screen items-center">
                <p class="text-center ">Please add some transactions to create your budget...</p>
        </main>
    @endif

    @include('_partials.footer')

</x-layout>
