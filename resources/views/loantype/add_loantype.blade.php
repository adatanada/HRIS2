@extends('layout.main')
@section('content')

<main class="o-page__content" style="padding-bottom: 5%;">
    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop">
                    <table class="c-table">
                        <caption class="c-table__title">
                            Add Loan Type
                        </caption>
                    </table>
                    <span class="c-divider u-mv-medium"></span>
                </div>
            </div>
            <div class="col-lg-12 col-md-12" style="padding: 2%;">
                <form method="post" action="{{ URL::route('loantype.Save') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="input17">Loan Type</label>
                                <input class="c-input c-input--info" id="input17" type="text" required name="type">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="input17">Description</label>
                                <input class="c-input c-input--info" id="input17" type="text" required
                                    name="description">
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
    @endsection
</main>
</body>

</html>
