<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Admin */
$route['admin'] = 'Admin';
$route['admin/dashboard'] = 'adminweb/Dashboard';
// Dalam Megeri
$route['admin/tubeldn'] = 'adminweb/TubelDn';
// Living Cost
$route['admin/tubeldn/livingcost/(:any)'] = 'adminweb/MonitoringDn/livingcost/$id';
$route['admin/tubeldn/livingcost_add'] = 'adminweb/MonitoringDn/livingcost_add';
// End Living Cost
$route['admin/tubeldn/tuitionfee/(:any)'] = 'adminweb/MonitoringDn/tuitionfee/$id';
// Pembayaran
$route['admin/tubeldn/pembayaran/(:any)'] = 'adminweb/MonitoringDn/pembayaran/$id';
$route['admin/tubeldn/pembayaran/view_add/(:any)'] = 'adminweb/MonitoringDn/pembayaran_view_add/$id';
$route['admin/tubeldn/pembayaran_add'] = 'adminweb/MonitoringDn/pembayaran_add';
$route['admin/tubeldn/pembayaran_cetak/(:any)'] = 'adminweb/MonitoringDn/pembayaran_cetak/$id';
// End Pembayaran
$route['admin/monitoringdn/(:any)'] = 'adminweb/MonitoringDn/index/$id';

// Luar Megeri
$route['admin/tubelln'] = 'adminweb/Tubelln';
// Living Cost
$route['admin/tubelln/livingcost/(:any)'] = 'adminweb/Monitoringln/livingcost/$id';
$route['admin/tubelln/livingcost_add'] = 'adminweb/Monitoringln/livingcost_add';
// End Living Cost
// Tuition Fee
$route['admin/tubelln/tuitionfee/(:any)'] = 'adminweb/Monitoringln/tuitionfee/$id';
// Insurance Fee
$route['admin/tubelln/insurance/(:any)'] = 'adminweb/Monitoringln/insurance/$id';
// Dissemination Fee
$route['admin/tubelln/dissemination/(:any)'] = 'adminweb/Monitoringln/dissemination/$id';
// Settlement Fee
$route['admin/tubelln/settlement/(:any)'] = 'adminweb/Monitoringln/settlement/$id';
// Entrance Fee
$route['admin/tubelln/entrance/(:any)'] = 'adminweb/Monitoringln/entrance/$id';
// Pembayaran
$route['admin/tubelln/pembayaran/(:any)'] = 'adminweb/Monitoringln/pembayaran/$id';
$route['admin/tubelln/pembayaran/view_add/(:any)'] = 'adminweb/Monitoringln/pembayaran_view_add/$id';
$route['admin/tubelln/pembayaran_add'] = 'adminweb/Monitoringln/pembayaran_add';
$route['admin/tubelln/pembayaran_cetak/(:any)'] = 'adminweb/Monitoringln/pembayaran_cetak/$id';
// End Pembayaran
$route['admin/monitoringln/(:any)'] = 'adminweb/Monitoringln/index/$id';
// End Dalam Negeri
$route['admin/tubelln'] = 'adminweb/TubelLn';



$route['admin/user'] = 'adminweb/User';
$route['admin/user/edit'] = 'adminweb/User/edit';
$route['admin/user/add'] = 'adminweb/User/add';
$route['admin/user/delete/(:any)'] = 'adminweb/User/delete/$id';
/* End Admin */

/* User */
$route['user/livingcost'] = 'user/Report/livingcost';
$route['user/tuitionfee'] = 'user/Report/tuitionfee';
$route['user/insurance'] = 'user/Report/insurance';
$route['user/disemination'] = 'user/Report/disemination';
$route['user/settlement'] = 'user/Report/settlement';
$route['user/entrance'] = 'user/Report/entrance';
$route['user/tuitionfee_add'] = 'user/Report/tuitionfee_add';
$route['user/insurance_add'] = 'user/Report/insurance_add';
$route['user/disemination_add'] = 'user/Report/disemination_add';
$route['user/settlement_add'] = 'user/Report/settlement_add';
$route['user/entrance_add'] = 'user/Report/entrance_add';
/* End User */
