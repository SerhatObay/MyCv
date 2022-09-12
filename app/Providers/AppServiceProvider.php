<?php

namespace App\Providers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Messages;
use App\Models\PersonalInformation;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $messages=Messages::where('read',0)
            ->orderBy('created_at','Desc')
            ->get();
        $social =SocialMedia::where('status',1)->get();
        $personal=PersonalInformation::find(1);
        $educationList=Education::query()
            ->statusActive()
            //->where('status',1)
            ->select('education_date','university_name','university_branch','description')
            ->orderBy('education_date','ASC')
            ->get();
        $experienceList=Experience::query()
            ->statusActive()
            ->select('date','task_name','company_name','description')
            ->orderBy('date','ASC')
            ->get();
        View::share('social',$social);
        View::share('personal',$personal);
        View::share('experienceList',$experienceList);
        View::share('educationList',$educationList);
        View::share('messages',$messages);


    }
}
