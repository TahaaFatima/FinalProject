<table style="height:350px;width: 600px;border-spacing: 0;text-align:center;">
    <thead>
        <tr>
            <th style="background-color:#ffab67;height:40px;color:white" colspan="2">Contact Details</th>
        </tr>
        <tr>
            <td style="height:30px" colspan="2">
                You've received a contact form with the following details
            </td>
        </tr>
    </thead>
    <tbody style="text-align:left;height:350px;padding:5px;">
        <tr style="height:20px;">
            <th style="width:25%;padding:10px;border:1px dashed black;">
                Full Name
            </th>
            <td style="padding:10px;border:1px dashed black;">
                <?php
                echo $Name
                ?>
            </td>
        </tr>
        <tr style="height:20px;">
            <th style="width:25%;padding:10px;border:1px dashed black;">
                Email
            </th>
            <td style="padding:10px;border:1px dashed black;">
                <?php
                echo $Email_address
                ?>
            </td>
        </tr>
        <tr style="height:20px;">

            <th style="width:25%;padding:10px;border:1px dashed black;">
                Phone
            </th>
            <td style="padding:10px;border:1px dashed black;">
                <?php
                echo $Phone
                ?>
            </td>
        </tr>
        <tr>
            <th style="width:25%;padding:10px;border:1px dashed black;">
                Message
            </th>
            <td style="padding:10px;border:1px dashed black;">
                <?php
                echo $Message
                ?>
            </td>
        </tr>
    </tbody>
</table>