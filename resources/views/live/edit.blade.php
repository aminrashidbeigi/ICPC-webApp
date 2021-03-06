@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="row">
            <h3><br>Add a new Live Post!<br></h3>
            <h5>17th Amirkabir Collegiate Programming Contest - 03 Nov 2017</h5>
            <div class="divider"></div>
            <br>
            <div class="container-fluid">
                <form method="POST" action="{{ route('app::admin.live.edit.save', ['LivePost' => $post]) }}" accept-charset="UTF-8" name="newProduct" class="form-horizontal" enctype="multipart/form-data">
                    <!-- Post -->
                    <div class="row">

                        <!-- Post Title -->
                        <h5><i class="material-icons">message</i> New Post</h5>
                        <div class="input-field col s12 m12 l12">
                            <input type="text" name="title" id="title" class="validate" value="{{$post->title or ''}}">
                            <label for="title">Post Title</label>
                        </div>
                        <!-- /Post Title -->

                        {{--<!-- RTL -->--}}
                        {{--<div class="input-field col s2 m2 l2">--}}
                            {{--<div class="switch">--}}
                                {{--<label>--}}
                                    {{--LTR--}}
                                    {{--<input type="checkbox" name="RTL" {{$post->RTL ? 'checked' : ''}}>--}}
                                    {{--<span class="lever"></span>--}}
                                    {{--RTL--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /RTL -->--}}

                        <!-- Post Body -->
                        <div class="input-field col s12 m12 l12">
                            <textarea name="body" id="textarea1" class="materialize-textarea" length="1000">{!! $post->body or ''  !!}</textarea>
                            <label for="textarea1">Post Message</label>
                        </div>
                        <!-- /Post Body -->

                        <!-- Picture -->
                        <div class="file-field input-field col s4 m4 l4">
                            <div class="btn">
                                <span>Picture</span>
                                <input name="picture" type="file" id="image">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        @if (isset($post->picture))
                            <div class="col s8 m8 l8">
                                <a href="{{ $post->getImgAddress() }}" target="_blank"><img class="materialboxed" data-caption="{{ $post->title }}" width="250" src="{{ $post->getImgAddress() }}"></a>
                            </div>
                        @endif
                        <!-- /Picture -->

                        <!-- Submit -->
                        <div class="input-field col s12 m12 l12 center">
                            <button class="btn waves-effect waves-light btn-large cyan" type="submit" name="action">Update Post
                                <i class="material-icons right">done_all</i>
                            </button>
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
        $('.materialboxed').materialbox();
    });
</script>
@endpush