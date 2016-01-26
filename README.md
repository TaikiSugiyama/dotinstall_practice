Vagrant Box
===========

このディレクトリは、 16 新卒エンジニア研修で使う仮想 Linux 環境 (Vagrant Box) を作成するために使います。

準備すること
------------

自分の PC に、下記のツールをインストールしてください。

+ [VirtualBox](https://www.virtualbox.org/) (5.0.14 かそれ以降)
+ [Vagrant](https://www.vagrantup.com/) (1.8.1 かそれ以降)
+ GitHub からリポジトリをクローンできるツール
+ SSH を扱えるターミナルエミュレータ

起動
----

CLI から、

    vagrant up

を実行すると、 Vagrant Box が起動します。
初回実行時は、ダウンロードと最小限のツールのインストールがおこなわれますので、インターネットへの通信状況が良い環境でおこなうことをおすすめします。

SSH
---

    ssh -l vagrant 192.168.33.16

を実行すると、起動した Vagrant Box へログインできます。

終了
----

CLI から、

    vagrant halt

を実行すると Vagrant Box が終了します。
