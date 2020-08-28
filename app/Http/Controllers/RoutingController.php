<?php

namespace App\Http\Controllers;

use App\services\CategorieService;
use App\services\productDetailService;
use App\services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Mail;


class RoutingController extends Controller
{
    static $active ;

    public function index()
    {
        self::$active ='index';
        return view('index');
    }


    public function aboutUs()
    {
        self::$active ='aboutUs';
        return view('aboutUs');
    }

    public function services()
    {
        self::$active ='services';
        return view('services');
    }

    public function contact()
    {
        self::$active ='contact';
        return view('contact');
    }
    public function domotique()
    {
        self::$active ='domotique';
        return view('domotique');
    }
    public function productDetail($rowid)
    {

        $flash_statue=-1;
        if(Session::has('flash_message_status'))
        {
            $flash_statue=Session::get('flash_message_status');
            Session::remove('flash_message_status');
         }
        $product = productDetailService::getProductData($rowid);
        if($product==null)
            abort(404);
        return view('productDetail',['product'=>$product,'flash_statue'=>$flash_statue]);
    }

    public function products($n = 9)
    {

        self::$active ='products';
        $motherlessCats = CategorieService::getMotherlessCategories();
        $allProducts = ProductService::getAlProducts($n);
        return view('products',['categories'=>$motherlessCats,'allProducts'=>$allProducts,'origin'=>'home']);
    }
    public function  sendMail(Request $request)
    {
       // print_r($request->input('client_first_name"));
        $first_name= $request->input("client_first_name");
        $last_name=$request->input("client_last_name");
        $adress=$request->input("client_adresse");
        $email=$request->input("client_email");
        $phone=$request->input("client_phone");
        $to_name =$first_name." ".$last_name;
        $to_email = $email;
        $info = array("name"=>$to_name, "body"=>"");

        //
        $product_title= $request->input("product_label");
        $product_ref= $request->input("product_ref");
        $product_id=$request->input("product_id");
        $Client_data=array("first_name"=>$first_name,
            "last_name"=>$last_name,
            "Email"=>$email,
            "Phone"=>$phone,
            "adress"=>$adress,
            "product_title"=> $product_title,
            "product_ref"=>$product_ref,
            "product_id"=>$product_id);
       /* Config::set('mail.username', 'contact@afric-domotique.ma');
        Config::set('mail.password', 'jusbdlmg@2');
        $sendMailToContact=Mail::send('sendMailToClient', $info, function($message) {
            $message->to('contact@afric-domotique.ma',"Afric Domotique Contact")
                ->subject('Afric Domotique Contact');
            $message->from('contact@afric-domotique.ma','Afric Domotique');
        });*/
        $flash_message_status=-1;
        try {
            DB::transaction(function () use ($Client_data, $to_email, $to_name, $info, $email, $phone, $adress, $last_name, $first_name) {
               $user = DB::table('llx_socpeople')->where('email', $email)->first();
                if (!$user) {
                    $newClient = DB::insert("INSERT INTO llx_socpeople (datec,firstname,lastname,address,fk_pays,phone,email,fk_user_creat,fk_user_modif,statut) values
              (CURRENT_TIMESTAMP(),?,?,?,12,?,?,1,1,1)", [$first_name, $last_name, $adress, $phone, $email]);
                }

                $sendMailToUser = Mail::send('sendMailToClient', $info, function ($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)
                        ->subject('Afric Domotique Devis');
                    $message->from('marketing@afric-domotique.ma', 'Afric Domotique');
                });
                $sendMailToMe = Mail::send('sendMailToMe', $Client_data, function ($message) {
                    $message->to('marketing@afric-domotique.ma', 'Demande Devis')
                        ->subject('Demande Devis-Afrique Domotique');
                    $message->from('marketing@afric-domotique.ma', 'Demande Devis-Afrique Domotique');
                });

            });
           $flash_message_status=1;
        } catch (\Exception $e) {
          $flash_message_status=0;
        }
        Session::put('flash_message_status', $flash_message_status);
        return redirect("productDetail\\".$product_id);

    }

    public  function  contactSendMail(Request  $request)
    {
        $name= $request->input("name");
        $email= $request->input("email");
        $phone= $request->input("phone");
        $subject=$request->input("subject");
        $contact_message=$request->input("message");
        $Client_data=array("name"=>$name,
            "email"=>$email,
            "phone"=>$phone,
            "subject"=>$subject,
            "contact_message"=>$contact_message);
      Config::set('mail.username', 'contact@afric-domotique.ma');
        Config::set('mail.password', 'jusbdlmg@2');
        $sendMailToContact=Mail::send('sendMailToContact', $Client_data, function($message) {
             $message->to('contact@afric-domotique.ma',"Afric Domotique Contact")
                 ->subject('Afric Domotique Contact');
             $message->from('contact@afric-domotique.ma','Afric Domotique');
         });
        return redirect("contact");
    }
}
