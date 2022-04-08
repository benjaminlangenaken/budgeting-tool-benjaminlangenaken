@props(['categories'])

    <div class="lg:grid lg:grid-cols-2">
        @foreach($categories as $category)
            <x-category-card
                :category="$category" />
        @endforeach

    </div>
