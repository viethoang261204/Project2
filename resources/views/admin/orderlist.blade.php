<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/order-list.css">
</head>

<body>
<div class="container">
    @include('sidebar.sidebar')
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                </label>
            </div>

            <div class="user">
                <img src="assets/imgs/customer01.jpg" alt="">
            </div>
        </div>

        <h1>Quản lý đơn hàng</h1>
        <div class="content">

            <div class="order-status-filter">
                <a href="/admin/order-list/PENDING" class="btn btn-info btn-sm">Pending</a>
                <a href="/admin/order-list/CONFIRMED" class="btn btn-info btn-sm">Confirmed</a>
                <a href="/admin/order-list/SHIPPING" class="btn btn-info btn-sm">Shipping</a>
                <a href="/admin/order-list/RECEIVED" class="btn btn-info btn-sm">Received</a>
                <a class="btn btn-success btn-sm" href="/admin/product-list" style="text-decoration: none">View All</a>
            </div>

            <table class="order-table table-hover table-striped">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Status</th>
                    <th colspan="3" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $obj)
                    <tr>
                        <td class="text-center">{{$obj->id}}</td>
                        <td class="text-center">{{$obj->full_name}}</td>
                        <td class="text-center">{{$obj->address}}</td>
                        <td class="text-center">{{$obj->phone}}</td>
                        <td class="text-center">{{$obj->total}}</td>
                        <td class="text-center">{{$obj->status}}</td>

                        @if($obj->status === 'PENDING')
                            <td class="text-center">
                                <a href="/admin/order-update-status/{{$obj->id}}/CONFIRMED" class="btn btn-outline-success btn-sm">Confirm</a>
                            </td>
                            <td class="text-center">
                                <a href="/admin/order-update-status/{{$obj->id}}/CANCELED" class="btn btn-outline-danger btn-sm">Cancel</a>
                            </td>
                        @endif
                        @if($obj->status === 'CONFIRMED')
                            <td class="text-center">
                                <a href="/admin/order-update-status/{{$obj->id}}/SHIPPING" class="btn btn-outline-warning btn-sm">Shipping</a>
                            </td>
                        @endif
                        @if($obj->status === 'SHIPPING')
                            <td class="text-center">
                                <a href="/admin/order-update-status/{{$obj->id}}/RECEIVED" class="btn btn-outline-warning btn-sm">Received</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>

<!-- =========== Scripts =========  -->
<script src="/assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
