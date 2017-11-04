  <html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/js/app.js" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript">
    function show(){document.getElementById('area').style.display='block';}
    function hide(){document.getElementById('area').style.display='none';}
    function shows(){document.getElementById('area1').style.display='block';}
    function hides(){document.getElementById('area1').style.display='none';}
    </script>
    <style type="text/css">
<!--
.style6 {color: #00FFFF; font-size: 18px; text-align: center;}
-->
</style>
</head>
<body>
    <div>
    <div class="container">
    <div class="row form-group"  class="row">
        <div class="col-xs-12" class="col-md-8 col-md-offset-2" >
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
</div>
<div class="container">
    <div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="/details/memberdetails">
                    <h4 class="list-group-item-heading">Member Details</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li><a href="/details/transportdetail">
                    <h4 class="list-group-item-heading">Transport Details</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li ><a href="/details/resourcesdetail">
                    <h4 class="list-group-item-heading">Resource Details</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
            </ul>
        </div>
    </div>
</div>


   
<div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            
                    <div class="container col-xs-12">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
    <tr>
        <td >Member Name   </td>
        <td>Member Contact   </td>
        <td> Member Email   </td>
        <td>Member Skills   </td>
        <td>Members Location  </td>
        </tr>
    
        @foreach($members as $retrieve)
    <tr>
        
        
            <td> {{$retrieve->membername}}</td>
            <td> {{$retrieve->membercontact}}</td>
            <td> {{$retrieve->memberemail}}</td>
            <td> {{$retrieve->skills}}</td>
            <td> {{$retrieve->location}}</td>
            <td> <a href={{"/details/memberdetails/delete/{id} , $retrieve->id"}} >Delete</a> </td>


     </tr> 
     
       @endforeach
    </table>
</div>
</div>
<a id="add_row" class="btn btn-success pull-left" href="/forms/member/submit">Add More Members</a>
</div>
</div>
</div>

<script src="jquery.min.js"></script>
<script src="flat.ui.js"></script>

</body>
</html>
