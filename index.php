<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <title></title>
        
        <style>
            .msg{
                width: 50%;
                padding: 3px;margin: 5px;
                font-family: monospace;
                color: brown; 
                max-height: 220px;
                min-height: 220px;
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
        <div id="main" class="msg">
            <table id="msgDiv" class="table table-striped">
                
            </table>
            <span id="clearSpan"></span>
        </div>
        
        <div>
            <input type="text" maxlength="20" id="txtName" style="width: 160px;padding: 3px;margin: 5px;">
            <br>
            <textarea maxlength="250" id="txtMsg" style="width: 160px;padding: 3px;margin: 5px;"> </textarea>
            <br>
            <button title="send" style="width: 55px;padding: 2px;margin: 10px;" onclick="setData();">yo</button>
        </div>
    </body>
    
    <script type="text/javascript">
    // Check if the page has loaded completely                                         
    
    setInterval(function(){
        $('#msgDiv').load('getData.php'); 
        scrollDown();
    }, 7000);
    
    function setData(){
        name=$('#txtName').val();
        msg=$('#txtMsg').val();
        if(name.length > 0){
            txtData = "#" +name + "> " + msg;
            $.ajax({
                type: "POST",
                url: "setData.php",
                data: { textStr: txtData }
            });
            $('#txtMsg').val('');
            
        }
        
    }
    function scrollDown(){
        var $t = $('#main');
        var height = $('#msgDiv').height();
        if(height > 280){
            $t.animate({"scrollTop": height}, "slow");
            
        }else{
            $t.animate({"scrollTop": 340}, "slow");
        }
        $('#clearSpan').focus();
    }
    
    scrollDown();
    
    </script> 

</html>
