<?php
	function correct_encoding($text) {
  		$current_encoding = mb_detect_encoding($text, 'auto');
    		print($current_encoding);
    		$text = iconv($current_encoding, 'UTF-8', $text);
    		return $text;
	}
	

	$path='/var/www/html/lomake/mails/'; // REMEMBER ENDING "/"
	$cmd = 'cd ' . $path . ' && ls | tail -n 1';
	$file = shell_exec($cmd);
	$full_filename = $path.$file; 
	$full_filename = trim($full_filename);
	
	//echo $path . "<br>" . $file . "<br>" . $full_filename . "<br>";
	
	//echo $full_filename;
	
	exec("file -bi $full_filename", $pal);
	$info=implode($pal);
	list($blah,$enc) = split("charset=", $info, 2);
	
	exec("iconv -f $enc -t utf-8 $full_filename 2>&1",$lomake);
	
	//echo $blah . " X ";
	//echo $enc;

	//$lines = file($full_filename);
	//print_r($lomake);
        $lines = $lomake;
	
	if(substr($lines[0],0,33) != "Below is the result of your form.") {
	    print("<html><head><title>Lomake</title></head><body><h1>Virheellinen sähköposti vastaanotettu:</h1>");
	    
	    print('<div style="border-style=solid; border-color: black; border-width: 3px; border-radius: 10px; width: 500px; background-color: cyan; padding: 20px;">
		<form action="data2tiger.php" method="post">
    		<p>Toiminto: Voit joko poistaa hakemuksen, tai poimia sisällön talteen manuaalisesti.</p>
		<input type="hidden" name="fname" value="' . $full_filename . '">
		<input name="remove" value="Poista hakemus" type="submit">
		</form></div>');

	    print('<br>Sähköpostin rajattu sisältö:<br>');

	    
	    print(str_replace("<","&lt;", str_replace(">","&gt;", str_replace("\"", "''", implode($lines, "<br>\n")))));
	    print("</body></html>");
	    
	    die();
	}
	
	
	foreach ($lines as $line_num => $line) {
		//$line = correct_encoding($line);
		$line = trim($line);
		list($key, $value) = split(":" , $line , 2);
		$value = trim($value);
		
		if ($key == "SUKUNIMI__________") {
			$sukunimi = $value;
			$last_multiline=0;
		} else if ($key == "ETUNIMI___________") {
			$etunimi = $value;
			$last_multiline=0;
		} else if ($key == "OSOITE") {
			$osoite = $value;
			$last_multiline=0;
		} else if ($key == "KAUPUNGINOSA______") {
			$kauposa = $value;
			$last_multiline=0;
		} else if ($key == "POSTINUMERO") {
			$pnum = $value;
			$last_multiline=0;
		} else if ($key == "POSTITOIMIPAIKKA__") {
			$ppaikka = $value;
			$last_multiline=0;
		} else if ($key == "SYNTYMAVUOSI______") {
			$svuosi = $value;
			$last_multiline=0;
		} else if ($key == "SUKUPUOLI") {
			$sukupuoli = $value;
			$last_multiline=0;
		} else if ($key == "SIVIILISAATY") {
			$sivilisaaty = $value;
			$last_multiline=0;
		} else if ($key == "LASTEN_LKM") {
			$lastenlkm = $value;
			$last_multiline=0;
		} else if ($key == "LASTEN_IAT") {
			$lasteniat = $value;
			$last_multiline=0;
		} else if ($key == "ASEPAL") {
			$asepal = $value;
			$last_multiline=0;
		} else if ($key == "SOTILASARVO") {
			$sotarvo = $value;
			$last_multiline=0;
		} else if ($key == "EMAIL") {
			$email = $value;
			$last_multiline=0;
		} else if ($key == "SIVILISAATY") {
			$sivilisaaty = $value;
			$last_multiline=0;
		} else if ($key == "PUHELIN") {
			$puh = $value;
			$last_multiline=0;
		} else if ($key == "MATKAPUHELIN") {
			$mpuh = $value;
			$last_multiline=0;
		} else if ($key == "AMMATTI___________") {
			$ammatti = $value;
			$last_multiline=0;
		} else if ($key == "KOULUTUS__________") {
			$koul = $value;
			$last_multiline=0;
		} else if ($key == "KOULUTUS_KESKEN") {
			$koulkesken = $value;
			$last_multiline=0;
		} else if ($key == "AJOKORTTI_A") {
			$ajokortti_a = $value;
			$last_multiline=0;
		} else if ($key == "AJOKORTTI_B") {
			$ajokortti_b = $value;
			$last_multiline=0;
		} else if ($key == "AJOKORTTI_BE") {
			$ajokortti_be = $value;
			$last_multiline=0;
		} else if ($key == "AJOKORTTI_MUU") {
			$ajokortti_muu = $value;
			$last_multiline=0;
		} else if ($key == "AJOKORTTI_MUUTA") {
			$ajokortti_muuta = $value;
			$last_multiline=0;
		} else if ($key == "AUTO") {
			$auto = $value;
			$last_multiline=0;
		} else if ($key == "TYOMATKA") {
			$tmatka = $value;
			$last_multiline=0;
		} else if ($key == "MATKAAIKA") {
			$maika = $value;
			$last_multiline=0;
		} else if ($key == "EI_TYOKOKEMUSTA") {
			$eikok = $value;
			$last_multiline=0;
		} else if ($key == "ASIAKASPALVELU") {
			$kokaspa = $value;
			$last_multiline=0;
		} else if ($key == "VARASTOTYO") {
			$kokvarasto = $value;
			$last_multiline=0;
		} else if ($key == "TEOLLISUUS") {
			$kokteollisuus = $value;
			$last_multiline=0;
		} else if ($key == "HOTELLI_RAVINTOLA") {
			$kokhotelli = $value;
			$last_multiline=0;
		} else if ($key == "HUOLTOYHTIOT") {
			$kokhuolto= $value;
			$last_multiline=0;
		} else if ($key == "KAUPPA") {
			$kokkauppa = $value;
			$last_multiline=0;
		} else if ($key == "TOIMISTO") {
			$koktoimisto = $value;
			$last_multiline=0;
		} else if ($key == "TALOUSHALLINTO") {
			$koktalous = $value;
			$last_multiline=0;
		} else if ($key == "KULJETUS") {
			$kokkuljetus = $value;
			$last_multiline=0;
		} else if ($key == "METALLI") {
			$kokmetalli = $value;
			$last_multiline=0;
		} else if ($key == "RAKENNUS") {
			$kokrakennus = $value;
			$last_multiline=0;
		} else if ($key == "SIIVOUS") {
			$koksiivous = $value;
			$last_multiline=0;
		} else if ($key == "MAANRAKENNUS") {
			$kokmaanrak = $value;
			$last_multiline=0;
		} else if ($key == "VIHERRAKENNUS") {
			$kokviherrak = $value;
			$last_multiline=0;
		} else if ($key == "MYYNTI") {
			$kokmyynti = $value;
			$last_multiline=0;
		} else if ($key == "MUUTTOTYO") {
			$kokmuutto = $value;
			$last_multiline=0;
		} else if ($key == "TERVEYDENHOITO") {
			$kokterv = $value;
			$last_multiline=0;
		} else if ($key == "ERITYISTAIDOT") {
			$erityistaidot = $value;
			$last_multiline=0;
		} else if ($key == "ATKTAIDOT") {
			$atktaidot = $value;
			$last_multiline=0;
		} else if ($key == "TILAPAISTA") {
			$tilapaista = $value;
			$last_multiline=0;
		} else if ($key == "VAKITUISTA") {
			$vakituista = $value;
			$last_multiline=0;
		} else if ($key == "KOKOPAIVAISTA") {
			$kokpaivaista = $value;
			$last_multiline=0;
		} else if ($key == "OSAAIKAISTA") {
			$osaaik = $value;
			$last_multiline=0;
		} else if ($key == "TYOTA_AJALLE______") {
			$tyotaajalle = $value;
			$last_multiline=0;
		} else if ($key == "PALKKAA___________") {
			$palkkaa = $value;
			$last_multiline=0;
		} else if ($key == "HAEN_TEHTAVAA______") {
			$tehtava = $value;
			$last_multiline=0;
		} else if ($key == "MUUKIN_TYO_KAY") {
			$muu_kay = $value;
			$last_multiline=0;
		} else if ($key == "AAMULLA") {
			$aamulla = $value;
			$last_multiline=0;
		} else if ($key == "PAIVALLA") {
			$paivalla = $value;
			$last_multiline=0;
		} else if ($key == "ILLALLA") {
			$illalla = $value;
			$last_multiline=0;
		} else if ($key == "KAIKKI_AJAT") {
			$kaikki_ajat = $value;
			$last_multiline=0;
		} else if ($key == "VUOROTYO") {
			$vuorotyö = $value;
			$last_multiline=0;
		} else if ($key == "ARKISIN") {
			$arkisin = $value;
			$last_multiline=0;
		} else if ($key == "VIIKONLOPPUISIN") {
			$viikonloppuisin = $value;
			$last_multiline=0;
		} else if ($key == "MILLOIN") {
			$milloin = $value;
			$last_multiline=0;
		} else if ($key == "VOIN_ALOITTAA") {
			$aloittaa = $value;
			$last_multiline=0;
		} else if ($key == "SAIRAUDET") {
			$sairaudet = $value;
			$last_multiline=0;
		} else if ($key == "HARRASTUKSET______") {
			$harrastukset = $value;
			$last_multiline=0;
		} else if ($key == "TYONANTAJA1_______") {
			$tyonantaja1 = $value;
			$last_multiline=0;
		} else if ($key == "TEHTAVANIMIKE1____") {
			$tehtavanim1 = $value;
			$last_multiline=0;
		} else if ($key == "TYOTEHTAVAT1______") {
			$tehtavat1 = $value;
			$last_multiline=0;
		} else if ($key == "TS1_ALKOI_PV") {
			$ts1alkoipv = $value;
			$last_multiline=0;
		} else if ($key == "TS1_ALKOI_KK______") {
			$ts1alkoikk = $value;
			$last_multiline=0;
		} else if ($key == "TS1_ALKOI_VUOSI___") {
			$ts1alkoiv = $value;
			$last_multiline=0;
		} else if ($key == "TS1_PAATTYI_PV") {
			$ts1paattyipv = $value;
			$last_multiline=0;
		} else if ($key == "TS1_PAATTYI_KK____") {
			$ts1paattyikk = $value;
			$last_multiline=0;
		} else if ($key == "TS1_PAATTYI_VUOSI_") {
			$ts1paattyiv = $value;
			$last_multiline=0;
		} else if ($key == "TYONANTAJA2______") {
			$tyonantaja2 = $value;
			$last_multiline=0;
		} else if ($key == "TEHTAVANIMIKE2____") {
			$tehtavanim2 = $value;
			$last_multiline=0;
		} else if ($key == "TYOTEHTAVAT2______") {
			$tehtavat2 = $value;
			$last_multiline=0;
		} else if ($key == "TS2_ALKOI_PV") {
			$ts2alkoipv = $value;
			$last_multiline=0;
		} else if ($key == "TS2_ALKOI_KK______") {
			$ts2alkoikk = $value;
			$last_multiline=0;
		} else if ($key == "TS2_ALKOI_VUOSI___") {
			$ts2alkoiv = $value;
			$last_multiline=0;
		} else if ($key == "TS2_PAATTYI_PV") {
			$ts2paattyipv = $value;
			$last_multiline=0;
		} else if ($key == "TS2_PAATTYI_KK____") {
			$ts2paattyikk = $value;
			$last_multiline=0;
		} else if ($key == "TS2_PAATTYI_VUOSI_") {
			$ts2paattyiv = $value;
			$last_multiline=0;
		} else if ($key == "TYONANTAJA3_______") {
			$tyonantaja3 = $value;
			$last_multiline=0;
		} else if ($key == "TEHTAVANIMIKE3____") {
			$tehtavanim3 = $value;
			$last_multiline=0;
		} else if ($key == "TYOTEHTAVAT3______") {
			$tehtavat3 = $value;
			$last_multiline=0;
		} else if ($key == "TS3_ALKOI_PV") {
			$ts3alkoipv = $value;
			$last_multiline=0;
		} else if ($key == "TS3_ALKOI_KK______") {
			$ts3alkoikk = $value;
			$last_multiline=0;
		} else if ($key == "TS3_ALKOI_VUOSI___") {
			$ts3alkoiv = $value;
			$last_multiline=0;
		} else if ($key == "TS3_PAATTYI_PV") {
			$ts3paattyipv = $value;
			$last_multiline=0;
		} else if ($key == "TS3_PAATTYI_KK____") {
			$ts3paattyikk = $value;
			$last_multiline=0;
		} else if ($key == "TS3_PAATTYI_VUOSI_") {
			$ts3paattyiv = $value;
			$last_multiline=0;
		} else if ($key == "MUU_TYOHISTORIA___") {
			$muu_tyohist = $value;
			$last_multiline=1;
		} else if ($key == "KOULUTUSTASO______") {
			$koulutus = $value;
			$last_multiline=0;
		} else if ($key == "TUTKINTO1") {
			$tutk1 = $value;
			$last_multiline=0;
		} else if ($key == "TUTKINNON_NIMI1__") {
			$tutk1nimi = $value;
			$last_multiline=0;
		} else if ($key == "ALOITUSVUOSI1_____") {
			$tutk1alk = $value;
			$last_multiline=0;
		} else if ($key == "LOPETUSVUOSI1_____") {
			$tutk1lop = $value;
			$last_multiline=0;
		} else if ($key == "OPINTOVIIKKOJA1") {
			$tutk1ov = $value;
			$last_multiline=0;
		} else if ($key == "PAAAINE1") {
			$tutk1aine = $value;
			$last_multiline=0;
		} else if ($key == "KOULUTUSALA1______") {
			$tutk1ala = $value;
			$last_multiline=0;
		} else if ($key == "OPPILAITOS1") {
			$tutk1laitos = $value;
			$last_multiline=0;
		} else if ($key == "TUTKINTO2") {
			$tutk2 = $value;
			$last_multiline=0;
		} else if ($key == "TUTKINNON_NIMI2__") {
			$tutk2nimi = $value;
			$last_multiline=0;
		} else if ($key == "ALOITUSVUOSI2_____") {
			$tutk2alk = $value;
			$last_multiline=0;
		} else if ($key == "LOPETUSVUOSI2_____") {
			$tutk2lop = $value;
			$last_multiline=0;
		} else if ($key == "OPINTOVIIKKOJA2") {
			$tutk2ov = $value;
			$last_multiline=0;
		} else if ($key == "PAAAINE2") {
			$tutk2aine = $value;
			$last_multiline=0;
		} else if ($key == "KOULUTUSALA2______") {
			$tutk2ala = $value;
			$last_multiline=0;
		} else if ($key == "OPPILAITOS2") {
			$tutk2laitos = $value;
			$last_multiline=0;
		} else if ($key == "TUTKINTO3") {
			$tutk3 = $value;
			$last_multiline=0;
		} else if ($key == "TUTKINNON_NIMI3__") {
			$tutk3nimi = $value;
			$last_multiline=0;
		} else if ($key == "ALOITUSVUOSI3_____") {
			$tutk3alk = $value;
			$last_multiline=0;
		} else if ($key == "LOPETUSVUOSI3_____") {
			$tutk3lop = $value;
			$last_multiline=0;
		} else if ($key == "OPINTOVIIKKOJA3") {
			$tutk3ov = $value;
			$last_multiline=0;
		} else if ($key == "PAAAINE3") {
			$tutk3aine = $value;
			$last_multiline=0;
		} else if ($key == "KOULUTUSALA3______") {
			$tutk3ala = $value;
			$last_multiline=0;
		} else if ($key == "OPPILAITOS3") {
			$tutk3laitos = $value;
			$last_multiline=0;
		} else if ($key == "SUOMI_SUUL") {
			$suomsuul = $value;
			$last_multiline=0;
		} else if ($key == "SUOMI_KIRJ") {
			$suomkirj = $value;
			$last_multiline=0;
		} else if ($key == "RUOTSI_SUUL") {
			$ruotsuul = $value;
			$last_multiline=0;
		} else if ($key == "RUOTSI_KIRJ") {
			$ruotkirj = $value;
			$last_multiline=0;
		} else if ($key == "ENGLANTI_SUUL") {
			$englsuul = $value;
			$last_multiline=0;
		} else if ($key == "ENGLANTI_KIRJ") {
			$englkirj = $value;
			$last_multiline=0;
		} else if ($key == "SAKSA_SUUL") {
			$saksasuul = $value;
			$last_multiline=0;
		} else if ($key == "SAKSA_KIRJ") {
			$saksakirj = $value;
			$last_multiline=0;
		} else if ($key == "VENAJA_SUUL") {
			$vensuul = $value;
			$last_multiline=0;
		} else if ($key == "VENAJA_KIRJ") {
			$venkirj = $value;
			$last_multiline=0;
		} else if ($key == "RANSKA_SUUL") {
			$ransksuul = $value;
			$last_multiline=0;
		} else if ($key == "RANSKA_KIRJ") {
			$ranskkirj = $value;
			$last_multiline=0;
		} else if ($key == "MUU_SUUL") {
			$muusuul = $value;
			$last_multiline=0;
		} else if ($key == "MUU_KIRJ") {
			$muukirj = $value;
			$last_multiline=0;
		} else if ($key == "MUU_KIELI") {
			$muukieli = $value;
			$last_multiline=0;
		} else if ($key == "KIINNOSTAA________") {
			$kiinnostaa = $value;
			$last_multiline=0;
		} else if ($key == "EI_KIINNOSTA______") {
			$eikiinnosta = $value;
			$last_multiline=0;
		} else if ($key == "MUUTA_____________") {
			$muuta = $value;
			$last_multiline=2;
		} else if ($key == "TIEDOT_SAA_ANTAA") {
			$tiedotsaaantaa = $value;
			$last_multiline=0;
		} else if ($key == "PAIKKA_JA_AIKA") {
			$paikkaaika = $value;
			$last_multiline=0;
		} else {
			if($line == "" || $line == "---------------------------------------------------------------------------") {
			} else if($last_multiline == 1) {
				$muu_tyohist = $muu_tyohist . "\n" . $line;
			} else if ($last_multiline == 2) {
				$muuta = $muuta . "\n" . $line;
			}
		}
	}

	echo '
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
	<html>

	<head>
	<title>Lomake</title>
	<meta name="description" content="Lomakkeiden hyväksyntä">
	<meta name="keywords" content=" ">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
-->
	<link rel="stylesheet" type="text/css" href="css_kuvat/styles.css">
	<link rel="stylesheet" type="text/css" href="css_kuvat/print.css" media="print">
	<link rel="stylesheet" type="text/css" href="css_kuvat/niftyCorners.css">
	<link rel="stylesheet" type="text/css" href="css_kuvat/niftyPrint.css" media="print">
	<script type="text/javascript" src="css_kuvat/nifty.js"></script>
	<script type="text/javascript">
	window.onload=function(){
	if(!NiftyCheck())
	return;
	Rounded("div#navi1","top","#fff","#ffd400","small");
	Rounded("div#feed h2","all","#fff","transparent","small");
	}
	</script>

	</head>

	<body>
	
	<form action="data2tiger.php" method="post">
	
	<input type="hidden" name="full_form" value="' . implode($lines,"\n") . '">
	<div style="border-style: solid; border-width: 1px; width: 600px; background-color: #ccffcc">
	
	<br>
	<table>
	    <tr>
		<td>
		   Tallentajan huomiot:&nbsp;
		</td>
		<td>
		    <TEXTAREA name="HUOMIOT"></TEXTAREA>
		</td>
	    </tr>
	    <tr>
		<td>
		    Ala:
		</td>
		<td>
		    <select name="ala">
			<option value="Asiakaspalvelu">Asiakaspalvelu</option>
			<option value="Hotelli_ja_ravintola">Hotelli_ja_ravintola</option>
			<option value="Huoltoyhtiöt">Huoltoyhtiöt</option>
			<option value="Kauppa_ja_varasto">Kauppa_ja_varasto</option>
			<option value="Kuljetus">Kuljetus</option>
			<option value="Maanrakennus">Maanrakennus</option>
			<option value="Metalliala">Metalliala</option>
			<option value="Muuttotyö">Muuttotyö</option>
			<option value="Myynti_ja_markk.">Myynti_ja_markk.</option>
			<option value="Rakennusala">Rakennusala</option>
			<option value="Siivous_ja_puht.p">Siivous_ja_puht.p</option>
			<option value="Taloushallinto">Taloushallinto</option>
			<option value="Teollisuus">Teollisuus</option>
                        <option value="Toimistotyö">Toimistotyö</option>
                        <option value="Varastotyö">Varastotyö</option>
                        <option value="Viherrakennus">Viherrakennus</option>
                        <option value="-Ei mitään-">-Ei mitään-</option>
		    </select>
		</td>
	    </tr>
	    <tr>
		<td>                    
		    Toiminto:
		</td>
		<td>
		    <input name="add" value="Lisää hakemus" type="submit">
		    <input value="Reset" type="reset">
		    <input name="remove" value="Poista hakemus" type="submit">
		</td>
	    </tr>
	</table>
	<br>
	                                        
	
	</div>
	<br>
	<div style="border-style: solid; border-width: 1px; width: 600px">

	<table border="0" cellpadding="1" cellspacing="10" width="500">
		<tbody>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
				<h3>Henkilötiedot</h3></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">Sukunimi *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
							<input name="SUKUNIMI__________" maxlength="40" size="56" value="' . $sukunimi . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">Etunimi *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
							<input name="ETUNIMI___________" maxlength="35" size="56" value="' . $etunimi . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Katuosoite *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="OSOITE" maxlength="40" size="56" value="' . $osoite . '" ></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Kaupunginosa</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="KAUPUNGINOSA______" maxlength="40" size="56" value="' . $kauposa . '" ></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Postinumero *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="POSTINUMERO" maxlength="5" size="56"  value="' . $pnum . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Postitoimipaikka *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
							<input name="POSTITOIMIPAIKKA__" maxlength="20" size="56" value="' . $ppaikka . '" ></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Syntymävuosi * &nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="SYNTYMAVUOSI______" maxlength="4" size="56" value="' . $svuosi . '" ></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Sukupuoli</b><br>';

	if ($sukupuoli == "nainen") {
		echo '
				<input name="SUKUPUOLI" value="nainen" type="radio" checked> Nainen
				<input name="SUKUPUOLI" value="mies" type="radio"> Mies &nbsp;&nbsp;';
	} else {
		echo '
				<input name="SUKUPUOLI" value="nainen" type="radio"> Nainen
				<input name="SUKUPUOLI" value="mies" type="radio" checked > Mies &nbsp;&nbsp;';
	} echo '
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Siviilisääty</b><br>';
	if ($sivilisaaty == "naimaton") {
		echo '
				<input name="SIVIILISAATY" value="naimaton" type="radio" checked>Naimaton
				<input name="SIVIILISAATY" value="avoliitossa" type="radio"> Avoliitossa
				<input name="SIVIILISAATY" value="avioliitossa" type="radio">&nbsp; Avioliitossa&nbsp;';
	}

	if ($sivilisaaty == "avoliitossa") {
		echo '
					<input name="SIVIILISAATY" value="naimaton" type="radio" >Naimaton
					<input name="SIVIILISAATY" value="avoliitossa" type="radio" checked> Avoliitossa
					<input name="SIVIILISAATY" value="avioliitossa" type="radio">&nbsp; Avioliitossa&nbsp;';
	}
	if ($sivilisaaty == "avioliitossa") {
		echo '
				<input name="SIVIILISAATY" value="naimaton" type="radio" >Naimaton
				<input name="SIVIILISAATY" value="avoliitossa" type="radio"> Avoliitossa
				<input name="SIVIILISAATY" value="avioliitossa" type="radio" checked>&nbsp; Avioliitossa&nbsp;';
	}

	echo '
				<br>
				Lasten lkm <input name="LASTEN_LKM" maxlength="2" size="11" value="' . $lastenlkm . '" > Lasten iät&nbsp;&nbsp;
				<input name="LASTEN_IAT" maxlength="12" size="11" value="' . $lasteniat . '" > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Asepalvelus</b><br>';
	if ($asepal == "suorittamatta") {
		echo '
				<input name="ASEPAL" value="suorittamatta" type="radio" checked> 
				suorittamatta
				<input name="ASEPAL" value="suoritettu" type="radio"> suoritettu
				<input name="ASEPAL" value="siviilipalvelus" type="radio"> siviilipalvelus &nbsp;&nbsp;&nbsp;<br>';
	}

	if ($asepal == "suoritettu") {
		echo '
				<input name="ASEPAL" value="suorittamatta" type="radio"> 
				suorittamatta
				<input name="ASEPAL" value="suoritettu" type="radio" checked> suoritettu
				<input name="ASEPAL" value="siviilipalvelus" type="radio"> siviilipalvelus &nbsp;&nbsp;&nbsp;<br>';
	}

	if ($asepal == "siviilipalvelus") {
		echo '
				<input name="ASEPAL" value="suorittamatta" type="radio"> 
				suorittamatta
				<input name="ASEPAL" value="suoritettu" type="radio"> suoritettu
				<input name="ASEPAL" value="siviilipalvelus" type="radio" checked> siviilipalvelus &nbsp;&nbsp;&nbsp;<br>¨';
	}
	echo '
		Sotilasarvo <input name="SOTILASARVO" maxlength="30" size="63" value="' . $sotarvo . '"  > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Sähköpostiosoite</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="EMAIL" maxlength="35" size="20" value="' . $email . '" ></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Puhelin</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="PUHELIN" maxlength="25" value="' . $puh . '" >&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Matkapuhelin</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="MATKAPUHELIN" maxlength="25" size="18" value="' . $mpuh . '" >&nbsp;&nbsp;</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" valign="top" >Ammatti *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" valign="top" ><input name="AMMATTI___________" maxlength="30"  value="' . $ammatti . '" >&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" valign="top" >Koulutus *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="KOULUTUS__________" maxlength="30" size="18" value="' . $koulutus . '"  ><br>';
	if ($koulkesken == "X") {
		echo '<input name="KOULUTUS_KESKEN" value="X" type="checkbox" checked>kesken';
	}else {
		echo '<input name="KOULUTUS_KESKEN" value="X" type="checkbox">kesken';
	} echo '
							</td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<h3>Ajokortti </h3>';
	if ($ajokortti_a == "X") {
		echo '<input name="AJOKORTTI_A" value="X" type="checkbox" value="' . $ajokortti_a . '" checked > A&nbsp;&nbsp;';
	} else {
		echo '<input name="AJOKORTTI_A" value="X" type="checkbox" value="' . $ajokortti_a . '"> A&nbsp;&nbsp;';
	}
	if ($ajokortti_b == "X") {
		echo '<input name="AJOKORTTI_B" value="X" type="checkbox" value="' . $ajokortti_b . '" checked > B&nbsp;&nbsp;';
	}else {
		echo '<input name="AJOKORTTI_B" value="X" type="checkbox" value="' . $ajokortti_b . '" > B&nbsp;&nbsp;';
	}
	if ($ajokortti_be == "X") {
		echo '<input name="AJOKORTTI_BE" value="X" type="checkbox" value="' . $ajokortti_be . '" checked > BE&nbsp;&nbsp;';
	} else {
		echo '<input name="AJOKORTTI_BE" value="X" type="checkbox" value="' . $ajokortti_be . '"> BE&nbsp;&nbsp;';
	}
	if ($ajokortti_muu == "X") {
		echo '<input name="AJOKORTTI_MUU" value="X" type="checkbox" value="' . $ajokortti_muu . '" checked > C&nbsp;&nbsp;&nbsp;';
	} else {
		echo '<input name="AJOKORTTI_MUU" value="X" type="checkbox" value="' . $ajokortti_muu . '" > C&nbsp;&nbsp;&nbsp;';
	}
	echo '<input name="AJOKORTTI_MUUTA" maxlength="10" size="15" value="' . $ajokortti_muuta . '"  >&nbsp;&nbsp;&nbsp;&nbsp;
		<br>
				Oma auto käytettävissä, ';

	if ($auto == "on") {
		echo '<input name="AUTO" value="on" type="radio" checked> kyllä &nbsp;&nbsp;
				<input name="AUTO" value="ei" type="radio"> ei &nbsp;&nbsp; ';
	} else {
		echo '		<input name="AUTO" value="on" type="radio"> kyllä &nbsp;&nbsp;
				<input name="AUTO" value="ei" type="radio" checked> ei &nbsp;&nbsp; ';
	} echo '


		<br></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Työmatkan pituus ja kesto enintään</b>
				<input name="TYOMATKA" maxlength="3" size="4"  value="' . $tmatka . '" > km &nbsp;&nbsp;&nbsp;&nbsp;
				<input name="MATKAAIKA" maxlength="3" size="4"  value="' . $maika . '" > min <br></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><hr noshade color="#E8E8E8" size="1"></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
				<h3>Työkokemus</h3></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Minulla on kokemusta seuraavilta aloilta:</b>
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Ei työkokemusta</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($eikok == "X") {
		echo '<input name="EI_TYOKOKEMUSTA" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="EI_TYOKOKEMUSTA" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	}

	echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Asiakaspalvelu</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokaspa == "X") {
		echo '<input name="ASIAKASPALVELU" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	}else {
		echo '<input name="ASIAKASPALVELU" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Varastotyö</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokvarasto == "X") {
		echo '<input name="VARASTOTYO" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	}else {
		echo '<input name="VARASTOTYO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Teollisuus</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">';
	if ($kokteollisuus == "X") {
		echo '<input name="TEOLLISUUS" value="X" type="checkbox" checked></td>';
	} else {
		echo '<input name="TEOLLISUUS" value="X" type="checkbox"></td>';
	} echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Hotelli- ja ravintola-ala&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokhotelli == "X") {
		echo '<input name="HOTELLI_RAVINTOLA" value="X" type="checkbox"checked>&nbsp;&nbsp;&nbsp;</td>';
	}else {
		echo '<input name="HOTELLI_RAVINTOLA" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	}
	echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Huoltoyhtiöt</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';

	if ($kokhuolto == "X") {
		echo '<input name="HUOLTOYHTIOT" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="HUOLTOYHTIOT" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	}

	echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Kauppa, kaupan varastot &nbsp;&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokkauppa == "X") {
		echo '<input name="KAUPPA" value="X" type="checkbox" checked></td>';
	}else {
		echo '<input name="KAUPPA" value="X" type="checkbox"></td>';
	} echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Toimistotyö</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($koktoimisto == "X") {
		echo '<input name="TOIMISTO" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="TOIMISTO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Taloushallinto</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($koktalous == "X") {
		echo '<input name="TALOUSHALLINTO" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="TALOUSHALLINTO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo ';
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Kuljetus</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokkuljetus == "X") {
		echo '<input name="KULJETUS" value="X" type="checkbox" checked></td>';
	} else {
		echo '<input name="KULJETUS" value="X" type="checkbox"></td>';
	} echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Metalliala</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokmetalli == "X") {
		echo '<input name="METALLI" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="METALLI" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Rakennusala</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokrakennus == "X") {
		echo '<input name="RAKENNUS" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="RAKENNUS" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Siivous/puhtaanapito</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';

	if ($koksiivous == "X") {
		echo '<input name="SIIVOUS" value="X" type="checkbox" checked></td>';
	}else {
		echo '<input name="SIIVOUS" value="X" type="checkbox"></td>';
	} echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Maanrakennusala</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokmaanrak == "X") {
		echo'<input name="MAANRAKENNUS" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo'<input name="MAANRAKENNUS" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	}
	echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Viherrakennus&nbsp;&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokviherrak == "X") {
		echo '<input name="VIHERRAKENNUS" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="VIHERRAKENNUS" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Myynti ja markkinointi</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokmyynti == "X") {
		echo '<input name="MYYNTI" value="X" type="checkbox" checked></td>';
	} else {
		echo '<input name="MYYNTI" value="X" type="checkbox"></td>';
	}
	echo '
				 </tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Muuttotyö</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokmuutto == "X") {
		echo '<input name="MUUTTOTYO" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	} else {
		echo '<input name="MUUTTOTYO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Terveydenhoito</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($kokterv == "X") {
		echo '<input name="TERVEYDENHOITO" value="X" type="checkbox" checked>&nbsp;&nbsp;&nbsp;</td>';
	}else {
		echo '<input name="TERVEYDENHOITO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>';
	} echo '
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Erityistaitoni</b> <br>
				<input name="ERITYISTAIDOT" maxlength="80" size="74" value="'. $erityistaidot .'" > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>ATK-taitoni</b> <br>
				<input name="ATKTAIDOT" maxlength="80" size="74" value="'.$atktaidot.'" > </td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
				<hr noshade color="#E8E8E8" size="1"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<h3>Toivomukseni työstä</h3></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Etsin</b>&nbsp;&nbsp;&nbsp;&nbsp; 
				<input name="TILAPAISTA" value="X" type="checkbox"> tilapäistä &nbsp;&nbsp;&nbsp;
				<input name="VAKITUISTA" value="X" type="checkbox"> vakituista &nbsp;&nbsp;&nbsp;
				<input name="KOKOPAIVAISTA" value="X" type="checkbox"> 
				kokopäiväistä
				<input name="OSAAIKAISTA" value="X" type="checkbox"> osa-aikaista työtä
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Etsin työtä ajalle</b> <br>
				<input name="TYOTA_AJALLE______" maxlength="45" size="45" >&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				Palkkatoivomus&nbsp;&nbsp; 
				<input name="PALKKAA___________" maxlength="10" size="15" >&nbsp;e/h
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Haen avoinna olevaa tehtävää</b> <br>
				<input name="HAEN_TEHTAVAA______" maxlength="45" size="45" > <br><input name="MUUKIN_TYO_KAY" value="" type="radio"> haen vain tätä työtä &nbsp;&nbsp;&nbsp;
				<input name="MUUKIN_TYO_KAY" value="X" type="radio"> myös muut työt käyvät
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Toivomukseni&nbsp;työajasta</b> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="AAMULLA" value="X" type="checkbox"> aamulla &nbsp;&nbsp;&nbsp;
							</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="PAIVALLA" value="X" type="checkbox"> päivällä &nbsp;&nbsp;&nbsp;
							</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="ILLALLA" value="X" type="checkbox"> illalla &nbsp;&nbsp;&nbsp;
							</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" width="193" ><input name="KAIKKI_AJAT" value="X" type="checkbox"> kaikki ajat käyvät &nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="VUOROTYO" value="X" type="checkbox"> vuorotyö &nbsp;&nbsp;&nbsp;
							</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="ARKISIN" value="X" type="checkbox"> vain arkipäivisin&nbsp;&nbsp;&nbsp;
							</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="VIIKONLOPPUISIN" value="X" type="checkbox"> vain viikonloppuisin&nbsp;&nbsp;&nbsp;
							</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" width="193" >kerro milloin 
							<input name="MILLOIN" maxlength="30" size="18" value="'.$milloin.'" > </td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Voin aloittaa työn</b> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >'; 
	if($aloittaa == "samana") {
		echo '<input name="VOIN_ALOITTAA_____" value="samana" type="checkbox" checked> samana päivänä&nbsp;&nbsp;</td>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<input name="VOIN_ALOITTAA" value="seuraavana" type="checkbox"> seuraavana päivänä &nbsp;&nbsp;</td>';
	}else {
		echo '<input name="VOIN_ALOITTAA_____" value="samana" type="checkbox"> samana päivänä&nbsp;&nbsp;</td>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<input name="VOIN_ALOITTAA" value="seuraavana" type="checkbox" checked> seuraavana päivänä &nbsp;&nbsp;</td>';
	}
	echo'			<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" width="201" >
							<!--					<input type="checkbox" name="VOIN_ALOITTAA" value="muulloin"> -->
							kerro milloin&nbsp;
							<input name="VOIN_ALOITTAA" maxlength="30" size="13" value="'.$aloittaa2.'" >
							</td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Sairaudet ja allergiat</b> <br>
				<input name="SAIRAUDET" maxlength="95" size="73" > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Harrastukset ym.</b> <br>
				<input name="HARRASTUKSET______" maxlength="95" size="73" > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
				<hr noshade color="#E8E8E8" size="1"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<h3>Työhistoria</h3>(viimeisimmästä alkaen):</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työnantaja *</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TYONANTAJA1_______" maxlength="40" size="40" value="'. $tyonantaja1 .'" ></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Tehtävänimike</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TEHTAVANIMIKE1____" maxlength="40" size="40" value="'.$tehtavanim1.'" ></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työtehtävät</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TYOTEHTAVAT1______" maxlength="75" size="56" value="'.$tehtavat1.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työsuhde alkoi </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TS1_ALKOI_PV" maxlength="2" size="3" value="'.$ts1alkoipv.'"> pv&nbsp;&nbsp;&nbsp;
							<input name="TS1_ALKOI_KK______" maxlength="2" size="3" value="'.$ts1alkoikk.'"> kk&nbsp;&nbsp;&nbsp;
							<input name="TS1_ALKOI_VUOSI___" maxlength="4" size="5" value="'.$ts1alkoiv.'"> vvvv&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työsuhde päättyi </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TS1_PAATTYI_PV" maxlength="2" size="3" value="'.$ts1paattyipv.'"> pv&nbsp;&nbsp;&nbsp;
							<input name="TS1_PAATTYI_KK____" maxlength="2" size="3" value="'.$ts1paattyikk.'"> kk&nbsp;&nbsp;&nbsp;
							<input name="TS1_PAATTYI_VUOSI_" maxlength="4" size="5" value="'.$ts1paattyiv.'"> vvvv&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työnantaja</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TYONANTAJA2______" maxlength="40" size="40" value="'.$tyonantaja2.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Tehtävänimike</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TEHTAVANIMIKE2____" maxlength="40" size="40" value="'.$tehtavanim2.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työtehtävät</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TYOTEHTAVAT2______" maxlength="75" size="56" value="'.$tehtavat2.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työsuhde alkoi </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TS2_ALKOI_PV" maxlength="2" size="3" value="'.$ts2alkoipv.'"> pv&nbsp;&nbsp;&nbsp;
							<input name="TS2_ALKOI_KK______" maxlength="2" size="3" value="'.$ts2alkoikk.'"> kk&nbsp;&nbsp;&nbsp;
							<input name="TS2_ALKOI_VUOSI___" maxlength="4" size="5" value="'.$ts2alkoiv.'"> vvvv&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työsuhde päättyi </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TS2_PAATTYI_PV" maxlength="2" size="3" value="'.$ts2paattyipv.'"> pv&nbsp;&nbsp;&nbsp;
							<input name="TS2_PAATTYI_KK____" maxlength="2" size="3" value="'.$ts2paattyikk.'"> kk&nbsp;&nbsp;&nbsp;
							<input name="TS2_PAATTYI_VUOSI_" maxlength="4" size="5" value="'.$ts2paattyiv.'"> vvvv&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työnantaja</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TYONANTAJA3_______" maxlength="40" size="40" value="'.$tyonantaja3.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Tehtävänimike</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TEHTAVANIMIKE3____" maxlength="40" size="40" value="'.$tehtavanim3.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työtehtävät</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TYOTEHTAVAT3______" maxlength="75" size="56" value="'.$tehtavat3.'"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työsuhde alkoi </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TS3_ALKOI_PV" maxlength="2" size="3" value="'.$ts3alkoipv.'"> pv&nbsp;&nbsp;&nbsp;
							<input name="TS3_ALKOI_KK______" maxlength="2" size="3" value="'.$ts3alkoikk.'"> kk&nbsp;&nbsp;&nbsp;
							<input name="TS3_ALKOI_VUOSI___" maxlength="4" size="5" value="'.$ts3alkoiv.'"> vvvv&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Työsuhde päättyi </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TS3_PAATTYI_PV" maxlength="2" size="3" value="'.$ts3paattyipv.'"> pv&nbsp;&nbsp;&nbsp;
							<input name="TS3_PAATTYI_KK____" maxlength="2" size="3" value="'.$ts3paattyikk.'"> kk&nbsp;&nbsp;&nbsp;
							<input name="TS3_PAATTYI_VUOSI_" maxlength="4" size="5" value="'.$ts3paattyiv.'"> vvvv&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Muu työhistoria</b><br>
				<TEXTAREA name="MUU_TYOHISTORIA___" rows=5 cols=53>' . $muu_tyohist  . '</TEXTAREA>
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
				<hr noshade color="#E8E8E8" size="1"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<h3>Koulutustiedot</h3></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Pohjakoulutus: * &nbsp;</td>
							<td>
							<select name="KOULUTUSTASO______" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
				if ($koulutus == "Peruskoulu") {
					echo '
							
							<option value="Peruskoulu" selected>Perus- tai kansakoulu
							</option>
							<option value="Ylioppilas">Ylioppilas</option>';
				} else {
					echo '
												
												<option value="Peruskoulu">Perus- tai kansakoulu
												</option>
												<option value="Ylioppilas" selected>Ylioppilas</option>';
				}
		
				echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Valitse jatkokoulutus 1 * &nbsp;&nbsp;&nbsp;</td>
							<td>
							<select name="TUTKINTO1" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
				if ($tutk1 == "Ammattikoulu") {
					echo '
				
							<option value="Ammattikoulu" selected>Ammattikoulu</option>
							<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
							</option>
							<option value="Opistotaso">Opistotasoinen tutkinto
							</option>
							<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
							</option>
							<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
							</option>
							<option value="Lisensiaatti">Lisensiaattitutkinto
							</option>
							<option value="Muu">Muu</option>
							<option value="Koulutus kesken">Koulutus kesken
							</option>
							<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
							</option></select> </td>';
				} else if ($tutk1 == "Aikuiskoulutuskurssi") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi" selected>Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Opistotaso") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso" selected>Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Ammattikorkeakoulu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu" selected>Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Ylempi korkeakoulu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu" selected>Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Lisensiaatti") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti" selected>Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Muu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu" selected>Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Koulutus kesken") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken" selected>Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk1 == "Ei jatkokoulutusta") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta" selected>Ei jatkokoulutusta
												</option></select> </td>';
				} 
						echo'</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Tutkinnon nimi&nbsp;&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TUTKINNON_NIMI1__" maxlength="40" size="40" value="' . $tutk1nimi . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Aloitusvuosi
				</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="ALOITUSVUOSI1_____" maxlength="4" size="4" value="' . $tutk1alk . '"> Lopetusvuosi
							<input name="LOPETUSVUOSI1_____" maxlength="4" size="4" value="' . $tutk1lop . '"> opintoviikkoja
							<input name="OPINTOVIIKKOJA1" maxlength="3" size="3" value="' . $tutk1ov . '"> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Pääaine</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="PAAAINE1" maxlength="40" size="40" value="' . $tutk1aine . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Koulutusala</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="KOULUTUSALA1______" maxlength="40" size="40" value="' . $tutk1ala . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Oppilaitos</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="OPPILAITOS1" maxlength="40" size="40" value="' . $tutk1laitos . '"></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Valitse jatkokoulutus 2 * &nbsp;&nbsp;&nbsp;</td>
							<td>
							<select name="TUTKINTO2" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
											if ($tutk2 == "Ammattikoulu") {
					echo '
				
							<option value="Ammattikoulu" selected>Ammattikoulu</option>
							<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
							</option>
							<option value="Opistotaso">Opistotasoinen tutkinto
							</option>
							<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
							</option>
							<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
							</option>
							<option value="Lisensiaatti">Lisensiaattitutkinto
							</option>
							<option value="Muu">Muu</option>
							<option value="Koulutus kesken">Koulutus kesken
							</option>
							<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
							</option></select> </td>';
				} else if ($tutk2 == "Aikuiskoulutuskurssi") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi" selected>Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Opistotaso") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso" selected>Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Ammattikorkeakoulu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu" selected>Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Ylempi korkeakoulu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu" selected>Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Lisensiaatti") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti" selected>Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Muu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu" selected>Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Koulutus kesken") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken" selected>Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk2 == "Ei jatkokoulutusta") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta" selected>Ei jatkokoulutusta
												</option></select> </td>';
				} 
						echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Tutkinnon nimi&nbsp;&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TUTKINNON_NIMI2__" maxlength="40" size="40" value="' . $tutk2nimi . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Aloitusvuosi
				</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="ALOITUSVUOSI2_____" maxlength="4" size="4" value="' . $tutk2alk . '"> Lopetusvuosi
							<input name="LOPETUSVUOSI2_____" maxlength="4" size="4" value="' . $tutk2lop . '"> opintoviikkoja
							<input name="OPINTOVIIKKOJA2" maxlength="3" size="3" value="' . $tutk2ov . '"> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Pääaine</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="PAAAINE2" maxlength="40" size="40" value="' . $tutk2aine . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Koulutusala</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="KOULUTUSALA2______" maxlength="40" size="40" value="' . $tutk2ala . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Oppilaitos</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="OPPILAITOS2" maxlength="40" size="40" value="' . $tutk2laitos . '"></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Valitse jatkokoulutus 3 * &nbsp;&nbsp;&nbsp;</td>
							<td>
							<select name="TUTKINTO3" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
											if ($tutk1 == "Ammattikoulu") {
					echo '
				
							<option value="Ammattikoulu" selected>Ammattikoulu</option>
							<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
							</option>
							<option value="Opistotaso">Opistotasoinen tutkinto
							</option>
							<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
							</option>
							<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
							</option>
							<option value="Lisensiaatti">Lisensiaattitutkinto
							</option>
							<option value="Muu">Muu</option>
							<option value="Koulutus kesken">Koulutus kesken
							</option>
							<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
							</option></select> </td>';
				} else if ($tutk3 == "Aikuiskoulutuskurssi") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi" selected>Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Opistotaso") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso" selected>Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Ammattikorkeakoulu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu" selected>Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Ylempi korkeakoulu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu" selected>Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Lisensiaatti") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti" selected>Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Muu") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu" selected>Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Koulutus kesken") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken" selected>Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta">Ei jatkokoulutusta
												</option></select> </td>';
				} else if ($tutk3 == "Ei jatkokoulutusta") {
					echo '
									
												<option value="Ammattikoulu">Ammattikoulu</option>
												<option value="Aikuiskoulutuskurssi">Aikuiskoulutuskurssi
												</option>
												<option value="Opistotaso">Opistotasoinen tutkinto
												</option>
												<option value="Ammattikorkeakoulu">Ammattikorkeakoulututkinto
												</option>
												<option value="Ylempi korkeakoulu">Ylempi korkeakoulututkinto
												</option>
												<option value="Lisensiaatti">Lisensiaattitutkinto
												</option>
												<option value="Muu">Muu</option>
												<option value="Koulutus kesken">Koulutus kesken
												</option>
												<option value="Ei jatkokoulutusta" selected>Ei jatkokoulutusta
												</option></select> </td>';
				} 
						echo '
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Tutkinnon nimi&nbsp;&nbsp;&nbsp;</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="TUTKINNON_NIMI3__" maxlength="40" size="40" value="' . $tutk3nimi . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Aloitusvuosi
				</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="ALOITUSVUOSI3_____" maxlength="4" size="4" value="' . $tutk3lop . '"> Lopetusvuosi
							<input name="LOPETUSVUOSI3_____" maxlength="4" size="4" > &nbsp;pintoviikkoja
							<input name="OPINTOVIIKKOJA3" maxlength="3" size="3" > </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Pääaine</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="PAAAINE3" maxlength="40" size="40" value="' . $tutk3aine . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Koulutusala</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="KOULUTUSALA3______" maxlength="40" size="40" value="' . $tutk3ala . '"></td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Oppilaitos</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><input name="OPPILAITOS3" maxlength="40" size="40" value="' . $tutk3laitos . '"></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Kielitaito</b></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >
				<table>
					<tbody>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ></td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >suullinen</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >kirjallinen</td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Suomi</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="SUOMI_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($suomsuul == "-") {
		echo '

							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomsuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomsuul == "valttava") {
		echo '

							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomsuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomsuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomsuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomsuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="SUOMI_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($suomkirj == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomkirj == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomkirj == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomkirj == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomkirj == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomkirj == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($suomkirj == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Ruotsi</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="RUOTSI_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($ruotsuul == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotsuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotsuul == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotsuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotsuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotsuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotsuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="RUOTSI_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($ruotkirj == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotkirj == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotkirj == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotkirj == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotkirj == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotkirj == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ruotkirj == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Englanti</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="ENGLANTI_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($englsuul == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englsuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englsuul == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englsuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englsuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englsuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englsuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="ENGLANTI_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($englkirj == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englkirj == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englkirj == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englkirj == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englkirj == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englkirj == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($englkirj == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Saksa</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="SAKSA_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($saksasuul == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksasuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksasuul == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksasuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksasuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksasuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksasuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="SAKSA_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($saksakirj == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksakirj == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksakirj == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksakirj == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksakirj == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksakirj == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($saksakirj == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Venäjä</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="VENAJA_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($vensuul == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($vensuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($vensuul == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($vensuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($vensuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($vensuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($vensuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="VENAJA_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($venkirj == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($venkirj == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($venkirj == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($venkirj == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($venkirj == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($venkirj == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($venkirj == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Ranska</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="RANSKA_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($ransksuul == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ransksuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ransksuul == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ransksuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ransksuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ransksuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ransksuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="RANSKA_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($ranskkirj == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ranskkirj == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ranskkirj == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ranskkirj == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ranskkirj == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ranskkirj == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($ranskkirj == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	} echo '
							</select> </td>
						</tr>
						<tr>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >Muu</td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="MUU_SUUL" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';
	if ($muusuul == "-") {
		echo '
							<option value="-" selected >-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($muusuul == "heikko") {
		echo '
							<option value="-">-</option>
							<option value="heikko" selected >heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($muusuul == "valttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected >välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($muusuul == "tyydyttava") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected >tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($muusuul == "hyva") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected >hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($muusuul == "erinomainen") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected >erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>';
	} else if ($muusuul == "aidinkieli") {
		echo '
							<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected >äidinkieli</option>';
	}
	echo '
							</select> </td>
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><select name="MUU_KIRJ" style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal" >';

	if ($muukirj == "-") {
		echo '<option value="-" selected>-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>
							</select> </td>';
	} else 	if ($muukirj == "heikko") {
		echo '<option value="-">-</option>
							<option value="heikko" selected>heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>
							</select> </td>';
	} else 	if ($muukirj == "valttava") {
		echo '<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava" selected>välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>
							</select> </td>';
	} else 	if ($muukirj == "tyydyttava") {
		echo '<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava" selected>tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>
							</select> </td>';
	} else 	if ($muukirj == "hyva") {
		echo '<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva" selected>hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>
							</select> </td>';
	} else 	if ($muukirj == "erinomainen") {
		echo '<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen" selected>erinomainen</option>
							<option value="aidinkieli">äidinkieli</option>
							</select> </td>';
	} else 	if ($muukirj == "aidinkieli") {
		echo '<option value="-">-</option>
							<option value="heikko">heikko</option>
							<option value="valttava">välttävä</option>
							<option value="tyydyttava">tyydyttävä</option>
							<option value="hyva">hyvä</option>
							<option value="erinomainen">erinomainen</option>
							<option value="aidinkieli" selected>äidinkieli</option>
							</select> </td>';
	}
	echo '
							<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >&nbsp; kieli 
							<input name="MUU_KIELI" maxlength="15" size="10"  value="'.$muukieli.'" ></td>
						</tr>
					</tbody>
				</table></td>
			</tr>
			<tr>
				<td><hr noshade color="#E8E8E8" size="1"></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Mitkä työt kiinnostavat?</b><br>
				<input name="KIINNOSTAA________" maxlength="100" size="70"  value="'.$kiinnostaa.'" >
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Mitä töitä en mielelläni ota vastaan</b> <br>
				<input name="EI_KIINNOSTA______" maxlength="100" size="70" value="'.$eikiinnosta.'" > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Muuta huomioitavaa</b><br>
				<TEXTAREA name=MUUTA_____________ rows=5 cols=54>'.$muuta.' </TEXTAREA>
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Valintatilanteessa hakemustietoni saa antaa asiakasyritykselle.</b>
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" >';
	if ($tiedotsaaantaa == "Kylla") {
		echo '	<input name="TIEDOT_SAA_ANTAA" value="Kylla" type="radio" checked>Kyllä, tietoni saa antaa asiakasyritykselle
							<br>
							<input name="TIEDOT_SAA_ANTAA" value="Ei" type="radio">Tietojani ei saa antaa asiakasyritykselle';

	} else {
		echo '<input name="TIEDOT_SAA_ANTAA" value="Kylla" type="radio">Kyllä, tietoni saa antaa asiakasyritykselle
				<br>
				<input name="TIEDOT_SAA_ANTAA" value="Ei" type="radio" checked>Tietojani ei saa antaa asiakasyritykselle';
	} echo '
				</td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ></td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" ><b>Paikka ja aika * </b>
				<input name="PAIKKA_JA_AIKA" maxlength="45" size="71" value="' . $paikkaaika . '" > </td>
			</tr>
			<tr>
				<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
			</tr>
		</tbody>
	</table>
	</form>
	</div>

	</body>

	</html>';
?>
