<?php
require("mestableaux.php");
?>
<script src="js/sweetalert2@11.js"></script>
<meta charset="utf-8">
<style>

    
    label 
    {
        display:block;
        font-weight:bold;
        margin-bottom:5px;
        margin-top:10px;


    }
    input,select{
        width:300px;
        padding: 14px 12px;
        
    }
    input[type="submit"]
    {
        display:block;
        background:#000;
        color:#cba;
    }
    </style>
<fieldset>
    <legend>boutique</legend>
    <form  action="" method="post">
        <label>liste des clients </label>
        <select name="client">
            <?php
            foreach($client as $value)
            echo "<option value=$value>$value</option>";

            ?>
        </select>
        <label>liste des produits </label>
        <select name="products">
            <?php
            for($i=0;$i<count($produit);$i++)
            echo "<option value=$produit[$i]>$produit[$i]</option>";

            ?>
        </select>
        <label>quantité a commander </label>
        <input type="number" value="1" min="1" max="30" name="qtte">
        <input type="submit" value="commander">
        </select>
</fieldset>

<?php
if ($_POST)
{
    extract($_POST);
}
echo "<script> Swal.fire('$client a commander $qtte $products','info','success')</script>"
?>