<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="css/stylesheet.css"
    />
    <title>MyApply</title>
</head>
<body>
    <h1 id='applications'>My Applications</h1>
    <main>
        <div class='title_container'>
            <p class='child'>Position</p>
            <p class='child'>Company</p>
            <p class='child'>Job Type</p>
            <p class='child'>Submission Date</p>
            <p class='child'>Status</p>
        </div>

<!-- i want to make the button not a button but still clickable!! -->
<!-- how to add another card based on the rows of data in db?? -->

        <div class='applications_container'>
            <button id='new_app'>
                + New Application
            </button>

            <div class='application_info'>
                <p class='app_child'>MLE</p>
                <p class='app_child'>Adobe</p>
                <p class='app_child'>Full Time</p>
                <div class='app_child' id='status'>
                    <button id='submit_button'>Submitted</button>
                </div>
                <div class='app_child' id='status'>
                <form action="">
                    <select name="status" id="status_menu">
                        <option value="Unsubmitted">Unsubmitted</option>
                        <option value="Applied">Applied</option>
                        <option value="Under Review">Under Review</option>
                        <option value="Interview">Interview</option>
                        <option value="Initial Interview">Initial Interview</option>
                        <option value="Final Interview">Final Interview</option>
                        <option value="Technical Assessment">Technical Assessment</option>
                        <option value="Offer Extended">Offer Extended</option>
                        <option value="Offer Accepted">Offer Accepted</option>
                        <option value="Offer Rejected">Offer Rejected</option>
                        <option value="Hired">Hired</option>
                        <option value="No Response">No Response</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Closed">Closed</option>
                    </select>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>