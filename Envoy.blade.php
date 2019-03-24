@servers(['web' => ['scramblers@204.225.7.45']]) {{--This is the ip address for php.scweb.ca--}}
$branch = master;

@task('deploy', ['on' => ['web']])
cd site
git pull origin {{ $branch }}
php artisan migrate
@endtask
