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
</head>
<body>

<div class="container">
    <div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="disabled"><a href="#step-1">
                    <h4 class="list-group-item-heading">Add Project</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Members</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li class="active"><a href="#step-3">
                    <h4 class="list-group-item-heading">Resources</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
                <li class="disabled"><a href="#step-4">
                    <h4 class="list-group-item-heading">Transport</h4>
                    <p class="list-group-item-text"></p>
                </a></li>
            </ul>
        </div>
    </div>
</div>
@if(Session::has('message')) <div class="alert alert-info"> {{Session::get('message')}} </div> @endif
{!! Form::open(['url' => 'forms/resource/submit','class' => 'container']) !!}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center">Resources</h1>

                    <div class="container col-xs-12">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <tr>
                                    <th>
                                        Item Name
                                    </th>
									<td>
                                        {{Form::text('itemname', '',['class' => 'form-control', 'placeholder'=>'Item Name'])}}
                                    </td>
								</tr>
								<tr>
                                    <th>
                                       Item type
                                    </th>
									<td>
										{{Form::radio('itemtype','resource',['class' => 'form-control','style'=>'margin-left:1%'])}} Resource

                                        {{Form::radio('itemtype','product',['class' => 'form-control','style'=>'margin-left:20%'])}} Product

                                    </td>
								</tr>
								<tr>
                                    <th>
                                        Item Description
                                    </th>
									<td>
                                        {{Form::text('itemdescription', '',['class' => 'form-control', 'placeholder'=>'Item description'])}}
                                    </td>
								</tr>
								<tr>
                                    <th>
                                        Item Stock
                                    </th>
									<td>
                                        {{Form::text('stock', '',['class' => 'form-control', 'placeholder'=>'Item Stock'])}}
                                    </td>
								</tr>
								<tr>
									<th>
                                        Item Record Level
                                    </th>
									<td>
                                        {{Form::text('level', '',['class' => 'form-control', 'placeholder'=>'Item Recoard Level'])}}
                                    </td>
								</tr>
									<th>
                                        Quantity
                                    </th>
									<td>
                                        {{Form::text('quantity', '',['class' => 'form-control', 'placeholder'=>'Quantity'])}}
                                    </td>
								</tr>
								<tr>
									<th>
                                        Value
                                    </th>
									<td>
                                        {{Form::text('value', '',['class' => 'form-control', 'placeholder'=>'value'])}}
                                    </td>
								<tr>
									<th>
                                        Collect By
                                    </th>
									<td>
                                        {{Form::text('collectby', '',['class' => 'form-control', 'placeholder'=>'Collect By'])}}
                                    </td>
								</tr>
								<tr>
									<th>
                                        Deliver By
                                    </th>
									<td>
                                        {{Form::text('deliverby', '',['class' => 'form-control', 'placeholder'=>'Deliver By'])}}
                                    </td>
								</tr>
                            </table>
                        </div>
                    </div>
						{{Form::submit('Add Deatails',['id'=>'add_row','class'=>'btn btn-success pull-left'])}}

                        {{ Form::reset('Delete Details',['id'=>'delete_row','class'=>'btn btn-danger pull-right'])}}
                </div>

            </div>
        </div>
    </div>

{!! Form::close() !!}



<script src="jquery.min.js"></script>
<script src="flat.ui.js"></script>
<script>

    // Activate Next Step

    $(document).ready(function() {

        var navListItems = $('ul.setup-panel li a'),
                allWells = $('.setup-content');

        allWells.hide();

        navListItems.click(function(e)
        {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this).closest('li');

            if (!$item.hasClass('disabled')) {
                navListItems.closest('li').removeClass('active');
                $item.addClass('active');
                allWells.hide();
                $target.show();
            }
        });

        $('ul.setup-panel li.active a').trigger('click');

        // DEMO ONLY //
        $('#activate-step-2').on('click', function(e) {
            $('ul.setup-panel li:eq(1)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-2"]').trigger('click');
            $(this).remove();
        })

        $('#activate-step-3').on('click', function(e) {
            $('ul.setup-panel li:eq(2)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-3"]').trigger('click');
            $(this).remove();
        })

        $('#activate-step-4').on('click', function(e) {
            $('ul.setup-panel li:eq(3)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-4"]').trigger('click');
            $(this).remove();
        })

        $('#activate-step-3').on('click', function(e) {
            $('ul.setup-panel li:eq(2)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-3"]').trigger('click');
            $(this).remove();
        })
    });


</script>

</body>
</html>