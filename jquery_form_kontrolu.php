<!DOCTYPE html>
<html lang="tr">
    <head> 
        <meta charset="utf-8">
        <title>Ders Örnekleri</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>        

        <!-- Tasarım Kodları Başlangıç -->
        <style>
            #uyelik_formu
            {
                padding: 10px;
                width: 400px;
                border: 1px solid black;
            }  
            label
            {          
                float: left;
                width: 150px;
            }
        </style>
        <!-- Tasarım Kodları Bitiş -->   

        <!-- Ders Kodları Başlangıç -->
        <script>
            $(document).ready(function(){
                $("#uye_formu").on("keyup", function(event){     
                    form_kontrolu();
                });
            });

            var form_kontrolu = function(){
                var kadi = $("#kadi").val();
                var sifre1 = $("#sifre1").val();
                var sifre2 = $("#sifre2").val();
                var email = $("#email").val();
                var atpos=email.indexOf("@");
                var dotpos=email.lastIndexOf(".");

                if ( kadi==null || kadi=="" || kadi.length < 4 )
                    $('.uyari').html("Kullanıcı adı 4 karakterden az olamaz");
                else if ( sifre1 == null || sifre1 == "" || sifre2 == null || sifre2 == "" )
                    $('.uyari').html("Şifreyi boş bırakmayın");
                    else if ( !(sifre1 == sifre2) )
                        $('.uyari').html("Şifreler eşleşmiyor");
                        else if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
                            $('.uyari').html("Geçerli email adresi girin");
                            else
                            {
                                $('.uyari').empty();
                                $('#uye_formu').removeAttr('onsubmit');
                            }
            }
        </script>  
        <!-- Ders Kodları Bitiş -->

    </head>
    <body>
        <div id="uyelik_formu">
            <form name="form" id="uye_formu" action="<?php echo site_url('ornek/jquery_form_kontrolu_post'); ?>" method="post" onsubmit="return false;">
                <label>Kullanıcı Adı:</label>
                <input type="text" id="kadi" name="kadi">
                <br>
                <label>Şifre:</label>
                <input type="password" id="sifre1" name="sifre1">
                <br>
                <label>Şifre (Tekrar):</label>
                <input type="password" id="sifre2" name="sifre2">
                <br>
                <label>E-Mail:</label>
                <input type="text" id="email" name="email">
                <br>
                <input type="submit" value="Kaydet!">
            </form>
            <div class="uyari"></div>  
        </div>
    </body>
</html>
