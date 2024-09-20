<?php 

class ParseCSV {

  public static $delimiter = ',';

  private $fileName;
  private $header;
  private $data=[];
  private $rowCount = 0;

  public function __construct($fileName='') {
    if($fileName != ''){
      $this->validateFile($fileName);
    }
  }

  public function validateFile($fileName) {
    if(!file_exists($fileName)) {
      echo "This file does not exist.";
      return false;
    }
    elseif(!is_readable($fileName)) {
      echo "The file is not readable.";
      return false;
    }
    $this->fileName = $fileName;
    return true;
  }

  public function parse() {
    if(!isset($this->fileName)) {
      echo "File not set.";
      return false;
    }

    // clear any previous results
    $this->reset();

    $file = fopen($this->fileName, 'r');
    while(!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if($row == [NULL] || $row === FALSE) { continue; }
      if(!$this->header) {
     	  $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
     	}
    }
    fclose($file);
    return $this->data;
  }

  public function last_results() {
    return $this->data;
  }

  public function row_count() {
    return $this->rowCount;
  }

  private function reset() {
    $this->header = NULL;
    $this->data = [];
    $this->rowCount = 0;
  }


}

?>