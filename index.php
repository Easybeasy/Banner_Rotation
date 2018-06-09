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
        
        
        <script>  
        $(function() {
          $( "#datepicker" ).datepicker({
            prevText: '&#x3c;zurück', prevStatus: '',
            prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
            nextText: 'Vor&#x3e;', nextStatus: '',
            nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
            currentText: 'heute', currentStatus: '',
            todayText: 'heute', todayStatus: '',
            clearText: '-', clearStatus: '',
            closeText: 'schließen', closeStatus: '',
            monthNames: ['Januar','Februar','März','April','Mai','Juni',
            'Juli','August','September','Oktober','November','Dezember'],
           
            showMonthAfterYear: false,
            showOn: 'both',
            dateFormat:'d MM, yy'
    } );
        });
        </script>
    </head>
    <body>
    <div class="container">
        <div class="col-sm-4">
            <form action="/Banner_Rotation/save_banner_details.php" id="form1">
            
            <div class="form-group">
                <label>Banner-Bezeichnung</label>
                <input  type="text" class="form-control" name="banner_bez" placeholder="Bitte  Bannername etwas  eingeben...">
            </div>
            
          
            <div class="form-group">
                <label>Banner-Upload</label>
               <input id="input-b1" name="input-b1" type="file" class="file">
            </div>

           
            <div class="form-group">
                <label>Aktiv-Von:</label>
                <input class="form-control" type="date" value="" id="aktiv_von">
            </div>
            
            
            <div class="form-group">
                <label>Aktiv-Bis:</label>
                <input class="form-control" type="date" value="" id="aktiv_bis">
            </div>
                      
                 
            <button type="submit" class="btn btn-primary btn-lg">Banner einstellen</button>

        </form>
    </div>
</div>
       
    </body>
</html>
