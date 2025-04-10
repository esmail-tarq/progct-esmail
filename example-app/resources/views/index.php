<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مرحبًا بك</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');

    body {
      font-family: 'Cairo', sans-serif;
      background: linear-gradient(to right, #1f4037, #99f2c8);
      margin: 0;
      padding: 0;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2rem;
    }

    .btn {
      margin-top: 30px;
      padding: 12px 30px;
      font-size: 1rem;
      background-color: #ffffff;
      color: #1f4037;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>أهلًا وسهلًا بك! 🎉</h1>
    <p>مرحبًا بك في صفحتك الأولى بتصميم فخم وراقي 🤩</p>
    <button class="btn" onclick="alert('أنت رائع 😍')">اضغط هنا</button>
  </div>
</body>
</html>
