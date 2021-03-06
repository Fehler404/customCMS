<script language="javascript">
/* Contact Form */
function checkEmail(email) {
    var check = /^[\w\.\+-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,6}$/;
    if (!check.test(email)) {
        return false;
    }
    return true;
}

function sendMessage() {
    // receive the provided data
    var name = $("input#name").val();
    var email = $("input#email").val();
    var subject = $("input#subject").val();
    var msg = $("textarea#msg").val();

    // check if all the fields are filled
    if (name == '' || name == 'Full Name*' || email == '' || email == 'Email Address*' || subject == '' || subject == 'Subject*' || msg == '' || msg == 'Your Message*') {
        $("div#msgs").html('<p class="warning">You must enter all the fields!</p>');

        return false;
    }

    // verify the email address
    if (!checkEmail(email)) {
        $("div#msgs").html('<p class="warning">Please enter a valid Email Address</p>');
        return false;
    }

    // make the AJAX request
    var dataString = $('#cform').serialize();
    $.ajax({
        type: "POST",
        url: 'send.php',
        data: dataString,
        dataType: 'json',
        success: function (data) {
            if (data.success == 0) {
                var errors = '<ul><li>';
                if (data.name_msg != '')
                    errors += data.name_msg + '</li>';
                if (data.email_msg != '')
                    errors += '<li>' + data.email_msg + '</li>';
                if (data.message_msg != '')
                    errors += '<li>' + data.message_msg + '</li>';
                if (data.subject_msg != '')
                    errors += '<li>' + data.subject_msg + '</li>';

                $("div#msgs").html('<p class="error">Could not complete your request. See the errors below!</p>' + errors);
            }
            else if (data.success == 1) {

                $("div#msgs").html('<p class="error">You message has been sent successfully!</p>');
            }

        },
        error: function () {
            $("div#msgs").html('<p class="error">Could not complete your request. Sorry!</p>');
        }
    });

    return false;
}

</script>

<h2>Contact Us</h2>
<br/>

<?php
$result = mysql_query("select content from contents where id='6'", $connection);
	if (!$result) {
		die("Database selection failed: " .mysql_error());}
// use the return data (display on the page)
	while ($row = mysql_fetch_array($result)) { ?>
            <?php echo $row["content"] . "<br/>"; }?>
            

    