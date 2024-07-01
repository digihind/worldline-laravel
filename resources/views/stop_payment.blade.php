<html>
<head>
    <title>Stop Payment</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('/public/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Stop Payment :</h2>
                <form method="POST" id="myform" action="/stop_payment_request">
                    @csrf
                    <table class="table table-bordered table-hover">
                        <tr class="info">
                            <th width="40%">Field Name</th>
                            <th width="60%">Value</th>
                        </tr>
                        <tr>
                            <td><label>TPSL Transaction Id (From Transaction Scheduling) <span style="color:red;">*</span></label></td>
                            <td><input class="form-control" type="text" name="tpslTransactionID" value="" required/></td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <input class="btn btn-info" type="submit" name="submit" value="Submit" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>