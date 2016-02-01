Provisioner
===========

このディレクトリは、 **Vagrant Box の環境構築** のために使います。

特に明記されない限り、これから実行するコマンドは SSH からログインした Vagrant Box 上でおこないます。


これからおこなうことの流れ
--------------------------

1. Vagrant Box の環境構築
    + 勉強や練習で使うツールをインストールし、セットアップします
2. Vagrant Box の設定確認
    + Vagrant Box が正しくセットアップされたかを確認します
3. Vagrant Box 上で勉強・練習
    + ドットインストールの教材を使って、 Git, PHP, MySQL などの勉強をしてください


Vagrant Box から GitHub につなげるようにする
--------------------------------------------

まず、 Vagrant Box から GitHub に接続できるようにします。

    ssh-keygen

を実行すると、 SSH の秘密鍵と公開鍵のセットを作成されます。

    cat ~/.ssh/id_rsa.pub

を実行し、自分の公開鍵を表示します。

この公開鍵を [GitHub の "SSH Keys"](https://github.com/settings/ssh) に保存します。

    ssh -T git@github.com

を実行した際に、

    Hi {自分のID}! You've successfully authenticated, but GitHub does not provide shell access.

と表示されたら成功です。


このリポジトリを Vagrant Box 上にクローンする
---------------------------------------------

    git clone git@github.com:MarketingApplications/16-engineers.git

を実行し、先ほど PC 上にクローンしたこのリポジトリを Vagrant Box 上にもクローンします。


Vagrant Box の環境構築を実行する
--------------------------------

    cd 16-engineers/provisioner

で構成管理ツールを実行するディレクトリに移動し、

    make dev-local

を実行します。
学習や練習で使用するいろいろなツールのインストールと、最小限の環境構築が行なわれます。

実行が終わったあと、 PC のブラウザから

    http://16-engineers-box/

を開いてみてください。

    Hello from PHP!

と表示されたら成功です。
