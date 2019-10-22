@extends('layouts.app')

@section('content')


<div class="card">
                <div class="card-header">Notifications</div>

                <div class="card-body">

                  @foreach($notifications as $notification)

                    <li class="list-group-item">
                     
                       @if($notification->type === 'ChatForum\Notifications\NewReplyAdded')

                              A new reply was added to your discussion.

                              <strong>{{$notification->data['discussion']['title']}}</strong>


                              <a href="{{route('discussions.show',$notification->data['discussion']['slug'])}}" class="btn float-right btn-sm btn-info" style="color:white">
                              
                                  View Discussion

                              </a>

                       @endif
                      
                      @if($notification->type === 'ChatForum\Notifications\ReplyMarkedAsBestReply')

                         Your reply for the discussion <strong>{{$notification->data['discussion']['title']}}</strong> was marked as best reply.
                       
                          <a href="{{route('discussions.show',$notification->data['discussion']['slug'])}}" class="btn float-right btn-sm btn-info" style="color:white">
                              
                              View Discussion

                          </a>

                      @endif
                      
                    </li>

                  @endforeach
                  

            
                </div>
            </div>
@endsection
