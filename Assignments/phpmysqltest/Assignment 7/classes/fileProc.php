<?php



class FileProc{

    //private $fileList = array();
   //private $i = 0;

   

    

       

        


    
    function processFile(){
        global $output;

        if ($_FILES["error"]["file_contents"] == 4){
            $output = "No file name was entered";

        }elseif ($_FILES["file_name"]["error"] == 4){
            $output = "No file was uploaded. Make sure you choose a file to upload";

        }elseif($_FILES["fileSelection"]["size"] > 1000000 || $_FILES["fileSelection"]["error"] == 1){
            $output = "The file is too large";
        }
        elseif ($_FILES["fileSelection"]["type"] != 'application/pdf') {

            $output = "<p>PDF files only/p>";
        }elseif (!move_uploaded_file( $_FILES["photo"]["tmp_name"], "photos/" . $_FILES["photo"]["name"])){
			$output = "<p>Sorry, there was a problem uploading that photo.</p>";
        }else {	
            $output = $this->displayList();
        }

    }
    public function fileUpload(){

        if(isset($_POST["submit"])){

            $this->processFile();

        }else{

            $output = "";
        }
    }

    public function displayList(){
       return <<<HTML
	
	<p>file uploaded:</p>
	<p><img src="photos/{$_FILES['photo']['name']}" alt="Photo"></p>

HTML;
    }

    public function init(){
        if(count($_POST) > 0){
            return [$this->fileUpload(), $this->displayList()];
            }
            else {
            return ["", $this->displayList()];
            } 

    }


}






?>