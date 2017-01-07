<?php 

#database connection here
$dbc = mysqli_connect('localhost', 'dev', 'thepassword1', 'orskl') OR die('Could not connect: '.mysqli_connect_error());


# Constants
DEFINE ('D_TEMPLATE','template');

#Functions
include ('functions/data.php');


$site_title = 'OrSkl';
if(isset($_GET['page'])){

	$pageid = $_GET['page'];    //get pageid = value in the URL [inside the database, the data is set primary keyed to the id of the page.]

}
else {
	$pageid=1;                  // go to default homepage(id=1) if no page id given in the url
}




#page setup
$page =data_page($dbc, $pageid);

?>