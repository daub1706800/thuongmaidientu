<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BracketSpace\\Notification\\Abstracts\\Adapter' => $baseDir . '/src/Abstracts/Adapter.php',
    'BracketSpace\\Notification\\Abstracts\\Carrier' => $baseDir . '/src/Abstracts/Carrier.php',
    'BracketSpace\\Notification\\Abstracts\\Field' => $baseDir . '/src/Abstracts/Field.php',
    'BracketSpace\\Notification\\Abstracts\\MergeTag' => $baseDir . '/src/Abstracts/MergeTag.php',
    'BracketSpace\\Notification\\Abstracts\\Notification' => $baseDir . '/compat/src-deprecated/Abstracts/Notification.php',
    'BracketSpace\\Notification\\Abstracts\\Recipient' => $baseDir . '/src/Abstracts/Recipient.php',
    'BracketSpace\\Notification\\Abstracts\\Resolver' => $baseDir . '/src/Abstracts/Resolver.php',
    'BracketSpace\\Notification\\Abstracts\\Trigger' => $baseDir . '/src/Abstracts/Trigger.php',
    'BracketSpace\\Notification\\Admin\\Debugging' => $baseDir . '/src/Admin/Debugging.php',
    'BracketSpace\\Notification\\Admin\\Extensions' => $baseDir . '/src/Admin/Extensions.php',
    'BracketSpace\\Notification\\Admin\\ImportExport' => $baseDir . '/src/Admin/ImportExport.php',
    'BracketSpace\\Notification\\Admin\\NotificationDuplicator' => $baseDir . '/src/Admin/NotificationDuplicator.php',
    'BracketSpace\\Notification\\Admin\\PostTable' => $baseDir . '/src/Admin/PostTable.php',
    'BracketSpace\\Notification\\Admin\\PostType' => $baseDir . '/src/Admin/PostType.php',
    'BracketSpace\\Notification\\Admin\\Screen' => $baseDir . '/src/Admin/Screen.php',
    'BracketSpace\\Notification\\Admin\\Scripts' => $baseDir . '/src/Admin/Scripts.php',
    'BracketSpace\\Notification\\Admin\\Settings' => $baseDir . '/src/Admin/Settings.php',
    'BracketSpace\\Notification\\Admin\\Sync' => $baseDir . '/src/Admin/Sync.php',
    'BracketSpace\\Notification\\Admin\\Upsell' => $baseDir . '/src/Admin/Upsell.php',
    'BracketSpace\\Notification\\Admin\\Wizard' => $baseDir . '/src/Admin/Wizard.php',
    'BracketSpace\\Notification\\Api\\Api' => $baseDir . '/src/Api/Api.php',
    'BracketSpace\\Notification\\Api\\Controller\\RepeaterController' => $baseDir . '/src/Api/Controller/RepeaterController.php',
    'BracketSpace\\Notification\\Api\\Controller\\SectionRepeaterController' => $baseDir . '/src/Api/Controller/SectionRepeaterController.php',
    'BracketSpace\\Notification\\Api\\Controller\\SelectInputController' => $baseDir . '/src/Api/Controller/SelectInputController.php',
    'BracketSpace\\Notification\\Cli\\DumpHooks' => $baseDir . '/src/Cli/DumpHooks.php',
    'BracketSpace\\Notification\\Core\\Binder' => $baseDir . '/src/Core/Binder.php',
    'BracketSpace\\Notification\\Core\\Cron' => $baseDir . '/src/Core/Cron.php',
    'BracketSpace\\Notification\\Core\\Debugging' => $baseDir . '/src/Core/Debugging.php',
    'BracketSpace\\Notification\\Core\\License' => $baseDir . '/src/Core/License.php',
    'BracketSpace\\Notification\\Core\\Notification' => $baseDir . '/src/Core/Notification.php',
    'BracketSpace\\Notification\\Core\\Processor' => $baseDir . '/src/Core/Processor.php',
    'BracketSpace\\Notification\\Core\\Queue' => $baseDir . '/src/Core/Queue.php',
    'BracketSpace\\Notification\\Core\\Resolver' => $baseDir . '/src/Core/Resolver.php',
    'BracketSpace\\Notification\\Core\\Runner' => $baseDir . '/src/Core/Runner.php',
    'BracketSpace\\Notification\\Core\\Settings' => $baseDir . '/src/Core/Settings.php',
    'BracketSpace\\Notification\\Core\\Sync' => $baseDir . '/src/Core/Sync.php',
    'BracketSpace\\Notification\\Core\\Templates' => $baseDir . '/src/Core/Templates.php',
    'BracketSpace\\Notification\\Core\\Upgrade' => $baseDir . '/src/Core/Upgrade.php',
    'BracketSpace\\Notification\\Core\\Whitelabel' => $baseDir . '/src/Core/Whitelabel.php',
    'BracketSpace\\Notification\\Defaults\\Adapter\\JSON' => $baseDir . '/src/Defaults/Adapter/JSON.php',
    'BracketSpace\\Notification\\Defaults\\Adapter\\WordPress' => $baseDir . '/src/Defaults/Adapter/WordPress.php',
    'BracketSpace\\Notification\\Defaults\\Carrier\\Email' => $baseDir . '/src/Defaults/Carrier/Email.php',
    'BracketSpace\\Notification\\Defaults\\Carrier\\Webhook' => $baseDir . '/src/Defaults/Carrier/Webhook.php',
    'BracketSpace\\Notification\\Defaults\\Carrier\\WebhookJson' => $baseDir . '/src/Defaults/Carrier/WebhookJson.php',
    'BracketSpace\\Notification\\Defaults\\Field\\CheckboxField' => $baseDir . '/src/Defaults/Field/CheckboxField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\CodeEditorField' => $baseDir . '/src/Defaults/Field/CodeEditorField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\ColorPickerField' => $baseDir . '/src/Defaults/Field/ColorPickerField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\EditorField' => $baseDir . '/src/Defaults/Field/EditorField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\ImageField' => $baseDir . '/src/Defaults/Field/ImageField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\InputField' => $baseDir . '/src/Defaults/Field/InputField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\MessageField' => $baseDir . '/src/Defaults/Field/MessageField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\NonceField' => $baseDir . '/src/Defaults/Field/NonceField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\RecipientsField' => $baseDir . '/src/Defaults/Field/RecipientsField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\RepeaterField' => $baseDir . '/src/Defaults/Field/RepeaterField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\SectionRepeater' => $baseDir . '/src/Defaults/Field/SectionRepeater.php',
    'BracketSpace\\Notification\\Defaults\\Field\\SectionsField' => $baseDir . '/src/Defaults/Field/SectionsField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\SelectField' => $baseDir . '/src/Defaults/Field/SelectField.php',
    'BracketSpace\\Notification\\Defaults\\Field\\TextareaField' => $baseDir . '/src/Defaults/Field/TextareaField.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\BooleanTag' => $baseDir . '/src/Defaults/MergeTag/BooleanTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentActionApprove' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentActionApprove.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentActionDelete' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentActionDelete.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentActionSpam' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentActionSpam.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentActionTrash' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentActionTrash.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentAuthorIP' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentAuthorIP.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentAuthorUrl' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentAuthorUrl.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentAuthorUserAgent' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentAuthorUserAgent.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentContent' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentContent.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentContentHtml' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentContentHtml.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentID' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentID.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentIsReply' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentIsReply.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentStatus' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentStatus.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Comment\\CommentType' => $baseDir . '/src/Defaults/MergeTag/Comment/CommentType.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\DateTime\\Date' => $baseDir . '/src/Defaults/MergeTag/DateTime/Date.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\DateTime\\DateTime' => $baseDir . '/src/Defaults/MergeTag/DateTime/DateTime.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\DateTime\\Time' => $baseDir . '/src/Defaults/MergeTag/DateTime/Time.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\EmailTag' => $baseDir . '/src/Defaults/MergeTag/EmailTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\FloatTag' => $baseDir . '/src/Defaults/MergeTag/FloatTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\HtmlTag' => $baseDir . '/src/Defaults/MergeTag/HtmlTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\IPTag' => $baseDir . '/src/Defaults/MergeTag/IPTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\IntegerTag' => $baseDir . '/src/Defaults/MergeTag/IntegerTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Media\\AttachmentDirectUrl' => $baseDir . '/src/Defaults/MergeTag/Media/AttachmentDirectUrl.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Media\\AttachmentID' => $baseDir . '/src/Defaults/MergeTag/Media/AttachmentID.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Media\\AttachmentMimeType' => $baseDir . '/src/Defaults/MergeTag/Media/AttachmentMimeType.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Media\\AttachmentPage' => $baseDir . '/src/Defaults/MergeTag/Media/AttachmentPage.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Media\\AttachmentTitle' => $baseDir . '/src/Defaults/MergeTag/Media/AttachmentTitle.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\FeaturedImageId' => $baseDir . '/src/Defaults/MergeTag/Post/FeaturedImageId.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\FeaturedImageUrl' => $baseDir . '/src/Defaults/MergeTag/Post/FeaturedImageUrl.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostContent' => $baseDir . '/src/Defaults/MergeTag/Post/PostContent.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostContentHtml' => $baseDir . '/src/Defaults/MergeTag/Post/PostContentHtml.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostExcerpt' => $baseDir . '/src/Defaults/MergeTag/Post/PostExcerpt.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostID' => $baseDir . '/src/Defaults/MergeTag/Post/PostID.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostPermalink' => $baseDir . '/src/Defaults/MergeTag/Post/PostPermalink.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostSlug' => $baseDir . '/src/Defaults/MergeTag/Post/PostSlug.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostStatus' => $baseDir . '/src/Defaults/MergeTag/Post/PostStatus.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostTerms' => $baseDir . '/src/Defaults/MergeTag/Post/PostTerms.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostTitle' => $baseDir . '/src/Defaults/MergeTag/Post/PostTitle.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\PostType' => $baseDir . '/src/Defaults/MergeTag/Post/PostType.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\RevisionLink' => $baseDir . '/src/Defaults/MergeTag/Post/RevisionLink.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Post\\ThumbnailUrl' => $baseDir . '/src/Defaults/MergeTag/Post/ThumbnailUrl.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\StringTag' => $baseDir . '/src/Defaults/MergeTag/StringTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TaxonomyName' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TaxonomyName.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TaxonomySlug' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TaxonomySlug.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TermDescription' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TermDescription.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TermID' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TermID.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TermName' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TermName.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TermPermalink' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TermPermalink.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\Taxonomy\\TermSlug' => $baseDir . '/src/Defaults/MergeTag/Taxonomy/TermSlug.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\UrlTag' => $baseDir . '/src/Defaults/MergeTag/UrlTag.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\Avatar' => $baseDir . '/src/Defaults/MergeTag/User/Avatar.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\AvatarUrl' => $baseDir . '/src/Defaults/MergeTag/User/AvatarUrl.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserBio' => $baseDir . '/src/Defaults/MergeTag/User/UserBio.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserDisplayName' => $baseDir . '/src/Defaults/MergeTag/User/UserDisplayName.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserEmail' => $baseDir . '/src/Defaults/MergeTag/User/UserEmail.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserFirstName' => $baseDir . '/src/Defaults/MergeTag/User/UserFirstName.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserID' => $baseDir . '/src/Defaults/MergeTag/User/UserID.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserLastName' => $baseDir . '/src/Defaults/MergeTag/User/UserLastName.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserLogin' => $baseDir . '/src/Defaults/MergeTag/User/UserLogin.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserNicename' => $baseDir . '/src/Defaults/MergeTag/User/UserNicename.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserPasswordResetLink' => $baseDir . '/src/Defaults/MergeTag/User/UserPasswordResetLink.php',
    'BracketSpace\\Notification\\Defaults\\MergeTag\\User\\UserRole' => $baseDir . '/src/Defaults/MergeTag/User/UserRole.php',
    'BracketSpace\\Notification\\Defaults\\Notification\\Email' => $baseDir . '/compat/src-deprecated/Defaults/Notification/Email.php',
    'BracketSpace\\Notification\\Defaults\\Notification\\Webhook' => $baseDir . '/compat/src-deprecated/Defaults/Notification/Webhook.php',
    'BracketSpace\\Notification\\Defaults\\Recipient\\Administrator' => $baseDir . '/src/Defaults/Recipient/Administrator.php',
    'BracketSpace\\Notification\\Defaults\\Recipient\\Email' => $baseDir . '/src/Defaults/Recipient/Email.php',
    'BracketSpace\\Notification\\Defaults\\Recipient\\Role' => $baseDir . '/src/Defaults/Recipient/Role.php',
    'BracketSpace\\Notification\\Defaults\\Recipient\\User' => $baseDir . '/src/Defaults/Recipient/User.php',
    'BracketSpace\\Notification\\Defaults\\Recipient\\UserID' => $baseDir . '/src/Defaults/Recipient/UserID.php',
    'BracketSpace\\Notification\\Defaults\\Recipient\\Webhook' => $baseDir . '/src/Defaults/Recipient/Webhook.php',
    'BracketSpace\\Notification\\Defaults\\Resolver\\Basic' => $baseDir . '/src/Defaults/Resolver/Basic.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentAdded' => $baseDir . '/src/Defaults/Trigger/Comment/CommentAdded.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentApproved' => $baseDir . '/src/Defaults/Trigger/Comment/CommentApproved.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentPublished' => $baseDir . '/src/Defaults/Trigger/Comment/CommentPublished.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentReplied' => $baseDir . '/src/Defaults/Trigger/Comment/CommentReplied.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentSpammed' => $baseDir . '/src/Defaults/Trigger/Comment/CommentSpammed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentTrashed' => $baseDir . '/src/Defaults/Trigger/Comment/CommentTrashed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentTrigger' => $baseDir . '/src/Defaults/Trigger/Comment/CommentTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Comment\\CommentUnapproved' => $baseDir . '/src/Defaults/Trigger/Comment/CommentUnapproved.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Media\\MediaAdded' => $baseDir . '/src/Defaults/Trigger/Media/MediaAdded.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Media\\MediaTrashed' => $baseDir . '/src/Defaults/Trigger/Media/MediaTrashed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Media\\MediaTrigger' => $baseDir . '/src/Defaults/Trigger/Media/MediaTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Media\\MediaUpdated' => $baseDir . '/src/Defaults/Trigger/Media/MediaUpdated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Plugin\\Activated' => $baseDir . '/src/Defaults/Trigger/Plugin/Activated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Plugin\\Deactivated' => $baseDir . '/src/Defaults/Trigger/Plugin/Deactivated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Plugin\\Installed' => $baseDir . '/src/Defaults/Trigger/Plugin/Installed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Plugin\\PluginTrigger' => $baseDir . '/src/Defaults/Trigger/Plugin/PluginTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Plugin\\Removed' => $baseDir . '/src/Defaults/Trigger/Plugin/Removed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Plugin\\Updated' => $baseDir . '/src/Defaults/Trigger/Plugin/Updated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostAdded' => $baseDir . '/src/Defaults/Trigger/Post/PostAdded.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostApproved' => $baseDir . '/src/Defaults/Trigger/Post/PostApproved.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostDrafted' => $baseDir . '/src/Defaults/Trigger/Post/PostDrafted.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostPending' => $baseDir . '/src/Defaults/Trigger/Post/PostPending.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostPublished' => $baseDir . '/src/Defaults/Trigger/Post/PostPublished.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostScheduled' => $baseDir . '/src/Defaults/Trigger/Post/PostScheduled.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostTrashed' => $baseDir . '/src/Defaults/Trigger/Post/PostTrashed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostTrigger' => $baseDir . '/src/Defaults/Trigger/Post/PostTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Post\\PostUpdated' => $baseDir . '/src/Defaults/Trigger/Post/PostUpdated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Privacy\\DataEraseRequest' => $baseDir . '/src/Defaults/Trigger/Privacy/DataEraseRequest.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Privacy\\DataErased' => $baseDir . '/src/Defaults/Trigger/Privacy/DataErased.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Privacy\\DataExportRequest' => $baseDir . '/src/Defaults/Trigger/Privacy/DataExportRequest.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Privacy\\DataExported' => $baseDir . '/src/Defaults/Trigger/Privacy/DataExported.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Privacy\\PrivacyTrigger' => $baseDir . '/src/Defaults/Trigger/Privacy/PrivacyTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Taxonomy\\TermAdded' => $baseDir . '/src/Defaults/Trigger/Taxonomy/TermAdded.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Taxonomy\\TermDeleted' => $baseDir . '/src/Defaults/Trigger/Taxonomy/TermDeleted.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Taxonomy\\TermTrigger' => $baseDir . '/src/Defaults/Trigger/Taxonomy/TermTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Taxonomy\\TermUpdated' => $baseDir . '/src/Defaults/Trigger/Taxonomy/TermUpdated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Theme\\Installed' => $baseDir . '/src/Defaults/Trigger/Theme/Installed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Theme\\Switched' => $baseDir . '/src/Defaults/Trigger/Theme/Switched.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Theme\\ThemeTrigger' => $baseDir . '/src/Defaults/Trigger/Theme/ThemeTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\Theme\\Updated' => $baseDir . '/src/Defaults/Trigger/Theme/Updated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserDeleted' => $baseDir . '/src/Defaults/Trigger/User/UserDeleted.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserEmailChangeRequest' => $baseDir . '/src/Defaults/Trigger/User/UserEmailChangeRequest.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserLogin' => $baseDir . '/src/Defaults/Trigger/User/UserLogin.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserLoginFailed' => $baseDir . '/src/Defaults/Trigger/User/UserLoginFailed.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserLogout' => $baseDir . '/src/Defaults/Trigger/User/UserLogout.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserPasswordChanged' => $baseDir . '/src/Defaults/Trigger/User/UserPasswordChanged.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserPasswordResetRequest' => $baseDir . '/src/Defaults/Trigger/User/UserPasswordResetRequest.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserProfileUpdated' => $baseDir . '/src/Defaults/Trigger/User/UserProfileUpdated.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserRegistered' => $baseDir . '/src/Defaults/Trigger/User/UserRegistered.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserRoleChanged' => $baseDir . '/src/Defaults/Trigger/User/UserRoleChanged.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\User\\UserTrigger' => $baseDir . '/src/Defaults/Trigger/User/UserTrigger.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\WordPress\\EmailChangeRequest' => $baseDir . '/src/Defaults/Trigger/WordPress/EmailChangeRequest.php',
    'BracketSpace\\Notification\\Defaults\\Trigger\\WordPress\\UpdatesAvailable' => $baseDir . '/src/Defaults/Trigger/WordPress/UpdatesAvailable.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Ajax\\Response' => $baseDir . '/src/Dependencies/Micropackage/Ajax/Response.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\DocHooks\\Helper' => $baseDir . '/src/Dependencies/Micropackage/DocHooks/Helper.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\DocHooks\\Helper\\AnnotationTest' => $baseDir . '/src/Dependencies/Micropackage/DocHooks/Helper/AnnotationTest.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\DocHooks\\HookAnnotations' => $baseDir . '/src/Dependencies/Micropackage/DocHooks/HookAnnotations.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\DocHooks\\HookTrait' => $baseDir . '/src/Dependencies/Micropackage/DocHooks/HookTrait.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Filesystem\\Filesystem' => $baseDir . '/src/Dependencies/Micropackage/Filesystem/Filesystem.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Internationalization\\Internationalization' => $baseDir . '/src/Dependencies/Micropackage/Internationalization/Internationalization.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Abstracts\\Checker' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Abstracts/Checker.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\DocHooks' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/DocHooks.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\PHP' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/PHP.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\PHPExtensions' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/PHPExtensions.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\Plugins' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/Plugins.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\SSL' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/SSL.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\Theme' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/Theme.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Checker\\WP' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Checker/WP.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Interfaces\\Checkable' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Interfaces/Checkable.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Requirements\\Requirements' => $baseDir . '/src/Dependencies/Micropackage/Requirements/Requirements.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Templates\\Exceptions\\StorageException' => $baseDir . '/src/Dependencies/Micropackage/Templates/Exceptions/StorageException.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Templates\\Exceptions\\TemplateException' => $baseDir . '/src/Dependencies/Micropackage/Templates/Exceptions/TemplateException.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Templates\\Storage' => $baseDir . '/src/Dependencies/Micropackage/Templates/Storage.php',
    'BracketSpace\\Notification\\Dependencies\\Micropackage\\Templates\\Template' => $baseDir . '/src/Dependencies/Micropackage/Templates/Template.php',
    'BracketSpace\\Notification\\ErrorHandler' => $baseDir . '/src/ErrorHandler.php',
    'BracketSpace\\Notification\\Integration\\TwoFactor' => $baseDir . '/src/Integration/TwoFactor.php',
    'BracketSpace\\Notification\\Integration\\WordPress' => $baseDir . '/src/Integration/WordPress.php',
    'BracketSpace\\Notification\\Integration\\WordPressEmails' => $baseDir . '/src/Integration/WordPressEmails.php',
    'BracketSpace\\Notification\\Interfaces\\Adaptable' => $baseDir . '/src/Interfaces/Adaptable.php',
    'BracketSpace\\Notification\\Interfaces\\Fillable' => $baseDir . '/src/Interfaces/Fillable.php',
    'BracketSpace\\Notification\\Interfaces\\Nameable' => $baseDir . '/src/Interfaces/Nameable.php',
    'BracketSpace\\Notification\\Interfaces\\Receivable' => $baseDir . '/src/Interfaces/Receivable.php',
    'BracketSpace\\Notification\\Interfaces\\Resolvable' => $baseDir . '/src/Interfaces/Resolvable.php',
    'BracketSpace\\Notification\\Interfaces\\Sendable' => $baseDir . '/src/Interfaces/Sendable.php',
    'BracketSpace\\Notification\\Interfaces\\Storable' => $baseDir . '/src/Interfaces/Storable.php',
    'BracketSpace\\Notification\\Interfaces\\Taggable' => $baseDir . '/src/Interfaces/Taggable.php',
    'BracketSpace\\Notification\\Interfaces\\Triggerable' => $baseDir . '/src/Interfaces/Triggerable.php',
    'BracketSpace\\Notification\\Queries\\NotificationQueries' => $baseDir . '/src/Queries/NotificationQueries.php',
    'BracketSpace\\Notification\\Queries\\UserQueries' => $baseDir . '/src/Queries/UserQueries.php',
    'BracketSpace\\Notification\\Register' => $baseDir . '/src/Register.php',
    'BracketSpace\\Notification\\Repository\\CarrierRepository' => $baseDir . '/src/Repository/CarrierRepository.php',
    'BracketSpace\\Notification\\Repository\\GlobalMergeTagRepository' => $baseDir . '/src/Repository/GlobalMergeTagRepository.php',
    'BracketSpace\\Notification\\Repository\\RecipientRepository' => $baseDir . '/src/Repository/RecipientRepository.php',
    'BracketSpace\\Notification\\Repository\\ResolverRepository' => $baseDir . '/src/Repository/ResolverRepository.php',
    'BracketSpace\\Notification\\Repository\\TriggerRepository' => $baseDir . '/src/Repository/TriggerRepository.php',
    'BracketSpace\\Notification\\Runtime' => $baseDir . '/src/Runtime.php',
    'BracketSpace\\Notification\\Store\\Carrier' => $baseDir . '/src/Store/Carrier.php',
    'BracketSpace\\Notification\\Store\\GlobalMergeTag' => $baseDir . '/src/Store/GlobalMergeTag.php',
    'BracketSpace\\Notification\\Store\\Notification' => $baseDir . '/src/Store/Notification.php',
    'BracketSpace\\Notification\\Store\\Recipient' => $baseDir . '/src/Store/Recipient.php',
    'BracketSpace\\Notification\\Store\\Resolver' => $baseDir . '/src/Store/Resolver.php',
    'BracketSpace\\Notification\\Store\\Trigger' => $baseDir . '/src/Store/Trigger.php',
    'BracketSpace\\Notification\\Traits\\ClassUtils' => $baseDir . '/src/Traits/ClassUtils.php',
    'BracketSpace\\Notification\\Traits\\HasDescription' => $baseDir . '/src/Traits/HasDescription.php',
    'BracketSpace\\Notification\\Traits\\HasGroup' => $baseDir . '/src/Traits/HasGroup.php',
    'BracketSpace\\Notification\\Traits\\HasName' => $baseDir . '/src/Traits/HasName.php',
    'BracketSpace\\Notification\\Traits\\HasSlug' => $baseDir . '/src/Traits/HasSlug.php',
    'BracketSpace\\Notification\\Traits\\Storage' => $baseDir . '/src/Traits/Storage.php',
    'BracketSpace\\Notification\\Traits\\Webhook' => $baseDir . '/src/Traits/Webhook.php',
    'BracketSpace\\Notification\\Utils\\Cache\\Cache' => $baseDir . '/src/Utils/Cache/Cache.php',
    'BracketSpace\\Notification\\Utils\\Cache\\ObjectCache' => $baseDir . '/src/Utils/Cache/ObjectCache.php',
    'BracketSpace\\Notification\\Utils\\Cache\\Transient' => $baseDir . '/src/Utils/Cache/Transient.php',
    'BracketSpace\\Notification\\Utils\\EDDUpdater' => $baseDir . '/src/Utils/EDDUpdater.php',
    'BracketSpace\\Notification\\Utils\\Interfaces\\Cacheable' => $baseDir . '/src/Utils/Interfaces/Cacheable.php',
    'BracketSpace\\Notification\\Utils\\Settings' => $baseDir . '/src/Utils/Settings.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Button' => $baseDir . '/src/Utils/Settings/CoreFields/Button.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Checkbox' => $baseDir . '/src/Utils/Settings/CoreFields/Checkbox.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Editor' => $baseDir . '/src/Utils/Settings/CoreFields/Editor.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Image' => $baseDir . '/src/Utils/Settings/CoreFields/Image.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Message' => $baseDir . '/src/Utils/Settings/CoreFields/Message.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Number' => $baseDir . '/src/Utils/Settings/CoreFields/Number.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Range' => $baseDir . '/src/Utils/Settings/CoreFields/Range.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Select' => $baseDir . '/src/Utils/Settings/CoreFields/Select.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Text' => $baseDir . '/src/Utils/Settings/CoreFields/Text.php',
    'BracketSpace\\Notification\\Utils\\Settings\\CoreFields\\Url' => $baseDir . '/src/Utils/Settings/CoreFields/Url.php',
    'BracketSpace\\Notification\\Utils\\Settings\\Field' => $baseDir . '/src/Utils/Settings/Field.php',
    'BracketSpace\\Notification\\Utils\\Settings\\Group' => $baseDir . '/src/Utils/Settings/Group.php',
    'BracketSpace\\Notification\\Utils\\Settings\\Section' => $baseDir . '/src/Utils/Settings/Section.php',
    'BracketSpace\\Notification\\Utils\\WpObjectHelper' => $baseDir . '/src/Utils/WpObjectHelper.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Micropackage\\Ajax\\Response' => $vendorDir . '/micropackage/ajax/src/Response.php',
    'Micropackage\\DocHooks\\Helper' => $vendorDir . '/micropackage/dochooks/src/Helper.php',
    'Micropackage\\DocHooks\\Helper\\AnnotationTest' => $vendorDir . '/micropackage/dochooks/src/Helper/AnnotationTest.php',
    'Micropackage\\DocHooks\\HookAnnotations' => $vendorDir . '/micropackage/dochooks/src/HookAnnotations.php',
    'Micropackage\\DocHooks\\HookTrait' => $vendorDir . '/micropackage/dochooks/src/HookTrait.php',
    'Micropackage\\Filesystem\\Filesystem' => $vendorDir . '/micropackage/filesystem/src/Filesystem.php',
    'Micropackage\\Internationalization\\Internationalization' => $vendorDir . '/micropackage/internationalization/src/Internationalization.php',
    'Micropackage\\Requirements\\Abstracts\\Checker' => $vendorDir . '/micropackage/requirements/src/Abstracts/Checker.php',
    'Micropackage\\Requirements\\Checker\\DocHooks' => $vendorDir . '/micropackage/requirements/src/Checker/DocHooks.php',
    'Micropackage\\Requirements\\Checker\\PHP' => $vendorDir . '/micropackage/requirements/src/Checker/PHP.php',
    'Micropackage\\Requirements\\Checker\\PHPExtensions' => $vendorDir . '/micropackage/requirements/src/Checker/PHPExtensions.php',
    'Micropackage\\Requirements\\Checker\\Plugins' => $vendorDir . '/micropackage/requirements/src/Checker/Plugins.php',
    'Micropackage\\Requirements\\Checker\\SSL' => $vendorDir . '/micropackage/requirements/src/Checker/SSL.php',
    'Micropackage\\Requirements\\Checker\\Theme' => $vendorDir . '/micropackage/requirements/src/Checker/Theme.php',
    'Micropackage\\Requirements\\Checker\\WP' => $vendorDir . '/micropackage/requirements/src/Checker/WP.php',
    'Micropackage\\Requirements\\Interfaces\\Checkable' => $vendorDir . '/micropackage/requirements/src/Interfaces/Checkable.php',
    'Micropackage\\Requirements\\Requirements' => $vendorDir . '/micropackage/requirements/src/Requirements.php',
    'Micropackage\\Templates\\Exceptions\\StorageException' => $vendorDir . '/micropackage/templates/src/Exceptions/StorageException.php',
    'Micropackage\\Templates\\Exceptions\\TemplateException' => $vendorDir . '/micropackage/templates/src/Exceptions/TemplateException.php',
    'Micropackage\\Templates\\Storage' => $vendorDir . '/micropackage/templates/src/Storage.php',
    'Micropackage\\Templates\\Template' => $vendorDir . '/micropackage/templates/src/Template.php',
);