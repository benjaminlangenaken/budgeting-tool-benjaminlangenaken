@props(['category'])

<article
    {{--    {{ $attributes->merge(['class' =>'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >--}}
    class='transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'>
    <div class="py-6 px-5">
        <div class="mt-2 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <a href="/?categories={{ $category->name }}"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $category->name }}</a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        @if (!$category->is_expense)
                            {{ number_format($category->sum, 2, ',', '.') . ' ' . $category->currency }}
                        @else
                            {{ number_format(-$category->sum, 2, ',', '.') . ' ' . $category->currency }}
                        @endif
                    </h1>
                </div>
            </header>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <div class="ml-3">
                    </div>
                </div>

                <div>
                    <a href="/?transactions={{ $category->name }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Transaction details</a>
                </div>
            </footer>
        </div>
    </div>
</article>

{{--<div>--}}
{{--    <span class="font-bold"> {{ $transaction->date }} - </span>--}}
{{--    <span class="font-bold"> {{ $transaction->description }}: </span>--}}
{{--    <span> {{ $transaction->amount *-1 }} </span>--}}
{{--    <span> {{ $transaction->currency }} </span>--}}
{{--</div>--}}
