<?php

include_once ('includes/database2.php');
require ('includes/smarty-3.1.30/smarty-3.1.30/libs/Smarty.class.php');

$template = new Smarty();

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = NULL;
}

switch ($action){
    case "toevoegenForm":
      //  $template->display('template/form.tpl');
        break;

    case "toevoegen":
  /*      if(!empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['score'])){
            $insertPerson = $conn->prepare('INSERT INTO persons SET 
firstname = :firstname, 
lastname = :lastname,
score = :bla');
            $insertPerson->bindParam(":firstname", $_POST['firstname']);
            $insertPerson->bindParam(":lastname", $_POST['lastnamee']);
            $insertPerson->bindParam(":score", $_POST['score']);
            $insertPerson->execute();

            $template->assign('melding', 'De persoon is toegevoegd');
            $template->display('template/form.tpl');
        }else{
            $template->assign('melding', 'Helaas is het niet gelukt');
            $template->display('template/form.tpl');
        }*/
        break;

    case "wijzigen":
            try {
                $checkedBody = $conn->prepare("UPDATE blogpost SET body=:body, titel=:titel WHERE idblogpost=:id");
                $checkedBody->bindparam(":body", $_POST['body']);
                $checkedBody->bindparam(":titel", $_POST['titel']);
                $checkedBody->bindparam(":id", $_POST['id']);
                $checkedBody->execute();
                echo "test";



                if ($checkedBody->fetchColumn() == 1) {

                } else {
                    echo "Zou wel raar zijn";
                }
            } catch (PDOException $e) {
                $template->assign('melding', "Je bent hier niet op correcte wijze gekomen");
                $template->display('templates/melding.tpl');
            }
        var_dump($_POST);
        echo "buiten de if else";
        break;

    case "wijzigenForm":
        if(!empty($_GET['id'])){
         /*   $checkedId = $conn->prepare("SELECT count(*) FROM blogpost WHERE idblogpost=:id");
            $checkedId->bindparam(":id", $_GET['id']);
            $checkedId->execute(); */
                $getBlogs= $conn->prepare("SELECT * FROM blogpost WHERE idblogpost=:id");
                $getBlogs->bindParam(":id", $_GET['id']);
                $getBlogs->execute();
                $blog = $getBlogs->fetch();

                if($getBlogs->rowCount() == 1){
                    $getBlogs->fetch(PDO::FETCH_ASSOC);
                    $template->assign("blog", $blog);
                    $template->display("templates/wijzigenForm.tpl");
                }else{
                    print "no";
                }
            }
        break;

    case "verwijderenForm":
        if(!empty($_GET['id'])){

            $getBlogs= $conn->prepare("SELECT * FROM blogpost WHERE idblogpost=:id");
            $getBlogs->bindParam(":id", $_GET['id']);
            $getBlogs->execute();
            $blog = $getBlogs->fetch();

            if($getBlogs->rowCount() == 1){
                $getBlogs->fetch(PDO::FETCH_ASSOC);
                $template->assign("blog", $blog);
                $template->display("templates/wijzigenForm.tpl");
            }else{
                print "no";
            }
        }
        break;

    case "verwijderen":
            $checkedBody = $conn->prepare("DELETE FROM blogpost WHERE idblogpost=:id");
            $checkedBody->bindParam(":id", $_GET['id']);
            $checkedBody->execute();
            header("Location: index.php");


        break;

    default:
        $getBlogs = $conn->query("SELECT * FROM blogpost");
     //   $getBlogs->execute();
        $blogs = $getBlogs->fetchAll(PDO::FETCH_ASSOC);
        $template->assign('blogs', $blogs);
        $template->display('templates/index.tpl');
}


