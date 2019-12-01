<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
</head>

<body>
  <table style="border-spacing: 0;border-radius:10px;font-family:arial;">
    <thead style="border:none; background-color: #318089;color:white;">
      <tr style="height:40px;font-size:24px">
        <th>REVITALIZE</th>
      </tr>
      <tr style="border:none;">
        <td style="padding:5px;border:none;text-align:center;">Hello, <?php $receiver_name_mail?></td>
      </tr>
    </thead>
    <tbody style=" background-color: white;">
      <tr>
        <td>
          <?php include_once($Page_view . '.php'); ?>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>