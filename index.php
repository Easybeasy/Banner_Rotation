<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <!-- Bootstrap core CSS -->
        <link href="https://www.bootstrapworld.de/design/bootstrapworld/sc/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
        
        <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
        <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="function.js"></script>
        <link rel="stylesheet" href="jqueryui/style.css"> 
    </head>
    <body>
    <div class="container">
        <div class="col-sm-4">
            <form action="/Banner_Rotation/save_banner_details.php" method="post" id="form1" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Banner-Bezeichnung</label>
                <input  type="text" class="form-control" name="banner_bez" placeholder="Bitte  Bannername etwas  eingeben...">
            </div>
                
                       
            <div class="form-group">
                <label>Banner-Upload</label>
               
               <input type="file" name="image" />
            </div>

           
            <div class="form-group">
                <label>Aktiv-Von:</label>
                <input class="form-control" type="date" value="" name="aktiv_von">
            </div>
            
            
            <div class="form-group">
                <label>Aktiv-Bis:</label>
                <input class="form-control" type="date" value="" name="aktiv_bis">
            </div>
                      
                 
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Banner einstellen</button>

        </form>
    </div>
</div>
       
    </body>
</html>
