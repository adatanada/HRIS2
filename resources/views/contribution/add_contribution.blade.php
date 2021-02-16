@extends('layout.main')
@section('content')

<main class="o-page__content" style="padding-bottom: 5%;">
    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop">
                    <table class="c-table">
                        <caption class="c-table__title">
                            Add Contribution
                        </caption>
                    </table>
                    <span class="c-divider u-mv-medium"></span>
                </div>
            </div>
            <div class="col-lg-12 col-md-12" style="padding: 2%;">
                <form method="post" action="{{ URL::route('contribution.Save') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Contribution type</label>
                                <select class="c-select select2-hidden-accessible" id="select1" name="type" required=""
                                    data-select2-id="select1" tabindex="-1" aria-hidden="true">
                                    <option>Tax</option>
                                    <option>SSS</option>
                                    <option>Philhealth</option>
                                    <option>Pagibig</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="input17">Base Range</label>
                                <input class="c-input c-input--info" id="input17" type="number" required=""
                                    name="range">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="txtmonthly">Monthly Contribution</label>
                                <input class="c-input c-input--info" id="txtmonthly" type="number" required=""
                                    name="monthly">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="txtemployeeshare">Employee Share</label>
                                <input class="c-input c-input--info" id="txtemployeeshare" type="number" required=""
                                    name="employeeshare">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="txtemployershare">Employer Share</label>
                                <input class="c-input c-input--info" id="txtemployershare" type="number" required=""
                                    name="employershare">
                            </div>
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
                </form>
            </div>
        </div>
    </div>
    @endsection
</main>
</body>

</html>
