# Setup のやり方

## Vagrant box のインストール

```
$ vagrant box add centos6.5 https://github.com/2creatives/vagrant-centos/releases/download/v6.5.3/centos65-x86_64-20140116.box
```

## 必要な plugin のインストール (最初の一回だけで大丈夫)

```
$ vagrant plugin install vagrant-omnibus
```

## Vagrant の起動

```
vagrant up
```

## Mysql のバックアップをコミットする

* db は `wordpress_dev` を使っている前提

```
// vagrant に入る
$ vagrant ssh

// dump を作る
$ cd /var/www/html/script
$ sh dump.sh
```

`/var/www/html/script` に `backup.dump` が作成されるのでこれをコミットする

## Mysql のバックアップを復元する

```
// vagrant に入る
$ vagrant ssh

$ cd /var/www/html/script
$ sh restore.sh
```