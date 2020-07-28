<div class="col-md-2">
    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
    <p class="text-secondary text-center timeline-comment">{{Helper::time_of_comment($comment_content->updated_at)}}</p>
</div>
<div class="col-md-10">
    <p>
        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html">
            <strong>{{$comment_content->comment->user->name}}</strong>
        </a>
    </p>
    <div class="clearfix"></div>
    <p>{{$comment_content->content}}</p>
    <p>
        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-edit"></i> {{trans('comment.edit')}}</a>
        <a class="float-right btn text-white btn-danger"> <i class="fa fa-trash"></i> {{trans('comment.delete')}}</a>
    </p>
</div>
