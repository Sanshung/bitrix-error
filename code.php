<?

 if($ex = $APPLICATION->GetException()):
      $strError = $ex->GetString();
      print_r($strError);
 endif;
?>
