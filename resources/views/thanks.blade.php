<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .container {
        width: 500px;
        margin: 0 auto;
    }
</style>

<body>
    <main>
        <div class="container">
            <h1>問い合わせありがとうございます</h1>
            <p><span>名前：</span>{{ $user['name'] }}</p>
            <p><span>メールアドレス：</span>{{ $user['email'] }}</p>
            <p>お問い合わせありがとうございます。</p>
            <a href="/">トップへ戻る</a>
        </div>
    </main>
</body>

</html>
