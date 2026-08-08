<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quotation Request</title>
</head>
<body style="margin:0; padding:0; background:#f3e9e6; font-family: Arial, Helvetica, sans-serif; color:#3b2626;">
    <div style="max-width:600px; margin:0 auto; padding:24px;">

        <div style="background:#5c3535; background:linear-gradient(135deg,#5c3535 0%,#7b4a4a 100%); color:#ffffff; padding:30px 24px; text-align:center; border-radius:14px 14px 0 0;">
            <div style="font-size:12px; letter-spacing:2px; text-transform:uppercase; color:#ffe0e0;">V4Peace Counselling Centre</div>
            <h1 style="margin:12px 0 6px; font-size:22px;">New Quotation Request</h1>
            <p style="margin:0; font-size:14px; color:rgba(255,255,255,0.9);">An organisation has requested a counselling quotation.</p>
        </div>

        <div style="background:#ffffff; padding:26px 28px; border-radius:0 0 14px 14px;">
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                <tr>
                    <td style="padding:10px 0; color:#9a8888; width:45%;">Company / Organisation</td>
                    <td style="padding:10px 0; text-align:right; font-weight:bold;">{{ $company_name }}</td>
                </tr>
                <tr>
                    <td style="padding:10px 0; color:#9a8888; border-top:1px solid #f4ece9;">Contact Email</td>
                    <td style="padding:10px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;"><a href="mailto:{{ $contact_email }}" style="color:#7b4a4a;">{{ $contact_email }}</a></td>
                </tr>
                <tr>
                    <td style="padding:10px 0; color:#9a8888; border-top:1px solid #f4ece9;">Mobile Number</td>
                    <td style="padding:10px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;"><a href="tel:{{ $mobile }}" style="color:#7b4a4a;">{{ $mobile }}</a></td>
                </tr>
                <tr>
                    <td style="padding:10px 0; color:#9a8888; border-top:1px solid #f4ece9;">Number of People</td>
                    <td style="padding:10px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $people }}</td>
                </tr>
            </table>

            @if(!empty($additional_info))
            <h3 style="margin:22px 0 8px; font-size:13px; text-transform:uppercase; letter-spacing:1px; color:#7b4a4a;">Additional Information</h3>
            <div style="background:#fff9f6; border-radius:10px; padding:14px 16px; color:#6b5a5a; font-size:14.5px; line-height:1.6;">
                {!! nl2br(e($additional_info)) !!}
            </div>
            @endif

            <p style="margin:26px 0 0; font-size:12.5px; color:#a08f8f; text-align:center;">
                Please follow up with this organisation to share a tailored quotation.
            </p>
        </div>

        <p style="text-align:center; color:#a08f8f; font-size:12px; margin:16px 0 0;">V4Peace Counselling Centre &middot; Kothamangalam, Kerala</p>
    </div>
</body>
</html>
