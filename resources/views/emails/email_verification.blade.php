<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Mail</title>
</head>

<body>
    <!-- Main Area -->
    <div class="main" style="width:50vw; margin:0 auto;  padding: 5px 10px 10px 10px;">
        <table cellpadding="0" cellspacing="0"
            style="border-collapse: collapse;width: 70%;max-width: 70%;margin: 0 auto;background-color: white;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
            <tbody>
                <tr>
                    <td style="padding:5px 15px;border-bottom:1px solid #f1f1f1;text-align:center">
                        <a href="https://www.discountzshop.com/" target="_blank"
                            data-saferedirecturl="https://www.google.com/url?q=https://www.ngenitltd.com/&amp;source=gmail&amp;ust=1683110822015000&amp;usg=AOvVaw1oh2knrZ8dutUp_6pTWSeQ">
                            <img src="https://www.discountzshop.com/storage/webSetting/site_logo_black/oWIkHcvg6U1725872126.png"
                                height="80px" alt="DiscountZShop" border="0" width="230px" data-bit="iit"
                                style="object-fit: contain">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px">
                        Dear {{ $name }},
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:15px 15px 5px 15px;font-size:18px;">
                        Below is your OTP for email verification:
                    </td>
                </tr>

                <tr style="margin:25px;position: relative;bottom: 10px;">
                    <td style="padding:30px;">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:620px;">
                            <tbody>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:200px;background-color:#f1f1f1;
                                        padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        OTP</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;
                                        font-weight:700;font-size:15px;text-align:left">
                                        &nbsp; {{ $otp }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:15px 0;text-align:center;background-color:#eaeaea;font-size:14px;">
                        Thank you, from Customer Support Department <strong>discountzshop.com</strong>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
