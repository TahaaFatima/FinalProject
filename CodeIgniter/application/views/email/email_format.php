<table border=1 cellspacing=0 style="text-align:center; margin:20px">
    <thead>
        <tr>
            <th style="background-color:#ffab67" colspan="2">Contact Details</th>
        </tr>
        <tr>
            <td colspan="2">
            You've received a contact form with the following details
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>
                Full Name
            </th>
            <td>
                <?php
                echo $Name
                ?>
            </td>
        </tr>
        <tr>
            <th>
                Email
            </th>
            <td>
                <?php
                echo $Email_address
                ?>
            </td>
        </tr>
        <tr>

            <th>
                Phone
            </th>
            <td>
                <?php
                echo $Phone
                ?>
            </td>
        </tr>
        <tr>
            <th>
                Message
            </th>
            <td>
                <?php
                echo $Message
                ?>
            </td>
        </tr>
    </tbody>
</table>