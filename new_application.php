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
    <h1 id='applications'>New Application</h1>
    <div>
        <form action="includes/formhandler.inc.php" method="post">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" placeholder="Position" required>
            <br>
            <label for="company">Company</label>
            <input type="text" name="company" id="company" placeholder="Company" required>
            <br>
            <label for="job_type_menu">Job Type</label>
            <select name="job_type" id="job_type_menu">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Internship">Internship</option>
            </select>
            <br>
            <label for="submission_data">Submission Date</label>
            <input type="date" name="submission_date" id="submission_date">
            <span> optional</span>
            <br>
            <label for="status_menu">Status</label>
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
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>