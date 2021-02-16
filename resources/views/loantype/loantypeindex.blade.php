@extends('layout.main')
@section('content')

<main class="o-page__content" style="padding-bottom: 5%;">
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
                            @foreach($data as $row) <tr class="c-table__row">
                                <td class="c-table__cell"></td>
                                <td class="c-table__cell"><b>{{$row->type}}</b></td>
                                <td class="c-table__cell"><b>{{$row->description}}</b></td>
                                <td class="c-table__cell"><b>{{$row->created_at}}</b></td>
                                <td class="c-table__cell"><b>{{$row->updated_at}}</b></td>
                                <td class="c-table__cell">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle"
                                            id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Actions</button>
                                        <div class="c-dropdown__menu dropdown-menu"
                                            aria-labelledby="dropdownMenuButton21">
                                            <a class="c-dropdown__item dropdown-item"
                                                href="{{ URL::route('loantype.form',$row->id )}}">Update</a>
                                            <a class="confirm c-dropdown__item dropdown-item"
                                                href="{{ URL::route('loantype.delete', $row->id )}}">Delete</a>
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
</body>
</html>
