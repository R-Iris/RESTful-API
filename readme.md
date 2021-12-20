This is my first project working with **REST API**. It uses **PHP** and **MySQL** without any added frameworks.

---
#Goal
Build a task list system that will allow users to log in and create, update and delete tasks. Each user's tasks will be private to them and other users will not be able to view them.

More specifically, the developer is responsible for the **database** back end, the **web services** and the **Authentication Module** (thus, the developer is not responsible for the **front end** or the **server** set up).

#Requirements
<span style="color: red;">1.</span> Return a JSON response for all APIs and allow caching where appropriate

<span style="color: red;">2.</span> A task has an ID, title, description, deadline date, completion status

<span style="color: red;">3.</span> Return a list of details for all tasks for a user using a URL of: */tasks*

<span style="color: red;">4.</span> Return a list of details for all tasks for a user with pagination using a URL of: */tasks/page/{:page}

<span style="color: red;">5.</span> Return a list of details for a single task for a user using a URL of: */tasks/{:taskid}*

<span style="color: red;">6.</span> Return a list of details for all incomplete tasks for a user using a URL of: */tasks/incomplete*

<span style="color: red;">7.</span> Return a list of details for all complete tasks for a user using a URL of: */tasks/complete*

<span style="color: red;">8.</span> Delete a task for a user using a URL of: */tasks/{:taskid}*

<span style="color: red;">9.</span> update title, description, deadline date or completion status and return updated task using a URL of: */tasks/{:taskid}*

<span style="color: red;">10.</span> Create a new task and return the details for the new task using a URL of: */tasks*


#API Requirements - Authentication
<span style="color: red;">1.</span> Return a JSOn response for all APIs

<span style="color: red;">2.</span> A user has an ID, full name, unique username, hashed password, user active status and login attempts

<span style="color: red;">3.</span> A user can log in on more than one device and should not log out a previous device (sessions)

<span style="color: red;">4.</span> Create a new user using a URL of: */users*

<span style="color: red;">5.</span> Log in a user using a URL of: */sessions*

<span style="color: red;">6.</span> Logout a user using a URL of: */sessions/{:sessionid}*

<span style="color: red;">7.</span> Limited lifetime of a session access token, refreshed using a URL of: */sessions/{:sessionid}*

<font size="2">Note: This project is heavily inspired by an online course given by Michael Spinks.</font>