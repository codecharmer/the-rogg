set :application, 'the-rogg'
set :repo_url, 'git@github-the-rogg:theantichris/the-rogg.git'

set :branch, :master

set :deploy_to, "/usr/share/nginx/html/#{fetch(:application)}"

set :log_level, :info
set :pty, true

set :gulp_flags, '--production'

set :linked_files, %w{.env}
set :linked_dirs, %w{public/assets/images/user-photos}

namespace :deploy do
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      sudo :service, :nginx, :reload
      sudo :service, "php5-fpm restart"
    end
  end
  task :permissions do
      on roles(:app), in: :sequence, wait: 5 do
         sudo :chmod, "-R o+w /usr/share/nginx/html/the-rogg/current/storage/"
         sudo :chmod, "-R o+w /usr/share/nginx/html/the-rogg/current/bootstrap/cache/"
         sudo :chmod, "-R o+w /usr/share/nginx/html/the-rogg/current/public/assets/images/user-photos"
      end
  end
  task :configcache do
		on roles(:app) do
			within release_path do
		        execute :php, "artisan config:cache"
		    end
	    end
  end
end

after 'deploy:publishing', 'deploy:restart'
after 'deploy:restart', 'deploy:configcache'
after 'deploy:restart', 'deploy:permissions'
after 'deploy:permissions', 'gulp'