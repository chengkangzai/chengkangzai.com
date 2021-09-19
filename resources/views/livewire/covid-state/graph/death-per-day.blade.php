<div>
    <h2 class="text-2xl pb-2">{{__('Death Case per Day')}}</h2>
    <hr class="py-2">
    <canvas id="death-case-per-day"></canvas>
</div>

@push('script')
    <script>
        let deathCareArea = document.getElementById("death-case-per-day").getContext("2d");
        let deathCareOptions = {
            plugins: {
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            tension: 0.5,
            borderWidth: 1,
            pointBorderWidth: 0.3,
        }
        let deathCareChart = new Chart(
            deathCareArea,
            {
                type: 'line',
                data: {
                    labels: {!! $date !!},
                    datasets: [{
                        label: '{{__('Death Case')}}',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: {!! $deathCase !!},
                    },{
                        label: '{{__('BID Case')}}',
                        backgroundColor: 'rgb(99,120,255)',
                        borderColor: 'rgb(99,120,255)',
                        data: {!! $bidCase !!},
                    }]
                },
                options: deathCareOptions
            }
        );

        document.addEventListener('CovidStateUpdate', function (test) {
            const date = test.detail.date;
            const deathCase = test.detail.deathCase;
            const bidCase = test.detail.bidCase;
            deathCareChart.destroy();
            deathCareChart = new Chart(
                deathCareArea,
                {
                    type: 'line',
                    data: {
                        labels: date,
                        datasets: [{
                            label: '{{__('Death Case')}}',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: deathCase,
                        }, {
                            label: '{{__('BID Case')}}',
                            backgroundColor: 'rgb(99,120,255)',
                            borderColor: 'rgb(99,120,255)',
                            data: bidCase,
                        }]
                    },
                    options: deathCareOptions
                }
            );
        });
    </script>
@endpush
