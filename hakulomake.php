<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <title>Alrekry - Työnhakulomake</title>
    <meta name="description" content=" Alrekry ">
    <meta name="keywords" content=" ">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15">
    <link rel="stylesheet" type="text/css" href="css_kuvat/styles.css">
    <link rel="stylesheet" type="text/css" href="css_kuvat/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="css_kuvat/niftyCorners.css">
    <link rel="stylesheet" type="text/css" href="css_kuvat/niftyPrint.css" media="print">
    <script type="text/javascript" src="css_kuvat/nifty.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            if (!NiftyCheck())
                return;
            Rounded("div#navi1", "top", "#fff", "#ffd400", "small");
            Rounded("div#feed h2", "all", "#fff", "transparent", "small");
        }
    </script>
    <script language="JavaScript">

        <!--
        hide
        from
        old
        browsers

        function FValidateControl(control) {
            if (control.value == "") {
                alert(control.name + ": Tämä kenttä on pakollinen.")
                control.focus()
                return false
            }
            return true
        }

        function FSubmitValidation(form) {
            if (!FValidateControl(form.SUKUNIMI__________)) return false
            if (!FValidateControl(form.ETUNIMI___________)) return false
            if (!FValidateControl(form.OSOITE)) return false
            if (!FValidateControl(form.POSTINUMERO)) return false
            if (!FValidateControl(form.POSTITOIMIPAIKKA__)) return false
            if (!FValidateControl(form.SYNTYMAVUOSI______)) return false
            if (!FValidateControl(form.AMMATTI___________)) return false
            if (!FValidateControl(form.KOULUTUS__________)) return false
            if ((!FValidateControl(form.TYONANTAJA1_______)) && (!FValidateControl(form.EI_TYOKOKEMUSTA))) return false
            if (!FValidateControl(form.KOULUTUSTASO______)) return false
            if (!FValidateControl(form.TUTKINTO1)) return false
            if (!FValidateControl(form.PAIKKA_JA_AIKA)) return false
            return true
        }

        -->

    </script>
</head>

<body>
<div id="container">
<div id="navi1">
    <ul class="navi1">
        <ul class="navi1">
            <li><a href="index.php">Alrekry</a>
            </li>
            <li><a href="yrityksille.php">Yrityksille</a>
            </li>
            <li class="active"><a class="active" href="tyonhakijoille.php">Työnhakijoille</a>
            </li>
            <li><a href="avoimet_tyopaikat.php">Avoimet työpaikat</a>
            </li>
            <li><a href="yhteystiedot.php">Yhteystiedot</a>
            </li>
        </ul>

    </ul>
</div>
<div id="print_header">
    <h1 class="paaotsikko">Alrekry</h1></div>

<div id="header">
    <img src="css_kuvat/factory.jpg"></div>

<div id="feed">


    <img src="css_kuvat/getOutput.gif" alt="täytä työnhakulomake" border="0" height="30" hspace="0" vspace="0"
         width="245">
</div>

<div id="content">
    <h1>Työnhakulomake</h1>

    <p class="kappale">Täytäthän lomakkeen tiedot mahdollisimman huolellisesti -
        näin löydämme juuri Sinulle sopivimman työn !</p>

    <p class="kappale">Voit toki myös soittaa ja pyytää haastatteluaikaa.</p>

    <p class="kappale">Huomaa että (*) tähdellä merkityt kentät ovat pakollisia.</p>
</div>

<div id="content" style="position: relative; left: 275; right: 0">

<form action="http://www.alrekry.fi/server-cgi/FormMail" method="post" onsubmit="return FSubmitValidation(this)">
<input type=hidden name="recipient" value="alrekry@alrekry.fi,reima@kuivanto.fi">
<input type=hidden name="subject" value="Hakulomake">
<input type=hidden name="redirect" value="http://www.alrekry.fi/hakulomake_kiitos.php">

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
                    <input name="SUKUNIMI__________" maxlength="40" size="56"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">Etunimi *</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
                    <input name="ETUNIMI___________" maxlength="35" size="56"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Katuosoite *
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="OSOITE" maxlength="40" size="56"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Kaupunginosa
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KAUPUNGINOSA______" maxlength="40" size="56"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Postinumero *
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="POSTINUMERO" maxlength="5" size="56"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Postitoimipaikka *
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >
                    <input name="POSTITOIMIPAIKKA__" maxlength="20" size="56"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Syntymävuosi * &nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="SYNTYMAVUOSI______" maxlength="4" size="56"
                        ></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Sukupuoli</b><br>
        <input name="SUKUPUOLI" value="nainen" type="radio"> Nainen
        <input name="SUKUPUOLI" value="mies" type="radio"> Mies &nbsp;&nbsp;
    </td>
</tr>
<!--<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
><b>Siviilisääty</b><br>
    <input name="SIVIILISAATY" value="naimaton" type="radio">
    Naimaton<input name="SIVIILISAATY" value="avoliitossa" type="radio">
    Avoliitossa<input name="SIVIILISAATY" value="avioliitossa" type="radio">&nbsp; Avioliitossa&nbsp;
    <br>--><input type="hidden" name="SIVILISAATY" value=" ">
<!--Lasten lkm <input name="LASTEN_LKM" maxlength="2" size="11" > Lasten iät&nbsp;&nbsp;
<input name="LASTEN_IAT" maxlength="12" size="11" > </td>--><input type="hidden" name="LASTEN_LKM"
                                                                                   value=" ">
<!--</tr>-->
<!--<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
><b>Asepalvelus</b><br>
    <input name="ASEPAL" value="suorittamatta" type="radio">
    suorittamatta
    <input name="ASEPAL" value="suoritettu" type="radio"> suoritettu<input name="ASEPAL" value="siviilipalvelus" type="radio"> siviilipalvelus &nbsp;&nbsp;&nbsp;<br>-->
<input type="hidden" name="ASEPAL" value=" ">
<!--Sotilasarvo <input name="SOTILASARVO" maxlength="30" size="63" > </td>--> <input type="hidden" name="SOTILASARVO"
                                                                                     value=" ">
<!--</tr>-->
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Sähköpostiosoite
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="EMAIL" maxlength="35" size="20"></td>
            <!--</tr>
            <tr>-->
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Puhelin
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="PUHELIN" maxlength="25">&nbsp;&nbsp;</td>
                <!--<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
     >Matkapuhelin</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
     ><input name="MATKAPUHELIN" maxlength="25" size="18" >&nbsp;&nbsp;</td>--><input type="hidden"
                                                                                                  name="MATKAPUHELIN"
                                                                                                  value=" ">
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" valign="top"
                    >Ammatti *
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" valign="top"
                    ><input name="AMMATTI___________" maxlength="30">&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" valign="top"
                    >Koulutus *
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KOULUTUS__________" maxlength="30" size="18"><br>
                    <input name="KOULUTUS_KESKEN" value="X" type="checkbox">kesken
                </td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <h3>Ajokortti </h3>
        <input name="AJOKORTTI_A" value="X" type="checkbox"> A&nbsp;&nbsp;
        <input name="AJOKORTTI_B" value="X" type="checkbox"> B&nbsp;&nbsp;
        <input name="AJOKORTTI_BE" value="X" type="checkbox"> BE&nbsp;&nbsp;
        <input name="AJOKORTTI_MUU" value="X" type="checkbox"> C&nbsp;&nbsp;&nbsp;
        <input name="AJOKORTTI_MUUTA" maxlength="10" size="15"
            >&nbsp;&nbsp;&nbsp;&nbsp;
        <br>
        Oma auto käytettävissä,

        <input name="AUTO" value="on" type="radio"> kyllä &nbsp;&nbsp;
        <input name="AUTO" value="ei" type="radio"> ei &nbsp;&nbsp;


        <br></td>
</tr>
<!--<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
><b>Työmatkan pituus ja kesto enintään</b>
    <input name="TYOMATKA" maxlength="3" size="4" > km &nbsp;&nbsp;&nbsp;&nbsp;
    <input name="MATKAAIKA" maxlength="3" size="4" > min <br></td>
</tr>--> <input type="hidden" name="TYOAIKA" value=" "><input type="hidden" name="MATKAAIKA" value=" ">
<tr>
    <td></td>
</tr>
<tr>
    <td>
        <hr noshade color="#E8E8E8" size="1">
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
        <h3>Työkokemus</h3></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Minulla on kokemusta seuraavilta aloilta:</b>
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Ei työkokemusta
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="EI_TYOKOKEMUSTA" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Asiakaspalvelu
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="ASIAKASPALVELU" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Varastotyö
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="VARASTOTYO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Teollisuus
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TEOLLISUUS" value="X" type="checkbox"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Hotelli- ja ravintola-ala&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="HOTELLI_RAVINTOLA" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Huoltoyhtiöt
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="HUOLTOYHTIOT" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Kauppa, kaupan varastot &nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KAUPPA" value="X" type="checkbox"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Toimistotyö
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TOIMISTO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Taloushallinto
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TALOUSHALLINTO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Kuljetus
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KULJETUS" value="X" type="checkbox"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Metalliala
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="METALLI" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Rakennusala
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="RAKENNUS" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Siivous/puhtaanapito
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="SIIVOUS" value="X" type="checkbox"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Maanrakennusala
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="MAANRAKENNUS" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Viherrakennus&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="VIHERRAKENNUS" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Myynti ja markkinointi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="MYYNTI" value="X" type="checkbox"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Muuttotyö
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="MUUTTOTYO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Terveydenhoito
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TERVEYDENHOITO" value="X" type="checkbox">&nbsp;&nbsp;&nbsp;</td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Erityistaitoni</b> <br>
        <input name="ERITYISTAIDOT" maxlength="80" size="74"></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>ATK-taitoni</b> <br>
        <input name="ATKTAIDOT" maxlength="80" size="74"></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
        <hr noshade color="#E8E8E8" size="1">
    </td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <h3>Toivomukseni työstä</h3></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Etsin</b>&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="TILAPAISTA" value="X" type="checkbox"> tilapäistä &nbsp;&nbsp;&nbsp;
        <input name="VAKITUISTA" value="X" type="checkbox"> vakituista &nbsp;&nbsp;&nbsp;
        <input name="KOKOPAIVAISTA" value="X" type="checkbox">
        kokopäiväistä
        <input name="OSAAIKAISTA" value="X" type="checkbox"> osa-aikaista työtä
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Etsin työtä ajalle</b> <br>
        <input name="TYOTA_AJALLE______" maxlength="45" size="45">&nbsp;&nbsp;&nbsp;&nbsp;
        <br>
        Palkkatoivomus&nbsp;&nbsp;
        <input name="PALKKAA___________" maxlength="10" size="15">&nbsp;e/h
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Haen avoinna olevaa tehtävää</b> <br>
        <input name="HAEN_TEHTAVAA______" maxlength="45" size="45"
            > <br><input name="MUUKIN_TYO_KAY" value="" type="radio"> haen vain tätä työtä &nbsp;&nbsp;&nbsp;
        <input name="MUUKIN_TYO_KAY" value="X" type="radio"> myös muut työt käyvät
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><b>Toivomukseni&nbsp;työajasta</b></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="AAMULLA" value="X" type="checkbox"> aamulla &nbsp;&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="PAIVALLA" value="X" type="checkbox"> päivällä &nbsp;&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="ILLALLA" value="X" type="checkbox"> illalla &nbsp;&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" width="193"
                    ><input name="KAIKKI_AJAT" value="X" type="checkbox"> kaikki ajat käyvät &nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="VUOROTYO" value="X" type="checkbox"> vuorotyö &nbsp;&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="ARKISIN" value="X" type="checkbox"> vain arkipäivisin&nbsp;&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="VIIKONLOPPUISIN" value="X" type="checkbox"> vain viikonloppuisin&nbsp;&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" width="193"
                    >kerro milloin
                    <input name="MILLOIN" maxlength="30" size="18"
                        ></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><b>Voin aloittaa työn</b></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="VOIN_ALOITTAA_____" value="samana" type="checkbox"> samana päivänä&nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="VOIN_ALOITTAA" value="seuraavana" type="checkbox"> seuraavana päivänä &nbsp;&nbsp;
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal" width="201"
                    ><!--					<input type="checkbox" name="VOIN_ALOITTAA" value="muulloin"> -->
                    kerro milloin&nbsp;
                    <input name="VOIN_ALOITTAA" maxlength="30" size="13">
                </td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<!--<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
><b>Sairaudet ja allergiat</b> <br>
    <input name="SAIRAUDET" maxlength="95" size="73" > </td>
</tr>--><input type="hidden" name="SAIRAUDET" value=" ">
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Harrastukset ym.</b> <br>
        <input name="HARRASTUKSET______" maxlength="95" size="73"></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
        <hr noshade color="#E8E8E8" size="1">
    </td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <h3>Ty�historia</h3>(viimeisimmästä alkaen):
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työnantaja *
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TYONANTAJA1_______" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Tehtävänimike
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TEHTAVANIMIKE1____" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työtehtävät
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TYOTEHTAVAT1______" maxlength="75" size="56"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työsuhde alkoi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TS1_ALKOI_PV" maxlength="2" size="3"> pv&nbsp;&nbsp;&nbsp;
                    <input name="TS1_ALKOI_KK______" maxlength="2" size="3"
                        > kk&nbsp;&nbsp;&nbsp;
                    <input name="TS1_ALKOI_VUOSI___" maxlength="4" size="5"> vvvv&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työsuhde päättyi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TS1_PAATTYI_PV" maxlength="2" size="3"> pv&nbsp;&nbsp;&nbsp;
                    <input name="TS1_PAATTYI_KK____" maxlength="2" size="3"
                        > kk&nbsp;&nbsp;&nbsp;
                    <input name="TS1_PAATTYI_VUOSI_" maxlength="4" size="5"> vvvv&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työnantaja
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TYONANTAJA2______" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Tehtävänimike
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TEHTAVANIMIKE2____" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työtehtävät
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TYOTEHTAVAT2______" maxlength="75" size="56"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työsuhde alkoi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TS2_ALKOI_PV" maxlength="2" size="3"> pv&nbsp;&nbsp;&nbsp;
                    <input name="TS2_ALKOI_KK______" maxlength="2" size="3"
                        > kk&nbsp;&nbsp;&nbsp;
                    <input name="TS2_ALKOI_VUOSI___" maxlength="4" size="5"> vvvv&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työsuhde päättyi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TS2_PAATTYI_PV" maxlength="2" size="3"> pv&nbsp;&nbsp;&nbsp;
                    <input name="TS2_PAATTYI_KK____" maxlength="2" size="3"
                        > kk&nbsp;&nbsp;&nbsp;
                    <input name="TS2_PAATTYI_VUOSI_" maxlength="4" size="5"> vvvv&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työnantaja
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TYONANTAJA3_______" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Tehtävänimike
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TEHTAVANIMIKE3____" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työtehtävät
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TYOTEHTAVAT3______" maxlength="75" size="56"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työsuhde alkoi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TS3_ALKOI_PV" maxlength="2" size="3"> pv&nbsp;&nbsp;&nbsp;
                    <input name="TS3_ALKOI_KK______" maxlength="2" size="3"
                        > kk&nbsp;&nbsp;&nbsp;
                    <input name="TS3_ALKOI_VUOSI___" maxlength="4" size="5"> vvvv&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Työsuhde päättyi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TS3_PAATTYI_PV" maxlength="2" size="3"> pv&nbsp;&nbsp;&nbsp;
                    <input name="TS3_PAATTYI_KK____" maxlength="2" size="3"
                        > kk&nbsp;&nbsp;&nbsp;
                    <input name="TS3_PAATTYI_VUOSI_" maxlength="4" size="5"> vvvv&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Muu työhistoria</b><br>
        <TEXTAREA name=MUU_TYOHISTORIA___ rows=5 cols=53> </TEXTAREA>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
        <hr noshade color="#E8E8E8" size="1">
    </td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <h3>Koulutustiedot</h3></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Pohjakoulutus: * &nbsp;</td>
                <td>
                    <select name="KOULUTUSTASO______"
                            style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
                        >
                        <option value="Peruskoulu" selected>Perus- tai kansakoulu
                        </option>
                        <option value="Ylioppilas">Ylioppilas</option>
                    </select></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Valitse jatkokoulutus 1 * &nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="TUTKINTO1"
                            style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
                        >
                        <option value="" selected
                            >--valitse--
                        </option>
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
                        <option value="Ei jatkokoulutusta">Ei jatkokoulutusta
                        </option>
                    </select></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Tutkinnon nimi&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TUTKINNON_NIMI1__" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Aloitusvuosi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="ALOITUSVUOSI1_____" maxlength="4" size="4"
                        > Lopetusvuosi
                    <input name="LOPETUSVUOSI1_____" maxlength="4" size="4"> opintoviikkoja
                    <input name="OPINTOVIIKKOJA1" maxlength="3" size="3"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Pääaine
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="PAAAINE1" maxlength="40" size="40"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Koulutusala
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KOULUTUSALA1______" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Oppilaitos
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="OPPILAITOS1" maxlength="40" size="40"></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Valitse jatkokoulutus 2 * &nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="TUTKINTO2"
                            style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
                        >
                        <option value="Ei jatkokoulutusta" selected
                            >--valitse--
                        </option>
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
                        <option value="Ei jatkokoulutusta">Ei jatkokoulutusta
                        </option>
                    </select></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Tutkinnon nimi&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TUTKINNON_NIMI2__" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Aloitusvuosi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="ALOITUSVUOSI2_____" maxlength="4" size="4"
                        > Lopetusvuosi
                    <input name="LOPETUSVUOSI2_____" maxlength="4" size="4"> opintoviikkoja
                    <input name="OPINTOVIIKKOJA2" maxlength="3" size="3"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Pääaine
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="PAAAINE2" maxlength="40" size="40"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Koulutusala
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KOULUTUSALA2______" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Oppilaitos
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="OPPILAITOS2" maxlength="40" size="40"></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >
        <table>
            <tbody>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Valitse jatkokoulutus 3 * &nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="TUTKINTO3"
                            style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 160px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
                        >
                        <option value="Ei jatkokoulutusta" selected
                            >--valitse--
                        </option>
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
                        <option value="Ei jatkokoulutusta">Ei jatkokoulutusta
                        </option>
                    </select></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Tutkinnon nimi&nbsp;&nbsp;&nbsp;</td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="TUTKINNON_NIMI3__" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Aloitusvuosi
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="ALOITUSVUOSI3_____" maxlength="4" size="4"
                        > Lopetusvuosi
                    <input name="LOPETUSVUOSI3_____" maxlength="4" size="4"> &nbsp;opintoviikkoja
                    <input name="OPINTOVIIKKOJA3" maxlength="3" size="3"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Pääaine
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="PAAAINE3" maxlength="40" size="40"></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Koulutusala
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="KOULUTUSALA3______" maxlength="40" size="40"
                        ></td>
            </tr>
            <tr>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    >Oppilaitos
                </td>
                <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
                    ><input name="OPPILAITOS3" maxlength="40" size="40"></td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Kielitaito</b></td>
</tr>
<tr>
<td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
    >
<table>
<tbody>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >suullinen
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >kirjallinen
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Suomi
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="SUOMI_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="SUOMI_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Ruotsi
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="RUOTSI_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttäv�</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="RUOTSI_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Englanti
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="ENGLANTI_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="ENGLANTI_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Saksa
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="SAKSA_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="SAKSA_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Venäjä
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="VENAJA_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="VENAJA_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Ranska
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="RANSKA_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="RANSKA_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >Muu
    </td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="MUU_SUUL"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><select name="MUU_KIRJ"
                 style="FONT: 10px Verdana,Arial,Helvetica; WIDTH: 90px; HEIGHT: 18px; font-size-adjust: none; font-stretch: normal"
            >
            <option value="-" selected
                >-
            </option>
            <option value="heikko">heikko</option>
            <option value="valttava">välttävä</option>
            <option value="tyydyttava">tyydyttävä</option>
            <option value="hyva">hyvä</option>
            <option value="erinomainen">erinomainen</option>
            <option value="aidinkieli">äidinkieli</option>
        </select></td>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        >&nbsp; kieli
        <input name="MUU_KIELI" maxlength="15" size="10"
            ></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
    <td>
        <hr noshade color="#E8E8E8" size="1">
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Mitkä työt kiinnostavat?</b><br>
        <input name="KIINNOSTAA________" maxlength="100" size="70">
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Mitä töitä en mielelläni ota vastaan</b> <br>
        <input name="EI_KIINNOSTA______" maxlength="100" size="70"
            ></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Muuta huomioitavaa</b><br>
        <TEXTAREA name=MUUTA_____________ rows=5 cols=54> </TEXTAREA>
    </td>
</tr>
<!--<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
><b>Valintatilanteessa hakemustietoni saa antaa asiakasyritykselle.</b>
    </td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
><input name="TIEDOT_SAA_ANTAA" value="Kylla" type="radio">Kyll�, tietoni saa antaa asiakasyritykselle
    <br>
    <input name="TIEDOT_SAA_ANTAA" value="Ei" type="radio">Tietojani ei saa antaa asiakasyritykselle
    </td>
</tr>--><input type="hidden" name="TIEDOT_SAA_ANTAA" value=" ">
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal"
        ><b>Paikka ja aika * </b>
        <input name="PAIKKA_JA_AIKA" maxlength="45" size="71"></td>
</tr>
<tr>
    <td style="FONT: 10px Verdana; font-size-adjust: none; font-stretch: normal">
        <input value="Lähetä" type="submit">
        <input value="Tyhjennä" type="reset"></td>
</tr>
</tbody>
</table>
</form>
</div>

<div id="print_footer">
</div>
<div id="footer">
    <p><strong>Alrekry Oy</strong><br>Talvikkitie 40 A<br>01300 Vantaa<br><br>puh. (09) 8514 466<br><a
            href="mailto:alrekry@alrekry.fi">alrekry@alrekry.fi</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>

    <p>&nbsp;</p>

    <p></p>

</div>

</div>

</body>

</html>
