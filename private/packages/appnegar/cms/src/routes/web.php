<?php


Route::group(['namespace' => 'Controllers\SystemManagement', 'prefix' => '{lang}'], function () {

    Route::group(['prefix' => 'system_management', 'middleware' => ['auth:system_management', 'set_department:system_management', 'user_info', 'lang', 'remove_additional_params']], function () {


        Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'system_management.Dashboard.index'])->middleware('acl:1');


        Route::get('/profile/get_actions', ['uses' => 'ProfileController@getActions', 'as' => 'system_management.Profile.get_actions']);
        Route::get('/profile', ['uses' => 'ProfileController@index', 'as' => 'system_management.Profile.index']);
        Route::post('/profile/get_form_info', ['uses' => 'ProfileController@getFormInfo', 'as' => 'system_management.Profile.getFormInfo']);
        Route::put('/profile/update_basic_info', ['uses' => 'ProfileController@updateBasicInfo', 'as' => 'system_management.Profile.updateBasicInfo']);
        Route::put('/profile/update_about_user', ['uses' => 'ProfileController@updateAboutUser', 'as' => 'system_management.Profile.updateAboutUser']);
        Route::put('/profile/update_personal_info', ['uses' => 'ProfileController@updatePersonalInfo', 'as' => 'system_management.Profile.updatePersonalInfo']);
        Route::put('/profile/update_password', ['uses' => 'ProfileController@updatePassword', 'as' => 'system_management.Profile.updatePassword']);


        Route::get('/sp_namespaces/get_actions', ['uses' => 'SpNamespaceController@getActions', 'as' => 'system_management.SpNamespace.get_actions']);
        Route::get('/sp_namespaces', ['uses' => 'SpNamespaceController@index', 'as' => 'system_management.SpNamespace.index'])->middleware('acl:10');
        Route::get('/sp_namespaces/list-view', ['uses' => 'SpNamespaceController@listView', 'as' => 'system_management.SpNamespace.list_view'])->middleware('acl:11');
        Route::get('/sp_namespaces/create', ['uses' => 'SpNamespaceController@create', 'as' => 'system_management.SpNamespace.create'])->middleware('acl:12');
        Route::post('/sp_namespaces', ['uses' => 'SpNamespaceController@create', 'as' => 'system_management.SpNamespace.store'])->middleware('acl:12');
        Route::get('/sp_namespaces/{id}', ['uses' => 'SpNamespaceController@show', 'as' => 'system_management.SpNamespace.show'])->middleware('acl:13');
        Route::get('/sp_namespaces/{id}/edit', ['uses' => 'SpNamespaceController@edit', 'as' => 'system_management.SpNamespace.edit'])->middleware('acl:14');
        Route::put('/sp_namespaces/{id}', ['uses' => 'SpNamespaceController@edit', 'as' => 'system_management.SpNamespace.update'])->middleware('acl:14');
        Route::delete('/sp_namespaces/{id}', ['uses' => 'SpNamespaceController@destroy', 'as' => 'system_management.SpNamespace.destroy'])->middleware('acl:15');

        Route::get('/departments/get_actions', ['uses' => 'DepartmentController@getActions', 'as' => 'system_management.Department.get_actions']);
        Route::get('/departments', ['uses' => 'DepartmentController@index', 'as' => 'system_management.Department.index'])->middleware('acl:17');
        Route::get('/departments/list-view', ['uses' => 'DepartmentController@listView', 'as' => 'system_management.Department.list_view'])->middleware('acl:18');
        Route::get('/departments/create', ['uses' => 'DepartmentController@create', 'as' => 'system_management.Department.create'])->middleware('acl:19');
        Route::post('/departments', ['uses' => 'DepartmentController@create', 'as' => 'system_management.Department.store'])->middleware('acl:19');
        Route::get('/departments/{id}', ['uses' => 'DepartmentController@show', 'as' => 'system_management.Department.show'])->middleware('acl:20');
        Route::get('/departments/{id}/edit', ['uses' => 'DepartmentController@edit', 'as' => 'system_management.Department.edit'])->middleware('acl:21');
        Route::put('/departments/{id}', ['uses' => 'DepartmentController@edit', 'as' => 'system_management.Department.update'])->middleware('acl:21');
        Route::delete('/departments/{id}', ['uses' => 'DepartmentController@destroy', 'as' => 'system_management.Department.destroy'])->middleware('acl:22');

        Route::get('/resource_groups/get_actions', ['uses' => 'ResourceGroupController@getActions', 'as' => 'system_management.ResourceGroup.get_actions']);
        Route::get('/resource_groups', ['uses' => 'ResourceGroupController@index', 'as' => 'system_management.ResourceGroup.index'])->middleware('acl:24');
        Route::get('/resource_groups/list-view', ['uses' => 'ResourceGroupController@listView', 'as' => 'system_management.ResourceGroup.list_view'])->middleware('acl:25');
        Route::get('/resource_groups/create', ['uses' => 'ResourceGroupController@create', 'as' => 'system_management.ResourceGroup.create'])->middleware('acl:26');
        Route::post('/resource_groups', ['uses' => 'ResourceGroupController@create', 'as' => 'system_management.ResourceGroup.store'])->middleware('acl:26');
        Route::get('/resource_groups/{id}', ['uses' => 'ResourceGroupController@show', 'as' => 'system_management.ResourceGroup.show'])->middleware('acl:27');
        Route::get('/resource_groups/{id}/edit', ['uses' => 'ResourceGroupController@edit', 'as' => 'system_management.ResourceGroup.edit'])->middleware('acl:28');
        Route::put('/resource_groups/{id}', ['uses' => 'ResourceGroupController@edit', 'as' => 'system_management.ResourceGroup.update'])->middleware('acl:28');
        Route::delete('/resource_groups/{id}', ['uses' => 'ResourceGroupController@destroy', 'as' => 'system_management.ResourceGroup.destroy'])->middleware('acl:29');

        Route::get('/resources/get_actions', ['uses' => 'ResourceController@getActions', 'as' => 'system_management.Resource.get_actions']);
        Route::get('/resources', ['uses' => 'ResourceController@index', 'as' => 'system_management.Resource.index'])->middleware('acl:31');
        Route::get('/resources/list-view', ['uses' => 'ResourceController@listView', 'as' => 'system_management.Resource.list_view'])->middleware('acl:32');
        Route::get('/resources/create', ['uses' => 'ResourceController@create', 'as' => 'system_management.Resource.create'])->middleware('acl:33');
        Route::post('/resources', ['uses' => 'ResourceController@create', 'as' => 'system_management.Resource.store'])->middleware('acl:33');
        Route::get('/resources/{id}', ['uses' => 'ResourceController@show', 'as' => 'system_management.Resource.show'])->middleware('acl:34');
        Route::get('/resources/{id}/edit', ['uses' => 'ResourceController@edit', 'as' => 'system_management.Resource.edit'])->middleware('acl:35');
        Route::put('/resources/{id}', ['uses' => 'ResourceController@edit', 'as' => 'system_management.Resource.update'])->middleware('acl:35');
        Route::delete('/resources/{id}', ['uses' => 'ResourceController@destroy', 'as' => 'system_management.Resource.destroy'])->middleware('acl:36');
        Route::post('/resources/change_department', ['uses' => 'ResourceController@changeDepartment', 'as' => 'system_management.Resource.changeDepartment']);
        Route::post('/resources/change_resource_group', ['uses' => 'ResourceController@changeResourceGroup', 'as' => 'system_management.Resource.changeResourceGroup']);

        Route::get('/actions/get_actions', ['uses' => 'ActionController@getActions', 'as' => 'system_management.Action.get_actions']);
        Route::get('/actions', ['uses' => 'ActionController@index', 'as' => 'system_management.Action.index'])->middleware('acl:40');
        Route::get('/actions/list-view', ['uses' => 'ActionController@listView', 'as' => 'system_management.Action.list_view'])->middleware('acl:41');
        Route::get('/actions/create', ['uses' => 'ActionController@create', 'as' => 'system_management.Action.create'])->middleware('acl:42');
        Route::post('/actions', ['uses' => 'ActionController@create', 'as' => 'system_management.Action.store'])->middleware('acl:42');
        Route::get('/actions/{id}', ['uses' => 'ActionController@show', 'as' => 'system_management.Action.show'])->middleware('acl:43');
        Route::get('/actions/{id}/edit', ['uses' => 'ActionController@edit', 'as' => 'system_management.Action.edit'])->middleware('acl:44');
        Route::put('/actions/{id}', ['uses' => 'ActionController@edit', 'as' => 'system_management.Action.update'])->middleware('acl:44');
        Route::delete('/actions/{id}', ['uses' => 'ActionController@destroy', 'as' => 'system_management.Action.destroy'])->middleware('acl:45');
        Route::post('/actions/change_department', ['uses' => 'ActionController@changeDepartment', 'as' => 'system_management.Action.changeDepartment']);


        Route::get('/paths/get_actions', ['uses' => 'PathController@getActions', 'as' => 'system_management.Path.get_actions']);
        Route::get('/paths', ['uses' => 'PathController@index', 'as' => 'system_management.Path.index'])->middleware('acl:48');
        Route::get('/paths/list-view', ['uses' => 'PathController@listView', 'as' => 'system_management.Path.list_view'])->middleware('acl:49');
        Route::get('/paths/create', ['uses' => 'PathController@create', 'as' => 'system_management.Path.create'])->middleware('acl:50');
        Route::post('/paths', ['uses' => 'PathController@create', 'as' => 'system_management.Path.store'])->middleware('acl:50');
        Route::get('/paths/{id}', ['uses' => 'PathController@show', 'as' => 'system_management.Path.show'])->middleware('acl:51');
        Route::get('/paths/{id}/edit', ['uses' => 'PathController@edit', 'as' => 'system_management.Path.edit'])->middleware('acl:52');
        Route::put('/paths/{id}', ['uses' => 'PathController@edit', 'as' => 'system_management.Path.update'])->middleware('acl:52');
        Route::delete('/paths/{id}', ['uses' => 'PathController@destroy', 'as' => 'system_management.Path.destroy'])->middleware('acl:53');
        Route::post('/paths/change_department', ['uses' => 'PathController@changeDepartment', 'as' => 'system_management.Path.changeDepartment']);


        Route::get('/menus/get_actions', ['uses' => 'MenuController@getActions', 'as' => 'system_management.Menu.get_actions']);
        Route::get('/menus', ['uses' => 'MenuController@index', 'as' => 'system_management.Menu.index'])->middleware('acl:56');
        Route::get('/menus/list-view', ['uses' => 'MenuController@listView', 'as' => 'system_management.Menu.list_view'])->middleware('acl:57');
        Route::get('/menus/create', ['uses' => 'MenuController@create', 'as' => 'system_management.Menu.create'])->middleware('acl:58');
        Route::post('/menus', ['uses' => 'MenuController@create', 'as' => 'system_management.Menu.store'])->middleware('acl:58');
        Route::get('/menus/{id}', ['uses' => 'MenuController@show', 'as' => 'system_management.Menu.show'])->middleware('acl:59');
        Route::get('/menus/{id}/edit', ['uses' => 'MenuController@edit', 'as' => 'system_management.Menu.edit'])->middleware('acl:60');
        Route::put('/menus/{id}', ['uses' => 'MenuController@edit', 'as' => 'system_management.Menu.update'])->middleware('acl:60');
        Route::delete('/menus/{id}', ['uses' => 'MenuController@destroy', 'as' => 'system_management.Menu.destroy'])->middleware('acl:61');

        Route::get('/menu_items/get_actions', ['uses' => 'MenuItemController@getActions', 'as' => 'system_management.MenuItem.get_actions']);
        Route::get('/menu_items', ['uses' => 'MenuItemController@index', 'as' => 'system_management.MenuItem.index'])->middleware('acl:63');
        Route::get('/menu_items/list-view', ['uses' => 'MenuItemController@listView', 'as' => 'system_management.MenuItem.list_view'])->middleware('acl:64');
        Route::get('/menu_items/create', ['uses' => 'MenuItemController@create', 'as' => 'system_management.MenuItem.create'])->middleware('acl:65');
        Route::post('/menu_items', ['uses' => 'MenuItemController@create', 'as' => 'system_management.MenuItem.store'])->middleware('acl:65');
        Route::get('/menu_items/{id}', ['uses' => 'MenuItemController@show', 'as' => 'system_management.MenuItem.show'])->middleware('acl:66');
        Route::get('/menu_items/{id}/edit', ['uses' => 'MenuItemController@edit', 'as' => 'system_management.MenuItem.edit'])->middleware('acl:67');
        Route::put('/menu_items/{id}', ['uses' => 'MenuItemController@edit', 'as' => 'system_management.MenuItem.update'])->middleware('acl:67');
        Route::delete('/menu_items/{id}', ['uses' => 'MenuItemController@destroy', 'as' => 'system_management.MenuItem.destroy'])->middleware('acl:68');
        Route::post('/menu_items/change_menu', ['uses' => 'MenuItemController@changeMenu', 'as' => 'system_management.MenuItem.changeMenu']);


        Route::get('/setting_groups/get_actions', ['uses' => 'SettingGroupController@getActions', 'as' => 'system_management.SettingGroup.get_actions']);
        Route::get('/setting_groups', ['uses' => 'SettingGroupController@index', 'as' => 'system_management.SettingGroup.index'])->middleware('acl:71');
        Route::get('/setting_groups/list-view', ['uses' => 'SettingGroupController@listView', 'as' => 'system_management.SettingGroup.list_view'])->middleware('acl:72');
        Route::get('/setting_groups/create', ['uses' => 'SettingGroupController@create', 'as' => 'system_management.SettingGroup.create'])->middleware('acl:73');
        Route::post('/setting_groups', ['uses' => 'SettingGroupController@create', 'as' => 'system_management.SettingGroup.store'])->middleware('acl:73');
        Route::get('/setting_groups/{id}', ['uses' => 'SettingGroupController@show', 'as' => 'system_management.SettingGroup.show'])->middleware('acl:74');
        Route::get('/setting_groups/{id}/edit', ['uses' => 'SettingGroupController@edit', 'as' => 'system_management.SettingGroup.edit'])->middleware('acl:75');
        Route::put('/setting_groups/{id}', ['uses' => 'SettingGroupController@edit', 'as' => 'system_management.SettingGroup.update'])->middleware('acl:75');
        Route::delete('/setting_groups/{id}', ['uses' => 'SettingGroupController@destroy', 'as' => 'system_management.SettingGroup.destroy'])->middleware('acl:76');

        Route::get('/settings/get_actions', ['uses' => 'SettingController@getActions', 'as' => 'system_management.Setting.get_actions']);
        Route::get('/settings', ['uses' => 'SettingController@index', 'as' => 'system_management.Setting.index'])->middleware('acl:78');
        Route::get('/settings/list-view', ['uses' => 'SettingController@listView', 'as' => 'system_management.Setting.list_view'])->middleware('acl:79');
        Route::get('/settings/create', ['uses' => 'SettingController@create', 'as' => 'system_management.Setting.create'])->middleware('acl:80');
        Route::post('/settings', ['uses' => 'SettingController@create', 'as' => 'system_management.Setting.store'])->middleware('acl:80');
        Route::get('/settings/{id}', ['uses' => 'SettingController@show', 'as' => 'system_management.Setting.show'])->middleware('acl:81');
        Route::get('/settings/{id}/edit', ['uses' => 'SettingController@edit', 'as' => 'system_management.Setting.edit'])->middleware('acl:82');
        Route::put('/settings/{id}', ['uses' => 'SettingController@edit', 'as' => 'system_management.Setting.update'])->middleware('acl:82');
        Route::delete('/settings/{id}', ['uses' => 'SettingController@destroy', 'as' => 'system_management.Setting.destroy'])->middleware('acl:83');
    });


});
Route::group(['namespace' => 'Controllers\Admin', 'prefix' => '{lang}'], function () {

    Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'set_department:admin', 'user_info', 'lang', 'remove_additional_params']], function () {


        Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'admin.Dashboard.index'])->middleware('acl:84');


        Route::get('/profile/get_actions', ['uses' => 'ProfileController@getActions', 'as' => 'admin.Profile.get_actions']);
        Route::get('/profile', ['uses' => 'ProfileController@index', 'as' => 'admin.Profile.index']);
        Route::post('/profile/get_form_info', ['uses' => 'ProfileController@getFormInfo', 'as' => 'admin.Profile.getFormInfo']);
        Route::put('/profile/update_basic_info', ['uses' => 'ProfileController@updateBasicInfo', 'as' => 'admin.Profile.updateBasicInfo']);
        Route::put('/profile/update_about_user', ['uses' => 'ProfileController@updateAboutUser', 'as' => 'admin.Profile.updateAboutUser']);
        Route::put('/profile/update_personal_info', ['uses' => 'ProfileController@updatePersonalInfo', 'as' => 'admin.Profile.updatePersonalInfo']);
        Route::put('/profile/update_password', ['uses' => 'ProfileController@updatePassword', 'as' => 'admin.Profile.updatePassword']);


        Route::get('/users/get_actions', ['uses' => 'UserController@getActions', 'as' => 'admin.User.get_actions']);
        Route::get('/users', ['uses' => 'UserController@index', 'as' => 'admin.User.index'])->middleware('acl:93');
        Route::get('/users/list-view', ['uses' => 'UserController@listView', 'as' => 'admin.User.list_view'])->middleware('acl:94');
        Route::get('/users/create', ['uses' => 'UserController@create', 'as' => 'admin.User.create'])->middleware('acl:95');
        Route::post('/users', ['uses' => 'UserController@create', 'as' => 'admin.User.store'])->middleware('acl:95');
        Route::get('/users/{id}', ['uses' => 'UserController@show', 'as' => 'admin.User.show'])->middleware('acl:96');
        Route::get('/users/{id}/edit', ['uses' => 'UserController@edit', 'as' => 'admin.User.edit'])->middleware('acl:97');
        Route::put('/users/{id}', ['uses' => 'UserController@edit', 'as' => 'admin.User.update'])->middleware('acl:97');
        Route::delete('/users/{id}', ['uses' => 'UserController@destroy', 'as' => 'admin.User.destroy'])->middleware('acl:98');


        Route::get('/roles/get_actions', ['uses' => 'RoleController@getActions', 'as' => 'admin.Role.get_actions']);
        Route::get('/roles', ['uses' => 'RoleController@index', 'as' => 'admin.Role.index'])->middleware('acl:100');
        Route::get('/roles/list-view', ['uses' => 'RoleController@listView', 'as' => 'admin.Role.list_view'])->middleware('acl:101');
        Route::get('/roles/create', ['uses' => 'RoleController@create', 'as' => 'admin.Role.create'])->middleware('acl:102');
        Route::post('/roles', ['uses' => 'RoleController@create', 'as' => 'admin.Role.store'])->middleware('acl:102');
        Route::get('/roles/{id}', ['uses' => 'RoleController@show', 'as' => 'admin.Role.show'])->middleware('acl:103');
        Route::get('/roles/{id}/edit', ['uses' => 'RoleController@edit', 'as' => 'admin.Role.edit'])->middleware('acl:104');
        Route::put('/roles/{id}', ['uses' => 'RoleController@edit', 'as' => 'admin.Role.update'])->middleware('acl:104');
        Route::delete('/roles/{id}', ['uses' => 'RoleController@destroy', 'as' => 'admin.Role.destroy'])->middleware('acl:105');


        Route::get('/categories/get_actions', ['uses' => 'CategoryController@getActions', 'as' => 'admin.Category.get_actions']);
        Route::get('/categories', ['uses' => 'CategoryController@index', 'as' => 'admin.Category.index'])->middleware('acl:107');
        Route::get('/categories/list-view', ['uses' => 'CategoryController@listView', 'as' => 'admin.Category.list_view'])->middleware('acl:108');
        Route::get('/categories/create', ['uses' => 'CategoryController@create', 'as' => 'admin.Category.create'])->middleware('acl:109');
        Route::post('/categories', ['uses' => 'CategoryController@create', 'as' => 'admin.Category.store'])->middleware('acl:109');
        Route::get('/categories/{id}', ['uses' => 'CategoryController@show', 'as' => 'admin.Category.show'])->middleware('acl:110');
        Route::get('/categories/{id}/edit', ['uses' => 'CategoryController@edit', 'as' => 'admin.Category.edit'])->middleware('acl:111');
        Route::put('/categories/{id}', ['uses' => 'CategoryController@edit', 'as' => 'admin.Category.update'])->middleware('acl:111');
        Route::delete('/categories/{id}', ['uses' => 'CategoryController@destroy', 'as' => 'admin.Category.destroy'])->middleware('acl:112');

        Route::get('/contents/comments', ['uses' => 'ContentController@indexComment', 'as' => 'admin.Content.indexComment'])->middleware('acl:122');
        Route::get('/contents/get_actions', ['uses' => 'ContentController@getActions', 'as' => 'admin.Content.get_actions']);
        Route::get('/contents', ['uses' => 'ContentController@index', 'as' => 'admin.Content.index'])->middleware('acl:114');
        Route::get('/contents/list-view', ['uses' => 'ContentController@listView', 'as' => 'admin.Content.list_view'])->middleware('acl:115');
        Route::get('/contents/create', ['uses' => 'ContentController@create', 'as' => 'admin.Content.create'])->middleware('acl:116');
        Route::post('/contents', ['uses' => 'ContentController@create', 'as' => 'admin.Content.store'])->middleware('acl:116');
        Route::get('/contents/{id}', ['uses' => 'ContentController@show', 'as' => 'admin.Content.show'])->middleware('acl:117');
        Route::get('/contents/{id}/edit', ['uses' => 'ContentController@edit', 'as' => 'admin.Content.edit'])->middleware('acl:118');
        Route::put('/contents/{id}', ['uses' => 'ContentController@edit', 'as' => 'admin.Content.update'])->middleware('acl:118');
        Route::delete('/contents/{id}', ['uses' => 'ContentController@destroy', 'as' => 'admin.Content.destroy'])->middleware('acl:119');
        Route::get('/contents/file_manager/connector', ['uses' => 'ContentController@showFileManagerConnector', 'as' => 'admin.Content.showFileManagerConnector'])->middleware('acl:120');
        Route::post('/contents/file_manager/connector', ['uses' => 'ContentController@showFileManagerConnector', 'as' => 'admin.Content.showFileManagerConnector'])->middleware('acl:120');
        Route::get('/contents/file_manager/{view}/{input_id?}', ['uses' => 'ContentController@showFileManager', 'as' => 'admin.Content.showFileManager'])->middleware('acl:121');
        Route::get('/contents/comments/list-view', ['uses' => 'ContentController@CommentsListView', 'as' => 'admin.Content.CommentsListView'])->middleware('acl:123');
        Route::get('/contents/comments/{id}/edit', ['uses' => 'ContentController@editComment', 'as' => 'admin.Content.editComment'])->middleware('acl:124');
        Route::put('/contents/comments/{id}', ['uses' => 'ContentController@editComment', 'as' => 'admin.Content.editComment'])->middleware('acl:124');
        Route::get('/contents/comments/{id}', ['uses' => 'ContentController@showComment', 'as' => 'admin.Content.showComment'])->middleware('acl:125');
        Route::delete('/contents/comments/{id}', ['uses' => 'ContentController@destroyComment', 'as' => 'admin.Content.destroyComment'])->middleware('acl:126');
        Route::get('/contents/settings/form', ['uses' => 'ContentController@updateSettings', 'as' => 'admin.Content.updateSettings'])->middleware('acl:127');
        Route::put('/contents/settings/update', ['uses' => 'ContentController@updateSettings', 'as' => 'admin.Content.updateSettings'])->middleware('acl:127');


        Route::get('/products/get_actions', ['uses' => 'ProductController@getActions', 'as' => 'admin.Product.get_actions']);
        Route::get('/products', ['uses' => 'ProductController@index', 'as' => 'admin.Product.index'])->middleware('acl:129');
        Route::get('/products/list-view', ['uses' => 'ProductController@listView', 'as' => 'admin.Product.list_view'])->middleware('acl:130');
        Route::get('/products/create', ['uses' => 'ProductController@create', 'as' => 'admin.Product.create'])->middleware('acl:131');
        Route::post('/products', ['uses' => 'ProductController@create', 'as' => 'admin.Product.store'])->middleware('acl:131');
        Route::get('/products/{id}', ['uses' => 'ProductController@show', 'as' => 'admin.Product.show'])->middleware('acl:132');
        Route::get('/products/{id}/edit', ['uses' => 'ProductController@edit', 'as' => 'admin.Product.edit'])->middleware('acl:133');
        Route::put('/products/{id}', ['uses' => 'ProductController@edit', 'as' => 'admin.Product.update'])->middleware('acl:133');
        Route::delete('/products/{id}', ['uses' => 'ProductController@destroy', 'as' => 'admin.Product.destroy'])->middleware('acl:134');
        Route::get('/products/file_manager/connector', ['uses' => 'ProductController@showFileManagerConnector', 'as' => 'admin.Product.showFileManagerConnector'])->middleware('acl:135');
        Route::post('/products/file_manager/connector', ['uses' => 'ProductController@showFileManagerConnector', 'as' => 'admin.Product.showFileManagerConnector'])->middleware('acl:135');
        Route::get('/products/file_manager/{view}/{input_id?}', ['uses' => 'ProductController@showFileManager', 'as' => 'admin.Product.showFileManager'])->middleware('acl:136');
        Route::get('/products/settings/form', ['uses' => 'ProductController@updateSettings', 'as' => 'admin.Product.updateSettings'])->middleware('acl:137');
        Route::put('/products/settings/update', ['uses' => 'ProductController@updateSettings', 'as' => 'admin.Product.updateSettings'])->middleware('acl:137');


        Route::get('/projects/get_actions', ['uses' => 'ProjectController@getActions', 'as' => 'admin.Project.get_actions']);
        Route::get('/projects', ['uses' => 'ProjectController@index', 'as' => 'admin.Project.index'])->middleware('acl:139');
        Route::get('/projects/list-view', ['uses' => 'ProjectController@listView', 'as' => 'admin.Project.list_view'])->middleware('acl:140');
        Route::get('/projects/create', ['uses' => 'ProjectController@create', 'as' => 'admin.Project.create'])->middleware('acl:141');
        Route::post('/projects', ['uses' => 'ProjectController@create', 'as' => 'admin.Project.store'])->middleware('acl:141');
        Route::get('/projects/{id}', ['uses' => 'ProjectController@show', 'as' => 'admin.Project.show'])->middleware('acl:142');
        Route::get('/projects/{id}/edit', ['uses' => 'ProjectController@edit', 'as' => 'admin.Project.edit'])->middleware('acl:143');
        Route::put('/projects/{id}', ['uses' => 'ProjectController@edit', 'as' => 'admin.Project.update'])->middleware('acl:143');
        Route::delete('/projects/{id}', ['uses' => 'ProjectController@destroy', 'as' => 'admin.Project.destroy'])->middleware('acl:144');
        Route::get('/projects/file_manager/connector', ['uses' => 'ProjectController@showFileManagerConnector', 'as' => 'admin.Project.showFileManagerConnector'])->middleware('acl:145');
        Route::post('/projects/file_manager/connector', ['uses' => 'ProjectController@showFileManagerConnector', 'as' => 'admin.Project.showFileManagerConnector'])->middleware('acl:145');
        Route::get('/projects/file_manager/{view}/{input_id?}', ['uses' => 'ProjectController@showFileManager', 'as' => 'admin.Project.showFileManager'])->middleware('acl:146');
        Route::get('/projects/settings/form', ['uses' => 'ProjectController@updateSettings', 'as' => 'admin.Project.updateSettings'])->middleware('acl:147');
        Route::put('/projects/settings/update', ['uses' => 'ProjectController@updateSettings', 'as' => 'admin.Project.updateSettings'])->middleware('acl:147');


        Route::get('/galleries/get_actions', ['uses' => 'GalleryController@getActions', 'as' => 'admin.Gallery.get_actions']);
        Route::get('/galleries', ['uses' => 'GalleryController@index', 'as' => 'admin.Gallery.index'])->middleware('acl:149');
        Route::get('/galleries/list-view', ['uses' => 'GalleryController@listView', 'as' => 'admin.Gallery.list_view'])->middleware('acl:150');
        Route::get('/galleries/create', ['uses' => 'GalleryController@create', 'as' => 'admin.Gallery.create'])->middleware('acl:151');
        Route::post('/galleries', ['uses' => 'GalleryController@create', 'as' => 'admin.Gallery.store'])->middleware('acl:151');
        Route::get('/galleries/{id}', ['uses' => 'GalleryController@show', 'as' => 'admin.Gallery.show'])->middleware('acl:152');
        Route::get('/galleries/{id}/edit', ['uses' => 'GalleryController@edit', 'as' => 'admin.Gallery.edit'])->middleware('acl:153');
        Route::put('/galleries/{id}', ['uses' => 'GalleryController@edit', 'as' => 'admin.Gallery.update'])->middleware('acl:153');
        Route::delete('/galleries/{id}', ['uses' => 'GalleryController@destroy', 'as' => 'admin.Gallery.destroy'])->middleware('acl:154');
        Route::get('/galleries/settings/form', ['uses' => 'GalleryController@updateSettings', 'as' => 'admin.Gallery.updateSettings'])->middleware('acl:155');
        Route::put('/galleries/settings/update', ['uses' => 'GalleryController@updateSettings', 'as' => 'admin.Gallery.updateSettings'])->middleware('acl:155');
        Route::post('/galleries/store_image', ['uses' => 'GalleryController@storeImage', 'as' => 'admin.Gallery.storeImage'])->middleware('acl:156');
        Route::post('/galleries/remove_image', ['uses' => 'GalleryController@removeImage', 'as' => 'admin.Gallery.removeImage'])->middleware('acl:157');

        Route::get('/gallery_items/get_actions', ['uses' => 'GalleryItemController@getActions', 'as' => 'admin.GalleryItem.get_actions']);
        Route::get('/gallery_items', ['uses' => 'GalleryItemController@index', 'as' => 'admin.GalleryItem.index'])->middleware('acl:159');
        Route::get('/gallery_items/list-view', ['uses' => 'GalleryItemController@listView', 'as' => 'admin.GalleryItem.list_view'])->middleware('acl:160');
        Route::get('/gallery_items/create', ['uses' => 'GalleryItemController@create', 'as' => 'admin.GalleryItem.create'])->middleware('acl:161');
        Route::post('/gallery_items', ['uses' => 'GalleryItemController@create', 'as' => 'admin.GalleryItem.store'])->middleware('acl:161');
        Route::get('/gallery_items/{id}', ['uses' => 'GalleryItemController@show', 'as' => 'admin.GalleryItem.show'])->middleware('acl:162');
        Route::get('/gallery_items/{id}/edit', ['uses' => 'GalleryItemController@edit', 'as' => 'admin.GalleryItem.edit'])->middleware('acl:163');
        Route::put('/gallery_items/{id}', ['uses' => 'GalleryItemController@edit', 'as' => 'admin.GalleryItem.update'])->middleware('acl:163');
        Route::delete('/gallery_items/{id}', ['uses' => 'GalleryItemController@destroy', 'as' => 'admin.GalleryItem.destroy'])->middleware('acl:164');
        Route::get('/gallery_items/settings/form', ['uses' => 'GalleryItemController@updateSettings', 'as' => 'admin.GalleryItem.updateSettings'])->middleware('acl:165');
        Route::put('/gallery_items/settings/update', ['uses' => 'GalleryItemController@updateSettings', 'as' => 'admin.GalleryItem.updateSettings'])->middleware('acl:165');


        Route::get('/pages/get_actions', ['uses' => 'PageController@getActions', 'as' => 'admin.Page.get_actions']);
        Route::get('/pages', ['uses' => 'PageController@index', 'as' => 'admin.Page.index'])->middleware('acl:167');
        Route::get('/pages/list-view', ['uses' => 'PageController@listView', 'as' => 'admin.Page.list_view'])->middleware('acl:168');
        Route::get('/pages/create', ['uses' => 'PageController@create', 'as' => 'admin.Page.create'])->middleware('acl:169');
        Route::post('/pages', ['uses' => 'PageController@create', 'as' => 'admin.Page.store'])->middleware('acl:169');
        Route::get('/pages/{id}', ['uses' => 'PageController@show', 'as' => 'admin.Page.show'])->middleware('acl:170');
        Route::get('/pages/{id}/edit', ['uses' => 'PageController@edit', 'as' => 'admin.Page.edit'])->middleware('acl:171');
        Route::put('/pages/{id}', ['uses' => 'PageController@edit', 'as' => 'admin.Page.update'])->middleware('acl:171');
        Route::delete('/pages/{id}', ['uses' => 'PageController@destroy', 'as' => 'admin.Page.destroy'])->middleware('acl:172');
        Route::get('/pages/file_manager/connector', ['uses' => 'PageController@showFileManagerConnector', 'as' => 'admin.Page.showFileManagerConnector'])->middleware('acl:173');
        Route::post('/pages/file_manager/connector', ['uses' => 'PageController@showFileManagerConnector', 'as' => 'admin.Page.showFileManagerConnector'])->middleware('acl:173');
        Route::get('/pages/file_manager/{view}/{input_id?}', ['uses' => 'PageController@showFileManager', 'as' => 'admin.Page.showFileManager'])->middleware('acl:174');
        Route::get('/pages/comments', ['uses' => 'PageController@indexComment', 'as' => 'admin.Page.indexComment'])->middleware('acl:175');
        Route::get('/pages/comments/list-view', ['uses' => 'PageController@CommentsListView', 'as' => 'admin.Page.CommentsListView'])->middleware('acl:176');
        Route::get('/pages/comments/{id}/edit', ['uses' => 'PageController@editComment', 'as' => 'admin.Page.editComment'])->middleware('acl:177');
        Route::put('/pages/comments/{id}', ['uses' => 'PageController@editComment', 'as' => 'admin.Page.editComment'])->middleware('acl:177');
        Route::get('/pages/comments/{id}', ['uses' => 'PageController@showComment', 'as' => 'admin.Page.showComment'])->middleware('acl:178');
        Route::delete('/pages/comments/{id}', ['uses' => 'PageController@destroyComment', 'as' => 'admin.Page.destroyComment'])->middleware('acl:179');
        Route::get('/pages/settings/form', ['uses' => 'PageController@updateSettings', 'as' => 'admin.Page.updateSettings'])->middleware('acl:180');
        Route::put('/pages/settings/update', ['uses' => 'PageController@updateSettings', 'as' => 'admin.Page.updateSettings'])->middleware('acl:180');


        Route::get('/slider_groups/get_actions', ['uses' => 'SliderGroupController@getActions', 'as' => 'admin.SliderGroup.get_actions']);
        Route::get('/slider_groups', ['uses' => 'SliderGroupController@index', 'as' => 'admin.SliderGroup.index'])->middleware('acl:182');
        Route::get('/slider_groups/list-view', ['uses' => 'SliderGroupController@listView', 'as' => 'admin.SliderGroup.list_view'])->middleware('acl:183');
        Route::get('/slider_groups/create', ['uses' => 'SliderGroupController@create', 'as' => 'admin.SliderGroup.create'])->middleware('acl:184');
        Route::post('/slider_groups', ['uses' => 'SliderGroupController@create', 'as' => 'admin.SliderGroup.store'])->middleware('acl:184');
        Route::get('/slider_groups/{id}', ['uses' => 'SliderGroupController@show', 'as' => 'admin.SliderGroup.show'])->middleware('acl:185');
        Route::get('/slider_groups/{id}/edit', ['uses' => 'SliderGroupController@edit', 'as' => 'admin.SliderGroup.edit'])->middleware('acl:186');
        Route::put('/slider_groups/{id}', ['uses' => 'SliderGroupController@edit', 'as' => 'admin.SliderGroup.update'])->middleware('acl:186');
        Route::delete('/slider_groups/{id}', ['uses' => 'SliderGroupController@destroy', 'as' => 'admin.SliderGroup.destroy'])->middleware('acl:187');

        Route::get('/sliders/get_actions', ['uses' => 'SliderController@getActions', 'as' => 'admin.Slider.get_actions']);
        Route::get('/sliders', ['uses' => 'SliderController@index', 'as' => 'admin.Slider.index'])->middleware('acl:189');
        Route::get('/sliders/list-view', ['uses' => 'SliderController@listView', 'as' => 'admin.Slider.list_view'])->middleware('acl:190');
        Route::get('/sliders/create', ['uses' => 'SliderController@create', 'as' => 'admin.Slider.create'])->middleware('acl:191');
        Route::post('/sliders', ['uses' => 'SliderController@create', 'as' => 'admin.Slider.store'])->middleware('acl:191');
        Route::get('/sliders/{id}', ['uses' => 'SliderController@show', 'as' => 'admin.Slider.show'])->middleware('acl:192');
        Route::get('/sliders/{id}/edit', ['uses' => 'SliderController@edit', 'as' => 'admin.Slider.edit'])->middleware('acl:193');
        Route::put('/sliders/{id}', ['uses' => 'SliderController@edit', 'as' => 'admin.Slider.update'])->middleware('acl:193');
        Route::delete('/sliders/{id}', ['uses' => 'SliderController@destroy', 'as' => 'admin.Slider.destroy'])->middleware('acl:194');
        Route::get('/sliders/file_manager/connector', ['uses' => 'SliderController@showFileManagerConnector', 'as' => 'admin.Slider.showFileManagerConnector'])->middleware('acl:195');
        Route::post('/sliders/file_manager/connector', ['uses' => 'SliderController@showFileManagerConnector', 'as' => 'admin.Slider.showFileManagerConnector'])->middleware('acl:195');
        Route::get('/sliders/file_manager/{view}/{input_id?}', ['uses' => 'SliderController@showFileManager', 'as' => 'admin.Slider.showFileManager'])->middleware('acl:196');
        Route::get('/sliders/settings/form', ['uses' => 'SliderController@updateSettings', 'as' => 'admin.Slider.updateSettings'])->middleware('acl:197');
        Route::put('/sliders/settings/update', ['uses' => 'SliderController@updateSettings', 'as' => 'admin.Slider.updateSettings'])->middleware('acl:197');


        Route::get('/tags/get_actions', ['uses' => 'TagController@getActions', 'as' => 'admin.Tag.get_actions']);
        Route::get('/tags', ['uses' => 'TagController@index', 'as' => 'admin.Tag.index'])->middleware('acl:199');
        Route::get('/tags/list-view', ['uses' => 'TagController@listView', 'as' => 'admin.Tag.list_view'])->middleware('acl:200');
        Route::get('/tags/create', ['uses' => 'TagController@create', 'as' => 'admin.Tag.create'])->middleware('acl:201');
        Route::post('/tags', ['uses' => 'TagController@create', 'as' => 'admin.Tag.store'])->middleware('acl:201');
        Route::get('/tags/{id}', ['uses' => 'TagController@show', 'as' => 'admin.Tag.show'])->middleware('acl:202');
        Route::get('/tags/{id}/edit', ['uses' => 'TagController@edit', 'as' => 'admin.Tag.edit'])->middleware('acl:203');
        Route::put('/tags/{id}', ['uses' => 'TagController@edit', 'as' => 'admin.Tag.update'])->middleware('acl:203');
        Route::delete('/tags/{id}', ['uses' => 'TagController@destroy', 'as' => 'admin.Tag.destroy'])->middleware('acl:204');


        Route::get('/static_menus/get_actions', ['uses' => 'StaticMenuController@getActions', 'as' => 'admin.StaticMenu.get_actions']);
        Route::get('/static_menus', ['uses' => 'StaticMenuController@index', 'as' => 'admin.StaticMenu.index'])->middleware('acl:206');
        Route::get('/static_menus/list-view', ['uses' => 'StaticMenuController@listView', 'as' => 'admin.StaticMenu.list_view'])->middleware('acl:207');
        Route::get('/static_menus/create', ['uses' => 'StaticMenuController@create', 'as' => 'admin.StaticMenu.create'])->middleware('acl:208');
        Route::post('/static_menus', ['uses' => 'StaticMenuController@create', 'as' => 'admin.StaticMenu.store'])->middleware('acl:208');
        Route::get('/static_menus/{id}', ['uses' => 'StaticMenuController@show', 'as' => 'admin.StaticMenu.show'])->middleware('acl:209');
        Route::get('/static_menus/{id}/edit', ['uses' => 'StaticMenuController@edit', 'as' => 'admin.StaticMenu.edit'])->middleware('acl:210');
        Route::put('/static_menus/{id}', ['uses' => 'StaticMenuController@edit', 'as' => 'admin.StaticMenu.update'])->middleware('acl:210');
        Route::delete('/static_menus/{id}', ['uses' => 'StaticMenuController@destroy', 'as' => 'admin.StaticMenu.destroy'])->middleware('acl:211');


        Route::get('/attachments/get_actions', ['uses' => 'AttachmentController@getActions', 'as' => 'admin.Attachment.get_actions']);
        Route::get('/attachments', ['uses' => 'AttachmentController@index', 'as' => 'admin.Attachment.index'])->middleware('acl:213');
        Route::get('/attachments/list-view', ['uses' => 'AttachmentController@listView', 'as' => 'admin.Attachment.list_view'])->middleware('acl:214');
        Route::get('/attachments/create', ['uses' => 'AttachmentController@create', 'as' => 'admin.Attachment.create'])->middleware('acl:215');
        Route::post('/attachments', ['uses' => 'AttachmentController@create', 'as' => 'admin.Attachment.store'])->middleware('acl:215');
        Route::get('/attachments/{id}', ['uses' => 'AttachmentController@show', 'as' => 'admin.Attachment.show'])->middleware('acl:216');
        Route::get('/attachments/{id}/edit', ['uses' => 'AttachmentController@edit', 'as' => 'admin.Attachment.edit'])->middleware('acl:217');
        Route::put('/attachments/{id}', ['uses' => 'AttachmentController@edit', 'as' => 'admin.Attachment.update'])->middleware('acl:217');
        Route::delete('/attachments/{id}', ['uses' => 'AttachmentController@destroy', 'as' => 'admin.Attachment.destroy'])->middleware('acl:218');
        Route::get('/attachments/file_manager/connector', ['uses' => 'AttachmentController@showFileManagerConnector', 'as' => 'admin.Attachment.showFileManagerConnector'])->middleware('acl:219');
        Route::post('/attachments/file_manager/connector', ['uses' => 'AttachmentController@showFileManagerConnector', 'as' => 'admin.Attachment.showFileManagerConnector'])->middleware('acl:219');
        Route::get('/attachments/file_manager/{view}/{input_id?}', ['uses' => 'AttachmentController@showFileManager', 'as' => 'admin.Attachment.showFileManager'])->middleware('acl:220');
        Route::get('/attachments/settings/form', ['uses' => 'AttachmentController@updateSettings', 'as' => 'admin.Attachment.updateSettings'])->middleware('acl:221');
        Route::put('/attachments/settings/update', ['uses' => 'AttachmentController@updateSettings', 'as' => 'admin.Attachment.updateSettings'])->middleware('acl:221');
        Route::post('/attachments/change_attachmentable_type', ['uses' => 'AttachmentController@changeAttachmentableType', 'as' => 'admin.Attachment.changeAttachmentableType']);


        Route::get('/settings', ['uses' => 'SettingController@index', 'as' => 'admin.site_management.Setting.index'])->middleware('acl:223');
        Route::get('/settings/update_all_settings', ['uses' => 'SettingController@updateAllSettings', 'as' => 'admin.Setting.updateAllSettings'])->middleware('acl:224');
        Route::put('/settings/update_all_settings', ['uses' => 'SettingController@updateAllSettings', 'as' => 'admin.Setting.updateAllSettings'])->middleware('acl:224');


        Route::get('/feedback/get_actions', ['uses' => 'FeedbackController@getActions', 'as' => 'admin.Feedback.get_actions']);
        Route::get('/feedback', ['uses' => 'FeedbackController@index', 'as' => 'admin.Feedback.index'])->middleware('acl:226');
        Route::get('/feedback/list-view', ['uses' => 'FeedbackController@listView', 'as' => 'admin.Feedback.list_view'])->middleware('acl:227');
        Route::get('/feedback/create', ['uses' => 'FeedbackController@create', 'as' => 'admin.Feedback.create'])->middleware('acl:228');
        Route::post('/feedback', ['uses' => 'FeedbackController@create', 'as' => 'admin.Feedback.store'])->middleware('acl:228');
        Route::get('/feedback/{id}', ['uses' => 'FeedbackController@show', 'as' => 'admin.Feedback.show'])->middleware('acl:229');
        Route::get('/feedback/{id}/edit', ['uses' => 'FeedbackController@edit', 'as' => 'admin.Feedback.edit'])->middleware('acl:230');
        Route::put('/feedback/{id}', ['uses' => 'FeedbackController@edit', 'as' => 'admin.Feedback.update'])->middleware('acl:230');
        Route::delete('/feedback/{id}', ['uses' => 'FeedbackController@destroy', 'as' => 'admin.Feedback.destroy'])->middleware('acl:231');
    });


});
Route::group(['namespace' => 'Controllers\Profile', 'prefix' => '{lang}'], function () {

    Route::group(['prefix' => 'profile', 'middleware' => ['auth:web', 'set_department:profile', 'user_info', 'lang', 'remove_additional_params']], function () {

    });


});


Route::group(['namespace' => 'Controllers\Auth'], function () {
    Route::group(['prefix' => '{lang}/{department}', 'middleware' => ['set_department', 'lang']], function () {
        Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login_form');
        Route::post('login', 'AdminLoginController@login')->name('admin.login');
        Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');
    });
});
Route::get('{lang}/access_denied', function ($lang) {
    return view('appnegar::access_denied');
})->name('access_denied')->middleware('lang');