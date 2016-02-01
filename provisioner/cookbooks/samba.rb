package 'samba' do
  action :install
end

template "/etc/samba/smb.conf" do
  action :create
  source 'templates/samba/smb.conf.erb'
  variables(
    share_name: '16-engineers-box',
    shared_path: '/srv/www'
  )
end

execute 'smbpasswd' do
  command <<-CMD
smbpasswd -a vagrant<<EOF
vagrant
vagrant
EOF
  CMD
end

service 'samba' do
  action [:enable, :stop, :start]
end
