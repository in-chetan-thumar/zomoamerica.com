<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach($lists as $key => $list)
                        <li class="breadcrumb-item {{!empty($title)?'active':''}}"><a href="{{!empty($list)?$list:'javascript: void(0);'}}">{{ $key }}</a></li>
                    @endforeach
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
