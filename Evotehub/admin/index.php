
<?php 
    require_once("INC/header.php");
    require_once("INC/navigation.php");


    if(isset($_GET['homepage']))
    {
        require_once("INC/homepage.php");
    }else if(isset($_GET['addElectionPage']))
    {
        require_once("INC/add.election.php");
    }else if(isset($_GET['addCandidatePage']))
    {
        require_once("INC/add.candidates.php");
    }else if(isset($_GET['viewResults']))
    {
        require_once("INC/viewResults.php");
    }

?>


<?php 
    require_once("INC/footer.php");
?>
