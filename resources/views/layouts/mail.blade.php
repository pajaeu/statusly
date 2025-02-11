<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body style="color: #0f172a; background-color: #f1f5f9; margin: 0; padding: 0;">
<table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="color: #0f172a; font-size: 16px; width: 500px; margin: 0 auto;" width="500">
                <tr>
                    <td style="padding: 30px 20px 20px; text-align: center">
                        <img src="{{ asset('img/logo-dark.png') }}" alt="Statusly logo" style="height: 40px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding: 20px; color: #0f172a; text-align: left; border: 1px solid #e2e8f0; border-radius: 8px; background-color: #ffffff;">{{ $slot }}</div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px; color: #64748b; font-size: 12px; text-align: center">
                        <p style="color: #64748b;">© 2025 Pavel Skrbel. All rights reserved.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>