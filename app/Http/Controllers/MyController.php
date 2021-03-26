<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class MyController extends Controller
{

  public function logout(){
        session()->flush();
        return redirect('dologin');
    }

  public function login(Request $r){
          $name=  $r->name;
          //$password = $r->password;
          $password = md5($r->password);
          $result = \App\user::where("name","=",$name)
                  ->where("password","=",$password)
                  ->get();
          if ($result->count()>0){
              echo "Berjaya";
  			session(['pengguna' => $name,
        'admin'=> $password,
  			'name' =>$result[0]->name,
        'level'=>$result[0]->level
  			//'password'=>$result[0]->password
  			]);
              return redirect('/user');
          }else{
              echo "Not a valid login";
          }
  }

  public function viewUser(){
        if (session('pengguna')){
            if (session('level')==1){
                $listofuser = \App\user::all();
            }else{
                $listofuser = \App\user::where('name','=',session('pengguna'))
                            ->get();
            }
            return view('viewUser',compact('listofuser'));
        }else{
            echo "Please login to continue!";
        }
    }

    public function insertnewuser(Request $r){
		$rows = \App\user::where('email','=',$r->email)
	//->orWhere('email','=',$r->email)
		->count();
		if ($rows !=0){
			echo "Email already exists";
		}
		else
		{

		$newuser = new \App\user;
		$newuser->name = $r->name;
		$newuser->email = $r->email;
		$newuser->password =md5($r->password);
		$newuser->telno = $r->telno;

		$newuser->save();
		return redirect('user');
	}
	}

  public function searchnewuser(Request $r){
  		echo "Search [$r->name]";
  		$listofuser = \App\user::where('name','like',$r->name.'%')->get();
  		return view('viewUser',compact('listofuser'));
  	}
   public function deletenewuser(Request $r){
   $result = \App\user::where('id','=',$r->id)->delete();

  if($result){
  echo "Data deleted!";
  return redirect('user');
  }else{
  echo "Failed to delete!";
  }
  }

  public function editnewuser(Request $r){
        $data = \App\user::where('id','=',$r->id)->get();
        return view('user.userEdit',compact('data'));
    }

    public function editnewuserConfirm(Request $r){
        $result = \App\user::where('id','=',$r->id)
            ->update([
            'name' => $r->name,
            'email' => $r->email,
            'telno' => $r->telno

            ]);
        if ($result){
            return redirect('user');
        }else{
            echo "Failed to update!";
    }
	}

  public function insertnewitem(Request $r){
		$rows = \App\schedule::where('on_duty','=',$r->on_duty)
		//->orWhere('date','=',$r->date)
		->count();
		if ($rows !=0){
			echo "This driver is already exists";
		}
		else
		{

		$newitem = new \App\schedule;
		$newitem->date = $r->date;
		$newitem->day = $r->day;
    $newitem->time = $r->time;
		$newitem->on_duty = $r->on_duty;
    $newitem->type_vehicle = $r->type_vehicle;
		$newitem->no_pax = $r->no_pax;

		$newitem->save();


		return redirect('newschedule');
	}
	}

  public function insertnewvehicle(Request $r){
		$rows = \App\vehicle::where('id_vehicle','=',$r->id_vehicle)
		//->orWhere('date','=',$r->date)
		->count();
		if ($rows !=0){
			echo "This driver is already exists";
		}
		else
		{

		$newitem = new \App\vehicle;
		$newitem->id_vehicle = $r->id_vehicle;
		$newitem->plate_no = $r->plate_no;
    $newitem->vehicle_type = $r->vehicle_type;
		$newitem->no_pax = $r->no_pax;

		$newitem->save();
		return redirect('vehicle');
	}
	}

  public function viewSchedule(){
          if (session('pengguna')){
              if (session('level')==0){
                  $listofschedule = \App\schedule::all();}
              return view('viewSchedule',compact('listofschedule'));
          }else{
              echo "Please login first!";
          }
      }

}
