This is my first project working with **REST API**. It uses **PHP** and **MySQL** without any added frameworks.

---
#Goal
Build a task list system that will allow users to log in and create, update and delete tasks. Each user's tasks will be private to them and other users will not be able to view them.

More specifically, the developer is responsible for the **database** back end, the **web services** and the **Authentication Module** (thus, the developer is not responsible for the **front end** or the **server** set up).

## Requirements
- [ ] Return a JSON response for all APIs and allow caching where appropriate
- [ ] A task has an ID, title, description, deadline date, completion status
- [ ] Return a list of details for all tasks for a user using a URL of: */tasks*
- [ ] Return a list of details for all tasks for a user with pagination using a URL of: */tasks/page/{:page}
- [ ] Return a list of details for a single task for a user using a URL of: */tasks/{:taskid}*
- [ ] Return a list of details for all incomplete tasks for a user using a URL of: */tasks/incomplete*
- [ ] Return a list of details for all complete tasks for a user using a URL of: */tasks/complete*
- [ ] Delete a task for a user using a URL of: */tasks/{:taskid}*
- [ ] update title, description, deadline date or completion status and return updated task using a URL of: */tasks/{:taskid}*
- [ ] Create a new task and return the details for the new task using a URL of: */tasks*

## API Requirements - Authentication
- [ ] Return a JSOn response for all APIs
- [ ] A user has an ID, full name, unique username, hashed password, user active status and login attempts
- [ ] A user can log in on more than one device and should not log out a previous device (sessions)
- [ ] Create a new user using a URL of: */users*
- [ ] Log in a user using a URL of: */sessions*
- [ ] Logout a user using a URL of: */sessions/{:sessionid}*
- [ ] Limited lifetime of a session access token, refreshed using a URL of: */sessions/{:sessionid}*

Note: This project is heavily inspired by an online course given by Michael Spinks.