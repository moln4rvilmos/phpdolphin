<?php
//======================================================================\\
// Author: Molnár Vilmos                                                \\
// Website: https://vilix.hu                                             \\
// Email: moln4rvilmos@gmail.com                                        \\
// Updated: 2023-01-21 [YYYY-MM-DD]                                     \\
// Language: Magyar                                                     \\
//======================================================================\\

// Language Name
$name = 'Magyar';

// Language Author
$author = 'ViliX';

// Language URL
$url = 'https://vilix.hu';

$LNG['lang_dir'] = 'ltr';
$LNG['charset'] = "UTF-8";

$LNG['user_success'] = 'Felhasználói fiók létrejött';
$LNG['user_exists'] = 'Ez már létező felhasználónév';
$LNG['email_exists'] = 'Ez az e-mail címmel már regisztráltak';
$LNG['all_fields'] = 'Minden mezőt ki kell töltened!';
$LNG['user_alnum'] = 'A felhasználónév csak számokat és betüket tartalmazhat';
$LNG['user_too_short'] = 'A felhasználónév 3 és 32 karakter közé essen!';
$LNG['user_limit'] = 'Túl sok azonosító tartozik az IP-címhez';
$LNG['invalid_email'] = 'Érvénytelen e-mail cím';
$LNG['invalid_user_pw'] = 'Téves felhasználónév vagy jelszó';
$LNG['invalid_captcha'] = 'Téves captcha';
$LNG['activate_email'] = 'Az aktiváló linket megkapod a megadott e-mail címre';
$LNG['account_activated'] = 'A fiókod aktiválva lett';
$LNG['log_out'] = 'Kilépés';
$LNG['hello'] = 'Helló';
$LNG['register'] = 'Regisztráció';
$LNG['login'] = 'Belépés';
$LNG['connect'] = 'Kapcsolódás';
$LNG['password'] = 'Jelszó';
$LNG['username'] = 'Felhasználónév';
$LNG['email'] = 'E-mail';
$LNG['captcha'] = 'Captcha';
$LNG['username_or_email'] = 'Felhasználónév vagy e-mail cím';
$LNG['welcome_title'] = 'Üdvözöllek';
$LNG['welcome_desc'] = 'ViliX közösségi oldalán';
$LNG['welcome_about'] = 'Lépj kacsolatba a barátaiddal, családtagjaiddal vagy ismerkedj!';
$LNG['forgot_password'] = 'Elfelejtett jelszó?';
$LNG['remember_me'] = 'Jegyezz meg!';
$LNG['all_rights_reserved'] = 'Minden jog fenntartva';

$LNG['welcome_one'] = 'Kapcsolat';
$LNG['welcome_two'] = 'Megosztás';
$LNG['welcome_three'] = 'Felfedezés';
$LNG['welcome_one_desc'] = 'Vedd fel a kapcsolatot a családdal, a barátaiddal vagy a világgal!';
$LNG['welcome_two_desc'] = 'Oszd meg életed nagy pillanatait azokkal, akiket szeretsz!';
$LNG['welcome_three_desc'] = 'Ismerj meg új embereket, legyenek új kapcsolataid és szerezz új barátokat!';
$LNG['latest_users'] = 'Legutóbbi felhasználók';

// NOTIFICATION BOXES
$LNG['settings_saved'] = 'A beállítások mentve';
$LNG['nothing_saved'] = 'Nincs mentve';
$LNG['password_changed'] = 'A jelszó megváltozott';
$LNG['nothing_changed'] = 'A jelszó nem változott meg';
$LNG['incorrect_date'] = 'A kiválasztott dátum nem érvényes, válassz ki érvényes dátumot!';
$LNG['password_not_changed'] = 'A jelszó nem változott meg.';
$LNG['image_saved'] = 'A kép mentve';
$LNG['error'] = 'Hiba';
$LNG['no_file'] = 'You did not selected any files to be uploaded, or the selected file(s) are empty.';
$LNG['file_exceeded'] = 'The selected file size must not exceed <strong>%s</strong> MB.';
$LNG['file_format'] = 'The selected file format is not supported. Upload <strong>%s</strong> file format';
$LNG['image_removed'] = 'Image Removed';
$LNG['bio_description'] = 'The Bio description should be %s characters or less.';
$LNG['valid_email'] = 'Please enter a valid email.';
$LNG['valid_url'] = 'Please enter a valid URL format.';
$LNG['valid_country'] = 'Please enter a valid country.';
$LNG['password_too_short'] = 'The password must contain at least 6 characters.';
$LNG['password_not_match'] = 'The password did not match.';
$LNG['wrong_current_password'] = 'The current password you\'ve entered is incorrect.';
$LNG['username_not_found'] = 'We couldn\'t find the username.';
$LNG['userkey_not_found'] = 'The username or the reset key are wrong, make sure you\'ve entered the correct credentials.';
$LNG['password_reset'] = 'You have succcessfully reset your passsword, you can now log-in using the new credentials.';
$LNG['email_sent'] = 'Email sent';
$LNG['email_reset'] = 'An email containing password reset instructions lett küldve. Please allow us up to 24 hours to deliver the message, also check your Spam box if you can\'t find in your Inbox.';
$LNG['user_has_been_deleted'] = 'User <strong>%s</strong> has been deleted.';
$LNG['theme_changed'] = 'Theme changed';
$LNG['notif_saved'] = 'Notifications changed';
$LNG['notif_success_saved'] = 'Notifications has been successfully updated.';

// MAIL CONTENT
$LNG['welcome_mail'] = 'Üdvözöl %s';
$LNG['user_created'] = 'Thank you for joining <strong>%s</strong>.<br><br>Your username: <strong>%s</strong><br><br>You can log-in at: <a href="%s" target="_blank">%s</a>';
$LNG['recover_mail'] = 'Jelszó visszaállítás';
$LNG['recover_content'] = 'A password recover was requested, if you didn\'t make this action please ignore this email. <br><br>Your Username: <strong>%s</strong><br>Your Reset Key: <strong>%s</strong><br><br>You can reset your password by accessing the following link: <a href="%s" target="_blank">%s</a>';
$LNG['email_hello'] = 'Hello <strong>%s</strong>,<br><br>';
$LNG['email_unsub'] = '<br><br><span>This message was sent automatically, if you don\'t want to receive these type of emails from <strong>%s</strong> in the future, please <a href="%s">Unsubscribe</a>.</span>';
$LNG['email_copy'] = '<br><br><span>Copyright &copy; '.date('Y').' <a href="%s">%s</a>. All rights reserved.';
$LNG['ttl_comment_email'] = '%s commented on your message';
$LNG['comment_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> has commented on your <strong><a href="%s">message.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_like_email'] = '%s liked your message';
$LNG['like_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> liked your <strong><a href="%s">message.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_like_c_email'] = '%s liked your comment';
$LNG['like_c_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> liked your <strong><a href="%s">comment.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_new_friend_email'] = '%s has sent you a friend request';
$LNG['new_friend_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> wants to be friends on %s.'.$LNG['email_unsub'];
$LNG['ttl_friendship_confirmed_email'] = '%s accepted your friendship request';
$LNG['friendship_confirmed_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> has accepted your friendship on %s.'.$LNG['email_unsub'];
$LNG['ttl_page_invite'] = '%s has invited you to like a page';
$LNG['page_invite'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> has invited you to like <strong><a href="%s">%s</a></strong> page.'.$LNG['email_unsub'];
$LNG['ttl_group_invite'] = '%s has invited you to join a group';
$LNG['group_invite'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> has invited you to join <strong><a href="%s">%s</a> group.</strong>'.$LNG['email_unsub'];
$LNG['ttl_suspended_account_mail'] = 'Your account has been suspended';
$LNG['suspended_account_mail'] = $LNG['email_hello'].'Your account has been suspended. If you think this was an error, please contact us.'.$LNG['email_copy'];
$LNG['ttl_confirm_email'] = 'Activate your account';
$LNG['confirm_email'] = $LNG['email_hello'].'Thank you for joining <strong>%s</strong>. Finish your registration by <a href="%s" target="_blank">clicking here</a>.'.$LNG['email_copy'];
$LNG['ttl_mention_email'] = '%s megemlített téged egy message';
$LNG['ttl_mention_c_email'] = '%s megemlített téged egy comment';
$LNG['mention_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> has megemlített téged egy <strong><a href="%s">message.</a></strong>'.$LNG['email_unsub'];
$LNG['mention_c_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> has megemlített téged egy <strong><a href="%s">comment.</a></strong>'.$LNG['email_unsub'];

// PHP MODULES
$LNG['openssl_error'] = 'You must enable <strong>OpenSSL</strong> extension on the server';
$LNG['curl_error'] = 'Is recommended that <strong>cURL</strong> extension is enabled on the server';

// ADMIN PANEL
$LNG['general_link'] = 'Általános';
$LNG['security_link'] = 'Biztonság';
$LNG['manage_users'] = 'Tagok kezelése';
$LNG['registration'] = 'Regisztráció';
$LNG['limits'] = 'Limitek';
$LNG['emails'] = 'E-mailek';

$LNG['theme_install'] = 'To install a new theme, upload it on the <strong>themes</strong> folder';
$LNG['plugin_install'] = 'To install a new plugin, upload it on the <strong>plugins</strong> folder';
$LNG['language_install'] = 'To install a new language, upload it on the <strong>languages</strong> folder';
$LNG['author_title'] = 'Visit the author homepage';
$LNG['version'] = 'Version';
$LNG['active'] = 'Aktív';
$LNG['activate'] = 'Aktiválás';
$LNG['deactivate'] = 'Deaktiválás';
$LNG['by'] = 'Írta';
$LNG['settings'] = 'Beállítások';

// FEED
$LNG['welcome_feed_ttl'] = 'Üdözöllek a hírfolyamodban!';
$LNG['welcome_feed'] = 'Hogy az ismerőseid hozzászólásait is lásd, először jelőld őket ismerősnek!';
$LNG['leave_comment'] = 'Hozzászólás írása...';
$LNG['post'] = 'Küldés';
$LNG['view_more_messages'] = 'Tovább';
$LNG['view_more_comments'] = 'A többi hozzászólás';
$LNG['delete_q_comment'] = 'Biztosan törlöd ezt a hozzászólást?';
$LNG['delete_q_message'] = 'Biztosan törlöd ezt az üzenetet?';
$LNG['delete_q_chat'] = 'Biztosan törlöd ezt a csevegést?';
$LNG['report_this_comment'] = 'Hozzászólás jelentése';
$LNG['view_more'] = 'Tovább';
$LNG['food'] = 'Ezt eszem: <strong>%s</strong>';
$LNG['map'] = 'Itt vagyok: <strong>%s</strong>';
$LNG['played'] = 'Ezzel játszom: <strong>%s</strong>';
$LNG['watched'] = 'Ezt nézem: <strong>%s</strong>';
$LNG['listened'] = 'I listened: <strong>%s</strong>';
$LNG['shared_title'] = 'megosztotta <a href="%s" rel="loadpage"><strong>%s</strong></a>\'s <a href="%s" rel="loadpage"><strong>üzenet</strong></a>ét.';
$LNG['group_title'] = 'írt a <a href="%s" rel="loadpage"><strong>%s</strong></a> csoportba.';
$LNG['form_title'] = 'Állapotod frissült';
$LNG['comment_wrong'] = 'Valami hiba történt. Frissítsd az oldalt és próbáld meg újra!.';
$LNG['comment_too_long'] = 'Sorry, the maximum characters allowed per comment is <strong>%s</strong>.';
$LNG['comment_error'] = 'Sorry, we couldn\'t post the comment, please refresh the page and try again.';
$LNG['message_private'] = 'Sorry, this message is private, only the author of the message can see it.';
$LNG['message_private_ttl'] = 'Privát üzenet';
$LNG['message_semi_private'] = 'Sorry, this message is private, only the friends and the author of this message can see it.';
$LNG['message_semi_private_ttl'] = 'Privát üzenet';
$LNG['login_to_lcs'] = 'Kedvelés, megosztás vagy hozzászólás belépés után';
$LNG['message'] = 'Üzenet';
$LNG['comment'] = 'Hozzászólás';
$LNG['share'] = 'Megosztás';
$LNG['camera'] = 'Kamera';
$LNG['capture'] = 'Készít';
$LNG['send'] = 'Küldés';
$LNG['shared_success'] = 'The post has been successfully shared on your <a href="%s" rel="loadpage"><strong>timeline</strong></a>.';
$LNG['no_shared'] = 'Sorry but this message can\'t be shared.';
$LNG['share_desc'] = 'Are you sure do you want to share this message on your timeline?';
$LNG['cancel'] = 'Mégsem';
$LNG['close'] = 'Bezár';
$LNG['download'] = 'Letöltés';

// REPORT
$LNG['1_not_exists'] = 'The reported message does not exist.';
$LNG['0_not_exists'] = 'The reported comment does not exist.';
$LNG['1_already_reported'] = 'This message has already been reported and it will be reviewed in the shortest time, thank you.';
$LNG['0_already_reported'] = 'This comment has already been reported and it will be reviewed in the shortest time, thank you.';
$LNG['1_is_safe'] = 'This message is marked as <strong>safe</strong> by an administrator, thank you for your feedback.';
$LNG['0_is_safe'] = 'This comment is marked as <strong>safe</strong> by an administrator, thank you for your feedback.';
$LNG['1_report_added'] = 'The message has been reported, thank you for your feedback.';
$LNG['0_report_added'] = 'The comment has been reported, thank you for your feedback.';
$LNG['1_report_error'] = 'Sorry but something went wrong while reporting this message, please refresh the page and try again.';
$LNG['0_report_error'] = 'Sorry but something went wrong while reporting this comment, please refresh the page and try again.';
$LNG['1_is_deleted'] = 'The message has been removed, thank you for your feedback.';
$LNG['0_is_deleted'] = 'The comment has been removed, thank you for your feedback.';
$LNG['rep_comment'] = 'Comment';

// SIDEBAR
$LNG['groups'] = 'Groups';
$LNG['events'] = 'Events';
$LNG['archive'] = 'Archives';
$LNG['recent'] = 'Recent';
$LNG['all_events'] = 'All events';
$LNG['sidebar_map'] = 'Places';
$LNG['sidebar_food'] = 'Meals';
$LNG['sidebar_game'] = 'Games';
$LNG['sidebar_picture'] = 'Pictures';
$LNG['sidebar_video'] = 'Videos';
$LNG['sidebar_music'] = 'Music';
$LNG['sidebar_shared'] = 'Shared';
$LNG['sidebar_pages'] = 'Pages';
$LNG['sidebar_groups'] = 'Groups';
$LNG['sidebar_pokes'] = 'Pokes';
$LNG['sidebar_mentions'] = 'Mentions';
$LNG['all_time'] = 'All time';
$LNG['friends'] = 'Friends';
$LNG['mutual'] = 'Mutual';
$LNG['welcome'] = 'Welcome';
$LNG['filter_age'] = 'Age';
$LNG['all_ages'] = 'All ages';
$LNG['filter_gender'] = 'Gender';
$LNG['sidebar_male'] = 'Male';
$LNG['sidebar_female'] = 'Female';
$LNG['all_genders'] = 'All genders';
$LNG['online_friends'] = 'Online Friends';
$LNG['sidebar_likes'] = 'Likes';
$LNG['sidebar_comments'] = 'Comments';
$LNG['sidebar_friendships'] = 'Friendships';
$LNG['sidebar_chats'] = 'Chats';
$LNG['sidebar_birthdays'] = 'Birthdays';
$LNG['sidebar_suggestions'] = 'Friends Suggestions';
$LNG['sidebar_trending'] = 'Trending topics';
$LNG['sidebar_friends_activity'] = 'Friends Activity';
$LNG['friends_birthdays'] = 'Birthdays';
$LNG['sidebar_people'] = 'People';
$LNG['sidebar_tag'] = 'Hashtags';

// MESSAGES / CHAT
$LNG['lonely_here'] = 'It\'s lonely here, how about making some friends?';
$LNG['chat_too_long'] = 'Sorry, but the maximum characters allowed per chat message is <strong>%s</strong>.';
$LNG['blocked_by'] = 'The message could not be sent. <strong>%s</strong> blocked you.';
$LNG['blocked_user'] = 'The message could not be sent. You\'ve blocked <strong>%s</strong>.';
$LNG['chat_self'] = 'Sorry but we cannot deliver chat messages to yourself.';
$LNG['chat_no_user'] = 'You must select a user to chat with.';
$LNG['view_more_conversations'] = 'View more conversations';
$LNG['block'] = 'Block';
$LNG['unblock'] = 'Unblock';
$LNG['poke'] = 'Poke';
$LNG['poked'] = 'Poked';
$LNG['conversation'] = 'Conversation';
$LNG['start_conversation'] = 'You can start a conversation by chosing a person from your friends list.';
$LNG['send_message'] = 'Send Message';

// MESSAGE FORM
$LNG['label_food'] = 'Add what you ate';
$LNG['label_game'] = 'Add a played game';
$LNG['label_map'] = 'Add a place';
$LNG['label_video'] = 'Add a watched movie';
$LNG['label_music'] = 'Add a listened song';
$LNG['label_image'] = 'Upload images';
$LNG['message_form'] = 'What\'s on your mind?';
$LNG['file_too_big'] = 'The selected file size (%s) is too big, the maxium file size allowed is <strong>%s</strong>.';
$LNG['format_not_exist'] = 'The selected file (%s) format is invalid, please upload only <strong>%s</strong> image format.';
$LNG['privacy_no_exist'] = 'The selected privacy does not exist, please refresh the page and try again.';
$LNG['event_not_exist'] = 'The selected event does not exist, please refresh the page and try again.';
$LNG['change_privacy'] = 'Who should see the message';

$LNG['message_too_long'] = 'Sorry, but the maximum characters allowed per message is <strong>%s</strong>.';
$LNG['too_many_images'] = 'The maximum number of images allowed to be uploaded per message is <strong>%s</strong>, you tried to upload <strong>%s</strong> images.';

// USER PANEL
$LNG['user_menu_general'] = 'General';
$LNG['user_menu_security'] = 'Password';
$LNG['user_menu_avatar'] = 'Profile Images';
$LNG['user_menu_notifications'] = 'Notifications';
$LNG['user_menu_privacy'] = 'Privacy';
$LNG['user_menu_delete'] = $LNG['user_ttl_delete'] = 'Delete Account';
$LNG['user_menu_blocked'] = $LNG['user_ttl_blocked'] = 'Blocked Users';
$LNG['other'] = 'Other';

$LNG['user_ttl_general'] = 'General Settings';
$LNG['user_ttl_security'] = 'Password Settings';
$LNG['user_ttl_avatar'] = 'Profile Images Settings';
$LNG['user_ttl_notifications'] = 'Notifications Settings';
$LNG['user_ttl_privacy'] = 'Privacy Settings';

$LNG['blocked_desc'] = 'Blocked persons can no longer see things you post on your timeline, message or add you as a friend.';
$LNG['delete_acc_desc'] = 'Your account will be permanently deleted along with all the related content of it.';

$LNG['ttl_first_name'] = $LNG['first_name'] = 'First Name';
$LNG['sub_first_name'] = 'Enter your first name';

$LNG['ttl_last_name'] = $LNG['last_name'] = 'Last Name';
$LNG['sub_last_name'] = 'Enter your last name';

$LNG['ttl_email'] = 'Email';
$LNG['sub_email'] = 'Email will not be displayed';

$LNG['address'] = 'Address';
$LNG['sub_address'] = 'The address you live at';

$LNG['ttl_location'] = 'City';
$LNG['sub_location'] = 'The city you live in';

$LNG['ttl_website'] = 'Website';
$LNG['sub_website'] = 'Your website, blog or personal page';

$LNG['ttl_gender'] = 'Gender';
$LNG['sub_gender'] = 'Select your gender';

$LNG['interests'] = 'Interests';
$LNG['sub_interested_in'] = 'Persons you\'re interested in';

$LNG['ttl_country'] = 'Country';
$LNG['sub_country'] = 'The country you live in';

$LNG['ttl_work'] = 'Workplace';
$LNG['sub_work'] = 'Enter the company name where you\'re working';

$LNG['ttl_school'] = 'School';
$LNG['sub_school'] = 'Enter the school name you attended';

$LNG['ttl_profile'] = 'Profil';
$LNG['sub_profile'] = 'Profile visibility';

$LNG['ttl_messages'] = 'Message';
$LNG['sub_messages'] = 'The default way of posting messages';

$LNG['ttl_offline'] = 'Chat Status';
$LNG['sub_offline'] = 'The visibility status for the Chat';

$LNG['ttl_facebook'] = 'Facebook';
$LNG['sub_facebook'] = 'Your facebook profile ID.';

$LNG['ttl_twitter'] = 'Twitter';
$LNG['sub_twitter'] = 'Your twitter profile ID.';

$LNG['ttl_bio'] = 'Bio';
$LNG['sub_bio'] = 'Bemutatkozás (legfeljebb 160 karakter)';

$LNG['ttl_birthdate'] = 'Születésnap';
$LNG['sub_birthdate'] = 'Select the date you were born';

$LNG['ttl_upload_avatar'] = 'Upload the selected profile image';
$LNG['ttl_delete_avatar'] = 'Delete your current profile image';

$LNG['privacy'] = 'Adatvédelem';
$LNG['public'] = 'Nyilvános';
$LNG['private'] = 'Személyes';
$LNG['report'] = 'Jelentés';
$LNG['delete_message'] = 'Üzenet törlés';
$LNG['remove_user'] = 'Tag eltávolítása';

$LNG['opt_offline_off'] = 'Online (ha elérhető)';
$LNG['opt_offline_on'] = 'Mindig Offline';

$LNG['no_gender'] = 'Nem nélkül';
$LNG['male'] = 'Férfi';
$LNG['female'] = 'Nő';
$LNG['men'] = 'Férfiak';
$LNG['women'] = 'Nők';

$LNG['contact_information'] = 'Contact Information';
$LNG['basic_information'] = 'Basic Information';
$LNG['other_accounts'] = 'Other Accounts';
$LNG['work_and_education'] = 'Work and Education';

$LNG['ttl_upload'] = 'Upload';
$LNG['ttl_new_password'] = 'New Password';
$LNG['sub_new_password'] = 'Enter a new password (at least 6 characters)';
$LNG['ttl_repeat_password'] = 'Repeat Password';
$LNG['sub_repeat_password'] = 'Repeat your new password';
$LNG['ttl_current_password'] = 'Current Password';
$LNG['sub_current_password'] = 'Enter your current password';
$LNG['save_changes'] = 'Save Changes';
$LNG['profile_images_desc'] = 'Click on the profile picture or cover to change them.';
$LNG['confirm'] = 'Confirm';
$LNG['approve'] = 'Approve';
$LNG['requests'] = 'Requests';
$LNG['blocked'] = 'Blocked';
$LNG['remove'] = 'Remove';
$LNG['decline'] = 'Decline';
$LNG['confirmed'] = 'Confirmed';
$LNG['declined'] = 'Declined';
$LNG['make_admin'] = 'Make Admin';
$LNG['remove_admin'] = 'Remove Admin';
$LNG['default'] = 'Default';
$LNG['make_default'] = 'Make Default';

$LNG['ttl_notificationl'] = 'Likes Notifications';
$LNG['sub_notificationl'] = 'Display alert and notifications for <strong>Likes</strong>';

$LNG['ttl_notificationc'] = 'Comments Notifications';
$LNG['sub_notificationc'] = 'Display alert and notifications for <strong>Comments</strong>';

$LNG['ttl_notifications'] = 'Messages Notifications';
$LNG['sub_notifications'] = 'Display alert and notifications for <strong>Shared Messages</strong>';

$LNG['ttl_notificationd'] = 'Chat Notifications';
$LNG['sub_notificationd'] = 'Display alert and notifications for <strong>Chats</strong>';

$LNG['ttl_notificationf'] = 'Friends Notifications';
$LNG['sub_notificationf'] = 'Display alert and notifications for <strong>Confirmed Friendships</strong>';

$LNG['ttl_notificationm'] = 'Mention Notifications';
$LNG['sub_notificationm'] = 'Display alert and notifications for <strong>Mentions</strong>';

$LNG['ttl_notificationx'] = 'Pages Notifications';
$LNG['sub_notificationx'] = 'Display alert and notifications for <strong>Like a Page</strong> invitations';

$LNG['ttl_notificationg'] = 'Groups Notifications';
$LNG['sub_notificationg'] = 'Display alert and notifications for <strong>Groups Invitations</strong>';

$LNG['ttl_notificationp'] = 'Pokes Notifications';
$LNG['sub_notificationp'] = 'Display alert and notifications for <strong>Pokes</strong>';

$LNG['ttl_sound_nn'] = 'Notifications Sound';
$LNG['sub_sound_nn'] = 'Play a sound when a new notification is received';

$LNG['ttl_sound_nc'] = 'Chat Sound';
$LNG['sub_sound_nc'] = 'Play a sound when a new chat message is received';

$LNG['ttl_email_comment'] = 'Emails on Comments';
$LNG['sub_email_comment'] = 'Receive emails when someone comments on your messages';

$LNG['ttl_email_like'] = 'Emails on Likes';
$LNG['sub_email_like'] = 'Receive emails when someone likes your messages';

$LNG['ttl_email_new_friend'] = 'Emails on Friendships';
$LNG['sub_email_new_friend'] = 'Receive emails when someone sends or confirms a friend request';

$LNG['ttl_email_mention'] = 'Emails on Mentions';
$LNG['sub_email_mention'] = 'Receive emails when someone mentions you';

$LNG['ttl_email_page'] = 'Email Page Invite';
$LNG['sub_email_page'] = 'Receive emails when someone invites you to like a page';

$LNG['ttl_email_group'] = 'Email Group Invite';
$LNG['sub_email_group'] = 'Receive emails when someone sends you a group invitation';

$LNG['user_ttl_sidebar'] = 'Beállítások';

// ADMIN PANEL
$LNG['admin_login'] = 'Admin Login';
$LNG['admin_user_name'] = 'Username';
$LNG['desc_admin_user'] = 'Type in your Admin Username';
$LNG['admin_pass'] = 'Password';
$LNG['desc_admin_pass'] = 'Type in your Admin Password';
$LNG['admin_ttl_sidebar'] = 'Menu';
$LNG['admin_menu_logout'] = 'Log Out';
$LNG['admin_ttl_dashboard']			= $LNG['admin_menu_dashboard']		= 'Dashboard';
$LNG['admin_ttl_site_settings'] 	= $LNG['admin_menu_site_settings'] 	= 'Site Settings';
$LNG['admin_ttl_themes'] 			= $LNG['admin_menu_themes'] 		= 'Themes';
$LNG['admin_ttl_plugins'] 			= $LNG['admin_menu_plugins'] 		= 'Plugins';
$LNG['admin_ttl_languages']			= $LNG['admin_menu_languages'] 		= 'Languages';
$LNG['admin_ttl_stats'] 			= $LNG['admin_menu_stats'] 			= 'Statistics';
$LNG['admin_ttl_security'] 			= $LNG['admin_menu_security'] 		= 'Password';
$LNG['admin_ttl_users'] 			= $LNG['admin_menu_users'] 			= 'Manage Users';
$LNG['admin_ttl_manage_pages']		= $LNG['admin_menu_manage_pages']	= 'Manage Pages';
$LNG['admin_ttl_manage_groups']		= $LNG['admin_menu_manage_groups'] 	= 'Manage Groups';
$LNG['admin_ttl_manage_reports']	= $LNG['admin_menu_manage_reports'] = 'Manage Reports';
$LNG['admin_ttl_manage_ads']		= $LNG['admin_menu_manage_ads'] 	= 'Manage Ads';
$LNG['admin_ttl_info_pages']		= $LNG['admin_menu_info_pages'] 	= 'Info Pages';

$LNG['list_users'] = 'All Users';
$LNG['list_moderators'] = 'Moderators';
$LNG['list_verified'] = 'Verified';
$LNG['list_suspended'] = 'Suspended';

$LNG['title'] = 'Title';
$LNG['admin_sub_title'] = 'The site\'s title';

$LNG['logo'] = 'Logo';
$LNG['admin_sub_logo'] = 'The site\'s logo (PNG format)';

$LNG['admin_ttl_captcha'] = 'Captcha';
$LNG['admin_sub_captcha'] = 'Enable captcha at registration';

$LNG['admin_ttl_timestamp'] = 'Timestamp';
$LNG['admin_sub_timestamp'] = 'The Messages, Comments and Chat timestamp type';

$LNG['admin_ttl_timezone'] = 'Timezone';
$LNG['admin_sub_timezone'] = 'Timezone supported by PHP';

$LNG['admin_sub_pages'] = 'Enable the Pages functionality';
$LNG['admin_sub_groups'] = 'Enable the Groups functionality';

$LNG['admin_ttl_msg_perpage'] = 'Messages';
$LNG['admin_sub_msg_perpage'] = 'The number of messages per page';

$LNG['admin_ttl_com_perpage'] = 'Comments';
$LNG['admin_sub_com_perpage'] = 'The number of comments per message';

$LNG['admin_ttl_chat_perpage'] = 'Chat';
$LNG['admin_sub_chat_perpage'] = 'The number of chat conversations per page';

$LNG['admin_ttl_smiles'] = 'Emoticons';
$LNG['admin_sub_smiles'] = 'Allow and transform shortcodes on Messages, Comments and Chat into emoticons';

$LNG['admin_ttl_permalinks'] = 'Permalinks';
$LNG['admin_sub_permalinks'] = 'Enable permalinks URL structure (example.com/profile/username)';

$LNG['admin_ttl_email_activation'] = 'Email Activation';
$LNG['admin_sub_email_activation'] = 'Require the account to be activated via email';

$LNG['admin_ttl_nperpage'] = 'Notifications';
$LNG['admin_sub_nperpage'] = 'The number of notifications to be shown (Notifications Page)';

$LNG['admin_ttl_msg_limit'] = 'Message Characters';
$LNG['admin_sub_msg_limit'] = 'The number of characters allowed per message';

$LNG['admin_ttl_chat_limit'] = 'Chat Characters';
$LNG['admin_sub_chat_limit'] = 'The number of characters allowed per conversation';

$LNG['admin_ttl_email_reg'] = 'Email on Registration';
$LNG['admin_sub_email_reg'] = 'Email users at registration';

$LNG['admin_ttl_notificationsm'] = 'Messages Notifications';
$LNG['admin_sub_notificationsm'] = 'The update interval to check for new messages (in seconds)';

$LNG['admin_ttl_notificationsn'] = 'Events Notifications';
$LNG['admin_sub_notificationsn'] = 'The update interval to check for new events notifications (in seconds)';

$LNG['admin_ttl_chatrefresh'] = 'Chat Refresh';
$LNG['admin_sub_chatrefresh'] = 'The time how often the chat window updates with new messages (in seconds)';

$LNG['admin_ttl_timeonline'] = 'Online Users';
$LNG['admin_sub_timeonline'] = 'The amount of time to be considered online since the last user\'s activity (in seconds)';

$LNG['admin_ttl_image_profile'] = 'Image Size (Profile)';
$LNG['admin_sub_image_profile'] = 'Image size allowed to upload (profile image, profile cover, group cover) (in MB)';

$LNG['admin_ttl_image_format'] = 'Image Format (Profile)';
$LNG['admin_sub_image_format'] = 'Image format allowed for upload (profile image, profile cover, group cover), use only gif,png,jpg other formats are not supported';

$LNG['admin_ttl_message_image'] = 'Image Size (Messages)';
$LNG['admin_sub_message_image'] = 'Image size allowed to upload (Messages) (in MB)';

$LNG['admin_ttl_message_format'] = 'Image Format (Messages)';
$LNG['admin_sub_message_format'] = 'Image format allowed for upload (Messages), use only gif,png,jpg other formats are not supported';

$LNG['admin_sub_friends_limit'] = 'The maximum amount of friendships allowed per user';
$LNG['admin_sub_pages_limit'] = 'The maximum amount of created pages per user';
$LNG['admin_sub_groups_limit'] = 'The maximum amount of created and joined groups per user';

$LNG['admin_ttl_censor'] = 'Censor';
$LNG['admin_sub_censor'] = 'Censored words (example: word1, word2, word3)';

$LNG['email_providers'] = 'Email Providers';
$LNG['sub_email_providers'] = 'Allow the registration to certain email providers (example: domain.com, domain.org)';

$LNG['admin_ttl_ad1'] = 'Hirdetés 1';
$LNG['admin_sub_ad1'] = 'Hirdetési terület 1 (Bottom [Welcome Page])';

$LNG['admin_ttl_ad2'] = 'Hirdetés 2';
$LNG['admin_sub_ad2'] = 'Hirdetési terület 2 (Sidebar [News Feed Page])';

$LNG['admin_ttl_ad3'] = 'Hirdetés 3';
$LNG['admin_sub_ad3'] = 'Hirdetési terület 3 (Sidebar [Groups Page])';

$LNG['admin_ttl_ad4'] = 'Hirdetés 4';
$LNG['admin_sub_ad4'] = 'Hirdetési terület 4 (Sidebar [Profile Page])';

$LNG['admin_ttl_ad5'] = 'Hirdetés 5';
$LNG['admin_sub_ad5'] = 'Hirdetési terület 5 (Sidebar [Messages Page])';

$LNG['admin_ttl_ad6'] = 'Hirdetés 6';
$LNG['admin_sub_ad6'] = 'Hirdetési terület 6 (Sidebar [Search Page])';

$LNG['admin_ttl_fbapp'] = 'Facebook Login';
$LNG['admin_sub_fbapp'] = 'Allow users to log-in using Facebook';

$LNG['admin_ttl_fbappid'] = 'App ID';
$LNG['admin_sub_fbappid'] = 'Facebook App ID';

$LNG['admin_ttl_fbappsecret'] = 'App Secret'; 
$LNG['admin_sub_fbappsecret'] = 'Facebook App Secret';

$LNG['smtp_emails'] = 'SMTP Mails';
$LNG['smtp_sub_emails'] = 'Enable sending emails trough SMTP';

$LNG['smtp_host'] = 'SMTP Host';
$LNG['smtp_sub_host'] = 'The SMTP Host';

$LNG['smtp_port'] = 'SMTP Port';
$LNG['smtp_sub_port'] = 'The SMTP Port';

$LNG['smtp_secure'] = 'SMTP Secure';
$LNG['smtp_sub_secure'] = 'Enable SMTP Secure';

$LNG['smtp_auth'] = 'SMTP Authentication';
$LNG['smtp_sub_auth'] = 'Enable SMTP Authentication';

$LNG['smtp_username'] = 'SMTP Username';
$LNG['smtp_sub_username'] = 'The SMTP Username';

$LNG['smtp_password'] = 'SMTP Password';
$LNG['smtp_sub_password'] = 'The SMTP Password';

$LNG['admin_ttl_edit'] = 'Edit';
$LNG['admin_ttl_edit_profile'] = 'Edit Profile';

$LNG['admin_ttl_delete'] = 'Delete';
$LNG['admin_ttl_delete_profile'] = 'Delete Profile';

$LNG['admin_ttl_mail'] = 'Email';
$LNG['admin_ttl_username'] = 'Username';
$LNG['admin_ttl_id'] = 'ID'; // As in user ID

$LNG['admin_ttl_email_comment'] = 'Email on Comment';
$LNG['admin_sub_email_comment'] = 'Enable sending emails when someone comments to a message (overrides user\'s settings)';

$LNG['admin_ttl_email_like'] = 'Email on Like';
$LNG['admin_sub_email_like'] = 'Enable sending emails when someone likes a message (overrides user\'s settings)';

$LNG['admin_ttl_email_mention'] = 'Email on Mention';
$LNG['admin_sub_email_mention'] = 'Enable sending emails when someone mentions someone else (overrides user\'s settings)';

$LNG['admin_ttl_email_new_friend'] = 'Email on Friendships';
$LNG['admin_sub_email_new_friend'] = 'Enable sending emails when someone sends or confirms a friend request (overrides user\'s settings)';

$LNG['admin_ttl_email_page'] = 'Email Page Invite';
$LNG['admin_sub_email_page'] = 'Enable sending emails when someone sends a page like invitation (overrides user\'s settings)';

$LNG['admin_ttl_email_group'] = 'Email Group Invite';
$LNG['admin_sub_email_group'] = 'Enable sending emails when someone sends a group invitation (overrides user\'s settings)';

$LNG['admin_ttl_ilimit'] = 'Images (Messages)';
$LNG['admin_sub_ilimit'] = 'The maximum images allowed to be uploaded per message';

$LNG['admin_ttl_sperpage'] = 'Users';
$LNG['admin_sub_sperpage'] = 'Number of users to be displayed per page (Profile Friends, Group Users)';

$LNG['admin_ttl_aperip'] = 'Accounts';
$LNG['admin_sub_aperip'] = 'Number of accounts allowed to register per IP (0 for unlimited)';

$LNG['admin_ttl_ronline'] = 'Online Friends';
$LNG['admin_sub_ronline'] = 'Number of online friends to be displayed on the Feed/Subscriptions page (sidebar).';

$LNG['admin_ttl_nperwidget'] = 'Dropdown Notifications';
$LNG['admin_sub_nperwidget'] = 'Number of notifications to be shown per category (likes, comments, messages, shares, friend requests)';

$LNG['admin_ttl_uperpage'] = 'Admin';
$LNG['admin_sub_uperpage'] = 'Number of users per page (Manage Sections)';

$LNG['admin_sub_verified'] = 'Verified user profile by default? (Not recommended)';
$LNG['admin_sub_tracking'] = 'The analytics tracking code';

$LNG['join_date'] = 'Csatlakozás dátuma';
$LNG['user_group'] = 'User Group';
$LNG['ttl_verified'] = 'Hitelesített';

$LNG['sub_verified'] = 'Account verified status';
$LNG['sub_group'] = 'Account group';
$LNG['sub_suspended'] = 'Account suspention status';

$LNG['page_title'] = 'Page Title';
$LNG['page_url'] = 'Page URL';
$LNG['public_page'] = 'Public Page';
$LNG['page_content'] = 'Page Content';

$LNG['sub_page_title'] = 'The page title (supports translatable strings)';
$LNG['sub_page_url'] = 'The page URL (no special characters)';
$LNG['sub_public_page'] = 'Display the page in footer and sidebar';
$LNG['sub_page_content'] = 'The page content (supports translatable strings)';
$LNG['url_exists'] = 'This page URL already exists';

$LNG['per_page'] = '/ page';
$LNG['per_ip'] = '/ IP';
$LNG['second'] = 'second';
$LNG['seconds'] = 'seconds';
$LNG['minute'] = 'minute';
$LNG['minutes'] = 'minutes';
$LNG['hour'] = 'hour';
$LNG['recommended'] = 'recommended';
$LNG['edit_user'] = 'Edit User';
$LNG['username_to_edit'] = 'Username';
$LNG['username_to_edit_sub'] = 'Enter the username you want to edit';
$LNG['group_to_edit'] = 'Group name';
$LNG['group_to_edit_sub'] = 'Enter the group name you want to edit';
$LNG['page_to_edit'] = 'Page name';
$LNG['page_to_edit_sub'] = 'Enter the page name you want to edit';
$LNG['chat_smiles'] = 'Add emoticons';
$LNG['chat_picture'] = 'Upload image';
$LNG['chat_camera'] = 'Take a photo';

// STATS
$LNG['likes'] = 'Likes';
$LNG['messages'] = 'Messages';
$LNG['comments'] = 'Comments';
$LNG['registered_users'] = 'Registered Users';
$LNG['today'] = 'Today';
$LNG['this_week'] = 'This Week';
$LNG['this_month'] = 'This Month';
$LNG['this_year'] = 'This Year';
$LNG['total'] = 'Total';
$LNG['total_likes'] = 'Total Likes';
$LNG['date'] = 'Date';
$LNG['evolution'] = 'Evolution';

$LNG['reports'] = 'Reports';
$LNG['total_reports'] = 'Total Reports';
$LNG['pending_reports'] = 'Pending Reports';
$LNG['safe_reports'] = 'Safe Reports';
$LNG['deleted_reports'] = 'Deleted Reports';

// DASHBOARD
$LNG['admin_panel'] = 'Admin Panel';
$LNG['at_a_glance'] = 'At a glance';
$LNG['site_info'] = 'Site Info';
$LNG['site_version'] = '<a href="%s" target="_blank">%s</a> %s';
$LNG['site_loaded'] = 'Theme <a href="%s" rel="loadpage">%s</a> with <a href="%s" rel="loadpage">%s plugins</a> enabled';
$LNG['online_users'] = 'Online Users';
$LNG['users'] = 'Users';
$LNG['moderators'] = 'Moderators';
$LNG['shares'] = 'Shares';
$LNG['useful_links'] = 'Useful Links';
$LNG['get_themes'] = 'Még több Themes';
$LNG['get_plugins'] = 'Még több Plugins';
$LNG['get_languages'] = 'Még több Languages';

// MANAGE REPORTS
$LNG['admin_reports_ignore'] = 'Ignore the report and mark the content as safe';
$LNG['admin_reports_delete'] = 'Delete the report and the reported content';
$LNG['admin_reports_view'] = 'View the reported content';

// LIKES
$LNG['like'] = 'Tetszik';
$LNG['dislike'] = 'Utálod';
$LNG['liked'] = 'Kedveled';
$LNG['liked_this'] = 'kedveli';
$LNG['view_who_liked'] = 'Kedvelők';
$LNG['view_who_shared'] = 'Megosztók';

// MISC
$LNG['sponsored'] = 'Sponsored';
$LNG['censored'] = '<strong>censored</strong>';
$LNG['new_like_notification'] = '<a href="%s" rel="loadpage">%s</a> liked your <a href="%s" rel="loadpage">message</a>';
$LNG['new_like_c_notification'] = '<a href="%s" rel="loadpage">%s</a> liked your <a href="%s" rel="loadpage">comment</a>';
$LNG['new_like_mention'] = '<a href="%s" rel="loadpage">%s</a> megemlített téged egy <a href="%s" rel="loadpage">message</a>';
$LNG['new_like_c_mention'] = '<a href="%s" rel="loadpage">%s</a> megemlített téged egy <a href="%s" rel="loadpage">comment</a>';
$LNG['new_poke_notification'] = '<a href="%s" rel="loadpage">%s</a> poked you';
$LNG['new_comment_notification'] = '<a href="%s" rel="loadpage">%s</a> commented on your <a href="%s" rel="loadpage">message</a>';
$LNG['new_shared_notification'] = '<a href="%s" rel="loadpage">%s</a> shared your <a href="%s" rel="loadpage">message</a>';
$LNG['new_page_notification'] = '<a href="%s" rel="loadpage">%s</a> has invited you to like <a href="%s" rel="loadpage">%s</a> page';
$LNG['new_group_notification'] = '<a href="%s" rel="loadpage">%s</a> has invited you to join <a href="%s" rel="loadpage">%s</a> group';
$LNG['new_friend_notification'] = '<a href="%s" rel="loadpage">%s</a> accepted your friend request';
$LNG['new_chat_notification'] = '<a href="%s" rel="loadpage">%s</a> sent you a <span class="desktop"><a onclick="%s">chat message</a></span><span class="mobile"><a href="%s" rel="loadpage">chat message</a></span>';
$LNG['new_birthday_notification'] = '<a href="%s" rel="loadpage">%s</a>\'s birthday';
$LNG['years_old'] = '%s years old';
$LNG['x_and_x_others'] = '<a href="%s" rel="loadpage">%s</a> and <a href="%s" rel="loadpage">%s more</a>';
$LNG['new_like_fa'] = '<a href="%s" rel="loadpage">%s</a> liked a <a href="%s" rel="loadpage">message</a>';
$LNG['new_like_c_fa'] = '<a href="%s" rel="loadpage">%s</a> liked a <a href="%s" rel="loadpage">comment</a>';
$LNG['new_comment_fa'] = '<a href="%s" rel="loadpage">%s</a> commented on a <a href="%s" rel="loadpage">message</a>';
$LNG['new_message_fa'] = '<a href="%s" rel="loadpage">%s</a> posted a new <a href="%s" rel="loadpage">message</a>';
$LNG['change_password'] = 'Change Password';
$LNG['enter_new_password'] = 'Enter your new password';
$LNG['enter_reset_key'] = 'Enter the reset key';
$LNG['enter_username'] = 'Enter Username';
$LNG['reset_key'] = 'Reset Key';
$LNG['new_password'] = 'New Password';
$LNG['password_recovery'] = 'Password Recovery';
$LNG['recover']	= 'Recover';
$LNG['recover_sub_username'] = 'Type in the username or email you want to recover the password';
$LNG['tracking_code'] = 'Tracking Code';
$LNG['friends_limit'] = 'You\'ve reached the friends limit';
$LNG['user_friends_limit'] = 'This user reached the friends limit';
$LNG['last_online'] = 'Seen: %s';
$LNG['show_in_tab'] = 'Show in tab';

// PAGE
$LNG['create_page'] = 'Create Page';
$LNG['edit_page'] = 'Edit Page';
$LNG['delete_page'] = 'Delete Page';
$LNG['page_sub_name'] = 'The page name (will appear in URL)';
$LNG['page_sub_title'] = 'The page title (will appear on the page\'s title';
$LNG['page_sub_description'] = 'The page description';
$LNG['page_sub_website'] = 'Website URL';
$LNG['profile_image'] = 'Profile Image';
$LNG['cover_image'] = 'Cover Image';
$LNG['page_sub_pimg'] = 'The page profile image';
$LNG['page_sub_cover'] = 'The page cover image';
$LNG['category'] = 'Category';
$LNG['page_sub_category'] = 'The page category';
$LNG['phone'] = 'Phone';
$LNG['page_sub_phone'] = 'Phone number';
$LNG['page_sub_address'] = 'Physical address';

$LNG['page_name_consist'] = 'Page name can only contain letters and numbers';
$LNG['page_name_taken'] = 'This page name is already taken';
$LNG['page_name_less'] = 'Page name should be less than %s characters';
$LNG['page_title_less'] = 'Page title should be less than %s characters';
$LNG['page_desc_less'] = 'Page description should be less than %s characters';
$LNG['invalid_phone'] = 'Phone number can only contain digits, plus (+) and minus (-) signs.';
$LNG['page_delete_desc'] = 'Deleting a page will also delete its messages along with their content.';
$LNG['page_deleted'] = 'The page <strong>%s</strong> has been deleted';
$LNG['page_maximum'] = 'You\'ve exceeded the maximum amount of pages allowed (%s).';
$LNG['group_maximum'] = 'You\'ve exceeded the maximum amount of groups allowed (%s).';

// PAGE CATEGORIES
$LNG['select_category'] = 'Select a category';
$LNG['page_1'] = 'Local Business or Place';
$LNG['page_2'] = 'Company, Organization or Institution';
$LNG['page_3'] = 'Brand or Product';
$LNG['page_4'] = 'Artist, Band or Public Figure';
$LNG['page_5'] = 'Entertainment';
$LNG['page_6'] = 'Cause or Community';

// GROUP
$LNG['create_group'] = 'Create Group';
$LNG['edit_group'] = 'Edit Group';
$LNG['leave_group'] = 'Leave Group';
$LNG['delete_group'] = 'Delete Group';
$LNG['discussion'] = 'Discussion';
$LNG['members'] = 'Members';
$LNG['admins'] = 'Admins';
$LNG['page'] = 'Page';
$LNG['group'] = 'Group';
$LNG['group_private'] = 'Sorry, but this group is private, only the member of this group can view the content.';
$LNG['group_private_ttl'] = 'Private Group';
$LNG['name'] = 'Name';
$LNG['any_member'] = 'Any member';
$LNG['posts'] = 'Posts';
$LNG['group_sub_name'] = 'The group name (will appear in URL)';
$LNG['group_sub_title'] = 'The group title (will appear on the group\'s title)';
$LNG['group_sub_privacy'] = 'The group privacy';
$LNG['group_sub_description'] = 'The group description';
$LNG['group_sub_posts'] = 'Who can post in the group';
$LNG['admins_posts'] = ', only admins can post';
$LNG['members_posts'] = ', any member can post';
$LNG['group_sub_cover'] = 'The group cover image';
$LNG['public_group'] = 'Public Group';
$LNG['private_group'] = 'Private Group';
$LNG['x_members'] = '%s members';
$LNG['join_group'] = 'Join Group';
$LNG['pending_approval'] = 'Pending Approval';
$LNG['search_this_group'] = 'Search this group';
$LNG['invited'] = 'Invited';
$LNG['member'] = 'Member';
$LNG['invite'] = 'Invite';

$LNG['group_name_consist'] = 'Group name can only contain letters and numbers';
$LNG['group_name_taken'] = 'This group name is already taken';
$LNG['group_name_less'] = 'Group name should be less than %s characters';
$LNG['group_title_less'] = 'Group title should be less than %s characters';
$LNG['group_desc_less'] = 'Group description should be less than %s characters';
$LNG['group_delete_desc'] = 'Deleting a group will also delete its messages along with their content.';
$LNG['group_deleted'] = 'The group <strong>%s</strong> has been deleted';

$LNG['invite_friends'] = 'Invite Friends';

// PROFILE
$LNG['profile_not_exists'] = 'Sorry, but this profile does not exists.';
$LNG['group_not_exists'] = 'Sorry, but this group does not exists.';
$LNG['page_not_exists'] = 'Sorry, but this page does not exists.';
$LNG['profile_semi_private'] = 'Sorry, but this profile is private, only the friends of this user can view the profile.';
$LNG['profile_private'] = 'Sorry, but this profile is completely private.';
$LNG['profile_suspended'] = 'Sorry, but this profile has been suspended.';
$LNG['profile_not_exists_ttl'] = 'Profile does not exists.';
$LNG['group_not_exists_ttl'] = 'Group does not exists.';
$LNG['profile_semi_private_ttl'] = 'Személyes profil';
$LNG['profile_private_ttl'] = 'Személyes profil';
$LNG['profile_suspended_ttl'] = 'Suspended Profile';
$LNG['profile_blocked'] = 'Sorry, but you have blocked or been blocked by this user.';
$LNG['profile_blocked_ttl'] = 'Letiltott profil';
$LNG['add_friend'] = 'Ismerősnek jelölés';
$LNG['remove_friend'] = 'Ismerettség törlése';
$LNG['friend_request_sent'] = 'Ismerősnek jelölés küldése';
$LNG['friend_request_accept'] = 'Ismerettség visszaigazolása';
$LNG['created_on'] = 'Létrehozta';
$LNG['description'] = 'Leírás';
$LNG['profile_about'] = 'Bemutatkozás';
$LNG['profile_birthdate'] = 'Születésnap';
$LNG['lives_in'] = 'Lakóhely';
$LNG['born_on'] = 'Születési hely';
$LNG['studied_at'] = 'Iskola';
$LNG['works_at'] = 'Munkahely';
$LNG['profile_view_site'] = 'Weboldal';
$LNG['profile_view_profile'] = 'Adatlap';
$LNG['profile_bio']	= 'Bio';
$LNG['verified_page'] = 'Ellenőrzött lap';
$LNG['verified_profile'] = 'Ellenőrzött profil';
$LNG['edit_profile_cover'] = 'Change Profile Images';
$LNG['view_all_notifications'] = 'View More Notifications';
$LNG['view_chat_notifications'] = 'View More Messages';
$LNG['view_confirmed_friendships'] = 'View Confirmed Requests';
$LNG['close_notifications'] = 'Értesítés bezárása';
$LNG['notifications_settings'] = 'Értesítések beállításai';
$LNG['no_notifications'] = 'Nincsenek értesítések';
$LNG['search_title'] = 'Keresési találatok';
$LNG['view_all_results'] = 'Összes találat megtekintése';
$LNG['close_results'] = 'Találatok bezárása';
$LNG['no_results'] = 'Nincs találat. Keress máshogy!';
$LNG['no_results_ttl'] = 'Keresési eredmények';
$LNG['search_for_users'] = 'Tagok keresése';
$LNG['search_in_friends'] = 'Ismerősök keresése';
$LNG['type_message'] = 'Üzenet írása..';
$LNG['follows'] = 'Követők';
$LNG['followed_by'] = 'Követett';
$LNG['people'] = 'emberek';
$LNG['no_info_avail'] = 'Nincs elérhető adat';
$LNG['account_suspended'] = 'Az azonosító jelenleg ki lett kapcsolva.';
$LNG['account_not_activated'] = 'Az azonosító nem lett aktiválva. <a href="%s">Kattints ide</a> az e-mail újraküldéséhez!';
$LNG['re_activate_already'] = 'Aktiváló e-mail ma már lett küldve';
$LNG['re_activate_sent'] = 'Aktiváló e-mail lett küldve';

// GENERAL
$LNG['title_profile'] = 'Profil';
$LNG['title_feed'] = 'Hírfolyam';
$LNG['title_post'] = 'Küldés';
$LNG['title_messages'] = 'Üzenetek';
$LNG['title_settings'] = 'Beállítások';
$LNG['title_search'] = 'Kereső';
$LNG['title_notifications'] = 'Értesítések';
$LNG['title_page'] = 'Lap létrehozása';
$LNG['title_group'] = 'Csoport létrehozása';
$LNG['title_admin']	= 'Admin';
$LNG['edit'] = 'Szerkesztés';
$LNG['delete'] = 'Törlés';
$LNG['suspended'] = 'Kikapcsolva';
$LNG['ignore'] = 'Kihagy';
$LNG['view'] = 'Megtekint';
$LNG['timeline'] = 'Idővonal';
$LNG['on'] = 'Be';
$LNG['off'] = 'Ki';
$LNG['yes'] = 'Igen';
$LNG['no'] = 'Nem';
$LNG['none'] = 'Nincs';
$LNG['pages'] = 'Lapok';
$LNG['search_for_people'] = 'személy, #cimke';
$LNG['search_pages'] = ', @lap';
$LNG['search_groups'] = ', !csoport';
$LNG['new_message'] = 'Új üzenet';
$LNG['privacy_policy'] = 'Adatvédelem';
$LNG['terms_of_use'] = 'Felhasználási feltételek';
$LNG['privacy_policy_url'] = 'Az adatvédelmi oldal linkje';
$LNG['terms_of_use_url'] = 'A felhasználási feltételek linkje';
$LNG['about'] = 'Rólam';
$LNG['disclaimer'] = 'Jognyilatkozat';
$LNG['contact'] = 'Kapcsolat';
$LNG['developers'] = 'Fejlesztők';
$LNG['language'] = 'Nyelv';
$LNG['register_agreement'] = 'Elfogadom a <a href="%s" target="_blank">'.$LNG['terms_of_use'].'</a>et és az <a href="%s" target="_blank">'.$LNG['privacy_policy'].'</a>ben leírtakat.';
$LNG['agreement_required'] = 'A regisztrációhot el kell fogadnod a  '.$LNG['terms_of_use'].'et és az '.$LNG['privacy_policy'].'ben leírtakat.';

// EMOJIS
$LNG['emoji_people'] = 'Hangulatjelek';
$LNG['emoji_animals'] = 'Állatok és természet';
$LNG['emoji_food'] = 'Ételek és italok';
$LNG['emoji_activities'] = 'Tevékenységek';
$LNG['emoji_travel'] = 'Utazás és helyszínek';
$LNG['emoji_objects'] = 'Épületek';
$LNG['emoji_symbols'] = 'Szimbólumok';

// TIME
$LNG['just_now'] = 'most';
$LNG['ta_second'] = 'egy másodperce';
$LNG['ta_seconds'] = '%d másodperce';
$LNG['ta_minute'] = 'egy perce';
$LNG['ta_minutes'] = '%d perce';
$LNG['ta_hour'] = 'egy órája';
$LNG['ta_hours'] = '%d órája';
$LNG['ta_day'] = 'egy napja';
$LNG['ta_days'] = '%d napja';
$LNG['ta_week'] = 'egy hete';
$LNG['ta_weeks'] = '%d hete';
$LNG['ta_month'] = 'egy hónapja';
$LNG['ta_months'] = '%d hónapja';
$LNG['ta_year'] = 'egy éve';
$LNG['ta_years'] = '%d éve';
$LNG['ago'] = '';

// MONTHS
$LNG['month'] = 'Hónap';
$LNG['year'] = 'Év';
$LNG['day'] = 'Nap';
$LNG['month_1'] = 'Január';
$LNG['month_2'] = 'Február';
$LNG['month_3'] = 'Március';
$LNG['month_4'] = 'Április';
$LNG['month_5'] = 'Május';
$LNG['month_6'] = 'Június';
$LNG['month_7'] = 'Július';
$LNG['month_8'] = 'Augusztus';
$LNG['month_9'] = 'Szeptember';
$LNG['month_10'] = 'Október';
$LNG['month_11'] = 'November';
$LNG['month_12'] = 'December';
?>
