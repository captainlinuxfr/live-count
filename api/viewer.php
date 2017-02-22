<?php 
require '../core/vendor.php';
$yt = new Youtube(KEY_API);
$data = $yt->Getinfo(CHANNEL);
    foreach ($data['items'] as $channel_data ){ 
 
      $viewer = number_format($channel_data['statistics']['viewCount']);
}

  echo $viewer;
?>