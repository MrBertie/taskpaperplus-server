<?php
namespace tpp;
global $lang;

/**
 * ENGLISH language
 */


/**
 * These filters can be changes to suit your needs/whims!
 *
 * Each filter consists of: name => array(expression, tooltip, colour, visibility),
 * 
 * name:       
 *             this will be displayed to the user (no spaces allowed, however _ will be replced by space for display)
 * expression: 
 *             any valid search as used in search box (see help file), multiple terms are supported
 *             the expression can use either the language specific commands/intervals as below, or english (more consistent)
 *             you can even reuse other filter to create a new one, just put the = in front, e.g. '=late'
 * tooltip:    
 *             this will pop up when you hover the mouse over the filter, to explain it's purpose
 * colour:     
 *             identifies which CSS class to use (CSS class name suffix, see '.bk-...' in style.css)
 *             currently valid colours are: blue, brown, cyan, gray, green, red, violet, yellow  (all soft pastel shades)
 * visible:    
 *             should this filter be added to Filter sidebar (true),
 *             or just be available from the search box, or used in other filters (false)
 */
$lang['filter_settings']    = array(
                                    'next'  => array('*next | >week /date', 'Next action plus next week', 'yellow', true),
                                    'soon'  => array('*todo >month /date', 'Due in next month', 'green', true),
                                    'wait'  => array('*wait', 'Tasks waiting on someone/something', 'cyan', true),
                                    'maybe' => array('*maybe', 'Tasks to be done sometime, perhaps', 'violet', true),
                                    'todo'  => array('*todo', 'All incomplete tasks', 'blue', true),
                                    'done'  => array('*done', 'Completed tasks only', 'gray', true),
                                    'due'   => array('*todo =date /date', 'Incomplete tasks with a date', 'green', true),
                                    'late'  => array('*todo <today /date', 'Incomplete tasks with expired date', 'red', true),
                                    );

// search engine intervals and commands (English => Other Language)
$lang['interval_names']     = array(
                                    'day'       => 'day',
                                    'week'      => 'week',
                                    'month'     => 'month',
                                    'year'      => 'year',
                                    'yesterday' => 'yesterday',
                                    'today'     => 'today',
                                    'tomorrow'  =>'tomorrow',
                                    'future'    => 'future',
                                    'past'      => 'past',
                                    'date'      => 'date',
                                    );

// names of the various sorting "columns" (English => Other Language)
$lang['sort_names']         = array(
                                    'task' => 'task',
                                    'date' => 'date',
                                    'topic' => 'topic',
                                    'state' => 'state',
                                    );

// different states (English => Other Language)
$lang['state_names']        = array(
                                    'done' => 'done',
                                    'todo' => 'todo',
                                    'next' => 'next',
                                    'wait' => 'wait',
                                    'maybe' => 'maybe',
                                    );

// 0=done, 1=todo, etc.. done should always be first!
// REMAINS IN ENGLISH !!
$lang['state_order']        = array('done', 'todo', 'next', 'wait', 'maybe');

// colours used for various actions (in order of use)
// currently: none, next, wait, maybe (done has no colour)
// REMAINS IN ENGLISH !!
$lang['state_colours']      = array('none', 'yellow', 'cyan', 'violet');


// main headers and titles
$lang['orphaned']           = '[No Topic]';
$lang['no_tags']            = 'No Tags';
$lang['task_header']        = 'Tasks';
$lang['tag_header']         = 'Tags';
$lang['project_header']     = 'Topics';
$lang['filter_header']      = 'Filters';
$lang['search_header']      = 'Search: ';


// new tab sample content
$lang['new_tab_content']    = "New project:\n- new task #tag\n    a simple note";


// main toolbar buttons
$lang['edit_all_tip']       = 'Edit the tab as plain-text';
$lang['archive_done_tip']   = 'Archive all completed tasks at once';
$lang['trash_done_tip']     = 'Trash all completed tasks at once';
$lang['remove_actions_tip'] = 'Remove action highlighting from all tasks at once';
$lang['insert_location_tip']= 'Where to insert new tasks: at top or bottom of list/project?';

// task related tips and buttons
$lang['search_box_tip']     = "Type in words, tags, filters, or dates to search for, then [ENTER]\nOr type in a new task then [CTRL+ENTER]\n(Shortcut: Alt+Shift+C)";
$lang['search_help_tip']    = "Need help searching? Click for a cheatsheet (Ctrl+click for a new page)";
$lang['startpage_tip']      = 'Back to default view';
$lang['save_changes_tip']   = 'Save your changes';
$lang['cancel_changes_tip'] = 'Cancel any changes and return to task view';
$lang['rename_tip']         = 'Rename this tab';
$lang['remove_tip']         = 'Delete this tab';
$lang['new_tab_tip']        = 'Add a new tab';
$lang['change_tab_tip']     = 'Change to this tab. Any unsaved edits will be kept';
$lang['reset_tab_tip']      = 'Reset this tab back to default view';
$lang['archive_tab_tip']    = 'All archived tasks';
$lang['trash_tab_tip']      = 'All deleted tasks';
$lang['clear_box_tip']      = 'Clear the search box';
$lang['tag_click_tip']      = 'Filter by this tag';
$lang['sortable_tip']       = 'Sortable';

// sent with task-buttons
$lang['action_button_tip']  = 'Toggle between the different actions: none » next » wait » maybe';
$lang['archive_button_tip'] = 'Archive this task';
$lang['trash_button_tip']   = 'Delete this task';


// general control labels
$lang['find_lbl']           = 'Find:';
$lang['replace_lbl']        = 'Replace:';
$lang['help_lbl']           = 'Help';
$lang['about_lbl']          = 'About';
$lang['faq_lbl']            = 'FAQ';
$lang['website_lbl']        = 'Website';
$lang['go_lbl']             = 'Go';
$lang['save_lbl']           = "Save\n (Ctrl+Enter)";
$lang['cancel_lbl']         = "Cancel\n (Esc)";
$lang['trash_lbl']          = 'Trash';
$lang['archive_lbl']        = 'Archive';
$lang['placeholder']        = 'Add a task [Ctrl+Enter] or Search the list [Enter]';
$lang['language']           = 'Language';


// used before date intervals in result interface
$lang['next_lbl']           = 'in next';
$lang['prev_lbl']           = 'in previous';
$lang['before_lbl']         = 'before';
$lang['after_lbl']          = 'after';
$lang['no_date_hdr']        = 'No date';


// miscellaneous
$lang['deleted_lbl']        = 'Deleted:';


// login general form labels
$lang['username_lbl']         = 'username';
$lang['email_lbl']            = 'email address';
$lang['password_lbl']         = 'password';
$lang['repeatpassword_lbl']   = 'repeat password';
$lang['login_lbl']            = 'Login';
$lang['register_lbl']         = 'Register';
$lang['forgotpassword_lbl']   = 'Forgot Password';
$lang['logout_lbl']           = 'Logout';
$lang['logged_in_as_lbl']     = 'Login:';

// login allowed pattern decription
$lang['username_pattern']     = 'Allowed: 0-9, a-z, A-Z; Length: 2-32 chars';
$lang['password_pattern']     = 'Allowed: 0-9, a-z, A-Z; Length: 2-32 chars';


// login msgs
$lang['login_msg']               = 'Login or Register below';
$lang['registration_msg']        = 'Successfully registered</br>Now login below';
$lang['login_failed_msg']        = 'Login failed</br>Correct errors and try again';
$lang['registration_failed_msg'] = 'Registration failed</br>Correct errors and try again';


// login errors
$lang['no_such_user_err']       = 'No such username.</br>Have you registered?';
$lang['user_exists_err']        = 'Username already taken';
$lang['invalid_username_err']   = 'Username is invalid</br>(' . $lang['username_pattern'] . ')';
$lang['invalid_password_err']   = 'Password in invalid</br>(' . $lang['password_pattern'] . ')';
$lang['nonmatch_passwords_err'] = 'Second password does not match first';
$lang['invalid_email_err']      = 'Your email address is not valid';
$lang['userfile_missing_err']   = 'File containing the list of users was missing, a blank one has been recreated.';



// ****************
// ** JAVASCRIPT **
// ****************


// colours are based on bk-* colours in style.less
$jslang['add_msg']            = array('Task added', 'blue');
$jslang['edit_msg']           = array('Task edited', 'yellow');
$jslang['trash_msg']          = array('Task deleted', 'red');
$jslang['arch_msg']           = array('Task archived', 'orange');
$jslang['all_trash_msg']      = array('All completed tasks deleted', 'orange');
$jslang['all_arch_msg']       = array('All completed tasks archived', 'orange');

$jslang['rename_msg']         = 'What is the new name for this tab?';
$jslang['remove_msg']         = 'Delete this tab?';
$jslang['create_msg']         = 'What is the name of the new tab?';
$jslang['search_msg']         = '';   // currently unused
$jslang['lang_change_msg']    = 'Language changed! Reloading...';

$jslang['editable_tip']       = 'Make your changes and click [Save] or [Cancel]';
$jslang['save_tip']           = $lang['save_lbl'];
$jslang['cancel_tip']         = $lang['cancel_lbl'];

$jslang['tag_click_tip']      = $lang['tag_click_tip'];
$jslang['edit_in_place_tip']  = 'Double-click to edit this task in place';
$jslang['project_click_tip']  = 'View this topic only';
$jslang['mark_complete_tip']  = 'Toggle the task between done/todo';
$jslang['reveal_tip']         = "Toggle the note";
$jslang['sort_tip']           = '&#10; -OR- Click & drag to change order of item';