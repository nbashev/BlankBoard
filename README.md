# BlankBoard
Basic users and permissions management system, with Laravel 5.5 on the AdminLTE template.

## Users
Using Laravel's API with BlankBoard you're able create new users, assing roles (or not) to the users to grant them access through out the app.

## Roles
Roles are created within the GUI. You can attach permissions to the roles.

## Permissions
Permissions are created directly through the Controller. On the instantiation of the Controller (would be moved to an independent action, to register the Controller on demand). The GUI don't let you create or delete the Permissions. If you want to remove any permission from you app, just deactivate the desired permission.

## Messages
You are be able to create, send and delete messages. If you want, you can store messages as drafts to be processed in the future.
