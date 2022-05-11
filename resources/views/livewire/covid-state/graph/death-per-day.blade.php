<div>
    <h2 class="text-2xl pb-2">{{ __('Deaths') }}</h2>
    <hr class="py-2">
    <canvas id="death-case-per-day"></canvas>
</div>

@push('script')
    <script defer>
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
            deathCareArea, {
                type: 'line',
                data: {
                    labels: {!! $date !!},
                    datasets: [{
                        label: '{{ __('Deaths') }}',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: {!! $deathCase !!},
                    }, {
                        label: '{{ __('Brought in Death (BID) ') }}',
                        backgroundColor: 'rgb(99,120,255)',
                        borderColor: 'rgb(99,120,255)',
                        data: {!! $bidCase !!},
                    }, {
                        label: '{{ __('Died of disease (DOD) ') }}',
                        backgroundColor: 'rgb(201,119,60)',
                        borderColor: 'rgb(201,119,60)',
                        data: {!! $dodCase !!},
                    }]
                },
                options: deathCareOptions
            }
        );

        document.addEventListener('CovidStateUpdate', function(test) {
            const date = test.detail.date;
            const deathCase = test.detail.deathCase;
            const bidCase = test.detail.bidCase;
            const dodCase = test.detail.dodCase;
            deathCareChart.destroy();
            deathCareChart = new Chart(
                deathCareArea, {
                    type: 'line',
                    data: {
                        labels: date,
                        datasets: [{
                            label: '{{ __('Deaths') }}',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: deathCase,
                        }, {
                            label: '{{ __('Brought in Death (BID) ') }}',
                            backgroundColor: 'rgb(99,120,255)',
                            borderColor: 'rgb(99,120,255)',
                            data: bidCase,
                        }, {
                            label: '{{ __('Died of disease (DOD) ') }}',
                            backgroundColor: 'rgb(201,119,60)',
                            borderColor: 'rgb(201,119,60)',
                            data: dodCase,
                        }]
                    },
                    options: deathCareOptions
                }
            );
        });
    </script>
@endpush
