<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Transalation</title>
</head>
<body>
    <form action="" method="post">
    <div class="form-group">
            <label for="p_tr_name" class="col-sm-3 control-label">Translate name</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="p_tr_name" name="p_tr_name" onchange="transalateName()" required>
            </div>
          </div>
          <div class="form-group">
            <label for="p_name" class="col-sm-3 control-label">Item Name <i class="required">*</i>
            </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="p_name" required>
            </div>
          </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function transalateName(){
            var p_tr_name = $('#p_tr_name').val();
            $.ajax({
            url: "transalation.php",
            method: "post",
            dataType: 'json',
            data:{
                action:"Translate",
                p_tr_name:p_tr_name
            },
            success: function (data) {
                if (data.error != '') {
                    alert(data.error);
                   
                } else {
                  $('#p_name').val(data.p_name)
                }

            }
        });
           
        }
    </script>
</body>
</html>