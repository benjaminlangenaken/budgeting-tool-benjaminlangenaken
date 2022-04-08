@props(['transactions'])

    <div class="lg:grid lg:grid-cols-2">
        @foreach($transactions as $transaction)
            <x-category-card
                :transaction="$transaction" />
        @endforeach
    </div>
