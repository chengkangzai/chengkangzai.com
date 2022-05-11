<div>
    <h2 class="text-2xl pb-2">{{ __('Active Case vs Health Care') }}</h2>
    <hr class="py-2">
    <canvas id="active-case-vs-health-care"></canvas>
</div>

@push('script')
    <script defer>
        const activeCaseVsHealthCareArea = document.getElementById("active-case-vs-health-care").getContext("2d");
        const activeCaseVsHealthCareOptions = {
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
        let activeCaseVsHealthCareChart = new Chart(
            activeCaseVsHealthCareArea, {
                type: 'line',
                data: {
                    labels: {!! $date !!},
                    datasets: [{
                        label: '{{ __('Active Case') }}',
                        backgroundColor: '#D97706',
                        borderColor: '#D97706',
                        data: {!! $activeCase !!},
                    }, {
                        label: '{{ __('Home Quarantine') }}',
                        backgroundColor: '#FCA5A5',
                        borderColor: '#FCA5A5',
                        data: {!! $cat1 !!},
                    }, {
                        label: '{{ __('PKRC') }}',
                        backgroundColor: '#F87171',
                        borderColor: '#F87171',
                        data: {!! $cat2 !!},
                    }, {
                        label: '{{ __('Hospitalized') }}',
                        backgroundColor: '#EF4444',
                        borderColor: '#EF4444',
                        data: {!! $cat3 !!},
                    }, {
                        label: '{{ __('ICU') }}',
                        backgroundColor: '#B91C1C',
                        borderColor: '#B91C1C',
                        data: {!! $cat4 !!},
                    }, {
                        label: '{{ __('Ventilated') }}',
                        backgroundColor: '#7F1D1D',
                        borderColor: '#7F1D1D',
                        data: {!! $cat5 !!},
                    }]
                },
                options: activeCaseVsHealthCareOptions
            }
        );

        document.addEventListener('CovidMalaysiaUpdate', function(test) {
            const date = test.detail.date;
            const activeCase = test.detail.activeCase;
            const cat1 = test.detail.cat1;
            const cat2 = test.detail.cat2;
            const cat3 = test.detail.cat3;
            const cat4 = test.detail.cat4;
            const cat5 = test.detail.cat5;
            activeCaseVsHealthCareChart.destroy();
            activeCaseVsHealthCareChart = new Chart(
                activeCaseVsHealthCareArea, {
                    type: 'line',
                    data: {
                        labels: date,
                        datasets: [{
                            label: '{{ __('Active Case') }}',
                            backgroundColor: '#D97706',
                            borderColor: '#D97706',
                            data: activeCase,
                        }, {
                            label: '{{ __('Home Quarantine') }}',
                            backgroundColor: '#FCA5A5',
                            borderColor: '#FCA5A5',
                            data: cat1,
                        }, {
                            label: '{{ __('PKRC') }}',
                            backgroundColor: '#F87171',
                            borderColor: '#F87171',
                            data: cat2,
                        }, {
                            label: '{{ __('Hospitalized') }}',
                            backgroundColor: '#EF4444',
                            borderColor: '#EF4444',
                            data: cat3,
                        }, {
                            label: '{{ __('ICU') }}',
                            backgroundColor: '#B91C1C',
                            borderColor: '#B91C1C',
                            data: cat4,
                        }, {
                            label: '{{ __('Ventilated') }}',
                            backgroundColor: '#7F1D1D',
                            borderColor: '#7F1D1D',
                            data: cat5,
                        }]
                    },
                    options: activeCaseVsHealthCareOptions
                }
            );
        });
    </script>
@endpush
