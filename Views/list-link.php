<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: blue;">
    <?php require_once("nav.php"); ?>
    <div style="width: 50%;">
        <table style="width: 50%; border: 5px;">
            <thead>
                <th> Link </th>
                <th> Fecha </th>
            </thead>
            <tbody style="width: 500px;">
            <?php
                foreach($linkList as $link){
            ?>
                <tr>
                    <td style="width: 500px;"> <?php echo $link->getLink(); ?> </td>
                    <td> <?php echo $link->getFecha(); ?> </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>