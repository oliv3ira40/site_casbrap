<?php

namespace App\Http\Controllers\Site\Form;

use App\Helpers\HelpAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

use App\Models\Site\Wallet\CasembrapaWallet;
use App\Models\Site\Wallet\CassiWallet;
use App\Http\Requests\Site\Form\RegistrationUpdate\ReqSave;
use App\Models\Site\RegistrationUpdate;

class RegistrationUpdateController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }



    public function view() {
        if (HelpAdmin::checkDefinitivePassword()) {
            return redirect()->route('site.definitive_password');
        }

        $data["holder"] = CasembrapaWallet::where("registration", \Auth::user()->registration)->first();
        $registration = $data["holder"]->registration ?? null;

        $data["dependents"] = [];
        if ($registration) {
            $first_6_digits_registration = substr($registration, 0, 6);
            $data["dependents"] = CasembrapaWallet::where('registration', '!=', $registration)
                ->where('type', '!=', 'Titular')
                ->where('registration', 'like', $first_6_digits_registration.'%')
                ->pluck('recipient')->toArray();
        }

        $data["street_type"] = [
            "null" => "Selecione...",
            "A" => "Area",
            "Ac" => "Acesso",
            "Ad" => "Adro",
            "Aer" => "Aeroporto",
            "Al" => "Alameda",
            "Arqa" => "Arqa",
            "Art" => "Arteria",
            "At" => "Alto",
            "Atl" => "Atalho",
            "Av" => "Avenida",
            "Bc" => "Beco",
            "Bco" => "Buraco",
            "Belv" => "Belvedere",
            "Bl" => "Bloco",
            "Blo" => "Balao",
            "Bsq" => "Bosque",
            "Bvd" => "Boulevard",
            "Bx" => "Baixa",
            "C" => "Cais",
            "Calc" => "Calcada",
            "Cam" => "Caminho",
            "Can" => "Canal",
            "Ch" => "Chacara",
            "Circ" => "Circular",
            "Cj" => "Conjunto",
            "Cmp-vr" => "Complexo Viario",
            "Col" => "Colonia",
            "Cond" => "Condominio",
            "Cor" => "Corredor",
            "Cpo" => "Campo",
            "Crg" => "Corrego",
            "Ctr" => "Centro",
            "Dsc" => "Descida",
            "Dsv" => "Desvio",
            "Dt" => "Distrito",
            "Ent-part" => "Entrada Particular",
            "Esc" => "Escada",
            "Esp" => "Esplanada",
            "Est" => "Estrada",
            "Estc" => "Estacionamento",
            "Etc" => "Estacao",
            "Etd" => "Estadio",
            "Evd" => "Elevada",
            "Fav" => "Favela",
            "Faz" => "Fazenda",
            "Fer" => "Ferrovia",
            "Fnt" => "Fonte",
            "Fra" => "Feira",
            "Frt" => "Fortaleza",
            "Fte" => "Forte",
            "Gal" => "Galeria",
            "Gja" => "Granja",
            "Ia" => "Ilha",
            "Jd" => "Jardim",
            "Jde" => "Jardinete",
            "Ld" => "Ladeira",
            "Lg" => "Lago",
            "Lot" => "Loteamento",
            "Lrg" => "Largo",
            "Lug" => "Lugarejo",
            "Mer" => "Mercado",
            "Mge" => "Mge",
            "Mna" => "Marina",
            "Mod" => "Modulo",
            "Mro" => "Morro",
            "Mte" => "Monte",
            "Par" => "Paralela",
            "Pas" => "Passeio",
            "Pat" => "Patio",
            "Pc" => "Praca",
            "Pc-esp" => "Praca de Esportes",
            "Pda" => "Parada",
            "Pit" => "Pita",
            "Pnt" => "Ponta",
            "Pov" => "Povoado",
            "Pr" => "Praia",
            "Prl" => "Prolongamento",
            "Prq" => "Parque",
            "Psa" => "Passarela",
            "Psg" => "Passagem",
            "Psg-sub" => "Passagem Subterranea",
            "Pte" => "Ponte",
            "Pto" => "Porto",
            "Q" => "Quadra",
            "Qta" => "Quinta",
            "R" => "Rua",
            "R-ped" => "Rua de Pedestre",
            "Ram" => "Ramal",
            "Rec" => "Recanto",
            "Rer" => "Retiro",
            "Res" => "Residencial",
            "Ret" => "Reta",
            "Rmp" => "Rampa",
            "Rod" => "Rodovia",
            "Rod-an" => "Rodo Anel",
            "Rot" => "Rotula",
            "Rtn" => "Retorno",
            "Rtt" => "Rotatoria",
            "Sit" => "Sitio",
            "Srv" => "Servidao",
            "St" => "Setor",
            "Sub" => "Subida",
            "Ter" => "Terminal",
            "Tr" => "Trecho",
            "Trv" => "Trevo",
            "Tun" => "Tunel",
            "Tv" => "Travessa",
            "Unid" => "Unidade",
            "V" => "Via",
            "V-ac" => "Via de Acesso",
            "V-evd" => "Via Elevado",
            "V-exp" => "Via Expressa",
            "V-ped" => "Via de Pedestre",
            "Val" => "Vala",
            "Vd" => "Viaduto",
            "Ver" => "Vereda",
            "Vl" => "Vila",
            "Vla" => "Viela",
            "Vle" => "Vale",
            "Zig-zag" => "Zigue-zague",            
        ];

        return view("Site.statics.priv.registration_update.view", compact("data"));
    }
    public function save(ReqSave $req) {
        $user = \Auth::user();
        $data = $req->all();
        $data["cpf"] = $user->cpf;
        $data["registration"] = $user->registration;

        $data['form_content'] = 'Prezado(a), Informamos que seu cadastro foi atualizado com sucesso. Agradecemos pela colaboração';
        Mail::send('Site.forms.registration_update.send', $data, function($message) use ($data){
            $message->from('no-reply@casembrapa.org.br');
            $message->to($data['email']);
            // $message->cc(['augusto@agencialaweb.com.br', 'no-reply@casembrapa.org.br']);
            $message->subject('Casembrapa - Atualização cadastral');
        });
        
        RegistrationUpdate::where("user_id", $user->id)->delete();
        RegistrationUpdate::create($data);

        session()->flash('info', "info:Atualização cadastral realizada com sucesso!");
        return redirect()->route("site.recipient");
    }
}
