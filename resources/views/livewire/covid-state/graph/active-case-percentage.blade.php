<div>
    <h2 class="text-2xl pb-2">{{__('Case Distribution')}}</h2>
    <hr class="py-2">
    <div class="sm:w-1/2 mx-auto w-2/3">
        <canvas id="active-case-percentage"></canvas>
    </div>
</div>

@push('script')
    <script>
        let CaseDistributionChart = new Chart(
            document.getElementById("active-case-percentage").getContext("2d"),
            {
                type: 'doughnut',
                data: {
                    labels: [
                        '{{__('Recovered Case')}}',
                        '{{__('Active Case')}}',
                        '{{__('Death Case')}}'
                    ],
                    datasets: [{
                        label: '{{__('Confirm Case')}}',
                        data: [
                            {{$cumRecoveredCase->last()}},
                            {{$activeCase->last()}},
                            {{$cumDeathCase->last()}}
                        ],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                    }]
                },
                options: {}
            }
        );

        document.addEventListener('CovidStateUpdate', function (test) {
            const cumRecoveredCase = test.detail.cumRecoveredCase[test.detail.cumRecoveredCase.length - 1];
            const activeCase = test.detail.activeCase[test.detail.activeCase.length - 1];
            const cumDeathCase = test.detail.cumDeathCase[test.detail.cumDeathCase.length - 1];
            CaseDistributionChart.destroy();
            CaseDistributionChart = new Chart(
                document.getElementById("active-case-percentage").getContext("2d"),
                {
                    type: 'doughnut',
                    data: {
                        labels: [
                            '{{__('Recovered Case')}}',
                            '{{__('Active Case')}}',
                            '{{__('Death Case')}}'
                        ],
                        datasets: [{
                            label: '{{__('Confirm Case')}}',
                            data: [
                                cumRecoveredCase,
                                activeCase,
                                cumDeathCase,
                            ],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ],
                        }]
                    },
                    options: {}
                }
            );
        });
    </script>
@endpush
