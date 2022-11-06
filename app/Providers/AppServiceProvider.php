<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Config;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        view()->composer('*', function($view){
             
            $settings = Setting::first();
            $view->with('settings', $settings);
        });

        
        view()->composer('*', function($view){
            $latest = Post::where('status', '=', 1)->orderBy('created_at' ,'DESC')->paginate(5);
            $view->with('latest', $latest);
        });
        
        
        view()->composer('*', function($view){
            $latestProject = Project::orderBy('created_at' ,'DESC')->paginate(5);
            $view->with('latestProject', $latestProject);
        });
        
        view()->composer('*', function($view){
            $allservices = Service::all();
            $view->with('allservices', $allservices);
        });
        
        view()->composer('*', function($view){
            $projects = Project::all();
            $view->with('projects', $projects);
        });


    }
}
