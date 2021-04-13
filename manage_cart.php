<?php

session_start();
// session_destroy();  

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['addToCart'])){

        if(isset($_SESSION['dog'])){

            $myitem = array_column($_SESSION['dog'],'item_name');
            if(in_array($_POST['item_name'],$myitem))
            {
                echo"<script>
                alert('Item Already Added');
                window.location.href='index.php';
                </script>";
            }
            else{
            $count = count($_SESSION['dog']);
            $_SESSION['dog'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
            echo "<script>
            alert('Item Added');
            window.location.href='index.php';
            </script>";
        }
    }

        else{
            $_SESSION['dog'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
            echo "<script>
            alert('Item Added');
            window.location.href='index.php';
            </script>";
        }
    }

    if(isset($_POST['remove_item']))
    { $value = "";

    // if(isset($_POST['citem_name'])){
    //     $item_name = $_POST['citem_name'];
    // }
    foreach($_SESSION['dog'] as $key => $value )
    {
        
        if($value['citem_name'] == $_POST['item_name'])
        {
            unset($_SESSION['dog'][$key]);
            $_SESSION['dog'] = array_values($_SESSION['dog']);
            echo "<script>
            alert('Item Removed');
            window.location.href='cart.php';
            </script>";
        
    }
    }
}
}



?>
