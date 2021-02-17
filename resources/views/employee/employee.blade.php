@extends('layout.main')
@section('content')

<main class="o-page__content" style="padding-bottom: 5%;">


    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop">
                    <table class="c-table">
                        <caption class="c-table__title">
                            Employee
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Employee ID</th>
                                <th class="c-table__cell c-table__cell--head">Gender</th>
                                <th class="c-table__cell c-table__cell--head">Department</th>
                                <th class="c-table__cell c-table__cell--head">Contact</th>
                                <th class="c-table__cell c-table__cell--head">Total Earnings</th>
                                <th class="c-table__cell c-table__cell--head">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach($employee as $data)

                            <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall"> 
                                                <img src="" style="width:56px;"> 
                                            </div>

                                            <div class="o-media__body">
                                                {{$data->fname}} {{$data->mname}} {{$data->lname}} 
                                            </div>
                                        </td>

                                <td class="c-table__cell">{{$data->id}}</td>
                                <td class="c-table__cell">{{$data->gender}}</td>
                                <td class="c-table__cell">{{$data->departmentid}}</td>
                                <td class="c-table__cell">{{$data->contact}}</td>
                                <td class="c-table__cell">{{$data->salary}}</td>
                                <td class="c-table__cell">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle"
                                            id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu"
                                            aria-labelledby="dropdownMenuButton21" x-placement="top-start"
                                            style="position: absolute; transform: translate3d(0px, -155px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="c-dropdown__item dropdown-item" href="#">Update</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Apply Loan</a>
                                            <a class="c-dropdown__item dropdown-item" href="#">Apply Leave</a>
                                            <a class="confirm c-dropdown__item dropdown-item" href=""
                                                onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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
