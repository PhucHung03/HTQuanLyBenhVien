<?php 
require('component_admin/header.php');
require('component_admin/sidebar.php');
require('component_admin/topbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management Dashboard</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="dashboard">
        <header class="header">
            <h2>Hello Sáng Tạo 👋</h2>
        </header>

        <div class="cards">
            <div class="card blue">Hospital Earnings<br><span>$800K - 500K</span></div>
            <div class="card yellow">Total Patient<br><span>600</span></div>
            <div class="card red">Operation<br><span>400</span></div>
            <div class="card green">Appointments<br><span>80</span></div>
        </div>

        <section class="best-doctors" >
            <h3>Best Doctors</h3>
            <div class="doctor-list" >
                <div class="doctor-card">
                    <img src="../img/bacsi (1).png" alt="Dr. Leslie">
                    <p>Dr. Leslie<br><span>Dentist</span></p>
                </div>
                <div class="doctor-card">
                    <img src="../img/bacsi (2).png" alt="Dr. Harry">
                    <p>Dr. Harry<br><span>Nutrition</span></p>
                </div>
                <div class="doctor-card">
                    <img src="../img/bacsi (3).png" alt="Dr. Luci">
                    <p>Dr. Luci<br><span>Cardiologist</span></p>
                </div>
                <div class="doctor-card">
                    <img src="../img/bacsi (4).png" alt="Dr. Jenny">
                    <p>Dr. Jenny<br><span>Dentist</span></p>
                </div>
            </div>
        </section>

        <!-- Biểu đồ -->
        <section class="charts">
            <div class="chart">
                <h3>Visitors</h3>
                <canvas id="visitorsChart"></canvas>
            </div>
            <div class="chart">
                <h3>Recovered</h3>
                <canvas id="recoveredChart"></canvas>
            </div>
            <div class="chart">
                <h3>Patients</h3>
                <canvas id="patientsChart"></canvas>
            </div>
        </section>
        
        <section class="consultation">
            <h3>Consultation Slots <a href="#" class="view-all">View all <span>&#8594;</span></a></h3>
            <div class="consultation-slot">
                <img src="../img/bacsi (1).png " alt="Dr. Devon Lane" class="doctor-img">
            <div class="consultation-info">
                <p class="doctor-name">Dr. Devon Lane</p>
                <p class="doctor-specialty">Cardiologist - Cumilla Medical College</p>
                <p class="consultation-time">10:20 AM - 12:30 PM</p>
            </div>
                <button class="view-button">View</button>
            </div>
            <div class="consultation-slot">
                <img src="../img/bacsi (2).png" alt="Dr. Jenny" class="doctor-img">
            <div class="consultation-info">
                <p class="doctor-name">Dr. Jenny</p>
                <p class="doctor-specialty">Dentist</p>
                <p class="consultation-time">10:20 AM - 12:30 PM</p>
            </div>
                <button class="view-button">View</button>
            </div>
        </section>

    </div>

    <script>
    // Biểu đồ Visitors (Khách thăm bệnh viện)
    const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
    const visitorsChart = new Chart(visitorsCtx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Visitors',
                data: [1000, 1500, 2000, 2500, 3000, 3500],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    // Biểu đồ Recovered (Số bệnh nhân phục hồi)
    const recoveredCtx = document.getElementById('recoveredChart').getContext('2d');
    const recoveredChart = new Chart(recoveredCtx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Recovered',
                data: [500, 700, 900, 1200, 1500, 1800],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

        // Biểu đồ Patients (Số bệnh nhân)
    const patientsCtx = document.getElementById('patientsChart').getContext('2d');
    const patientsChart = new Chart(patientsCtx, {
        type: 'pie',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Patients',
                data: [300, 450, 600, 750, 900, 1200],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                    'rgba(255, 159, 64, 0.7)'
                ],
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: 'white',  // Điều chỉnh màu chữ cho dễ đọc trên nền tối
                        padding: 10,
                        boxWidth: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.raw || '';
                            return `${label}: ${value} Patients`;
                        }
                    }
                }
            }
        }
    });

    </script>
</body>
</html>

<?php
require_once "component_admin/footer.php";
?>
