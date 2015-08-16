set :application, 'the-rogg.theantichris.com'
set :repo_url, 'git@github-the-rogg:theantichris/the-rogg.git'

set :branch, :master

set :deploy_to, "/usr/share/nginx/html/#{fetch(:application)}"

set :log_level, :debug
set :pty, true

set :linked_files, %w{.env}

namespace :deploy do
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      sudo :service, :nginx, :reload
      sudo :service, "php5-fpm restart"
    end
  end
end

after 'deploy:publishing', 'deploy:restart'