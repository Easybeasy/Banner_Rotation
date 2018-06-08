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
        <form>
            <!--  Normales  einzeiliges  Eingabefeld  -->
            <div class="form-group">
                <label for="input1">Banner-Bezeichnung</label>
                <input  type="text" class="form-control" id="input1" placeholder="Bitte  Bannername etwas  eingeben...">
            </div>
            
            <!--  Banner-Upload  -->
            <div class="form-group">
                <label for="input1">Banner-Upload</label>
               <input id="input-b1" name="input-b1" type="file" class="file">
            </div>

            <!--  Mehrzeiliges  Eingabefeld  (in  diesem  Fall  3  Zeilen)  -->
            <div class="form-group">
                <label for="input1">Banner-Upload</label>
                <input class="form-control" type="date" value="" id="example-date-input">
            </div>

            <!--  Auswahlfeld  -->
            <div class="form-group">
                <label for="input4">Auswahlfeld</label>
                <select id="input4" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <!--  Optionsfeld  -->
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Radiobutton
                </label>
            </div>

            <!--  Checkbox  -->
            <div class="checkbox">
                <label>
                    <input type="checkbox">
                    Checkbox
                </label>
            </div>

            <!--  Schaltflaeche  als  Button  -->        
            <button type="submit" class="btn btn-primary btn-lg">Gro&szlig;er CTA Button</button>

        </form>
    </div>
</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
