from fabric.api import *

env.port = 22028
env.hosts = ['turpial.org.ve']

@task
def deploy():
    with cd('/srv/www/wordpress/wp-content/themes/turpial-2.0'):
        run('sudo git pull origin')
        run('sudo chown www-data:www-data *')
        run('sudo /etc/init.d/nginx restart')
