@echo off

echo Cleaning Directories
RMDIR /S /Q Documentation
RMDIR /S /Q nbproject
RMDIR /S /Q .git

echo Cleaning Development Files
DEL /S /Q .gitignore

echo Cleaning Javascript Development Files
DEL /S /Q .\Public\Scripts\main.js
DEL /S /Q .\Public\Scripts\Dandelion\dandelion.js
DEL /S /Q .\Public\Scripts\Dandelion\dandelion.MVC.js
DEL /S /Q .\Public\Scripts\Dashboard\dashboard.js
DEL /S /Q .\Public\Vendor\bootstrap-3\js\bootstrap.js
DEL /S /Q .\Public\Vendor\bootstrap-3\js\daterangepicker.js
DEL /S /Q .\Public\Vendor\select2\js\select2.full.js
DEL /S /Q .\Public\Vendor\jstree\jstree.js
DEL /S /Q .\Public\Vendor\dropzone\dropzone.js


echo Cleaning Stylesheet Development Files
DEL /S /Q .\Public\Vendor\bootstrap-3\css\bootstrap.css
DEL /S /Q .\Public\Vendor\bootstrap-3\css\bootstrap.css.map
DEL /S /Q .\Public\Vendor\bootstrap-3\css\bootstrap-theme.css
DEL /S /Q .\Public\Vendor\bootstrap-3\css\bootstrap-theme.css.map
DEL /S /Q .\Public\Vendor\bootstrap-3\css\bootstrap-select.css
DEL /S /Q .\Public\Vendor\bootstrap-3\css\daterangepicker-bs3.css
DEL /S /Q .\Public\Vendor\select2\css\select2.css
DEL /S /Q .\Public\Vendor\select2\css\select2-bootstrap.css

DEL /S /Q .\Public\Vendor\dropzone\css\dropzone.css
DEL /S /Q .\Public\Vendor\jstree\themes\default\style.css

DEL /S /Q .\Public\Shared\Styles\main.css

DEL /S /Q .\Public\Styles\BinToBin\index.css
DEL /S /Q .\Public\Styles\Dashboard\index.css


echo Cleaning Creator
RMDIR /S /Q .\Application\Controllers\Creator
RMDIR /S /Q .\Application\Views\Creator
RMDIR /S /Q .\Public\Scripts\Creator
DEL /S /Q .\Application\Views\Shared\Creator.Page.php
pause
