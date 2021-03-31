function draw_graph(count, title) {
  var ctx = document.getElementById('myChart');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'Akmeemana',
        'Ambalangoda',
        'Baddegama',
        'Balapitiya',
        'Benthota',
        'Bope-Poddala',
        'Elpitiya',
        'Galle-Four-Gravets',
        'Habaraduwa',
        'Hikkaduwa',
        'Imaduwa',
        'Karandeniya',
        'Nagoda',
        'Neluwa',
        'Niyagama',
        'Thawalama',
        'Walivitiya-Divithura',
        'Yakkalamulla',
        'Gonapinuwala',
      ],
      datasets: [
        {
          label: title,
          data: count,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(153, 102, 255, 0.2)',
          ],
        },
      ],
    },
    options: {
      responsive: false,
      scales: {
        xAxes: [
          {
            ticks: {
              maxRotation: 90,
              minRotation: 80,
            },
            gridLines: {
              offsetGridLines: true, // à rajouter
            },
          },
        ],
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
              stepSize: 1,
            },
          },
        ],
      },
    },
  });
}
