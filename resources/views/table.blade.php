@extends('layouts.app')

@section('styles')
<style>
</style>
@endsection

@section('title', 'Table')

@section('content')
<div class="content mx-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Simple Table</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Country
                    </th>
                    <th>
                        City
                    </th>
                    <th>
                        Salary
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        1
                        </td>
                        <td>
                        Dakota Rice
                        </td>
                        <td>
                        Niger
                        </td>
                        <td>
                        Oud-Turnhout
                        </td>
                        <td class="text-primary">
                        $36,738
                        </td>
                    </tr>
                    <tr>
                        <td>
                        2
                        </td>
                        <td>
                        Minerva Hooper
                        </td>
                        <td>
                        Curaçao
                        </td>
                        <td>
                        Sinaai-Waas
                        </td>
                        <td class="text-primary">
                        $23,789
                        </td>
                    </tr>
                    <tr>
                        <td>
                        3
                        </td>
                        <td>
                        Sage Rodriguez
                        </td>
                        <td>
                        Netherlands
                        </td>
                        <td>
                        Baileux
                        </td>
                        <td class="text-primary">
                        $56,142
                        </td>
                    </tr>
                    <tr>
                        <td>
                        4
                        </td>
                        <td>
                        Philip Chaney
                        </td>
                        <td>
                        Korea, South
                        </td>
                        <td>
                        Overland Park
                        </td>
                        <td class="text-primary">
                        $38,735
                        </td>
                    </tr>
                    <tr>
                        <td>
                        5
                        </td>
                        <td>
                        Doris Greene
                        </td>
                        <td>
                        Malawi
                        </td>
                        <td>
                        Feldkirchen in Kärnten
                        </td>
                        <td class="text-primary">
                        $63,542
                        </td>
                    </tr>
                    <tr>
                        <td>
                        6
                        </td>
                        <td>
                        Mason Porter
                        </td>
                        <td>
                        Chile
                        </td>
                        <td>
                        Gloucester
                        </td>
                        <td class="text-primary">
                        $78,615
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Table on Plain Background</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="">
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Country
                    </th>
                    <th>
                        City
                    </th>
                    <th>
                        Salary
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        1
                        </td>
                        <td>
                        Dakota Rice
                        </td>
                        <td>
                        Niger
                        </td>
                        <td>
                        Oud-Turnhout
                        </td>
                        <td>
                        $36,738
                        </td>
                    </tr>
                    <tr>
                        <td>
                        2
                        </td>
                        <td>
                        Minerva Hooper
                        </td>
                        <td>
                        Curaçao
                        </td>
                        <td>
                        Sinaai-Waas
                        </td>
                        <td>
                        $23,789
                        </td>
                    </tr>
                    <tr>
                        <td>
                        3
                        </td>
                        <td>
                        Sage Rodriguez
                        </td>
                        <td>
                        Netherlands
                        </td>
                        <td>
                        Baileux
                        </td>
                        <td>
                        $56,142
                        </td>
                    </tr>
                    <tr>
                        <td>
                        4
                        </td>
                        <td>
                        Philip Chaney
                        </td>
                        <td>
                        Korea, South
                        </td>
                        <td>
                        Overland Park
                        </td>
                        <td>
                        $38,735
                        </td>
                    </tr>
                    <tr>
                        <td>
                        5
                        </td>
                        <td>
                        Doris Greene
                        </td>
                        <td>
                        Malawi
                        </td>
                        <td>
                        Feldkirchen in Kärnten
                        </td>
                        <td>
                        $63,542
                        </td>
                    </tr>
                    <tr>
                        <td>
                        6
                        </td>
                        <td>
                        Mason Porter
                        </td>
                        <td>
                        Chile
                        </td>
                        <td>
                        Gloucester
                        </td>
                        <td>
                        $78,615
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Shopping Cart Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-shopping">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Product</th>
                                <th class="th-description">Color</th>
                                <th class="th-description">Size</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Amount</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="https://images.thenorthface.com/is/image/TheNorthFace/NF0A2VFL_619_hero" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#jacket">Spring Jacket</a>
                                    <br><small>by Dolce&amp;Gabbana</small>
                                </td>
                                <td>
                                    Red
                                </td>
                                <td>
                                    M
                                </td>
                                <td class="td-number">
                                    <small>&#x20AC;</small>549
                                </td>
                                <td class="td-number">
                                    1
                                    <div class="btn-group">
                                        <button class="btn btn-round btn-info btn-sm"> <i class="material-icons">remove</i> </button>
                                        <button class="btn btn-round btn-info btn-sm"> <i class="material-icons">add</i> </button>
                                    </div>
                                </td>
                                <td class="td-number">
                                    <small>&#x20AC;</small>549
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-simple">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Table with Actions</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th>Job Position</th>
                                    <th>Since</th>
                                    <th class="text-right">Salary</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Andrew Mike</td>
                                    <td>Develop</td>
                                    <td>2013</td>
                                    <td class="text-right">&euro; 99,225</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" class="btn btn-info">
                                            <i class="material-icons">person</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>John Doe</td>
                                    <td>Design</td>
                                    <td>2012</td>
                                    <td class="text-right">&euro; 89,241</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-round">
                                            <i class="material-icons">person</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Alex Mike</td>
                                    <td>Design</td>
                                    <td>2010</td>
                                    <td class="text-right">&euro; 92,144</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                            <i class="material-icons">person</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
</script>
@endsection