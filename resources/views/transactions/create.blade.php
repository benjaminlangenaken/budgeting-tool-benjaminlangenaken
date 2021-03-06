<x-layout>

    @include('_partials.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        <form method="POST" action="/transactions">
            @csrf

            <div class="mb-4">
                <label for="date" class="font-bold text-gray-800">Date:</label>
                <input
                    id="date"
                    name="date"
                    type="date"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm
                        focus:outline-none focus:border-gray-400 focus:ring-0"
                >
            </div>

            <div class="mb-4">
                <label for="description" class="font-bold text-gray-800">Description:</label>
                <input
                    id="description"
                    name="description"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm
                        focus:outline-none focus:border-gray-400 focus:ring-0"
                >
            </div>

            <div class="mb-4">
                <label for="category" class="font-bold text-gray-800">Category:</label>
                <input
                    id="category"
                    name="category"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm
                        focus:outline-none focus:border-gray-400 focus:ring-0"
                >
            </div>

            <div class="mb-4">
                <label for="amount" class="font-bold text-gray-800">Amount:</label>
                <input
                    id="amount"
                    name="amount"
                    type="number"
                    step="0.01"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm
                        focus:outline-none focus:border-gray-400 focus:ring-0"
                >
            </div>

            <div class="mb-4">
                <label for="currency" class="font-bold text-gray-800">Currency:</label>
                <input
                    id="currency"
                    name="currency"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm
                        focus:outline-none focus:border-gray-400 focus:ring-0"
                >
            </div>

            <div class="mb-4">
                <label for="is_expense" class="font-bold text-gray-800">Expense?</label>
                <input
                    id="is_expense"
                    name="is_expense"
                    type="checkbox"
                    class="h-15 bg-white border border-gray-300 rounded py-4 px-4 mr-4 mt-6 w-6 text-gray-600 text-sm
                                                focus:outline-none focus:border-gray-400 focus:ring-0"
                >
            </div>

            <button
                class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-sm rounded
                    hover:shadow"
            >
                Create
            </button>
        </form>

    </main>

    @include('_partials.footer')

</x-layout>
