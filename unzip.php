<?php
$unzip = new ZipArchive;
$out = $unzip->open('base.zip');
if ($out === TRUE) {
  // to be personalized
  $unzip->extractTo("destination");
  $unzip->close();
  echo 'File unzipped';
} else {
  echo 'Something went wrong?';
}
?>
