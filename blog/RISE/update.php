<?php
if (isset($_POST["pass"])){
    if ($_POST["pass"] == "iitk_anc@2020"){
        if(isset($_POST["title"]) && isset($_POST["date"]) && isset($_POST["intro"]) && isset($_POST["content"]))
        {

            $data = (object)array();

            $data->title = $_POST["title"];
            $data->date = $_POST["date"];
            $data->intro = $_POST["intro"];
            $data->content = $_POST["content"];
            $data->author = $_POST["author"];
            
            $myfile = fopen("../data.json", "w");
            $myJSON = json_encode($data);
            fwrite($myfile, $myJSON);

            echo "Blog Updated...";
            
            fclose($myfile);

        } else {
        	echo "Update failed!";
        }
    } else {
        echo "Invalid password!";
    }
} else {
    echo "Invalid password!";
}
?>