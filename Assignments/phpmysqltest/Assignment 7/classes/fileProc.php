<?php



class FileProc{

    //private $fileList = array();
   //private $i = 0;

   

    public function fileUpload(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST["FileName"]) and isset($_POST["fileSelection"])){
                
                $data = $_POST['filename'];
                $file = $_FILES['fileSelection'];
                $filename = $file['name'];

                if ($file['size'] > 10000){
                    if (move_uploaded_file($file['tmp_name'], '../uploadedfile/'.$file['name'])){
                        $txt = <<<TXT
                        [{"filename":"$filename", "filepath": "uploadedfile/$filename"}]
                        TXT;


                        $datafile = "INSERT INTO filelist (userName, fileContent)
                        VALUES ($filename, $txt)";

                        $test = "SELECT * From filelist";
                        //$result = this->$conn->query($test);

                        return "file Succesfully made";
                    }
                }
            
            }
        
        
        }


    }

    public function displayList(){

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