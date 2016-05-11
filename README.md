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
