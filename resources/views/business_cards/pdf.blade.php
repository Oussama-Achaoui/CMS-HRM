<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Business Card</title>
    <style>
        body {
            font-family: Helvetica , sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh;
            color: #f9f9f9;
            background-size: 600px 300px; 
        }

        h2 {
            position: absolute;
            font-size: 50px;
            left:48px;
            top:-10px;
        }

        #role {
            position: absolute;
            font-size: 25px;
            left:48px;
            top:70px;
        }

        #email {
            position: absolute;
            left:108px;
            top: 160px;
        }
        
        #phone {
            position: absolute;
            left:106px;
            top: 225px;
        }

        #address {
            position: absolute;
            left:106px;
            top: 294px;
        }
        /* Add more styles as needed */
    </style>
</head>
<body>
    <div >
        <img src="{{ public_path('images/media/1.png') }}" alt="">
        <h2>{{ ucfirst($businessCard->name) }}</h2>
        <p id="role">{{ $businessCard->role }}</p>
        <div class="info">
            <p id="email">{{ $businessCard->email }}</p>
            <p id="phone">{{ $businessCard->phone }}</p>
            <p id="address">{{ $businessCard->address }}</p>
        </div>
    </div>
</body>
</html>
