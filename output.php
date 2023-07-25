<?php

require 'fungsi.php';
//menerima data pasien
$nama_pasien=$_POST["nama_pasien"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$usia=$_POST["usia"];
$keluhan_utama=$_POST["keluhan_utama"];
$riwayat_penyakit_sekarang=$_POST["riwayat_penyakit_sekarang"];
$merokok=$_POST["kebiasaan_merokok"];
$alkohol=$_POST["alkohol"];
$tidur=$_POST["tidur"];
$makan=$_POST["makan"];
$riwayat_pengobatan=$_POST["riwayat_pengobatan"];
$alergi=$_POST["alergi"];
$diagnosa=$_POST["diagnosa"];
//pemeriksaan fisik
$tinggi_badan=$_POST["tinggi_badan"];
$berat_badan=$_POST["berat_badan"];
$suhu_tubuh=suhu_tubuh($_POST["suhu_tubuh"]);
$denyut_nadi=denyut_nadi($_POST["denyut_nadi"]);
$laju_nafas=laju_nafas($_POST["laju_nafas"]);
$tekanan_darah=tekanan_darah($_POST["tekanan_darah_sistol"], $_POST["tekanan_darah_diastol"]);
//pemeriksaan laboratorium
//elektrolit
$natrium=natrium($_POST["natrium"]);
$nilai_natrium=$_POST["natrium"];
$kalium=kalium($_POST["kalium"]);
$CO2=CO2($_POST["CO2"]);
$klorida=klorida($_POST["klorida"]);
$BUN=BUN($_POST["BUN"]);
$creatinine=creatinine($_POST["creatinine"]);
$creatinine_clearance=creatinine_clearance($_POST["CrCl"]);
$GFR=GFR($_POST["GFR"]);
$cystatin_c=cystatin_c($_POST["cystatin_c"]);
$glukosa_puasa=glukosa_puasa($_POST["glukosa_puasa"]);
$HbA1C=HbA1C($_POST["HbA1C"]);
$kalsium_total=kalsium_total($_POST["kalsium_total"]);
$kalsium_bebas=kalsium_bebas($_POST["kalsium_bebas"]);
$magnesium=magnesium($_POST["magnesium"]);
$fosfat=fosfat($_POST["fosfat"]);
$asam_urat=asam_urat($_POST["asam_urat"]);
//protein
$prealbumin=prealbumin($_POST["prealbumin"]);
$albumin=albumin($_POST["albumin"]);
$globulin=globulin($_POST["globulin"]);
//fungsi hati
$AST=AST($_POST["AST"]);
$ALT=ALT($_POST["ALT"]);
$ALP=ALP($_POST["ALP"]);
$GGT=GGT($_POST["GGT"]);
$biliburin_total=bilirubin_total($_POST["bilirubin_total"]);
$bilirubin_direct=bilirubin_direct($_POST["bilirubin_direct"]);
//kolesterol
$kolesterol_total=kolesterol_total($_POST["kolesterol_total"]);
$LDL=LDL($_POST["LDL"]);
$HDL=HDL($_POST["HDL"]);
$trigliserida_puasa=trigliserida_puasa($_POST["trigliserida_puasa"]);
//cardiac marker
$CK=CK($_POST["CK"]);
$CK_MB=CK_MB($_POST["CK_MB"]);
$cTnl=cTnl($_POST["cTnl"]);
$myoglobin=myoglobin($_POST["myoglobin"]);
$homocystein=homocystein($_POST["homocystein"]);
$LDH=LDH($_POST["LDH"]);
$BNP=BNP($_POST["BNP"]);
$CRP=CRP($_POST["CRP"]);
$Hs_CRP=Hs_CRP($_POST["Hs_CRP"]);
//Miscellaneous
$amylase=amylase($_POST["amylase"]);
$lipase=lipase($_POST["lipase"]);
$PSA=PSA($_POST["PSA"]);
$TSH=TSH($_POST["TSH"]);
$procalcitonin=procalcitonin($_POST["procalcitonin"]);
//nama variable nilai data lab//
//elektrolit
$nilai_natrium=$_POST["natrium"];
$nilai_kalium=($_POST["kalium"]);
$nilai_CO2=($_POST["CO2"]);
$nilai_klorida=($_POST["klorida"]);
$nilai_BUN=($_POST["BUN"]);
$nilai_creatinine=($_POST["creatinine"]);
$nilai_creatinine_clearance=($_POST["CrCl"]);
$nilai_GFR=($_POST["GFR"]);
$nilai_cystatin_c=($_POST["cystatin_c"]);
$nilai_glukosa_puasa=($_POST["glukosa_puasa"]);
$nilai_HbA1C=($_POST["HbA1C"]);
$nilai_kalsium_total=($_POST["kalsium_total"]);
$nilai_kalsium_bebas=($_POST["kalsium_bebas"]);
$nilai_magnesium=($_POST["magnesium"]);
$nilai_fosfat=($_POST["fosfat"]);
$nilai_asam_urat=($_POST["asam_urat"]);
//protein
$nilai_prealbumin=($_POST["prealbumin"]);
$nilai_albumin=($_POST["albumin"]);
$nilai_globulin=($_POST["globulin"]);
//fungsi hati
$nilai_AST=($_POST["AST"]);
$nilai_ALT=($_POST["ALT"]);
$nilai_ALP=($_POST["ALP"]);
$nilai_GGT=($_POST["GGT"]);
$nilai_biliburin_total=($_POST["bilirubin_total"]);
$nilai_bilirubin_direct=($_POST["bilirubin_direct"]);
//kolesterol
$nilai_kolesterol_total=($_POST["kolesterol_total"]);
$nilai_LDL=($_POST["LDL"]);
$nilai_HDL=($_POST["HDL"]);
$nilai_trigliserida_puasa=($_POST["trigliserida_puasa"]);
//cardiac marker
$nilai_CK=($_POST["CK"]);
$nilai_CK_MB=($_POST["CK_MB"]);
$nilai_cTnl=($_POST["cTnl"]);
$nilai_myoglobin=($_POST["myoglobin"]);
$nilai_homocystein=($_POST["homocystein"]);
$nilai_LDH=($_POST["LDH"]);
$nilai_BNP=($_POST["BNP"]);
$nilai_CRP=($_POST["CRP"]);
$nilai_Hs_CRP=($_POST["Hs_CRP"]);
//Miscellaneous
$nilai_amylase=($_POST["amylase"]);
$nilai_lipase=($_POST["lipase"]);
$nilai_PSA=($_POST["PSA"]);
$nilai_TSH=($_POST["TSH"]);
$nilai_procalcitonin=($_POST["procalcitonin"]);
//data nama hematologi
$nilai_RBC_count=$_POST["RBC_count"];
$nilai_Hct=$_POST["Hct"];
$nilai_Hgb=$_POST["Hgb"];
$nilai_MCV=$_POST["MCV"];
$nilai_MCH=$_POST["MCH"];
$nilai_MCHC=$_POST["MCHC"];
$nilai_ESR=$_POST["ESR"];
$nilai_WBC_count=$_POST["WBC_count"];
$nilai_neutrofil=$_POST["neutrofil"];
$nilai_limfosit=$_POST["limfosit"];
$nilai_monosit=$_POST["monosit"];
$nilai_eosinofil=$_POST["eosinofil"];
$nilai_basofil=$_POST["basofil"];
$nilai_platelet=$_POST["platelet"];
$nilai_Fe=$_POST["Fe"];
//data fungsi hematologi
$RBC_count=RBC_count($jenis_kelamin,$nilai_RBC_count);
$Hct=Hct($jenis_kelamin,$nilai_Hct);
$Hgb=Hgb($jenis_kelamin,$nilai_Hgb);
$MCV=MCV($nilai_MCV);
$MCH=MCH($nilai_MCH);
$MCHC=MCHC($nilai_MCHC);
$ESR=ESR($jenis_kelamin,$nilai_ESR);
$WBC_count=WBC_count($jenis_kelamin,$nilai_WBC_count);
$limfosit=limfosit($nilai_limfosit);
$platelet=platelet($nilai_platelet);
$monosit=monosit($nilai_monosit);
$eosinofil=eosinofil($nilai_eosinofil);
$Fe=Fe($jenis_kelamin,$nilai_Fe);
$neutrofil=neutrofil($nilai_neutrofil);
$basofil=basofil($nilai_basofil);
//bagian keterangan data lab yang bisa digunakan pada bagian assesment
$keterangan_natrium=keterangan_natrium($_POST["natrium"]);
$nilai_natrium=$_POST["natrium"];
$keterangan_kalium=keterangan_kalium($_POST["kalium"]);
$keterangan_klorida=keterangan_klorida($_POST["klorida"]);
$keterangan_BUN=keterangan_BUN($_POST["BUN"]);
$keterangan_creatinine=keterangan_creatinine($_POST["creatinine"]);
$keterangan_creatinine_clearance=keterangan_creatinine_clearance($_POST["CrCl"]);
$keterangan_GFR=keterangan_GFR($_POST["GFR"]);
$keterangan_cystatin_c=keterangan_cystatin_c($_POST["cystatin_c"]);
$keterangan_glukosa_puasa=keterangan_glukosa_puasa($_POST["glukosa_puasa"]);
$keterangan_HbA1C=keterangan_HbA1C($_POST["HbA1C"]);
$keterangan_kalsium_total=keterangan_kalsium_total($_POST["kalsium_total"]);
$keterangan_kalsium_bebas=keterangan_kalsium_bebas($_POST["kalsium_bebas"]);
$keterangan_magnesium=keterangan_magnesium($_POST["magnesium"]);
$keterangan_fosfat=keterangan_fosfat($_POST["fosfat"]);
$keterangan_asam_urat=keterangan_asam_urat($_POST["asam_urat"]);
$keterangan_prealbumin=keterangan_prealbumin($_POST["prealbumin"]);
$keterangan_albumin=keterangan_albumin($_POST["albumin"]);
$keterangan_globulin=keterangan_globulin($_POST["globulin"]);
$keterangan_AST=keterangan_AST($_POST["AST"]);
$keterangan_ALT=keterangan_ALT($_POST["ALT"]);
$keterangan_ALP=keterangan_ALP($_POST["ALP"]);
$keterangan_GGT=keterangan_GGT($_POST["GGT"]);
$keterangan_bilirubin_total=keterangan_bilirubin_total($_POST["bilirubin_total"]);
$keterangan_bilirubin_direct=keterangan_bilirubin_direct($_POST["bilirubin_direct"]);
$keterangan_kolesterol_total=keterangan_kolesterol_total($_POST["kolesterol_total"]);
$keterangan_LDL=keterangan_LDL($_POST["LDL"]);
$keterangan_HDL=keterangan_HDL($_POST["HDL"]);
$keterangan_trigliserida_puasa=keterangan_trigliserida_puasa($_POST["trigliserida_puasa"]);
$keterangan_CK=keterangan_CK($_POST["CK"]);
$keterangan_CK_MB=keterangan_CK_MB($_POST["CK_MB"]);
$keterangan_cTnl=keterangan_cTnl($_POST["cTnl"]);
$keterangan_myoglobin=keterangan_myoglobin($_POST["myoglobin"]);
$keterangan_homocystein=keterangan_homocystein($_POST["homocystein"]);
$keterangan_LDH=keterangan_LDH($_POST["LDH"]);
$keterangan_BNP=keterangan_BNP($_POST["BNP"]);
$keterangan_CRP=keterangan_CRP($_POST["CRP"]);
$keterangan_Hs_CRP=keterangan_Hs_CRP($_POST["Hs_CRP"]);
$keterangan_amylase=keterangan_amylase($_POST["amylase"]);
$keterangan_lipase=keterangan_lipase($_POST["lipase"]);
$keterangan_PSA=keterangan_PSA($_POST["PSA"]);
$keterangan_TSH=keterangan_TSH($_POST["TSH"]);
$keterangan_procalcitonin=keterangan_procalcitonin($_POST["procalcitonin"]);
$keterangan_RBC_count=keterangan_RBC_count($jenis_kelamin,$nilai_RBC_count);
$keterangan_Hct=keterangan_Hct($jenis_kelamin,$nilai_Hct);
$keterangan_Hgb=keterangan_Hgb($jenis_kelamin,$nilai_Hgb);
$keterangan_MCV=keterangan_MCV($nilai_MCV);
$keterangan_MCH=keterangan_MCH($nilai_MCH);
$keterangan_MCHC=keterangan_MCHC($nilai_MCHC);
$keterangan_ESR=keterangan_ESR($jenis_kelamin,$nilai_ESR);
$keterangan_WBC_count=keterangan_WBC_count($jenis_kelamin,$nilai_WBC_count);
$keterangan_limfosit=keterangan_limfosit($nilai_limfosit);
$keterangan_platelet=keterangan_platelet($nilai_platelet);
$keterangan_monosit=keterangan_monosit($nilai_monosit);
$keterangan_eosinofil=keterangan_eosinofil($nilai_eosinofil);
$keterangan_Fe=keterangan_Fe($jenis_kelamin,$nilai_Fe);
$keterangan_neutrofil=keterangan_neutrofil($nilai_neutrofil);
$keterangan_basofil=keterangan_basofil($nilai_basofil);

//pengobatan yang diterima
//mendapatkan data nama obat
$nama_obat_1=$_POST["nama_obat_1"];
$nama_obat_2=$_POST["nama_obat_2"];
$nama_obat_3=$_POST["nama_obat_3"];
$nama_obat_4=$_POST["nama_obat_4"];
$nama_obat_5=$_POST["nama_obat_5"];
$nama_obat_6=$_POST["nama_obat_6"];
$nama_obat_7=$_POST["nama_obat_7"];
$nama_obat_8=$_POST["nama_obat_8"];
$nama_obat_9=$_POST["nama_obat_9"];
$nama_obat_10=$_POST["nama_obat_10"];
$nama_obat_11=$_POST["nama_obat_11"];
$nama_obat_12=$_POST["nama_obat_12"];
$nama_obat_13=$_POST["nama_obat_13"];
$nama_obat_14=$_POST["nama_obat_14"];
$nama_obat_15=$_POST["nama_obat_15"];
$nama_obat_16=$_POST["nama_obat_16"];
//mendapatkan data dosis obat
$dosis_obat_1=$_POST["dosis_obat_1"];
$dosis_obat_2=$_POST["dosis_obat_2"];
$dosis_obat_3=$_POST["dosis_obat_3"];
$dosis_obat_4=$_POST["dosis_obat_4"];
$dosis_obat_5=$_POST["dosis_obat_5"];
$dosis_obat_6=$_POST["dosis_obat_6"];
$dosis_obat_7=$_POST["dosis_obat_7"];
$dosis_obat_8=$_POST["dosis_obat_8"];
$dosis_obat_9=$_POST["dosis_obat_9"];
$dosis_obat_10=$_POST["dosis_obat_10"];
$dosis_obat_11=$_POST["dosis_obat_11"];
$dosis_obat_12=$_POST["dosis_obat_12"];
$dosis_obat_13=$_POST["dosis_obat_13"];
$dosis_obat_14=$_POST["dosis_obat_14"];
$dosis_obat_15=$_POST["dosis_obat_15"];
$dosis_obat_16=$_POST["dosis_obat_16"];
//mendapatkan data frekuensi pemberian obat
$frekuensi_pemberian_obat_1=$_POST["frekuensi_pemberian_obat_1"];
$frekuensi_pemberian_obat_2=$_POST["frekuensi_pemberian_obat_2"];
$frekuensi_pemberian_obat_3=$_POST["frekuensi_pemberian_obat_3"];
$frekuensi_pemberian_obat_4=$_POST["frekuensi_pemberian_obat_4"];
$frekuensi_pemberian_obat_5=$_POST["frekuensi_pemberian_obat_5"];
$frekuensi_pemberian_obat_6=$_POST["frekuensi_pemberian_obat_6"];
$frekuensi_pemberian_obat_7=$_POST["frekuensi_pemberian_obat_7"];
$frekuensi_pemberian_obat_8=$_POST["frekuensi_pemberian_obat_8"];
$frekuensi_pemberian_obat_9=$_POST["frekuensi_pemberian_obat_9"];
$frekuensi_pemberian_obat_10=$_POST["frekuensi_pemberian_obat_10"];
$frekuensi_pemberian_obat_11=$_POST["frekuensi_pemberian_obat_11"];
$frekuensi_pemberian_obat_12=$_POST["frekuensi_pemberian_obat_12"];
$frekuensi_pemberian_obat_13=$_POST["frekuensi_pemberian_obat_13"];
$frekuensi_pemberian_obat_14=$_POST["frekuensi_pemberian_obat_14"];
$frekuensi_pemberian_obat_15=$_POST["frekuensi_pemberian_obat_15"];
$frekuensi_pemberian_obat_16=$_POST["frekuensi_pemberian_obat_16"];
//memanggil data dari database, deklarasi variable, fungsi dosis dan frekuensi pemberian, lanjut bikin fungsi sampe 16 lagi

//data 1
$data_1=cari($nama_obat_1);
foreach ($data_1 as $key_1) {
    $dosis_lazim_sekali_pakai_bawah_data_1=$key_1["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_1=$key_1["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_1=$key_1["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_1=$key_1["frekuensi_pemberian_atas"];
}
function dosis_1($dosis_obat_1) {
    global $dosis_lazim_sekali_pakai_bawah_data_1, $dosis_lazim_sekali_pakai_atas_data_1;
    if (empty($dosis_obat_1)) {
        $hasil_dosis_1="-";
    } else if ($dosis_obat_1<$dosis_lazim_sekali_pakai_bawah_data_1) {
        $hasil_dosis_1="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_1>$dosis_lazim_sekali_pakai_atas_data_1) {
        $hasil_dosis_1="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_1="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_1;
}
function frekuensi_pemberian_1($frekuensi_pemberian_obat_1) {
    global $frekuensi_pemberian_bawah_data_1, $frekuensi_pemberian_atas_data_1;
    if (empty($frekuensi_pemberian_obat_1)) {
        $hasil_frekuensi_pemberian_1="-";
    } else if ($frekuensi_pemberian_obat_1<$frekuensi_pemberian_bawah_data_1) {
        $hasil_frekuensi_pemberian_1="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_1>$frekuensi_pemberian_atas_data_1) {
        $hasil_frekuensi_pemberian_1="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_1="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_1;
}

function masalah_dosis_obat_1($dosis_obat_1) {
    global $dosis_lazim_sekali_pakai_bawah_data_1, $dosis_lazim_sekali_pakai_atas_data_1;
    if (empty($dosis_obat_1)) {
        $hasil_masalah_dosis_1="-";
    } else if ($dosis_obat_1<$dosis_lazim_sekali_pakai_bawah_data_1) {
        $hasil_masalah_dosis_1="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_1>$dosis_lazim_sekali_pakai_atas_data_1) {
        $hasil_masalah_dosis_1="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_1="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_1;
}


//data 2
$data_2=cari($nama_obat_2);
foreach ($data_2 as $key_2) {
    $dosis_lazim_sekali_pakai_bawah_data_2=$key_2["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_2=$key_2["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_2=$key_2["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_2=$key_2["frekuensi_pemberian_atas"];
}
function dosis_2($dosis_obat_2) {
    global $dosis_lazim_sekali_pakai_bawah_data_2, $dosis_lazim_sekali_pakai_atas_data_2;
    if (empty($dosis_obat_2)) {
        $hasil_dosis_2="-";
    } else if ($dosis_obat_2<$dosis_lazim_sekali_pakai_bawah_data_2) {
        $hasil_dosis_2="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_2>$dosis_lazim_sekali_pakai_atas_data_2) {
        $hasil_dosis_2="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_2="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_2;
}
function frekuensi_pemberian_2($frekuensi_pemberian_obat_2) {
    global $frekuensi_pemberian_bawah_data_2, $frekuensi_pemberian_atas_data_2;
    if (empty($frekuensi_pemberian_obat_2)) {
        $hasil_frekuensi_pemberian_2="-";
    } else if ($frekuensi_pemberian_obat_2<$frekuensi_pemberian_bawah_data_2) {
        $hasil_frekuensi_pemberian_2="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_2>$frekuensi_pemberian_atas_data_2) {
        $hasil_frekuensi_pemberian_2="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_2="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_2;
}

function masalah_dosis_obat_2($dosis_obat_2) {
    global $dosis_lazim_sekali_pakai_bawah_data_2, $dosis_lazim_sekali_pakai_atas_data_2;
    if (empty($dosis_obat_2)) {
        $hasil_masalah_dosis_2="-";
    } else if ($dosis_obat_2<$dosis_lazim_sekali_pakai_bawah_data_2) {
        $hasil_masalah_dosis_2="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_2>$dosis_lazim_sekali_pakai_atas_data_2) {
        $hasil_masalah_dosis_2="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_2="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_2;
}

//data 3
$data_3=cari($nama_obat_3);
foreach ($data_3 as $key_3) {
    $dosis_lazim_sekali_pakai_bawah_data_3=$key_3["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_3=$key_3["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_3=$key_3["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_3=$key_3["frekuensi_pemberian_atas"];
}
function dosis_3($dosis_obat_3) {
    global $dosis_lazim_sekali_pakai_bawah_data_3, $dosis_lazim_sekali_pakai_atas_data_3;
    if (empty($dosis_obat_3)) {
        $hasil_dosis_3="-";
    } else if ($dosis_obat_3<$dosis_lazim_sekali_pakai_bawah_data_3) {
        $hasil_dosis_3="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_3>$dosis_lazim_sekali_pakai_atas_data_3) {
        $hasil_dosis_3="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_3="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_3;
}
function frekuensi_pemberian_3($frekuensi_pemberian_obat_3) {
    global $frekuensi_pemberian_bawah_data_3, $frekuensi_pemberian_atas_data_3;
    if (empty($frekuensi_pemberian_obat_3)) {
        $hasil_frekuensi_pemberian_3="-";
    } else if ($frekuensi_pemberian_obat_3<$frekuensi_pemberian_bawah_data_3) {
        $hasil_frekuensi_pemberian_3="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_3>$frekuensi_pemberian_atas_data_3) {
        $hasil_frekuensi_pemberian_3="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_3="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_3;
}

function masalah_dosis_obat_3($dosis_obat_3) {
    global $dosis_lazim_sekali_pakai_bawah_data_3, $dosis_lazim_sekali_pakai_atas_data_3;
    if (empty($dosis_obat_3)) {
        $hasil_masalah_dosis_3="-";
    } else if ($dosis_obat_3<$dosis_lazim_sekali_pakai_bawah_data_3) {
        $hasil_masalah_dosis_3="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_3>$dosis_lazim_sekali_pakai_atas_data_3) {
        $hasil_masalah_dosis_3="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_3="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_3;
}


//data 4
$data_4=cari($nama_obat_4);
foreach ($data_4 as $key_4) {
    $dosis_lazim_sekali_pakai_bawah_data_4=$key_4["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_4=$key_4["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_4=$key_4["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_4=$key_4["frekuensi_pemberian_atas"];
}
function dosis_4($dosis_obat_4) {
    global $dosis_lazim_sekali_pakai_bawah_data_4, $dosis_lazim_sekali_pakai_atas_data_4;
    if (empty($dosis_obat_4)) {
        $hasil_dosis_4="-";
    } else if ($dosis_obat_4<$dosis_lazim_sekali_pakai_bawah_data_4) {
        $hasil_dosis_4="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_4>$dosis_lazim_sekali_pakai_atas_data_4) {
        $hasil_dosis_4="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_4="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_4;
}
function frekuensi_pemberian_4($frekuensi_pemberian_obat_4) {
    global $frekuensi_pemberian_bawah_data_4, $frekuensi_pemberian_atas_data_4;
    if (empty($frekuensi_pemberian_obat_4)) {
        $hasil_frekuensi_pemberian_4="-";
    } else if ($frekuensi_pemberian_obat_4<$frekuensi_pemberian_bawah_data_4) {
        $hasil_frekuensi_pemberian_4="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_4>$frekuensi_pemberian_atas_data_4) {
        $hasil_frekuensi_pemberian_4="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_4="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_4;
}

function masalah_dosis_obat_4($dosis_obat_4) {
    global $dosis_lazim_sekali_pakai_bawah_data_4, $dosis_lazim_sekali_pakai_atas_data_4;
    if (empty($dosis_obat_4)) {
        $hasil_masalah_dosis_4="-";
    } else if ($dosis_obat_4<$dosis_lazim_sekali_pakai_bawah_data_4) {
        $hasil_masalah_dosis_4="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_4>$dosis_lazim_sekali_pakai_atas_data_4) {
        $hasil_masalah_dosis_4="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_4="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_4;
}

//data 5
$data_5=cari($nama_obat_5);
foreach ($data_5 as $key_5) {
    $dosis_lazim_sekali_pakai_bawah_data_5=$key_5["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_5=$key_5["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_5=$key_5["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_5=$key_5["frekuensi_pemberian_atas"];
}
function dosis_5($dosis_obat_5) {
    global $dosis_lazim_sekali_pakai_bawah_data_5, $dosis_lazim_sekali_pakai_atas_data_5;
    if (empty($dosis_obat_5)) {
        $hasil_dosis_5="-";
    } else if ($dosis_obat_5<$dosis_lazim_sekali_pakai_bawah_data_5) {
        $hasil_dosis_5="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_5>$dosis_lazim_sekali_pakai_atas_data_5) {
        $hasil_dosis_5="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_5="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_5;
}
function frekuensi_pemberian_5($frekuensi_pemberian_obat_5) {
    global $frekuensi_pemberian_bawah_data_5, $frekuensi_pemberian_atas_data_5;
    if (empty($frekuensi_pemberian_obat_5)) {
        $hasil_frekuensi_pemberian_5="-";
    } else if ($frekuensi_pemberian_obat_5<$frekuensi_pemberian_bawah_data_5) {
        $hasil_frekuensi_pemberian_5="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_5>$frekuensi_pemberian_atas_data_5) {
        $hasil_frekuensi_pemberian_5="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_5="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_5;
}

function masalah_dosis_obat_5($dosis_obat_5) {
    global $dosis_lazim_sekali_pakai_bawah_data_5, $dosis_lazim_sekali_pakai_atas_data_5;
    if (empty($dosis_obat_5)) {
        $hasil_masalah_dosis_5="-";
    } else if ($dosis_obat_5<$dosis_lazim_sekali_pakai_bawah_data_5) {
        $hasil_masalah_dosis_5="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_5>$dosis_lazim_sekali_pakai_atas_data_5) {
        $hasil_masalah_dosis_5="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_5="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_5;
}

//data 6
$data_6=cari($nama_obat_6);
foreach ($data_6 as $key_6) {
    $dosis_lazim_sekali_pakai_bawah_data_6=$key_6["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_6=$key_6["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_6=$key_6["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_6=$key_6["frekuensi_pemberian_atas"];
}
function dosis_6($dosis_obat_6) {
    global $dosis_lazim_sekali_pakai_bawah_data_6, $dosis_lazim_sekali_pakai_atas_data_6;
    if (empty($dosis_obat_5)) {
        $hasil_dosis_6="-";
    } else if ($dosis_obat_6<$dosis_lazim_sekali_pakai_bawah_data_6) {
        $hasil_dosis_6="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_6>$dosis_lazim_sekali_pakai_atas_data_6) {
        $hasil_dosis_6="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_6="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_6;
}
function frekuensi_pemberian_6($frekuensi_pemberian_obat_6) {
    global $frekuensi_pemberian_bawah_data_6, $frekuensi_pemberian_atas_data_6;
    if (empty($frekuensi_pemberian_obat_6)) {
        $hasil_frekuensi_pemberian_6="-";
    } else if ($frekuensi_pemberian_obat_6<$frekuensi_pemberian_bawah_data_6) {
        $hasil_frekuensi_pemberian_6="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_6>$frekuensi_pemberian_atas_data_6) {
        $hasil_frekuensi_pemberian_6="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_6="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_6;
}

function masalah_dosis_obat_6($dosis_obat_6) {
    global $dosis_lazim_sekali_pakai_bawah_data_6, $dosis_lazim_sekali_pakai_atas_data_6;
    if (empty($dosis_obat_6)) {
        $hasil_masalah_dosis_6="-";
    } else if ($dosis_obat_6<$dosis_lazim_sekali_pakai_bawah_data_6) {
        $hasil_masalah_dosis_6="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_6>$dosis_lazim_sekali_pakai_atas_data_6) {
        $hasil_masalah_dosis_6="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_6="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_6;
}

//data 7
$data_7=cari($nama_obat_7);
foreach ($data_7 as $key_7) {
    $dosis_lazim_sekali_pakai_bawah_data_7=$key_7["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_7=$key_7["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_7=$key_7["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_7=$key_7["frekuensi_pemberian_atas"];
}
function dosis_7($dosis_obat_7) {
    global $dosis_lazim_sekali_pakai_bawah_data_7, $dosis_lazim_sekali_pakai_atas_data_7;
    if (empty($dosis_obat_7)) {
        $hasil_dosis_7="-";
    } else if ($dosis_obat_7<$dosis_lazim_sekali_pakai_bawah_data_7) {
        $hasil_dosis_7="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_7>$dosis_lazim_sekali_pakai_atas_data_7) {
        $hasil_dosis_7="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_7="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_7;
}
function frekuensi_pemberian_7($frekuensi_pemberian_obat_7) {
    global $frekuensi_pemberian_bawah_data_7, $frekuensi_pemberian_atas_data_7;
    if (empty($frekuensi_pemberian_obat_7)) {
        $hasil_frekuensi_pemberian_7="-";
    } else if ($frekuensi_pemberian_obat_7<$frekuensi_pemberian_bawah_data_7) {
        $hasil_frekuensi_pemberian_7="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_7>$frekuensi_pemberian_atas_data_7) {
        $hasil_frekuensi_pemberian_7="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_7="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_7;
}

function masalah_dosis_obat_7($dosis_obat_7) {
    global $dosis_lazim_sekali_pakai_bawah_data_7, $dosis_lazim_sekali_pakai_atas_data_7;
    if (empty($dosis_obat_7)) {
        $hasil_masalah_dosis_7="-";
    } else if ($dosis_obat_7<$dosis_lazim_sekali_pakai_bawah_data_7) {
        $hasil_masalah_dosis_7="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_7>$dosis_lazim_sekali_pakai_atas_data_7) {
        $hasil_masalah_dosis_7="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_7="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_7;
}

//data 8
$data_8=cari($nama_obat_8);
foreach ($data_8 as $key_8) {
    $dosis_lazim_sekali_pakai_bawah_data_8=$key_8["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_8=$key_8["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_8=$key_8["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_8=$key_8["frekuensi_pemberian_atas"];
}
function dosis_8($dosis_obat_8) {
    global $dosis_lazim_sekali_pakai_bawah_data_8, $dosis_lazim_sekali_pakai_atas_data_8;
    if (empty($dosis_obat_8)) {
        $hasil_dosis_8="-";
    } else if ($dosis_obat_8<$dosis_lazim_sekali_pakai_bawah_data_8) {
        $hasil_dosis_8="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_8>$dosis_lazim_sekali_pakai_atas_data_8) {
        $hasil_dosis_8="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_8="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_8;
}
function frekuensi_pemberian_8($frekuensi_pemberian_obat_8) {
    global $frekuensi_pemberian_bawah_data_8, $frekuensi_pemberian_atas_data_8;
    if (empty($frekuensi_pemberian_obat_8)) {
        $hasil_frekuensi_pemberian_8="-";
    } else if ($frekuensi_pemberian_obat_8<$frekuensi_pemberian_bawah_data_8) {
        $hasil_frekuensi_pemberian_8="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_8>$frekuensi_pemberian_atas_data_8) {
        $hasil_frekuensi_pemberian_8="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_8="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_8;
}

function masalah_dosis_obat_8($dosis_obat_8) {
    global $dosis_lazim_sekali_pakai_bawah_data_8, $dosis_lazim_sekali_pakai_atas_data_8;
    if (empty($dosis_obat_8)) {
        $hasil_masalah_dosis_8="-";
    } else if ($dosis_obat_8<$dosis_lazim_sekali_pakai_bawah_data_8) {
        $hasil_masalah_dosis_8="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_8>$dosis_lazim_sekali_pakai_atas_data_8) {
        $hasil_masalah_dosis_8="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_8="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_8;
}

//data 9
$data_9=cari($nama_obat_9);
foreach ($data_9 as $key_9) {
    $dosis_lazim_sekali_pakai_bawah_data_9=$key_9["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_9=$key_9["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_9=$key_9["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_9=$key_9["frekuensi_pemberian_atas"];
}
function dosis_9($dosis_obat_9) {
    global $dosis_lazim_sekali_pakai_bawah_data_9, $dosis_lazim_sekali_pakai_atas_data_9;
    if (empty($dosis_obat_9)) {
        $hasil_dosis_9="-";
    } else if ($dosis_obat_9<$dosis_lazim_sekali_pakai_bawah_data_9) {
        $hasil_dosis_9="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_9>$dosis_lazim_sekali_pakai_atas_data_9) {
        $hasil_dosis_9="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_9="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_9;
}
function frekuensi_pemberian_9($frekuensi_pemberian_obat_9) {
    global $frekuensi_pemberian_bawah_data_9, $frekuensi_pemberian_atas_data_9;
    if (empty($frekuensi_pemberian_obat_9)) {
        $hasil_frekuensi_pemberian_9="-";
    } else if ($frekuensi_pemberian_obat_9<$frekuensi_pemberian_bawah_data_9) {
        $hasil_frekuensi_pemberian_9="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_9>$frekuensi_pemberian_atas_data_9) {
        $hasil_frekuensi_pemberian_9="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_9="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_9;
}

function masalah_dosis_obat_9($dosis_obat_9) {
    global $dosis_lazim_sekali_pakai_bawah_data_9, $dosis_lazim_sekali_pakai_atas_data_9;
    if (empty($dosis_obat_9)) {
        $hasil_masalah_dosis_9="-";
    } else if ($dosis_obat_9<$dosis_lazim_sekali_pakai_bawah_data_9) {
        $hasil_masalah_dosis_9="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_9>$dosis_lazim_sekali_pakai_atas_data_9) {
        $hasil_masalah_dosis_9="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_9="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_9;
}

//data 10
$data_10=cari($nama_obat_10);
foreach ($data_10 as $key_10) {
    $dosis_lazim_sekali_pakai_bawah_data_10=$key_10["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_10=$key_10["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_10=$key_10["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_10=$key_10["frekuensi_pemberian_atas"];
}
function dosis_10($dosis_obat_10) {
    global $dosis_lazim_sekali_pakai_bawah_data_10, $dosis_lazim_sekali_pakai_atas_data_10;
    if (empty($dosis_obat_10)) {
        $hasil_dosis_10="-";
    } else if ($dosis_obat_10<$dosis_lazim_sekali_pakai_bawah_data_10) {
        $hasil_dosis_10="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_10>$dosis_lazim_sekali_pakai_atas_data_10) {
        $hasil_dosis_10="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_10="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_10;
}
function frekuensi_pemberian_10($frekuensi_pemberian_obat_10) {
    global $frekuensi_pemberian_bawah_data_10, $frekuensi_pemberian_atas_data_10;
    if (empty($frekuensi_pemberian_obat_10)) {
        $hasil_frekuensi_pemberian_10="-";
    } else if ($frekuensi_pemberian_obat_10<$frekuensi_pemberian_bawah_data_10) {
        $hasil_frekuensi_pemberian_10="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_10>$frekuensi_pemberian_atas_data_10) {
        $hasil_frekuensi_pemberian_10="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_10="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_10;
}

function masalah_dosis_obat_10($dosis_obat_10) {
    global $dosis_lazim_sekali_pakai_bawah_data_10, $dosis_lazim_sekali_pakai_atas_data_10;
    if (empty($dosis_obat_10)) {
        $hasil_masalah_dosis_10="-";
    } else if ($dosis_obat_10<$dosis_lazim_sekali_pakai_bawah_data_10) {
        $hasil_masalah_dosis_10="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_10>$dosis_lazim_sekali_pakai_atas_data_10) {
        $hasil_masalah_dosis_10="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_10="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_10;
}

//data 11
$data_11=cari($nama_obat_11);
foreach ($data_11 as $key_11) {
    $dosis_lazim_sekali_pakai_bawah_data_11=$key_11["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_11=$key_11["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_11=$key_11["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_11=$key_11["frekuensi_pemberian_atas"];
}
function dosis_11($dosis_obat_11) {
    global $dosis_lazim_sekali_pakai_bawah_data_11, $dosis_lazim_sekali_pakai_atas_data_11;
    if (empty($dosis_obat_11)) {
        $hasil_dosis_11="-";
    } else if ($dosis_obat_11<$dosis_lazim_sekali_pakai_bawah_data_11) {
        $hasil_dosis_11="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_11>$dosis_lazim_sekali_pakai_atas_data_11) {
        $hasil_dosis_11="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_11="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_11;
}
function frekuensi_pemberian_11($frekuensi_pemberian_obat_11) {
    global $frekuensi_pemberian_bawah_data_11, $frekuensi_pemberian_atas_data_11;
    if (empty($frekuensi_pemberian_obat_11)) {
        $hasil_frekuensi_pemberian_11="-";
    } else if ($frekuensi_pemberian_obat_11<$frekuensi_pemberian_bawah_data_11) {
        $hasil_frekuensi_pemberian_11="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_11>$frekuensi_pemberian_atas_data_11) {
        $hasil_frekuensi_pemberian_11="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_11="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_11;
}

function masalah_dosis_obat_11($dosis_obat_11) {
    global $dosis_lazim_sekali_pakai_bawah_data_11, $dosis_lazim_sekali_pakai_atas_data_11;
    if (empty($dosis_obat_11)) {
        $hasil_masalah_dosis_11="-";
    } else if ($dosis_obat_1<$dosis_lazim_sekali_pakai_bawah_data_11) {
        $hasil_masalah_dosis_11="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_11>$dosis_lazim_sekali_pakai_atas_data_11) {
        $hasil_masalah_dosis_11="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_11="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_11;
}


//data 12
$data_12=cari($nama_obat_12);
foreach ($data_12 as $key_12) {
    $dosis_lazim_sekali_pakai_bawah_data_12=$key_12["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_12=$key_12["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_12=$key_12["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_12=$key_12["frekuensi_pemberian_atas"];
}
function dosis_12($dosis_obat_12) {
    global $dosis_lazim_sekali_pakai_bawah_data_12, $dosis_lazim_sekali_pakai_atas_data_12;
    if (empty($dosis_obat_12)) {
        $hasil_dosis_12="-";
    } else if ($dosis_obat_12<$dosis_lazim_sekali_pakai_bawah_data_12) {
        $hasil_dosis_12="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_12>$dosis_lazim_sekali_pakai_atas_data_12) {
        $hasil_dosis_12="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_12="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_12;
}
function frekuensi_pemberian_12($frekuensi_pemberian_obat_12) {
    global $frekuensi_pemberian_bawah_data_12, $frekuensi_pemberian_atas_data_12;
    if (empty($frekuensi_pemberian_obat_12)) {
        $hasil_frekuensi_pemberian_12="-";
    } else if ($frekuensi_pemberian_obat_12<$frekuensi_pemberian_bawah_data_12) {
        $hasil_frekuensi_pemberian_12="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_12>$frekuensi_pemberian_atas_data_12) {
        $hasil_frekuensi_pemberian_12="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_12="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_12;
}

function masalah_dosis_obat_12($dosis_obat_12) {
    global $dosis_lazim_sekali_pakai_bawah_data_12, $dosis_lazim_sekali_pakai_atas_data_12;
    if (empty($dosis_obat_12)) {
        $hasil_masalah_dosis_12="-";
    } else if ($dosis_obat_12<$dosis_lazim_sekali_pakai_bawah_data_12) {
        $hasil_masalah_dosis_12="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_12>$dosis_lazim_sekali_pakai_atas_data_12) {
        $hasil_masalah_dosis_12="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_12="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_12;
}

//data 13
$data_13=cari($nama_obat_13);
foreach ($data_13 as $key_13) {
    $dosis_lazim_sekali_pakai_bawah_data_13=$key_13["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_13=$key_13["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_13=$key_13["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_13=$key_13["frekuensi_pemberian_atas"];
}
function dosis_13($dosis_obat_13) {
    global $dosis_lazim_sekali_pakai_bawah_data_13, $dosis_lazim_sekali_pakai_atas_data_13;
    if (empty($dosis_obat_13)) {
        $hasil_dosis_13="-";
    } else if ($dosis_obat_13<$dosis_lazim_sekali_pakai_bawah_data_13) {
        $hasil_dosis_13="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_13>$dosis_lazim_sekali_pakai_atas_data_13) {
        $hasil_dosis_13="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_13="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_13;
}
function frekuensi_pemberian_13($frekuensi_pemberian_obat_13) {
    global $frekuensi_pemberian_bawah_data_13, $frekuensi_pemberian_atas_data_13;
    if (empty($frekuensi_pemberian_obat_13)) {
        $hasil_frekuensi_pemberian_13="-";
    } else if ($frekuensi_pemberian_obat_13<$frekuensi_pemberian_bawah_data_13) {
        $hasil_frekuensi_pemberian_13="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_13>$frekuensi_pemberian_atas_data_13) {
        $hasil_frekuensi_pemberian_13="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_13="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_13;
}

function masalah_dosis_obat_13($dosis_obat_13) {
    global $dosis_lazim_sekali_pakai_bawah_data_13, $dosis_lazim_sekali_pakai_atas_data_13;
    if (empty($dosis_obat_13)) {
        $hasil_masalah_dosis_13="-";
    } else if ($dosis_obat_13<$dosis_lazim_sekali_pakai_bawah_data_13) {
        $hasil_masalah_dosis_13="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_13>$dosis_lazim_sekali_pakai_atas_data_13) {
        $hasil_masalah_dosis_13="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_13="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_13;
}

//data 14
$data_14=cari($nama_obat_14);
foreach ($data_14 as $key_14) {
    $dosis_lazim_sekali_pakai_bawah_data_14=$key_14["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_14=$key_14["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_14=$key_14["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_14=$key_14["frekuensi_pemberian_atas"];
}
function dosis_14($dosis_obat_14) {
    global $dosis_lazim_sekali_pakai_bawah_data_14, $dosis_lazim_sekali_pakai_atas_data_14;
    if (empty($dosis_obat_14)) {
        $hasil_dosis_14="-";
    } else if ($dosis_obat_14<$dosis_lazim_sekali_pakai_bawah_data_14) {
        $hasil_dosis_14="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_14>$dosis_lazim_sekali_pakai_atas_data_14) {
        $hasil_dosis_14="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_14="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_14;
}
function frekuensi_pemberian_14($frekuensi_pemberian_obat_14) {
    global $frekuensi_pemberian_bawah_data_14, $frekuensi_pemberian_atas_data_14;
    if (empty($frekuensi_pemberian_obat_14)) {
        $hasil_frekuensi_pemberian_14="-";
    } else if ($frekuensi_pemberian_obat_14<$frekuensi_pemberian_bawah_data_14) {
        $hasil_frekuensi_pemberian_14="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_14>$frekuensi_pemberian_atas_data_14) {
        $hasil_frekuensi_pemberian_14="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_14="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_14;
}

function masalah_dosis_obat_14($dosis_obat_14) {
    global $dosis_lazim_sekali_pakai_bawah_data_14, $dosis_lazim_sekali_pakai_atas_data_14;
    if (empty($dosis_obat_14)) {
        $hasil_masalah_dosis_14="-";
    } else if ($dosis_obat_14<$dosis_lazim_sekali_pakai_bawah_data_14) {
        $hasil_masalah_dosis_14="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_14>$dosis_lazim_sekali_pakai_atas_data_14) {
        $hasil_masalah_dosis_14="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_14="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_14;
}

//data 15
$data_15=cari($nama_obat_15);
foreach ($data_15 as $key_15) {
    $dosis_lazim_sekali_pakai_bawah_data_15=$key_15["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_15=$key_15["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_15=$key_15["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_15=$key_15["frekuensi_pemberian_atas"];
}
function dosis_15($dosis_obat_15) {
    global $dosis_lazim_sekali_pakai_bawah_data_15, $dosis_lazim_sekali_pakai_atas_data_15;
    if (empty($dosis_obat_15)) {
        $hasil_dosis_15="-";
    } else if ($dosis_obat_15<$dosis_lazim_sekali_pakai_bawah_data_15) {
        $hasil_dosis_15="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_15>$dosis_lazim_sekali_pakai_atas_data_15) {
        $hasil_dosis_15="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_15="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_15;
}
function frekuensi_pemberian_15($frekuensi_pemberian_obat_15) {
    global $frekuensi_pemberian_bawah_data_15, $frekuensi_pemberian_atas_data_15;
    if (empty($frekuensi_pemberian_obat_15)) {
        $hasil_frekuensi_pemberian_15="-";
    } else if ($frekuensi_pemberian_obat_15<$frekuensi_pemberian_bawah_data_15) {
        $hasil_frekuensi_pemberian_15="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_15>$frekuensi_pemberian_atas_data_15) {
        $hasil_frekuensi_pemberian_15="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_15="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_15;
}

function masalah_dosis_obat_15($dosis_obat_15) {
    global $dosis_lazim_sekali_pakai_bawah_data_15, $dosis_lazim_sekali_pakai_atas_data_15;
    if (empty($dosis_obat_15)) {
        $hasil_masalah_dosis_15="-";
    } else if ($dosis_obat_15<$dosis_lazim_sekali_pakai_bawah_data_15) {
        $hasil_masalah_dosis_15="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_15>$dosis_lazim_sekali_pakai_atas_data_15) {
        $hasil_masalah_dosis_15="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_15="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_15;
}

//data 16
$data_16=cari($nama_obat_16);
foreach ($data_16 as $key_16) {
    $dosis_lazim_sekali_pakai_bawah_data_16=$key_16["dosis_lazim_sekali_pakai_bawah"];
    $dosis_lazim_sekali_pakai_atas_data_16=$key_16["dosis_lazim_sekali_pakai_atas"];
    $frekuensi_pemberian_bawah_data_16=$key_16["frekuensi_pemberian_bawah"];
    $frekuensi_pemberian_atas_data_16=$key_16["frekuensi_pemberian_atas"];
}
function dosis_16($dosis_obat_16) {
    global $dosis_lazim_sekali_pakai_bawah_data_16, $dosis_lazim_sekali_pakai_atas_data_16;
    if (empty($dosis_obat_16)) {
        $hasil_dosis_16="-";
    } else if ($dosis_obat_16<$dosis_lazim_sekali_pakai_bawah_data_16) {
        $hasil_dosis_16="C3.1 : Dosis obat terlalu rendah";
    } else if ($dosis_obat_16>$dosis_lazim_sekali_pakai_atas_data_16) {
        $hasil_dosis_16="C3.2 : dosis obat terlalu tinggi";
    } else {
        $hasil_dosis_16="dosis yang diberikan sudah tepat";
    }
    return $hasil_dosis_16;
}
function frekuensi_pemberian_16($frekuensi_pemberian_obat_16) {
    global $frekuensi_pemberian_bawah_data_16, $frekuensi_pemberian_atas_data_16;
    if (empty($frekuensi_pemberian_obat_16)) {
        $hasil_frekuensi_pemberian_16="-";
    } else if ($frekuensi_pemberian_obat_16<$frekuensi_pemberian_bawah_data_16) {
        $hasil_frekuensi_pemberian_16="C3.3: regimen dosis yang diberikan tidak terlalu sering";
    } else if ($frekuensi_pemberian_obat_16>$frekuensi_pemberian_atas_data_16) {
        $hasil_frekuensi_pemberian_16="C3.4 : regimen dosis yang diberikan terlalu sering";
    } else {
        $hasil_frekuensi_pemberian_16="frekuensi pemberian obat sudah tepat";
    }
    return $hasil_frekuensi_pemberian_16;
}

function masalah_dosis_obat_16($dosis_obat_16) {
    global $dosis_lazim_sekali_pakai_bawah_data_16, $dosis_lazim_sekali_pakai_atas_data_16;
    if (empty($dosis_obat_16)) {
        $hasil_masalah_dosis_16="-";
    } else if ($dosis_obat_16<$dosis_lazim_sekali_pakai_bawah_data_16) {
        $hasil_masalah_dosis_16="P1.2 : Efek obat tidak optimal";
    } else if ($dosis_obat_16>$dosis_lazim_sekali_pakai_atas_data_16) {
        $hasil_masalah_dosis_16="P2.1 : Kejadian obat yang merugikan (mungkin) terjadi";
    } else {
        $hasil_masalah_dosis_16="dosis yang diberikan sudah tepat";
    }
    return $hasil_masalah_dosis_16;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laman output</title>
    <link rel="stylesheet" href="style_output_baru.css">
    <style>
        @media print {
            .nav {
                display:none;
            }
            @page {
                margin:2cm;
            }
            .hide-date {
                display:none!important;
            }
        }
        
    </style>
    
    
</head>
<body>
<nav>
    <div class="logo">
        
        
    </div>
    <div class="nav">
        
    </div>
</nav>
<div class="pembatas_atas"></div>
<div class="page_satu">
    <div class="kotak_data_pasien">
        <div class="header_data_pasien">
            <h4>Identitas Pasien</h4>
        </div>
        <table>
            <tr>
                <td>Nama pasien</td>
                <td> : <?php echo $nama_pasien;?></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td> : <?php echo $jenis_kelamin;?></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td> : <?php echo $usia;?></td>
            </tr>
        </table>
    </div>
    <div class="kotak_pengumpulan_data_dan_informasi">
        <div class="header">
            <h4>Pengumpulan data dan informasi</h4>
        </div>
        <table>
            <tr>
                <td>Keluhan utama</td>
                <td> : <?php echo $keluhan_utama;?></td>
            </tr>
            <tr>
                <td>Riwayat penyakit sekarang</td>
                <td> : <?php echo $riwayat_penyakit_sekarang;?></td>
            </tr>
            <tr>
                <td>Kebiasaan merokok</td>
                <td> : <?php echo $merokok;?></td>
            </tr>
            <tr>
                <td>Alkohol</td>
                <td> : <?php echo $alkohol;?></td>
                </tr>
            <tr>
                <td>Tidur</td>
                <td> : <?php echo $tidur;?></td>
            </tr>
            <tr>
                <td>Makan</td>
                <td> : <?php echo $makan;?></td>
            </tr>
            <tr>
                <td>Riwayat pengobatan</td>
                <td> : <?php echo $riwayat_pengobatan;?></td>
                </tr>
            <tr>
                <td>Alergi</td>
                <td> : <?php echo $alergi;?></td>
            </tr>
            <tr>
                <td>Diagnosa</td>
                <td> : <?php echo $diagnosa;?></td>
            </tr>
        </table>
    </div>
    <div class="kotak_pemeriksaan_fisik">
        <div class="header">
            <h4>Pemeriksaan fisik</h4>
        </div>
        <table>
            <tr>
                <th></th>
                <th>Data</th>
                <th>Keterangan</th> 
            </tr>
            <tr>
                <td>Suhu tubuh</td>
                <td style="padding-left:2vh;"><?php echo $_POST["suhu_tubuh"];?></td>
                <td style="padding-left:2vh;"><?php echo $suhu_tubuh;?></td>
            </tr>
            <tr>
                <td>Denyut nadi</td>
                <td style="padding-left:2vh;"><?php echo $_POST["denyut_nadi"];?></td>
                <td style="padding-left:2vh;"><?php echo $denyut_nadi;?></td>
            </tr>
            <tr>
                <td>Laju nafas</td>
                <td style="padding-left:2vh;"><?php echo $_POST["laju_nafas"];?></td>
                <td style="padding-left:2vh;"><?php echo $laju_nafas;?></td>
            </tr>
            <tr>
                <td>Tekanan darah</td>
                <td style="padding-left:2vh;">
                    <?php echo $_POST["tekanan_darah_sistol"];
                            echo "/";
                            echo $_POST["tekanan_darah_diastol"];
                    ?>
                </td>
                <td style="padding-left:2vh;"><?php echo $tekanan_darah;?></td>
            </tr>
            <tr>
                <td >Tinggi badan</td>
                <td style="padding-left:2vh;"><?php echo $tinggi_badan;?></td>
            </tr>
            <tr>
                <td>Berat badan</td>
                <td style="padding-left:2vh;"><?php echo $berat_badan;?></td>
            </tr>
        </table>
    </div>
</div>
<div class="pembatas"></div>
<div class="page_dua">
    <div class="bagian_satu">
        <!-- elektrolit mulai -->
        <div class="kotak_elektrolit">
            <div class="header_elektrolit">
                <h4>Elektrolit</h4>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th style="padding-left:2vh;">Data</th>
                    <th>Keterangan</th> 
                </tr>
                <tr>
                    <td>Natrium </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["natrium"];?></td>
                    <td style="padding-left:2vh;"><?php echo $natrium;?></td>
                </tr>
                <tr>
                    <td>Kalium </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["kalium"];?></td>
                    <td style="padding-left:2vh;"><?php echo $kalium;?></td>
                </tr>
                <tr>
                    <td>CO2 </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["CO2"];?></td>
                    <td style="padding-left:2vh;"><?php echo $CO2;?></td>
                </tr>
                <tr>
                    <td>Klorida </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["klorida"];?></td>
                    <td style="padding-left:2vh;"><?php echo $klorida;?></td>
                </tr>
                <tr>
                    <td>BUN </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["BUN"];?></td>
                    <td style="padding-left:2vh;"><?php echo $BUN;?></td>
                </tr>
                <tr>
                    <td>Creatinine </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["creatinine"];?></td>
                    <td style="padding-left:2vh;"><?php echo $creatinine;?></td>
                </tr>
                <tr>
                    <td>Creatinine clearance </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["CrCl"];?></td>
                    <td style="padding-left:2vh;"><?php echo $creatinine_clearance;?></td>
                </tr>
                <tr>
                    <td>GFR </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["GFR"];?></td>
                    <td style="padding-left:2vh;"><?php echo $GFR;?></td>
                </tr>
                <tr>
                    <td>Cystatin C </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["cystatin_c"];?></td>
                    <td style="padding-left:2vh;"><?php echo $cystatin_c;?></td>
                </tr>
                <tr>
                    <td>Glukosa puasa </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["glukosa_puasa"];?></td>
                    <td style="padding-left:2vh;"><?php echo $glukosa_puasa;?></td>
                </tr>
                <tr>
                    <td>HbA1C </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["HbA1C"];?></td>
                    <td style="padding-left:2vh;"><?php echo $HbA1C;?></td>
                </tr>
                <tr>
                    <td>Kalsium total </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["kalsium_total"];?></td>
                    <td style="padding-left:2vh;"><?php echo $kalsium_total;?></td>
                </tr>
                <tr>
                    <td>Kalsium bebas </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["kalsium_bebas"];?></td>
                    <td style="padding-left:2vh;"><?php echo $kalsium_bebas;?></td>
                </tr>
                <tr>
                    <td>Magnesium </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["magnesium"];?></td>
                    <td style="padding-left:2vh;"><?php echo $magnesium;?></td>
                </tr>
                <tr>
                    <td>Fosfat </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["fosfat"];?></td>
                    <td style="padding-left:2vh;"><?php echo $fosfat;?></td>
                </tr>
                <tr>
                    <td>Asam urat </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["asam_urat"];?></td>
                    <td style="padding-left:2vh;"><?php echo $asam_urat;?></td>
                </tr>
            </table>
        </div>
        <!-- elektrolit selesai -->
        <!-- cardiac marker mulai -->
        <div class="kotak_cardiac_marker">
            <div class="header">
                <h4>Cardiac marker</h4>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th style="padding-left:2vh;">Data</th>
                    <th>Keterangan</th> 
                </tr>
                <tr>
                    <td>CK </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["CK"];?></td>
                    <td style="padding-left:2vh;"><?php echo $CK;?></td>
                </tr>
                <tr>
                    <td>CK-MB </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["CK_MB"];?></td>
                    <td style="padding-left:2vh;"><?php echo $CK_MB;?></td>
                </tr>
                <tr>
                    <td>cTnl </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["cTnl"];?></td>
                    <td style="padding-left:2vh;"><?php echo $cTnl;?></td>
                </tr>
                <tr>
                    <td>Myoglobin </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["myoglobin"];?></td>
                    <td style="padding-left:2vh;"><?php echo $myoglobin;?></td>
                </tr>
                <tr>
                    <td>Homocystein </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["homocystein"];?></td>
                    <td style="padding-left:2vh;"><?php echo $homocystein;?></td>
                </tr>
                <tr>
                    <td>LDH </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["LDH"];?></td>
                    <td style="padding-left:2vh;"><?php echo $LDH;?></td>
                </tr>
                <tr>
                    <td>BNP </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["BNP"];?></td>
                    <td style="padding-left:2vh;"><?php echo $BNP;?></td>
                </tr>
                <tr>
                    <td>CRP </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["CRP"];?></td>
                    <td style="padding-left:2vh;"><?php echo $CRP;?></td>
                </tr>
                <tr>
                    <td>Hs-CRP </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["Hs_CRP"];?></td>
                    <td style="padding-left:2vh;"><?php echo $Hs_CRP;?></td>
                </tr>
            </table >
        </div>
        <!-- cardiac marker selesai -->
        <div class="bagian_protein_dan_kolesterol">
            <!-- protein mulai -->
        <div class="kotak_protein">
            <div class="header">
                <h4>Protein</h4>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th style="padding-left:2vh;">Data</th>
                    <th>Keterangan</th> 
                </tr>
                <tr>
                    <td>Prealbumin </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["prealbumin"];?></td>
                    <td style="padding-left:2vh;"><?php echo $prealbumin;?></td>
                </tr>
                <tr>
                    <td>Albumin </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["albumin"];?></td>
                    <td style="padding-left:2vh;"><?php echo $albumin;?></td>
                </tr>
                <tr>
                    <td>Globulin </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["globulin"];?></td>
                    <td style="padding-left:2vh;"><?php echo $globulin;?></td>
                </tr>
            </table>
        </div>
        <!-- protein selesai -->
        <!-- kolesterol mulai -->
        <div class="kotak_kolesterol">
            <div class="header">
                <h4>Kolesterol</h4>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th style="padding-left:2vh;">Data</th>
                    <th>Keterangan</th> 
                </tr>
                <tr>
                    <td>Kolesterol total </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["kolesterol_total"];?></td>
                    <td style="padding-left:2vh;"><?php echo $kolesterol_total;?></td>
                </tr>
                <tr>
                    <td>LDL </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["LDL"];?></td>
                    <td style="padding-left:2vh;"><?php echo $LDL;?></td>
                </tr>
                <tr>
                    <td>HDL </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["HDL"];?></td>
                    <td style="padding-left:2vh;"><?php echo $HDL;?></td>
                </tr>
                <tr>
                    <td>Trigliserida puasa </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["trigliserida_puasa"];?></td>
                    <td style="padding-left:2vh;"><?php echo $trigliserida_puasa;?></td>
                </tr>
            </table>
        </div>
        <!-- kolesterol selesai -->
        </div>
    </div>
    <div class="bagian_dua">
        <!-- fungsi hati mulai -->
        <div class="kotak_fungsi_hati">
            <div class="header">
                <h4>Fungsi hati</h4>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th style="padding-left:2vh;">Data</th>
                    <th>Keterangan</th> 
                </tr>
                <tr>
                    <td>AST </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["AST"];?></td>
                    <td style="padding-left:2vh;"><?php echo $AST;?></td>
                </tr>
                <tr>
                    <td>ALT </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["ALT"];?></td>
                    <td style="padding-left:2vh;"><?php echo $ALT;?></td>
                </tr>
                <tr>
                    <td>ALP </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["ALP"];?></td>
                    <td style="padding-left:2vh;"><?php echo $ALP;?></td>
                </tr>
                <tr>
                    <td>GGT </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["GGT"];?></td>
                    <td style="padding-left:2vh;"><?php echo $GGT;?></td>
                </tr>
                <tr>
                    <td>Bilirubin total </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["bilirubin_total"];?></td>
                    <td style="padding-left:2vh;"><?php echo $biliburin_total;?></td>
                </tr>
                <tr>
                    <td>Bilirubin direct </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["bilirubin_direct"];?></td>
                    <td style="padding-left:2vh;"><?php echo $bilirubin_direct;?></td>
                </tr>
            </table>
        </div>
        <!-- fungsi hati selesai -->
        <!-- miscellaneous mulai -->
        <div class="kotak_miscellaneous">
            <div class="header">
                <h4>Miscellaneous</h4>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th style="padding-left:2vh;">Data</th>
                    <th>Keterangan</th> 
                </tr>
                <tr>
                    <td>Amylase </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["amylase"];?></td>
                    <td style="padding-left:2vh;"><?php echo $amylase;?></td>
                </tr>
                <tr>
                    <td>Lipase </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["lipase"];?></td>
                    <td style="padding-left:2vh;"><?php echo $lipase;?></td>
                </tr>
                <tr>
                    <td>PSA </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["PSA"];?></td>
                    <td style="padding-left:2vh;"><?php echo $PSA;?></td>
                </tr>
                <tr>
                    <td>TSH </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["TSH"];?></td>
                    <td style="padding-left:2vh;"><?php echo $TSH;?></td>
                </tr>
                <tr>
                    <td>Procalcitonin </td>
                    <td style="padding-left:2vh;"><?php echo $_POST["procalcitonin"];?></td>
                    <td style="padding-left:2vh;"><?php echo $procalcitonin;?></td>
                </tr>
            </table>
        </div>
        <!-- miscellaneous selesai -->
    </div>
</div>
<div class="pembatas"></div>
<div class="data_lab_hematologi">
    <div class="header_hematologi">Data Lab Hematologi</div>
    <div class="kotak_lab">
        <div class="kotak_tabel_1">
            <div class="tabel_1">
                <table>
                    <tr>
                        <th></th>
                        <th>Data</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td>RBC Count</td>
                        <td><?php echo $nilai_RBC_count;?></td>
                        <td><?php echo $RBC_count;?></td>
                    </tr>
                    <tr>
                        <td>Hematokrit</td>
                        <td><?php echo $nilai_Hct;?></td>
                        <td><?php echo $Hct;?></td>
                    </tr>
                    <tr>
                        <td>Hemoglobin</td>
                        <td><?php echo $nilai_Hgb;?></td>
                        <td><?php echo $Hgb;?></td>
                    </tr>
                    <tr>
                        <td>MCV</td>
                        <td><?php echo $nilai_MCV;?></td>
                        <td><?php echo $MCV;?></td>
                    </tr>
                    <tr>
                        <td>MCH</td>
                        <td><?php echo $nilai_MCH;?></td>
                        <td><?php echo $MCH;?></td>
                    </tr>
                    <tr>
                        <td>MCHC</td>
                        <td><?php echo $nilai_MCHC;?></td>
                        <td><?php echo $MCHC;?></td>
                    </tr>
                    <tr>
                        <td>ESR</td>
                        <td><?php echo $nilai_ESR;?></td>
                        <td><?php echo $ESR;?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="kotak_tabel_2">
            <div class="tabel_2">
                <table>
                    <tr>
                        <th></th>
                        <th>Data</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td>WBC Count</td>
                        <td><?php echo $nilai_WBC_count;?></td>
                        <td><?php echo $WBC_count;?></td>
                    </tr>
                    <tr>
                        <td>Neutrofil</td>
                        <td><?php echo $nilai_neutrofil;?></td>
                        <td><?php echo $neutrofil;?></td>
                    </tr>
                    <tr>
                        <td>Limfosit</td>
                        <td><?php echo $nilai_limfosit;?></td>
                        <td><?php echo $limfosit;?></td>
                    </tr>
                    <tr>
                        <td>Monosit</td>
                        <td><?php echo $nilai_monosit;?></td>
                        <td><?php echo $monosit;?></td>
                    </tr>
                    <tr>
                        <td>Eosinofil</td>
                        <td><?php echo $nilai_eosinofil;?></td>
                        <td><?php echo $eosinofil;?></td>
                    </tr>
                    <tr>
                        <td>Basofil</td>
                        <td><?php echo $nilai_basofil;?></td>
                        <td><?php echo $basofil;?></td>
                    </tr>
                    <tr>
                        <td>Platelet</td>
                        <td><?php echo $nilai_platelet;?></td>
                        <td><?php echo $platelet;?></td>
                    </tr>
                    <tr>
                        <td>Fe</td>
                        <td><?php echo $nilai_Fe;?></td>
                        <td><?php echo $Fe;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="pembatas"></div>
<div class="page_tiga">
        <div class="konteiner_kotak_hasil_analisa_pengobatan">
            <div class="kotak_hasil_analisa_pengobatan_pasien">
                <div class="header_hasil_analisa_pengobatan_pasien">
                    <h4>Hasil analisa pengobatan pasien</h4>
                </div>
                <table>
                    <tr style="height:10vh;">
                        <th>Komponen analisa</th>
                        <th>Data yang diinputkan</th>
                        <th>Hasil analisa</th>
                        <th>Nilai yang disarankan</th>
                        <th>Keterangan tambahan</th>
                    </tr>
                        <?php if(isset($nama_obat_1) && !empty($nama_obat_1)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 1 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_1;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 1  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_1;?></td>
                                    <td style="text-align:center;"><?php echo dosis_1($dosis_obat_1);?></td>
                                    <?php foreach ($data_1 as $key_1) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_1["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                            <td></td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 1  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_1;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_1($frekuensi_pemberian_obat_1);?></td>
                                    <?php foreach ($data_1 as $key_1) :?>
                                        <td style="text-align:center;"><?php echo $key_1["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_1["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_2) && !empty($nama_obat_2)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 2 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_2;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 2  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_2;?></td>
                                    <td style="text-align:center;"><?php echo dosis_2($dosis_obat_2);?></td>
                                    <?php foreach ($data_2 as $key_2) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_2["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr  style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 2  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_2;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_2($frekuensi_pemberian_obat_2);?></td>
                                    <?php foreach ($data_2 as $key_2) :?>
                                        <td style="text-align:center;"><?php echo $key_2["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_2["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_3) && !empty($nama_obat_3)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 3 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_3;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 3  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_3;?></td>
                                    <td style="text-align:center;"><?php echo dosis_3($dosis_obat_3);?></td>
                                    <?php foreach ($data_3 as $key_3) :?>
                                            <td style="text-align:center;"> 
                                                <?php echo $key_3["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 3  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_3;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_3($frekuensi_pemberian_obat_3);?></td>
                                    <?php foreach ($data_3 as $key_3) :?>
                                        <td style="text-align:center;"><?php echo $key_3["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_3["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_4) && !empty($nama_obat_4)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 4 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_4;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 4  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_4;?></td>
                                    <td style="text-align:center;"><?php echo dosis_4($dosis_obat_4);?></td>
                                    <?php foreach ($data_4 as $key_4) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_4["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 4  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_4;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_4($frekuensi_pemberian_obat_4);?></td>
                                    <?php foreach ($data_4 as $key_4) :?>
                                        <td style="text-align:center;"><?php echo $key_4["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_4["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_5) && !empty($nama_obat_5)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 5 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_5;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 5  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_5;?></td>
                                    <td style="text-align:center;"><?php echo dosis_5($dosis_obat_5);?></td>
                                    <?php foreach ($data_5 as $key_5) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_5["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 5  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_5;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_5($frekuensi_pemberian_obat_5);?></td>
                                    <?php foreach ($data_5 as $key_5) :?>
                                        <td style="text-align:center;"><?php echo $key_5["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_5["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_6) && !empty($nama_obat_6)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 6 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_6;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 6  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_6;?></td>
                                    <td style="text-align:center;"><?php echo dosis_6($dosis_obat_6);?></td>
                                    <?php foreach ($data_6 as $key_6) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_6["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 6  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_6;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_6($frekuensi_pemberian_obat_6);?></td>
                                    <?php foreach ($data_6 as $key_6) :?>
                                        <td style="text-align:center;"><?php echo $key_6["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_6["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_7) && !empty($nama_obat_7)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 7 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_7;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 7  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_7;?></td>
                                    <td style="text-align:center;"><?php echo dosis_7($dosis_obat_7);?></td>
                                    <?php foreach ($data_7 as $key_7) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_7["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 7  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_7;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_7($frekuensi_pemberian_obat_7);?></td>
                                    <?php foreach ($data_7 as $key_7) :?>
                                        <td style="text-align:center;"><?php echo $key_7["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_7["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_8) && !empty($nama_obat_8)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 8 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_8;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 8  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_8;?></td>
                                    <td style="text-align:center;"><?php echo dosis_8($dosis_obat_8);?></td>
                                    <?php foreach ($data_8 as $key_8) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_8["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 8  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_8;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_8($frekuensi_pemberian_obat_8);?></td>
                                    <?php foreach ($data_8 as $key_8) :?>
                                        <td style="text-align:center;"><?php echo $key_8["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_8["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_9) && !empty($nama_obat_9)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 9 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_9;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 9  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_9;?></td>
                                    <td style="text-align:center;"><?php echo dosis_5($dosis_obat_9);?></td>
                                    <?php foreach ($data_9 as $key_9) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_9["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 9  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_9;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_9($frekuensi_pemberian_obat_9);?></td>
                                    <?php foreach ($data_9 as $key_9) :?>
                                        <td style="text-align:center;"><?php echo $key_9["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_9["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_10) && !empty($nama_obat_10)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 10 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_10;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 10  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_10;?></td>
                                    <td style="text-align:center;"><?php echo dosis_10($dosis_obat_10);?></td>
                                    <?php foreach ($data_10 as $key_10) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_10["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 10  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_10;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_10($frekuensi_pemberian_obat_10);?></td>
                                    <?php foreach ($data_10 as $key_10) :?>
                                        <td style="text-align:center;"><?php echo $key_10["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_10["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_11) && !empty($nama_obat_11)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 11 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_11;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 11  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_11;?></td>
                                    <td style="text-align:center;"><?php echo dosis_11($dosis_obat_11);?></td>
                                    <?php foreach ($data_11 as $key_11) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_11["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 11  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_11;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_11($frekuensi_pemberian_obat_11);?></td>
                                    <?php foreach ($data_11 as $key_11) :?>
                                        <td style="text-align:center;"><?php echo $key_11["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_11["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_12) && !empty($nama_obat_12)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 12 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_12;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 12  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_12;?></td>
                                    <td style="text-align:center;"><?php echo dosis_12($dosis_obat_12);?></td>
                                    <?php foreach ($data_12 as $key_12) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_12["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 12  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_12;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_12($frekuensi_pemberian_obat_12);?></td>
                                    <?php foreach ($data_12 as $key_12) :?>
                                        <td style="text-align:center;"><?php echo $key_12["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_12["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_13) && !empty($nama_obat_13)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 13 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_13;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 13  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_13;?></td>
                                    <td style="text-align:center;"><?php echo dosis_13($dosis_obat_13);?></td>
                                    <?php foreach ($data_13 as $key_13) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_13["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 13  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_13;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_13($frekuensi_pemberian_obat_13);?></td>
                                    <?php foreach ($data_13 as $key_13) :?>
                                        <td style="text-align:center;"><?php echo $key_13["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_13["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_14) && !empty($nama_obat_14)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 14 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_14;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 14  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_14;?></td>
                                    <td style="text-align:center;"><?php echo dosis_14($dosis_obat_14);?></td>
                                    <?php foreach ($data_14 as $key_14) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_14["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 14  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_14;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_14($frekuensi_pemberian_obat_14);?></td>
                                    <?php foreach ($data_14 as $key_14) :?>
                                        <td style="text-align:center;"><?php echo $key_14["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_14["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_15) && !empty($nama_obat_15)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 15 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_15;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 15  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_15;?></td>
                                    <td style="text-align:center;"><?php echo dosis_15($dosis_obat_15);?></td>
                                    <?php foreach ($data_15 as $key_15) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_15["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 15  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_15;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_15($frekuensi_pemberian_obat_15);?></td>
                                    <?php foreach ($data_15 as $key_15) :?>
                                        <td style="text-align:center;"><?php echo $key_15["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_15["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr>
                        <?php endif;?>
                        <?php if(isset($nama_obat_16) && !empty($nama_obat_16)):?>
                            <tr style="height:3vh;">
                                    <td style="width:30vh;">Nama obat 16 </td>
                                    <td style="text-align:center;"><?php echo $nama_obat_16;?></td>
                                    <td></td>
                                </tr>
                                <tr style="height:3vh;">
                                    <td style="width:30vh;">Dosis obat 16  </td>
                                    <td style="text-align:center;"><?php echo $dosis_obat_16;?></td>
                                    <td style="text-align:center;"><?php echo dosis_16($dosis_obat_16);?></td>
                                    <?php foreach ($data_16 as $key_16) :?>
                                            <td style="text-align:center;">
                                                <?php echo $key_16["dosis_lazim_sekali_pakai"];
                                                ?>
                                            </td>
                                    <?php endforeach;?>
                                </tr>
                                <tr style="height:3vh; border-bottom:1px solid black;">
                                    <td style="width:30vh;">Frekuensi pemberian obat 16  </td>
                                    <td style="text-align:center;"><?php echo $frekuensi_pemberian_obat_16;?></td>
                                    <td style="text-align:center;"><?php echo frekuensi_pemberian_16($frekuensi_pemberian_obat_16);?></td>
                                    <?php foreach ($data_16 as $key_16) :?>
                                        <td style="text-align:center;"><?php echo $key_16["frekuensi_pemberian"];?></td>
                                        <td style="text-align:center;"><?php echo $key_16["keterangan_tambahan"];?></td>
                                    <?php endforeach;?>
                                </tr> 
                        <?php endif;?>
                </table>
            </div>
        </div>  
</div>
<div class="pembatas"></div>
<div class="page_empat">
    <div class="konteiner_informasi_obat">
        <div class="header_informasi_obat" style="margin-top:1%;"><b>Informasi Obat</b></div>
        <div class="kotak_informasi_obat">
            <!--obat 1 mulai -->
            <?php if(isset($nama_obat_1)&&!empty($nama_obat_1)):?>
                <h3><?php echo $nama_obat_1;?></h3>
                <?php foreach ($data_1 as $key_1):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_1["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_1["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_1["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_1["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_1["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 1 selesai -->
            <!--obat 2 mulai -->
            <?php if(isset($nama_obat_2)&&!empty($nama_obat_2)):?>
                <h3><?php echo $nama_obat_2;?></h3>
                <?php foreach ($data_2 as $key_2):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_2["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_2["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_2["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_2["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_2["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 2 selesai -->
            <!--obat 3 mulai -->
            <?php if(isset($nama_obat_3)&&!empty($nama_obat_3)):?>
                <h3><?php echo $nama_obat_3;?></h3>
                <?php foreach ($data_3 as $key_3):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_3["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_3["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_3["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_3["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_3["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 3 selesai -->
            <!--obat 4 mulai -->
            <?php if(isset($nama_obat_4)&&!empty($nama_obat_4)):?>
                <h3><?php echo $nama_obat_4;?></h3>
                <?php foreach ($data_4 as $key_4):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_4["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_4["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_4["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_4["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_4["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 4 selesai -->
            <!--obat 5 mulai -->
            <?php if(isset($nama_obat_5)&&!empty($nama_obat_5)):?>
                <h3><?php echo $nama_obat_5;?></h3>
                <?php foreach ($data_5 as $key_5):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_5["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_5["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_5["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_5["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_5["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 5 selesai -->
            <!--obat 6 mulai -->
            <?php if(isset($nama_obat_6)&&!empty($nama_obat_6)):?>
                <h3><?php echo $nama_obat_6;?></h3>
                <?php foreach ($data_6 as $key_6):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_6["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_6["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_6["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_6["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_6["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 6 selesai -->
            <!--obat 7 mulai -->
            <?php if(isset($nama_obat_7)&&!empty($nama_obat_7)):?>
                <h3><?php echo $nama_obat_7;?></h3>
                <?php foreach ($data_7 as $key_7):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_7["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_7["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_7["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_7["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_7["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 7 selesai -->
            <!--obat 8 mulai -->
            <?php if(isset($nama_obat_8)&&!empty($nama_obat_8)):?>
                <h3><?php echo $nama_obat_8;?></h3>
                <?php foreach ($data_8 as $key_8):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_8["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_8["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_8["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_8["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_8["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 8 selesai -->
            <!--obat 9 mulai -->
            <?php if(isset($nama_obat_9)&&!empty($nama_obat_9)):?>
                <h3><?php echo $nama_obat_9;?></h3>
                <?php foreach ($data_9 as $key_9):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_9["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_9["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_9["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_9["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_9["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 9 selesai -->
            <!--obat 10 mulai -->
            <?php if(isset($nama_obat_10)&&!empty($nama_obat_10)):?>
                <h3><?php echo $nama_obat_10;?></h3>
                <?php foreach ($data_10 as $key_10):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_10["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_10["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_10["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_10["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_10["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 10 selesai -->
            <!--obat 11 mulai -->
            <?php if(isset($nama_obat_11)&&!empty($nama_obat_11)):?>
                <h3><?php echo $nama_obat_11;?></h3>
                <?php foreach ($data_11 as $key_11):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_11["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_11["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_11["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_11["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_11["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 11 selesai -->
            <!--obat 12 mulai -->
            <?php if(isset($nama_obat_12)&&!empty($nama_obat_12)):?>
                <h3><?php echo $nama_obat_12;?></h3>
                <?php foreach ($data_12 as $key_12):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_12["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_12["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_12["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_12["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_12["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 12 selesai -->
            <!--obat 13 mulai -->
            <?php if(isset($nama_obat_13)&&!empty($nama_obat_13)):?>
                <h3><?php echo $nama_obat_13;?></h3>
                <?php foreach ($data_13 as $key_13):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_13["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_13["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_13["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_13["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_13["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 13 selesai -->
            <!--obat 14 mulai -->
            <?php if(isset($nama_obat_14)&&!empty($nama_obat_14)):?>
                <h3><?php echo $nama_obat_14;?></h3>
                <?php foreach ($data_14 as $key_14):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_14["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_14["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_14["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_14["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_14["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 14 selesai -->
            <!--obat 15 mulai -->
            <?php if(isset($nama_obat_15)&&!empty($nama_obat_15)):?>
                <h3><?php echo $nama_obat_15;?></h3>
                <?php foreach ($data_15 as $key_15):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_15["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_15["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_15["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_15["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_15["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 15 selesai -->
            <!--obat 16 mulai -->
            <?php if(isset($nama_obat_16)&&!empty($nama_obat_16)):?>
                <h3><?php echo $nama_obat_16;?></h3>
                <?php foreach ($data_16 as $key_16):?>
                    <h4>Indikasi</h4>
                    <p><?php echo $key_16["indikasi"];?></p><br>
                    <h4>Kontraindikasi</h4>
                    <p><?php echo $key_16["kontraindikasi"];?></p><br>
                    <h4>Efek Samping</h4>
                    <p><?php echo $key_16["efek_samping"];?></p><br>
                    <h4>Interaksi Obat</h4>
                    <p><?php echo $key_16["interaksi_obat"];?></p><br>
                    <h4>Parameter Monitoring</h4>
                    <p><?php echo $key_16["parameter_monitoring"];?></p><br>
                <?php endforeach;?>
            <?php endif;?>
            <!--obat 16 selesai -->
        </div>
    </div>
</div>
<div class="pembatas"></div>
<div class="page_lima">
    <div class="SOAP">
        <div class="subject" style="">
                    <div class="header_subject">Subject (S)</div>
                    <div class="kotak_subject">
                        <table style="width:30%;margin-left:3vh;border-bottom:1px solid black;">
                            <tr>
                                <?php if(isset($keluhan_utama)&&!empty($keluhan_utama)):?>
                                <td>Keluhan utama pasien</td>
                                 <td><?php echo $keluhan_utama;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($riwayat_penyakit_sekarang)&&!empty($riwayat_penyakit_sekarang)):?>
                                <td>Riwayat penyakit pasien</td>
                                <td><?php echo $riwayat_penyakit_sekarang;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($merokok)&&!empty($merokok)):?>
                                <td>Kebiasan merokok pasien</td> 
                                <td><?php echo $merokok;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                                <?php if(isset($alkohol)&&!empty($alkohol)):?>
                                <td>Kebiasaan mengonsumsi alkohol pasien</td> 
                                <td><?php echo $alkohol;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($tidur)&&!empty($tidur)):?>
                                <td>Kebiasaan tidur pasien</td> 
                                <td><?php echo $tidur;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($makan)&&!empty($makan)):?>
                                <td>Pola makan pasien</td> <td><?php echo $makan;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($riwayat_pengobatan)&&!empty($riwayat_pengobatan)):?>
                                <td>Riwayat pengobatan pasien</td> 
                                <td><?php echo $riwayat_pengobatan;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($alergi)&&!empty($alergi)):?>
                                <td>Alergi pasien</td> 
                                <td><?php echo $alergi;?></td>
                            <?php endif;?>
                            </tr>

                            <tr>
                            <?php if(isset($diagnosa)&&!empty($diagnosa)):?>
                                <td>Diagnosa pasien</td> 
                                <td><?php echo $diagnosa;?></td>
                            <?php endif;?>
                            </tr>  
                        </table>
                    </div>
        </div>
        <div class="object">
            <div class="header_object">Object (O)</div>
            <div class="kotak_object">
                <div class="pemeriksaan_fisik" style="padding-left:3vh;width:50%">
                    <h4>Pemeriksaan fisik</h4>
                    <table boder="0" cellpadding="3" cellspacing="0" >
                                    <tr>
                                        <td>suhu tubuh (Celcius)</td>
                                        <td><?php echo $_POST["suhu_tubuh"];?></td>
                                        <td><?php echo $suhu_tubuh;?></td>
                                    </tr>

                                    <tr>
                                        <td>Denyut nadi</td>
                                        <td><?php echo $_POST["denyut_nadi"];?></td>
                                        <td><?php echo $denyut_nadi;?></td>
                                    </tr>

                                    <tr>
                                        <td>Laju nafas</td>
                                        <td><?php echo $_POST["laju_nafas"];?></td>
                                        <td><?php echo $laju_nafas;?></td>
                                    </tr>

                                    <tr>
                                        <td>Tekanan darah</td>
                                        <td><?php echo $_POST["tekanan_darah_sistol"];
                                            echo "/";
                                            echo $_POST["tekanan_darah_diastol"];
                                    ?></td>
                                        <td><?php echo $tekanan_darah;?></td>
                                    </tr>

                                    <tr>
                                        <td>Tinggi badan (Cm)</td>
                                        <td><?php echo $tinggi_badan;?></td>
                                    </tr>

                                    <tr>
                                        <td>Berat badan (Kg)</td>
                                        <td><?php echo $tinggi_badan;?></td>
                                    </tr>
                    </table>
                </div>
                <div class="pemeriksaan_laboratorium" style="padding-left:3vh;width:50%;">
                    <h4>Pemeriksaan laboratorium</h4>
                    <table>
                                <!--elektrolit mulai-->
                    <?php if(isset($nilai_natrium) && !empty($nilai_natrium)):?>
                                    <tr>
                                        <td>Natrium </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_natrium;?></td>
                                        <td style="padding-left:2vh;"><?php echo $natrium;?></td>    
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_kalium) && !empty($nilai_kalium)):?>
                                    <tr>
                                        <td>Kalium </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_kalium;?></td>
                                        <td style="padding-left:2vh;"><?php echo $kalium;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_CO2) && !empty($nilai_CO2)):?>
                                    <tr>
                                        <td>CO2 </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_CO2;?></td>
                                        <td style="padding-left:2vh;"><?php echo $CO2;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_klorida) && !empty($nilai_klorida)):?>
                                    <tr>
                                        <td>Klorida </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_klorida;?></td>
                                        <td style="padding-left:2vh;"><?php echo $klorida;?></td>
                                   </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_BUN) && !empty($nilai_BUN)):?>
                                    <tr>
                                        <td>BUN </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_BUN;?></td>
                                        <td style="padding-left:2vh;"><?php echo $BUN;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_creatinine) && !empty($nilai_creatinine)):?>
                                    <tr>
                                        <td>Creatinine </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_creatinine;?></td>
                                        <td style="padding-left:2vh;"><?php echo $creatinine;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_creatinine_clearance) && !empty($nilai_creatinine_clearance)):?>
                                    <tr>
                                        <td>Creatinine clearance </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_creatinine_clearance;?></td>
                                        <td style="padding-left:2vh;"><?php echo $creatinine_clearance;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_GFR) && !empty($nilai_GFR)):?>
                                    <tr>
                                        <td>GFR </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_GFR;?></td>
                                        <td style="padding-left:2vh;"><?php echo $GFR;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_cystatin_c) && !empty($nilai_cystatin_c)):?>
                                    <tr>
                                        <td>Cystatin C </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_cystatin_c;?></td>
                                        <td style="padding-left:2vh;"><?php echo $cystatin_c;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_glukosa_puasa) && !empty($nilai_glukosa_puasa)):?>
                                    <tr>
                                        <td>Glukosa puasa </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_glukosa_puasa;?></td>
                                        <td style="padding-left:2vh;"><?php echo $glukosa_puasa;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_HbA1C) && !empty($nilai_HbA1C)):?>
                                    <tr>
                                        <td>HbA1C </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_HbA1C;?></td>
                                        <td style="padding-left:2vh;"><?php echo $HbA1C;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_kalsium_total) && !empty($nilai_kalsium_total)):?>
                                    <tr>
                                        <td>Kalsium total </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_kalsium_total;?></td>
                                        <td style="padding-left:2vh;"><?php echo $kalsium_total;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_kalsium_bebas) && !empty($nilai_kalsium_bebas)):?>
                                    <tr>
                                        <td>Kalsium bebas </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_kalsium_bebas;?></td>
                                        <td style="padding-left:2vh;"><?php echo $kalsium_bebas;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($_POST["magnesium"]) && !empty($nilai_magnesium)):?>
                                    <tr>
                                        <td>Magnesium </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_magnesium;?></td>
                                        <td style="padding-left:2vh;"><?php echo $magnesium;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_fosfat) && !empty($nilai_fosfat)):?>
                                    <tr>
                                        <td>Fosfat </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_fosfat;?></td>
                                        <td style="padding-left:2vh;"><?php echo $fosfat;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_asam_urat) && !empty($nilai_asam_urat)):?>
                                    <tr>
                                        <td>Asam urat </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_asam_urat;?></td>
                                        <td style="padding-left:2vh;"><?php echo $asam_urat;?></td>
                                    </tr>
                                <?php endif;?>

                            <!-- elektrolit selesai-->
                            <!-- cardiac marker mulai -->

                                <?php if(isset($nilai_CK) && !empty($nilai_CK)):?>
                                    <tr>
                                        <td>CK </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_CK;?></td>
                                        <td style="padding-left:2vh;"><?php echo $CK;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_CK_MB) && !empty($nilai_CK_MB)):?>
                                    <tr>
                                        <td>CK-MB </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_CK_MB;?></td>
                                        <td style="padding-left:2vh;"><?php echo $CK_MB;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_cTnl) && !empty($nilai_cTnl)):?>
                                    <tr>
                                        <td>cTnl </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_cTnl;?></td>
                                        <td style="padding-left:2vh;"><?php echo $cTnl;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_myoglobin) && !empty($nilai_myoglobin)):?>
                                    <tr>
                                        <td>Myoglobin </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_myoglobin;?></td>
                                        <td style="padding-left:2vh;"><?php echo $myoglobin;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_homocystein) && !empty($nilai_homocystein)):?>
                                    <tr>
                                        <td>Homocystein </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_homocystein;?></td>
                                        <td style="padding-left:2vh;"><?php echo $homocystein;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_LDH) && !empty($nilai_LDH)):?>
                                    <tr>
                                        <td>LDH </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_LDH;?></td>
                                        <td style="padding-left:2vh;"><?php echo $LDH;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_BNP) && !empty($nilai_BNP)):?>
                                    <tr>
                                        <td>BNP </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_BNP;?></td>
                                        <td style="padding-left:2vh;"><?php echo $BNP;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_CRP) && !empty($nilai_CRP)):?>
                                    <tr>
                                        <td>CRP </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_CRP;?></td>
                                        <td style="padding-left:2vh;"><?php echo $CRP;?></td>
                                    </tr>
                                <?php endif;?>

                                <?php if(isset($nilai_Hs_CRP) && !empty($nilai_Hs_CRP)):?>
                                    <tr>
                                        <td>Hs-CRP </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_Hs_CRP;?></td>
                                        <td style="padding-left:2vh;"><?php echo $Hs_CRP;?></td>
                                    </tr>
                                <?php endif;?>
                            
                            <!-- cardiac marker selesai-->
                            <!--prtein mulai -->

                    <?php if(isset($nilai_prealbumin) && !empty($nilai_prealbumin)):?>
                                    <tr>
                                        <td>Prealbumin </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_prealbumin;?></td>
                                        <td style="padding-left:2vh;"><?php echo $prealbumin;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_albumin) && !empty($nilai_albumin)):?>
                                    <tr>
                                        <td>Albumin </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_albumin;?></td>
                                        <td style="padding-left:2vh;"><?php echo $albumin;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($_POST["globulin"]) && !empty($nilai_globulin)):?>
                                    <tr>
                                        <td>Globulin </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_globulin;?></td>
                                        <td style="padding-left:2vh;"><?php echo $globulin;?></td>
                                    </tr>
                                <?php endif;?>

                            <!-- protein selesai -->
                            <!--kolesterol mulai -->

                    <?php if(isset($nilai_kolesterol_total) && !empty($nilai_kolesterol_total)):?>
                                    <tr>
                                        <td>Kolesterol total </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_kolesterol_total;?></td>
                                        <td style="padding-left:2vh;"><?php echo $kolesterol_total;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_LDL) && !empty($nilai_LDL)):?>
                                    <tr>
                                        <td>LDL </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_LDL;?></td>
                                        <td style="padding-left:2vh;"><?php echo $LDL;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_HDL) && 
                                !empty($nilai_HDL)):?>
                                <tr>
                                        <td>HDL </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_HDL;?></td>
                                        <td style="padding-left:2vh;"><?php echo $HDL;?></td>
                                    </tr>
                    <?php endif;?>

                    <?php if(isset($nilai_trigliserida_puasa) && 
                                !empty($nilai_trigliserida_puasa)):?>
                                <tr>
                                        <td>HDL </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_trigliserida_puasa;?></td>
                                        <td style="padding-left:2vh;"><?php echo $trigliserida_puasa;?></td>
                                    </tr>
                    <?php endif;?>

                            <!-- kolesterol selesai -->
                            <!-- fungsi hati mulai -->

                    <?php if(isset($nilai_AST) && !empty($nilai_AST)):?>
                                    <tr>
                                        <td>AST </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_AST;?></td>
                                        <td style="padding-left:2vh;"><?php echo $AST;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_ALT) && !empty($nilai_ALT)):?>
                                    <tr>
                                        <td>ALT </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_ALT;?></td>
                                        <td style="padding-left:2vh;"><?php echo $ALT;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_ALP) && !empty($nilai_ALP)):?>
                                    <tr>
                                        <td>ALP </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_ALP;?></td>
                                        <td style="padding-left:2vh;"><?php echo $ALP;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_GGT) && !empty($nilai_GGT)):?>
                                    <tr>
                                        <td>GGT </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_GGT;?></td>
                                        <td style="padding-left:2vh;"><?php echo $GGT;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_biliburin_total) && !empty($nilai_biliburin_total)):?>
                                    <tr>
                                        <td>Bilirubin total </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_biliburin_total;?></td>
                                        <td style="padding-left:2vh;"><?php echo $biliburin_total;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_bilirubin_direct) && !empty($nilai_bilirubin_direct)):?>
                                    <tr>
                                        <td>Bilirubin direct </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_bilirubin_direct;?></td>
                                        <td style="padding-left:2vh;"><?php echo $bilirubin_direct;?></td>
                                    </tr>
                                <?php endif;?>

                            <!-- fungsi hati selesai-->
                            <!-- miscellaneous mulai -->

                    <?php if(isset($nilai_amylase) && !empty($nilai_amylase)):?>
                                    <tr>
                                        <td>Amylase </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_amylase;?></td>
                                        <td style="padding-left:2vh;"><?php echo $amylase;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_lipase) && !empty($nilai_lipase)):?>
                                    <tr>
                                        <td>Lipase </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_lipase;?></td>
                                        <td style="padding-left:2vh;"><?php echo $lipase;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_PSA) && !empty($nilai_PSA)):?>
                                    <tr>
                                        <td>PSA </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_PSA;?></td>
                                        <td style="padding-left:2vh;"><?php echo $PSA;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_TSH) && !empty($nilai_TSH)):?>
                                    <tr>
                                        <td>TSH </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_TSH;?></td>
                                        <td style="padding-left:2vh;"><?php echo $TSH;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_procalcitonin) && !empty($nilai_procalcitonin)):?>
                                    <tr>
                                        <td>Procalcitonin </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_procalcitonin;?></td>
                                        <td style="padding-left:2vh;"><?php echo $procalcitonin;?></td>
                                    </tr>
                                <?php endif;?>
                                <!--data hematologi-->
                                
                    <?php if(isset($nilai_RBC_count) && !empty($nilai_RBC_count)):?>
                                    <tr>
                                        <td>RBC count </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_RBC_count;?></td>
                                        <td style="padding-left:2vh;"><?php echo $RBC_count;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_Hct) && !empty($nilai_Hct)):?>
                                    <tr>
                                        <td>Hematokrit </td>
                                        <td style="padding-left:2vh;"$nilai_Hct;?></td>
                                        <td style="padding-left:2vh;"><?php echo $Hct;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_Hgb) && !empty($nilai_Hgb)):?>
                                    <tr>
                                        <td>Hemoglobin </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_Hgb;?></td>
                                        <td style="padding-left:2vh;"><?php echo $Hgb;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_MCV) && !empty($nilai_MCV)):?>
                                    <tr>
                                        <td>MCV</td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_MCV;?></td>
                                        <td style="padding-left:2vh;"><?php echo $MCV;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_MCH) && !empty($nilai_MCH)):?>
                                    <tr>
                                        <td>MCH </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_MCH;?></td>
                                        <td style="padding-left:2vh;"><?php echo $MCH;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_MCHC) && !empty($nilai_MCHC)):?>
                                    <tr>
                                        <td>MCHC </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_MCHC;?></td>
                                        <td style="padding-left:2vh;"><?php echo $MCHC;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_ESR) && !empty($nilai_ESR)):?>
                                    <tr>
                                        <td>ESR </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_ESR;?></td>
                                        <td style="padding-left:2vh;"><?php echo $ESR;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_WBC_count) && !empty($nilai_WBC_count)):?>
                                    <tr>
                                        <td>WBC count </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_WBC_count;?></td>
                                        <td style="padding-left:2vh;"><?php echo $WBC_count;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_neutrofil) && !empty($nilai_neutrofil)):?>
                                    <tr>
                                        <td>Neutrofil </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_neutrofil;?></td>
                                        <td style="padding-left:2vh;"><?php echo $neutrofil;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_linfosit) && !empty($nilai_linfosit)):?>
                                    <tr>
                                        <td>Linfosit </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_linfosit;?></td>
                                        <td style="padding-left:2vh;"><?php echo $linfosit;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_monosit) && !empty($nilai_monosit)):?>
                                    <tr>
                                        <td>Monosit </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_monosit;?></td>
                                        <td style="padding-left:2vh;"><?php echo $monosit;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_eosinofil) && !empty($nilai_eosinofil)):?>
                                    <tr>
                                        <td>Eosinofil </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_eosinofil;?></td>
                                        <td style="padding-left:2vh;"><?php echo $eosinofil;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_basofil) && !empty($nilai_basofil)):?>
                                    <tr>
                                        <td>Basofil </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_basofil;?></td>
                                        <td style="padding-left:2vh;"><?php echo $basofil;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_platelet) && !empty($nilai_platelet)):?>
                                    <tr>
                                        <td>Platelet </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_platelet;?></td>
                                        <td style="padding-left:2vh;"><?php echo $platelet;?></td>
                                    </tr>
                                <?php endif;?>

                    <?php if(isset($nilai_Fe) && !empty($nilai_Fe)):?>
                                    <tr>
                                        <td>Fe </td>
                                        <td style="padding-left:2vh;"><?php echo $nilai_Fe;?></td>
                                        <td style="padding-left:2vh;"><?php echo $Fe;?></td>
                                    </tr>
                                <?php endif;?>
                    </table>
                </div>
            </div>
        </div>
        <div class="assesment">
            <div class="header_assesment">Assesment (A) </div>
            <div class="kotak_assesment">
                <div class="assesment_data_pemeriksaan_fisik_dan_lab">
                <ul>
                    <!--data lab mulai-->
                <!--elektrolit-->
                <?php if(isset($nilai_natrium)&&!empty($nilai_natrium)):?>
                    <li><?php echo $keterangan_natrium;?></li>
                <?php endif;?>

                <?php if(isset($nilai_kalium)&&!empty($nilai_kalium)):?>
                    <li><?php echo $keterangan_kalium;?></li>
                <?php endif;?>

                <?php if(isset($nilai_klorida)&&!empty($nilai_klorida)):?>
                    <li><?php echo $keterangan_klorida;?></li>
                <?php endif;?>

                <?php if(isset($nilai_BUN)&&!empty($nilai_BUN)):?>
                    <li><?php echo $keterangan_BUN;?></li>
                <?php endif;?>

                <?php if(isset($nilai_creatinine)&&!empty($nilai_creatinine)):?>
                    <li><?php echo $keterangan_creatinine;?></li>
                <?php endif;?>

                <?php if(isset($nilai_creatinine_clearance)&&!empty($nilai_creatinine_clearance)):?>
                    <li><?php echo $keterangan_creatinine_clearance;?></li>
                <?php endif;?>

                <?php if(isset($nilai_GFR)&&!empty($nilai_GFR)):?>
                    <li><?php echo $keterangan_GFR;?></li>
                <?php endif;?>

                <?php if(isset($nilai_cystatin_c)&&!empty($nilai_cystatin_c)):?>
                    <li><?php echo $keterangan_cystatin_c;?></li>
                <?php endif;?>

                <?php if(isset($nilai_glukosa_puasa)&&!empty($nilai_glukosa_puasa)):?>
                    <li><?php echo $keterangan_glukosa_puasa;?></li>
                <?php endif;?>

                <?php if(isset($nilai_HbA1C)&&!empty($nilai_HbA1C)):?>
                    <li><?php echo $keterangan_HbA1C;?></li>
                <?php endif;?>

                <?php if(isset($nilai_kalsium_total)&&!empty($nilai_kalsium_total)):?>
                    <li><?php echo $keterangan_kalsium_total;?></li>
                <?php endif;?>

                <?php if(isset($nilai_kalsium_bebas)&&!empty($nilai_kalsium_bebas)):?>
                    <li><?php echo $keterangan_kalsium_bebas;?></li>
                <?php endif;?>

                <?php if(isset($nilai_magnesium)&&!empty($nilai_magnesium)):?>
                    <li><?php echo $keterangan_magnesium;?></li>
                <?php endif;?>

                <?php if(isset($nilai_fosfat)&&!empty($nilai_fosfat)):?>
                    <li><?php echo $keterangan_fosfat;?></li>
                <?php endif;?>

                <?php if(isset($nilai_asam_urat)&&!empty($nilai_asam_urat)):?>
                    <li><?php echo $keterangan_asam_urat;?></li>
                <?php endif;?>


                <!--cardiac marker-->
                <?php if(isset($nilai_CK)&&!empty($nilai_CK)):?>
                    <li><?php echo $keterangan_CK;?></li>
                <?php endif;?>

                <?php if(isset($nilai_CK_MB)&&!empty($nilai_CK_MB)):?>
                    <li><?php echo $keterangan_CK_MB;?></li>
                <?php endif;?>

                <?php if(isset($nilai_cTnl)&&!empty($nilai_cTnl)):?>
                    <li><?php echo $keterangan_cTnl;?></li>
                <?php endif;?>

                <?php if(isset($nilai_myoglobin)&&!empty($nilai_nmyoglobin)):?>
                    <li><?php echo $keterangan_myoglobin;?></li>
                <?php endif;?>

                <?php if(isset($nilai_homocystein)&&!empty($nilai_homocystein)):?>
                    <li><?php echo $keterangan_homocystein;?></li>
                <?php endif;?>

                <?php if(isset($nilai_LDH)&&!empty($nilai_LDH)):?>
                    <li><?php echo $keterangan_LDH;?></li>
                <?php endif;?>

                <?php if(isset($nilai_BNP)&&!empty($nilai_BNP)):?>
                    <li><?php echo $keterangan_BNP;?></li>
                <?php endif;?>

                <?php if(isset($nilai_CRP)&&!empty($nilai_CRP)):?>
                    <li><?php echo $keterangan_CRP;?></li>
                <?php endif;?>

                <?php if(isset($nilai_Hs_CRP)&&!empty($nilai_Hs_CRP)):?>
                    <li><?php echo $keterangan_Hs_CRP;?></li>
                <?php endif;?>

                <!--protein-->
                <?php if(isset($nilai_prealbumin)&&!empty($nilai_prealbumin)):?>
                    <li><?php echo $keterangan_prealbumin;?></li>
                <?php endif;?>

                <?php if(isset($nilai_albumin)&&!empty($nilai_albumin)):?>
                    <li><?php echo $keterangan_albumin;?></li>
                <?php endif;?>

                <?php if(isset($nilai_globulin)&&!empty($nilai_globulin)):?>
                    <li><?php echo $keterangan_globulin;?></li>
                <?php endif;?>

                <!--kolesterol-->
                <?php if(isset($nilai_kolesterol_total)&&!empty($nilai_kolesterol_total)):?>
                    <li><?php echo $keterangan_kolesterol_total;?></li>
                <?php endif;?>

                <?php if(isset($nilai_LDL)&&!empty($nilai_LDL)):?>
                    <li><?php echo $keterangan_LDL;?></li>
                <?php endif;?>

                <?php if(isset($nilai_HDL)&&!empty($nilai_HDL)):?>
                    <li><?php echo $keterangan_HDL;?></li>
                <?php endif;?>

                <?php if(isset($nilai_trigliserida_puasa)&&!empty($nilai_trigliserida_puasa)):?>
                    <li><?php echo $keterangan_trigliserida_puasa;?></li>
                <?php endif;?>

                <!--fungsi hati-->
                <?php if(isset($nilai_AST)&&!empty($nilai_AST)):?>
                    <li><?php echo $keterangan_AST;?></li>
                <?php endif;?>

                <?php if(isset($nilai_ALT)&&!empty($nilai_ALT)):?>
                    <li><?php echo $keterangan_ALT;?></li>
                <?php endif;?>

                <?php if(isset($nilai_ALP)&&!empty($nilai_ALP)):?>
                    <li><?php echo $keterangan_ALP;?></li>
                <?php endif;?>

                <?php if(isset($nilai_GGT)&&!empty($nilai_GGT)):?>
                    <li><?php echo $keterangan_GGT;?></li>
                <?php endif;?>

                <?php if(isset($nilai_bilirubin_total)&&!empty($nilai_bilirubin_total)):?>
                    <li><?php echo $keterangan_bilirubin_total;?></li>
                <?php endif;?>

                <?php if(isset($nilai_bilirubin_direct)&&!empty($nilai_bilirubin_direct)):?>
                    <li><?php echo $keterangan_bilirubin_direct;?></li>
                <?php endif;?>

                <!--miscellanous-->
                <?php if(isset($nilai_amylase)&&!empty($nilai_amylase)):?>
                    <li><?php echo $keterangan_amylase;?></li>
                <?php endif;?>

                <?php if(isset($nilai_lipase)&&!empty($nilai_lipase)):?>
                    <li><?php echo $keterangan_lipase;?></li>
                <?php endif;?>

                <?php if(isset($nilai_PSA)&&!empty($nilai_PSA)):?>
                    <li><?php echo $keterangan_PSA;?></li>
                <?php endif;?>

                <?php if(isset($nilai_TSH)&&!empty($nilai_TSH)):?>
                    <li><?php echo $keterangan_TSH;?></li>
                <?php endif;?>

                <?php if(isset($nilai_procalcitonin)&&!empty($nilai_procalcitonin)):?>
                    <li><?php echo $keterangan_procalcitonin;?></li>
                <?php endif;?>

                <!--hematologi-->
                <?php if(isset($nilai_RBC_count)&&!empty($nilai_RBC_count)):?>
                    <li><?php echo $keterangan_RBC_count;?></li>
                <?php endif;?>

                <?php if(isset($nilai_Hct)&&!empty($nilai_Hct)):?>
                    <li><?php echo $keterangan_Hct;?></li>
                <?php endif;?>

                <?php if(isset($nilai_Hgb)&&!empty($nilai_Hgb)):?>
                    <li><?php echo $keterangan_Hgb;?></li>
                <?php endif;?>

                <?php if(isset($nilai_MCV)&&!empty($nilai_MCV)):?>
                    <li><?php echo $keterangan_MCV;?></li>
                <?php endif;?>

                <?php if(isset($nilai_MCH)&&!empty($nilai_MCH)):?>
                    <li><?php echo $keterangan_MCH;?></li>
                <?php endif;?>

                <?php if(isset($nilai_ESR)&&!empty($nilai_ESR)):?>
                    <li><?php echo $keterangan_ESR;?></li>
                <?php endif;?>

                <?php if(isset($nilai_WBC_count)&&!empty($nilai_WBC_count)):?>
                    <li><?php echo $keterangan_WBC_count;?></li>
                <?php endif;?>

                <?php if(isset($nilai_limfosit)&&!empty($nilai_limfosit)):?>
                    <li><?php echo $keterangan_limfosit;?></li>
                <?php endif;?>

                <?php if(isset($nilai_platelet)&&!empty($nilai_platelet)):?>
                    <li><?php echo $keterangan_platelet;?></li>
                <?php endif;?>

                <?php if(isset($nilai_monosit)&&!empty($nilai_monosit)):?>
                    <li><?php echo $keterangan_monosit;?></li>
                <?php endif;?>

                <?php if(isset($nilai_eosinofil)&&!empty($nilai_eosinofil)):?>
                    <li><?php echo $keterangan_eosinofil;?></li>
                <?php endif;?>

                <?php if(isset($nilai_Fe)&&!empty($nilai_Fe)):?>
                    <li><?php echo $keterangan_Fe;?></li>
                <?php endif;?>

                <?php if(isset($nilai_neutrofil)&&!empty($nilai_neutrofil)):?>
                    <li><?php echo $keterangan_neutrofil;?></li>
                <?php endif;?>

                <?php if(isset($nilai_basofil)&&!empty($nilai_basofil)):?>
                    <li><?php echo $keterangan_basofil;?></li>
                <?php endif;?>
                </ul>
                </div>
                <div class="assesment_pengobatan">
                    <ul><!--obat_1 mulai-->
                        <?php if(isset($nama_obat_1)&&!empty($nama_obat_1)):?>
                            <li><b><?php echo $nama_obat_1;?></b></li>
                            <?php echo masalah_dosis_obat_1($dosis_obat_1);?><br>
                            <?php echo dosis_1($dosis_obat_1);?><br>
                            <?php echo frekuensi_pemberian_1($frekuensi_pemberian_obat_1);?><br>
                        <?php endif;?>
                    <!--obat_1 selesai-->

                    <!--obat_2 mulai-->
                        <?php if(isset($nama_obat_2)&&!empty($nama_obat_2)):?>
                            <li><b><?php echo $nama_obat_2;?></b></li>
                            <?php echo masalah_dosis_obat_2($dosis_obat_2);?><br>
                            <?php echo dosis_2($dosis_obat_2);?><br>
                            <?php echo frekuensi_pemberian_2($frekuensi_pemberian_obat_2);?><br>
                        <?php endif;?>
                    <!--obat_2 selesai-->

                    <!--obat_3 mulai-->
                        <?php if(isset($nama_obat_3)&&!empty($nama_obat_3)):?>
                            <li><b><?php echo $nama_obat_3;?></b></li>
                            <?php echo masalah_dosis_obat_3($dosis_obat_3);?><br>
                            <?php echo dosis_3($dosis_obat_3);?><br>
                            <?php echo frekuensi_pemberian_3($frekuensi_pemberian_obat_3);?><br>
                        <?php endif;?>
                    <!--obat_3 selesai-->

                    <!--obat_4 mulai-->
                        <?php if(isset($nama_obat_4)&&!empty($nama_obat_4)):?>
                            <li><b><?php echo $nama_obat_4;?></b></li>
                            <?php echo masalah_dosis_obat_4($dosis_obat_4);?><br>
                            <?php echo dosis_4($dosis_obat_4);?><br>
                            <?php echo frekuensi_pemberian_4($frekuensi_pemberian_obat_4);?><br>
                        <?php endif;?>
                    <!--obat_4 selesai-->

                    <!--obat_5 mulai-->
                        <?php if(isset($nama_obat_5)&&!empty($nama_obat_5)):?>
                            <li><b><?php echo $nama_obat_5;?></b></li>
                            <?php echo masalah_dosis_obat_5($dosis_obat_5);?><br>
                            <?php echo dosis_5($dosis_obat_5);?><br>
                            <?php echo frekuensi_pemberian_5($frekuensi_pemberian_obat_5);?><br>
                        <?php endif;?>
                    <!--obat_5 selesai-->

                    <!--obat_6 mulai-->
                        <?php if(isset($nama_obat_6)&&!empty($nama_obat_6)):?>
                            <li><b><?php echo $nama_obat_6;?></b></li>
                            <?php echo masalah_dosis_obat_6($dosis_obat_6);?><br>
                            <?php echo dosis_6($dosis_obat_6);?><br>
                            <?php echo frekuensi_pemberian_6($frekuensi_pemberian_obat_6);?><br>
                        <?php endif;?>
                    <!--obat_6 selesai-->

                    <!--obat_7 mulai-->
                        <?php if(isset($nama_obat_7)&&!empty($nama_obat_7)):?>
                            <li><b><?php echo $nama_obat_7;?></b></li>
                            <?php echo masalah_dosis_obat_7($dosis_obat_7);?><br>
                            <?php echo dosis_7($dosis_obat_7);?><br>
                            <?php echo frekuensi_pemberian_7($frekuensi_pemberian_obat_7);?><br>
                        <?php endif;?>
                    <!--obat_7 selesai-->

                    <!--obat_8 mulai-->
                        <?php if(isset($nama_obat_8)&&!empty($nama_obat_8)):?>
                            <li><b><?php echo $nama_obat_8;?></b></li>
                            <?php echo masalah_dosis_obat_8($dosis_obat_8);?><br>
                            <?php echo dosis_8($dosis_obat_8);?><br>
                            <?php echo frekuensi_pemberian_8($frekuensi_pemberian_obat_8);?><br>
                        <?php endif;?>
                    <!--obat_8 selesai-->

                    <!--obat_9 mulai-->
                        <?php if(isset($nama_obat_9)&&!empty($nama_obat_9)):?>
                            <li><b><?php echo $nama_obat_9;?></b></li>
                            <?php echo masalah_dosis_obat_9($dosis_obat_9);?><br>
                            <?php echo dosis_9($dosis_obat_9);?><br>
                            <?php echo frekuensi_pemberian_9($frekuensi_pemberian_obat_9);?><br>
                        <?php endif;?>
                    <!--obat_9 selesai-->

                    <!--obat_10 mulai-->
                        <?php if(isset($nama_obat_10)&&!empty($nama_obat_10)):?>
                            <li><b><?php echo $nama_obat_10;?></b></li>
                            <?php echo masalah_dosis_obat_10($dosis_obat_10);?><br>
                            <?php echo dosis_10($dosis_obat_10);?><br>
                            <?php echo frekuensi_pemberian_10($frekuensi_pemberian_obat_10);?><br>
                        <?php endif;?>
                    <!--obat_10 selesai-->

                    <!--obat_11 mulai-->
                        <?php if(isset($nama_obat_11)&&!empty($nama_obat_11)):?>
                            <li><b><?php echo $nama_obat_11;?></b></li>
                            <?php echo masalah_dosis_obat_11($dosis_obat_11);?><br>
                            <?php echo dosis_11($dosis_obat_11);?><br>
                            <?php echo frekuensi_pemberian_11($frekuensi_pemberian_obat_11);?><br>
                        <?php endif;?>
                    <!--obat_11 selesai-->

                    <!--obat_12 mulai-->
                        <?php if(isset($nama_obat_12)&&!empty($nama_obat_12)):?>
                            <li><b><?php echo $nama_obat_12;?></b></li>
                            <?php echo masalah_dosis_obat_12($dosis_obat_1);?><br>
                            <?php echo dosis_12($dosis_obat_12);?><br>
                            <?php echo frekuensi_pemberian_12($frekuensi_pemberian_obat_12);?><br>
                        <?php endif;?>
                    <!--obat_12 selesai-->

                    <!--obat_13 mulai-->
                        <?php if(isset($nama_obat_13)&&!empty($nama_obat_13)):?>
                            <li><b><?php echo $nama_obat_13;?></b></li>
                            <?php echo masalah_dosis_obat_13($dosis_obat_13);?><br>
                            <?php echo dosis_13($dosis_obat_13);?><br>
                            <?php echo frekuensi_pemberian_13($frekuensi_pemberian_obat_13);?><br>
                        <?php endif;?>
                    <!--obat_13 selesai-->

                    <!--obat_14 mulai-->
                        <?php if(isset($nama_obat_14)&&!empty($nama_obat_14)):?>
                            <li><b><?php echo $nama_obat_14;?></b></li>
                            <?php echo masalah_dosis_obat_14($dosis_obat_14);?><br>
                            <?php echo dosis_14($dosis_obat_14);?><br>
                            <?php echo frekuensi_pemberian_14($frekuensi_pemberian_obat_14);?><br>
                        <?php endif;?>
                    <!--obat_14 selesai-->

                    <!--obat_15 mulai-->
                        <?php if(isset($nama_obat_15)&&!empty($nama_obat_15)):?>
                            <li><b><?php echo $nama_obat_15;?></b></li>
                            <?php echo masalah_dosis_obat_15($dosis_obat_15);?><br>
                            <?php echo dosis_15($dosis_obat_15);?><br>
                            <?php echo frekuensi_pemberian_15($frekuensi_pemberian_obat_15);?><br>
                        <?php endif;?>
                    <!--obat_15 selesai-->

                    <!--obat_16 mulai-->
                        <?php if(isset($nama_obat_16)&&!empty($nama_obat_16)):?>
                            <li><b><?php echo $nama_obat_16;?></b></li>
                            <?php echo masalah_dosis_obat_16($dosis_obat_16);?><br>
                            <?php echo dosis_16($dosis_obat_16);?><br>
                            <?php echo frekuensi_pemberian_16($frekuensi_pemberian_obat_16);?><br>
                        <?php endif;?>
                    <!--obat_16 selesai-->
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="planning">
            <div class="header_planning">Planning (P)</div>
            <div class="kotak_planning">
                <div class="planning_obat">
                <ul>
                    <!--obat_1 mulai-->
                    <?php if(isset($nama_obat_1)&&!empty($nama_obat_1)):?>
                        <?php if(dosis_1($dosis_obat_1)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_1 as $key_1):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_1;
                                echo " diubah menjadi ";
                                echo $key_1["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_1($frekuensi_pemberian_obat_1)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_1 as $key_1):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_1;
                                echo " menjadi ";
                                echo $key_1["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_1 selesai-->

                    <!--obat_2 mulai-->
                    <?php if(isset($nama_obat_2)&&!empty($nama_obat_2)):?>
                        <?php if(dosis_2($dosis_obat_2)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_2 as $key_2):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_2;
                                echo " diubah menjadi ";
                                echo $key_2["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_2($frekuensi_pemberian_obat_2)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_2 as $key_2):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_2;
                                echo " menjadi ";
                                echo $key_2["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_2 selesai-->

                    <!--obat_3 mulai-->
                    <?php if(isset($nama_obat_3)&&!empty($nama_obat_3)):?>
                        <?php if(dosis_3($dosis_obat_3)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_3 as $key_3):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_3;
                                echo " diubah menjadi ";
                                echo $key_3["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_3($frekuensi_pemberian_obat_3)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_3 as $key_3):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_3;
                                echo " menjadi ";
                                echo $key_3["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_3 selesai-->

                    <!--obat_4 mulai-->
                    <?php if(isset($nama_obat_4)&&!empty($nama_obat_4)):?>
                        <?php if(dosis_4($dosis_obat_4)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_4 as $key_4):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_4;
                                echo " diubah menjadi ";
                                echo $key_4["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_4($frekuensi_pemberian_obat_4)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_4 as $key_4):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_4;
                                echo " menjadi ";
                                echo $key_4["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_4 selesai-->

                    <!--obat_5 mulai-->
                    <?php if(isset($nama_obat_5)&&!empty($nama_obat_5)):?>
                        <?php if(dosis_5($dosis_obat_5)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_5 as $key_5):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_5;
                                echo " diubah menjadi ";
                                echo $key_5["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_5($frekuensi_pemberian_obat_5)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_5 as $key_5):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_5;
                                echo " menjadi ";
                                echo $key_5["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_5 selesai-->

                    <!--obat_6 mulai-->
                    <?php if(isset($nama_obat_6)&&!empty($nama_obat_6)):?>
                        <?php if(dosis_6($dosis_obat_6)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_6 as $key_6):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_6;
                                echo " diubah menjadi ";
                                echo $key_6["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_6($frekuensi_pemberian_obat_6)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_6 as $key_6):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_6;
                                echo " menjadi ";
                                echo $key_6["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_6 selesai-->

                    <!--obat_7 mulai-->
                    <?php if(isset($nama_obat_7)&&!empty($nama_obat_7)):?>
                        <?php if(dosis_7($dosis_obat_7)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_7 as $key_7):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_7;
                                echo " diubah menjadi ";
                                echo $key_7["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_7($frekuensi_pemberian_obat_7)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_7 as $key_7):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_7;
                                echo " menjadi ";
                                echo $key_7["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_7 selesai-->

                    <!--obat_8 mulai-->
                    <?php if(isset($nama_obat_8)&&!empty($nama_obat_8)):?>
                        <?php if(dosis_8($dosis_obat_8)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_8 as $key_8):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_8;
                                echo " diubah menjadi ";
                                echo $key_8["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_8($frekuensi_pemberian_obat_8)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_8 as $key_8):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_8;
                                echo " menjadi ";
                                echo $key_8["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_8 selesai-->

                    <!--obat_9 mulai-->
                    <?php if(isset($nama_obat_9)&&!empty($nama_obat_9)):?>
                        <?php if(dosis_9($dosis_obat_9)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_9 as $key_9):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_9;
                                echo " diubah menjadi ";
                                echo $key_9["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_9($frekuensi_pemberian_obat_9)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_9 as $key_9):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_9;
                                echo " menjadi ";
                                echo $key_9["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_9 selesai-->

                    <!--obat_10 mulai-->
                    <?php if(isset($nama_obat_10)&&!empty($nama_obat_10)):?>
                        <?php if(dosis_10($dosis_obat_10)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_10 as $key_10):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_10;
                                echo " diubah menjadi ";
                                echo $key_10["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_10($frekuensi_pemberian_obat_10)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_10 as $key_10):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_10;
                                echo " menjadi ";
                                echo $key_10["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_10 selesai-->

                    <!--obat_11 mulai-->
                    <?php if(isset($nama_obat_11)&&!empty($nama_obat_11)):?>
                        <?php if(dosis_11($dosis_obat_11)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_11 as $key_11):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_11;
                                echo " diubah menjadi ";
                                echo $key_11["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_11($frekuensi_pemberian_obat_11)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_11 as $key_11):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_11;
                                echo " menjadi ";
                                echo $key_11["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_11 selesai-->

                    <!--obat_12 mulai-->
                    <?php if(isset($nama_obat_12)&&!empty($nama_obat_12)):?>
                        <?php if(dosis_12($dosis_obat_12)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_12 as $key_12):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_12;
                                echo " diubah menjadi ";
                                echo $key_12["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_12($frekuensi_pemberian_obat_12)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_12 as $key_12):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_12;
                                echo " menjadi ";
                                echo $key_12["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_12 selesai-->

                    <!--obat_13 mulai-->
                    <?php if(isset($nama_obat_13)&&!empty($nama_obat_13)):?>
                        <?php if(dosis_13($dosis_obat_13)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_13 as $key_13):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_13;
                                echo " diubah menjadi ";
                                echo $key_13["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_13($frekuensi_pemberian_obat_13)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_13 as $key_13):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_13;
                                echo " menjadi ";
                                echo $key_13["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_13 selesai-->

                    <!--obat_14 mulai-->
                    <?php if(isset($nama_obat_14)&&!empty($nama_obat_14)):?>
                        <?php if(dosis_14($dosis_obat_14)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_14 as $key_14):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_14;
                                echo " diubah menjadi ";
                                echo $key_14["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_14($frekuensi_pemberian_obat_14)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_14 as $key_14):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_14;
                                echo " menjadi ";
                                echo $key_14["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_14 selesai-->

                    <!--obat_15 mulai-->
                    <?php if(isset($nama_obat_15)&&!empty($nama_obat_15)):?>
                        <?php if(dosis_15($dosis_obat_15)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_15 as $key_15):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_15;
                                echo " diubah menjadi ";
                                echo $key_15["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_15($frekuensi_pemberian_obat_15)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_15 as $key_15):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_15;
                                echo " menjadi ";
                                echo $key_15["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_15 selesai-->

                    <!--obat_16 mulai-->
                    <?php if(isset($nama_obat_16)&&!empty($nama_obat_16)):?>
                        <?php if(dosis_16($dosis_obat_16)!="dosis yang diberikan sudah tepat"):?>
                            <?php foreach ($data_16 as $key_16):?>
                                <li><?php echo "I3.2 : dosis ";   echo $nama_obat_16;
                                echo " diubah menjadi ";
                                echo $key_16["dosis_lazim_sekali_pakai"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php if(frekuensi_pemberian_16($frekuensi_pemberian_obat_16)!="frekuensi pemberian obat sudah tepat"):?>
                            <?php foreach ($data_16 as $key_16):?>
                                <li><?php echo "Sesuaikan frekuensi pemberian ";   echo $nama_obat_16;
                                echo " menjadi ";
                                echo $key_16["frekuensi_pemberian"];?></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
                    <!--obat_16 selesai-->
                    </ul>

                </div>
                <div class="planning_non_obat">
                    <ul>
                    <?php if($merokok="sesekali"||$merokok="sering atau perokok aktif"):?>
                        <li><?php echo "Anjurkan pasien untuk menghentikan kebiasaan merokok";?></li>
                    <?php endif;?>
                    <?php if($alkohol="sesekali"||$alkohol="sering"):?>
                        <li><?php echo "Anjurkan pasien untuk menghentikan kebiasaan mengonsumsi minumam beralkohol";?></li>
                    <?php endif;?>
                    <?php if($tidur="tidak teratur"||$tidur="sering bergadang"):?>
                        <li><?php echo "Anjurkan pasien untuk beristirahat yang cukup";?><</li>
                    <?php endif;?>
                    <?php if($makan="tidak teratur"):?>
                        <li><?php echo "Anjurkan pasien untuk menjaga pola makan dengan teratur, dan anjurkan juga untuk mengunsumsi makanan yang sehat dan bergizi";?></li>
                    <?php endif;?>
                    <?php if((isset($nilai_creatinine)&&!empty($nilai_creatinine))||(isset($nilai_creatinine_clearance)&&!empty($nilai_creatinine_clearance))||(isset($nilai_GFR)&&!empty($nilai_GFR))):?>
                        <?php if(($creatinine!="kadar creatinine normal")||($creatinine_clearance!="Creatinine clearance normal")||($GFR!="GFR normal")):?>
                            <li><?php echo "Periksa data GFR, creatinine clearance, dan creatinine, dan sesuaikan dosis tiap-tiap obat berdasarkan data pada bagian keterangan Hasil Analisa Pengobatan";?></li>
                        <?php endif;?>
                    <?php endif;?>
                    <li><?php echo "Edukasi pasien terkait efek samping obat (informasi lengkap terdapat di bagian informasi obat)";?></li>
                    <li><?php echo "Pantau parameter monitoring obat yang diberikan pada pasien (informasi lengkap ada di bagian Informasi Obat";?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pembatas"></div>
<div class="kembali_ke_laman_depan">
    <a href="index.php">kembali ke laman depan</a>
</div>
</body>
</html>