@extends('layout.main')
@section('department')
        
        <main class="o-page__content" style="padding-bottom: 5%;">
            
              
    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop"> 
                    <table class="c-table">
                        <caption class="c-table__title">
                            Departments
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Department</th> 
                                <th class="c-table__cell c-table__cell--head">Created</th> 
                                <th class="c-table__cell c-table__cell--head">Updated</th> 
                                <th class="c-table__cell c-table__cell--head">Action</th> 
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($departments as $data)
                                                                                                <tr class="c-table__row"> 
          
                                        <td class="c-table__cell"></td> 
                                        <td class="c-table__cell"><b>{{$data->department_name}}</b></td>   
                                        <td class="c-table__cell">{{$data->created_at}}</td>  
                                        <td class="c-table__cell">{{$data->updated_at}}</td>   
                                        <td class="c-table__cell">
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                                    <a class="c-dropdown__item dropdown-item" href="{{ URL::route('department.update', $data->id) }}">Update</a> 
                                                    <a class="confirm c-dropdown__item dropdown-item" href="{{ URL::route('department.delete', $data->id) }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                                                </div>
                                            </div>
                                        </td>  
                                    </tr> 

                                @endforeach
                                               </tbody>                   
                             
                                                               
                                          
                    </table> 
                    
                    <br> 
	 
                </div> 
            </div>
        </div> 
    </div>    
@endsection
        </main>  


        <script src="http://xsodia.space/payroll/assets/js/jquery.js"></script>
        <script src="http://xsodia.space/payroll/assets/js/main.min3661.js?v=2.0"></script>
        <script src="http://xsodia.space/payroll/assets/js/clock.js"></script>
 
    </body> 
</html>