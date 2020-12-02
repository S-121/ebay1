<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Aliexpress_product;
use Illuminate\Support\Facades\Http;

class ProductResearchController extends Controller
{
    //
    public function searchNew()
    {
        $token = "v^1.1#i^1#r^0#p^1#f^0#I^3#t^H4sIAAAAAAAAAOVYa2wUVRTu9kWwlKohIiC4mao8lpm9O/se2NXtA7um720RSpDembnbTjs7s8y9Q7uGH30oqUaLEQJqtGkQG374Q5E/GvAP/iEGEyNiAkJMfEBUgggJ+PbObiltJVDook3cZDN77z3n3O9855x77g7oKZy9YlvVtsvFtlm5wz2gJ9dmcxWB2YUFjrl5uQsLcsA4Adtwz0M9+X15Z1djmFCTQiPCSV3DyN6dUDUspCdDjGlogg6xggUNJhAWiCTEIjXVAs8BIWnoRJd0lbFHK0KMDOMi7/KK0AvikHcDOqtdtdmkh5iAzw/8YjDoFwPIz7sluo6xiaIaJlAjIYYHPGCBnwWBJh4IHr/gAZzPx7cw9rXIwIquUREOMOE0XCGta4zDemOoEGNkEGqECUcja2J1kWhFZW3Tauc4W+FRHmIEEhNPHJXrMrKvhaqJbrwNTksLMVOSEMaMM5zZYaJRIXIVzG3AT1MtgrgEfLLPzcvAK4OsMLlGNxKQ3BiGNaPIbDwtKiCNKCR1M0IpGWIHksjoqJaaiFbYrUeDCVUlriAjxFSWRdZH6uuZMIZqAtawRIGa9ZONla1jAzwSfSL9sn4PCvoCQX50m4ytUY4n7VOua7JiMYbttTopQxQzmsyMexwzVKhOqzMicWLhGS/HX2XQ62+xIpoJoUnaNSuoKEFpsKeHN+d/TJsQQxFNgsYsTF5IExRiYDKpyMzkxXQijuZONw4x7YQkBaezq6uL63JzutHm5AFwOdfVVMekdpSATEbWqnUqr9xcgVXSrkiIamJFIKkkxdJNE5UC0NqYsNvjdflco7xPhBWePPuPiXE+OyeWQ7bKg0aKjyMERXfAShx3NuojPJqiTgsHEmGKTUCjE5GkCiXESjTPzAQyFFlwe+O8OxBHrOwLxllPMB5nRa/sY10UEUBIFKVg4P9TJlNN9BiSDESylenZyXKvIxmpVIKdjbrHUd1dKzY6lUYAupBWSzzVje6GLc7yzXKsreVxBw5NtRau77ykJ1G9ripSagbWuiHXQ4OkyswUHceQqtLHtNzFlrszK9SWPqYGYFLhrOLmJD3h1CE91a2pTWnE9qkIOUUzxbWZCBOKQqZtdcpKCq0Pjp4R8tRVMicQdWDqKvTKJpsSua2N0kcdR5lU2toJvqU9uyeQMq3siSST0UTCJFBUUTRrvfG/6IvXdU+h18Zb9Mmq9TvrF41sJsSKnLn0cek4c3iLxBkI66ZBr7tcnXULatI7kUa7CjF0VUXG2umxYQV7hsX4llrv7Xmd1VvfjMlsSVVo8myaaZ79C/FUYNZuNvl9tsHs+O3yBj28x8X7wLR8K09HtSk10zp6lY4Jku/AXxTnxLcl4Zz0x9VnOwT6bO/n2mzAD1iXAywvzGvOz5vDYNrYOQw1WdS7OQXGOdo+NUhMA3GdKJWEipFbaFNOHJOujHtPM7wR3D/2pmZ2nqto3Gsb8MC1lQJXyfxiSowfBHjg8XtACyi9tprvui9/3mD/S317PrxSqp5e2jCv8mhT9O2hH0HxmJDNVpBDkyrn0YHC0gtnenc8crHB7mj95sDBFfHWh7kHT2rLPtlc9OtzHZzryGPd/a8+WVN9b6B5ab/2Rd78ZSAykotKFw4NllT9Wdl8aKvr3FDi512fvnn3+Vdqg+hwa8ddqd8urho5xXQ6VhQt2HClvEhYNDJv7oVjJwZ+f2Fjz3MjO/oPoo8Gjryxc/t7ZRt+GN7fsWj7d/53vlcXlzzd+1N7+7ldX35+/LP1f5xvHxTPnP2adQw/0+bYudK+Zd8HngWXFlYs2QNhVfPpj3fsfb6keEnbrODe0JzXqp44+tbu1oEzl1a+fvnl3spAPczfd+jU4rzepVWBvhZ4/MXDqw6c+2v5U79svefZk0M1+y8c/epb/O7uTBj/Biey1mdBEwAA";
//        $query = "https://api.sandbox.ebay.com/buy/browse/v1/item_summary/search?limit=3&q=iphone&filter=itemLocationCountry:allfilter=conditions:NEW";
//        $query = "https://api.ebay.com/buy/browse/v1/item_summary?q=iphone&category_ids=9355&limit=3";
        $query = "https://api.sandbox.ebay.com/buy/marketplace_insights/v1_beta/item_sales/search?q=iphone&category_ids=9355&limit=3";
//        $response = Http::get($query);
//        $response = Http::withToken($token)->get($query);
        $response = Http::withHeaders([
            'X-EBAY-C-MARKETPLACE-ID' => 'EBAY_US'
        ])->withToken($token)->get($query);
        if ($response->successful()) {
//            print_r($response->body());
            $data = array();
            $items = $response->json()['itemSales'];
            for ($i = 0; $i < count($items); $i++) {
                $data[$i]['itemId'] = $items[$i]['itemId'];
                $data[$i]['seller'] = $items[$i]['seller']['username'];
                $data[$i]['title'] = $items[$i]['title'];
                $data[$i]['feedbackScore'] = $items[$i]['seller']['feedbackScore'];
                $data[$i]['rating'] = $items[$i]['seller']['feedbackPercentage'];
                $data[$i]['totalSoldQuantity'] = $items[$i]['totalSoldQuantity'];
                $data[$i]['price'] = $items[$i]['lastSoldPrice']['convertedFromValue'];

                $test_model = new Product();
                $test_model->create($data[$i]);
            }
            return $items;

        } else if ($response->failed()) {
            return response()->json(array('err' => $response->body()));
        }
    }

    public function searchProductFromUser()
    {
        $token = "v^1.1#i^1#I^3#f^0#r^0#p^1#t^H4sIAAAAAAAAAOVYfWwURRTvtddKwaoYAggELltNkWP3du9u72PDnbl+wUm/76hQY5rZ3bl26N3uuTPb9mI0pSEQjYFgFKIJsYnGqIgIURKikmAgRgzgB5JABJUQqSH8ISJKCNHZaynXSqDQQ5t4yWVvZt5783u/9968ueX7SkoXrVu27o8y2z2FA318X6HNJkzjS0uKnfcVFc4pLuBzBGwDfQ/32fuLBpdgkEqmpRaI07qGoaM3ldSwlJ0MMaahSTrACEsaSEEsEUWKRerrJDfHS2lDJ7qiJxlHtDrEiB7o8YrBoOrjA243L9NZ7ZrNuB5ivKIqBAIJHgRUxeuRebqOsQmjGiZAIyHGzbt5lvezvDcu+CUhKIk+zh0Q2xhHKzQw0jUqwvFMOAtXyuoaOVhvDhVgDA1CjTDhaKQ21hiJVtc0xJe4cmyFh3mIEUBMPHpUpavQ0QqSJrz5NjgrLcVMRYEYM67w0A6jjUqRa2DuAH6WasFj0SiKICELfkX05YXKWt1IAXJzHNYMUtlEVlSCGkEkcytGKRvyaqiQ4VEDNRGtdliPZhMkUQJBI8TUVEZWRZqamDAGyRSoZwkCmvWTjVWuZANuKPtk+mX9Xhj0BYLu4W2GbA2TPGafKl1TkUUZdjTopBJSzHAsM3wOM1SoUWs0Igli4cmVC44wyLdZIR2KoUk6NSuqMEVpcGSHt+Z/RJsQA8kmgSMWxi5kCQoxIJ1GKjN2MZuJw8nTi0NMJyFpyeXq6enhejycbnS43DwvuFbW18WUTpgCTFbWqnVLHt1agUVZVxRINTGSSCZNsfTSTKUAtA4mTAtd8AnDvI+GFR47+4+JHJ9do+shX/WhJtwgGPDz/iAAPhmI+aiP8HCKuiwcUAYZNgWMLkjSSaBAVqF5ZqaggVTJIybcnkACsqovmGC9wUSClUXVxwoJCHkIZVkJBv4/ZTLeRI9BxYAkT5mepywXnelIDQp2teheZ11vg9ziQi083wO1BuKta/E0d7uqnlZjHW1LnTg03lq4sfOKnoZNehIpmUlY64baBAySqTQzdByDySR9TMhdbLk7uUJt6WNqAKQRZxU3p+gplw7oqW5NtWcRO8Yj5JLNDNdhQkwoCpW21XErIVofHD0j1PGrDJ1A1IHxq9A7m2oq5I42yh51HGUSdXQSfFt79o4iZULZE0mno6mUSYCchNF89cb/pC/e0D1E742355NV63fZLxrZoRAjdejSx2XjzOFuhTMg1k2D3ne5RusWFNe7oEa7CjH0ZBIarRNjwwr2JIvxbbXeO/M6n7e+yZPZShLR5GmfbJ79C/FEIF83G3u/bWOe/BbEoCcQ8AhB34R8q8pGNZ6ZbB19mY4JVO/CXxTX6Ncl4YLsR+i3fcr32/YU2my8n2cFJ/9oSdEKe9G9DKaNncNAU2W9l0MgwdH2qQFiGpDrgpk0QEZhiQ2dOKr8mfOiZuApfvbIq5rSImFaznsbft71lWLh/llllBg/7xX8QlD0tfHl11ftwkz7jJd+2/71vg/bK4+nj+2rqiifdbjp28/5shEhm624gGZVQcOuc5fXdG/puLJr+SuXWOdCse/xA+uZBVc32z2+wThJ7WcOJey7f0CO7Wi3dPHBsx8/tsO9NL53kVL+xcELU6Y376/F7vbaroYXjh47sqIg8d7hltelE43zP7NXt/16sqK0fb2OHlh/cuGegy8/t+33VeyM/dLWDT+dmhk+c+TZczulXeWDxVOnfjXvSWHqj9PnllV+dHTu1invn9bWNm7YEP9ugXP5+cObNs8+v1pevPyZQ1MGWy+dPoO2XOiv+Sb2/LlNX/5lRwNrtj3y0Bz1lzdadkYrzre+VbB30UZlx/yL9ZeNZeI7vcJrp1Ydf3PL2xXOnw/U1nyy4tUn5jTP/yC5+MrpFwvPdq+9+u73Q2H8GxnAki9CEwAA";
        $query = "https://api.sandbox.ebay.com/buy/marketplace_insights/v1_beta/item_sales/search?q=iphone&category_ids=9355&limit=3";

        $response = Http::withHeaders([
            'X-EBAY-C-MARKETPLACE-ID' => 'EBAY_US'
        ])->withToken($token)->get($query);
        if ($response->successful()) {
            $data = array();
            $items = $response->json()['itemSales'];
            for ($i = 0; $i < count($items); $i++) {
                if('testuser_triplemars' == $items[$i]['seller']['username']){
                    $data[$i]['itemId'] = $items[$i]['itemId'];
                    $data[$i]['seller'] = $items[$i]['seller']['username'];
                    $data[$i]['title'] = $items[$i]['title'];
                    $data[$i]['feedbackScore'] = $items[$i]['seller']['feedbackScore'];
                    $data[$i]['rating'] = $items[$i]['seller']['feedbackPercentage'];
                    $data[$i]['totalSoldQuantity'] = $items[$i]['totalSoldQuantity'];
                    $data[$i]['price'] = $items[$i]['lastSoldPrice']['convertedFromValue'];
                }
            }
            return $data;

        } else if ($response->failed()) {
            return response()->json(array('err' => $response->body()));
        }
    }

    public function getProduct()
    {
        $auth_model = new Product();
        $result = $auth_model->getProduct();
        return $result;
    }

    public function getAliexpressProducts()
    {
        $auth_model = new Aliexpress_product();
        $result = $auth_model->getAliexpressProducts();
        return $result;
    }
}
