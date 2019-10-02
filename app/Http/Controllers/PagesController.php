<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Session;

use App\Post;
use App\OccasionProducts;

use Illuminate\Support\Facades\Mail;
use App\SendMailable;
use App\SendMailableToOcc;
use App\SendMailAdmin;
use App\SendMailAdminNewOccasion;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PagesController extends Controller
{
	
    public function index(){
        $title = 'الرئيسية';        
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'عن Ribbon8';
        return view('pages.about')->with('title', $title);		
    }
	
	public function howto(){
        $title = 'كيف يعمل Ribbon8';
        return view('pages.howitwork')->with('title', $title);		
    }
	
	public function add(Request $request){
        $title = 'اضافة مناسبة';
		$success = '';
		$cat = $request->query('cat');
		$Products = DB::table('hd_products')->where('cat', '=', $cat)->paginate(10)->appends(request()->except('page'));
		return view('pages.add', ['Products' => $Products])->with('title', $title)->with('success', $success);
    }
	
	public function addstep1(){
        $title = 'اضافة مناسبة';
		$success = '';
		//$cat = $request->query('cat');
		//$product = $request->session()->get('occasion');
		return view('pages.create-step1');
		//$Products = DB::table('hd_products')->where('cat', '=', $cat)->paginate(10)->appends(request()->except('page'));
		//return view('pages.add', ['Products' => $Products])->with('title', $title)->with('success', $success);
    }
	
	public function postCreateStep1(Request $request){
		$validatedData = $request->validate([
            'firstname' => 'required',
			'lastname' => 'required',
            'emailaddress' => 'required|email',
        ]);

        if(empty($request->session()->get('occasion'))){
            //$occasion = new Product();
            $occasion->fill($validatedData);
            $request->session()->put('occasion', $occasion);
        }else{
            $occasion = $request->session()->get('occasion');
            $occasion->fill($validatedData);
            $request->session()->put('occasion', $occasion);
        }
		
		dd($request->session()->get('occasion'));
		
		
        return redirect('/addstep2');
	}
	
	
	public function occasionconfirmation(Request $request){
        $title = 'تمت الاضافة بنجاح';
		
		$occdate = $request->input('occdate');
		$firstname = $request->input('firstname');
		$lastname = $request->input('lastname');
		$emailaddress = $request->input('emailaddress');
		$mobilenumber = $request->input('mobilenumber');
		$selectoccasion = $request->input('selectoccasion');
		$address = $request->input('address');
		$description = $request->input('description');
		
		if ($selectoccasion == 'مولود') {
			$occimage = 'images/baby01.jpg';
		} else {
			$occimage = 'images/wedding01.jpg';
		}
		
		$data=array('firstname'=>$firstname,"lastname"=>$lastname,"occdate"=>$occdate,"emailaddress"=>$emailaddress,'mobilenumber'=>$mobilenumber,'type'=>$selectoccasion,'deliveryaddress'=>$address,'expired'=>'0','occimage'=>$occimage,'description'=>$description);
		
		$recordExist = DB::table('hd_occasions')->where('emailaddress','=',$emailaddress)->get();
		
		if ($recordExist->count() != 0) {
			return view('pages.recordexist', ['emailaddress' => $emailaddress])->with('title', 'البريد الالكتروني مسجل مسبقاُ');
		}
				
		DB::table('hd_occasions')->insert($data);

		$thisoccasion = DB::table('hd_occasions')->where('firstname','=',$firstname)->where('lastname','=',$lastname)->where('mobilenumber','=',$mobilenumber)->where('deliveryaddress','=',$address)->where('emailaddress','=',$emailaddress)->where('description','=',$description)->where('occdate','=',$occdate)->first();
		
		$thisoccasionid = $thisoccasion->id;
		
		$checkedProducts = $request->addproductcheckbox;
		if ($checkedProducts != null) {
			foreach($checkedProducts as $checkedProduct=>$value) {
				$joineddata = array('occ_id'=>$thisoccasionid, 'product_id'=>$value);
				DB::table('hd_occ_products')->insert($joineddata);
			}
		}
		$adminemailaddress = 'support@ribbonate.com';
		Mail::to($adminemailaddress)->send(new SendMailAdminNewOccasion($data));
		
        return view('pages.occasionconfirmation', ['thisoccasionid' => $thisoccasionid])->with('title', $title);
    }
	
	public function faqs(){
        $title = 'الاسئلة الشائعة';
        return view('pages.faqs')->with('title', $title);
    }
	
	public function contact(){
        $title = 'اتصل بنا';
        return view('pages.contact')->with('title', $title);
    }
	
	public function search(Request $request){
        $title = "بحث";
		$occasions = '';
		$request->session()->forget('msg');
		
		if (($request->input('firstname') != null) || ($request->input('lastname') != null))
		{
			$qfirstname = $request->input('firstname');
			$qlastname = $request->input('lastname');
			$occasions = DB::table('hd_occasions')->where('firstname','LIKE','%'.$qfirstname.'%')->where('lastname','LIKE','%'.$qlastname.'%')->paginate(10);
			
			if(count($occasions) > 0)
				return view('pages.search', ['occasions' => $occasions])->with('title', $title);
			else {
				Session::flash('msg', 'لا يوجد نتائج!');
				return view ('pages.search', ['occasions' => $occasions])->with('title', $title);
			}
		} else 
		{
			return view('pages.search', ['occasions' => $occasions])->with('title', $title);
		}
    }
		
	public function eventdetails($id) {
		$title = 'تفاصيل المناسبة ';
		//$occasion = Post::find($id);
		
		try {
			$occasion = Post::findOrFail($id);
			} catch (ModelNotFoundException $exception) {
				return back()->withError($exception->getMessage())->withInput();
		}
		
		$OccasionProducts = DB::table('hd_occ_products')
			->join('hd_occasions','hd_occasions.id','hd_occ_products.occ_id')
			->join('hd_products','hd_products.id','hd_occ_products.product_id')
			->where('occ_id', $id)			
			->get();
		return view('pages.eventdetails', compact('occasion', 'OccasionProducts'))->with('title', $title);
	}
	
	public function purchase($occ_id, $product_id){
        $title = 'اهداء';
		
		$occasion = Post::find($occ_id);
		
		$OccasionProducts = DB::table('hd_occ_products')
		->leftJoin('hd_occasions', 'hd_occasions.id', '=', 'hd_occ_products.occ_id')
		->leftJoin('hd_products', 'hd_products.id', '=', 'hd_occ_products.product_id')
		->where('hd_occ_products.product_id', '=', $product_id)
		->where('hd_occ_products.occ_id', '=', $occ_id)		
		->get();
		
		return view('pages.purchase', compact('occasion', 'OccasionProducts'))
		->with('title', $title);
    }
	

	public function email(Request $request, $occ_id, $product_id)
	{
		$Product = DB::table('hd_products')->where('hd_products.id', '=', $product_id)->get();
		$Occ = DB::table('hd_occasions')->where('hd_occasions.id', '=', $occ_id)->get();
		
		foreach ($Product as $oneProduct) {
			$productname = $oneProduct->productname;
			$productprice = $oneProduct->productprice + 5;
		}
		
		foreach ($Occ as $oneOcc) {
			$occasion_id = $oneOcc->id;
			$occ_firstname = $oneOcc->firstname;
			$occ_lastname = $oneOcc->lastname;
			$occ_type = $oneOcc->type;
			$occ_date = $oneOcc->occdate;
			$occ_emailaddress = $oneOcc->emailaddress;
			
		}
		
		$orderdata = [
			'buyerfirstname' => $request->input('firstname'),
			'buyerlastname' => $request->input('lastname'),
			'buyermobilenumber' => $request->input('mobilenumber'),
			'buyeremailaddress' => $request->input('emailaddress'),
			'productname' => $productname,
			'productprice' => $productprice,
			'orderdate' => Carbon::now(),
			'occasion_id' => $occasion_id,
			'occasionfirstname' => $occ_firstname,
			'occasionlastname' => $occ_lastname,
			'occasiontype' => $occ_type,
			'occasiondate' => $occ_date
		];
		
		$data = [
			'firstname' => $request->input('firstname'),
			'lastname' => $request->input('lastname'),
			'productname' => $productname,
			'productprice' => $productprice,
		];
		
		$occasionorderdata = [
			'firstname' => $occ_firstname,
			'lastname' => $occ_lastname,
			'buyerfirstname' => $request->input('firstname'),
			'buyerlastname' => $request->input('lastname'),
			'productname' => $productname,
			'productprice' => $productprice,
		];
		
		$adminemailaddress = 'support@ribbonate.com';
		$emailaddress = $request->input('emailaddress');
		$emailaddressforoccasion = $occ_emailaddress;
		
		Mail::to($adminemailaddress)->send(new SendMailAdmin($orderdata));
		Mail::to($emailaddress)->send(new SendMailable($data));
		Mail::to($emailaddressforoccasion)->send(new SendMailableToOcc($occasionorderdata));
		return view('pages.confirmation')->with('title', 'تأكيد الطلب');
	}
	
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
	
	public function cart(){
        $title = 'السلة';
        return view('pages.viewcart')->with('title', $title);
    }
	
	public function addToCart($productcat,$id){
		
		$title = 'اضافة مناسبة';
		
		$cart = session()->get('cart');
		$Product = DB::table('hd_products')->where('hd_products.id', '=', $id)->get();
        // if cart is empty then this the first product
		if(!$cart) {
			foreach ($Product as $oneProduct) {
				$cart = [
					$id => [
						"name" => $oneProduct->productname,
						"price" => $oneProduct->productprice,
						"description" => $oneProduct->productdescription,
						"merchant" => $oneProduct->merchantname,
						"quantity" => 1,
					]
				];
			}
 
			session()->put('cart', $cart);
 
			return redirect()->back()->with('success', 'تمت اضافة المنتج الى السلة بنجاح!');
		}
 
        // if cart not empty then check if this product exist then increment quantity
		if(isset($cart[$id])) {
			$cart[$id]['quantity']++;
			session()->put('cart', $cart);
			return redirect()->back()->with('success', 'تمت اضافة المنتج الى السلة بنجاح!');
		}
 
        // if item not exist in cart then add to cart with quantity = 1
		foreach ($Product as $oneProduct) {
			$cart[$id] = [
				"name" => $oneProduct->productname,
				"price" => $oneProduct->productprice,
				"description" => $oneProduct->productdescription,
				"merchant" => $oneProduct->merchantname,
				"quantity" => 1,
			];
		}
		session()->put('cart', $cart);
 
		return redirect()->back()->with('success', 'تمت اضافة المنتج الى السلة بنجاح!');
		//return view('pages.add', ['Products' => $Products])->with('title', $title);
        
    }
	
	
	
}
