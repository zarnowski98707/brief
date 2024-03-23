<!DOCTYPE html>
<html class="desktop portrait" lang="pl">
<head>
   <meta charset="utf-8" />
   <meta name="robots" content="none" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
   <link rel="shortcut icon" type="image/png" href="/favicon.png" />
   <title>Brief | ⭐ KS Business Panel</title>


   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="preconnect" href="https://ka-f.fontawesome.com" crossorigin>
   <link rel="preload" href="https://ka-f.fontawesome.com/releases/v6.1.1/webfonts/free-fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="https://ka-f.fontawesome.com/releases/v6.1.1/webfonts/free-fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="stylesheet" href="https://ka-f.fontawesome.com/releases/v6.1.1/css/free.min.css?token=34f9a79139">


   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600;700&display=swap" rel="stylesheet">


   <link rel="stylesheet" href="https://raporty.ks.pl/themes/ks/css/jquery-ui.css">
   <link rel="stylesheet" href="css/app.css?=i<?=date("His");?>" data-async="true">
   <script src="https://raporty.ks.pl/themes/ks/js/jquery/jquery.js"></script>
</head>
<body >


  


<header>
   <div class="logo">
       <a href="#">
           <img src="https://raporty.ks.pl/themes/ks/img/ks-white.svg" alt="KS">
       </a>
       <div><strong>Bepłatna</strong> wycena strony WWW</div>
   </div>


   <a href="tel:+48502202084" class="callus">
       <span>Potrzebujesz pomocy?</span>
       <span class="callus-btn">
           <svg width="100%" height="100%" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
               <path d="M21.0001 15.92V18.92C21.0012 19.1985 20.9441 19.4741 20.8326 19.7293C20.721 19.9845 20.5574 20.2136 20.3521 20.4018C20.1469 20.5901 19.9046 20.7335 19.6408 20.8227C19.377 20.9119 19.0974 20.945 18.8201 20.92C15.7429 20.5856 12.7871 19.5341 10.1901 17.85C7.77388 16.3146 5.72539 14.2661 4.19006 11.85C2.50003 9.24118 1.4483 6.27097 1.12006 3.17997C1.09507 2.90344 1.12793 2.62474 1.21656 2.3616C1.30518 2.09846 1.44763 1.85666 1.63482 1.6516C1.82202 1.44653 2.04986 1.28268 2.30385 1.1705C2.55783 1.05831 2.8324 1.00024 3.11006 0.999975H6.11006C6.59536 0.995198 7.06585 1.16705 7.43382 1.48351C7.80179 1.79996 8.04213 2.23942 8.11005 2.71997C8.23668 3.68004 8.47151 4.6227 8.81006 5.52997C8.9446 5.8879 8.97372 6.27689 8.89396 6.65086C8.81421 7.02482 8.62892 7.36809 8.36005 7.63998L7.09006 8.90997C8.51361 11.4135 10.5865 13.4864 13.0901 14.91L14.3601 13.64C14.6319 13.3711 14.9752 13.1858 15.3492 13.1061C15.7231 13.0263 16.1121 13.0554 16.4701 13.19C17.3773 13.5285 18.32 13.7634 19.2801 13.89C19.7658 13.9585 20.2095 14.2032 20.5266 14.5775C20.8437 14.9518 21.0122 15.4296 21.0001 15.92Z" stroke="#010101" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
           </svg>
           <span>502 202 084</span>
       </span>
   </a>
</header>


<div class="container">
   <div class="content">
  
<?php
       $db=mysqli_connect('69178.m.tld.pl','admin69178_praktyki','s7F^n1R#m6','baza69178_praktyki');
       $zap="SELECT * FROM kacper";
       $result=$db->query($zap);


       while($row=$result->fetch_row()):


?>
   <h2>Zlecenie id=<?=$row[0]?></h2>
       <table class="table" border="0" cellspacing="0" cellpadding="0">
           <tr >
               <th>Strona internetowa:</th>
               <td>   
                       <label class="checkbox">
                       <input   name="button-website" class="field-website " type="checkbox" value="1">
                           <div id="website-button"  class="button"><?php if($row[1]==1){echo"Tak";}else {echo"Nie";}?></div>
                               </label>
               </td>
           </tr>
           <tr>
               <th>Sklep</th>
               <td >
                       <label class="checkbox">
                               <input    name="button-shop"  class="field-shop" type="checkbox"   value="1">
                               <div  class="button" ><?php if($row[2]==1){echo"Tak";}else {echo"Nie";}?></div>
                           </label>
               </td>
           </tr>
           <tr class="website ">
               <th>Charakter strony:</th>
               <td><?=$row[3]?></td>
           </tr>
           <tr class="shop">
               <th>Charakter sklepu:</th>
               <td><?=$row[4]?></td>
           </tr>
           <tr class="website">
               <th>Jest stary url:</th>
               <td><?php if($row[5]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website">
               <th>Url:</th>
               <td><?=$row[6]?></td>
           </tr>
           <tr class="website">
               <th>Rzeczy do zostawienia ze starej strony:</th>
               <td><?=$row[7]?></td>
           </tr>
           <tr class="website">
               <th>Rzeczy do wyrzucenia ze starej strony:</th>
               <td><?=$row[8]?></td>
           </tr>
           <tr class="website">
               <th>Nowe rzeczy:</th>
               <td><?=$row[9]?></td>
           </tr>
           <tr class="website">
               <th>Ilość stron:</th>
               <td><?=$row[10]?></td>
           </tr>
           <tr class="shop">
               <th>Ilość produktów:</th>
               <td><?=$row[11]?></td>
           </tr>
           <tr class="website shop">
               <th>Przeznaczony fundusz:</th>
               <td><?=$row[12]."-".$row[13]?></td>
           </tr>
           <tr class="website shop">
               <th>Tułumaczenia strony:</th>
               <td><?php if($row[14]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Ilość języków:</th>
               <td><?=$row[15]?></td>
           </tr>
           <tr class="website shop">
               <th>Gotowe tłumaczenia:</th>
               <td><?php if($row[16]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Inny wyglad stron po przetłumaczeniu:</th>
               <td><?php if($row[17]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Księga znaku:</th>
               <td><?php if($row[18]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Zalecenia kolorystyczne:</th>
               <td><?php if($row[19]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Zalecenia:</th>
               <td><?=$row[20]?></td>
           </tr>
           <tr class="website shop">
               <th>Materiały na strone:</th>
               <td><?php if($row[21]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Materiały na strone:</th>
               <td><?=$row[22]?></td>
           </tr>
           <tr class="website shop">
               <th>Mamy zaprojektować logo:</th>
               <td><?php if($row[52]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Strony które są preferowane:</th>
               <td><?=$row[23]?></td>
           </tr>
           <tr class="shop">
               <th>Istnieje juz sklep internetowy:</th>
               <td><?php if($row[24]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>Przenoszenie produktów:</th>
               <td><?php if($row[25]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>System sklepu i  ilość produktów:</th>
               <td><?=$row[26]?></td>
           </tr>
           <tr class="shop">
               <th>Produkty wariantowe:</th>
               <td><?php if($row[27]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr >
           <tr class="shop">
               <th>Kody rabatowe:</th>
               <td><?php if($row[28]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>Produkty jako zestawy:</th>
               <td><?php if($row[29]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>Kraje:</th>
               <td><?=$row[30]?></td>
           </tr>
           <tr class="shop">
               <th>Płatności:</th>
               <td><?=$row[31]?></td>
           </tr>
           <tr class="shop">
               <th>Waluty:</th>
               <td><?=$row[32]?></td>
           </tr>
           <tr class="shop">
               <th>Aktualizacja cen po walutach:</th>
               <td><?php if($row[33]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>Integracja z kurierami:</th>
               <td><?php if($row[34]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>Firmy kurierskie:</th>
               <td><?=$row[35]?></td>
           </tr>
           <tr class="shop">
               <th>Integracje z API:</th>
               <td><?php if($row[36]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>API:</th>
               <td><?=$row[37]?></td>
           </tr>
           <tr class="shop">
               <th>Dodatkowe usługi dla produktow:</th>
               <td><?php if($row[38]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="shop">
               <th>Dodatkowe usługi:</th>
               <td><?=$row[39]?></td>
           </tr>
           <tr class="website shop">
               <th>Opis:</th>
               <td><?=$row[40]?></td>
           </tr>
           <tr class="website shop">
               <th>Domena:</th>
               <td><?php if($row[41]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Serwer:</th>
               <td><?php if($row[42]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Treści:</th>
               <td><?php if($row[43]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Opieka:</th>
               <td><?php if($row[44]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Pozycjonowanie:</th>
               <td><?php if($row[45]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Reklama:</th>
               <td><?php if($row[46]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="website shop">
               <th>Wizytówka</th>
               <td><?php if($row[47]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
           <tr class="data">
               <th>Imie i Nazwisko:</th>
               <td><?=$row[48]?></td>
           </tr>
           <tr class="data">
               <th>Numer telefonu:</th>
               <td><?=$row[49]?></td>
           </tr class="data">
           <tr class="data">
               <th>E-mail:</th>
               <td><?=$row[50]?></td>
           </tr>
           <tr class="data">
               <th>Przetwarzanie danych zgoda:</th>
               <td><?php if($row[51]==1){echo"Tak";}else {echo"Nie";}?></td>
           </tr>
       </table>


<?php
   endwhile;
   $db->close();
?>
   </div>
</div>
<script>
   document.querySelectorAll('.field-shop').forEach(label => {
       label.addEventListener('change', function (e) {
           const label = this.parentElement;
           const parent_label = label.parentElement;


           if(this.checked)
           {
              


              
                   var elems = document.getElementsByClassName('shop');


                   for (var i=0;i<elems.length;i+=1){
                       elems[i].style.display = 'table-row';
                   }
               
              
           }else{
              
               var elems = document.getElementsByClassName('shop');


                       for (var i=0;i<elems.length;i+=1){
                           elems[i].style.display = 'none';
                       }
              
           }
              


       });
   });








   document.querySelectorAll('.field-website').forEach(label => {
       label.addEventListener('change', function (e) {
           const label = this.parentElement;
           const parent_label = label.parentElement;


           if(this.checked)
           {
              


              


                   var elems = document.getElementsByClassName('website');


                   for (var i=0;i<elems.length;i+=1){
                       elems[i].style.display = 'table-row';
                   }
               
                  
              
           }else{
              
               var elems = document.getElementsByClassName('website');


                       for (var i=0;i<elems.length;i+=1){
                           elems[i].style.display = 'none';
                       }
              
           }
              


       });
   });






  
</script>
</body>
</html>

