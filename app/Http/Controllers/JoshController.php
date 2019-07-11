<?php 

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Sentinel;
use View;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;
use App\Datatable;
use App\User;
use App\Guru;
use App\Mapel;
use App\Rombel;
use App\MapelGuru;
use App\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use File;


class JoshController extends Controller {

    
    /**
     * Message bag.
     *
     * @var Illuminate\Support\MessageBag
     */
    protected $messageBag = null;

    /**
     * Initializer.
     *
     */
    public function __construct()
    {
        $this->messageBag = new MessageBag;

    }

    /**
     * Crop Demo
     */
    public function crop_demo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $targ_w = $targ_h = 150;
            $jpeg_quality = 99;

            $src = base_path().'/public/assets/img/cropping-image.jpg';

            $img_r = imagecreatefromjpeg($src);

            $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

            imagecopyresampled($dst_r,$img_r,0,0,intval($_POST['x']),intval($_POST['y']), $targ_w,$targ_h, intval($_POST['w']),intval($_POST['h']));

            header('Content-type: image/jpeg');
            imagejpeg($dst_r,null,$jpeg_quality);

            exit;
        }
    }

//    public function showHome()
//    {
//        if(Sentinel::check())
//            return view('admin.index');
//        else
//            return redirect('admin/signin')->with('error', 'You must be logged in!');
//    }

    public function showView($name=null)
    {

        if(View::exists('admin/'.$name))
        {
            if(Sentinel::check())
                return view('admin.'.$name);
            else
                return redirect('signin')->with('error', 'You must be logged in!');
        }
        else
        {
            abort('404');
        }
    }

    public function activityLogData()
    {
        $logs = Activity::get(['causer_id', 'log_name', 'description','created_at']);
        return DataTables::of($logs)
        ->addIndexColumn()
            ->make(true);
    }



    public function showHome()
    {

        //total users
        $user_count =User::count();
        $siswa_count =Siswa::count();
        $guru_count =Guru::count();
       
        $users = User::orderBy('id', 'desc')->take(5)->get();

        $roles = DB::table('role_users')
            ->join('users','users.id','=','role_users.user_id')
            ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
            ->select('roles.name')
            ->get();
       /*----------  Guru Mapel Get  ----------*/
       $guru = Sentinel::getUser();
       $mapelguru = MapelGuru::where('guru_id', $guru->guru_id)->get();

       $getnamamapel = [];
       $getrombel = [];
       foreach($mapelguru as $m)
        {
            $getnamamapel[] = Mapel::find($m->mapel_id);
            $getrombel[] = Rombel::find($m->rombel_id);
        }

        // dd($getrombel[1]->namaRombel);

       // $mapels_id = $mapelguru->mapel_id;
       // $getmapel = Mapel::where('id',$mapelguru)->get();
       // dd ($m->nama);

        if(Sentinel::check())
            if(Sentinel::inRole('admin'))
            {
            return view('admin.index',[ 'user_count'=>$user_count,'siswa_count'=>$siswa_count,'guru_count'=>$guru_count,'users'=>$users] );
            }
        else{
            // return view ('guru.index',$data, ['mapelguru'=>$mapelguru]);
            return view ('guru.index', compact('mapelguru','getnamamapel','getrombel'));
            }
        else{
            return redirect('signin')->with('error', 'You must be logged in!');
        }
    }

}