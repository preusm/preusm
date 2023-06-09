<?php

namespace App\View\Components\Gtm;

use Illuminate\View\Component;

class Script extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $container = config('services.tag_manager.container');
        $auth = config('services.tag_manager.auth');
        $preview = config('services.tag_manager.preview');

        if (!$container) {
            return '';
        }

        return "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth={$auth}&gtm_preview={$preview}&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{$container}');</script>";
    }
}
