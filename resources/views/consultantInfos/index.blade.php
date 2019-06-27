@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Consultants info pages</div>

                    <div class="card-body">
                        @foreach($consultantInfos as $ConsultantInfo)
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="mt-0">{{$consultanInfo->first_name}}</h3>
                                    {{str_limit($consultanInfo->about_me,250)}}
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        {{$consultantInfos->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
