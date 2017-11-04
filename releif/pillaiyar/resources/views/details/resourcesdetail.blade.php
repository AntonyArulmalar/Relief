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
                <li ><a href="#step-1">
                    <h4 class="list-group-item-heading">Member Details</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li ><a href="/details/transportdetail" >
                    <h4 class="list-group-item-heading">Transport Details</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li class="active"><a href="/details/resourcesdetail">
                    <h4 class="list-group-item-heading">Resource Details</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
            </ul>
        </div>
    </div>
</div>

<body>
<div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            
                    <div class="container col-xs-12">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
       <tr>
        <td >itemname   </td>
        <td> itemtype </td>
        <td> itemdescription  </td>
        <td> stock </td>
        <td> value </td>
        <td>quantity </td>
        <td>collectby  </td>
        <td> deliverby </td>
        <td>level </td>
        </tr>
    
        @foreach($resources as $retrieve)
    <tr>
        
        
            <td> {{$retrieve->itemname}}</td>
            <td> {{$retrieve->itemtype}}</td>
            <td> {{$retrieve->itemdescription}}</td>
            <td> {{$retrieve->stock}}</td>
            <td> {{$retrieve->value}}</td>
            <td> {{$retrieve->quantity}}</td>
            <td> {{$retrieve->collectby}}</td>
            <td> {{$retrieve->deliverby}}</td>
            <td> {{$retrieve->level}}</td>
            <td> <a href={{"/details/resourcesdetail/delete/{id} , $retrieve->id"}} >Delete</a> </td>


     </tr> 
     
       @endforeach
    
</table>
</div>
</div>
<a id="add_row" class="btn btn-success pull-left" href="/forms/resource/submit">Add More Resources</a>
</div>
</div>
</div>

<script src="jquery.min.js"></script>
<script src="flat.ui.js"></script>
</body>
</html>
