<?php

/* HERE I REQUIRE AND USE THE STICKYFORM CLASS THAT DOES ALL THE VALIDATION AND CREATES THE STICKY FORM.  THE STICKY FORM CLASS USES THE VALIDATION CLASS TO DO THE VALIDATION WORK.*/
require_once('classes/StickyForm.php');
$stickyForm = new StickyForm();

/*THE INIT FUNCTION IS WRITTEN TO START EVERYTHING OFF IT IS CALLED FROM THE INDEX.PHP PAGE */
function init(){
  global $elementsArr, $stickyForm;

  /* IF THE FORM WAS SUBMITTED DO THE FOLLOWING  */
  if(isset($_POST['submit'])){

    /*THIS METHODS TAKE THE POST ARRAY AND THE ELEMENTS ARRAY (SEE BELOW) AND PASSES THEM TO THE VALIDATION FORM METHOD OF THE STICKY FORM CLASS.  IT UPDATES THE ELEMENTS ARRAY AND RETURNS IT, THIS IS STORED IN THE $postArr VARIABLE */
    $postArr = $stickyForm->validateForm($_POST, $elementsArr);

    /* THE ELEMENTS ARRAY HAS A MASTER STATUS AREA. IF THERE ARE ANY ERRORS FOUND THE STATUS IS CHANGED TO "ERRORS" FROM THE DEFAULT OF "NOERRORS".  DEPENDING ON WHAT IS RETURNED DEPENDS ON WHAT HAPPENS NEXT.  IN THIS CASE THE RETURN MESSAGE HAS "NO ERRORS" SO WE HAVE NO PROBLEMS WITH OUR VALIDATION AND WE CAN SUBMIT THE FORM */
    if($postArr['masterStatus']['status'] == "noerrors"){
      
      /*addData() IS THE METHOD TO CALL TO ADD THE FORM INFORMATION TO THE DATABASE (NOT WRITTEN IN THIS EXAMPLE) THEN WE CALL THE GETFORM METHOD WHICH RETURNS AND ACKNOWLEDGEMENT AND THE ORGINAL ARRAY (NOT MODIFIED). THE ACKNOWLEDGEMENT IS THE FIRST PARAMETER THE ELEMENTS ARRAY IS THE ELEMENTS ARRAY WE CREATE (AGAIN SEE BELOW) */
      return addData($_POST);

    }
    else{
      /* IF THERE WAS A PROBLEM WITH THE FORM VALIDATION THEN THE MODIFIED ARRAY ($postArr) WILL BE SENT AS THE SECOND PARAMETER.  THIS MODIFIED ARRAY IS THE SAME AS THE ELEMENTS ARRAY BUT ERROR MESSAGES AND VALUES HAVE BEEN ADDED TO DISPLAY ERRORS AND MAKE IT STICKY */
      return getForm("",$postArr);
    }
    
  }

  /* THIS CREATES THE FORM BASED ON THE ORIGINAL ARRAY THIS IS CALLED WHEN THE PAGE FIRST LOADS BEFORE A FORM HAS BEEN SUBMITTED */
  else {
      return getForm("", $elementsArr);
    } 
}
$elementsArr = [
  "masterStatus"=>[
    "status"=>"noerrors",
    "type"=>"masterStatus"
  ],
	"name"=>[
	  "errorMessage"=>"<span style='color: red; margin-left: 15px;'>Name cannot be blank and must be a standard name</span>",
    "errorOutput"=>"",
    "type"=>"text",
    "value"=>"Scott",
		"regex"=>"name"
	],
	"email"=>[
		"errorMessage"=>"<span style='color: red; margin-left: 15px;'>Email cannot be blank or it is not formatted correctly</span>",
    "errorOutput"=>"",
    "type"=>"text",
		"value"=>"sshaper@wccnet.edu",
		"regex"=>"email"
  ],
  "password"=>[
		"errorMessage"=>"<span style='color: red; margin-left: 15px;'>Password cannot be blank</span>",
    "errorOutput"=>"",
    "type"=>"text",
		"value"=>"password123",
		"regex"=>"password"
  ],
   
  "status"=>[
    "type"=>"select",
    "options"=>["Admin"=>"Admin","Staff"=> "Staff"],
		"selected"=>"oh",
		"regex"=>"name"
	],
  
];
function addData($post){
  global $elementsArr;  
  /* IF EVERYTHING WORKS ADD THE DATA HERE TO THE DATABASE HERE USING THE $_POST SUPER GLOBAL ARRAY */
      //print_r($_POST);
      require_once('classes/Pdo_methods.php');

      $pdo = new PdoMethods();

      $sql = "INSERT INTO admins (name, email,  password, status) VALUES (:name, :email,  :password, :status)";

      /* THIS TAKE THE ARRAY OF CHECK BOXES AND PUT THE VALUES INTO A STRING SEPERATED BY COMMAS  */
      

      if(isset($_POST['status'])){
        $status = $_POST['status'];
      }
      else {
        $status = "";
      }
      foreach (hash_algos() as $v){
        $passwordHash = hash($v, $post['password'], false);
        $password = $passwordHash;
      }
      
      
      $bindings = [
        [':name',$post['name'],'str'],
        [':email',$post['email'],'str'],
        [':password',$post['password'],'str'],
        [':status',$status,'str'],
      ];

      $result = $pdo->otherBinded($sql, $bindings);

      if($result == "error"){
        return getForm("<p>There was a problem processing your form</p>", $elementsArr);
      }
      else {
        return getForm("<p>Admin Information Added</p>", $elementsArr);
      }
      
}
function getForm($acknowledgement, $elementsArr){

  global $stickyForm;
  $options = $stickyForm->createOptions($elementsArr['status']);

 $form = <<<HTML
    <form method="post" action="index.php?page=addAdmin">
    <div class="form-group">
      <label for="name">Name (letters only){$elementsArr['name']['errorOutput']}</label>
      <input type="text" class="form-control" id="name" name="name" value="{$elementsArr['name']['value']}" >
    </div>
    <div class="form-group">
      <label for="email">Email {$elementsArr['email']['errorOutput']}</label>
      <input type="text" class="form-control" id="email" name="email" value="{$elementsArr['email']['value']}" >
    </div>
    <div class="form-group">
      <label for="password">Password {$elementsArr['password']['errorOutput']}</label>
      <input type="password" class="form-control" id="password" name="password" value="{$elementsArr['password']['value']}" >
    </div>
            
    <div class="form-group">
      <label for="state">Status</label>
      <select class="form-control" id="status" name="status">
        $options
      </select>
    </div>

    

    <div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

HTML;

    return [$acknowledgement, $form];

}

?>