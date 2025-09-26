<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 0;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 30px 15px;">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                    
                    <!-- Header -->
                    <tr>
                        <td align="center" style="background-color: #2563eb; padding: 20px;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px;">Welcome to Our App 🎉</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px;">
                            <h2 style="color: #333333; font-size: 20px; margin-bottom: 10px;">Hello {{ $user->name }},</h2>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6;">
                                We’re excited to have you on board! Thank you for joining our community.
                                You can now explore all the features, stay connected, and enjoy a seamless experience.
                            </p>
                            <p style="color: #555555; font-size: 16px; line-height: 1.6;">
                                If you have any questions, feel free to reach out to our support team.
                            </p>

                            <div style="text-align: center; margin: 30px 0;">
                                <a href="{{ url('/') }}" 
                                   style="background-color: #2563eb; color: #ffffff; text-decoration: none; 
                                          padding: 12px 24px; border-radius: 6px; font-size: 16px; display: inline-block;">
                                    Get Started
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #f4f6f8; padding: 20px; font-size: 14px; color: #777777;">
                            © {{ date('Y') }} Welcome App. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
