<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="Resources/framework/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="pruebaRest.js" type="text/javascript"></script>
    </head>
    <body>
        <input type="text" value="" id="txtUrl">
        <select id="selTipo">
            <option value="post">post</option>
            <option value="get">get</option>
            <option value="put">put</option>
            <option value="delete">delete</option>
        </select>
        <input type="button" value="consumir" onclick="consumir()">
    </body>
</html>
