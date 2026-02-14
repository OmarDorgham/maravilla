<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Career Application</title>
</head>
<body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8;padding:30px 0;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 10px rgba(0,0,0,0.05);">

                <!-- HEADER -->
                <tr>
                    <td style="background:#7e6239;color:#ffffff;padding:20px 30px;font-size:22px;font-weight:bold;">
                        New Career Application
                    </td>
                </tr>

                <!-- BODY -->
                <tr>
                    <td style="padding:30px;color:#333;font-size:14px;line-height:1.6;">

                        <p>A new candidate submitted an application via the website.</p>

                        <table width="100%" style="border-collapse:collapse;margin-top:20px;">
                            <tr>
                                <td style="padding:8px 0;"><strong>Name:</strong></td>
                                <td>{{ $application->full_name }}</td>
                            </tr>

                            <tr>
                                <td style="padding:8px 0;"><strong>Email:</strong></td>
                                <td>{{ $application->email }}</td>
                            </tr>

                            <tr>
                                <td style="padding:8px 0;"><strong>Phone:</strong></td>
                                <td>{{ $application->phone ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="padding:8px 0;"><strong>Position:</strong></td>
                                <td>{{ $application->position ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="padding:8px 0;"><strong>Location:</strong></td>
                                <td>{{ $application->location ?? '-' }}</td>
                            </tr>
                        </table>

                        @if($application->message)
                            <div style="margin-top:20px;padding:15px;background:#f9f9f9;border-radius:6px;">
                                <strong>Message:</strong><br>
                                {{ $application->message }}
                            </div>
                        @endif

                        <!-- BUTTON -->
                        <div style="margin-top:30px;text-align:center;">
                            <a href="{{ $cvUrl }}"
                               style="background:#7e6239;color:#ffffff;text-decoration:none;padding:12px 22px;border-radius:5px;font-weight:bold;display:inline-block;">
                                Download CV
                            </a>
                        </div>

                        <p style="margin-top:25px;font-size:12px;color:#999;">
                            Stored file name: {{ $application->cv_original_name ?? '-' }}
                        </p>

                    </td>
                </tr>

                <!-- FOOTER -->
                <tr>
                    <td style="background:#f7f7f7;padding:15px;text-align:center;font-size:12px;color:#888;">
                        © {{ date('Y') }} {{ config('app.name') }} — Careers System
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
