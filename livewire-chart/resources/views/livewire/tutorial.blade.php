<div>

    {{-- content --}}
    <h1>Livewire Chart</h1>

    <canvas id="myChart" width="2000" height="400"></canvas>

    {{-- js --}}
    @push('css')
    @livewireStyles
    @endpush

    @push('js')
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script>
        setInterval(() => Livewire.emit('ubahData'),3000);

        var chartData = JSON.parse('{!! $products !!}');
        console.log(chartData);
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.label,
                datasets: [{
                    label: '# of Votes',
                    data: chartData.data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        Livewire.on('berhasilUpdate',event => {
        var chartData = JSON.parse(event.data);
        console.log(chartData);

        myChart.data.labels = chartData.label;
        myChart.data.datasets.forEach((dataset) => {
        dataset.data = chartData.data;
        });
        myChart.update();
        })
        
    </script>
    @endpush

</div>