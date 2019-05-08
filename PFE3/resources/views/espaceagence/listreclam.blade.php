@extends('layouts.espaceA.master')

@section('title','List Des Reclamations ')
@section('brand','Reclamations')
@section('content')

@if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Client</th>
                    <th scope="col">Date de Reclamation</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>


@foreach ($reclamations as $r)


                  <tr>
                    <th scope="row"> </th>
                    <td>{{ $r->title_rec }}</td>
                    <td>{{ $r->description_rec  }} </td>
                    <td>{{ $r->client['name'] }}</td>
                    <td>{{ $r->date_reclamation }}</td>
                    <td>
                        <form action="{{ url('/agence/Reclamation/'.$r->id)  }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field()}}
                        @if ($r->status=='en attente de recevoir')
                            <button type="submit" id="ajaxupdate" class="btn btn-success">Reglee</button>
                        @else

                        <button type="submit" id="ajaxupdate" class="btn btn-warning">B9I MHDAHOM LAH</button>
                        @endif
                    </form>
                    </td>


                  </tr>
                  @endforeach
                </tbody>
              </table>
              <script src="http://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous">
     </script>
              {{-- <script>
                    jQuery(document).ready(function(){
                        $('#ajaxupdate').on('click', function(event){
                                jQuery.ajax({
                                      url: "{{ route('updatestatus') }}",
                                      method: 'post',
                                      data: {
                                        '_token': $('input[name=_token]').val(),
                                        'id':jQuery('#id').val()
                                      },
                                      success: function(result){

                                      }});
                                   });
                                });
                                  </script> --}}
                                  <script>
                                    window.setTimeout(function() {
                                        $(".alert").fadeTo(200, 0).slideUp(200, function(){
                                            $(this).remove();
                                        });
                                    }, 4000);
                                    </script>
@endsection
