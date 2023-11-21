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
        $dateInt = $_POST["dateEntry"];
        //converts the string input of datetime on the dateEntry user input and converts that value into a String
        $dateTimeInt = strtotime($dateInt);
        $sql = "INSERT INTO notes (date_time, contents) VALUES ('$dateTimeInt', :noteEntry)";
        

        $bindings = [
            ['$dateTimeInt', $dateTimeInt, 'int'],
            [':noteEntry', $_POST['noteEntry'], 'str']
        ];
        $result = $pdo->otherBinded($sql, $bindings);

        if ($result === 'error'){
            return 'There was an error adding that note';
        }
        else{
            return 'note has successfully entered database';
        }
        //return $converter;
    }

    private function getNote() {
        $pdo = new PdoMethods();
        $date1Int = strtotime($_POST["firstDate"]);
        $date2Int = strtotime($_POST["secondDate"]);
        if ($date1Int > $date2Int ){
            return "Cannot Time Tavel currently please enter the earliest date first and the latest date second";
        } 
        

        //$sql = "SELECT date_time, note FROM note WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC"; Original Method with example text
        $sql = "SELECT date_time, contents FROM notes WHERE date_time BETWEEN '$date1Int' AND '$date2Int'ORDER BY date_time DESC";

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
        //
		foreach ($records as $row){
			$list .= "<li>Time Created: {$row ['date_time']} {$row['contents']} </li>";
		}
		$list .= '</ol>';
		return $list;
	}

}

?>

