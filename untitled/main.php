<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Test</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        function convertString() {
            var str = $('#str').val();

            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "example.php",
                data: {'fstr': str},
                success: function(data) {
                  alert(data['status'])
                }
            })
        }
    </script>

</head>
<body>

<div><label >String:<input type="text" id="str" name="str"></label></div>

<input type="button" name="submit" id="submit" value="submit" onClick = "convertString()" />

</body>
