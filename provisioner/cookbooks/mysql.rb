%w{
  libmysqlclient-dev
  mysql-server
}.each do |pkg|
  package pkg do
    action :install
  end
end
