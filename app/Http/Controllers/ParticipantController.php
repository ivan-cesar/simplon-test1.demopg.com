<?php

namespace App\Http\Controllers;
use App\Models\Participant;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;

use PDF;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
        //$this->middleware('auth');
		View::share( 'section_title', 'Simplon' );
		View::share( 'page_description', 'Inscription' );}
		
     
    public function index()
    {
        return view('participants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     	 // Générer un PDF
	public function createpdf() {
		 
        $data['participants'] = Participant::all();
        $pdf = PDF::loadView('participants.pdf', $data)->setPaper('a4');
        $name = "Participants.pdf";
		return $pdf->stream($name);
    }
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
                $this->validate(request(),[
			  "nom" => "required",
			  "prenoms" => "required",
			  "telephone" => "required",
			  "email" => "required|email|max:255|unique:participants",
		],[
            "nom" => "le champ nom est obligatoire",
            "prenoms" => "le champ prenoms est obligatoire",
            "telephone" => "le champ telephone est obligatoire",
            "email" => "le champ email est obligatoire"
            ]);
            
            $prp = new Participant;
    		$prp->nom = htmlspecialchars($request->nom);
    		$prp->prenoms = htmlspecialchars($request->prenoms);
    		$prp->telephone = htmlspecialchars($request->telephone);
    		$prp->email = htmlspecialchars($request->email);
    		
    			$user['email'] =   htmlspecialchars($request->email);
    		
    		if($prp->save()){

        			@Mail::send('emails.notification',$user, function($message) use($user) {
        				$message->from('contact@implon-test1.demopg.com','SIMPLON CI')->to($user['email'])->subject('Accès SIMPLON CI ');
			});
			
			
			session()->flash('type', 'alert-success');
			session()->flash('message', 'Inscription crée avec succès');
			return redirect()->route('participants.index');
		}else{
			session()->flash('type', 'alert-danger');
			session()->flash('message', 'Une erreur s\'est produite à la création, veuillez réessayer');
			return back();
		}
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
    public function destroy($id)
    {
        //
    }
}
