<?php 


class toolsAuto {

    public static function tool_taux_periode(SLDuree $duree, SLAutoSetting $taux){

        $taux_periode = 1;

        if(toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","1 mois"))){

            $taux_periode = $taux->taux_periode1();

        }elseif(toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","3 mois"))){

            $taux_periode = $taux->taux_periode2();

        }elseif(toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","6 mois"))){

            $taux_periode = $taux->taux_periode3();
            
        }else{

            $taux_periode = $taux->taux_periode4();
            
        }

        return $taux_periode;

    }

    public static function tool_prime_rc(toolsReduction $reduction, SLTarif_RC $tarif_rc){
        
        $prime_rc = 0;
        $prime_rc = $tarif_rc->tarif_rc() * (1-$reduction->reduction_bns()) * (1-$reduction->reduction_commerciale());

        return $prime_rc;
    }

    public static function tool_prime_dr(){
        $prime_dr = 0;
        return $prime_dr;
    }

    public static function tool_prime_tc(SLVehicule $vehicule ,toolsReduction $redution, SLAutoSetting $taux){

        $prime_tc = 0;
        $prime_tc = $vehicule->valeur_neuve_vehicule() * $taux->taux_dommage() * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_tc;

    }

    public static function tool_prime_vol(SLVehicule $vehicule, toolsReduction $redution, SLAutoSetting $taux){

        $prime_vol = 0;
        $prime_vol = $vehicule->valeur_venale_vehicule() * $taux->taux_vol() * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_vol;

    }

    public static function tool_prime_volacc(SLAutoSetting $taux, toolsReduction $redution){

        $prime_volacc = $taux->taux_volacc() * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_volacc;

    }

    public static function tool_prime_inc(SLVehicule $vehicule, toolsReduction $redution, SLAutoSetting $taux){

        $prime_inc = 0;
        $prime_inc = $vehicule->valeur_venale_vehicule() * $taux->taux_incendie() * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_inc;

    }

    public static function tool_prime_bdg(SLVehicule $vehicule, toolsReduction $redution, SLAutoSetting $taux){

        $prime_bdg = 0;
        $prime_bdg = $vehicule->valeur_neuve_vehicule() * $taux->taux_bdg() * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_bdg;

    }

    public static function tool_prime_ic(toolsReduction $redution){

        $prime_ic = 7000 * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_ic;
    }

    public static function tool_prime_ic_confort(toolsReduction $redution){

        $prime_ic = 12000 * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_ic;
    }

    public static function tool_prime_ic_liberte(toolsReduction $redution){

        $prime_ic = 15000 * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());
        return $prime_ic;
    }

    public static function tool_prime_ipt(SLVehicule $vehicule,toolsReduction $redution){

        $prime_ipt = 0;

        if(toolsApp::tool_check_var($vehicule->id_typetransport(),1)){
            $prime_ipt = 5000;
        }elseif(toolsApp::tool_check_var($vehicule->id_typetransport(),5)){
            $prime_ipt = 15000;
        }else{
            $prime_ipt = 6000;
        }

        $prime_ipt = $prime_ipt * $vehicule->nbre_place_vehicule() * (1-$redution->reduction_bns()) * (1-$redution->reduction_commerciale());

        return $prime_ipt;
    }

    public static function tool_prime_acc(SLDuree $duree, SLAutoSetting $taux){
        $prime_acc = 0;

        if(toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","1 mois")) || toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","3 mois")) ){
            $prime_acc = $taux->taux_accessoire1();
        }elseif(toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","6 mois")) || toolsApp::tool_check_var($duree->duree(),toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr","12 mois")) ){
            $prime_acc = $taux->taux_accessoire2();
        }

        return $prime_acc;
    }

    public static function tool_prime_taxe($prime_nette, $prime_acc ,SLAutoSetting $taux){
        $prime_taxe = ( $prime_nette + $prime_acc ) * $taux->taux_taxe();
        return $prime_taxe;
    }

    public static function tool_prime_cartebrume(){
        $prime_carte_brume = 0;
        return $prime_carte_brume;
    }

    public static function tool_dateecheance($duree,$date_effet){

        switch(toolsLang::tool_get_langue_text(toolsApp::tool_get_session("lg"),"fr",$duree)){
            
            case "1 mois":
                $auto_dateecheance = date('Y-m-d', strtotime($date_effet. ' + 29 days'));
            break;

            case "3 mois":
                $auto_dateecheance = date('Y-m-d', strtotime($date_effet. ' + 89 days'));
            break;

            case "6 mois":
                $auto_dateecheance = date('Y-m-d', strtotime($date_effet. ' + 179 days'));
            break;

            case "12 mois":
                $auto_dateecheance = date('Y-m-d', strtotime($date_effet. ' + 364 days'));
            break;

            default:
                $auto_dateecheance = date('Y-m-d', strtotime($date_effet. ' + 29 days'));
            break;
        }

        return $auto_dateecheance;

    }

    public static function tool_puissancefiscale($puissance_fiscale, $energie){

        $data = $puissance_fiscale;

        if($energie == "Diesel"){

            if($puissance_fiscale >= "17"){

                $data = "17 CV et plus";

            }elseif($puissance_fiscale <= "16" && $puissance_fiscale >= "11"){

                $data = "11 - 16 CV";

            }elseif($puissance_fiscale <= "10" && $puissance_fiscale >= "8" ){
                
                $data = "8 - 10 CV";

            }elseif($puissance_fiscale <= "7" && $puissance_fiscale >= "5" ){

                $data = "5 - 7 CV";

            }elseif($puissance_fiscale <= "4" && $puissance_fiscale >= "2" ){

                $data = "2 - 4 CV";

            }elseif($puissance_fiscale <= "4" && $puissance_fiscale >= "2" ){

                $data = "2 - 4 CV";

            }else{

                $data = "1 CV";

            }

        }else{

            if($puissance_fiscale >= "24"){

                $data = "24 - plus";

            }elseif($puissance_fiscale <= "23" && $puissance_fiscale >= "15" ){

                $data = "15 - 23";

            }elseif($puissance_fiscale <= "14" && $puissance_fiscale >= "11" ){

                $data = "11 - 14";

            }elseif($puissance_fiscale <= "10" && $puissance_fiscale >= "7" ){

                $data = "7 - 10";

            }elseif($puissance_fiscale <= "6" && $puissance_fiscale >= "3" ){

                $data = "3 - 6";

            }elseif($puissance_fiscale <= "2" && $puissance_fiscale >= "0" ){

                $data = "0 - 2";
            }
        }

        return $data;
    }

    public static function tool_cylindre($cylindre){

        $data = $cylindre;

        if($cylindre >= "250" && $cylindre <= "126"){

            $data = "126 - 250 cm3";

        }elseif($cylindre <= "125" && $cylindre >= "75"){

            $data = "75 - 125 cm3";

        }elseif($cylindre <= "74" && $cylindre >= "51" ){
            
            $data = "51 - 74 cm3";

        }elseif($cylindre <= "50" && $cylindre >= "0" ){

            $data = "0 - 50 cm3";

        }

        return $data;

    }

}


?>