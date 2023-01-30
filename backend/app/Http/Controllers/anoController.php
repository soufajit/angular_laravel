<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LDAP\Result;
use Session;
use Illuminate\Support\Facades\Auth;
use PDF;

class anoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatepdf(Request $request)
    {   
        $input = $request->all();
        $id = $input['id'];
        // dd($id);
        $data= DB::table('birthcertificate')->where('id',$id)->get();
        // dd($data[0]->cname);

        $pdf = PDF::loadView('certificatePDF', ['data' => $data]);

        return $pdf->download('data.pdf');
    }
    public function certificate(Request $request)
    {
        $input = $request->all();
        $id = $input['id'];
        // dd($id);
        $data= DB::table('birthcertificate')->where('id',$id)->get();
        return view('/certificate', ['data' => $data]);
           
    }
    public function approvedAction(Request $request)
    {
        $input = $request->all();
        $id = $input['id'];
        // dd($id);
        $status= 1;
        DB::table('birthcertificate')->where('id',$id)->update(['status' => $status]);
        return redirect('viewApplicaiton');

    }
    public function rejectAction(Request $request)
    {
        $input = $request->all();
        $id = $input['id'];
        // dd($id);
        $status= 2;
        DB::table('birthcertificate')->where('id',$id)->update(['status' => $status]);
        return redirect('viewApplicaiton');

    }
    public function viewApplicaiton()
    {
        $data = DB::table('birthcertificate')->get();
        //  dd($data);
        return view('/viewApplicaiton', ['cerdata' => $data]);
    }
    public function viewbirthCertificate(Request $request)
    {
        $sessionData = $request->session()->get('id');
        // dd($sessionData);
        $cerdata = DB::table('birthcertificate')->where('user_id', $sessionData)->get();
        //  dd($cerdata);
        return view('/viewbirthCertificate', ['cerdata' => $cerdata]);
    }
    public function login(Request $request)
    {
        // dd("1");
        $email = $request->email;
        $password = $request->password;
        $match = DB::table('user')->where('email', $email)->where('password', $password)->first();
        if ($match)
        {
            $id = $match->user_id;
            $role = $match->role_id;
            if ($role == 1) {
                return redirect('admindashbord');
                $value = $request->session()->put('id', $id);    
            } else {
                $value = $request->session()->put('id', $id);
                return redirect('Userdashbord');
            }
        }else{
            dd('login Faild');
        }
      
        // dd($match[0]->user_id);





    }

    public function getdist(Request $request)
    {
        // dd("getdist");
        $data = $request->all();

        $dist = DB::table('dist')->select('*')->where('state_id', '=', $data['stateid'])->get();

        // print_r($connectionType);exit;

        $html = '<option hidden="hidden" value="">Select</option>';
        foreach ($dist as $list) {
            $html .= '<option value="' . $list->state_id . '">' . $list->dname . '</option>';
        }
        return json_encode(array('html' => $html));
    }
    public function apply(Request $request)
    {
        // dd("hii");
        $data       =   $request->all();
        // $a=$data['uid'];
        // dd($a);
        $file=$request->file('addrespdf');
        $addrespdf=$file->openFile()->fread($file->getSize());

        $Result = DB::table('birthcertificate')->insert(
            [
                'user_id' =>$data['uid'],
                'cname'   => $data['cname'],
                'fname'         => $data['fname'],
                'mname'    => $data['mname'],
                'gender'           => $data['gender'],
                'dob'              => $data['dob'],
                'bplace'              => $data['bplace'],
                'address'      => $data['padd'],
                'house'    => $data['house'],
                'state'    => $data['state'],
                'dist'    => $data['dist'],
                'document'    => $addrespdf
            ]
        );
        return back();
    }

    public function index()
    {
        //

        $state = DB::table('state')->get();
        //  dd($state);
        return view('/applyCertificate', ['state' => $state]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        // dd("bshh");
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
