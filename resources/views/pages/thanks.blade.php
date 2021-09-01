@extends('layouts.app')
@section('page-title', 'Thank you')
@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Thanks <?php echo ucwords($name); ?></h2>
                <p id="thanks-message" class="mt-5">Your donation of $ <?php echo $amount; ?> has been
                    successfully
                    received</p>
            </div>
        </div>
    </div>

@endsection

