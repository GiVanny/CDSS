
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
    <link rel="stylesheet" href="style_baru.css">
    <style>
    .page_hematologi {
        display:flex;
        flex-direction: column;
        background-image: url(BG_page_satu.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width:100%;
        padding-bottom: 3vh;
    }
    .page_hematologi .kotak_input {
    display:flex;
    justify-content:space-around;
    }

    .kotak_tabel_1, .kotak_tabel_2 {
        display:inline-block;
        border:1px solid rgb(9, 241, 241);
        border-radius: 10px;
        width: 45%;  
        background-color: rgba(22, 21, 21, 0.226);
        backdrop-filter: blur(20px);
        color:white;
        margin-top:2vh;
    }
    .tabel_1, .tabel_2 {
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
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
<div class="hello_world">
    <div class="kotak_hello">
        <h2>Hello World !</h2>
    </div>
</div>
<div class="pembatas"></div>
<form action="output.php" method="post">
<div class="page_satu">
        <div class="kotak_data_pasien">
            <div class="header">
                <h4>Data pasien</h4>
            </div>
            <div class="kotak_tabel">
                 <!-- tabel data pasien mulai -->
                <table name="data_pasien">
                    <tr>
                        <td><label for="nama_pasien">Nama pasien </label></td>
                        <td><input type="text" name="nama_pasien" id="nama_pasien"></td>
                    </tr>
                    <tr>
                        <td><label for="jenis_kelamin">Jenis kelamin</label></td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
                            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td><label for="usia">Usia</label></td>
                        <td><input type="number" name="usia" id="usia"></td>
                    </tr>
                </table>
                <!-- tabel data pasien selesai -->
            </div>           
        </div>
        <div class="kotak_pengumpulan_data_dan_informasi">
            <div class="header">
                <h4>Pengumpulan data dan informasi</h4>
            </div>
            <div class="kotak_tabel">
                 <!--tabel pengumpulan data dan informasi mulai -->
                <table name="pengumpulan_data_dan_informasi" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><label for="keluhan_utama">Keluhan utama</label></td>
                        <td><input type="text" name="keluhan_utama" id="keluhan_utama"></td>
                    </tr>
                    <tr>
                        <td><label for="riwayat_penyakit_sekarang">Riwayat penyakit sekarang</label></td>
                        <td><input type="text" name="riwayat_penyakit_sekarang" id="riwayat_penyakit_sekarang"></td>
                    </tr>
                    <tr>
                        <td><label for="kebiasaan_merokok">Kebiasaan merokok</label></td>
                        <td>
                            <select name="kebiasaan_merokok" id="kebiasaan_merokok">
                                <option value="tidak merokok">tidak merokok</option>
                                <option value="sesekali">sesekali</option>
                                <option value="sering atau perokok aktif">sering/perokok aktif</option>
                                <option value="sudah berhenti">sudah berhenti</option>
                            </select>    
                        <!--<input type="text" name="kebiasaan_merokok" id="kebiasaan_merokok">-->
                        </td>
                    </tr>
                    <tr>
                        <td><label for="alkohol">Kebiasaan mengonsumsi alkohol</label></td>
                        <td>
                        <select name="alkohol" id="alkohol">
                                <option value="tidak mengonsumsi alkohol">tidak mengonsumsi alkhol</option>
                                <option value="sesekali">sesekali</option>
                                <option value="sering">sering</option>
                                <option value="sudah berhenti">sudah berhenti</option>
                            </select>     
                        <!--<input type="text" name="alkohol" id="alkohol">-->
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tidur">Kebiasan tidur/istirahat</label></td>
                        <td>
                        <select name="tidur" id="tidur">
                                <option value="teratur">teratur</option>
                                <option value="tidak teratur">tidak teratur</option>
                                <option value="sering bergadang">sering bergadang</option>
                            </select>     
                        <!--<input type="text" name="tidur" id="tidur">-->
                        </td>
                    </tr>
                    <tr>
                        <td><label for="makan">Pola makan</label></td>
                        <td>
                            <select name="makan" id="makan">
                                <option value="teratur">teratur</option>
                            <option value="tidak teratur">tidak teratur</option>
                            </select>
                        <!--<input type="text" name="makan" id="makan">-->
                        </td>
                    </tr>
                    <tr>
                        <td><label for="riwayat_pengobatan">Riwayat pengobatan</label></td>
                        <td><input type="text" name="riwayat_pengobatan" id="riwayat_pengobatan"></td>
                    </tr>
                    <tr>
                        <td><label for="alergi">Riwayat alergi</label></td>
                        <td><input type="text" name="alergi" id="alergi"></td>
                    </tr>
                    <tr>
                        <td><label for="diagnosa">Diagnosa</label></td>
                        <td><input type="text" name="diagnosa" id="diagnosa"></td>
                    </tr>
                </table>

            </div>
            <!-- tabel pengumpulan data dan informasi selesai-->
        </div>
        <div class="kotak_pemeriksaan_fisik">
            <!-- tabel pemeriksaan fisik mulai -->
            <div class="header">
                <h4>Pemeriksaan fisik</h4>
            </div>
            <div class="kotak_tabel">
                <table name="pemeriksaan_fisik" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><label for="suhu_tubuh">Suhu tubuh</label></td>
                        <td><input type="number" step="0.1" name="suhu_tubuh" id="suhu_tubuh"></td>
                    </tr>
                    <tr>
                        <td><label for="denyut_nadi">Denyut nadi</label></td>
                        <td><input type="number" name="denyut_nadi" id="denyut_nadi"></td>
                    </tr>
                    <tr>
                        <td><label for="laju_nafas">Laju nafas</label></td>
                        <td><input type="number" name="laju_nafas" id="laju_nafas"></td>
                    </tr>
                    <tr>
                        <td><label for="tekanan_darah_sistol">Tekanan darah sistol</label></td>
                        <td><input type="number" name="tekanan_darah_sistol" id="tekanan_darah_sistol"></td>
                    </tr>
                    <tr>
                        <td><label for="tekanan_darah_diastol">Tekanan darah diastol</label></td>
                        <td><input type="number" name="tekanan_darah_diastol" id="tekanan_darah_diastol"></td>
                    </tr>
                    <tr>
                        <td><label for="tinggi_badan">Tinggi badan</label></td>
                        <td><input type="number" name="tinggi_badan" id="tinggi_badan"></td>
                    </tr>
                    <tr>
                        <td><label for="berat_badan">Berat badan</label></td>
                        <td><input type="number" name="berat_badan" id="berat_badan"></td>
                    </tr>
                </table>
            </div>
             <!-- tabel pemeriksaan fisik selesai -->
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
                <div class="kotak_tabel">
                    <table name="elektrolit" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><label for="natrium">Natrium (mEq/L)</label></td>
                        <td><input type="number" name="natrium" id="natrium"></td>
                    </tr>
                    <tr>
                        <td><label for="kalium">Kalium (mEq/L)</label></td>
                        <td><input type="number" name="kalium" id="kalium"></td>
                    </tr>
                    <tr>
                        <td><label for="CO2">CO2 (mEq/L)</label></td>
                        <td><input type="number" name="CO2" id="CO2"></td>
                    </tr>
                    <tr>
                        <td><label for="klorida">Klorida (mEq/L)</label></td>
                        <td><input type="number" name="klorida" id="klorida"></td>
                    </tr>
                    <tr>
                        <td><label for="BUN">BUN (mg/dl)</label></td>
                        <td><input type="number" name="BUN" id="BUN"></td>
                    </tr>
                    <tr>
                        <td><label for="creatinine">Creatinine (mg/dl)</label></td>
                        <td><input type="number" name="creatinine" id="creatinine"></td>
                    </tr>
                    <tr>
                        <td><label for="CrCl">Creatinine Clearance (ml/min)</label></td>
                        <td><input type="number" name="CrCl" id="CrCl"></td>
                    </tr>
                    <tr>
                        <td><label for="GFR">GFR (ml/min per 1.73 m2)</label></td>
                        <td><input type="number" name="GFR" id="GFR"></td>
                    </tr>
                    <tr>
                        <td><label for="cystatin_c">Cystatin C (mg/dl)</label></td>
                        <td><input type="number" name="cystatin_c" id="cystatin_c"></td>
                    </tr>
                    <tr>
                        <td><label for="glukosa_puasa">Glukosa (puasa, mg/dl)</label></td>
                        <td><input type="number" name="glukosa_puasa" id="glukosa_puasa"></td>
                    </tr>
                    <tr>
                        <td><label for="HbA1C">HbA1C (%)</label></td>
                        <td><input type="number" name="HbA1C" id="HbA1C"></td>
                    </tr>
                    <tr>
                        <td><label for="kalsium_total">Kalsium total (mg/dl)</label></td>
                        <td><input type="number" name="kalsium_total" id="kalsium_total"></td>
                    </tr>
                    <tr>
                        <td><label for="kalsium_bebas">Kalsium bebas (mg/dl)</label></td>
                        <td><input type="number" name="kalsium_bebas" id="kalsium_bebas"></td>
                    </tr>
                    <tr>
                        <td><label for="magnesium">Magnesium (mEq/L)</label></td>
                        <td><input type="number" name="magnesium" id="magnesium"></td>
                    </tr>
                    <tr>
                        <td><label for="fosfat">Fosfat (mg/dl)</label></td>
                        <td><input type="number" name="fosfat" id="fosfat"></td>
                    </tr>
                    <tr>
                        <td><label for="asam_urat">Asam urat (mg/dl)</label></td>
                        <td><input type="number" name="asam_urat" id="asam_urat"></td>
                    </tr>
                </table>
            </div>    
            <!-- elektrolit selesai -->
        </div>
        <!-- cardiac marker mulai --> 
        <div class="kotak_cardiac_marker">
            <div class="header">
                <h4>Cardiac Marker</h4>
            </div>
            <div class="kotak_tabel">
                <table name="cardiac_marker" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><label for="CK">CK (units/L)</label></td>
                        <td><input type="number" name="CK" id="CK"></td>
                    </tr>
                    <tr>
                        <td><label for="CK-MB">CK-MB (units/L)</label></td>
                        <td><input type="number" name="CK_MB" id="CK-MB"></td>
                    </tr>
                    <tr>
                        <td><label for="cTnl">cTnl (ng/ml)</label></td>
                        <td><input type="number" name="cTnl" id="cTnl"></td>
                    </tr>
                    <tr>
                        <td><label for="myoglobin">Myoglobin (mcg/L)</label></td>
                        <td><input type="number" name="myoglobin" id="myoglobin"></td>
                    </tr>
                    <tr>
                        <td><label for="homocystein">Homocystein (micromol/L)</label></td>
                        <td><input type="number" name="homocystein" id="homocystein"></td>
                    </tr>
                    <tr>
                        <td><label for="LDH">LDH (units/L)</label></td>
                        <td><input type="number" name="LDH" id="LDH"></td>
                    </tr>
                    <tr>
                        <td><label for="BNP">BNP (pg/ml)</label></td>
                        <td><input type="number" name="BNP" id="BNP"></td>
                    </tr>
                    <tr>
                        <td><label for="CRP">CRP (mg/dl)</label></td>
                        <td><input type="number" name="CRP" id="CRP"></td>
                    </tr>
                    <tr>
                        <td><label for="Hs_CRP">Hs-CRP (mg/L)</label></td>
                        <td><input type="number" name="Hs_CRP" id="Hs_CRP"></td>
                    </tr>
                </table>
            </div>
        </div>       
        <!-- cardiac marker selesai-->
        <div class="bagian_protein_dan_kolesterol">
            <!-- protein mulai -->
            <div class="kotak_protein">
                <div class="header">
                    <h4>Protein</h4>
                </div>
                <div class="kotak_tabel">
                    <table name="protein" cellpadding="5" cellspacing="0" border="0">
                        <tr>
                            <td><label for="prealbumin">Prealbumin (mg/dl): </label></td>
                            <td><input type="number" name="prealbumin" id="prealbumin"></td>
                        </tr>
                        <tr>
                            <td><label for="albumin">Albumin (gr/dl): </label></td>
                            <td><input type="number" name="albumin" id="albumin"></td>
                        </tr>
                        <tr>
                            <td><label for="globulin">Globulin (gr/dl): </label></td>
                            <td><input type="number" name="globulin" id="globulin"></td>
                        </tr>
                    </table>
                </div>
            </div>        
            <!-- protein selesai -->
            <!-- kolesterol -->
            <div class="kotak_kolesterol">
                <div class="header">
                    <h4>Kolesterol</h4>
                </div>
                <div class="kotak_tabel">
                    <table name="kolesterol" cellpadding="5" cellspacing="0" border="0">
                        <tr>
                            <td><label for="kolesterol_total">Kolesterol total (mg/dl): </label></td>
                            <td><input type="number" name="kolesterol_total" id="kolesterol_total"></td>
                        </tr>
                        <tr>
                            <td><label for="LDL">LDL (mg/dl): </label></td>
                            <td><input type="number" name="LDL" id="LDL"></td>
                        </tr>
                        <tr>
                            <td><label for="HDL">HDL (mg/dl): </label></td>
                            <td><input type="number" name="HDL" id="HDL"></td>
                        </tr>
                        <tr>
                            <td><label for="trigliserida_puasa">Trigliserida (puasa, mg/dl) : </label></td>
                            <td><input type="number" name="trigliserida_puasa" id="trigliserida_puasa"></td>
                        </tr>
                    </table>
                </div>
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
            <div class="kotak_tabel">
                <table name="fungsi_hati" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><label for="AST">AST (units/L): </label></td>
                        <td><input type="number" name="AST" id="AST"></td>
                    </tr>
                    <tr>
                        <td><label for="ALT">ALT (units/L) : </label></td>
                        <td><input type="number" name="ALT" id="ALT"></td>
                    </tr>
                    <tr>
                        <td><label for="ALP">ALP (units/L): </label></td>
                        <td><input type="number" name="ALP" id="ALP"></td>
                    </tr>
                    <tr>
                        <td><label for="GGT">GGT (units/L): </label></td>
                        <td><input type="number" name="GGT" id="GGT"></td>
                    </tr>
                    <tr>
                        <td><label for="bilirubin_total">Bilirubin total (mg/dl): </label></td>
                        <td><input type="number" name="bilirubin_total" id=bilirubin_total></td>
                    </tr>
                    <tr>
                        <td><label for="bilirubin_direct">Bilirubin direct (mg/dl): </label></td>
                        <td><input type="number" name="bilirubin_direct" id="bilirubin_direct"></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- fungsi hati selesai -->
        <!-- miscellaneous mulai -->
        <div class="kotak_miscellaneous">
            <div class="header">
                <h4>Miscellaneous</h4>
            </div>
            <div class="kotak_tabel">
                <table name="miscellaneous" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><label for="amylase">Amylase  (units/L): </label></td>
                        <td><input type="number" name="amylase" id="amylase"></td>
                    </tr>
                    <tr>
                        <td><label for="lipase">Lipase (units/L): </label></td>
                        <td><input type="number" name="lipase" id="lipase"></td>
                    </tr>
                    <tr>
                        <td><label for="PSA">PSA (ng/ml): </label></td>
                        <td><input type="number" name="PSA" id="PSA"></td>
                    </tr>
                    <tr>
                        <td><label for="TSH">TSH (micro units/ml): </label></td>
                        <td><input type="number" name="TSH" id="TSH"></td>
                    </tr>
                    <tr>
                        <td><label for="procalcitonin">Procalcitonin (ng/ml): </label></td>
                        <td><input type="number" name="procalcitonin" id="procalcitonin"></td>
                    </tr>
                </table>
            </div>
        </div>        
        <!-- miscellaneous selesai -->
    </div>
</div>
<div class="pembatas"></div>
<div class="page_hematologi">
    <div class="header"
        style=" height:20%;
                width:100%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family:Arial, Helvetica, sans-serif;
                color:white;
                padding-top:1vh;
                padding-bottom:1vh;"
    ><h4>Data lab hematologi</h4></div>
    <div class="kotak_input">
        <div class="kotak_tabel_1">
            <div class="tabel_1">
            <table>
                <tr>
                    <td><label for="RBC_count">RBC count (x10<sup>6</sup>/microliter)</label></td>
                    <td><input type="number" step="0.01" name="RBC_count" id="RBC_count"></td>
                </tr>
                <tr>
                    <td><label for="Hct">Hematokrit (%)</label></td>
                    <td><input type="number" step="0.01" name="Hct" id="Hct"></td>
                </tr>
                <tr>
                    <td><label for="Hgb">Hemoglobin (gr/dl)</label></td>
                    <td><input type="number" step="0.01" name="Hgb" id="Hgb"></td>
                </tr>
                <tr>
                    <td><label for="MCV">MCV (micro m<sup>3</sup>)</label></td>
                    <td><input type="number" step="0.01" name="MCV" id="MCV"></td>
                </tr>
                <tr>
                    <td><label for="MCH">MCH (pg)</label></td>
                    <td><input type="number" step="0.01" name="MCH" id="MCH"></td>
                </tr>
                <tr>
                    <td><label for="MCHC">MCHC (gr/dl)</label></td>
                    <td><input type="number" step="0.01" name="MCHC" id="MCHC"></td>
                </tr>
                <tr>
                    <td><label for="ESR">ESR (mm/h)</label></td>
                    <td><input type="number" step="0.01" name="ESR" id="ESR"></td>
                </tr>
            </table>
        </div>
        </div>
        
        
        <div class="kotak_tabel_2">
           <div class="tabel_2">
            <table>
                <tr>
                    <td><label for="WBC_count">WBC count (x10<sup>3</sup>/microliter)</label></td>
                    <td><input type="number" step="0.01" name="WBC_count" id="WBC_count"></td>
                </tr>
                <tr>
                    <td><label for="neutrofil">Neutrofil (%)</label></td>
                    <td><input type="number" step="0.01" name="neutrofil" id="neutrofil"></td>
                </tr>
                <tr>
                    <td><label for="limfosit">Limfosit (%)</label></td>
                    <td><input type="number" step="0.01" name="limfosit" id="limfosit"></td>
                </tr>
                <tr>
                    <td><label for="monosit">Monosit (%)</label></td>
                    <td><input type="number" step="0.01" name="monosit" id="monosit"></td>
                </tr>
                <tr>
                    <td><label for="eosinofil">Eosinofil (%)</label></td>
                    <td><input type="number" step="0.01" name="eosinofil" id="eosinofil"></td>
                </tr>
                <tr>
                    <td><label for="basofil">Basofil (%)</label></td>
                    <td><input type="number" step="0.01" name="basofil" id="basofil"></td>
                </tr>
                <tr>
                    <td><label for="platelet">Platelet (x10<sup>3</sup>/microliter)</label></td>
                    <td><input type="number" step="0.01" name="platelet" id="platelet"></td>
                </tr>
                <tr>
                    <td><label for="Fe">Fe (mcg/dl)</label></td>
                    <td><input type="number" step="0.01" name="Fe" id="Fe"></td>
                </tr>
            </table>
        </div> 
        </div>
    </div>
</div>
<div class="pembatas"></div>
<div class="page_tiga">
    <div class="header_pengobatan_yang_diterima">
        <h4>Pengobatan yang diterima</h4>
    </div>
    <div class="section_satu">
        <!-- tabel obat 1 mulai -->
    <div class="kotak_obat_1">
        <table name="tabel_obat_1" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_1">Nama obat 1</label></td>
                <div id="container">
                    <td><input type="text" name="nama_obat_1" id="nama_obat_1"></td>
                </div>
            </tr>
            <tr>
                <td><label for="dosis_obat_1">Dosis obat 1 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_1" id="dosis_obat_1"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_1">Frekuensi pemberian obat 1 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_1" id="frekuensi_pemberian_obat_1"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 1 selesai -->
    <!-- tabel obat 2 mulai -->
    <div class="kotak_obat_2">
        <table name="tabel_obat_2" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_2">Nama obat 2</label></td>
                <td><input type="text" name="nama_obat_2" id="nama_obat_2"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_2">Dosis obat 2 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_2" id="dosis_obat_2"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_2">Frekuensi pemberian obat 2 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_2" id="frekuensi_pemberian_obat_2"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 2 selesai -->
    </div>
    <div class="section_dua">
        <!-- tabel obat 3 mulai -->
    <div class="kotak_obat_3">
        <table name="tabel_obat_3" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_3">Nama obat 3</label></td>
                <td><input type="text" name="nama_obat_3" id="nama_obat_3"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_3">Dosis obat 3 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_3" id="dosis_obat_3"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_3">Frekuensi pemberian obat 3 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_3" id="frekuensi_pemberian_obat_3"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 3 selesai -->
    <!-- tabel obat 4 mulai -->
    <div class="kotak_obat_4">
        <table name="tabel_obat_4" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_4">Nama obat 4</label></td>
                <td><input type="text" name="nama_obat_4" id="nama_obat_4"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_4">Dosis obat 4 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_4" id="dosis_obat_4"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_4">Frekuensi pemberian obat 4 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_4" id="frekuensi_pemberian_obat_4"></td>
            </tr>    
        </table>
    </div>
    <!--tabel obat 4 selesai -->
    </div>
    <div class="section_tiga">
         <!-- tabel obat 5 mulai -->
        <div class="kotak_obat_5">
            <table name="tabel_obat_5" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><label for="nama_obat_5">Nama obat 5</label></td>
                    <td><input type="text" name="nama_obat_5" id="nama_obat_5"></td>
                </tr>
                <tr>
                    <td><label for="dosis_obat_5">Dosis obat 5 (mg)</label></td>
                    <td><input type="number" step="0.001" name="dosis_obat_5" id="dosis_obat_5"></td>
                </tr>
                <tr>
                    <td><label for="frekuensi_pemberian_obat_5">Frekuensi pemberian obat 5 (per hari)</label></td>
                    <td><input type="number" name="frekuensi_pemberian_obat_5" id="frekuensi_pemberian_obat_5"></td>
                </tr>
            </table>
        </div>
    <!--tabel obat 5 selesai -->
    <!--tabel obat 6 mulai -->
        <div class="kotak_obat_6">
            <table name="tabel_obat_6" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><label for="nama_obat_6">Nama obat 6</label></td>
                    <td><input type="text" name="nama_obat_6" id="nama_obat_6"></td>
                </tr>
                <tr>
                    <td><label for="dosis_obat_6">Dosis obat 6 (mg)</label></td>
                    <td><input type="number" step="0.001" name="dosis_obat_6" id="dosis_obat_6"></td>
                </tr>
                <tr>
                    <td><label for="frekuensi_pemberian_obat_6">Frekuensi pemberian obat 6 (per hari)</label></td>
                    <td><input type="number" name="frekuensi_pemberian_obat_6" id="frekuensi_pemberian_obat_6"></td>
                </tr>
            </table>
        </div>
    <!-- tabel obat 6 selesai -->
    </div>
    <div class="section_empat">
        <!-- tabel obat 7 mulai -->
    <div class="kotak_obat_7">
        <table name="tabel_obat_7" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_7">Nama obat 7</label></td>
                <td><input type="text" name="nama_obat_7" id="nama_obat_7"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_7">Dosis obat 7 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_7" id="dosis_obat_7"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_7">Frekuensi pemberian obat 7 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_7" id="frekuensi_pemberian_obat_7"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 7 selesai -->
    <!-- tabel obat 8 mulai -->
    <div class="kotak_obat_8">
        <table name="tabel_obat_8" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_8">Nama obat 8</label></td>
                <td><input type="text" name="nama_obat_8" id="nama_obat_8"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_8">Dosis obat 8 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_8" id="dosis_obat_8"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_8">Frekuensi pemberian obat 8 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_8" id="frekuensi_pemberian_obat_8"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 8 selesai -->
    </div>
    <div class="section_lima">
        <!-- tabel obat 9 mulai -->
    <div class="kotak_obat_9">
        <table name="tabel_obat_9" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_9">Nama obat 9</label></td>
                <td><input type="text" name="nama_obat_9" id="nama_obat_9"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_9">Dosis obat 9 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_9" id="dosis_obat_9"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_9">Frekuensi pemberian obat 9 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_9" id="frekuensi_pemberian_obat_9"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 9 selesai -->
    <!-- tabel obat 10 mulai -->
    <div class="kotak_obat_10">
        <table name="tabel_obat_10" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_10">Nama obat 10</label></td>
                <td><input type="text" name="nama_obat_10" id="nama_obat_10"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_10">Dosis obat 10 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_10" id="dosis_obat_10"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_10">Frekuensi pemberian obat 10 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_10" id="frekuensi_pemberian_obat_10"></td>
            </tr>    
        </table>
    </div>
    <!--tabel obat 10 selesai -->
    </div>
    <div class="section_enam">
         <!-- tabel obat 11 mulai -->
        <div class="kotak_obat_11">
            <table name="tabel_obat_11" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><label for="nama_obat_11">Nama obat 11</label></td>
                    <td><input type="text" name="nama_obat_11" id="nama_obat_11"></td>
                </tr>
                <tr>
                    <td><label for="dosis_obat_11">Dosis obat 11 (mg)</label></td>
                    <td><input type="number" step="0.001" name="dosis_obat_11" id="dosis_obat_11"></td>
                </tr>
                <tr>
                    <td><label for="frekuensi_pemberian_obat_11">Frekuensi pemberian obat 11</label></td>
                    <td><input type="number" name="frekuensi_pemberian_obat_11" id="frekuensi_pemberian_obat_11"></td>
                </tr>
            </table>
        </div>
    <!--tabel obat 11 selesai -->
    <!--tabel obat 12 mulai -->
        <div class="kotak_obat_12">
            <table name="tabel_obat_12" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><label for="nama_obat_12">Nama obat 12</label></td>
                    <td><input type="text" name="nama_obat_12" id="nama_obat_12"></td>
                </tr>
                <tr>
                    <td><label for="dosis_obat_12">Dosis obat 12 (mg)</label></td>
                    <td><input type="number" step="0.001" name="dosis_obat_12" id="dosis_obat_12"></td>
                </tr>
                <tr>
                    <td><label for="frekuensi_pemberian_obat_12">Frekuensi pemberian obat 12 (per hari)</label></td>
                    <td><input type="number" name="frekuensi_pemberian_obat_12" id="frekuensi_pemberian_obat_12"></td>
                </tr>
            </table>
        </div>
    <!-- tabel obat 12 selesai -->
    </div>
    <div class="section_tujuh">
        <!-- tabel obat 13 mulai -->
    <div class="kotak_obat_13">
        <table name="tabel_obat_13" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_13">Nama obat 13</label></td>
                <td><input type="text" name="nama_obat_13" id="nama_obat_13"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_13">Dosis obat 13 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_13" id="dosis_obat_13"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_13">Frekuensi pemberian obat 13 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_13" id="frekuensi_pemberian_obat_13"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 13 selesai -->
    <!-- tabel obat 14 mulai -->
    <div class="kotak_obat_14">
        <table name="tabel_obat_14" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_14">Nama obat 14</label></td>
                <td><input type="text" name="nama_obat_14" id="nama_obat_14"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_14">Dosis obat 14 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_14" id="dosis_obat_14"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_14">Frekuensi pemberian obat 14 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_14" id="frekuensi_pemberian_obat_14"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 14 selesai -->
    </div>
    <div class="section_delapan">
        <!-- tabel obat 15 mulai -->
    <div class="kotak_obat_15">
        <table name="tabel_obat_15" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_15">Nama obat 15</label></td>
                <td><input type="text" name="nama_obat_15" id="nama_obat_15"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_15">Dosis obat 15 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_15" id="dosis_obat_15"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_15">Frekuensi pemberian obat 15 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_15" id="frekuensi_pemberian_obat_15"></td>
            </tr>
        </table>
    </div>
    <!--tabel obat 15 selesai -->
    <!-- tabel obat 16 mulai -->
    <div class="kotak_obat_16">
        <table name="tabel_obat_16" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><label for="nama_obat_16">Nama obat 16</label></td>
                <td><input type="text" name="nama_obat_16" id="nama_obat_16"></td>
            </tr>
            <tr>
                <td><label for="dosis_obat_16">Dosis obat 16 (mg)</label></td>
                <td><input type="number" step="0.001" name="dosis_obat_16" id="dosis_obat_16"></td>
            </tr>
            <tr>
                <td><label for="frekuensi_pemberian_obat_16">Frekuensi pemberian obat 16 (per hari)</label></td>
                <td><input type="number" name="frekuensi_pemberian_obat_16" id="frekuensi_pemberian_obat_16"></td>
            </tr>    
        </table>
    </div>
    <!--tabel obat 16 selesai -->
    </div>
</div>
<div class="button">
    <button type="submit" name="analisa" id="tombol_analisa">analisa</button>
</div>
</form>

<!--<script src="script.js"></script>-->
</body>
</html>