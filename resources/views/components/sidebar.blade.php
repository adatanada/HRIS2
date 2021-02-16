<div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
        <a class="c-sidebar__brand"> 
            <img class="c-sidebar__brand-img" src="http://xsodia.space/payroll/assets/logo.png" alt="Logo" style="width: 50%; margin-left: 15%;"> 
        </a>
        
        <h4 class="c-sidebar__title">Dashboard</h4>
        <ul class="c-sidebar__list"> 
                             
                                                                        <li class="c-sidebar__item">
                                <a class="c-sidebar__link" href=" {{ URL::route('home') }}">
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
                                                                                                            <li><a class="c-sidebar__link" href="{{ URL::route('department') }}">All Departments</a></li> 
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