@extends('layouts.app')

@section('content')
    <form name="onsite_register" class="col s12 m12 l12" action="{{ route('app::admin.mail.custom.send') }}" method="POST">
        <div id="non-skrollr">
            <div class="row">
                <h3><br>Send Custom Email to contestants<br></h3>
                <h5>17th Amirkabir Collegiate Programming Contest - 03 Nov 2017</h5>
                <div class="divider"></div>
                <br>
                <div class="container-fluid">

                    <!-- Header -->
                    <div class="row">
                        <h5><i class="material-icons">assignment_ind</i>Recipients</h5>
                        <div class="input-field col s12 m12 l12">
                            <input type="text" name="to" id="to" class="validate" value="{{$to or ''}}" placeholder="example@someDomain.com">
                            <label for="to">To (separate multiple addresses with semi-colon ;)</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input type="text" name="cc" id="cc" class="validate" value="{{$cc or ''}}" placeholder="example@someDomain.com">
                            <label for="cc">CC (separate multiple addresses with semi-colon ;)</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input type="text" name="bcc" id="bcc" class="validate" value="{{$bcc or ''}}" placeholder="example@someDomain.com">
                            <label for="bcc">BCC (separate multiple addresses with semi-colon ;)</label>
                        </div>
                    </div>
                    <!-- /Header -->

                    <div class="divider"></div>

                    <!-- Title -->
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input name="title" id="title" class="validate">
                            <label for="title">Title</label>
                        </div>
                    </div>
                    <!-- /Title -->

                    <!-- Message -->
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <textarea name="body" id="textarea1" class="materialize-textarea">{{ $message or '' }}</textarea>
                            <label for="textarea1">Message</label>
                        </div>
                    </div>
                    <!-- /Message -->

                    <div class="divider"></div>

                    <div class="row center">
                        {{--<div class="g-recaptcha col s12 m12 l12 center" data-sitekey="6LeP_ikTAAAAAPu_EgFICSpE6FCKrPkhiYtkVZX-"></div>--}}
                        <div class="input-field col s12 m12 l12">
                            <button class="btn waves-effect waves-light btn-large cyan" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
