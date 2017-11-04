@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="container">
                        <div class="navbar-header"><a class="navbar-brand" href="/">Relief Supports Managing a Volunteer project</a> </div>
                                <div class="navbar-collapse collapse">
                                     <ul class="nav navbar-nav">
                                        <li ><a href="/forms/project/submit">Online Registration</a></li>
                                        <li ><a href="/details/memberdetails">Details</a></li>
                                        
                                    </ul>
                                </div>
                    </div>
                </div>
                 <div class="panel-body" >
                    <table width="100%" align="center">
                        <tr>
                   <td align="center"><a href="/forms/member/submit">Add Member</a></td>
                   <td align="center"><a href="/forms/resource/submit">Add Resource</a></td>
                   <td align="center"><a href="/forms/transport/submit">Add Transport</a></td>
               


           </tr>
               </table>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
