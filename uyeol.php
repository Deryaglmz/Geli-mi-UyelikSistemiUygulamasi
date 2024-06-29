<?php
require_once("baglan.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="1000" height="600" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="5" height="100" bgcolor="#CCCCCC">ÜST ALAN (HEADER ALANI) (LOGO, BANNER, MENÜLER Vs.)</td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td width="200" valign="top" height="400" bgcolor="#CCCCCC">Ana Sayfa</td>
            <td width="10" height="400">&nbsp;</td>
            <td width="480" height="400" bgcolor="#CCCCCC">İÇERİK ALANI (MAIN ALANI)</td>
            <td width="10" height="400">&nbsp;</td>
            <td width="300" height="400" valign="top">

                <form action="uyeolsonuc.php" method="post">
                    <table width="300" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="3" height="30" bgcolor="#990000" style="color: #FFFFFF">&nbsp;Yeni Üye Kayıt Alanı</td>
                        </tr>
                         <tr>
                            <td height="30" width="189">&nbsp; Kullanıcı Adı</td>
                            <td height="30" width="10">:</td>
                            <td height="30" width="190"><input type="text" name="kullaniciadi" style="width: 98%;"></td>
                        </tr>
                        <tr>
                            <td height="30" width="189">&nbsp; Şifre</td>
                            <td height="30" width="10">:</td>
                            <td height="30" width="190"><input type="password" name="sifre" style="width: 98%;"></td>
                        </tr>

                        <tr>
                            <td height="30" width="189">&nbsp; Adı Soyadı</td>
                            <td height="30" width="10">:</td>
                            <td height="30" width="190"><input type="text" name="adisoyadi" style="width: 98%;"></td>
                        </tr>
                        <tr>
                            <td height="30" width="189">&nbsp;E-Mail Adresi</td>
                            <td height="30" width="10">:</td>
                            <td height="30" width="190"><input type="email" name="emailadresi" style="width: 98%;"></td>
                        </tr>
                        <tr>
                            <td height="30" width="189">&nbsp;</td>
                            <td height="30" width="10">&nbsp;</td>
                            <td height="30" width="190" align="right"><input type="submit" value="Kayıt Ol"></td>
                        </tr>
            </td>
        </tr>
        <tr>
            <td colspan="5" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="5" height="100" bgcolor="#CCCCCC">ALT ALAN (FOOTER ALANI) (LOGO, BANNER, MENÜLER Vs.)</td>
        </tr>
    </table>
</body>
</html>