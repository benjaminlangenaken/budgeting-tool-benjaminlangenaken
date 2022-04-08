<x-layout>

    @include('_partials.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    <h1>Budget Overview</h1>
        <div id="overview-chart-container" style="height: 300px;"></div>

    </main>

    @include('_partials.footer')

    @push('js')

    <script>
        const overviewChart = new Chartisan({
            el: '#overview-chart-container',
            url: "@chart('overview_budget_chart')"
        });
    </script>

    @endpush

</x-layout>
