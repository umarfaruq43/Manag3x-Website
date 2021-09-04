<?php
use server\core\View;

function view(string $view,$user = "editor") : void {
    switch ($view) {
        default: View::render("error",["error",
            "page_title" => '{'.$view.'} Page not Found - Error 404',
            "page_view" => "error",
            "css" => ["pages/error/style-400"],
            "body_class" => "error404 text-center",
            "core_script" => false,
            "page_type" => "error",
            "error_root" => "editor/",
            "error_code" => "404",
            "page_type_root" => "editor/",
            "page_root" => "editor",
        ]); break;
        case "dashboard" :
            View::render($view,[
            "crumbs" => [
                ["page_title" => "Dashboard"],
            ],
            "page_title" => "Dashboard",
            "page_type" => "editor",
            "page_view" =>  "dashboard",
            "plugin_css" => ["apex/apexcharts"],
            "plugin_js" => ["apex/apexcharts.min"],
            "css" => ["widgets/modules-widgets","components/custom-modal"],
            // "js" => ["editor/dashboard"],
            // "custom_js" => ["editor/dashboard"]
        ]);
        break;
        case "articles" :
            View::render($view,[
                "page_title" => "Articles",
                "page_type" => "editor",
                "page_view" =>  "articles",
                "css" => ["components/custom-list-group","components/tabs-accordian/custom-tabs"],
                "js" => [],
                "plugin_css" => ["select2/select2.min"],
                "custom_js" => ["articles","moment.min"],
                "plugin_js" => ["select2/select2.min","bootstrap-multiselect/bootstrap-multiselect.min"],
            ]);
        break;
        case "tasks" :
            View::render($view,[
                "page_title" => "All Tasks",
                "page_type" => "editor",
                "page_view" =>  "tasks",
                "css" => ["components/custom-list-group"],
                "custom_css" => ["multi"],
                "plugin_css" => ["select2/select2.min"],
                "custom_js" => ["writer-editor/task","moment.min"],
                "plugin_js" => [],
            ]);
        break;
        case "a-task" :
            View::render($view,[
                "page_title" => "Active Tasks",
                "page_type" => "editor",
                "page_view" =>  "a-task",
                "css" => ["components/custom-list-group"],
                "custom_css" => ["multi"],
                "plugin_css" => ["select2/select2.min"],
                "custom_js" => ["writer-editor/task","moment.min"],
                "plugin_js" => [],
            ]);
        break;
        case "n-task" :
            View::render($view,[
                "page_title" => "New Tasks",
                "page_type" => "editor",
                "page_view" =>  "n-task",
                "css" => ["components/custom-list-group"],
                "custom_css" => ["multi"],
                "plugin_css" => ["select2/select2.min"],
                "custom_js" => ["writer-editor/task","moment.min"],
                "plugin_js" => [],
            ]);
        break;
        case "correction" :
            View::render($view,[
                "page_title" => "Needed Corrections",
                "page_type" => "editor",
                "page_view" =>  "correction",
                "css" => ["components/custom-list-group"],
                "custom_css" => ["multi"],
                "plugin_css" => ["select2/select2.min"],
                "custom_js" => ["editor-editor/task","moment.min","chat"],
                "plugin_js" => [],
            ]);
        break;
        case "message" :
            View::render($view,[
                "page_title" => "Messages",
                "page_type" => "editor",
                "page_view" =>  "message",
                "css" => ["apps/mailing-chat"],
                "js" => ["apps/mailbox-chat"],
                "custom_js" => ["chat","moment.min"],
            ]);
        break;
        case "notifications" :
            View::render("notification",[
                "page_title" => "Notifications",
                "page_type" => $user,
                "page_view" =>  "notification",
                "css" => ["components/custom-list-group"],
                "custom_js" => ["notification","moment.min"],
            ]);
        break;
        
    }
}