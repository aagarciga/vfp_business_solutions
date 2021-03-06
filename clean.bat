@echo off

echo Cleaning Directories
RMDIR /S /Q Documentation
RMDIR /S /Q nbproject
RMDIR /S /Q .git

echo Cleaning Development Files
DEL /S /Q .gitignore

echo Cleaning Javascript Development Files
DEL /S /Q .\Public\Scripts\main.js
DEL /S /Q .\Public\Scripts\qtyform.js
DEL /S /Q .\Public\Scripts\Dandelion\dandelion.js
DEL /S /Q .\Public\Scripts\Dandelion\dandelion.MVC.js
DEL /S /Q .\Public\Scripts\Dashboard\dashboard.js
DEL /S /Q .\Public\Scripts\QuoteDashboard\quotedashboard.js
DEL /S /Q .\Public\Scripts\PickTicket\pickticket.js
DEL /S /Q .\Public\Vendor\bootstrap-3\js\bootstrap.js
DEL /S /Q .\Public\Vendor\bootstrap-3\js\daterangepicker.js
DEL /S /Q .\Public\Vendor\select2\js\select2.full.js
DEL /S /Q .\Public\Vendor\jstree\jstree.js
DEL /S /Q .\Public\Vendor\dropzone\dropzone.js

DEL /S /Q .\Public\Vendor\amcharts\amcharts.min.js
DEL /S /Q .\Public\Vendor\amcharts\funnel.min.js
DEL /S /Q .\Public\Vendor\amcharts\gantt.min.js
DEL /S /Q .\Public\Vendor\amcharts\gauge.min.js
DEL /S /Q .\Public\Vendor\amcharts\pie.min.js
DEL /S /Q .\Public\Vendor\amcharts\radar.min.js
DEL /S /Q .\Public\Vendor\amcharts\serial.min.js
DEL /S /Q .\Public\Vendor\amcharts\xy.min.js
DEL /S /Q .\Public\Vendor\amcharts\themes\light.min.js

DEL /S /Q .\Public\Scripts\FinancialDashboard\financialdashboard.coffee
DEL /S /Q .\Public\Scripts\FinancialDashboard\financialdashboard.js
DEL /S /Q .\Public\Scripts\FinancialDashboard\financialdashboard.js.map

DEL /S /Q .\Public\Scripts\InventoryDashboard\main.coffee
DEL /S /Q .\Public\Scripts\InventoryDashboard\main.js
DEL /S /Q .\Public\Scripts\InventoryDashboard\main.js.map
DEL /S /Q .\Public\Scripts\InventoryDashboard\InventoryDashboardDynamicFilter.js

DEL /S /Q .\Public\Scripts\OnPurchaseOrderDashboard\main.coffee
DEL /S /Q .\Public\Scripts\OnPurchaseOrderDashboard\main.js
DEL /S /Q .\Public\Scripts\OnPurchaseOrderDashboard\main.js.map
DEL /S /Q .\Public\Scripts\OnPurchaseOrderDashboard\OnPurchaseOrderDashboardDynamicFilter.js

DEL /S /Q .\Public\Scripts\OnSalesOrderDashboard\main.coffee
DEL /S /Q .\Public\Scripts\OnSalesOrderDashboard\main.js
DEL /S /Q .\Public\Scripts\OnSalesOrderDashboard\main.js.map
DEL /S /Q .\Public\Scripts\OnSalesOrderDashboard\OnSalesOrderDashboardDynamicFilter.js

DEL /S /Q .\Public\Scripts\ARDashboard\ardashboard.coffee
DEL /S /Q .\Public\Scripts\ARDashboard\ardashboard.js
DEL /S /Q .\Public\Scripts\ARDashboard\ardashboard.js.map

DEL /S /Q .\Public\Scripts\APDashboard\apdashboard.coffee
DEL /S /Q .\Public\Scripts\APDashboard\apdashboard.js
DEL /S /Q .\Public\Scripts\APDashboard\apdashboard.js.map

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

DEL /S /Q .\Public\Styles\Main\index.css
DEL /S /Q .\Public\Styles\BinToBin\index.css
DEL /S /Q .\Public\Styles\Dashboard\index.css
DEL /S /Q .\Public\Styles\QuoteDashboard\index.css
DEL /S /Q .\Public\Styles\FinancialDashboard\index.css


echo Cleaning Creator
RMDIR /S /Q .\Application\Controllers\Creator
RMDIR /S /Q .\Application\Views\Creator
RMDIR /S /Q .\Public\Scripts\Creator
RMDIR /S /Q .\Public\Styles\Creator
DEL /S /Q .\Application\Views\Shared\Creator.Page.php
pause
