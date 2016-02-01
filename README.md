Vagrant Box
===========

このディレクトリは、 **PC 上に仮想 Linux 環境 (Vagrant Box) 作成** するために使います。


これからおこなうことの流れ
--------------------------

1. Vagrant Box の作成と Box へのログイン (いまここ)
2. Vagrant Box 上で環境構築
3. Vagrant Box の終了


準備すること
------------

### PC にツールをインストールインストールする

自分の PC に、下記のツールをインストールしてください。

+ [VirtualBox](https://www.virtualbox.org/) (5.0.14 かそれ以降)
+ [Vagrant](https://www.vagrantup.com/) (1.8.1 かそれ以降)
+ GitHub からリポジトリをクローンできるツール
    + Mac OS:
        + [Homebrew](http://brew.sh/) をインストールし、 `brew install git`
    + Windows OS:
        + [Git for Windows](https://git-for-windows.github.io/)
+ SSH を扱えるターミナルエミュレータ
    + Mac OS:
        + OS 標準の Terminal.app か、 [iTerm2](https://www.iterm2.com/)
    + Windows OS:
        + [Tera Term](https://osdn.jp/projects/ttssh2/) など

### Hosts ファイルへ追記する

Vagrant Box の IP アドレスへ名前解決ができるように、 **Hosts** ファイルへ追記します。

ファイルの場所:

* Mac OS:
    * `/etc/hosts`
* Windows OS:
    * `c:¥windows¥system32¥drivers¥etc¥hosts`

エディタを開き、

    192.168.33.16 16-engineers-box

を追記します。このファイルを編集するには、 PC の管理者権限が必要です。

これで、自分の PC のブラウザで `http://16-engineers-box/` とアドレスを入れると、
このあと起動する Vagrant Box 上の Web サーバにアクセスできるようになります。


この Git リポジトリを PC 上にクローンする
-----------------------------------------

先ほどインストールした Git リポジトリを扱うツールを使い、このリポジトリをクローンします。

+ Mac OS:
    + ターミナル上で `git clone git@github.com:MarketingApplications/16-engineers.git`
+ Windows OS:
    + Git for Windows を使い、 `git@github.com:MarketingApplications/16-engineers.git` をクローンする

自分の PC 上にこのリポジトリをクローンすると、 Vagrant Box を起動する準備は完了です。


Vagrant Box を起動する
----------------------

PC 上で CLI (Command Line Interface) を開き、このリポジトリをクローンしたディレクトリ (このファイルがあるディレクトリ) を開きます。

    cd 16-engineers-box

その後、

    vagrant up

を実行すると、 Vagrant Box が起動します。

初回実行時は、 Box イメージのダウンロードと最小限のツールのインストールがおこなわれますので、インターネットへの通信状況が良い環境でおこなうことをおすすめします。


Vagrant Box へのログインする
----------------------------

* IP Address
  * 192.168.33.16
* User name
  * vagrant
* Password
  * vagrant

起動された Vagrant Box には、 SSH からログインできます。

+ Mac OS:
    + `ssh -l vagrant 192.168.33.16`
+ Windows OS:
    + TeraTerm などで、上記を指定してログイン


Vagrant Box の環境構築をする
----------------------------

Vagrant Box にログインした状態でおこないますので、 SSH からログインした後、 `provisioner` ディレクトリの [README](provisioner/README.md) を開いてください。


Vagrant Box の開始と終了
------------------------

起動をしたときと同じく、このリポジトリをクローンしたディレクトリ (このファイルがあるリポジトリ) を開き、

    vagrant halt

を実行すると、 Vagrant Box は終了します。

    vagrant up

を実行すると、いつでも Box を起動できます。
