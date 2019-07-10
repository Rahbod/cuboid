import VueRouter from 'vue-router';

import RouterViewApp from '../view_components/RouterViewApp.vue';
import NestedRouterViewApp from '../view_components/NestedRouterViewApp.vue';

const dashboard = resolve => require(['../views/Dashboard'], resolve);

const ListView = resolve => {
    require.ensure(['../views/ListView.vue'], () => {
        resolve(require('../views/ListView.vue'))
    })
};
const FormView = resolve => {
    require.ensure(['../views/FormView.vue'], () => {
        resolve(require('../views/FormView.vue'))
    })
};
const ShowView = resolve => {
    require.ensure(['../views/ShowView.vue'], () => {
        resolve(require('../views/ShowView.vue'))
    })
};
const ResourceView = resolve => {
    require.ensure(['../views/ResourceView.vue'], () => {
        resolve(require('../views/ResourceView.vue'))
    })
};
const SingleView = resolve => {
    require.ensure(['../views/SingleView.vue'], () => {
        resolve(require('../views/SingleView.vue'))
    })
};
const FileManagerView = resolve => {
    require.ensure(['../views/FileManagerView.vue'], () => {
        resolve(require('../views/FileManagerView.vue'))
    })
};
const UpdateSettingFormView = resolve => {
    require.ensure(['../views/settings/FormView.vue'], () => {
        resolve(require('../views/settings/FormView.vue'))
    })
};
const RoleFormView=resolve=>{
    require.ensure(['../views/roles/FormView.vue'],()=>{
        resolve(require('../views/roles/FormView.vue'))
    })
};

export default new VueRouter({
    routes: [
        {
            component: SingleView,
            path: '/profile',
            meta: {resource: 'profile',action: 'show'},
        },

        {
            component: RouterViewApp,
            path: '/users',
            meta: { resource: 'users' },
            children:[
                {
                    component: ResourceView,
                    path: '/',
                    name: 'users-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'users-list-view',
                    meta: { action: 'listView' },
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'users-create',
                    meta: { action: 'create' },
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'users-edit',
                    meta: { action: 'edit' },
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'users-show',
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/settings',
            meta: { resource: 'settings' },
            children:[
                {
                    component: ResourceView,
                    path: '/',
                    name: 'settings-resource-view',
                },
                {
                    component: UpdateSettingFormView,
                    path: 'update_all_settings',
                    name: 'update_all_settings',
                    meta: { action: 'updateAllSettings' },
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/roles',
            meta: { resource: 'roles' },
            children:[
                {
                    component: ResourceView,
                    path: '/',
                    name: 'roles-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'roles-list-view',
                    meta: { action: 'listView' },
                },
                {
                    component: RoleFormView,
                    path: 'create',
                    name: 'roles-create',
                    meta: { action: 'create' },
                },
                {
                    component: RoleFormView,
                    path: ':id/edit',
                    name: 'roles-edit',
                    meta: { action: 'edit' },
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'roles-show',
                },

            ]
        },

        {
            component: RouterViewApp,
            path: '/categories',
            meta: {resource: 'categories'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'categories-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'categories-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'categories-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'categories-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'categories-show',
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/contents',
            meta: {resource: 'contents'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'contents-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'contents-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'contents-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'contents-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'contents-show',
                    meta: {action: 'show'},
                },
                {
                    component: ListView,
                    path: 'comments/list-view',
                    name: 'contents-comments-list-view',
                    meta: {action: 'listView', resource: 'comments',base_resource: 'contents', use_base_resource: true},
                },
                {
                    component: FormView,
                    path: 'comments/:id/edit',
                    name: 'contents-comments-edit',
                    meta: {action: 'edit', resource: 'comments',base_resource: 'contents', use_base_resource: true},
                },
                {
                    component: ShowView,
                    path: 'comments/:id',
                    name: 'contents-comments-show',
                    meta: {action: 'show', resource: 'comments',base_resource: 'contents', use_base_resource: true},
                },
                {
                    component: FileManagerView,
                    path: 'file_manager/index',
                    name: 'contents-file-manager-show',
                    meta: {action: 'showFileManager'},
                },
                {
                    component: UpdateSettingFormView,
                    path: 'settings/form',
                    name: 'contents-settings-form',
                    meta: {action: 'updateSettings'},
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/pages',
            meta: {resource: 'pages'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'pages-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'pages-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'pages-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'pages-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'pages-show',
                    meta: {action: 'show'},
                },
                {
                    component: ListView,
                    path: 'comments/list-view',
                    name: 'pages-comments-list-view',
                    meta: {action: 'listView', resource: 'comments',base_resource: 'pages', use_base_resource: true},
                },
                {
                    component: FormView,
                    path: 'comments/:id/edit',
                    name: 'pages-comments-edit',
                    meta: {action: 'edit', resource: 'comments',base_resource: 'pages', use_base_resource: true},
                },
                {
                    component: ShowView,
                    path: 'comments/:id',
                    name: 'pages-comments-show',
                    meta: {action: 'show', resource: 'comments',base_resource: 'pages', use_base_resource: true},
                },
                {
                    component: FileManagerView,
                    path: 'file_manager/index',
                    name: 'pages-file-manager-show',
                    meta: {action: 'showFileManager'},
                },
                {
                    component: UpdateSettingFormView,
                    path: 'settings/form',
                    name: 'pages-settings-form',
                    meta: {action: 'updateSettings'},
                },

            ]
        },

        {
            component: NestedRouterViewApp,
            path: '/sliders',
            meta: { base_resource: 'sliders' },
            children:[
                {
                    component: ResourceView,
                    path: '/',
                    name: 'base_sliders-resource-view',
                },
                {
                    component: RouterViewApp,
                    path: 'slider_groups',
                    meta: { resource: 'slider_groups' },
                    children:[
                        {
                            component: ResourceView,
                            path: '/',
                            name: 'slider_groups-resource-view',
                        },
                        {
                            component: ListView,
                            path: 'list-view',
                            name: 'slider_groups-list-view',
                            meta: { action: 'listView'},
                        },
                        {
                            component: FormView,
                            path: 'create',
                            name: 'slider_groups-create',
                            meta: { action: 'create' },
                        },
                        {
                            component: FormView,
                            path: ':id/edit',
                            name: 'slider_groups-edit',
                            meta: { action: 'edit' },
                        },
                        {
                            component: ShowView,
                            path: ':id',
                            name: 'slider_groups-show',
                            meta: { action: 'show' },
                        },

                    ]
                },
                {
                    component: RouterViewApp,
                    path: 'sliders',
                    meta: { resource: 'sliders' },
                    children:[
                        {
                            component: ResourceView,
                            path: '/',
                            name: 'sliders-resource-view',
                        },
                        {
                            component: ListView,
                            path: 'list-view',
                            name: 'sliders-list-view',
                            meta: { action: 'listView' },
                        },
                        {
                            component: FormView,
                            path: 'create',
                            name: 'sliders-create',
                            meta: { action: 'create' },
                        },
                        {
                            component: FormView,
                            path: ':id/edit',
                            name: 'sliders-edit',
                            meta: { action: 'edit' },
                        },
                        {
                            component: ShowView,
                            path: ':id',
                            name: 'sliders-show',
                            meta: { action: 'show' },
                        },
                        {
                            component: FileManagerView,
                            path: 'file_manager/index',
                            name: 'sliders-file-manager-show',
                            meta: {action: 'showFileManager'},
                        },
                        {
                            component: UpdateSettingFormView,
                            path: 'settings/form',
                            name: 'sliders-settings-form',
                            meta: {action: 'updateSettings'},
                        },
                    ]
                },
            ]
        },
        {
            component: RouterViewApp,
            path: '/tags',
            meta: {resource: 'tags'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'tags-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'tags-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'tags-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'tags-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'tags-show',
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/static_menus',
            meta: {resource: 'static_menus'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'static_menus-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'static_menus-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'static_menus-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'static_menus-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'static_menus-show',
                },

            ]
        },

        {
            component: NestedRouterViewApp,
            path: '/galleries',
            meta: { base_resource: 'galleries' },
            children:[
                {
                    component: ResourceView,
                    path: '/',
                    name: 'base_galleries-resource-view',
                },
                {
                    component: RouterViewApp,
                    path: 'galleries',
                    meta: { resource: 'galleries' },
                    children:[
                        {
                            component: ResourceView,
                            path: '/',
                            name: 'galleries-resource-view',
                        },
                        {
                            component: ListView,
                            path: 'list-view',
                            name: 'galleries-list-view',
                            meta: { action: 'listView'},
                        },
                        {
                            component: FormView,
                            path: 'create',
                            name: 'galleries-create',
                            meta: { action: 'create' },
                        },
                        {
                            component: FormView,
                            path: ':id/edit',
                            name: 'galleries-edit',
                            meta: { action: 'edit' },
                        },
                        {
                            component: ShowView,
                            path: ':id',
                            name: 'galleries-show',
                            meta: { action: 'show' },
                        },
                        {
                            component: UpdateSettingFormView,
                            path: 'settings/form',
                            name: 'galleries-settings-form',
                            meta: {action: 'updateSettings'},
                        },

                    ]
                },
                {
                    component: RouterViewApp,
                    path: 'gallery_items',
                    meta: { resource: 'gallery_items' },
                    children:[
                        {
                            component: ResourceView,
                            path: '/',
                            name: 'gallery_items-resource-view',
                        },
                        {
                            component: ListView,
                            path: 'list-view',
                            name: 'gallery_items-list-view',
                            meta: { action: 'listView' },
                        },
                        {
                            component: FormView,
                            path: 'create',
                            name: 'sliders-create',
                            meta: { action: 'create' },
                        },
                        {
                            component: FormView,
                            path: ':id/edit',
                            name: 'gallery_items-edit',
                            meta: { action: 'edit' },
                        },
                        {
                            component: ShowView,
                            path: ':id',
                            name: 'gallery_items-show',
                            meta: { action: 'show' },
                        },
                        {
                            component: UpdateSettingFormView,
                            path: 'settings/form',
                            name: 'sliders-settings-form',
                            meta: {action: 'updateSettings'},
                        },
                    ]
                },
            ]
        },


        {
            component: RouterViewApp,
            path: '/attachments',
            meta: {resource: 'attachments'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'attachments-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'attachments-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'attachments-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'attachments-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'attachments-show',
                },
                {
                    component: FileManagerView,
                    path: 'file_manager/index',
                    name: 'attachments-file-manager-show',
                    meta: {action: 'showFileManager'},
                },
                {
                    component: UpdateSettingFormView,
                    path: 'settings/form',
                    name: 'attachments-settings-form',
                    meta: {action: 'updateSettings'},
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/feedback',
            meta: {resource: 'feedback'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'feedback-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'feedback-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'feedback-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'feedback-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'feedback-show',
                },

            ]
        },

        {
            component: RouterViewApp,
            path: '/products',
            meta: {resource: 'products'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'products-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'products-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'products-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'products-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'products-show',
                },
                {
                    component: FileManagerView,
                    path: 'file_manager/index',
                    name: 'products-file-manager-show',
                    meta: {action: 'showFileManager'},
                },
                {
                    component: UpdateSettingFormView,
                    path: 'settings/form',
                    name: 'products-settings-form',
                    meta: {action: 'updateSettings'},
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/projects',
            meta: {resource: 'projects'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'projects-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'projects-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'projects-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'projects-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'projects-show',
                },
                {
                    component: FileManagerView,
                    path: 'file_manager/index',
                    name: 'projects-file-manager-show',
                    meta: {action: 'showFileManager'},
                },
                {
                    component: UpdateSettingFormView,
                    path: 'settings/form',
                    name: 'projects-settings-form',
                    meta: {action: 'updateSettings'},
                },

            ]
        },
        {
            component: RouterViewApp,
            path: '/faqs',
            meta: {resource: 'faqs'},
            children: [
                {
                    component: ResourceView,
                    path: '/',
                    name: 'faqs-resource-view',
                },
                {
                    component: ListView,
                    path: 'list-view',
                    name: 'faqs-list-view',
                    meta: {action: 'listView'},
                },
                {
                    component: FormView,
                    path: 'create',
                    name: 'faqs-create',
                    meta: {action: 'create'},
                },
                {
                    component: FormView,
                    path: ':id/edit',
                    name: 'faqs-edit',
                    meta: {action: 'edit'},
                },
                {
                    component: ShowView,
                    path: ':id',
                    name: 'faqs-show',
                },
                {
                    component: FileManagerView,
                    path: 'file_manager/index',
                    name: 'faqs-file-manager-show',
                    meta: {action: 'showFileManager'},
                },
            ]
        },
    ]
});