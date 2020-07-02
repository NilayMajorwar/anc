<?php
if (isset($_POST["pass"])){
    if ($_POST["pass"] == "iitk_anc@2020"){
        if(isset($_FILES['cover']))
        {
            $stat_file = fopen("admin.json", "r");
            $stat_raw = fread($stat_file, filesize("admin.json"));
            $stat = json_decode($stat_raw);
            $last = $stat->last;
            fclose($stat_file);

            if(!is_dir(strval($last + 1) . "/img")){
                mkdir(strval($last + 1) . "/img", 0777, true);
            }
            if(move_uploaded_file($_FILES['cover']['tmp_name'], strval($last + 1) . "/img/cover.png")) {
                echo "The cover uploaded.\n";
            } else {
                echo "There was an error uploading the cover photo, please try again!";
            }

            $data = (object)array();

            $data->title = $_POST["title"];
            $data->date = $_POST["date"];
            $data->intro = $_POST["intro"];
            $data->content = $_POST["content"];
            
            $myfile = fopen(strval($last + 1) . "/data.json", "w");
            $myJSON = json_encode($data);
            fwrite($myfile, $myJSON);

            copy("template.php",strval($last + 1) . "/index.php");

            $stat->last = $last + 1;
            $update = fopen("admin.json", "w");
            $update_json = json_encode($stat);
            fwrite($update, $update_json);

            echo "Blog Added...";
            echo "<br>";
            echo "Link to the blog: <a href='https://anciitk.in/blog/Internship/".strval($last + 1)."/'>LINK</a>";

            fclose($myfile);
            fclose($update);

            if(!is_dir(strval($last + 1) . "/update")){
                mkdir(strval($last + 1) . "/update", 0777, true);
            }
            copy("update_template.php",strval($last + 1) . "/update/index.php");
            copy("update.php",strval($last + 1) . "/update/update.php");

        } else {
            echo "Please upload a Cover Photo!";
        }
    } else {
        echo "Invalid password!";
    }
} else {
    echo "Invalid password!";
}
?>