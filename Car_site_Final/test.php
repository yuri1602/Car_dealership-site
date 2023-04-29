<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title></title>
    <script src="https://code.jquery.com/jquery-2.1.3.main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        $mysqli = new mysqli('localhost','root','','dealership') or die ($mysqli ->connect_error);
        $table = 'upload';

        $phpFileUploadErrors = array(
           0 => 'huo',
           1 => 'Няма грешка, файлът е качен успешно',
           2 => 'Каченият файл надвишава директивата upload_max_filesize в php.in',
           3 => 'Каченият файл надвишава директивата MAX_FILE_SIZE, която е посочена в HTML формата',
           4 => 'Каченият файл е качен само частично',
           5 => 'Няма качен файл',
           6 => 'Липсва временна папка',
           7 => 'Неуспешен запис на файл на диск',
           8 => 'PHP разширение спря качването на файла',
           
        );

        //$_$FILES global variable
        if(isset($_FILES['userfile'])){
            $file_array = reArrayFiles($_FILES['userfile']);
            //pre_r($file_array);
            for($i=0;$i<count($file_array);$i++){
                if($file_array[$i]['error'])
                {
                    ?><div class="alert alert-danger">
                    <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
                    ?> </div> <?php
                }
                else{
                    $extensions = array('jpg','png','gif','jpeg');

                    $file_ext = explode('.',$file_array[$i]['name']);

                    $name = $file_ext[0];

                    $file_ext = end($file_ext);

                    if (!in_array($file_ext,$extensions))
                    {
                        ?> <div class="alert alert-danger">
                            <?php echo "{$file_array[$i]['name']}";
                        ?> </div> <?php
                    }
                    else{

                        $image = 'web/'.$file_array[$i]['name'];

                        move_uploaded_file($file_array[$i]['tmp_name'],$image);

                        $sql = "INSERT IGNORE INTO $table (name,image) VALUES('$name','$image')";
                        $mysqli->query($sql) or die ($mysqli->error);

                        ?> <div class="alert alert-danger">
                        <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
                        ?> </div> <?php

                    }
                }
            }
        }
        

        function reArrayFiles($file_post){
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

            for ($i=0; $i<$file_count; $i++){
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
            return $file_ary;
        }

        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo'</pre>';
        }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
	<label>Image </label>
	<input type="file" name="image" class="form-control" required >
	
	<button name="form_submit" class="btn-primary"> Upload</button>
</form>
</body>
</html>