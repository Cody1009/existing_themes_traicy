#### Traicyの現存themeコードのバックアップ
https://www.traicy.com/

`improve`がついているthemeは開発用のテーマです。
基本的にはこのレポはバックアップなので、 
`scp -i ~/.ssh/traicy  -r root@traicy_root:/var/www/html/wp-content/themes/pc_improve ~/Desktop/traicy_local_dev_backup`
のコマンドを叩いて、現行のサーバーにあるファイルをコピーしてきています。定期的にバックアップを取って`dev`ブランチにプッシュしましょう。
