<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    

    public function index(Request $request){
        $visited = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $most_visited_pages = Analytics::fetchMostVisitedPages(Period::days(7));
        $user_types = Analytics::fetchUserTypes(Period::days(7));
        $top_browsers = Analytics::fetchTopBrowsers(Period::days(7));
        $top_countries = Analytics::fetchTopCountries(Period::days(30));
        // dd($top_countries);
        $mapData = $top_countries->map(function ($item) {     
            return [
                'country' => $item['country'],
                'visitors' => $item['screenPageViews'],     
            ]; 
        })->toArray();
        
        // dd($mapData);
        return view('analytics.index', ['mapData' => $mapData]);
    }
}
