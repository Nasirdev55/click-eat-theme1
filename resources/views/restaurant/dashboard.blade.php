@extends('layouts.vendor-admin.master')
@section('title')
Dashboard
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="page-content container-fluid">
                <h5 class="ml-4 pt-3">Dashboard</h5>
                <div class="main-content px-4" style="background: none;">
                    <div class="d-flex flex-wrap">
                        <div class="py-3" style="flex:1">
                            <div class="card card-shadow p-3" style="width:210px;height:170px;position: relative;">
                                <h5>Total Orders</h5>
                                <img src="{{ asset('vendor-admin-assets/icons/orders.PNG') }}" alt="" style="width: 50px;height:50px;position: absolute;right:10px;top:10px">
                                <p class="mt-4"><b>800,999</b></p>
                                <div style="position: absolute;left:10px;bottom:10px">
                                    <img src="{{ asset('vendor-admin-assets/icons/arrow-b.PNG') }}" alt="" style="width: 30px;height:30px;">
                                    <span>7.1%</span>
                                </div>
                            </div>  
                        </div>
                        <div class="py-3" style="flex:1">
                            <div class="card card-shadow p-3" style="width:210px;height:170px;position: relative;">
                                <h5>Total Income</h5>
                                <img src="{{ asset('vendor-admin-assets/icons/income.PNG') }}" alt="" style="width: 50px;height:50px;position: absolute;right:10px;top:10px">
                                <p class="mt-4"><b>$800,999</b></p>
                                <div style="position: absolute;left:10px;bottom:10px">
                                    <img src="{{ asset('vendor-admin-assets/icons/arrow-r.PNG') }}" alt="" style="width: 30px;height:30px;">
                                    <span>2.5%</span>
                                </div>
                            </div>  
                        </div>
                        <div class="py-3" style="flex:1">
                            <div class="card card-shadow p-3" style="width:210px;height:170px;position: relative;">
                                <h5>Total Markete</h5>
                                <img src="{{ asset('vendor-admin-assets/icons/markete.PNG') }}" alt="" style="width: 50px;height:50px;position: absolute;right:10px;top:10px">
                                <p class="mt-4"><b>800,999</b></p>
                                <div style="position: absolute;left:10px;bottom:10px">
                                    <img src="{{ asset('vendor-admin-assets/icons/arrow-b.PNG') }}" alt="" style="width: 30px;height:30px;">
                                    <span>4.6%</span>
                                </div>
                            </div>  
                        </div>
                        <div class="py-3" style="flex:1">
                            <div class="card card-shadow p-3" style="width:210px;height:170px;position: relative;">
                                <h5>Total Clients</h5>
                                <img src="{{ asset('vendor-admin-assets/icons/clients.PNG') }}" alt="" style="width: 50px;height:50px;position: absolute;right:10px;top:10px">
                                <p class="mt-4"><b>800,999</b></p>
                                <div style="position: absolute;left:10px;bottom:10px">
                                    <img src="{{ asset('vendor-admin-assets/icons/arrow-b.PNG') }}" alt="" style="width: 30px;height:30px;">
                                    <span>7.1%</span>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="d-flex flex-wrap stats">
                        <div class="py-3 st-f" style="flex:2;margin-right: 20px;">
                            <div class="card card-shadow p-3" style="position: relative;margin-right: 30px;">
                                <h4 class="py-3">Sales And Order Statistics</h4>
                                <div class="select" style="position: absolute;right: 20px;top:20px;">
                                    <select name="" id="" class="form-control" style="width: 150px;
                                    height: 40px;background: #BABABA 0% 0% no-repeat padding-box;
border-radius: 8px;
opacity: 0.47;">
                                        <option value="">Last 30 Days</option>
                                        <option value="">Last 2 Months</option>
                                        <option value="">Last Year</option>
                                    </select>
                                </div>
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>  
                        </div>
                        <div class="py-3" style="flex: 1;margin-right: 20px;">
                            <div class="card card-shadow p-3" style="position: relative;right:30px;">
                                <h6>New Markets</h6>
                                <table class="">
                                    <thead style="border-bottom: 1.5px solid #8080802e;">
                                        <tr>
                                            <th class="p-2">Image</th>
                                            <th class="p-2">Markete</th>
                                            <th class="p-2">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-2"><img src="{{ asset('vendor-admin-assets/icons/mcdonald-logo.png') }}" alt="" style="width:30px;height:30px"></td>
                                            <td class="p-2">McDonald's</td>
                                            <td class="p-2">1703 Twin Pond</td>
                                        </tr>
                                        <tr>
                                            <td class="p-2"><img src="{{ asset('vendor-admin-assets/icons/mcdonald-logo.png') }}" alt="" style="width:30px;height:30px"></td>
                                            <td class="p-2">McDonald's</td>
                                            <td class="p-2">1703 Twin Pond</td>
                                        </tr>
                                        <tr>
                                            <td class="p-2"><img src="{{ asset('vendor-admin-assets/icons/mcdonald-logo.png') }}" alt="" style="width:30px;height:30px"></td>
                                            <td class="p-2">McDonald's</td>
                                            <td class="p-2">1703 Twin Pond</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                        </div>
                </div>  
            </div>
@endsection
@section('footer-extra-links')
<script src="{{ asset('vendor-admin-assets/plugins/charts/charts.js') }}"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
   var myChart = new Chart(ctx, {
       type: 'line',
       responsive:true,
       data: {
         labels: ["0", "10k", "20k", "30k", "40k", "50k", "60k", "70k", "80k", "90k"],
         datasets: [{ 
             data: [86,114,106,106,107,111,133],
             label: "Users",
             borderColor: "#3e95cd",
             backgroundColor: "#7bb6dd",
             fill: false,
           }, { 
             data: [70,90,44,60,83,90,100],
             label: "Orders",
             borderColor: "#3cba9f",
             backgroundColor: "#71d1bd",
             fill: false,
           }, { 
             data: [10,21,60,44,17,21,17],
             label: "Sales",
             borderColor: "#ffa500",
             backgroundColor:"#ffc04d",
             fill: false,
           },
         ]
       },
     });
 </script>
@endsection