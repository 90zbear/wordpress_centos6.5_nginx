#
# Cookbook Name:: php
# Recipe:: default
#
# Copyright 2015, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
%w[
  php
  php-devel
  php-pdo
  php-mbstring
  php-mysqlnd
  php-pear
  php-fpm
  php-opcache
].each do |pkg|
  package "#{pkg}" do
    action :install
    options '--enablerepo=remi-php55'
  end
end

template "/etc/php.ini" do
  source "php.ini.erb"
end

template "/etc/php-fpm.d/www.conf" do
  source "www.conf.erb"
end

template "/etc/php-fpm.conf" do
  source "php-fpm.conf.erb"
end

service "php-fpm" do
  action [:start, :enable]
end

remote_directory '/php-mecab' do
   source 'php-mecab'
   owner 'vagrant'
   group 'vagrant'
   mode '0755'
   action :create
   notifies :run, 'bash[install mecab]', :delayed
end

bash "install mecab" do
  action :nothing
  code <<-EOC
    if type mecab > /dev/null; then
      cd /php-mecab/mecab &&
      phpize && ./configure --with-mecab=/usr/local/bin/mecab-config && make && make test && sudo make install &&
      sudo sh -c "echo 'extension=mecab.so' > /etc/php.d/mecab.ini"
    fi
  EOC
end
