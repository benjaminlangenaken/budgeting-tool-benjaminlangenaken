<x-layout>

    @include('_partials.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @foreach($transactions as $transaction)
            <a href="/transactions/{{ $transaction->id }}/edit">
                <article
                    class='transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl p-4'>

                    <h2 class="text-xl font-bold text-gray-800">{{ date(('d-m-Y'), strtotime($transaction->date)) . ': ' . $transaction->description }}</h2>

                    <span class="text-gray-600 ">{{ $transaction->category }} - </span>
                    <span class="text-gray-600">{{ number_format($transaction->amount, 2, ',', '.') }}</span>
                    <span class="text-gray-600">{{ $transaction->currency }}</span>

                    <form method="POST" action="/transactions/{{ $transaction->id }}" class="mb-3">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-red-500 tracking-wide text-white px-6 py-2 shadow-sm rounded
                    hover:shadow float-right"
                        >Delete
                        </button>
                    </form>

                    <div>
                        @if($transaction->is_expense)
                            <input type="checkbox" id="is_expense" onclick="return false" checked>
                            <label for="is_expense">Expense?</label>
                        @else
                            <input type="checkbox" id="is_expense" onclick="return false">
                            <label for="is_expense">Expense?</label>
                        @endif
                    </div>

                </article>
            </a>
        @endforeach

        <a href="/transactions/create">
            <button
                class="bg-blue-500 tracking-wide text-white mt-6 px-6 py-2 inline-block mb-6 shadow-sm rounded
                    hover:shadow"
            >+ Add transaction
            </button>
        </a>

    </main>

    @include('_partials.footer')

</x-layout>
