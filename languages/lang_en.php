<?php
#Application name: phpCollab
#Status page: 2
#Path by root: ../languages/lang_en.php

$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$dayNameArray = array(
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday"
);

$monthNameArray = array(
    1 => "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
);

$status = array(0 => "Client Completed", 1 => "Completed", 2 => "Not Started", 3 => "Open", 4 => "Suspended");

$profil = array(
    0 => "Administrator",
    1 => "Project Manager",
    2 => "User",
    3 => "Client User",
    4 => "Disabled",
    5 => "Project Manager Administrator"
);

$priority = array(0 => "None", 1 => "Very low", 2 => "Low", 3 => "Medium", 4 => "High", 5 => "Very high");

$statusTopic = array(0 => "Closed", 1 => "Open");
$statusTopicBis = array(0 => "Yes", 1 => "No");

$statusPublish = array(0 => "Yes", 1 => "No");

$statusFile = array(
    0 => "Approved",
    1 => "Approved With Changes",
    2 => "Needs Approval",
    3 => "No Approvals Needed",
    4 => "Not Approved"
);

$phaseStatus = array(0 => "Not started", 1 => "Open", 2 => "Complete", 3 => "Suspended");

$requestStatus = array(0 => "New", 1 => "Open", 2 => "Complete");

$invoiceStatus = array(0 => "Open", 1 => "Sent", 2 => "Paid");

$logLevels = array(
    '100' => 'DEBUG (100)',
    '200' => 'INFO (200) (recommended for DEV)',
    '250' => 'NOTICE (250)',
    '300' => 'WARNING (300)',
    '400' => 'ERROR (400) (recommended for PROD)',
    '500' => 'CRITICAL (500)',
    '550' => 'ALERT (550)',
    '600' => 'EMERGENCY (600)',
);


$strings["please_login"] = "Please log in";
$strings["requirements"] = "System Requirements";
$strings["login"] = "Log In";
$strings["no_items"] = "No items to display";
$strings["logout"] = "Log Out";
$strings["preferences"] = "Preferences";
$strings["my_tasks"] = "My Tasks";
$strings["edit_task"] = "Edit Task";
$strings["copy_task"] = "Copy Task";
$strings["add_task"] = "Add Task";
$strings["delete_tasks"] = "Delete Tasks";
$strings["assignment_history"] = "Assignment History";
$strings["assigned_on"] = "Assigned On";
$strings["assigned_by"] = "Assigned By";
$strings["to"] = "To";
$strings["comment"] = "Comment";
$strings["task_assigned"] = "Task assigned to ";
$strings["task_unassigned"] = "Task assigned to Unassigned (Unassigned)";
$strings["edit_multiple_tasks"] = "Edit Multiple Tasks";
$strings["tasks_selected"] = "tasks selected. Choose new values for these tasks, or select [No Change] to retain current values.";
$strings["assignment_comment"] = "Assignment Comment";
$strings["no_change"] = "[No Change]";
$strings["my_discussions"] = "My Discussions";
$strings["discussions"] = "Discussions";
$strings["delete_discussions"] = "Delete Discussions";
$strings["delete_discussions_note"] = "Note: Discussions cannot be reopened once they are deleted.";
$strings["topic"] = "Topic";
$strings["posts"] = "Posts";
$strings["latest_post"] = "Latest Post";
$strings["my_reports"] = "My Reports";
$strings["reports"] = "Reports";
$strings["create_report"] = "Create Report";
$strings["report_intro"] = "Select your task reporting parameters here and save the query on the results page after running your report.";
$strings["admin_intro"] = "Project settings and configuration.";
$strings["copy_of"] = "Copy of ";
$strings["add"] = "Add";
$strings["delete"] = "Delete";
$strings["remove"] = "Remove";
$strings["copy"] = "Copy";
$strings["view"] = "View";
$strings["edit"] = "Edit";
$strings["update"] = "Update";
$strings["details"] = "Details";
$strings["none"] = "None";
$strings["close"] = "Close";
$strings["new"] = "New";
$strings["select_all"] = "Select All";
$strings["unassigned"] = "Unassigned";
$strings["administrator"] = "Administrator";
$strings["my_projects"] = "My Projects";
$strings["project"] = "Project";
$strings["active"] = "Active";
$strings["inactive"] = "Inactive";
$strings["project_id"] = "Project ID";
$strings["edit_project"] = "Edit Project";
$strings["copy_project"] = "Copy Project";
$strings["add_project"] = "Add Project";
$strings["clients"] = "Clients";
$strings["organization"] = "Client Organization";
$strings["client_projects"] = "Client Projects";
$strings["client_users"] = "Client Users";
$strings["edit_organization"] = "Edit Client Organization";
$strings["add_organization"] = "Add Client Organization";
$strings["organizations"] = "Client Organizations";
$strings["info"] = "Info";
$strings["status"] = "Status";
$strings["owner"] = "Owner";
$strings["home"] = "Home";
$strings["projects"] = "Projects";
$strings["files"] = "Files";
$strings["search"] = "Search";
$strings["admin"] = "Admin";
$strings["user"] = "User";
$strings["project_manager"] = "Project Manager";
$strings["due"] = "Due";
$strings["task"] = "Task";
$strings["tasks"] = "Tasks";
$strings["team"] = "Team";
$strings["add_team"] = "Add Team Members";
$strings["team_members"] = "Team Members";
$strings["full_name"] = "Full name";
$strings["title"] = "Title";
$strings["user_name"] = "User Name";
$strings["work_phone"] = "Work Phone";
$strings["priority"] = "Priority";
$strings["name"] = "Name";
$strings["id"] = "ID";
$strings["description"] = "Description";
$strings["phone"] = "Phone";
$strings["url"] = "URL";
$strings["address"] = "Address";
$strings["comments"] = "Comments";
$strings["created"] = "Created";
$strings["assigned"] = "Assigned";
$strings["modified"] = "Modified";
$strings["assigned_to"] = "Assigned to";
$strings["due_date"] = "Due Date";
$strings["estimated_time"] = "Estimated Time";
$strings["actual_time"] = "Actual Time";
$strings["delete_following"] = "Delete the following?";
$strings["cancel"] = "Cancel";
$strings["and"] = "and";
$strings["administration"] = "Administration";
$strings["user_management"] = "User Management";
$strings["system_information"] = "System Information";
$strings["product_information"] = "Product Information";
$strings["system_properties"] = "System Properties";
$strings["create"] = "Create";
$strings["report_save"] = "Save this report query to your homepage so you can run the query again.";
$strings["report_name"] = "Report Name";
$strings["save"] = "Save";
$strings["matches"] = "Matches";
$strings["match"] = "Match";
$strings["report_results"] = "Report Results";
$strings["success"] = "Success";
$strings["addition_succeeded"] = "Addition succeeded";
$strings["deletion_succeeded"] = "Deletion succeeded";
$strings["report_created"] = "Created report";
$strings["deleted_reports"] = "Deleted reports";
$strings["modification_succeeded"] = "Modification succeeded";
$strings["errors"] = "Errors found!";
$strings["blank_user"] = "The user cannot be found.";
$strings["blank_organization"] = "The client organization cannot be located.";
$strings["blank_project"] = "The project cannot be located.";
$strings["user_profile"] = "User Profile";
$strings["change_password"] = "Change Password";
$strings["change_password_user"] = "Change the user's password.";
$strings["old_password_error"] = "The old password you entered is incorrect. Please re-enter the old password.";
$strings["new_password_error"] = "The two passwords you entered did not match. Please re-enter your new password.";
$strings["notifications"] = "Notifications";
$strings["change_password_intro"] = "Enter your old password then enter and confirm your new password.";
$strings["old_password"] = "Old Password";
$strings["password"] = "Password";
$strings["new_password"] = "New Password";
$strings["confirm_password"] = "Confirm Password";
$strings["email"] = "E-Mail";
$strings["home_phone"] = "Home Phone";
$strings["mobile_phone"] = "Mobile Phone";
$strings["fax"] = "Fax";
$strings["permissions"] = "Permissions";
$strings["administrator_permissions"] = "Administrator Permissions";
$strings["project_manager_permissions"] = "Project Manager Permissions";
$strings["user_permissions"] = "User Permissions";
$strings["account_created"] = "Account Created";
$strings["edit_user"] = "Edit User";
$strings["edit_user_details"] = "Edit the user account details.";
$strings["change_user_password"] = "Change the user's password.";
$strings["select_permissions"] = "Select permissions for this user";
$strings["add_user"] = "Add User";
$strings["enter_user_details"] = "Enter details for the user account you are creating.";
$strings["enter_password"] = "Enter the user's password.";
$strings["success_logout"] = "You have successfully logged out. You can log back in by typing your user name and password below.";
$strings["invalid_login"] = "The user name and/or password you entered is invalid. Please re-enter your login information.";
$strings["profile"] = "Profile";
$strings["user_details"] = "User account details.";
$strings["edit_user_account"] = "Edit your account information.";
$strings["no_permissions"] = "You do not have sufficient permissions to perform that action.";
$strings["discussion"] = "Discussion";
$strings["retired"] = "Retired";
$strings["last_post"] = "Last Post";
$strings["post_reply"] = "Post Reply";
$strings["posted_by"] = "Posted By";
$strings["when"] = "When";
$strings["post_to_discussion"] = "Post to Discussion";
$strings["message"] = "Message";
$strings["delete_reports"] = "Delete Reports";
$strings["delete_projects"] = "Delete Projects";
$strings["delete_organizations"] = "Delete Client Organizations";
$strings["delete_organizations_note"] = "Note: This will delete all client users for these client organizations, and disassociate all open projects from these client organizations.";
$strings["delete_messages"] = "Delete Messages";
$strings["attention"] = "Attention";
$strings["delete_teamownermix"] = "Removal successful, but the project owner cannot be removed from the project team.";
$strings["delete_teamowner"] = "You cannot remove the project owner from the project team.";
$strings["enter_keywords"] = "Enter keywords";
$strings["search_options"] = "Keyword and Search Options";
$strings["search_note"] = "You must enter information in the Search for field.";
$strings["search_results"] = "Search Results";
$strings["users"] = "Users";
$strings["search_for"] = "Search for";
$strings["results_for_keywords"] = "Search results for keywords";
$strings["add_discussion"] = "Add Discussion";
$strings["delete_users"] = "Delete User Accounts";
$strings["reassignment_user"] = "Project and Task Reassignment";
$strings["there"] = "There are";
$strings["owned_by"] = "owned by the users above.";
$strings["reassign_to"] = "Before deleting users, reassign these to";
$strings["no_files"] = "No files linked";
$strings["published"] = "Published";
$strings["project_site"] = "Project Site";
$strings["approval_tracking"] = "Approval Tracking";
$strings["size"] = "Size";
$strings["add_project_site"] = "Add to Project Site";
$strings["remove_project_site"] = "Remove from Project Site";
$strings["more_search"] = "More search options";
$strings["results_with"] = "Find Results With";
$strings["search_topics"] = "Search Topics";
$strings["search_properties"] = "Search Properties";
$strings["date_restrictions"] = "Date Restrictions";
$strings["case_sensitive"] = "Case Sensitive";
$strings["yes"] = "Yes";
$strings["no"] = "No";
$strings["sort_by"] = "Sort by";
$strings["type"] = "Type";
$strings["date"] = "Date";
$strings["all_words"] = "all of the words";
$strings["any_words"] = "any of the words";
$strings["exact_match"] = "exact match";
$strings["all_dates"] = "All dates";
$strings["between_dates"] = "Between dates";
$strings["all_content"] = "All content";
$strings["all_properties"] = "All properties";
$strings["no_results_search"] = "The search returned no results.";
$strings["no_results_report"] = "The report returned no results.";
$strings["schema_date"] = "YYYY/MM/DD";
$strings["hours"] = "hours";
$strings["choice"] = "Choice";
$strings["missing_file"] = "Missing file !";
$strings["project_site_deleted"] = "The project site was successfully deleted.";
$strings["add_user_project_site"] = "The user was successfully granted permission to access the Project Site.";
$strings["remove_user_project_site"] = "User permission was successfully removed.";
$strings["add_project_site_success"] = "The addition to the project site succeeded.";
$strings["remove_project_site_success"] = "The removal from the project site succeeded.";
$strings["add_file_success"] = "Linked 1 content item.";
$strings["delete_file_success"] = "Unlinking succeeded.";
$strings["update_comment_file"] = "The file comment was updated successfully.";
$strings["session_false"] = "Session error";
$strings["logs"] = "Logs";
$strings["logout_time"] = "Auto Log Out";
$strings["noti_foot1"] = "This notification was generated by phpCollab.";
$strings["noti_foot2"] = "To view your phpCollab Home Page, visit:";
$strings["noti_taskassignment1"] = "New task:";
$strings["noti_taskassignment2"] = "A task has been assigned to you:";
$strings["noti_moreinfo"] = "For more information, please visit:";
$strings["noti_prioritytaskchange1"] = "Task priority changed:";
$strings["noti_prioritytaskchange2"] = "The priority of the following task has changed:";
$strings["noti_statustaskchange1"] = "Task status changed:";
$strings["noti_statustaskchange2"] = "The status of the following task has changed:";
$strings["login_username"] = "You must enter a user name.";
$strings["login_password"] = "Please enter a password.";
$strings["login_clientuser"] = "This is a client user account. You cannot access phpCollab with a client user account.";
$strings["user_already_exists"] = "There is already a user with this name. Please choose a variation of the user's name.";
$strings["noti_duedatetaskchange1"] = "Task due date changed:";
$strings["noti_duedatetaskchange2"] = "The due date of the following task has changed:";
$strings["company"] = "Company";
$strings["show_all"] = "Show All";
$strings["information"] = "Information";
$strings["delete_message"] = "Delete this message";
$strings["project_team"] = "Project Team";
$strings["document_list"] = "Document List";
$strings["bulletin_board"] = "Bulletin Board";
$strings["bulletin_board_topic"] = "Bulletin Board Topic";
$strings["create_topic"] = "Create a New Topic";
$strings["topic_form"] = "Topic Form";
$strings["enter_message"] = "Enter your message";
$strings["upload_file"] = "Upload a File";
$strings["upload_form"] = "Upload Form";
$strings["upload"] = "Upload";
$strings["document"] = "Document";
$strings["approval_comments"] = "Approval Comments";
$strings["client_tasks"] = "Client Tasks";
$strings["team_tasks"] = "Team Tasks";
$strings["team_member_details"] = "Project Team Member Details";
$strings["client_task_details"] = "Client Task Details";
$strings["team_task_details"] = "Team Task Details";
$strings["language"] = "Language";
$strings["welcome"] = "Welcome";
$strings["your_projectsite"] = "to Your Project Site";
$strings["contact_projectsite"] = "If you have any questions about the extranet or the information found here, please contact the project lead";
$strings["company_details"] = "Company Details";
$strings["database"] = "Backup and restore database";
$strings["company_info"] = "Edit your company information";
$strings["create_projectsite"] = "Create Project Site";
$strings["projectsite_url"] = "Project Site URL";
$strings["design_template"] = "Design Template";
$strings["preview_design_template"] = "Preview Template Design";
$strings["delete_projectsite"] = "Delete Project Site";
$strings["add_file"] = "Add File";
$strings["linked_content"] = "Linked Content";
$strings["edit_file"] = "Edit file details";
$strings["permitted_client"] = "Permitted Client Users";
$strings["grant_client"] = "Grant Permission to View Project Site";
$strings["add_client_user"] = "Add Client User";
$strings["edit_client_user"] = "Edit Client User";
$strings["client_user"] = "Client User";
$strings["client_change_status"] = "Change your status below when you have completed this task";
$strings["project_status"] = "Project Status";
$strings["view_projectsite"] = "View Project Site";
$strings["enter_login"] = "Enter your login to receive new password";
$strings["send"] = "Send";
$strings["no_login"] = "Login not found in database";
$strings["email_pwd"] = "Password sent";
$strings["no_email"] = "User without email";
$strings["forgot_pwd"] = "Forgot password?";
$strings["project_owner"] = "You can make changes only on your own projects.";
$strings["connected"] = "Connected";
$strings["session"] = "Session";
$strings["last_visit"] = "Last visit";
$strings["compteur"] = "Count";
$strings["ip"] = "Ip";
$strings["task_owner"] = "You are not a team member in this project";
$strings["export"] = "Export";
$strings["reassignment_clientuser"] = "Task Reassignment";
$strings["organization_already_exists"] = "That name is already in use in the system. Please choose another.";
$strings["blank_organization_field"] = "You must enter the client organization name.";
$strings["blank_fields"] = "mandatory fields";
$strings["projectsite_login_fails"] = "We are unable to confirm the user name and password combination.";
$strings["start_date"] = "Start date";
$strings["completion"] = "Completion";
$strings["update_available"] = "An update is available!";
$strings["version_current"] = "You are currently using version";
$strings["version_latest"] = "The latest version is";
$strings["sourceforge_link"] = "See project page on Sourceforge";
$strings["demo_mode"] = "Demo mode. Action not allowed.";
$strings["setup_erase"] = "Erase the file setup.php!!";
$strings["setup_erase_file"] = "Click here to try and remove the setup file.";
$strings["setup_erase_file_ua"] = "We can not remove the file, it's not writable.  Please delete manually.";
$strings["no_file"] = "No file selected";
$strings["exceed_size"] = "Exceed max file size";
$strings["no_php"] = "Php file not allowed";
$strings["approval_date"] = "Approval date";
$strings["approver"] = "Approver";
$strings["error_database"] = "Can't connect to database";
$strings["error_server"] = "Can't connect to server";
$strings["version_control"] = "Version Control";
$strings["vc_status"] = "Status";
$strings["vc_last_in"] = "Date last modified";
$strings["ifa_comments"] = "Approval comments";
$strings["ifa_command"] = "Change approval status";
$strings["vc_version"] = "Version";
$strings["ifc_revisions"] = "Peer Reviews";
$strings["ifc_revision_of"] = "Review of version";
$strings["ifc_add_revision"] = "Add Peer Review";
$strings["ifc_update_file"] = "Update file";
$strings["ifc_last_date"] = "Date last modified";
$strings["ifc_version_history"] = "Version History";
$strings["ifc_delete_file"] = "Delete file and all child versions & reviews";
$strings["ifc_delete_version"] = "Delete Selected Version";
$strings["ifc_delete_review"] = "Delete Selected Review";
$strings["ifc_no_revisions"] = "There are currently no revisions of this document";
$strings["unlink_files"] = "Unlink Files";
$strings["remove_team"] = "Remove Team Members";
$strings["remove_team_info"] = "Remove these users from the project team?";
$strings["remove_team_client"] = "Remove Permission to View Project Site";
$strings["note"] = "Note";
$strings["notes"] = "Notes";
$strings["subject"] = "Subject";
$strings["delete_note"] = "Delete Notes Entries";
$strings["add_note"] = "Add Note Entry";
$strings["edit_note"] = "Edit Note Entry";
$strings["version_increm"] = "Select the version change to apply:";
$strings["url_dev"] = "Development site url";
$strings["url_prod"] = "Final site url";
$strings["note_owner"] = "You can make changes only on your own notes.";
$strings["alpha_only"] = "Alpha-numeric only in login";
$strings["edit_notifications"] = "Edit E-mail Notifications";
$strings["edit_notifications_info"] = "Select events for which you wish to receive E-mail notification.";
$strings["select_deselect"] = "Select/Deselect All";
$strings["noti_addprojectteam1"] = "Added to project team :";
$strings["noti_addprojectteam2"] = "You have been added to the project team for :";
$strings["noti_removeprojectteam1"] = "Removed from project team :";
$strings["noti_removeprojectteam2"] = "You have been removed from the project team for :";
$strings["noti_newpost1"] = "New post :";
$strings["noti_newpost2"] = "A post was added to the following discussion :";
$strings["edit_noti_taskassignment"] = "I am assigned to a new task.";
$strings["edit_noti_statustaskchange"] = "The status of one of my tasks changes.";
$strings["edit_noti_prioritytaskchange"] = "The priority of one of my tasks changes.";
$strings["edit_noti_duedatetaskchange"] = "The due date of one of my tasks changes.";
$strings["edit_noti_addprojectteam"] = "I am added to a project team.";
$strings["edit_noti_removeprojectteam"] = "I am removed from a project team.";
$strings["edit_noti_newpost"] = "A new post is made to a discussion.";
$strings["add_optional"] = "Add an optional";
$strings["assignment_comment_info"] = "Add comments about the assignment of this task";
$strings["my_notes"] = "My Notes";
$strings["edit_settings"] = "Edit settings";
$strings["max_upload"] = "Max file size";
$strings["project_folder_size"] = "Project folder size";
$strings["calendar"] = "Calendar";
$strings["date_start"] = "Start date";
$strings["date_end"] = "End date";
$strings["time_start"] = "Start time";
$strings["time_end"] = "End time";
$strings["calendar_reminder"] = "Reminder";
$strings["shortname"] = "Short name";
$strings["calendar_recurring"] = "Event recurs every week on this day";
$strings["edit_database"] = "Edit database";
$strings["noti_newtopic1"] = "New discussion :";
$strings["noti_newtopic2"] = "A new discussion was added to the following project :";
$strings["edit_noti_newtopic"] = "A new discussion topic was created.";
$strings["today"] = "Today";
$strings["previous"] = "Previous";
$strings["next"] = "Next";
$strings["help"] = "Help";
$strings["complete_date"] = "Complete date";
$strings["scope_creep"] = "Scope creep";
$strings["days"] = "Days";
$strings["logo"] = "Logo";
$strings["remember_password"] = "Remember Password";
$strings["client_add_task_note"] = "Note: The entered task is registered into the data base, appears here however only if it one assigned to a team member!";
$strings["noti_clientaddtask1"] = "Task added by client :";
$strings["noti_clientaddtask2"] = "A new task was added by client from project site to the following project :";
$strings["phase"] = "Phase";
$strings["phases"] = "Phases";
$strings["phase_id"] = "Phase ID";
$strings["current_phase"] = "Active phase(s)";
$strings["total_tasks"] = "Total Tasks";
$strings["uncomplete_tasks"] = "Uncompleted Tasks";
$strings["no_current_phase"] = "No phase is currently active";
$strings["true"] = "True";
$strings["false"] = "False";
$strings["enable_phases"] = "Enable Phases";
$strings["phase_enabled"] = "Phase Enabled";
$strings["order"] = "Order";
$strings["options"] = "Options";
$strings["support"] = "Support";
$strings["support_request"] = "Support Request";
$strings["support_requests"] = "Support Requests";
$strings["support_id"] = "Request ID";
$strings["my_support_request"] = "My Support Requests";
$strings["introduction"] = "Introduction";
$strings["submit"] = "Submit";
$strings["support_management"] = "Support Management";
$strings["date_open"] = "Date Opened";
$strings["date_close"] = "Date Closed";
$strings["add_support_request"] = "Add Support Request";
$strings["add_support_response"] = "Add Support Response";
$strings["respond"] = "Respond";
$strings["delete_support_request"] = "Support request deleted";
$strings["delete_request"] = "Delete support request";
$strings["delete_support_post"] = "Delete support post";
$strings["new_requests"] = "New requests";
$strings["open_requests"] = "Open requests";
$strings["closed_requests"] = "Complete requests";
$strings["manage_new_requests"] = "Manage new requests";
$strings["manage_open_requests"] = "Manage open requests";
$strings["manage_closed_requests"] = "Manage complete requests";
$strings["responses"] = "Responses";
$strings["edit_status"] = "Edit Status";
$strings["noti_support_request_new2"] = "You have submitted a support request regarding: ";
$strings["noti_support_post2"] = "A new response has been added to your support request. Please review the details below.";
$strings["noti_support_status2"] = "Your support request has been updated. Please review the details below.";
$strings["noti_support_team_new2"] = "A new support request has been added to project: ";
//2.0
$strings["delete_subtasks"] = "Delete subtasks";
$strings["add_subtask"] = "Add subtask";
$strings["edit_subtask"] = "Edit subtask";
$strings["subtask"] = "Subtask";
$strings["subtasks"] = "Subtasks";
$strings["show_details"] = "Show details";
$strings["updates_task"] = "Task update history";
$strings["updates_subtask"] = "Subtask update history";
//2.1
$strings["go_projects_site"] = "Go to projects site";
$strings["bookmark"] = "Bookmark";
$strings["bookmarks"] = "Bookmarks";
$strings["bookmark_category"] = "Category";
$strings["bookmark_category_new"] = "New category";
$strings["bookmarks_all"] = "All";
$strings["bookmarks_my"] = "My Bookmarks";
$strings["my"] = "My";
$strings["bookmarks_private"] = "Private";
$strings["shared"] = "Shared";
$strings["private"] = "Private";
$strings["add_bookmark"] = "Add bookmark";
$strings["edit_bookmark"] = "Edit bookmark";
$strings["delete_bookmarks"] = "Delete bookmarks";
$strings["team_subtask_details"] = "Team Subtask Details";
$strings["client_subtask_details"] = "Client Subtask Details";
$strings["client_change_status_subtask"] = "Change your status below when you have completed this subtask";
$strings["disabled_permissions"] = "Disabled account";
$strings["user_timezone"] = "Timezone (GMT)";
//2.2
$strings["project_manager_administrator_permissions"] = "Project Manager Administrator";
$strings["bug"] = "Bug Tracking";
//2.3
$strings["report"] = "Report";
$strings["license"] = "License";
//2.4
$strings["settings_notwritable"] = "Settings.php file is not writable";
//2.5
$strings["invoicing"] = "Invoicing";
$strings["invoice"] = "Invoice";
$strings["invoices"] = "Invoices";
$strings["date_invoice"] = "Invoice date";
$strings["header_note"] = "Header note";
$strings["footer_note"] = "Footer note";
$strings["total_ex_tax"] = "Total ex tax";
$strings["total_inc_tax"] = "Total inc tax";
$strings["tax_rate"] = "Tax rate";
$strings["tax_amount"] = "Tax amount";
$strings["invoice_items"] = "Invoice items";
$strings["amount_ex_tax"] = "Amount ex tax";
$strings["completed"] = "Completed";
$strings["service"] = "Service";
$strings["name_print"] = "Name printed";
$strings["edit_invoice"] = "Edit invoice";
$strings["edit_invoiceitem"] = "Edit invoice item";
$strings["calculation"] = "Calculation";
$strings["items"] = "Items";
$strings["position"] = "Position";
$strings["service_management"] = "Service management";
$strings["hourly_rate"] = "Hourly rate";
$strings["add_service"] = "Add service";
$strings["edit_service"] = "Edit service";
$strings["delete_services"] = "Delete services";
$strings["worked_hours"] = "Worked hours";
$strings["rate_type"] = "Rate type";
$strings["rate_value"] = "Rate value";
$strings["note_invoice_items_notcompleted"] = "Not all items are completed";

$rateType = array(0 => "Rate by custom", 1 => "Rate by project", 2 => "Rate by organization", 3 => "Rate by service");

//HACKS

$strings["newsdesk"] = "Newsdesk";
$strings["newsdesk_list"] = "News list";
$strings["article_newsdesk"] = "News Body";
$strings["update_newsdesk"] = "Update Entries";
$strings["my_newsdesk"] = "My Newsdesk";
$strings["edit_newsdesk"] = "Edit News Article";
$strings["copy_newsdesk"] = "Copy News Article";
$strings["add_newsdesk"] = "Add News Article";
$strings["del_newsdesk"] = "Delete News Article";
$strings["delete_news_note"] = "Note: This will also delete all comments for the select news article";
$strings["author"] = "Author";
$strings["blank_newsdesk_title"] = "Blank title found";
$strings["blank_newsdesk"] = "The news cannot be located.";
$strings["blank_newsdesk_comment"] = "Blank comment found";
$strings["remove_newsdesk"] = "The News Article has been successfully deleted with all its comments";
$strings["add_newsdesk_comment"] = "Add a comment to the News Article";
$strings["edit_newsdesk_comment"] = "Edit the comment of the News Article";
$strings["del_newsdesk_comment"] = "Delete the selected comments";
$strings["remove_newsdesk_comment"] = "<strong>{$strings["success"]}</strong> : The Comment of the News Article has been successfully deleted";
$strings["errorpermission_newsdesk"] = "<strong>{$strings["attention"]}</strong> : You do not have permission to modify or delete this news";
$strings["errorpermission_newsdesk_comment"] = "<strong>{$strings["attention"]}</strong> : You do not have permission to edit or delete this message";
$strings["newsdesk_related"] = "Related Project";
$strings["newsdesk_related_generic"] = "Generic News (not project related)";
$strings["newsdesk_related_links"] = "Related links to the news";
$strings["newsdesk_rss"] = "Enable RSS for this news";
$strings["newsdesk_rss_enabled"] = "RSS Enabled for this news";

$strings["noti_memberactivation1"] = "Account Activated";
$strings["noti_memberactivation2"] = "You have just been added into the phpCollab client management system.  This system has been developed and is continually being upgraded in order to help you, the client, keep tabs on the progress of your project.\n\nTo enter the system, point your browser (preferably Internet Explorer 6.x or Netscape Navigator 7.x) to $root and enter the following:";
$strings["noti_memberactivation3"] = "username:";
$strings["noti_memberactivation4"] = "password:";
$strings["noti_memberactivation5"] = "Once you have typed the information above and pressed \"enter\" you will be allowed to access  your account. \n\nIn tandem with this email, you will receive additional messages regarding activations, task submissions, and other events relating to your account.  These emails have been sent to keep you informed on the progress of your project.";

//BEGIN email project users mod
$strings["email_users"] = "Email Users";
$strings["email_following"] = "Email Following";
$strings["email_sent"] = "Your email was successfully sent.";
//END email project users mod

$strings["clients_connected"] = "(Client on project site)";

//2.5b4
$strings["Total_Hours_Worked"] = "Total Hours Worked";
$strings["Pct_Complete"] = "Pct Complete";

$strings["noti_filepost1"] = "New File upload on the Intranet";
$strings["noti_filepost2"] = "A new file was uploaded for the project :";
$strings["noti_newfile1"] = "New File upload on the Intranet";
$strings["noti_newfile2"] = "A new file was uploaded for the project :";

//2.5rc1
$strings["location"] = "Location";
$strings["calendar_broadcast"] = "Broadcast";

//2.5rc2
$strings["edit_noti_clientaddtask"] = "A task is added by a client.";
$strings["edit_noti_uploadfile"] = "A linked content is added.";

//2.5rc3
$strings["version_check_error"] = "Sorry the <a href='https://www.phpcollab.com'>phpcollab.com</a> update service is offline, please check later or take a look on the <a href='https://www.sourceforge.net/projects/phpcollab' target='_blank'>sourceforge project page</a>";
$strings["my_subtasks"] = "My Subtasks";
$strings["edit_noti_daily_alert"] = "A daily task reminder.";
$strings["edit_noti_weekly_alert"] = "A weekly task reminder.";
$strings["edit_noti_pastdue_alert"] = "A past due task reminder.";
$strings["daily_alert_subject"] = "phpCollab - Daily Task Reminder.";
$strings["weekly_alert_subject"] = "phpCollab - Weekly Task Reminder.";
$strings["pastdue_alert_subject"] = "phpCollab - Past Due Task Reminder.";
$strings["alert_daily_task"] = "The following tasks are due today.";
$strings["alert_daily_subtask"] = "The following subtasks are due today.";
$strings["alert_weekly_task"] = "The following tasks are due this week.";
$strings["alert_weekly_subtask"] = "The following subtasks are due this week.";
$strings["alert_pastdue_task"] = "The following tasks are past due.";
$strings["alert_pastdue_subtask"] = "The following subtasks are past due.";
$strings["link"] = "Link";

//2.6.x
$strings["action_not_allowed"] = "Action not allowed.";
$strings["this_report_generated_by"] = "This report generated by phpCollab";

//2.7.x
$strings["noti_file_approval_added"] = "A file approval has been added.";
$strings["approval_status"] = "Approval Status";
$strings["approval_details"] = "Approval Details";
$strings["file_details"] = "File Details";
$strings["file"] = "File";
$strings["noti_peer_review_added"] = "A peer review has been added.";
$strings["noti_peer_review_details"] = "Peer Review Details";
$strings["error_file_update_zero_size"] = "File is empty";
$strings["noti_file_update_added"] = "An updated file has been posted.";
$strings["noti_file_update_details"] = "Updated File Details";
$strings["delete_calendars"] = "Delete Calendar";
$strings["error_publishing_invoice"] = "Error publishing invoice to site.";
$strings["error_editing_invoice"] = "Error updating invoice, please try again or contact your administrator.";
$strings["view_invoice"] = "View Invoice";
$strings["send_password_phrase"] = "If the user exists in our system, a password reset email will be sent, but may take several minutes to show up in your inbox. Please wait at least %s minutes before attempting another reset.";
$strings["empty_field"] = "Field is empty";
$strings["error_delete_bookmark"] = "Error deleting bookmark, please try again or contact your administrator.";
$strings["reset_password_error"] = "Error resetting password.  Please try again or contact your administrator.";
$strings["error_delete_post"] = "Error deleting post.  Please try again or contact your administrator.";
$strings["delete_post"] = "Post was deleted.";
$strings["error_file_add"] = "Error adding file.";
$strings["error_file_does_not_exist"] = "Error: File does not exist.";
$strings["bookmark_error_blank_name_and_url"] = "Please enter a name and URL for the bookmark";
$strings["bookmark_error_blank_name"] = "Please enter a name for the bookmark";
$strings["bookmark_error_blank_url"] = "Please enter a URL for the bookmark";
$strings["client_error_add"] = "There was an error while adding the client, please try again or contact your administrator.";
$strings["client_error_edit"] = "There was an error while editing the client, please try again or contact your administrator.";
$strings["genericError"] = "There was a problem processing your request.";
$strings["last_page"] = "Last Page Visited";
$strings["view_newsdesk"] = "View Newsdesk Article";
$strings["task_not_found"] = "That task could not be found.";
$strings["email_forgot_pwd_subject"] = "Forgotten Password Reset";
$strings["password_successful_changed"] = "Password has been successfully changed.";
$strings["password_reset_confirmation_subject"] = "Password Reset Confirmation for %s";
$strings["password_confirm_blank"] = "Please re-enter the \"confirm\" password.";
$strings["latest_release_link_text"] = "Visit the project's <a href=\"%s\" target=\"_blank\">release page</a> for the latest version";
$strings["system_info_file_sizes"] = "File Sizes";
$strings["newsdesk_comment_added"] = "<strong>{$strings["success"]}</strong> : Comment added";
$strings["newsdesk_comment_updated"] = "<strong>{$strings["success"]}</strong> : Comment updated";
$strings["newsdesk_invalid_link"] = "<strong>{$strings["attention"]}</strong> : Link is invalid, please check and try again.";
$strings["newsdesk_item_updated"] = "<strong>{$strings["success"]}</strong> : News item has been updated";
$strings["newsdesk_item_blank"] = "<strong>{$strings["attention"]}</strong> : " . $strings["blank_newsdesk"];
$strings["newsdesk_item_remove"] = "<strong>{$strings["success"]}</strong> : " . $strings["remove_newsdesk"];
$strings["newsdesk_item_add"] = "<strong>{$strings["success"]}</strong> : " . $strings["addition_succeeded"];
$strings["newsdesk_item_add_error"] = "<strong>{$strings["attention"]}</strong> : There was a problem adding the item. Please check and try again.";
$strings["newsdesk_item_edit"] = " : " . $strings["edit_newsdesk"] . " (%s)";
$strings["newsdesk_item_view"] = " : " . $strings["view_newsdesk"] . " (%s)";
$strings["error_message"] = "<strong>{$strings["attention"]}</strong> : %s";
$strings["success_message"] = "<strong>{$strings["success"]}</strong> : %s";
$strings["file_upload_invalid"] = "The uploaded file appears to be invalid. Please check and try again.";
$strings["file_image_invalid_type"] = "The uploaded image appears to be an invalid type.";
$strings["file_remove_error"] = "There was a problem removing the file, please try again or contact your administrator.";
$strings["error_too_many_attempts"] = sprintf($strings["error_message"], "You have tried too many times. Please wait and try again.");
$strings["error_email_already_sent"] = "Email has been sent.  Please check your inbox or contact your administrator.";
$strings["invalid_email"] = "Email address appears to be invalid, please check and try again.";
$strings["share_with"] = "Share with";
$strings["bookmark_added"] = sprintf($strings["success_message"], "Bookmark created");
$strings["bookmark_updated"] = sprintf($strings["success_message"], "Bookmark updated");
$strings["bookmark_view_all"] = "View All Bookmarks";
$strings["bookmark_view_my"] = "View My Bookmarks";
$strings["bookmark_view_private"] = "View Private Bookmarks";
$strings["bookmark_error_url_invalid"] = "Please enter a valid URL for the bookmark";
$strings["admin_password_reset_settings"] = "Password Reset Settings";
$strings["admin_mantis_integration"] = "Mantis integration";
$strings["admin_advanced"] = "Advanced";
$strings["admin_extended_footer"] = "Extended footer (dev)";
$strings["admin_number_of_attempts"] = "Number of attempts";
$strings["admin_time_between_attempts"] = "Time between attempts";
$strings["admin_time_token_valid"] = "Time token should be valid";
$strings["time_days"] = "days";
$strings["time_hours"] = "hours";
$strings["time_minutes"] = "minutes";
$strings["time_seconds"] = "seconds";
$strings["admin_install_online"] = "Online";
$strings["admin_install_offline"] = "Offline (firewall/intranet, no update checker)";
$strings["admin_notification_method"] = "Notification method";
$strings["admin_php_mail_function"] = "PHP mail function";
$strings["admin_smtp"] = "SMTP";
$strings["admin_smtp_server"] = "SMTP Server";
$strings["admin_smtp_login"] = "SMTP Login";
$strings["admin_smtp_password"] = "SMTP Password";
$strings["admin_smtp_port"] = "SMTP Port";
$strings["team_task_created_success"] = sprintf($strings["success_message"], "Team task created");
$strings["project_site_topic_success"] = sprintf($strings["success_message"], "Topic added");
$strings["support_request_details"] = "Support Request Details";
$strings["users_selected"] = "Selected User(s):";
$strings["will_not_email"] = $strings["users_selected"] . " will NOT be emailed";
$strings["support_request_new"] = "A new support request has been created.";

/**
 * Error messages
 */
$strings["error_messages"] = [
    'too_many_attempts' => sprintf($strings["error_message"], "You have tried too many times. Please wait and try again."),
    'email_already_sent' => 'Email has been sent.  Please check your inbox or contact your administrator.',
    'blank_email' => sprintf($strings["error_message"], "No email found for the selected user(s)"),
    'tasks' => [
        'blank_task_name' => 'Please enter a task name',
        'invalid_task_name' => 'Please enter a valid task name',
    ]
];
