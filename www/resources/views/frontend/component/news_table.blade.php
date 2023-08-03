
<div class="news-list-wrapper">

  @foreach ($tableData as $news)
                    <div class="news-box ">
                        <div class="images-box">
                            <a href="singles-new.html" class="images">
                                <img src="{{ asset("storage/news/$news->image") }}" >
{{--                                <img src={{ asset('storage/news') . '/' . $news->image }} alt="News 1">--}}
                            </a>
                        </div>
                        <div class="content-news">
                            <a href="{{ route('backend.news', $news->title) }}">
                                {{ $news->title }}
                            </a>
                        </div>
                    </div>
 @endforeach
</div>
{{--<div class="pagination">--}}
{{--    <a href="#" class="page-numbers prev">Previous</a>--}}
{{--    <a href="#" class="page-numbers current">1</a>--}}
{{--    <a href="#" class="page-numbers">2</a>--}}
{{--    <a href="#" class="page-numbers">...</a>--}}
{{--    <a href="#" class="page-numbers">20</a>--}}
{{--    <a href="#" class="next page-numbers">Next</a>--}}
{{--</div>--}}
<div class="pagination">
    {{ $tableData->links('frontend.component.pagination') }}

</div>
