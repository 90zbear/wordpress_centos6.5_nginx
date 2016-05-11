template "/etc/yum.repos.d/nginx.repo" do
  mode 0644
  user 'root'
  group 'root'
end

yum_package "nginx" do
  action :install
  flush_cache [:before]
end

template "/etc/nginx/nginx.conf" do
  source "nginx.conf.erb"
end

template "/etc/nginx/conf.d/default.conf" do
  source "default.conf.erb"
end

service "nginx" do
  action [:start, :enable]
  supports status: true, restart: true, reload: true
end
