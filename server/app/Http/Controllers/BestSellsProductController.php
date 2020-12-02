<?php

namespace App\Http\Controllers;

use App\BestSellsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BestSellsProductController extends Controller
{
    //
    public function searchBestSellsProduct()
    {
        $token = "v^1.1#i^1#r^0#p^1#f^0#I^3#t^H4sIAAAAAAAAAOVYa2wUVRTu9kWwlKohIiC4mao8lpm9O/se2NXtA7um720RSpDembnbTjs7s8y9Q7uGH30oqUaLEQJqtGkQG374Q5E/GvAP/iEGEyNiAkJMfEBUgggJ+PbObiltJVDook3cZDN77z3n3O9855x77g7oKZy9YlvVtsvFtlm5wz2gJ9dmcxWB2YUFjrl5uQsLcsA4Adtwz0M9+X15Z1djmFCTQiPCSV3DyN6dUDUspCdDjGlogg6xggUNJhAWiCTEIjXVAs8BIWnoRJd0lbFHK0KMDOMi7/KK0AvikHcDOqtdtdmkh5iAzw/8YjDoFwPIz7sluo6xiaIaJlAjIYYHPGCBnwWBJh4IHr/gAZzPx7cw9rXIwIquUREOMOE0XCGta4zDemOoEGNkEGqECUcja2J1kWhFZW3Tauc4W+FRHmIEEhNPHJXrMrKvhaqJbrwNTksLMVOSEMaMM5zZYaJRIXIVzG3AT1MtgrgEfLLPzcvAK4OsMLlGNxKQ3BiGNaPIbDwtKiCNKCR1M0IpGWIHksjoqJaaiFbYrUeDCVUlriAjxFSWRdZH6uuZMIZqAtawRIGa9ZONla1jAzwSfSL9sn4PCvoCQX50m4ytUY4n7VOua7JiMYbttTopQxQzmsyMexwzVKhOqzMicWLhGS/HX2XQ62+xIpoJoUnaNSuoKEFpsKeHN+d/TJsQQxFNgsYsTF5IExRiYDKpyMzkxXQijuZONw4x7YQkBaezq6uL63JzutHm5AFwOdfVVMekdpSATEbWqnUqr9xcgVXSrkiIamJFIKkkxdJNE5UC0NqYsNvjdflco7xPhBWePPuPiXE+OyeWQ7bKg0aKjyMERXfAShx3NuojPJqiTgsHEmGKTUCjE5GkCiXESjTPzAQyFFlwe+O8OxBHrOwLxllPMB5nRa/sY10UEUBIFKVg4P9TJlNN9BiSDESylenZyXKvIxmpVIKdjbrHUd1dKzY6lUYAupBWSzzVje6GLc7yzXKsreVxBw5NtRau77ykJ1G9ripSagbWuiHXQ4OkyswUHceQqtLHtNzFlrszK9SWPqYGYFLhrOLmJD3h1CE91a2pTWnE9qkIOUUzxbWZCBOKQqZtdcpKCq0Pjp4R8tRVMicQdWDqKvTKJpsSua2N0kcdR5lU2toJvqU9uyeQMq3siSST0UTCJFBUUTRrvfG/6IvXdU+h18Zb9Mmq9TvrF41sJsSKnLn0cek4c3iLxBkI66ZBr7tcnXULatI7kUa7CjF0VUXG2umxYQV7hsX4llrv7Xmd1VvfjMlsSVVo8myaaZ79C/FUYNZuNvl9tsHs+O3yBj28x8X7wLR8K09HtSk10zp6lY4Jku/AXxTnxLcl4Zz0x9VnOwT6bO/n2mzAD1iXAywvzGvOz5vDYNrYOQw1WdS7OQXGOdo+NUhMA3GdKJWEipFbaFNOHJOujHtPM7wR3D/2pmZ2nqto3Gsb8MC1lQJXyfxiSowfBHjg8XtACyi9tprvui9/3mD/S317PrxSqp5e2jCv8mhT9O2hH0HxmJDNVpBDkyrn0YHC0gtnenc8crHB7mj95sDBFfHWh7kHT2rLPtlc9OtzHZzryGPd/a8+WVN9b6B5ab/2Rd78ZSAykotKFw4NllT9Wdl8aKvr3FDi512fvnn3+Vdqg+hwa8ddqd8urho5xXQ6VhQt2HClvEhYNDJv7oVjJwZ+f2Fjz3MjO/oPoo8Gjryxc/t7ZRt+GN7fsWj7d/53vlcXlzzd+1N7+7ldX35+/LP1f5xvHxTPnP2adQw/0+bYudK+Zd8HngWXFlYs2QNhVfPpj3fsfb6keEnbrODe0JzXqp44+tbu1oEzl1a+fvnl3spAPczfd+jU4rzepVWBvhZ4/MXDqw6c+2v5U79svefZk0M1+y8c/epb/O7uTBj/Biey1mdBEwAA";
        $query = "https://api.sandbox.ebay.com/buy/marketing/v1_beta/merchandised_product/get_also_viewed_products?epid=230154655";
//        $response = Http::get($query);
        $response = Http::withToken($token)->get($query);
        if ($response->successful()) {

            $data = array();
            $items = $response->json()['merchandisedProducts'];
            for ($i = 0; $i < count($items); $i++) {
                $data[$i]['epid'] = $items[$i]['epid'];
                $data[$i]['image'] = $items[$i]['image']['imageUrl'];
                $data[$i]['title'] = $items[$i]['title'];
                $data[$i]['price'] = $items[$i]['marketPriceDetails'][0]['estimatedStartPrice']['value'];
                $data[$i]['sales'] = $items[$i]['ratingCount'];

                $test_model = new BestSellsProduct();
                $test_model->create($data[$i]);
            }
            return $data;

        } else if ($response->failed()) {
            return response()->json(array('err' => $response->body()));
        }
    }

    public function getBestSellsProduct()
    {
        $auth_model = new BestSellsProduct();
        $result = $auth_model->getBestSellsProduct();
        return response()->json(array('products' => $result));
    }
}
