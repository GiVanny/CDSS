<?php
$koneksi=mysqli_connect("localhost", "root", "", "percobaan_database_obat");
function cari($nama_obat) {
    global $koneksi;
    $query="SELECT*FROM database_obat_pjk where nama_obat = '$nama_obat'";
    $hasil_cari=mysqli_query($koneksi, $query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($hasil_cari)) {
        $rows[]=$row;
    }
    return $rows;
}
    function suhu_tubuh ($data){
        if (empty($data)) {
            $hasil_suhu="data suhu tubuh tidak diinputkan";
        } else if ($data < 36) {
            $hasil_suhu="suhu tubuh di bawah normal";
        } else if ($data > 37.5) {
            $hasil_suhu="suhu tubuh di atas normal";
        } else {
            $hasil_suhu="suhu tubuh normal";
        }
        return $hasil_suhu;
    }

    function denyut_nadi($data) {
        if (empty($data)){
            $hasil_denyut_nadi="data denyut nadi tidak diinputkan";
        } else if ($data < 80) {
            $hasil_denyut_nadi="denyut nadi di bawah normal";
        } else if ($data > 90) {
            $hasil_denyut_nadi="denyut nadi di atas normal";
        } else {
            $hasil_denyut_nadi="denyut nadi normal";
        }
        return $hasil_denyut_nadi;
    }

    function laju_nafas($data) {
        if (empty($data)) {
            $hasil_laju_nafas="data laju nafas tidak diinputkan";
        } else if ($data < 21) {
            $hasil_laju_nafas="laju nafas di bawah normal";
        } else if ($data > 30) {
            $hasil_laju_nafas="laju nafas di atas normal";
        } else {
            $hasil_laju_nafas="laju nafas normal";
        }
        return $hasil_laju_nafas;
    }
    
    function tekanan_darah($data_sistolik, $data_diastolik) {
       if (empty($data_sistolik) && empty($data_diastolik)){
           $hasil_tekanan_darah="tidak ada data tekanan darah yang diinputkan";
       } else if ($data_sistolik>140 && $data_diastolik>90) {
           $hasil_tekanan_darah="pasien mengalami hipertensi";
       } else if ($data_sistolik>140 && ($data_diastolik<=90 || $data_diastolik>=60)) {
           $hasil_tekanan_darah="tekanan darah sistolik tinggi";
       } else if (($data_sistolik<=140||$data_sistolik>=90) && $data_diastolik>90) {
        $hasil_tekanan_darah="tekanan darah diastolik tinggi";
       } else if ($data_sistolik<90 && $data_diastolik<60) {
           $hasil_tekanan_darah="pasien mengalami hipotensi";
       } else {
           $hasil_tekanan_darah="tekanan darah pasien normal";
       }
       return $hasil_tekanan_darah;
    }
    //pemeriksaan laboratorium
    function natrium($data){
        if (empty($data)) {
            $hasil_natrium="data tidak diinputkan";
        } else if ($data<135) {
            $hasil_natrium="kadar natrium di bawah normal";
        } else if ($data>145) {
            $hasil_natrium="kadar natrium di atas nromal";
        } else {
            $hasil_natrium="kadar natrium normal";
        }
        return $hasil_natrium;
    }

    function kalium ($data) {
        if (empty($data)){
            $hasil_kalium="data tidak diinputkan";
        } else if ($data <3.5) {
                $hasil_kalium = "kadar kalium di bawah normal";
        } else if ($data > 5) {
                $hasil_kalium = "kadar kalium di atas normal";
        } else {
            $hasil_kalium = "kadar kalium normal";
        }
       
        return $hasil_kalium;
    } 
    
    function CO2 ($data) {
        if (empty($data)) {
            $hasil_CO2="data tidak diinputkan";
        }  else if ($data < 22) {
                $hasil_CO2 = "kadar CO2 di bawah normal";
        } else if ($data > 28) {
                $hasil_CO2 = "kadar CO2 di atas normal";
        } else {
                $hasil_CO2 ="kadar CO2 normal";
        } 
        return $hasil_CO2;
    }
    
    function klorida ($data) {
        if (empty($data)) {
            $hasil_klorida="data tidak diinputkan";
        }    
        else if ($data < 95) {
            $hasil_klorida = "kadar klorida di bawah normal";
        } else if ($data > 105) {
            $hasil_klorida = "kadar klorida di atas normal";
        } else {
            $hasil_klorida = "kadar klorida normal";
            }
        return $hasil_klorida;
    }
    
    function BUN ($data) {
        if (empty($data)) {
            $hasil_BUN="data tidak diinputkan";
        } else if ($data < 8) {
                $hasil_BUN = "kadar BUN di bawah normal";
        } else if ($data > 20) {
                $hasil_BUN = "kadar BUN di atas normal";
            } else {
                $hasil_BUN = "kadar BUN normal";
            }
        return $hasil_BUN;
     }
    
    function creatinine($data) {
        if (empty($data)) {
            $hasil_creatinine="data tidak diinputkan";
        }
        else if ($data < 0.6) {
            $hasil_creatinine = "kadar creatinine di bawah normal";
        } else if ($data > 1.2) {
            $hasil_creatinine = "kadar creatinine di atas normal";
            } else {
                $hasil_creatinine = "kadar creatinine normal";
            }
        return $hasil_creatinine;
     }
    
     function creatinine_clearance($data) {
        if (empty($data)) {
            $hasil_creatinine_clearance="data tidak diinputkan";
        } else if ($data < 90) {
            $hasil_creatinine_clearance = "Creatinine clearance di bawah normal";
        } else if ($data > 130) {
            $hasil_creatinine_clearance = "Creatinine clearance di atas normal";
        } else {
            $hasil_creatinine_clearance = "Creatinine clearance normal";
        }
        return $hasil_creatinine_clearance;
     }
    
    function GFR ($data) {
        if (empty($data)) {
            $hasil_GFR="data tidak diinputkan";
        }else if ($data < 90) {
            $hasil_GFR = "GFR di bawah normal";
        } else if ($data > 120) {
            $hasil_GFR = "GFR di atas normal";
        } else {  
          $hasil_GFR = "GFR normal";
        }
        return $hasil_GFR;
    }
    
    function cystatin_c ($data) {
        if (empty($data)) {
            $hasil_cystatin_c="data tidak diinputkan";
        } else if ($data < 1) {
            $hasil_cystatin_c = "kadar Cystatin C normal";
        } else {
            $hasil_cystatin_c = "kadar cystatin C di atas normal/atau tidak normal";
        }
        return $hasil_cystatin_c;
    } 
    
    function glukosa_puasa ($data) {
        if (empty($data)) {
            $hasil_glukosa_puasa="data tidak diinputkan";
        } else if ($data < 70) {
            $hasil_glukosa_puasa = "kadar glukosa puasa di bawah normal";
        } else if ($data > 99) {
            $hasil_glukosa_puasa = "kadar glukosa puasa di atas normal";
        } else {
            $hasil_glukosa_puasa = "kadar glukosa puasa normal";
            }       
        return $hasil_glukosa_puasa;
    }
    
    function HbA1C ($data) {
        if (empty($data)) {
            $hasil_HbA1C="data tidak diinputkan";
        } else if ($data < 4) {
            $hasil_HbA1C = "kadar HbA1C di bawah normal";
        } else if ($data > 5.6) {
            $hasil_HbA1C = "kadar HbA1C di atas normal";
        } else {
            $hasil_HbA1C = "kadar HbA1C normal";            }
        return $hasil_HbA1C;
    }
    
    function kalsium_total ($data) {
        if (empty($data)) {
            $hasil_kalsium_total="data tidak diinputkan";
        } else if ($data < 8.5) {
            $hasil_kalsium_total = "kadar kalsium total di bawah normal";
        } else if ($data > 10.5) {
            $hasil_kalsium_total = "kadar kalsium total di atas normal";
        } else {
           $hasil_kalsium_total = "kadar kalsium total normal";
        }
        return $hasil_kalsium_total;
    }
    
    function kalsium_bebas ($data) {
        if (empty($data)) {
            $hasil_kalsium_bebas="data tidak diinputkan";
        } else if ($data < 4.5) {
            $hasil_kalsium_bebas = "kadar kalsium bebas di bawah normal";
        } else if ($data > 5.6) {
            $hasil_kalsium_bebas = "kadar kalsium bebas di atas normal";
        } else {
            $hasil_kalsium_bebas = "kadar kalsium bebas normal";
        }
        return $hasil_kalsium_bebas;
    }
    
    function magnesium ($data) {
        if (empty($data)) {
            $hasil_magnesium="data tidak diinputkan";
        } else if ($data < 1.5) {
            $hasil_magnesium = "kadar magnesium di bawah normal";
        } else if ($data > 2.4) {
            $hasil_magnesium = "kadar magnesium di atas normal";
        } else {
            $hasil_magnesium = "kadar magnesium normal";
        }
        return $hasil_magnesium;
    }
    
    function fosfat ($data) {
        if (empty($data)) {
            $hasil_fosfat="data tidak diinputkan";
        } else if ($data < 2.5) {
            $hasil_fosfat = "kadar fosfat di bawah normal";
        } else if ($data > 4.5) {
            $hasil_fosfat = "kadar fosfat di atas normal";
        } else {
            $hasil_fosfat = "kadar fosfat normal";
        }
        return $hasil_fosfat;
    }
    
    function asam_urat ($data) {
        if (empty($data)) {
            $hasil_asam_urat="data tidak diinputkan";
        } else if ($data < 7) {
            $hasil_asam_urat = "kadar asam urat normal";
        } else {
            $hasil_asam_urat = "kadar asam urat tidak normal/ di atas normal";
        }
        return $hasil_asam_urat;
    
    }
    
    function prealbumin ($data) {
        if (empty($data)) {
            $hasil_prealbumin="data tidak diinputkan";
        }
        else if ($data < 15) {
            $hasil_prealbumin = "kadar prealbumin di bawah normal";
        } else if ($data > 36) {
           $hasil_prealbumin = "kadar prealbumin di atas normal";
        } else {
            $hasil_prealbumin = "kadar prealbumin normal";
        }        
        return $hasil_prealbumin;
    }
    
    function albumin ($data) {
        if (empty($data)) {
            $hasil_albumin="data tidak diinputkan";
        }
        else if ($data < 3.3) {
            $hasil_albumin = "kadar albumin di bawah normal";
        } else if ($data > 4.8) {
            $hasil_albumin = "kadar albumin di atas normal";
        } else {
            $hasil_albumin = "kadar albumin normal";
        }
        return $hasil_albumin;
    }
    
    function globulin ($data) {
        if (empty($data)) {
            $hasil_globulin="data tidak diinputkan";
        }
        else if ($data < 2.3) {
            $hasil_globulin = "kadar globulin di bawah normal";
        } else if ($data > 3.5) {
            $hasil_globulin = "kadar globulin di atas normal";
        } else {
            $hasil_globulin = "kadar globulin normal";
        }
        return $hasil_globulin;
    }
    
    function AST ($data) {
        if (empty($data)) {
            $hasil_AST="data tidak diinputkan";
        }
        else if ($data > 0 && $data < 35) {
            $hasil_AST = "kadar AST normal";
        } else if ($data > 35) {
            $hasil_AST = "kadar AST di atas normal";
        } else {
                $hasil_AST = "data eror";
        }
        return $hasil_AST;
    }
    
    function ALT ($data) {
        if (empty($data)) {
            $hasil_ALT="data tidak diinputkan";
        } else if ($data > 0 && $data < 35) {
            $hasil_ALT = "kadar ALT normal";
        } else if ($data > 35) {
            $hasil_ALT = "kadar ALT di atas normal";
        } else {
            $hasil_ALT = "data eror";
        }
        return $hasil_ALT;
    }
    
    function ALP ($data) {
        if (empty($data)) {
            $hasil_ALP="data tidak diinputkan";
        } else if ($data < 30) {
            $hasil_ALP = "kadar ALP di bawah normal";
        } else if ($data > 120) {
            $hasil_ALP = "kadar ALP di atas normal";
        } else {
            $hasil_ALP = "kadar ALP normal";
        }
        return $hasil_ALP;
    }
    
    function GGT ($data) {
        if (empty($data)) {
            $hasil_GGT="data tidak diinputkan";
        } else if ($data > 0 && $data < 70) {
            $hasil_GGT = "kadar GGT normal";
        } else if ($data > 70) {
            $hasil_GGT = "kadar GGT di atas normal";
        } else {
            $hasil_GGT = "data eror";
        }
        return $hasil_GGT;  
    }
    
    function bilirubin_total ($data) {
        if (empty($data)) {
            $hasil_bilirubin_total="data tidak diinputkan";
        } else if ($data < 0.1) {
            $hasil_bilirubin_total = "kadar bilirubin total di bawah normal";
        } else if ($data > 1) {
            $hasil_bilirubin_total = "kadar bilirubin total di atas normal";
        } else {
            $hasil_bilirubin_total = "kadar bilirubin total normal";
        }
        return $hasil_bilirubin_total;
    }
    
    function bilirubin_direct ($data) {
        if (empty($data)) {
            $hasil_bilirubin_direct="data tidak diinputkan";
        } else if ($data > 0 && $data < 0.2) {
            $hasil_bilirubin_direct = "kadar bilirubin direct normal";
        } else if ($data > 0.2) {
            $hasil_bilirubin_direct = "kadar bilirubin direct di atas normal";
        } else {
            $hasil_bilirubin_direct = "data eror";
        }
        return $hasil_bilirubin_direct; 
    }
    
    function kolesterol_total ($data) {
        if (empty($data)) {
            $hasil_kolesterol_total="data tidak diinputkan";
        } else if ($data > 0 && $data < 200) {
            $hasil_kolesterol_total = "kadar kolesterol total normal";
        } else if ($data > 200) {
            $hasil_kolesterol_total = "kadar kolesterol total di atas normal";
        } else {
            $hasil_kolesterol_total = "data eror";
        }
        return $hasil_kolesterol_total;   
    }
    
    function LDL ($data) {
        if (empty($data)) {
            $hasil_LDL="data tidak diinputkan";
        } else if ($data < 70) {
            $hasil_LDL = "kadar LDL di bawah normal";
        } else if ($data > 100) {
            $hasil_LDL = "kadar LDL di atas normal";
        } else {
            $hasil_LDL = "kadar LDL normal";
        }
        return $hasil_LDL;  
    }
    
    function HDL ($data) {
        if (empty($data)) {
            $hasil_HDL="data tidak diinputkan";
        } else if ($data < 60) {
            $hasil_HDL = "kadar HDL di bawah normal";
        } else if ($data > 80) {
            $hasil_HDL = "kadar HDL di atas normal";
        } else {
            $hasil_HDL = "kadar HDL normal";
        }
        return $hasil_HDL;
    }
    
    function trigliserida_puasa ($data) {
        if (empty($data)) {
            $hasil_trigliserida_puasa="data tidak diinputkan";
        } else if ($data > 0 && $data < 150) {
            $hasil_trigliserida_puasa = "kadar trigliserida puasa normal";
        } else if ($data > 150) {
            $hasil_trigliserida_puasa = "kadar trigliserida puasa di atas normal";
        } else {
            $hasil_trigliserida_puasa = "data eror";
        }
        return $hasil_trigliserida_puasa;   
    }
    
    function CK($data) {
        if (empty($data)) {
            $hasil_CK="data tidak diinputkan";
        } else if ($data > 0 && $data < 150) {
            $hasil_CK = "kadar CK normal";
        } else if ($data > 150) {
            $hasil_CK = "kadar CK di atas normal";
        } else {
            $hasil_CK = "data eror";
        }
        return $hasil_CK;
    }
    
    function CK_MB ($data) {
        if (empty($data)) {
            $hasil_CK_MB="data tidak diinputkan";
        } else if ($data > 0 && $data < 12) {
            $hasil_CK_MB = "kadar CK-MB normal";
        } else if ($data > 12) {
            $hasil_CK_MB = "kadar CK-MB di atas normal";
        } else {
            $hasil_CK_MB = "data eror";
        }
        return $hasil_CK_MB;
    }
    
    function cTnl ($data) {
        if (empty($data)) {
            $hasil_cTnl="data tidak diinputkan";
        } else if ($data > 0 && $data < 1.5) {
           $hasil_cTnl = "kadar cTnl normal";
        } else if ($data > 1.5) {
            $hasil_cTnl = "kadar cTnl di atas normal";
        } else {
            $hasil_cTnl = "data eror";
        }
        return $hasil_cTnl;         
    }
    
    function myoglobin ($data) {
        if (empty($data)) {
            $hasil_myoglobin="data tidak diinputkan";
        } else if ($data > 0 && $data < 90) {
            $hasil_myoglobin = "kadar myoglobin normal";
        } else if ($data > 90) {
            $hasil_myoglobin = "kadar myoglobin di atas normal";
        } else {
            $hasil_myoglobin = "data eror";
        }
        return $hasil_myoglobin;
    }
    
    function homocystein ($data) {
        if (empty($data)) {
            $hasil_homocystein="data tidak diinputkan";
        } else if ($data < 4.6) {
            $hasil_homocystein = "kadar homocystein di bawah normal";
        } else if ($data > 11.9) {
            $hasil_homocystein = "kadar homocystein di atas normal";
        } else {
            $hasil_homocystein = "kadar homocystein normal";
        }
        return $hasil_homocystein;
    }
    
    function LDH ($data) {
        if (empty($data)) {
            $hasil_LDH="data tidak diinputkan";
        } else if ($data > 0 && $data < 200) {
            $hasil_LDH = "kadar LDH normal";
        } else if ($data > 200) {
            $hasil_LDH = "kadar LDH di atas normal";
        } else {
            $hasil_LDH = "data eror";
        }
        return $hasil_LDH;
    }
    
    function BNP ($data) {
        if (empty($data)) {
            $hasil_BNP="data tidak diinputkan";
        } else if ($data > 0 && $data < 100) {
            $hasil_BNP = "kadar BNP normal";
        } else if ($data > 100) {
            $hasil_BNP = "kadar BNP di atas normal";
        } else {
            $hasil_BNP = "data eror";
        }
        return $hasil_BNP;
    }
    
    //fungsi NT-proBNP akan menyusul
    function CRP ($data) {
        if (empty($data)) {
            $hasil_CRP="data tidak diinputkan";
        } else if ($data > 0 && $data < 1.6) {
            $hasil_CRP = "kadar CRP normal";
        } else if ($data > 1.6) {
            $hasil_CRP = "kadar CRP di atas normal";
        } else {
            $hasil_CRP = "data eror";
        }
        return $hasil_CRP;
    }
    
    function Hs_CRP($data) {
        if (empty($data)) {
            $hasil_hs_CRP="data tidak diinputkan";
        } else if ($data > 0 && $data < 2) {
            $hasil_hs_CRP = "kadar hs-CRP normal";
        } else if ($data > 2) {
            $hasil_hs_CRP = "kadar hs-CRP di atas normal";
        } else {
            $hasil_hs_CRP = "data eror";
        }
        return $hasil_hs_CRP;
    }
    
    function amylase($data) {
        if (empty($data)) {
            $hasil_amylase="data tidak diinputkan";
        } else if ($data < 35) {
            $hasil_amylase = "kadar amylase di bawah normal";
        } else if ($data > 120) {
            $hasil_amylase = "kadar amylase di atas normal";
        } else {
            $hasil_amylase = "kadar amylase normal";
        }
        return $hasil_amylase;  
    }
    
    function lipase ($data) {
        if (empty($data)) {
            $hasil_lipase="data tidak diinputkan";
        } else if ($data > 0 && $data < 160) {
            $hasil_lipase = "kadar lipase normal";
        } else if ($data > 160) {
            $hasil_lipase = "kadar lipase di atas normal";
        } else {
            $hasil_lipase = "data eror";
        }
        return $hasil_lipase;  
    }
    
    function PSA ($data) {
        if (empty($data)) {
            $hasil_PSA="data tidak diinputkan";
        } else if ($data > 0 && $data < 4) {
            $hasil_PSA = "kadar PSA normal";
        } else if ($data > 4) {
            $hasil_PSA = "kadar PSA di atas normal";
        } else {
            $hasil_PSA = "data eror";
        }
        return $hasil_PSA;
    }
    
    function TSH($data) {
        if (empty($data)) {
            $hasil_TSH="data tidak diinputkan";
        } else if ($data > 0.4 && $data < 5) {
            $hasil_TSH = "kadar TSH normal";
        } else if ($data > 5) {
            $hasil_TSH = "kadar TSH di atas normal";
        } else {
            $hasil_TSH = "data eror";
        }
        return $hasil_TSH;
    }
    
    function procalcitonin($data) {
        if (empty($data)) {
            $hasil_procalcitonin="data tidak diinputkan";
        } else if ($data > 0 && $data < 0.5) {
            $hasil_procalcitonin = "kadar procalcitonin normal";
        } else if ($data > 0.5) {
            $hasil_procalcitonin = "kadar procalcitonin di atas normal";
        } else {
            $hasil_procalcitonin = "data eror";
        }
        return $hasil_procalcitonin;
    }

    //fungsi data hematologi

    function RBC_count($jenis_kelamin, $data) {
        if (empty($data)) {
            $hasil_RBC="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<4.3) {
                    $hasil_RBC="RBC di bawah normal";
                } else if ($data>5.9) {
                    $hasil_RBC="RBC di atas normal";
                } else {
                    $hasil_RBC="RBC normal";
                }
        } else if ($jenis_kelamin="perempuan") {
                if($data<3.5) {
                    $hasil_RBC="RBC di bawah normal";
                } else if ($data>5) {
                    $hasil_RBC="RBC di atas normal";
                } else {
                    $hasil_RBC="RBC normal";
                }
            } 
        }
        return $hasil_RBC;
    }

    function Hct($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_hematokrit="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<39) {
                    $hasil_hematokrit="hematokrit di bawah normal";
                } else if ($data>49) {
                    $hasil_hematokrit="hematokrit di atas normal";
                } else {
                    $hasil_hematokrit="hematokrit normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<33) {
                    $hasil_hematokrit="hematokrit di bawah normal";
                } else if ($data>43) {
                    $hasil_hematokrit="hematokrit di atas normal";
                } else {
                    $hasil_hematokrit="hematokrit normal";
                }
            }
        } 
        return $hasil_hematokrit;
    }

    function Hgb($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_hemoglobin="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<14) {
                    $hasil_hemoglobin="hemoglobin di bawah normal";
                } else if ($data>18) {
                    $hasil_hemoglobin="hemoglobin di atas normal";
                } else {
                    $hasil_hemoglobin="hemoglobin normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<12) {
                    $hasil_hemoglobin="hemoglobin di bawah normal";
                } else if ($data>16) {
                    $hasil_hemoglobin="hemoglobin di atas normal";
                } else {
                    $hasil_hemoglobin="hemoglobin normal";
                }
            }  
        }
        return $hasil_hemoglobin;
    }

    function MCV($data) {
        if(empty($data)) {
            $hasil_MCV="data tidak diinputkan";
        } else if($data<76) {
            $hasil_MCV="MCV di bawah normal";
        } else if ($data>100) {
            $hasil_MCV="MCV di atas normal";
        } else {
            $hasil_MCV="MCV normal";
        }
        return $hasil_MCV;
    }

    function MCH($data) {
        if(empty($data)) {
            $hasil_MCH="data tidak diinputkan";
        } else if($data<27) {
            $hasil_MCH="MCH di bawah normal";
        } else if ($data>33) {
            $hasil_MCH="MCH di atas normal";
        } else {
            $hasil_MCH="MCH normal";
        }
        return $hasil_MCH;
    }

    function MCHC($data) {
        if(empty($data)) {
            $hasil_MCHC="data tidak diinputkan";
        } else if($data<33) {
            $hasil_MCHC="MCHC di bawah normal";
        } else if ($data>37) {
            $hasil_MCHC="MCHC di atas normal";
        } else {
            $hasil_MCHC="MCHC normal";
        }
        return $hasil_MCHC;
    }

    function ESR($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_ESR="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<=20&&$data>0) {
                    $hasil_ESR="ESR normal";
                } else if ($data>20) {
                    $hasil_ESR="ESR di atas normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<=30&&$data>0) {
                    $hasil_ESR="ESR normal";
                } else if ($data>30) {
                    $hasil_ESR="ESR di atas normal";
                }
            }
        }
        return $hasil_ESR;
    }

    function WBC_count($data) {
        if(empty($data)) {
            $hasil_WBC="data tidak diinputkan";
        } else if($data<4) {
            $hasil_WBC="WBC di bawah normal";
        } else if ($data>11) {
            $hasil_WBC="WBC di atas normal";
        } else {
            $hasil_WBC="WBC normal";
        }
        return $hasil_WBC;
    }

    function limfosit($data) {
        if(empty($data)) {
            $hasil_limfosit="data tidak diinputkan";
        } else if($data<20) {
            $hasil_limfosit="limfosit di bawah normal";
        } else if ($data>40) {
            $hasil_limfosit="limfosit di atas normal";
        } else {
            $hasil_limfosit="limfosit normal";
        }
        return $hasil_limfosit;
    }

    function platelet($data) {
        if(empty($data)) {
            $hasil_platelet="data tidak diinputkan";
        } else if($data<150) {
            $hasil_platelet="platelet di bawah normal";
        } else if ($data>450) {
            $hasil_platelet="platelet di atas normal";
        } else {
            $hasil_platelet="platelet normal";
        }
        return $hasil_platelet;
    }

    function monosit($data) {
        if(empty($data)) {
            $hasil_monosit="data tidak diinputkan";
        } else if($data>0&&$data<=11) {
            $hasil_monosit="monosit normal";
        } else if ($data>11) {
            $hasil_monosit="monosit di atas normal";
        } 
        return $hasil_monosit;
    }

    function eosinofil($data) {
        if(empty($data)) {
            $hasil_eosinofil="data tidak diinputkan";
        } else if($data>0 && $data<=8) {
            $hasil_eosinofil="eosinofil normal";
        } else if ($data>8) {
            $hasil_eosinofil="eosinofil di atas normal";
        } 
        return $hasil_eosinofil;
    }

    function basofil($data) {
        if(empty($data)) {
            $hasil_basofil="data tidak diinputkan";
        } else if($data>0&&$data<=3) {
            $hasil_basofil="basofil normal";
        } else if ($data>3) {
            $hasil_basofil="basofil di atas normal";
        } 
        return $hasil_basofil;
    }

    function Fe($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_Fe="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<80) {
                    $hasil_Fe="Kadar Fe di bawah normal";
                } else if ($data>180) {
                    $hasil_Fe="Kadar Fe di atas normal";
                } else {
                    $hasil_Fe="Kadar Fe normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<60) {
                    $hasil_Fe="Kadar Fe di bawah normal";
                } else if ($data>160) {
                    $hasil_Fe="Kadar Fe di atas normal";
                } else {
                    $hasil_Fe="Kadar Fe normal";
                }
            }
        }
        return $hasil_Fe;
    }

    function neutrofil($data) {
        if(empty($data)) {
            $hasil_neutrofil="data tidak diinputkan";
        } else if($data<40) {
            $hasil_neutrofil="neutrofil di bawah normal";
        } else if ($data>70) {
            $hasil_neutrofil="neutrofil di atas normal";
        } else {
            $hasil_neutrofil="neutrofil normal";
        }
        return $hasil_neutrofil;
    }

    //fungsi untuk assesment data lab

    function keterangan_natrium($data){
        if (empty($data)) {
            $hasil_natrium="data tidak diinputkan";
        } else if ($data<135) {
            $hasil_natrium="Kadar natrum di bawah normal, biasanya disebabkan oleh kelebihan air di dalam tubuh, seperti yang disebabkan oleh penggunaan obat antidiuretik dan dapat diatasi dengan pembatasan minum";
        } else if ($data>145) {
            $hasil_natrium="Kadar natrium di atas normal, biasanya terjadi pada saat dehidrasi berat, penderita diabetes insipidus, dan hilangnya natrium melalui ginjal dan saluran cerna";
        } else {
            $hasil_natrium="kadar natrium normal";
        }
        return $hasil_natrium;
    }

    function keterangan_kalium ($data) {
        if (empty($data)){
            $hasil_kalium="data tidak diinputkan";
        } else if ($data <3.5) {
                $hasil_kalium = "Kadar kalium di bawah normal, bisa turun karena disebabkan oleh penggunaan obat diuretik, alaklosis, muntah dan diare";
        } else if ($data > 5) {
                $hasil_kalium = "kadar kalium di atas normal, bisa disebabkan oleh disfungsi ginjal, asidosis, penggunaan diuretik hemat kalium, hemolisis, luka bakar";
        } else {
            $hasil_kalium = "kadar kalium normal";
        }
       
        return $hasil_kalium;
    } 
    
    
    function keterangan_klorida ($data) {
        if (empty($data)) {
            $hasil_klorida="data tidak diinputkan";
        }    
        else if ($data < 95) {
            $hasil_klorida = "kadar klorida di bawah normal, bisa disebabkan oleh kehilangan cairan kaya klorida di sistem pencernaan seperti saat muntah, diare, dan overdiuresis";
        } else if ($data > 105) {
            $hasil_klorida = "kadar klorida di atas normal";
        } else {
            $hasil_klorida = "kadar klorida normal";
            }
        return $hasil_klorida;
    }
    
    function keterangan_BUN ($data) {
        if (empty($data)) {
            $hasil_BUN="data tidak diinputkan";
        } else if ($data < 8) {
                $hasil_BUN = "kadar BUN di bawah normal";
        } else if ($data > 20) {
                $hasil_BUN = "kadar BUN di atas normal, disebabkan oleh disfungsi ginjal, intake protein yang tinggi, pendarahan sistem pencernaan";
            } else {
                $hasil_BUN = "kadar BUN normal";
            }
        return $hasil_BUN;
     }
    
    function keterangan_creatinine($data) {
        if (empty($data)) {
            $hasil_creatinine="data tidak diinputkan";
        }
        else if ($data < 0.6) {
            $hasil_creatinine = "kadar creatinine di bawah normal";
        } else if ($data > 1.2) {
            $hasil_creatinine = "Creatinine di atas normal, bisa disebabkan oleh gangguan fungsi ginjal atau disfungsi ginjal";
            } else {
                $hasil_creatinine = "kadar creatinine normal";
            }
        return $hasil_creatinine;
     }
    
    function keterangan_creatinine_clearance($data) {
        if (empty($data)) {
            $hasil_creatinine_clearance="data tidak diinputkan";
        } else if ($data < 90) {
            $hasil_creatinine_clearance = "CrCl di bawah normal, terjadi pada gagal fungsi ginjal";
        } else if ($data > 130) {
            $hasil_creatinine_clearance = "Creatinine clearance di atas normal";
        } else {
            $hasil_creatinine_clearance = "Creatinine clearance normal";
        }
        return $hasil_creatinine_clearance;
     }
    
    function keterangan_GFR ($data) {
        if (empty($data)) {
            $hasil_GFR="data tidak diinputkan";
        }else if ($data < 90) {
            $hasil_GFR = "GFR di bawah normal";
        } else if ($data > 120) {
            $hasil_GFR = "GFR di atas normal";
        } else {  
          $hasil_GFR = "GFR normal";
        }
        return $hasil_GFR;
    }
    
    function keterangan_cystatin_c ($data) {
        if (empty($data)) {
            $hasil_cystatin_c="data tidak diinputkan";
        } else if ($data < 1) {
            $hasil_cystatin_c = "kadar Cystatin C normal";
        } else {
            $hasil_cystatin_c = "kadar cystatin C di atas normal/atau tidak normal";
        }
        return $hasil_cystatin_c;
    } 
    
    function keterangan_glukosa_puasa ($data) {
        if (empty($data)) {
            $hasil_glukosa_puasa="data tidak diinputkan";
        } else if ($data < 70) {
            $hasil_glukosa_puasa = "kadar glukosa puasa di bawah normal";
        } else if ($data > 99) {
            $hasil_glukosa_puasa = "kadar glukosa puasa di atas normal, bisa terjadi pada pasien diabetes atau oleh penggunaan kotikosteroid adrenal";
        } else {
            $hasil_glukosa_puasa = "kadar glukosa puasa normal";
            }       
        return $hasil_glukosa_puasa;
    }
    
    function keterangan_HbA1C ($data) {
        if (empty($data)) {
            $hasil_HbA1C="data tidak diinputkan";
        } else if ($data < 4) {
            $hasil_HbA1C = "kadar HbA1C di bawah normal";
        } else if ($data > 5.6) {
            $hasil_HbA1C = "kadar HbA1C di atas normal";
        } else {
            $hasil_HbA1C = "kadar HbA1C normal";            }
        return $hasil_HbA1C;
    }
    
    function keterangan_kalsium_total ($data) {
        if (empty($data)) {
            $hasil_kalsium_total="data tidak diinputkan";
        } else if ($data < 8.5) {
            $hasil_kalsium_total = "kadar kalsium total di bawah normal, bisa disebabkan oleh hipotiroidisme, penggunaan diuretik loop, defisiensi vitamin D";
        } else if ($data > 10.5) {
            $hasil_kalsium_total = "kadar kalsium total di bawah normal, bisa terjadi pada hipertiroidisme";
        } else {
           $hasil_kalsium_total = "kadar kalsium total normal";
        }
        return $hasil_kalsium_total;
    }
    
    function keterangan_kalsium_bebas ($data) {
        if (empty($data)) {
            $hasil_kalsium_bebas="data tidak diinputkan";
        } else if ($data < 4.5) {
            $hasil_kalsium_bebas = "kadar kalsium bebas di bawah normal";
        } else if ($data > 5.6) {
            $hasil_kalsium_bebas = "kadar kalsium bebas di atas normal";
        } else {
            $hasil_kalsium_bebas = "kadar kalsium bebas normal";
        }
        return $hasil_kalsium_bebas;
    }
    
    function keterangan_magnesium ($data) {
        if (empty($data)) {
            $hasil_magnesium="data tidak diinputkan";
        } else if ($data < 1.5) {
            $hasil_magnesium = "kadar magnesium di bawah normal, bisa terjadi pada malabsorbsi, diare hebat, konsumsi alkohol, pankreatitis, penggunaan diuretik, hiperaldosteronisme";
        } else if ($data > 2.4) {
            $hasil_magnesium = "kadar magnesium di atas normal, bisa terjadi pada gagal ginjal, hipertiroidisme, dan konsumsi antasida kaya magnesium";
        } else {
            $hasil_magnesium = "kadar magnesium normal";
        }
        return $hasil_magnesium;
    }
    
    function keterangan_fosfat ($data) {
        if (empty($data)) {
            $hasil_fosfat="data tidak diinputkan";
        } else if ($data < 2.5) {
            $hasil_fosfat = "kadar fosfat di bawah normal, bisa disebabkan oleh hiperkalemia, malabsorbsi, dan hilang melalui ginjal";
        } else if ($data > 4.5) {
            $hasil_fosfat = "kadar fosfat bisa tinggi karena gangguan fungsi ginjal, hipervitaminosis D, hipokalemia, hipoparatiroidisme";
        } else {
            $hasil_fosfat = "kadar fosfat normal";
        }
        return $hasil_fosfat;
    }
    
    function keterangan_asam_urat ($data) {
        if (empty($data)) {
            $hasil_asam_urat="data tidak diinputkan";
        } else if ($data < 7) {
            $hasil_asam_urat = "kadar asam urat normal";
        } else {
            $hasil_asam_urat = "kadar asam urat tinggi bisa terjadi pada gout, neoplastic, atau penyakit myeloproliferatif, dan penggunaan obat-obat diuretik, niacin, salisilat dosis rendah, dan siklosporin";
        }
        return $hasil_asam_urat;
    
    }
    
    function keterangan_prealbumin ($data) {
        if (empty($data)) {
            $hasil_prealbumin="data tidak diinputkan";
        }
        else if ($data < 15) {
            $hasil_prealbumin = "kadar prealbumin di bawah normal";
        } else if ($data > 36) {
           $hasil_prealbumin = "kadar prealbumin di atas normal";
        } else {
            $hasil_prealbumin = "kadar prealbumin normal";
        }        
        return $hasil_prealbumin;
    }
    
    function keterangan_albumin ($data) {
        if (empty($data)) {
            $hasil_albumin="data tidak diinputkan";
        }
        else if ($data < 3.3) {
            $hasil_albumin = "terjadi pada penyakit hati, malnutrisi, ascites, pendarahan";
        } else if ($data > 4.8) {
            $hasil_albumin = "kadar albumin di atas normal";
        } else {
            $hasil_albumin = "kadar albumin normal";
        }
        return $hasil_albumin;
    }
    
    function keterangan_globulin ($data) {
        if (empty($data)) {
            $hasil_globulin="data tidak diinputkan";
        }
        else if ($data < 2.3) {
            $hasil_globulin = "kadar globulin di bawah normal";
        } else if ($data > 3.5) {
            $hasil_globulin = "terjadi pada saat infeksi kronis, rheumatoid arthritis, dan multiple myeloma ";
        } else {
            $hasil_globulin = "kadar globulin normal";
        }
        return $hasil_globulin;
    }
    
    function keterangan_AST ($data) {
        if (empty($data)) {
            $hasil_AST="data tidak diinputkan";
        }
        else if ($data > 0 && $data < 35) {
            $hasil_AST = "kadar AST normal";
        } else if ($data > 35) {
            $hasil_AST = "kadar AST di atas normal, bisa disebabkan oleh kerusakan hati";
        } else {
                $hasil_AST = "data eror";
        }
        return $hasil_AST;
    }
    
    function keterangan_ALT ($data) {
        if (empty($data)) {
            $hasil_ALT="data tidak diinputkan";
        } else if ($data > 0 && $data < 35) {
            $hasil_ALT = "kadar ALT normal";
        } else if ($data > 35) {
            $hasil_ALT = "kadar ALT di atas normal";
        } else {
            $hasil_ALT = "data eror";
        }
        return $hasil_ALT;
    }
    
    function keterangan_ALP ($data) {
        if (empty($data)) {
            $hasil_ALP="data tidak diinputkan";
        } else if ($data < 30) {
            $hasil_ALP = "kadar ALP di bawah normal";
        } else if ($data > 120) {
            $hasil_ALP = "kadar ALP di atas normal, terjadi pada obstruksi saluran empedu, penyakit hati obstruktif, pertumbuhan tulang yang cepat (penyakit Pejet), dan kehamilan";
        } else {
            $hasil_ALP = "kadar ALP normal";
        }
        return $hasil_ALP;
    }
    
    function keterangan_GGT ($data) {
        if (empty($data)) {
            $hasil_GGT="data tidak diinputkan";
        } else if ($data > 0 && $data < 70) {
            $hasil_GGT = "kadar GGT normal";
        } else if ($data > 70) {
            $hasil_GGT = "kadar GGT di atas normal";
        } else {
            $hasil_GGT = "data eror";
        }
        return $hasil_GGT;  
    }
    
    function keterangan_bilirubin_total ($data) {
        if (empty($data)) {
            $hasil_bilirubin_total="data tidak diinputkan";
        } else if ($data < 0.1) {
            $hasil_bilirubin_total = "kadar bilirubin total di bawah normal";
        } else if ($data > 1) {
            $hasil_bilirubin_total = "kadar bilirubin total di atas normal, terjadi saat hemolisis, kolestasis, dan kerusakan hati";
        } else {
            $hasil_bilirubin_total = "kadar bilirubin total normal";
        }
        return $hasil_bilirubin_total;
    }
    
    function keterangan_bilirubin_direct ($data) {
        if (empty($data)) {
            $hasil_bilirubin_direct="data tidak diinputkan";
        } else if ($data > 0 && $data < 0.2) {
            $hasil_bilirubin_direct = "kadar bilirubin direct normal";
        } else if ($data > 0.2) {
            $hasil_bilirubin_direct = "kadar bilirubin direct di atas normal";
        } else {
            $hasil_bilirubin_direct = "data eror";
        }
        return $hasil_bilirubin_direct; 
    }
    
    function keterangan_kolesterol_total ($data) {
        if (empty($data)) {
            $hasil_kolesterol_total="data tidak diinputkan";
        } else if ($data > 0 && $data < 200) {
            $hasil_kolesterol_total = "kadar kolesterol total normal";
        } else if ($data > 200) {
            $hasil_kolesterol_total = "kadar kolesterol total di atas normal";
        } else {
            $hasil_kolesterol_total = "data eror";
        }
        return $hasil_kolesterol_total;   
    }
    
    function keterangan_LDL ($data) {
        if (empty($data)) {
            $hasil_LDL="data tidak diinputkan";
        } else if ($data < 70) {
            $hasil_LDL = "kadar LDL di bawah normal";
        } else if ($data > 100) {
            $hasil_LDL = "kadar LDL di atas normal";
        } else {
            $hasil_LDL = "kadar LDL normal";
        }
        return $hasil_LDL;  
    }
    
    function keterangan_HDL ($data) {
        if (empty($data)) {
            $hasil_HDL="data tidak diinputkan";
        } else if ($data < 60) {
            $hasil_HDL = "kadar HDL di bawah normal";
        } else if ($data > 80) {
            $hasil_HDL = "kadar HDL di atas normal";
        } else {
            $hasil_HDL = "kadar HDL normal";
        }
        return $hasil_HDL;
    }
    
    function keterangan_trigliserida_puasa ($data) {
        if (empty($data)) {
            $hasil_trigliserida_puasa="data tidak diinputkan";
        } else if ($data > 0 && $data < 150) {
            $hasil_trigliserida_puasa = "kadar trigliserida puasa normal";
        } else if ($data > 150) {
            $hasil_trigliserida_puasa = "kadar trigliserida puasa di atas normal, bisa disebabkan oleh konsumsi alkohol, makanan mengandung lemak jenuh, penggunaan obat-obatan seperti propranolol, diuretik, dan obat kontrasepsi oral";
        } else {
            $hasil_trigliserida_puasa = "data eror";
        }
        return $hasil_trigliserida_puasa;   
    }
    
    function keterangan_CK($data) {
        if (empty($data)) {
            $hasil_CK="data tidak diinputkan";
        } else if ($data > 0 && $data < 150) {
            $hasil_CK = "kadar CK normal";
        } else if ($data > 150) {
            $hasil_CK = "kadar CK di atas normal, disebabkan oleh infark miokard, episode psychotic akut";
        } else {
            $hasil_CK = "data eror";
        }
        return $hasil_CK;
    }
    
    function keterangan_CK_MB ($data) {
        if (empty($data)) {
            $hasil_CK_MB="data tidak diinputkan";
        } else if ($data > 0 && $data < 12) {
            $hasil_CK_MB = "kadar CK-MB normal";
        } else if ($data > 12) {
            $hasil_CK_MB = "kadar CK-MB di atas normal";
        } else {
            $hasil_CK_MB = "data eror";
        }
        return $hasil_CK_MB;
    }
    
    function keterangan_cTnl ($data) {
        if (empty($data)) {
            $hasil_cTnl="data tidak diinputkan";
        } else if ($data > 0 && $data < 1.5) {
           $hasil_cTnl = "kadar cTnl normal";
        } else if ($data > 1.5) {
            $hasil_cTnl = "kadar cTnl di atas normal";
        } else {
            $hasil_cTnl = "data eror";
        }
        return $hasil_cTnl;         
    }
    
    function keterangan_myoglobin ($data) {
        if (empty($data)) {
            $hasil_myoglobin="data tidak diinputkan";
        } else if ($data > 0 && $data < 90) {
            $hasil_myoglobin = "kadar myoglobin normal";
        } else if ($data > 90) {
            $hasil_myoglobin = "kadar myoglobin di atas normal";
        } else {
            $hasil_myoglobin = "data eror";
        }
        return $hasil_myoglobin;
    }
    
    function keterangan_homocystein ($data) {
        if (empty($data)) {
            $hasil_homocystein="data tidak diinputkan";
        } else if ($data < 4.6) {
            $hasil_homocystein = "kadar homocystein di bawah normal";
        } else if ($data > 11.9) {
            $hasil_homocystein = "kadar homocystein di atas normal";
        } else {
            $hasil_homocystein = "kadar homocystein normal";
        }
        return $hasil_homocystein;
    }
    
    function keterangan_LDH ($data) {
        if (empty($data)) {
            $hasil_LDH="data tidak diinputkan";
        } else if ($data > 0 && $data < 200) {
            $hasil_LDH = "kadar LDH normal";
        } else if ($data > 200) {
            $hasil_LDH = "kadar LDH di atas normal";
        } else {
            $hasil_LDH = "data eror";
        }
        return $hasil_LDH;
    }
    
    function keterangan_BNP ($data) {
        if (empty($data)) {
            $hasil_BNP="data tidak diinputkan";
        } else if ($data > 0 && $data < 100) {
            $hasil_BNP = "kadar BNP normal";
        } else if ($data > 100) {
            $hasil_BNP = "kadar BNP di atas normal";
        } else {
            $hasil_BNP = "data eror";
        }
        return $hasil_BNP;
    }
    
    //fungsi NT-proBNP akan menyusul
    function keterangan_CRP ($data) {
        if (empty($data)) {
            $hasil_CRP="data tidak diinputkan";
        } else if ($data > 0 && $data < 1.6) {
            $hasil_CRP = "kadar CRP normal";
        } else if ($data > 1.6) {
            $hasil_CRP = "kadar CRP di atas normal";
        } else {
            $hasil_CRP = "data eror";
        }
        return $hasil_CRP;
    }
    
    function keterangan_Hs_CRP($data) {
        if (empty($data)) {
            $hasil_hs_CRP="data tidak diinputkan";
        } else if ($data > 0 && $data < 2) {
            $hasil_hs_CRP = "kadar hs-CRP normal";
        } else if ($data > 2) {
            $hasil_hs_CRP = "kadar hs-CRP di atas normal";
        } else {
            $hasil_hs_CRP = "data eror";
        }
        return $hasil_hs_CRP;
    }
    
    function keterangan_amylase($data) {
        if (empty($data)) {
            $hasil_amylase="data tidak diinputkan";
        } else if ($data < 35) {
            $hasil_amylase = "kadar amylase di bawah normal";
        } else if ($data > 120) {
            $hasil_amylase = "kadar amylase di atas normal, terjadi pada pankreatitis";
        } else {
            $hasil_amylase = "kadar amylase normal";
        }
        return $hasil_amylase;  
    }
    
    function keterangan_lipase ($data) {
        if (empty($data)) {
            $hasil_lipase="data tidak diinputkan";
        } else if ($data > 0 && $data < 160) {
            $hasil_lipase = "kadar lipase normal";
        } else if ($data > 160) {
            $hasil_lipase = "kadar lipase di atas normal, saat pangkreatitis akut";
        } else {
            $hasil_lipase = "data eror";
        }
        return $hasil_lipase;  
    }
    
    function keterangan_PSA ($data) {
        if (empty($data)) {
            $hasil_PSA="data tidak diinputkan";
        } else if ($data > 0 && $data < 4) {
            $hasil_PSA = "kadar PSA normal";
        } else if ($data > 4) {
            $hasil_PSA = "kadar PSA di atas normal, terjadi pada benign prostatik hipertrophy (BPH), dan kanker prostat";
        } else {
            $hasil_PSA = "data eror";
        }
        return $hasil_PSA;
    }
    
    function keterangan_TSH($data) {
        if (empty($data)) {
            $hasil_TSH="data tidak diinputkan";
        } else if ($data > 0.4 && $data < 5) {
            $hasil_TSH = "kadar TSH normal";
        } else if ($data > 5) {
            $hasil_TSH = "kadar TSH di atas normal";
        } else {
            $hasil_TSH = "data eror";
        }
        return $hasil_TSH;
    }
    
    function keterangan_procalcitonin($data) {
        if (empty($data)) {
            $hasil_procalcitonin="data tidak diinputkan";
        } else if ($data > 0 && $data < 0.5) {
            $hasil_procalcitonin = "kadar procalcitonin normal";
        } else if ($data > 0.5) {
            $hasil_procalcitonin = "kadar procalcitonin di atas normal, terjadi saat terjadi infeksi bakteri";
        } else {
            $hasil_procalcitonin = "data eror";
        }
        return $hasil_procalcitonin;
    }

    //fungsi data hematologi

    function keterangan_RBC_count($jenis_kelamin, $data) {
        if (empty($data)) {
            $hasil_RBC="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<4.3) {
                    $hasil_RBC="RBC di bawah normal, saat anemia, pendarahan, dan hemolisis";
                } else if ($data>5.9) {
                    $hasil_RBC="RBC di atas normal, saat menderita polychythemia, dan hipoksia kronis";
                } else {
                    $hasil_RBC="RBC normal";
                }
        } else if ($jenis_kelamin="perempuan") {
                if($data<3.5) {
                    $hasil_RBC="RBC di bawah normal";
                } else if ($data>5) {
                    $hasil_RBC="RBC di atas normal";
                } else {
                    $hasil_RBC="RBC normal";
                }
            } 
        }
        return $hasil_RBC;
    }

    function keterangan_Hct($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_hematokrit="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<39) {
                    $hasil_hematokrit="hematokrit di bawah normal";
                } else if ($data>49) {
                    $hasil_hematokrit="hematokrit di atas normal";
                } else {
                    $hasil_hematokrit="hematokrit normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<33) {
                    $hasil_hematokrit="hematokrit di bawah normal";
                } else if ($data>43) {
                    $hasil_hematokrit="hematokrit di atas normal";
                } else {
                    $hasil_hematokrit="hematokrit normal";
                }
            }
        } 
        return $hasil_hematokrit;
    }

    function keterangan_Hgb($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_hemoglobin="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<14) {
                    $hasil_hemoglobin="hemoglobin di bawah normal";
                } else if ($data>18) {
                    $hasil_hemoglobin="hemoglobin di atas normal";
                } else {
                    $hasil_hemoglobin="hemoglobin normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<12) {
                    $hasil_hemoglobin="hemoglobin di bawah normal";
                } else if ($data>16) {
                    $hasil_hemoglobin="hemoglobin di atas normal";
                } else {
                    $hasil_hemoglobin="hemoglobin normal";
                }
            }  
        }
        return $hasil_hemoglobin;
    }

    function keterangan_MCV($data) {
        if(empty($data)) {
            $hasil_MCV="data tidak diinputkan";
        } else if($data<76) {
            $hasil_MCV="MCV di bawah normal";
        } else if ($data>100) {
            $hasil_MCV="MCV di atas normal";
        } else {
            $hasil_MCV="MCV normal";
        }
        return $hasil_MCV;
    }

    function keterangan_MCH($data) {
        if(empty($data)) {
            $hasil_MCH="data tidak diinputkan";
        } else if($data<27) {
            $hasil_MCH="MCH di bawah normal";
        } else if ($data>33) {
            $hasil_MCH="MCH di atas normal";
        } else {
            $hasil_MCH="MCH normal";
        }
        return $hasil_MCH;
    }

    function keterangan_MCHC($data) {
        if(empty($data)) {
            $hasil_MCHC="data tidak diinputkan";
        } else if($data<33) {
            $hasil_MCHC="MCHC di bawah normal";
        } else if ($data>37) {
            $hasil_MCHC="MCHC di atas normal";
        } else {
            $hasil_MCHC="MCHC normal";
        }
        return $hasil_MCHC;
    }

    function keterangan_ESR($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_ESR="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<=20&&$data>0) {
                    $hasil_ESR="ESR normal";
                } else if ($data>20) {
                    $hasil_ESR="ESR di atas normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<=30&&$data>0) {
                    $hasil_ESR="ESR normal";
                } else if ($data>30) {
                    $hasil_ESR="ESR di atas normal";
                }
            }
        }
        return $hasil_ESR;
    }

    function keterangan_WBC_count($data) {
        if(empty($data)) {
            $hasil_WBC="data tidak diinputkan";
        } else if($data<4) {
            $hasil_WBC="WBC di bawah normal";
        } else if ($data>11) {
            $hasil_WBC="WBC di atas normal";
        } else {
            $hasil_WBC="WBC normal";
        }
        return $hasil_WBC;
    }

    function keterangan_limfosit($data) {
        if(empty($data)) {
            $hasil_limfosit="data tidak diinputkan";
        } else if($data<20) {
            $hasil_limfosit="limfosit di bawah normal";
        } else if ($data>40) {
            $hasil_limfosit="limfosit di atas normal";
        } else {
            $hasil_limfosit="limfosit normal";
        }
        return $hasil_limfosit;
    }

    function keterangan_platelet($data) {
        if(empty($data)) {
            $hasil_platelet="data tidak diinputkan";
        } else if($data<150) {
            $hasil_platelet="platelet di bawah normal";
        } else if ($data>450) {
            $hasil_platelet="platelet di atas normal";
        } else {
            $hasil_platelet="platelet normal";
        }
        return $hasil_platelet;
    }

    function keterangan_monosit($data) {
        if(empty($data)) {
            $hasil_monosit="data tidak diinputkan";
        } else if($data>0&&$data<=11) {
            $hasil_monosit="monosit normal";
        } else if ($data>11) {
            $hasil_monosit="monosit di atas normal";
        } 
        return $hasil_monosit;
    }

    function keterangan_eosinofil($data) {
        if(empty($data)) {
            $hasil_eosinofil="data tidak diinputkan";
        } else if($data>0 && $data<=8) {
            $hasil_eosinofil="eosinofil normal";
        } else if ($data>8) {
            $hasil_eosinofil="eosinofil di atas normal";
        } 
        return $hasil_eosinofil;
    }

    function keterangan_basofil($data) {
        if(empty($data)) {
            $hasil_basofil="data tidak diinputkan";
        } else if($data>0&&$data<=3) {
            $hasil_basofil="basofil normal";
        } else if ($data>3) {
            $hasil_basofil="basofil di atas normal";
        } 
        return $hasil_basofil;
    }

    function keterangan_Fe($jenis_kelamin, $data) {
        if(empty($data)) {
            $hasil_Fe="data tidak diinputkan";
        } else {
            if($jenis_kelamin="laki-laki") {
                if($data<80) {
                    $hasil_Fe="Kadar Fe di bawah normal";
                } else if ($data>180) {
                    $hasil_Fe="Kadar Fe di atas normal";
                } else {
                    $hasil_Fe="Kadar Fe normal";
                }
            } else if ($jenis_kelamin="perempuan") {
                if($data<60) {
                    $hasil_Fe="Kadar Fe di bawah normal";
                } else if ($data>160) {
                    $hasil_Fe="Kadar Fe di atas normal";
                } else {
                    $hasil_Fe="Kadar Fe normal";
                }
            }
        }
        return $hasil_Fe;
    }

    function keterangan_neutrofil($data) {
        if(empty($data)) {
            $hasil_neutrofil="data tidak diinputkan";
        } else if($data<40) {
            $hasil_neutrofil="neutrofil di bawah normal";
        } else if ($data>70) {
            $hasil_neutrofil="neutrofil di atas normal";
        } else {
            $hasil_neutrofil="neutrofil normal";
        }
        return $hasil_neutrofil;
    }


    

    




?>