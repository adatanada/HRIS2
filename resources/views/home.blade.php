
<!Doctype html>
<html lang="en-us">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>HRIS</title> 
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" > 
            <link rel="stylesheet" href="{{URL::asset('assets/css/bundle.css')}}">
    </head>
    <body class="o-page">  

                    <div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">

        
        <h4 class="c-sidebar__title">Dashboard</h4>
        <ul class="c-sidebar__list"> 
                             
                                            <li class="c-sidebar__item active">
                            <a class="c-sidebar__link" href="http://xsodia.space/payroll">
                                <i class="fa fa-home u-mr-xsmall"></i>
                                Dashboard
                            </a>
                        </li> 
                                                                 
                                                                        <li class="c-sidebar__item">
                                <a class="c-sidebar__link" href="http://xsodia.space/payroll/audittrail">
                                    <i class="fa fa-chain-broken u-mr-xsmall"></i>
                                    Audit Trail
                                </a>
                            </li> 
                         
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                                <i class="fa fa-flag-checkered u-mr-xsmall"></i> Departments
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                                                                                                            <li><a class="c-sidebar__link" href=" {{ URL::route('department') }}">All Departments</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="{{ URL::route('department.add') }}">Add Department</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_3" aria-expanded="false" aria-controls="sidebar-submenu_3">
                                <i class="fa fa-street-view u-mr-xsmall"></i> Employees
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_3">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/employees">Records</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/employees/add">Add new</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_4" aria-expanded="false" aria-controls="sidebar-submenu_4">
                                <i class="fa fa-window-restore u-mr-xsmall"></i> Loans
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_4">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/loans">All Loans</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/loans/types">Loan Types</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/loans/types/add">Add Loan Types</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_5" aria-expanded="false" aria-controls="sidebar-submenu_5">
                                <i class="fa fa-calendar u-mr-xsmall"></i> Leaves
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_5">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/leaves">All Leaves</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/leaves/types">Leaves Types</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/leaves/types/add">Add Leaves Types</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_6" aria-expanded="false" aria-controls="sidebar-submenu_6">
                                <i class="fa fa-file-text-o u-mr-xsmall"></i> Mandatory Deductions
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_6">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/deductions/add">Add new</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/deductions/view/tax">Tax Table</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/deductions/view/sss">SSS Table</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/deductions/view/philhealth">Philhealth Table</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/deductions/view/pagibig">Pagibig Table</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_7" aria-expanded="false" aria-controls="sidebar-submenu_7">
                                <i class="fa fa-clock-o u-mr-xsmall"></i> Timekeeping
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_7">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/timekeeping">Records</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/timekeeping/add">Add new</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_8" aria-expanded="false" aria-controls="sidebar-submenu_8">
                                <i class="fa fa-file-text-o u-mr-xsmall"></i> Payslips
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_8">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/payslips">Records</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/payslips/process">Process Payroll</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                                                            <li class="c-sidebar__item has-submenu">
                            <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_9" aria-expanded="false" aria-controls="sidebar-submenu_9">
                                <i class="fa fa-cogs u-mr-xsmall"></i> Settings
                            </a>
                            <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_9">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll">Company Setup</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll">Account Settings</a></li> 
                                                                     
                            </ul>
                        </li> 
                                                                 
                                                                        <li class="c-sidebar__item">
                                <a class="c-sidebar__link confirm" href="http://xsodia.space/payroll/logout">
                                    <i class="fa fa-sign-in u-mr-xsmall"></i>
                                    Logout
                                </a>
                            </li> 
                         
                                                  
        </ul>  
    </div> 
</div>  
        
        <main class="o-page__content" style="padding-bottom: 5%;">
            
            <header class="c-navbar">
    <button class="c-sidebar-toggle u-mr-small">
        <span class="c-sidebar-toggle__bar"></span>
        <span class="c-sidebar-toggle__bar"></span>
        <span class="c-sidebar-toggle__bar"></span>
    </button><!-- // .c-sidebar-toggle -->

    <h2 class="c-navbar__title u-mr-auto">HRIS</h2> 

    <div class="c-dropdown dropdown">
        <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="c-avatar__img" src="http://xsodia.space/payroll/assets/john.jpg" alt="User's Profile Picture">
        </a>

        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
            <a class="c-dropdown__item dropdown-item" href="#">Company Setup</a>
            <a class="c-dropdown__item dropdown-item" href="#">Account Settings</a>
            <a class="confirm c-dropdown__item dropdown-item" href="http://xsodia.space/payroll/logout">Logout</a>
        </div>
    </div>
</header>
                <div class="c-toolbar u-justify-center u-mb-small">
        <div class="col-12 col-lg-10 col-xl-8">
            <div class="row">
                <div class="col-6 col-md-3 c-toolbar__state">
                    <h4 class="c-toolbar__state-number">5</h4>
                    <span class="c-toolbar__state-title">Employees</span>
                </div>
                <div class="col-6 col-md-3 c-toolbar__state">
                    <h4 class="c-toolbar__state-number">5</h4>
                    <span class="c-toolbar__state-title">Leaves</span>
                </div>
                <div class="col-6 col-md-3 c-toolbar__state">
                    <h4 class="c-toolbar__state-number">3</h4>
                    <span class="c-toolbar__state-title">Loans</span>
                </div>
                <div class="col-6 col-md-3 c-toolbar__state">
                    <h4 class="c-toolbar__state-number">0</h4>
                    <span class="c-toolbar__state-title">Deductions</span>
                </div>
            </div>
        </div>
    </div> 

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop">
                    <table class="c-table">
                        <caption class="c-table__title">
                            Audit Trail <small>total of <b style="color: red">10</b> result/s</small>
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Module</th>
                                <th class="c-table__cell c-table__cell--head">Action</th>
                                <th class="c-table__cell c-table__cell--head">Date</th> 
                            </tr>
                        </thead>

                        <tbody>
                                                                                                <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Login</td>  
                                        <td class="c-table__cell">Logged In</td>  
                                        <td class="c-table__cell">3 seconds ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Login</td>  
                                        <td class="c-table__cell">Logged In</td>  
                                        <td class="c-table__cell">23 seconds ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Login</td>  
                                        <td class="c-table__cell">Logged In</td>  
                                        <td class="c-table__cell">5 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Loan Types</td>  
                                        <td class="c-table__cell">Added new data</td>  
                                        <td class="c-table__cell">7 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Login</td>  
                                        <td class="c-table__cell">Logged In</td>  
                                        <td class="c-table__cell">8 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Loan Application</td>  
                                        <td class="c-table__cell">Added loan application for employee ID #5</td>  
                                        <td class="c-table__cell">9 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Login</td>  
                                        <td class="c-table__cell">Logged In</td>  
                                        <td class="c-table__cell">11 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Employees</td>  
                                        <td class="c-table__cell">Updated employee ID #5</td>  
                                        <td class="c-table__cell">12 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Employees</td>  
                                        <td class="c-table__cell">Added new employee</td>  
                                        <td class="c-table__cell">12 minutes ago</td>  
                                    </tr> 
                                                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall">
                                                <img src="http://xsodia.space/payroll/assets/john.jpg" style="width:56px;">
                                            </div>

                                            <div class="o-media__body">
                                                John Doe
                                                <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                            </div>
                                        </td>
         
                                        <td class="c-table__cell">Login</td>  
                                        <td class="c-table__cell">Logged In</td>  
                                        <td class="c-table__cell">20 minutes ago</td>  
                                    </tr> 
                                                                                    </tbody>
                    </table>
                </div> 
            </div>
        </div>  
    </div>   

        </main>  


        <script src="http://xsodia.space/payroll/assets/js/jquery.js"></script>
        <script src="http://xsodia.space/payroll/assets/js/main.min3661.js?v=2.0"></script>
        <script src="http://xsodia.space/payroll/assets/js/clock.js"></script>
        <script type="text/javascript">
            $('body .confirm').click(function(){
                if(window.confirm("Are you sure you want to proceed ?")){
                    return true;
                } 
                return false;
            });
        </script>
        
        
                
        <style>
	.alert-card{
		position: fixed;
		z-index: 100;
		width: 30%;
		top: 2%;
		right: 1%;
	}
</style>
 
    </body> 
</html>