<div>
    <h2 class="text-2xl pb-2">{{ __('Cases per Day') }}</h2>
    <hr class="py-2">
    <canvas id="case-per-day"></canvas>
</div>

@push('script')
    <script defer>
        let caseArea = document.getElementById("case-per-day").getContext("2d");
        let caseOptions = {
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
        let caseChart = new Chart(
            caseArea, {
                type: 'line',
                data: {
                    labels: {!! $date !!},
                    datasets: [{
                        label: '{{ __('Confirm Case') }}',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: {!! $confirmCase !!},
                    }, {
                        label: '{{ __('Recovered Case') }}',
                        backgroundColor: 'rgb(99,120,255)',
                        borderColor: 'rgb(99,120,255)',
                        data: {!! $recoveredCase !!},
                    }]
                },
                options: caseOptions
            }
        );

        document.addEventListener('CovidMalaysiaUpdate', function(test) {
            const date = test.detail.date;
            const confirmCase = test.detail.confirmCase;
            const recoveredCase = test.detail.recoveredCase;
            caseChart.destroy();
            caseChart = new Chart(
                caseArea, {
                    type: 'line',
                    data: {
                        labels: date,
                        datasets: [{
                            label: '{{ __('Confirm Case') }}',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: confirmCase,
                        }, {
                            label: '{{ __('Recovered Case') }}',
                            backgroundColor: 'rgb(99,120,255)',
                            borderColor: 'rgb(99,120,255)',
                            data: recoveredCase,
                        }]
                    },
                    options: caseOptions
                }
            );
        });
    </script>
@endpush
