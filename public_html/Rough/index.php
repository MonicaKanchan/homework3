<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

    class Manage
        {
	        public static function autoload($class)
		        {
			            include $class . '.php';

				            }
					        }

						    $obj = new main();
						    class main
						    {
						        public function
							__construct()
							    {
							            $pageRequest
								    =
								    'homepage';
								            if(isset($_REQUEST['page']))
									            {
										                $pageRequest
												=
												$_REQUEST['page'];
												        }
													        $page
														=
														new
														$pageRequest;

														        if($_SERVER['REQUEST_METHOD']
															==
															'GET')
															        {
																            $page->get();
																	            }
																		            else
																			            {
																				                $page->post();
																						        }
																							    }
																							    }

																							    abstract
																							    class
																							    page
																							    {
																							        protected
																								$html;

													
																												        public	function __construct()
																													    {
																													            $this->html
																														    .=
																														    '<html>';
																														            $this->html
																															    .=
																															    '<link
																															    rel="styleshheet"
																															    href
																															    ="styles.css">';
																															            $this->html
																																    .=
																																    '<body>';
																																        }
																																	    public
																																	    function
																																	    __destruct()
																																	        {
																																		     $this->html
																																		     .=
																																		     '</body></<!DOCTYPE
																																		     HTML
																																		     PUBLIC
																																		     "-//W3C//DTD
																																		     HTML
																																		     4.01//EN"
																																		     "http://www.w3.org/TR/html4/strict.dtd">>
																																		     <head>
																																		     <meta
																																		     http-equiv="Content-Type"
																																		     content="text/html;charset=UTF-8">
																																		     <title>Document</title>
																																		     </head>
																																		     <body>
																																		       
																																		       </body>
																																		       </>';
																																		       stringFunctions::printThis($this->html);
																																			       }
																																			           public
																																				   function
																																				   get()
																																				       {
																																				               echo
																																					       'default
																																					       get
																																					       message';
																																					           }
																																						       public
																																						       function
																																						       post()
																																						           {
																																							           print_r($_POST);
																																								       }
																																								       }

																																								       class
																																								       homepage
																																								       extends
																																								       page
																																								       {
																																								           /**
																																									        *
																																										     */
																																										         public
																																											 function
																																											 get()
																																											     {
																																											          $form
																																												  =
																																												  '<form
																																												  method="post"
																																												  enctype="multipart/form-data">';
																																												       $form
																																												       .=
																																												       '<input
																																												       type="file"
																																												       name="fileToUpload"
																																												       id="fileToUpload">';
																																												            $form
																																													    .=
																																													    '<input
																																													    type="submit"
																																													    value="Upload
																																													    File"
																																													    name="submit">';
																																													         $form
																																														 .=
																																														 '</form>';
																																														      $this->html
																																														      .=
																																														      '<h1>Upload
																																														      Form
																																														      </h1>';
																																														           $this->html
																																															   .=
																																															   $form;
																																															       }

																																															           public
																																																   function
																																																   post()
																																																       {
																																																               $target_dir
																																																	       ="Uploads/";
																																																	               $target_file
																																																		       =
																																																		       $target_dir
																																																		       .
																																																		       basename($_FILES["fileToUpload"]["name"]);
																																																		               $uploadOk
																																																			       =1;
																																																			               $imageFileType
																																																				       =
																																																				       pathinfo($target_file,
																																																				       PATHINFO_EXTENSION);
																																																				               $imageFileName
																																																					       =
																																																					       pathinfo($target_file,
																																																					       PATHINFO_BASENAME);
																																																					               move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
																																																						       $target_file);
header('Location: index.php?page=htmlTable&filename='.$imageFileName);
																																																						           }
																																																							   }
																																																							   class
																																																							   htmlTable
																																																							   extends
																																																							   page
																																																							   {						

public function get()
{
$filename=$_REQUEST['filename'];
$file = fopen("Uploads/".$filename, "r");
$tablehtml = "";
//$data = array();
$i=0;
$tablehtml .= '<table border= "1">';
while(! feof($file))
{
$data=fgetcsv($file);
$count=count($data);
$tablehtml .= '<tr>';
for($i=0; $i<$count; $i++)
{
$tablehtml .= '<td>' .$data[$i].'</td>';
}
$tablehtml .= '</tr>';
}
$tablehtml .= '</table>';

fclose($file);
print($tablehtml);
}


}

																																																							   class
																																																							   stringFunctions
																																																							   {
																																																							       static
																																																							       public
																																																							       function
																																																							       printThis($inputText)
																																																							           {
																																																								           return
																																																									   print($inputText);
																																																									       }
																																																									           static
																																																										   public
																																																										   function
																																																										   stringLength($text)
																																																										       {
																																																										               return
																																																											       strlen($text);
																																																											           }
																																																												   }

																																																												   ?>


