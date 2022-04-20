<?php

class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
      $counter = 0;
      foreach($newPath as $letter) {
        if($letter == '.') {
          $counter++;
        }
      }
      $counter = $counter/2;
      $startPosition = count($currentPath) - $counter;
      $lenToCut = count($currentPath) - $startPosition;
      $subString1 = substr($currentPath, $stratPosition+1, $lenToCut);
      $subString2 = substr($newPath, count($newPath) - 1, 1);

      return $subString1 . '/' . $subString2;
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
