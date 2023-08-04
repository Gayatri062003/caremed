<?php include_once("database/config.php"); ?>
<?php include_once('templates/headers.php'); ?>    

<?php 

@$page = $_REQUEST['page']; 
                                //echo $page;
    if(basename($_SERVER['PHP_SELF']) == "index.php" && $page =="") {       
                                $page="home";
                                }
                                if(!empty($page) && file_exists('middlepage/'.$page.'.php')){
                                    //if the pg is found then it gets from middlepage folder otherwise 
                                    // its redirect to 404 Error Page.
                                                
                                    include('middlepage/'.$page.'.php');
                                }
                                else{
                                    include('middlepage/404.php');
                                }
?>


<?php include_once("templates/footer.php"); ?>