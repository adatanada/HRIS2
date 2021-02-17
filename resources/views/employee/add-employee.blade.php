@extends('layout.main')
@section('content')

<div class="container-fluid" style="margin:18%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="c-table-responsive@desktop">
                <table class="c-table">
                    <caption class="c-table__title">
                        Add Employee
                    </caption>
                </table>
                <span class="c-divider u-mv-medium"></span>
            </div>
        </div>
        <div class="col-lg-12 col-md-12" style="padding: 2%;">
            <form method="post" action="{{ URL::route('employee.save') }}">
            @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Photo</label>
                                <input class="c-input c-input--info" id="input17" type="file" name="file_path">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">First name</label>
                            <input class="c-input c-input--info" id="input17" type="text" required name="fname">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Middle name</label>
                            <input class="c-input c-input--info" id="input17" type="text" required name="mname">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Last name</label>
                            <input class="c-input c-input--info" id="input17" type="text" required name="lname">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="col-lg-12 col-md-12 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="input17">Contact</label>
                                <input class="c-input c-input--info" id="input17" type="number" required name="contact">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 u-mb-medium">
                                    <div class="c-form-field">
                                        <label class="c-field__label" for="input17">Birthday</label>
                                        <input class="c-input c-input--info" id="input17" type="date" required
                                            name="birthday" value="10">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 u-mb-medium">
                                    <div class="c-form-field">
                                        <label class="c-field__label" for="input17">Gender</label>
                                        <select class="c-select" id="select1" name="gender">
                                            <option value="Male" selected>Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Address</label>
                            <textarea class="c-input" rows="6" id="textarea5" required name="address"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Department</label>
                            <select class="c-select" id="select2" name="departmentid">
                                <option value="1"></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Designation</label>
                            <input class="c-input c-input--info" id="input17" type="text" name="designation">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Basic Rate Per Day</label>
                            <input class="c-input c-input--info" id="input17" type="number" name="salary">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">PhilHealth Contribution Table</label>
                            <select class="c-select" id="select3" name="philhealthid">
                                <option value="3">1. P 10,000.00 - below - (P 275.00 monthly)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">SSS Contribution Table</label>
                            <select class="c-select" id="select4" name="sssid">
                                <option value="2">1. P 8,999.99 - below - (P 990.00 monthly)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">PAGIBIG Contribution Table</label>
                            <select class="c-select" id="select5" name="pagibigid">
                                <option value="1">1. P 8,999.99 - below - (P 200.00 monthly)</option>
                                <option value="4">2. P 8,999.99 - 15,999 - (P 400.00 monthly)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 u-mb-medium">
                        <div class="c-field">
                            <label class="c-field__label" for="input18">Income Tax Table</label>
                            <select class="c-select" id="select6" name="tax">
                                <option value="7">1. P 8,999 - below - (P 5% monthly)</option>
                                <option value="8">2. P 12,999 - above - (P 5% monthly)</option>

                            </select>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 u-mb-medium">
                        <span class="c-divider u-mv-medium"></span>
                    </div>

                    <div class="col-lg-2 col-md-2 u-mb-medium">
                        <div class="c-field">
                            <div class="col u-mb-medium">
                                <button class="c-btn c-btn--info">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @endsection
        </main>

        </body>

        </html>
