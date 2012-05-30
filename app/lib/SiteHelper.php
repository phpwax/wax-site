<?php
/**
* 
*/
class SiteHelper extends WaxHelper {
  
  
  public function zip_contents($beer_id) {
    $beer = new Beer($beer_id);
    $zip = new ZipArchive();
    $zip->open(PUBLIC_DIR.'downloads/'.$beer->artwork);
    for($i=0;$i<$zip->numFiles;$i++) {
      $fdetails = $zip->statIndex($i);
      echo '<li><a href="/zipstream?zip='.$beer->artwork.'&file='.$fdetails["name"].'">'. 'Download Cyclops artwork ('.strrchr($fdetails["name"],".").' Format) for '.$beer->title.' </a></li>';
    }
  }


}







