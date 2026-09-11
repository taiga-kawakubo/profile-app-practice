# profile-app-practice

## 概要
COACHTECH 教材 Tutorial 9-1「Laravel基礎ハンズオン」で作成した成果物です。
laravelのRouting、Controllerを使用したプロフィール画面の表示

## 使用技術
- PHP 8.x
- Laravel 10.x
- Blade テンプレート

## 学んだこと
- Routing、Controller、bladeファイルへの一連の流れ。
- Routing、Controllerの基本的な記述方法。
- 

## 動作確認
- sail up -dでのDockerの起動。
- http://localhost/profileをブラウザで表示する。


## 詰まったポイントと解放方法
- laravelのpublic function index()の記述方法がわかっていなかった。
    基本的な書き方を理解しておく。bladeを確認してどのような情報が必要か、どのような変数にしてbladeにわたす必要があるかを確認する。
    そして、必要な情報を変数にまとめreturnするようにする。

- Routing,Controllerの作成が完成後にブラウザでの表示が404を示した時の対処法。
    ルートが正しく存在しているか確認を行う。
      sail artisan route:list
    存在している場合は、Routingの内容が正しき記述できているかを確認する。

- laravelのControllerでreturnする際に、$dataのように変数でreturnする場合と、compose('data')とする場合の違い。
    blade側でどのような形式で受けとろうとしているかが重要。
    `view()` の第2引数には、Viewへ渡すデータ配列を指定する。

```php

return view('profile', $data);

```
この場合、`$data` 配列のキーがそのままBlade側の変数名になる。
```php

{{ $name }}

{{ $age }}

```
一方で、次の書き方は、
```php

return view('profile', compact('data'));

```
次と同じ意味になる。
```php

return view('profile', ['data' => $data]);

```
そのため、Blade側では `$data` という変数の中身として取り出す。

```php

{{ $data['name'] }}
{{ $data['age'] }}
```


## 動作確認のスクリーンショット
