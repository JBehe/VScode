<?php

require_once('PdoMethods.php');


class AddDisplayNotes {


    public function checkSubmit(){
        if (count($_POST)>0){

            if (isset($_POST['addNote'])){
                return $this->addNote();
            }
           else if (isset($_POST['getNote'])){
                return $this->getNote();
            }
            else{
                return "error";
            }

        }


    }


    private function addNote() {
        $pdo = new PdoMethods();
        $sql = "INSERT INTO notes (date_time, contents) VALUES (:dateEntry, :noteEntry)";

    }

    private function getNote() {
        $pdo = new PdoMethods();

        //$sql = "SELECT date_time, note FROM note WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC"; Original Method with example text
        $sql = "SELECT date_time, contents FROM notes WHERE date_time BETWEEN :firstDate AND :secondDate ORDER BY date_time DESC";

        $records = $pdo-> selectNotBinded($sql);

        if ($records == 'error'){
            return 'there was an error returning your request';
        }
        else {
            if(count($records)!= 0){
                return $this->createList($records);
            }
            else{
                return "there are no notes within the specified timeFrame";
            }
        }
    }
    public function createList($records){
		$list = '<ol>';
		foreach ($records as $row){
			$list .= "<li>Name: {$row['date_time']} {$row['contents']} </li>";
		}
		$list .= '</ol>';
		return $list;
	}

}

?>

