
    var ctx = document.getElementById('worldwide-doanhthu').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line', // Loại biểu đồ
        data: {
            labels: ['Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'], // Nhãn cho các điểm dữ liệu
            datasets: [{
                label: 'Doanh thu',
                data: [3000, 2500, 4000, 1500, 5000], // Dữ liệu cho biểu đồ
                borderColor: 'rgba(75, 192, 192, 1)', // Màu đường
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Màu nền
                borderWidth: 2,
                fill: true // Bật fill để làm nền cho biểu đồ
            }]
        },
        options: {
            responsive: true, // Responsive cho biểu đồ
            scales: {
                y: {
                    beginAtZero: true // Bắt đầu từ 0
                }
            }
        }
    });
