# 確認テスト　　問い合わせフォーム　新規登録　ユーザーログイン　管理
**環境構築**

●Dockerビルド

最初から作成

①docker-compose up -d --build

②docker-compose.ymlファイル編集

●Laravelの環境構築

①docker-compose exec php bash

②composer　のインストール

③ .env.exampleファイルを作成　環境変数を変更

④php artisan migrate　

・問い合わせフォーム入力のcontactsテーブル

・問い合わせフォームの問い合わせ種類　categoriesテーブルの作成


**使用技術(実行環境)**
・ Laravel 8.83.27

・PHP7.4.9








