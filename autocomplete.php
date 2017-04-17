<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



<div class="ui-widget">
    <label for="skills">Skills: </label>
    <input id="skills">
</div>


<script>
$(function() {
    $( "#skills" ).autocomplete({
        source: 'search.php'
    });
});
</script>

<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'courier_db';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from POSTPIN table
    $query = $db->query("SELECT * FROM postpin WHERE postpin LIKE '%".$searchTerm."%' ORDER BY PINCODE ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['postpin'];
    }
    
    //return json data
    echo json_encode($data);
?>