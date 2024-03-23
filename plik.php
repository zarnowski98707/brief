<?php
$arra=$_GET;




if(isset($arra['fields']) && !empty($arra['fields']))
   parse_str($arra['fields'], $arra['fields']);


if(isset($arra['multiple']) && !empty($arra['multiple']))
   $arra['multiple'] = jQueryUnserializeArray($arra['multiple']);




   function jQueryUnserializeArray($array)
   {
       $asc_array = array();


       if(!empty($array) && is_array($array))
       {
           print_r($a);
           foreach($array as $a)
           {
               $asc_array[$a['name']][] = $a['value'];
           }
       }
       return $asc_array;
   }
  
print_r($arra);




$db=mysqli_connect('69178.m.tld.pl','admin69178_praktyki','s7F^n1R#m6','baza69178_praktyki');
  
       $zap= "INSERT INTO `kacper` (`id`, `button-website`, `button-shop`, `character-site-website`,`character-site-shop`, `is-url`, `url`, `detail-save`, `detail-out`, `detail`, `site-pages`, `shop-products`, `cost-from`, `cost-to`, `is-language`, `languages`, `translation`, `translation-original`, `brandbook`, `is-font`, `font`, `is-materials`, `materials`,`logo`, `other-website`, `is-shop-url`, `transfer-product`, `description-isurl`, `variant-products`, `discount`, `sets`, `country`, `pay`, `currency`, `currency-conversion`, `is-courier`, `courier`, `is-API`, `API`, `is-add-service`, `add-service`, `description`, `is-domain`, `server`, `site-content`, `site-care`, `positioning`, `ads`, `bussines-card`, `name`, `phone`, `e-mail`, `agreement`) VALUES (NULL, '".$arra['fields']['button-website']."', '".$arra['fields']['button-shop']."', '".$arra['fields']['character-site-website']."','".$arra['fields']['character-site-shop']."','".$_POST['fields']['is-url']."', '".$arra['fields']['url']."', '".$arra['fields']['detail-save']."', '".$arra['fields']['detail-out']."', '".$arra['fields']['detail']."', '".$arra['fields']['site-pages']."', '".$arra['fields']['shop-products']."', '".$arra['fields']['cost-from']."', '".$arra['fields']['cost-to']."', '".$arra['fields']['is-language']."', '".$arra['fields']['languages']."', '".$arra['fields']['translation']."', '".$arra['fields']['translation-original']."', '".$arra['fields']['brandbook']."', '".$arra['fields']['is-font']."', '".$arra['fields']['font']."', '".$arra['fields']['is-materials']."', '".$arra['fields']['materials']."', '".$arra['fields']['logo']."', '".$arra['fields']['other-website']."', '".$arra['fields']['is-shop-url']."', '".$arra['fields']['transfer-product']."', '".$arra['fields']['description-isurl']."', '".$arra['fields']['variant-products']."', '".$arra['fields']['discount']."', '".$arra['fields']['sets']."', '".$arra['fields']['country']."', '".$arra['fields']['pay']."', '".$arra['fields']['currency']."', '".$arra['fields']['currency-conversion']."', '".$arra['fields']['is-courier']."', '".$arra['fields']['courier']."', '".$arra['fields']['is-API']."', '".$arra['fields']['API']."', '".$arra['fields']['is-add-service']."', '".$arra['fields']['add-service']."', '".$arra['fields']['description']."', '".$arra['fields']['is-domain']."', '".$arra['fields']['server']."', '".$arra['fields']['site-content']."', '".$arra['fields']['site-care']."', '".$arra['fields']['positioning']."', '".$arra['fields']['ads']."', '".$arra['fields']['bussines-card']."', '".$arra['fields']['name']."', '".$arra['fields']['phone']."', '".$arra['fields']['e-mail']."', '".$arra['fields']['agreement']."')";
  
   mysqli_query($db,$zap);
$db->close();


?>





