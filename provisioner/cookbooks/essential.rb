%w{
  build-essential
  curl
  emacs
  git
  ntp
  screen
  sqlite3
  tmux
  tree
  vim
  whois
  zip
  zsh
}.each do |pkg|
  package pkg do
    action :install
  end
end
