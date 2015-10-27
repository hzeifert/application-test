Place your code here
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <head>
        <title>Hudson Zeifert - DMS Technologies Application Test</title>
        <style>
            body{
                padding-top: 50 px;
                padding-left: 50px;
            }
            table, th, td {
                border = 1px solid black;
                font-family = Arial, Helvetica, sans-serif;
            }
            table{
                border-collapse: collapse;
            }
            th, td{
                padding: 3px 7px 3px 7px;
            }
            button{
                cursor: grab;
            }
        </style>
    </head>
    <body>
        <?php
        $people = array(
            array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
            array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
            array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
            array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
            array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
        );
        function fillTable($people){
            foreach($people as $array){
                echo('<tr>');
                foreach($array as $key=>$value){
                    echo('<td>$value</td>');
                }
                echo('<td><button onclick="notify($array[first_name],$array[last_name],$array[email])">
                    Alert</button></td>');
                echo('</tr>');
            }
        }
        ?>
        <script>
            $("button").hover(
                function() {
                    $( this).fadeTo( "slow", 0.5 );
                }, function() {
                    $( this ).fadeTo( "slow", 1.0 );
                }
            );
            function notify(firstname, lastname, email){
                alert("A notification has been sent to " + firstname + " " + lastname + "at e-mail" + email + "."  );
            }
        </script>
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>First Name</th><th>Last Name</th><th>E-Mail</th><th>Notify</th>
                </tr>
            </thead>
            <?php fillTable($people); ?>
        </table>
    </body>
</html>
