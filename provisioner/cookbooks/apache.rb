%w{
  apache2
}.each do |pkg|
  package pkg do
    action :install
  end
end

directory "/srv/www" do
  mode   "0777"
  action :create
end

template "/srv/www/index.php" do
  owner  "vagrant"
  mode   "0644"
  action :create
  source "templates/apache2/hello.php.erb"
end

directory "/var/log/apache2" do
  mode   "0755"
  action :create
end

template "/etc/apache2/sites-enabled/16-engineers-box.conf" do
  action :create
  mode   "0644"
  source "templates/apache2/vh-default.conf.erb"
  variables(
    server_name:   "16-engineers-box",
    document_root: "/srv/www"
  )
end

service "apache2" do
  action [:enable, :stop, :start]
end
