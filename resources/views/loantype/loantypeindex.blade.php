
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
                            Loan Type
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Loan Type</th> 
                                <th class="c-table__cell c-table__cell--head">Description</th> 
                                <th class="c-table__cell c-table__cell--head">Created</th> 
                                <th class="c-table__cell c-table__cell--head">Updated</th> 
                                <th class="c-table__cell c-table__cell--head">Action</th> 
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $row)                                                                                               <tr class="c-table__row"> 
          
                                        <td class="c-table__cell"></td> 
                                        <td class="c-table__cell"><b>{{$row->type}}</b></td>   
                                        <td class="c-table__cell"><b>{{$row->description}}</b></td>   
                                        <td class="c-table__cell"><b>{{$row->created_at}}</b></td>  
                                        <td class="c-table__cell"><b>{{$row->updated_at}}</b></td>  
                                        <td class="c-table__cell">
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                                    <a class="c-dropdown__item dropdown-item" href="{{ URL::route('loantype.update', $row->id )}}">Update</a> 
                                                    <a class="confirm c-dropdown__item dropdown-item" href="{{ URL::route('loantype.delete', $row->id )}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>  
                                    </tr> 

                                @endforeach
                                               </tbody>                   
                             
                                                               
                                          
                    </table> 
                    
                    <br> 
<div class="row">
	<div class="col-md-6"> 
		<ul class="c-pagination__list"> 
		    		        		            <li class="c-pagination__item"><a class="c-pagination__link is-active"><b>1</b></a></li> 
		        		    		</ul> 
	</div>
	<div class="col-md-6" style="text-align: right;"> 
		<small>
		    Page <b style="color: red;">1</b> 
		    of 1 |
		    Total of <b style="color: red">7</b> 
		    result/s
		</small>
	</div>
</div>
	 
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
        .is-active{
            font-weight: bolder;
        }
    </style>

                
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