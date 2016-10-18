@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="row">
            <h3><br>Add a new Live Post!<br></h3>
            <h5>16th Amirkabir Collegiate Programming Contest - 04 Nov 2016</h5>
            <div class="divider"></div>
            <br>
            <div class="container-fluid">
                <form action="{{ route('app::admin.live.new.save') }}" method="POST" >
                    <!-- Post -->
                    <div class="row">

                        <!-- Post Title -->
                        <h5><i class="material-icons">message</i> New Post</h5>
                        <div class="input-field col s10 m10 l10">
                            <input type="text" name="title" id="title" class="validate">
                            <label for="title">Post Title</label>
                        </div>
                        <!-- /Post Title -->

                        <!-- RTL -->
                        <div class="input-field col s2 m2 l2">
                            <div class="switch">
                                <label>
                                    LTR
                                    <input type="checkbox" name="RTL">
                                    <span class="lever"></span>
                                    RTL
                                </label>
                            </div>
                        </div>
                        <!-- /RTL -->

                        <!-- Post Body -->
                        <div class="input-field col s12 m12 l12">
                            <textarea name="body" id="textarea1" class="materialize-textarea" length="1000"></textarea>
                            <label for="textarea1">Post Message</label>
                        </div>
                        <!-- /Post Body -->

                        <!-- Picture -->
                        <div class="file-field input-field col s4 m4 l4">
                            <div class="btn">
                                <span>Picture</span>
                                <input type="file" name="foto" accept="image/*">
                            </div>
                            <div class="file-path-wrapper">
                                <input name="picture-name" class="file-path validate" type="text">
                            </div>
                        </div>
                        <!-- /Picture -->

                        <!-- Submit -->
                        <div class="input-field col s12 m12 l12 center">
                            <input type="submit" name="action">
                        </div>
                        <!-- /Submit -->

                    </div>
                    <!-- /Post -->
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('input#input_text, textarea#textarea1').characterCounter();
    });
</script>
@endpush