<?php
  class Coordinate {
    public $mdate;
    public $mlat;
    public $mlon;

    public function __construct($date, $mlat, $mlon) {
      $this->mdate = $date;
      $this->mlat  = $mlat;
      $this->mlon  = $mlon;
	}

    public static function latlon($filename) {
		$list = [];
		
		if (file_exists("data/".$filename)) {
			$csv = array_map('str_getcsv', file("data/".$filename));
		} else {
			header("location: index.php?pg=error");
		}

		
		foreach(array_slice($csv, 1) as $data) {
			//$list[] = new Coordinate($data[0],$data[1],$data[2]);
			array_push($list, [$data[1],$data[2],$data[0]]);
		}

		return $list;
    }
	
	public static function filelist($dir) {
		$list = [];
		$files = scandir($dir); 
		if(count($files)>2){
			for($i=2; $i<count($files);$i++){
				array_push($list, $files[$i]); 
			}
		}
		return $list;
    }

  }
?>