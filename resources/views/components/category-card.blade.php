@props(['transaction'])

<article
    {{--    {{ $attributes->merge(['class' =>'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >--}}
    class='transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'>
    <div class="py-6 px-5">
        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <a href="/?categories={{ $transaction->category->slug }}"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $transaction->category->name }}</a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $transaction->category->name }}">
                            {{ $transaction->category->name }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        <time>{{ $transaction->date }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4 space-y-4">
                {!! $transaction->description !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?user={{ $transaction->user->name }}">{{ $transaction->user->name }}</a></h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $transaction->description }}"
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
