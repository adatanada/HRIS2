
<!Doctype html>
<html lang="en-us">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Cyan Payroll Management System</title> 
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" > 
            <link rel="stylesheet" href="{{URL::asset('assets/css/bundle.css')}}">

    </head>
    <body class="o-page">  

                    <div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
        <a class="c-sidebar__brand"> 
            <img class="c-sidebar__brand-img" src="http://xsodia.space/payroll/assets/logo.png" alt="Logo" style="width: 50%; margin-left: 15%;"> 
        </a>
        
        <h4 class="c-sidebar__title">Dashboard</h4>
        <ul class="c-sidebar__list"> 
                             
                                                                        <li class="c-sidebar__item">
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
                         
                                                                                                            <li class="c-sidebar__item has-submenu is-open">
                            <a class="c-sidebar__link active" data-toggle="collapse" href="#sidebar-submenu" aria-expanded="true" aria-controls="sidebar-submenu">
                                <i class="fa fa-flag-checkered u-mr-xsmall"></i> Departments
                            </a>
                            <ul class="c-sidebar__submenu collapse show" id="sidebar-submenu">
                                                                                                            <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/departments">All Departments</a></li> 
                                                                                                                                                <li><a class="c-sidebar__link" href="http://xsodia.space/payroll/departments/add">Add Department</a></li> 
                                                                     
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

    <h2 class="c-navbar__title u-mr-auto">PAYROLL MANAGEMENT SYSTEM</h2> 

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
              
    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop"> 
                    <table class="c-table">
                        <caption class="c-table__title">
                            Add Department
                        </caption> 
                    </table>
                <span class="c-divider u-mv-medium"></span>
                </div> 
            </div> 
            <div class="col-lg-12 col-md-12" style="padding: 2%;"> 
                <form method="post" action="{{ URL::route('department.save') }}"> 
                    @csrf
                    <div class="row"> 
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="input17">Department</label>
                                <input class="c-input c-input--info" id="input17" type="text" required name="department_name">
                            </div>
                        </div> 

                        <div class="col-sm-12 col-md-12 u-mb-medium">
                            <span class="c-divider u-mv-medium"></span>
                        </div>

                        <div class="col-sm-2 col-md-2 u-mb-medium">
                            <div class="c-field">
                                <div class="col u-mb-medium">
                                    <button class="c-btn c-btn--info">Save</button>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </form> 
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