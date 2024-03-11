<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tatarstar</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <?include('assets/Elements/header.php')?>

    <?
        if(isset($_GET['pages'])){
            $pages = $_GET['pages'];
            switch($pages){
            case 'catalog' :
                include('assets/pages/catalog.php');
                break;
            case 'mainpage':
                include('assets/pages/mainpage.php');
                break;
            case 'basket':
                include('assets/pages/basket.php');
                break;
            case 'oneitem':
                include('assets/pages/oneitem.php');
                break;
            default:
            break;
            }
        }
        else{
        include('assets/pages/mainpage.php');
      }
    ?>

    <?include("assets/Elements/footer.php")?>
    
</body>
</html>