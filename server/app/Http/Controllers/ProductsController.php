<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Helpers\Helper; 
use Illuminate\Support\Facades\Http;
use \Hkonnet\LaravelEbay\EbayServices;
// use \DTS\eBaySDK\Shopping\Types; 
use \DTS\eBaySDK\Finding\Types;
class ProductsController extends Controller
{
    public function search(Request $request)
    {     
      
      $data = $request->input();    
      // echo $data['site'];
      if($data['site'] == 'eBay') {
      // echo $data['site'];
        $user = Helper::getCurrentUserByToken(Helper::getCurrentToken($request));
        $token = "v^1.1#i^1#p^1#r^0#f^0#I^3#t^H4sIAAAAAAAAAOVYa2wUVRTu9mUKggZREEhcBommdWbvzOzsdMd2denSdKVla7dtoGrInZk77dDdmencuyxLlDSrQRIVkEgUQyLBVyLENwmtIZKCyCOBBAX5QRTSSJA/+MNAYgg6s13KtiKvNtLE/TN7zzn33O9855x77wzoLa+oXNOw5tIUzz3FW3tBb7HHw04GFeVlVVNLimeVFYECA8/W3kd7S7Ml52owTCYsqQVhyzQw8q5MJgws5YS1VMo2JBNiHUsGTCIsEUWKh5saJY4BkmWbxFTMBOWNRmopXhEFqCkyYmVF1vyO0LjqstV01CJQeDUQFGWVZf0g6OgxTqGogQk0SC3FAQ7QQKRZvhUASeAkf5AJitUdlLcd2Vg3DceEAVQoh1bKzbULoN4YKcQY2cRxQoWi4fp4LByNLFzcWuMr8BXK0xAnkKTwyFGdqSJvO0yk0I2XwTlrKZ5SFIQx5QsNrTDSqRS+CuYO4OeYVjkgVHOIE1RZFIGMxoXKetNOQnJjHK5EV2ktZyohg+gkczNGHTbk5Ugh+dFix0U04nUfz6ZgQtd0ZNdSCxeEl4abm6kQhokkbKKJDg33L93cEqFFDsnVfijwdDAoAJFTtfwyQ77yJI9ap840VN2lDHsXm2QBcjCj0cz4C5hxjGJGzA5rxMVTaMcNM8h3uCkdymGKdBluVlHSocGbG96c/+HZhNi6nCJo2MNoRY6gWgpalq5So5W5SswXz0pcS3URYkk+XzqdZtI8Y9qdPg4A1rekqTGudKEkpIZs3V537PWbT6D1XCiKU1mOvUQyloNlpVOpDgCjkwr5WV4McHneR8IKjZb+Q1AQs29kP4xXf7BikOPZgMYjBco84sejP0L5EvW5OJAMM3QS2t2IWAmoIFpx6iyVRLauSrygcXy1hmhnr9Nof1DTaFlQAzSrIQQQkmUlWP3/aZNbLfQ4UmxExqvSx6fK061i3LIy4U61IRBoxOkly3v49BJlFWzLCLbR0da5IqLHV6SFnhaz9lZ74frBK6aFms2ErmQmXq/zttoMbZKJo0TCEYwpUOwGOrGS7M7HjgNo6Yzb1oxiJn0mdPZzV7Qsh3hMMYctK5pMpgiUEyg6bnv53djHrxue7txzJlRMTv6GEqmrQxcUJpdNBq9QGBthM2U7dzMm5p7YrWY3MpwdkNhmIoHsdnbMib4r+XV7/d/5uK2j4s4iH9dbyoSpbCWhOwW0bKJF9h/kU4cT7CRmhaA/AFghEBxTXHW5jLZmJtoZ1GBigtRbCq00dHsXat/Id/tQUe7HZj07QdbzRbHHA3xgPjsPzC0vaSstuXcW1glidKgxWO80nHdWGzHdKGNB3S4u91ht8Pz8gq8JW18AM4e/J1SUsJMLPi6AOdc0Zex9M6Y4lIgsD4DA+YMdYN41bSn7UOn0pdu7duxG3+44pH72nGdG9hU6u4cHU4aNPJ6yotKspyjwWNvaonZ0omX7Fe/51YcywuC6Hz94ecMJUiedO3Dq8F++yuPNb1V9WLzq6JxpR955f+33n54qOv3n6/XymsvHzlYEFh2fz8zG5T8tojZdGHik4ruM8PGZPlxdP0msabyyt23ptl0DdU9dimx+46WHi+pW7zVqDl4WxdDByvL+i0c/evOBbWV96ddo7eSW9zZ8YvTv2DKwYPNvu6d//ce+qsjvVVP7T5w8dsS3v+/nSGhd3cae2K6FfaeNwU2Vk9+e0y+uPtX3YsUs68vYnif2/3ox9s1cqW/wmbOf/3K44QK4ktxIdyzvzn714KvxaT/Mqzxw9vlj+6SZ9+8k1pN7JjVl3x30b3i6Z/bjA+vPDKXvbx94y7vnEQAA";
        $keyword = $data['keyword'];         
        $query = "https://api.ebay.com/buy/browse/v1/item_summary/search?limit=3&q=$keyword";  
        // $query .= "&filter=sellers:{mictech188}";
        if ($data['minprice']){ 
          $query .= "&filter=price:[".$data['minprice']."..".$data['maxprice']."],priceCurrency:USD";
        }
        if ($data['country']){
          $country = $data['country'];
          $query .= "&filter=itemLocationCountry:$country";
        }
        if ($data['list'] == "AUCTION" || $data['list'] == "FIXED_PRICE"){
          $buyingOption = $data['list'];
          $query .= "filter=buyingOptions:$buyingOption";
        }
        if ($data['fromDate']){
          $startDate = $data['fromDate'];
          $startDateEnd = date('Y-m-d', strtotime('+1 month', strtotime($startDate)));
          $query .= "filter=itemStartDate:[$startDate T07:47:48Z..$startDateEnd T07:47:48Z]";
        }
        if ($data['toDate']){
          $startDate = $data['toDate'];
          $startDateEnd = date('Y-m-d', strtotime('+1 month', strtotime($startDate)));
          $query .= "filter=itemEndDate:[$startDate T07:47:48Z..$startDateEnd T07:47:48Z]";
        }
        if ($data['condition']){
          $condition = $data['condition']; 
          $query .= "filter=conditions:$condition";
        }
        $items = array();
        // echo $query;   
        $response = Http::withToken($token)->get($query);
        if($response->successful()) { 
          
          $items = $response->json()['itemSummaries'];
          for ($i = 0;$i<count($items);$i++){
            $itemid = $items[$i]['itemId'];
            $item_res = Http::withToken($token)->get("https://api.ebay.com/buy/browse/v1/item/$itemid");
            if ($item_res->successful()) {
              $items[$i]['item_details']['location'] = $item_res->json()['itemLocation'];
              $items[$i]['item_details']['quantity'] = $item_res->json()['estimatedAvailabilities']?$item_res->json()['estimatedAvailabilities'][0]['estimatedSoldQuantity']:0;
              $items[$i]['item_details']['sellerItemRevision'] =array_key_exists('sellerItemRevision',$item_res->json()) ?$item_res->json()['sellerItemRevision']:'';
              $items[$i]['item_details']['Reviews'] = array_key_exists('primaryProductReviewRating',$item_res->json()) ? $item_res->json()['primaryProductReviewRating']:[];
            }
          }
          return response()->json(array('products'=>$items,'total'=> $response->json()['total'])); 
        } else if ($response->failed()) {
          return response()->json(array('err'=>$response->body()));
        }
      }
      else {
        // echo $data['site'];
        $apikey = env('APIKEY');
        $secret = env('SECRET');
        $keyword = $data['keyword'];
        $startPrice = $data['minprice'];
        $endPrice = $data['maxprice'];
        $query = "https://api.onebound.cn/aliexpress/api_call.php?key=$apikey&secret=$secret&api_name=item_search&q=$keyword&start_price=$startPrice&end_price=$endPrice&page=1&cat=30&discount_only=&sort=&page_size=30&seller_info=&nick=&ppath=";
        $response = Http::get($query);
        if($response->successful()) { 
          return response()->json(array('products'=>$response->json()['items']['item'])); 
        } else if ($response->failed()) {
            return response()->json(array('err'=>$response->body()));
        }
      }
      //   // ebay authrization code grant flow
      //   $appID = 'salmaM-tiansalm-PRD-72eb84a53-995072df';
      //   $certID = 'PRD-2eb84a53bee4-52ff-44b5-aa46-4913';
      //   $response = Http::withHeaders([
      //     'Content-Type' => 'application/x-www-form-urlencoded',
      //     'Authorization' => 'Basic '.base64_encode($appID.":".$certID)
      // ])->post('https://api.ebay.com/identity/v1/oauth2/token', [
      //     'grant_type' => 'authorization_code',
      //     'code' => 'v%5E1.1%23i%5E1%23r%5E1%23f%5E0%23I%5E3%23p%5E3%23t%5EUl41XzU6MTFCRkEwRDRBRjM0QTY0MEIwQzlCNDI4NTExMDYxN0RfMF8xI0VeMjYw',
      //     'redirect_uri' => 'salma_M-salmaM-tiansalm-nkbkflafp'
      // ]);
        
      // return response()->json($response->body());
       
      }
      public function competitor_research(Request $request) {
        $data = $request->input();
        $days = $data['DateRange'];
        // $date = date('Y-m-d', strtotime("-$days days", strtotime("NOW")));
        $sellerId = $data['sellerId'];
        $token = "v^1.1#i^1#p^1#r^0#f^0#I^3#t^H4sIAAAAAAAAAOVYa2wUVRTu9mUKggZREEhcBommdWbvzOzsdMd2denSdKVla7dtoGrInZk77dDdmencuyxLlDSrQRIVkEgUQyLBVyLENwmtIZKCyCOBBAX5QRTSSJA/+MNAYgg6s13KtiKvNtLE/TN7zzn33O9855x77wzoLa+oXNOw5tIUzz3FW3tBb7HHw04GFeVlVVNLimeVFYECA8/W3kd7S7Ml52owTCYsqQVhyzQw8q5MJgws5YS1VMo2JBNiHUsGTCIsEUWKh5saJY4BkmWbxFTMBOWNRmopXhEFqCkyYmVF1vyO0LjqstV01CJQeDUQFGWVZf0g6OgxTqGogQk0SC3FAQ7QQKRZvhUASeAkf5AJitUdlLcd2Vg3DceEAVQoh1bKzbULoN4YKcQY2cRxQoWi4fp4LByNLFzcWuMr8BXK0xAnkKTwyFGdqSJvO0yk0I2XwTlrKZ5SFIQx5QsNrTDSqRS+CuYO4OeYVjkgVHOIE1RZFIGMxoXKetNOQnJjHK5EV2ktZyohg+gkczNGHTbk5Ugh+dFix0U04nUfz6ZgQtd0ZNdSCxeEl4abm6kQhokkbKKJDg33L93cEqFFDsnVfijwdDAoAJFTtfwyQ77yJI9ap840VN2lDHsXm2QBcjCj0cz4C5hxjGJGzA5rxMVTaMcNM8h3uCkdymGKdBluVlHSocGbG96c/+HZhNi6nCJo2MNoRY6gWgpalq5So5W5SswXz0pcS3URYkk+XzqdZtI8Y9qdPg4A1rekqTGudKEkpIZs3V537PWbT6D1XCiKU1mOvUQyloNlpVOpDgCjkwr5WV4McHneR8IKjZb+Q1AQs29kP4xXf7BikOPZgMYjBco84sejP0L5EvW5OJAMM3QS2t2IWAmoIFpx6iyVRLauSrygcXy1hmhnr9Nof1DTaFlQAzSrIQQQkmUlWP3/aZNbLfQ4UmxExqvSx6fK061i3LIy4U61IRBoxOkly3v49BJlFWzLCLbR0da5IqLHV6SFnhaz9lZ74frBK6aFms2ErmQmXq/zttoMbZKJo0TCEYwpUOwGOrGS7M7HjgNo6Yzb1oxiJn0mdPZzV7Qsh3hMMYctK5pMpgiUEyg6bnv53djHrxue7txzJlRMTv6GEqmrQxcUJpdNBq9QGBthM2U7dzMm5p7YrWY3MpwdkNhmIoHsdnbMib4r+XV7/d/5uK2j4s4iH9dbyoSpbCWhOwW0bKJF9h/kU4cT7CRmhaA/AFghEBxTXHW5jLZmJtoZ1GBigtRbCq00dHsXat/Id/tQUe7HZj07QdbzRbHHA3xgPjsPzC0vaSstuXcW1glidKgxWO80nHdWGzHdKGNB3S4u91ht8Pz8gq8JW18AM4e/J1SUsJMLPi6AOdc0Zex9M6Y4lIgsD4DA+YMdYN41bSn7UOn0pdu7duxG3+44pH72nGdG9hU6u4cHU4aNPJ6yotKspyjwWNvaonZ0omX7Fe/51YcywuC6Hz94ecMJUiedO3Dq8F++yuPNb1V9WLzq6JxpR955f+33n54qOv3n6/XymsvHzlYEFh2fz8zG5T8tojZdGHik4ruM8PGZPlxdP0msabyyt23ptl0DdU9dimx+46WHi+pW7zVqDl4WxdDByvL+i0c/evOBbWV96ddo7eSW9zZ8YvTv2DKwYPNvu6d//ce+qsjvVVP7T5w8dsS3v+/nSGhd3cae2K6FfaeNwU2Vk9+e0y+uPtX3YsUs68vYnif2/3ox9s1cqW/wmbOf/3K44QK4ktxIdyzvzn714KvxaT/Mqzxw9vlj+6SZ9+8k1pN7JjVl3x30b3i6Z/bjA+vPDKXvbx94y7vnEQAA";
        $query = "https://api.ebay.com/buy/browse/v1/item_summary/search?limit=3&category_ids=0";  
        $query .= "&filter=sellers:{mictech188}";
        $items = array(); 
        $response = Http::withToken($token)->get($query);
        if($response->successful()) { 
          $items = $response->json()['itemSummaries'];
          for ($i = 0;$i<count($items);$i++){
            $itemid = $items[$i]['itemId'];
            $item_res = Http::withToken($token)->get("https://api.ebay.com/buy/browse/v1/item/$itemid");
            if ($item_res->successful()) {
              $items[$i]['item_details']['location'] = $item_res->json()['itemLocation'];
              $items[$i]['item_details']['quantity'] = $item_res->json()['estimatedAvailabilities']?$item_res->json()['estimatedAvailabilities'][0]['estimatedSoldQuantity']:0;
              $items[$i]['item_details']['sellerItemRevision'] =array_key_exists('sellerItemRevision',$item_res->json()) ?$item_res->json()['sellerItemRevision']:'';
              $items[$i]['item_details']['Reviews'] = array_key_exists('primaryProductReviewRating',$item_res->json()) ? $item_res->json()['primaryProductReviewRating']:[];
            }
          }
          return response()->json(array('products'=>$items,'total'=> $response->json()['total'])); 
        } else if ($response->failed()) {
          return response()->json(array('err'=>$response->body()));
        }
      }
      public function search_category(Request $request)
    {     
      
      $data = $request->input();    
        $user = Helper::getCurrentUserByToken(Helper::getCurrentToken($request));
        $token = "v^1.1#i^1#p^1#r^0#f^0#I^3#t^H4sIAAAAAAAAAOVYa2wUVRTu9mUKggZREEhcBommdWbvzOzsdMd2denSdKVla7dtoGrInZk77dDdmencuyxLlDSrQRIVkEgUQyLBVyLENwmtIZKCyCOBBAX5QRTSSJA/+MNAYgg6s13KtiKvNtLE/TN7zzn33O9855x77wzoLa+oXNOw5tIUzz3FW3tBb7HHw04GFeVlVVNLimeVFYECA8/W3kd7S7Ml52owTCYsqQVhyzQw8q5MJgws5YS1VMo2JBNiHUsGTCIsEUWKh5saJY4BkmWbxFTMBOWNRmopXhEFqCkyYmVF1vyO0LjqstV01CJQeDUQFGWVZf0g6OgxTqGogQk0SC3FAQ7QQKRZvhUASeAkf5AJitUdlLcd2Vg3DceEAVQoh1bKzbULoN4YKcQY2cRxQoWi4fp4LByNLFzcWuMr8BXK0xAnkKTwyFGdqSJvO0yk0I2XwTlrKZ5SFIQx5QsNrTDSqRS+CuYO4OeYVjkgVHOIE1RZFIGMxoXKetNOQnJjHK5EV2ktZyohg+gkczNGHTbk5Ugh+dFix0U04nUfz6ZgQtd0ZNdSCxeEl4abm6kQhokkbKKJDg33L93cEqFFDsnVfijwdDAoAJFTtfwyQ77yJI9ap840VN2lDHsXm2QBcjCj0cz4C5hxjGJGzA5rxMVTaMcNM8h3uCkdymGKdBluVlHSocGbG96c/+HZhNi6nCJo2MNoRY6gWgpalq5So5W5SswXz0pcS3URYkk+XzqdZtI8Y9qdPg4A1rekqTGudKEkpIZs3V537PWbT6D1XCiKU1mOvUQyloNlpVOpDgCjkwr5WV4McHneR8IKjZb+Q1AQs29kP4xXf7BikOPZgMYjBco84sejP0L5EvW5OJAMM3QS2t2IWAmoIFpx6iyVRLauSrygcXy1hmhnr9Nof1DTaFlQAzSrIQQQkmUlWP3/aZNbLfQ4UmxExqvSx6fK061i3LIy4U61IRBoxOkly3v49BJlFWzLCLbR0da5IqLHV6SFnhaz9lZ74frBK6aFms2ErmQmXq/zttoMbZKJo0TCEYwpUOwGOrGS7M7HjgNo6Yzb1oxiJn0mdPZzV7Qsh3hMMYctK5pMpgiUEyg6bnv53djHrxue7txzJlRMTv6GEqmrQxcUJpdNBq9QGBthM2U7dzMm5p7YrWY3MpwdkNhmIoHsdnbMib4r+XV7/d/5uK2j4s4iH9dbyoSpbCWhOwW0bKJF9h/kU4cT7CRmhaA/AFghEBxTXHW5jLZmJtoZ1GBigtRbCq00dHsXat/Id/tQUe7HZj07QdbzRbHHA3xgPjsPzC0vaSstuXcW1glidKgxWO80nHdWGzHdKGNB3S4u91ht8Pz8gq8JW18AM4e/J1SUsJMLPi6AOdc0Zex9M6Y4lIgsD4DA+YMdYN41bSn7UOn0pdu7duxG3+44pH72nGdG9hU6u4cHU4aNPJ6yotKspyjwWNvaonZ0omX7Fe/51YcywuC6Hz94ecMJUiedO3Dq8F++yuPNb1V9WLzq6JxpR955f+33n54qOv3n6/XymsvHzlYEFh2fz8zG5T8tojZdGHik4ruM8PGZPlxdP0msabyyt23ptl0DdU9dimx+46WHi+pW7zVqDl4WxdDByvL+i0c/evOBbWV96ddo7eSW9zZ8YvTv2DKwYPNvu6d//ce+qsjvVVP7T5w8dsS3v+/nSGhd3cae2K6FfaeNwU2Vk9+e0y+uPtX3YsUs68vYnif2/3ox9s1cqW/wmbOf/3K44QK4ktxIdyzvzn714KvxaT/Mqzxw9vlj+6SZ9+8k1pN7JjVl3x30b3i6Z/bjA+vPDKXvbx94y7vnEQAA";
        $categoryId = $data['categoryId'];         
        $query = "https://api.ebay.com/buy/browse/v1/item_summary/search?limit=3&category_ids=$categoryId";  
        
        if ($data['minprice']){ 
          $query .= "&filter=price:[".$data['minprice']."..".$data['maxprice']."],priceCurrency:USD";
        }
        if ($data['country']){
          $country = $data['country'];
          $query .= "&filter=itemLocationCountry:$country";
        }
        if ($data['list'] == "AUCTION" || $data['list'] == "FIXED_PRICE"){
          $buyingOption = $data['list'];
          $query .= "filter=buyingOptions:$buyingOption";
        }
        if ($data['fromDate']){
          $startDate = $data['fromDate'];
          $startDateEnd = date('Y-m-d', strtotime('+1 month', strtotime($startDate)));
          $query .= "filter=itemStartDate:[$startDate T07:47:48Z..$startDateEnd T07:47:48Z]";
        }
        if ($data['toDate']){
          $startDate = $data['toDate'];
          $startDateEnd = date('Y-m-d', strtotime('+1 month', strtotime($startDate)));
          $query .= "filter=itemEndDate:[$startDate T07:47:48Z..$startDateEnd T07:47:48Z]";
        }
        if ($data['condition']){
          $condition = $data['condition']; 
          $query .= "filter=conditions:$condition";
        }
        $items = array();
        // echo $query;   
        $response = Http::withToken($token)->get($query);
        if($response->successful()) { 
          
          $items = $response->json()['itemSummaries'];
          for ($i = 0;$i<count($items);$i++){
            $itemid = $items[$i]['itemId'];
            $item_res = Http::withToken($token)->get("https://api.ebay.com/buy/browse/v1/item/$itemid");
            if ($item_res->successful()) {
              $items[$i]['item_details']['location'] = $item_res->json()['itemLocation'];
              $items[$i]['item_details']['quantity'] = $item_res->json()['estimatedAvailabilities']?$item_res->json()['estimatedAvailabilities'][0]['estimatedSoldQuantity']:0;
              $items[$i]['item_details']['sellerItemRevision'] = array_key_exists('sellerItemRevision',$item_res->json())? $item_res->json()['sellerItemRevision']:'';
              $items[$i]['item_details']['Reviews'] = array_key_exists('primaryProductReviewRating',$item_res->json()) ? $item_res->json()['primaryProductReviewRating']:[];
            }
          }
           return response()->json(array('products'=>$items,'total'=> $response->json()['total'])); 
        } else if ($response->failed()) {
          return response()->json(array('err'=>$response->body()));
        } 
    }
}