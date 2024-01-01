# CHANGES

## PhpCollab 2.5 / 2003-10-xx
* Notification: support for smtp authentification (phpmailer class used)
* Tasks and subtasks: automated insertion in updates (status, priority, datedue changes)
* Invoicing module started
* Colored icons with priorities
* Postnuke integration stopped (changes in code removed)
* Xoops integration  stopped (changes in code removed)
* Automatic/remember login with cookie (return to the last page)
* Multilingual: Latvian
* Newsdesk: module added
* Added email to users
* Some corrective measures

## PhpCollab 2.4 / 2003-01-19
* New database support: PostgreSQL
* User and client user: export to vcf
* Validation w3c html 4.01 transitional (~90%, projects site and some special pages to update)
* Layered javascript calendar with all date input
* Xoops integration (phpkaox theme provided)
* Register globals off compliant
* Edit settings form extented
* Themes customization improved with calendar.css and help info-tip colors
* Filters improved (projectsOwner removed and new global projectsFilter)
* Postnuke integration started but not operational

## PhpCollab 2.3 / 2002-12-30
* Gantt graphs: cleaned (session check, split in sub-folders...)
* New Gantt graph with monthly calendar view
* Jpgraph updated with 1.9.1 (jpgraph.php 1.143 and jpgraph_gantt.php 1.33)
* Multilingual: Slovak (win1250), Turkish
* New layered javascript calendar in notes and calendar modules
* Dev-kit: samples to build pages
* Improvements in block.class.php to merge all html code in one file

## PhpCollab 2.2 / 2002-11-24
* Ftp support completed with upload/copy/delete files (Anthony Champion ;-)
* New profile: project manager administrator (transversal account with full rights on projects)
* Subtasks: notifications
* Split files in sub-folders
* Projects site: team tasks and subtasks Gantt graphs (Lawrie Scovell ;-)
* Multilingual: Hungarian, Czech (iso), Czech (win1250), Icelandic
* Mantis bugtracking system integration (Gopal Patwa ;-)
* Ldap authentification (Chris Kacerguis ;-)
* Some corrective measures

## PhpCollab 2.1 / 2002-10-13
* Report: new filter clients
* Linked content: deny access in files directory and new script to view/download (Henning Saul)
* Timezone option: dates stored with GMT +0 and timezone selector in user preferences
* Bookmarks module
* Sub-tasks Gantt graph
* User preferences: export to vcf
* Calendar item: export to ics
* Projects site: published subtasks, updates history, change password
* New permissions profile: disabled account
* Some corrective measures

## PhpCollab 2.0 / 2002-09-29
* Tasks: updates history (comments)
* Sub-tasks: add / update / assignment history / updates history (comments)
* Clients filter (new owner field)
* Multilingual: Estonian, Bulgarian, Romanian
* Some corrective measures
* Multilingual help files

## PhpCollab 1.9 / 2002-09-01
* Error handling: mysql request error in bold red
* Phases: organize tasks with phases set (Cameron Lee ;-)
* Support: support request form in projects site and notification (Cameron Lee ;-)
* Report: complete date choice in report form (like due date) and complete date column in list result
* Unique login for all users/clients
* Add task from projects site by client user (notification to project manager)
* Projects site: new graphics (James Buckley ;-)
* New value installation type in settings (to disable update checker on install/admin)
* Approval tracking restored with linked content
* Tasks and phases copied if a project is copied
* Clients and "my company" logo upload
* New field complete date with task
* Scope creep (difference between due/complete dates) visible on project page (total) and task page (bold if positive)
* Multilingual: Chinese traditional, Brazilian Portuguese, Catalan
* Ssl authentification with e-mail certificate (Rene Kluwen ;-)

## PhpCollab 1.8 / 2002-07-31
* Error_reporting forced to E_ALL & ~E_NOTICE (2039)
* Client user log in to main PhpCollab redirected to projects site
* Fix size labels (new array byteUnits in lang files)
* Project detail: total files project folder size
* Sysinfo: total files folder size
* File management: fix error handling in upload/filedetail (repetition in main and not present in projects site)
* Admin: update PhpCollab from 1.0 (1. edit settings and 2. edit database)
* Data request class: unique file
* Setup: unique dump file with db fields variables
* New notification: new discussion in a project
* Home: display tasks, discussions and notes only if associated project is Client Completed, Not started or Open
* Home: display opened discussions from all projects where logged user is member
* Calendar: add event (reminder and recursive options), see assigned tasks due date (overdue in bold)
* Multilingual: Russian, Azerbaijani, Korean
* Some corrective measures

## PhpCollab 1.7 / 2002-07-13
* Connected column in all members lists
* Reports: Gantt graph (saved reports only)
* Home: my notes block
* Home: my discussions and my notes from the last 30 days (oldest are not visible)
* Projects site: single access (my projects list)
* File management: option to create folder with ftp functions (operational with safe-mode)
* Multilingual: Indonesian
* Project site: notifications for permitted client users (add and remove from team)

## PhpCollab 1.6 / 2002-07-06
* No longer dependent with magic_quotes_gpc (The War Against Magic Quotes => http://www.pinkgoblin.com/quotesarticle.php)
* File management: improvement with version control (Cameron Lee ;-)
* All request data functions converted to class (no longer missing unset bugs !!)
* All edit form: add missing onload "focus in first field"
* Export project/tasks: update fields
* New database support: Sql Server
* Notifications class started
* Project detail: notes block (ex-journal by Alexandre Gravel ;-)
* Multilingual: Ukrainian, Polish
* Search option: all sections or selected section
* User: alpha-numeric only in login (and test if login already exists when update)
* Blocks: expand/collapse
* Tasks: overdue date in bold if completion not equal to 100%
* User preferences: select/deselect notifications
* New notifications: added to a project team, removed from a team project and new post in a discussion
* Tasks: edit multiple come back (except from report results and home)
* Some corrective measures

## PhpCollab 1.5 / 2002-06-15
* Project site detail: upload client logo
* Project detail and show all tasks: Gantt graph
* Cleaned icons in default theme

## PhpCollab 1.4 / 2002-06-02
* Admin password field and login method choice in setup
* Message in admin page if setup.php file is not deleted
* Settings: variable to disable update checker
* Login method: fix to encrypt also new password in edit client user
* New fields date approval and approver for file management
* New icons in "default" theme (Thomas Dubus ;-)
* Format tar.gz for release
* Some corrective measures

## PhpCollab 1.3 / 2002-05-11
* Update checker (message on admin page if there is a new version)
* Improvements and corrections of the files confirm*.php
* Security: replace $theme variable by THEME constant
* Task: new completion field (Daniele Ugoletti ;-)
* Task: new start date field
* Filter to show only the projects where the connected user is member (Daniele Ugoletti ;-)

## PhpCollab 1.2 / 2002-05-04
* Rebuilding of all the pages with POO development (except project site templates)
* File robots.txt to avoid browse by search engine
* Themes/skins feature
* Theme "default" (William Samplonius ;-)
* Multilingual: Chinese simplified
* Rights on the projects/tasks: improved rules
* Improved messages (errors and confirmations)
* Automatic "http://" if missing for url clients
* Metadata pdf document (Yann ? ;-)
* Custom charset in project site template (set in lang_xx.php)

## PhpCollab 1.1 / 2002-04-21
* All icons generated with php class
* All scripts independent of the name of session (session.name in php.ini)
* Installation: setup script (Luca Mercuri ;-)
* Multilingual: German
* Login method: plain, md5 or crypt (Tolga Yalcinkaya ;-)
* Client users notifications (only if project site is published)
* Organizations: new email field
* Projects: new upload max field
* Option to allow php/php3 file upload
* Addition of new rules in the handling of the tasks
* Some corrective measures

## PhpCollab 1.0 / 2002-04-07
* Detecting variables poisoning on login (forcedLogin in settings)
* Unset connected if user log out (in project site)
* Upload from project site: #id on file name to avoid overwrite
* Publish feature on linked content
* Project site: Teton template (Luca Mercuri ;-)
* Multilingual: Dutch
* Forgot password page
* Addition of new rules in the handling of the projects
* Project site templates translated
* Translations supplemented in main PhpCollab
* Some corrective measures

## PhpCollab 0.9 / 2002-03-24
* Select language on project site login
* Export project from search results
* Administration: restore database from sql file
* Index.php in main folders to avoid directory listing (redirect to login)
* Notifications: status/priority/due_date changed
* Project detail: estimated and actual times (total tasks)
* Multilingual: Danish, Norwegian
* Fix bug on linked content (#id on file name to avoid overwrite)
* MySql version, gd and mail status on sysinfo
* Unset connected if user log out

## PhpCollab 0.8 / 2002-03-16
* New topics and posts since the last login in bold
* Custom report: query between dates
* Safe-mode value added in system info
* Language browser detection (if langDefault blank)
* Task: add an optional comment to assignment
* All width and height values filled for status, priority and sort images in html
* Notifications: module developpement started and task assignment notification done
* Rename entete.php to header.php and new include footer.php (time to generate page from server and view source link)
* Multilingual: Portuguese

## PhpCollab 0.7 / 2002-03-08
* Project detail: export csv file (project and tasks details)
* User profile: auto log out option (regulate time in seconds for the automatic disconnection)
* Connected users number
* Multilingual: Spanish
* Logs (for checking session validity and see which users are connected)

## PhpCollab 0.6 / 2002-03-02
* All columns sorting and status bar messages on mouseover done
* Test of connection to the MySql Server and the MySql database
* Tasks: date selector for due date, estimated/actual time and assigned fields operational, overdue date in bold
* Option to turn off GD user name image (replaced by text)
* Demo user not allowed when demo mode is false
* Start W3C validation (HTML 4.01)

## PhpCollab 0.5 / 2002-02-27
* Project Site: remove
* Fix on connect function (renamed)
* File management and project site publish Folder creation fix

## PhpCollab 0.4 / 2002-02-22
* Language selection on login form
* Project Site: create (Cypress template), add and delete permitted client users, upload client logo
* Administration: MySql data dump (phpMyAdmin stuff integrated)
* Administration: Edit owner company informations
* Upload file on linked content: check file size (max file size), extension (php not allowed)
* Multilingual: Italian
* Package stuff: notes

## PhpCollab 0.3 / 2002-02-17
* Clients users: list, add, view, edit, delete, delete multiple
* Project and tasks linked content (File Management): add , edit details, view details, delete, delete multiple
* Discussions: delete topic, delete multiple topics

## PhpCollab 0.2 / 2002-02-13
* User Management: change password
* Search: simple
* Discussions: close topic
* Package stuff: changes, todo, install, copying, readme

## PhpCollab 0.1 / 2002-02-12
* Login: session
* Home: my projects, my tasks, my discussions, my reports lists
* Projects: active and inactive lists, view, add, edit, delete, delete multiple, copy
* Project team members: add, add multiple, delete, delete multiple
* Clients organizations: list, view, add, edit, delete, delete multiple
* Discussions: add topic, view topic, post reply, delete post
* Reports: view, add, delete, delete multiple
* Tasks: list, view, add, edit, edit multiple, delete, delete multiple, copy, assignment history
* User Management: list, view, add, edit, delete, delete multiple, tasks and projects reassignment
* User Profile: view, edit, change password
* Administration: system information
* All lists: sorting
* Multilingual: English, French

## PhpCollab 0 / 2002-02-01
* starting application development
