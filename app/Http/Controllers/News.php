<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class News extends Controller
{
    //
    function news()
    {
   $data= Http::get("https://api.cdu.com.ph/infocenter/news/api/get_all_news.php")->json();
   
   return view('news',['data'=>$data]);
    }

function tabloid()
{
$data= Http::get("https://api.cdu.com.ph/infocenter/news/api/tabloid_news_content.php")->json();

return view('tabloid',['data'=>$data]);
}   


function entertainmentnews()
{
$data= Http::get("https://api.cdu.com.ph/infocenter/news/api/entertainment_news_content.php")->json();

return view('entertainment',['data'=>$data]);
}   

function promotional()
{
$data= Http::get("https://api.cdu.com.ph/infocenter/promotional_banner.php")->json();

return view('promotional',['data'=>$data]);
}   
function government()
{
    $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/government_news_content.php')->json();
    
    return view('government', ['data'=>$data]);
}

function sportsnews()
{
    $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/sports_news_content.php')->json();
    
    return view('sports', ['data'=>$data]);
}

function getlotto()
{
    $data = Http::get('https://api.cdu.com.ph/infocenter/get_lotto_content.php')->json();
    
    return view('lotto', ['data'=>$data]);
}

function recommended()
{
    $data = Http::get('https://api.cdu.com.ph/infocenter/news/api/recommended.php')->json();
    
    return view('recommended', ['data'=>$data]);
}


function ads()
{
    $data = Http::get('https://api.cdu.com.ph/infocenter/ads_banner.php')->json();
    
    return view('ads', ['data'=>$data]);
}


}
