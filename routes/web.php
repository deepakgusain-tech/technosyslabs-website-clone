<?php

use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('home');
});

// about
Route::get('/about', function () {
    return view('about');
});

// career
Route::get('/career', function () {
    return view('career');
});

// contact-us
Route::get('/contact-us', function () {
    return view('contact-us');
});


// services
Route::prefix('services')->group(function () {

    Route::get('/technology-consulting', function () {
        return view('technology-consulting');
    });

    Route::get('/strategic-outsourcing', function () {
        return view('strategic-outsourcing');
    });

    Route::get('/digital-transformation', function () {
        return view('digital-transformation');
    });

    Route::get('/cloud-solutions', function () {
        return view('cloud-solutions');
    });

    Route::get('/cyber-security', function () {
        return view('cyber-security');
    });

    Route::get('/data-center-solutions', function () {
        return view('data-center-solutions');
    });

    Route::get('/managed-services', function () {
        return view('managed-services');
    });
    Route::get('/enterprise-application', function () {
        return view('enterprise-application');
    });
    Route::get('/database-services', function () {
        return view('database-services');
    });
    Route::get('/testing-as-a-service', function () {
        return view('testing-as-a-service');
    });
    Route::get('/microsoft-dynamics-365', function () {
        return view('microsoft-dynamics-365');
    });
    Route::get('/mobile-development-services', function () {
        return view('mobile-development-services');
    });
    Route::get('/cross-platfrom-app-development', function () {
        return view('cross-platfrom-app-development');
    });

    Route::get('/flutter-app-development', function () {
        return view('flutter-app-development');
    });

    Route::get('/react-native-app-development', function () {
        return view('react-native-app-development');
    });
    Route::get('/ui-ux-design-for-mobile-apps', function () {
        return view('ui-ux-design-for-mobile-apps');
    });
    Route::get('/app-maintenance-and-support', function () {
        return view('app-maintenance-and-support');
    });
    Route::get('/web-development-services', function () {
        return view('web-development-services');
    });
    Route::get('/custom-website-development', function () {
        return view('custom-website-development');
    });
    Route::get('/responsive-website-design', function () {
        return view('responsive-website-design');
    });
    Route::get('/ecommerce-development', function () {
        return view('ecommerce-development');
    });
    Route::get('/web-application-development', function () {
        return view('web-application-development');
    });
    Route::get('/api-integration-services', function () {
        return view('api-integration-services');
    });
    Route::get('/website-maintenance-support', function () {
        return view('website-maintenance-support');
    });
    Route::get('/seo-friendly-development', function () {
        return view('seo-friendly-development');
    });

    Route::get('/billing-and-revenue-management-portal', function () {
        return view('billing-and-revenue-management-portal');
    });

    Route::get('/human-resources-management-system', function () {
        return view('human-resources-management-system');
    });

    Route::get('/asset-management-system', function () {
        return view('asset-management-system');
    });
});

Route::prefix('/projects')->group(function () {

    Route::get('/banking-and-finance', function () {
        return view('banking-and-finance');
    });

    Route::get('/medical-pharma', function () {
        return view('medical-pharma');
    });

    Route::get('/claim-management', function () {
        return view('claim-management');
    });

    Route::get('/rpa-implementation', function () {
        return view('rpa-implementation');
    });

    Route::get('/reporting-and-compliance', function () {
        return view('reporting-and-compliance');
    });
});

Route::get('/blog', function () {
    return view('blog');
});

