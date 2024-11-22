<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
    }

    .container {
        margin-top:20px;
        width: 60%;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .header {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .info-box {
        background-color: #f7f7f7;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .info-box h2 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .info-box p {
        margin: 5px 0;
    }

    .button-container {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
    }

    .back-button {
        background-color: #f28b82;
    }

    .ok-button {
        background-color: #aecbfa;
    }

    .back-button:hover {
        background-color: #e57373;
    }

    .ok-button:hover {
        background-color: #90caf9;
    }
    #text{
        border-radius:12px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="header">Loại thuốc</div>
    
    <div class="info-box">
        <h2>Thông tin thuốc</h2>
        <p><strong>Mã thuốc:</strong>MT0001</p>
        <p><strong>Tên thuốc:</strong>Levothyroxine</p>
        <p><strong>Số lượng tồn kho:</strong>300 hộp</p>
        <p><strong>Giá tiền:</strong>75.000 VND</p>
        <p><strong>Ngày sản xuất:</strong>06/11/2021</p>
        <p><strong>Hạn sử dụng:</strong>11/2024</p>
        <p><strong>Ghi chú:</strong><br><textarea name="text" id="text" cols="60" rows="4">Thuốc Levothyroxine hiện còn 300 hộp và sẽ hết hạn vào tháng 11/2024.</textarea> </p>
    </div>
    
    <div class="button-container">
        <button class="button back-button">Trở lại</button>
        <button class="button ok-button">In báo cáo</button>
    </div>
</div>
</body>