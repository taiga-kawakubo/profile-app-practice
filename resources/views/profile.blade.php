<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .profile-item {
            margin: 15px 0;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        ul {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>プロフィール</h1>

    <div class="profile-item">
        <span class="label">名前:</span> {{ $name }}
    </div>

    <div class="profile-item">
        <span class="label">年齢:</span> {{ $age }}歳
    </div>

    <div class="profile-item">
        <span class="label">趣味:</span>
        <ul>
            @foreach ($hobbies as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
