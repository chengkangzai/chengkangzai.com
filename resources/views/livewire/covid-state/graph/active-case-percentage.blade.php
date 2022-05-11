<div>
    <h2 class="text-2xl pb-2">{{ __('Case Distribution') }}</h2>
    <hr class="py-2">
    <div class="sm:w-1/2 mx-auto w-2/3">
        <canvas id="active-case-percentage"></canvas>
    </div>
</div>

@push('script')
    <script defer>
        const caseDistributionArea = document.getElementById("active-case-percentage").getContext("2d");
        let caseDistributionChart = new Chart(
            caseDistributionArea, {
                type: 'doughnut',
                data: {
                    labels: [
                        '{{ __('Recovered Case') }}',
                        '{{ __('Active Case') }}',
                        '{{ __('Death Case') }}'
                    ],
                    datasets: [{
                        label: '{{ __('Confirm Case') }}',
                        data: [
                            {{ $cumRecoveredCase->last() }},
                            {{ $activeCase->last() }},
                            {{ $cumDeathCase->last() }}
                        ],
                        backgroundColor: [
                            '#3B82F6',
                            '#F59E0B',
                            '#6B7280'
                        ],
                    }]
                },
                options: {}
            }
        );

        document.addEventListener('CovidStateUpdate', function(test) {
            const cumRecoveredCase = test.detail.cumRecoveredCase[test.detail.cumRecoveredCase.length - 1];
            const activeCase = test.detail.activeCase[test.detail.activeCase.length - 1];
            const cumDeathCase = test.detail.cumDeathCase[test.detail.cumDeathCase.length - 1];
            caseDistributionChart.destroy();
            caseDistributionChart = new Chart(
                caseDistributionArea, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            '{{ __('Recovered Case') }}',
                            '{{ __('Active Case') }}',
                            '{{ __('Death Case') }}'
                        ],
                        datasets: [{
                            label: '{{ __('Confirm Case') }}',
                            data: [
                                cumRecoveredCase,
                                activeCase,
                                cumDeathCase,
                            ],
                            backgroundColor: [
                                '#3B82F6',
                                '#F59E0B',
                                '#6B7280'
                            ],
                        }]
                    },
                    options: {}
                }
            );
        });
    </script>
@endpush
