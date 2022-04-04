<x-layout>

    @include('_partials.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($transactions->count() > 0)
            <div class="flex-row">
                @foreach($transactions as $transaction)
                    <span class="font-bold"> {{ $transaction->date }} - </span>
                    <span class="font-bold"> {{ $transaction->description }}: </span>
                    <span> {{ $transaction->amount }} </span>
                    <span> {{ $transaction->currency }} </span>
                @endforeach
            </div>
        @else
            <p class="text-center">Please add some transactions to create your budget...</p>
        @endif

    </main>

    @include('_partials.footer')

</x-layout>
