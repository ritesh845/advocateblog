@extends('backend.layouts.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Post
         <a href="{{route('post.index')}}" class="btn btn-sm btn-primary pull-right">Back</a>
         </h5>
    </div>
    <div class="card-body">
        <form action="{{route('post.update',$post->article_id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('patch')
            @role('admin|super_admin')
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Select User</label>
                        <select name="user_id" class="form-control" required="required">
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}" {{$post->user_id == $user->id ? 'selected="selected"' : ''}}>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>            
            @endrole

            @role('user')
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            @endrole

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Post Title" value="{{old('title') ?? $post->title}}" id="title">
                    @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="sefriendly">Sefriendly Url</label>
                    <input type="text" name="sefriendly" value="{{old('sefriendly') ?? $post->sefriendly}}" class="form-control" readonly="readonly" id="sefriendly" placeholder="Sefriendly Url">
                    @error('sefriendly')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="start_date">Start Date</label>
                    <input type="text" name="start_date" class="form-control datepicker" placeholder="yyyy-mm-dd" data-date-format='yyyy-mm-dd' value="{{old('start_date') ?? date('Y-m-d',strtotime($post->start_date))}}" id="start_date">
                    @error('start_date')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div class="col-md-6 form-group">
                    <label for="end_date">End Date</label>
                    <input type="text" name="end_date" class="form-control datepicker" placeholder="yyyy-mm-dd" data-date-format='yyyy-mm-dd' value="{{old('end_date')}}" id="end_date">
                    @error('end_date')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}
                
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    @error('image')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="attachment">Attachment <span class="text-muted">(PDF Accepted)</span></label>
                    <input type="file" name="attachment" class="form-control" accept="application/pdf">
                    @error('attachment')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>     
            <hr>                   
           {{--  <div class="row">
                <div class="col-md-6 form-group">
                    <label for="slider_image">Galler Image</label>
                    <select name="slider_image" class="form-control" id="slider_image">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>

                </div>                            
            </div> --}}
          {{--   <div class="row d-none" id="slider-div">
                <div class="col-md-6 mb-4 form-group" >
                    <label for="images">Galler Image <a href="javascript:void(0)" class="btn btn-success btn-sm" id="addMore" ><i class="fa fa-plus font-size-14"></i></a></label>
                    <input type="file" name="images[]" class="form-control" accept="image/*">
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status">
                        <option value="1" {{$post->status == '1' ? 'selected="selected"' : ''}}>Active</option>
                        <option value="0" {{$post->status == '0' ? 'selected="selected"' : ''}}>Not Active</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="status">Meta title</label>
                    <input type="text" name="meta_title" class="form-control" placeholder="Post meta title" value="{{old('meta_title') ?? $post->meta_title}}" id="meta_title">
                    @error('meta_title')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="status">Meta description</label>
                    
                     <input type="text" name="meta_description" class="form-control" placeholder="Post Meta Description" value="{{old('meta_description') ?? $post->meta_description}}" id="meta_description">
                    @error('meta_description')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="status">Meta Keywords</label>
                   
                    <input type="text" name="meta_keywords" class="form-control" placeholder="Post meta keywords" value="{{old('meta_keywords') ?? $post->meta_keywords}}" id="meta_keywords">
                    @error('meta_keywords')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" rows="10" cols="20" placeholder="Enter Body Content" id="editor">{{old('body') ?? $post->body}}</textarea>
                    @error('body')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script >
    $(document).ready(function(){
        CKEDITOR.replace('editor');
        $('.datepicker').datepicker({
            'setDate': new Date()
        });


        $('#title').blur(function(e){
            var text = document.getElementById("title").value;
            str = text.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
            str = str.replace(/^\s+|\s+$/gm,'');
            str = str.replace(/\s+/g, '-');   
            $("#sefriendly").val(str); 
        });

    });
</script>
@endsection