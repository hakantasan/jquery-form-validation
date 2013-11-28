<!DOCTYPE html>
<html lang="tr">
    <head> 
        <meta charset="utf-8">
        <title>Ders Örnekleri</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

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
            function form_kontrolu() 
            { 
                var kadi = $("input[name=kadi]").val();
                var sifre1 = $("input[name=sifre1]").val();
                var sifre2 = $("input[name=sifre2]").val();
                var email = $("input[name=email]").val();
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
                    $('.uyari').empty(); 
            }
        </script>  
        <!-- Ders Kodları Bitiş -->

    </head>
    <body>
        <div id="uyelik_formu">
            <form name="uye_formu" action="jquery_form_kontrolu_post.php" method="post">
                <label>Kullanıcı Adı:</label>
                <input type="text" name="kadi" onkeyup="form_kontrolu()" >
                <br>
                <label>Şifre:</label>
                <input type="password" name="sifre1" onkeyup="form_kontrolu()" >
                <br>
                <label>Şifre (Tekrar):</label>
                <input type="password" name="sifre2" onkeyup="form_kontrolu()" >
                <br>
                <label>E-Mail:</label>
                <input type="text" name="email" onkeyup="form_kontrolu()" >
                <br>
                <input type="submit" value="Kaydet!">
            </form>
            <div class="uyari"></div>  
        </div>
    </body>
</html>
