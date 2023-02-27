<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    input {
        width: 100%;
        padding: 5px;
    }

    .container {
        width: 500px;
        margin: 0 auto;
    }

    *+* {
        margin-top: 10px;
    }
</style>

<body>
    <main>
        <div class="container">
            <h1>問い合わせFORM</h1>
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div>
                    <label for="name"> 名前
                        <input type="text" name="name" placeholder="名前を入力してください。" id="name">
                    </label>
                </div>
                <div>
                    <label for="email"> メールアドレス
                        <input type="email" name="email" placeholder="emailを入力してください。" id="email">
                    </label>
                </div>
                <button>送信する</button>
            </form>
        </div>

    </main>
</body>

</html>
