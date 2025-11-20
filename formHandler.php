<!-- Check if the form was submitted (isset($_POST['submit'])).

Retrieve and Sanitize the data immediately (using filter_input_array is often best).

Validate the sanitized data for correctness, collecting any errors.

If no errors: Process the data (save to a database, send an email, etc.) 
and redirect the user (Post/Redirect/Get pattern).

If errors exist: Reload the form page,
displaying the collected errors and ideally 
repopulating the valid fields the user entered. -->