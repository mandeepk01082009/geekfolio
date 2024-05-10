<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Mail to Gogosprockets!</title>
    <style></style>
</head>

<body>
    <div id="email" style="width:600px;">
        <div>
            <p><center><label class="title font-weight-bold"
                style="font-family: 'Racing Sans One',cursive; font-size: 30px;white-space: nowrap; cursor: pointer;"
                onclick="scroll_to_top()"><strong>GoGoSprockets!</strong></label>
            <h3 class="subtitle"
                style="font-size: 17px; font-weight: 400; margin-top: -5px; cursor: pointer;
            white-space: nowrap;"
                onclick="scroll_to_top()">Entertainment Production Services</h3></center></p>
            <p>Dear Gogosprockets!,</p>
            <p>A user has contacted you with the following details:</p>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Subject:</strong> {{ $subject }}</p>
            <p><b>The user's message:</b></p>
            <p>{{ $user_message }}</p>
            <hr>
            <p>Thanks</p>
            <p>Support Team</p>
        </div>
        <!-- Header -->
        {{-- <table role="presentation" border="0" cellspacing="0" width="100%"> 


            <center><label class="title font-weight-bold"
                style="font-family: 'Racing Sans One',cursive; font-size: 30px;white-space: nowrap; cursor: pointer;"
                onclick="scroll_to_top()"><strong>GoGoSprockets!</strong></label>
            <h3 class="subtitle"
                style="font-size: 17px; font-weight: 400; margin-top: -5px; cursor: pointer;
            white-space: nowrap;"
                onclick="scroll_to_top()">Entertainment Production Services</h3></center>

            <tr>Dear Gogosprockets!,</tr><br><br>
        </table> --}}


        <!-- Body -->
        {{-- <table role="presentation" border="0" cellspacing="0" width="100%">

            <tr>
                A user has contacted you with the following details:
            </tr><br><br>
            <tr><strong>Name:</strong> {{ $name }}</tr><br><br>
            <tr>
                <strong>Email:</strong> {{ $email }}
            </tr><br><br>
            <tr><strong>Subject:</strong> {{ $subject }}</tr><br><br>
            <tr><b>The user's message:</b></tr><br><br>
            <tr><strong> {{ $user_message }} </strong></tr><br><br>
            <tr>Please respond to the user as soon as possible.</tr><br><br>
            <tr>Thanks</tr><br>
            <tr>Support Team</tr><br><br>
        </table> --}}
    </div>
</body>

</html>
