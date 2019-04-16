@extends('layouts.app')
 @section("pageTitle",'Social Medias')
 @section("pageSubtitle",'create, edit, delete SocialMedia')
  @section("breadcrumbs")
         <li>Home</li> <li>SocialMedia</li>
         @endsection
@section('content')
    <section class="content-header">
        <h1 class="pull-right">
           {{--<a class="btn btn-primary pull-right btn-sm" data-toggle="modal" style="margin-top: -10px;margin-bottom: 5px" href="#create-modal">Add New</a>--}}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('social_media.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="create-modal" role="dialog">
            {!! Form::open(['route' => 'socialMedia.store']) !!}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Create Social Media</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            @include('social_media.fields')
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        {!! Form::close() !!}
    </div>

    <div class="modal fade" id="edit-modal" role="dialog">
           <form method="post" id="edit-form">
               {{ csrf_field() }}
           <input name="_method" type="hidden" value="PATCH">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                       <h4 class="modal-title">Edit Social Media</h4>
                   </div>
                   <div class="modal-body">
                        <div class="row">
                           @include('social_media.fields')
                        </div>
                   </div>
                   <div class="modal-footer">
                       <input type="hidden" id="editDetails" value="{{ url("/socialMedia") }}">
                       <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-primary">Save</button>
                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           </form>
       </div>

     {{--delete modal--}}
        <div class="modal fade" id="delete-modal" role="dialog">
            <form id="delete-form" method="post">
                <input name="_method" type="hidden" value="DELETE">
            {{ csrf_field() }}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Delete Social Media</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this Social Media?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    @endsection