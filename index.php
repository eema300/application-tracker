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

        <div id='applications_container'>
            <button id='new_app'>
                + New Application
            </button>
        </div>
    </main>

    <script type="module">
        import { new_application, disp_cards } from "./functions.js";
        document.getElementById('new_app').addEventListener('click', new_application);
        window.onload = async function () {
            await disp_cards("includes/cardhandler.inc.php");
        }
    </script>
</body>
</html>