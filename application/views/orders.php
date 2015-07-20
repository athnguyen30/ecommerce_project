<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/orders.css')?>"/>
    
    <style type="text/css">
      a:hover {
        text-decoration: none;
      }
      #cart_num{
        display: inline-block;
      }
      </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-text">Dashboard</p>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Orders</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                </ul>
                <div class="nav navbar-brand navbar-right">
                    <a href="">Log Off</span></a>
                </div>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--navigation-->

    <div class = 'container'>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <form class = 'navbar-form navbar-right'>
            <select id = 'order_status' class="form-control col-xs-2">
              <option>Shipped</option>
              <option>Ordered</option>
              <option>Completed</option>
              <option>Cancelled</option>
            </select>
        </form>
    </div>

    <div class = "container">
        <table class="table table-bordered">
            <thead>
              <tr>
                  <th data-field="order_id">Order ID</th>
                  <th data-field="name">Name</th>
                  <th data-field="date">Date</th>
                  <th data-field="billing_address">Billing Address</th>
                  <th data-field="total">Total</th>
                  <th data-field="status">Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Eclair</td>
                <td>7/1/2015</td>
                <td>123 dojo way Bellevue WA 98805</td>
                <td>$0.87</td>
                <td>
                    <form>
                        <select id = 'order_status' class="form-control col-xs-2">
                          <option value = 'shipped' selected = 'selected'>Shipped</option>
                          <option value = 'ordered'>Ordered</option>
                          <option value = 'completed'>Completed</option>
                          <option value = 'cancelled'>Cancelled</option>
                          <option value = 'all' selected = 'selected'>Show All</option>
                        </select>
                    </form>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Eclair</td>
                <td>7/1/2015</td>
                <td>123 dojo way Bellevue WA 98805</td>
                <td>$0.87</td>
                <td>
                    <form>
                        <select id = 'order_status' class="form-control col-xs-2">
                          <option value = 'shipped'>Shipped</option>
                          <option value = 'ordered' selected = 'selected'>Ordered</option>
                          <option value = 'completed'>Completed</option>
                          <option value = 'cancelled'>Cancelled</option>
                          <option value = 'all'>Show All</option>
                        </select>
                    </form>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Eclair</td>
                <td>7/1/2015</td>
                <td>123 dojo way Bellevue WA 98805</td>
                <td>$0.87</td>
                <td>
                    <form>
                        <select id = 'order_status' class="form-control col-xs-2" selected = "completed">
                          <option value = 'shipped'>Shipped</option>
                          <option value = 'ordered'>Ordered</option>
                          <option value = 'completed'>Completed</option>
                          <option value = 'cancelled' selected = 'selected'>Cancelled</option>
                        </select>
                    </form>
                </td>
              </tr>
            </tbody>
        </table>
    </div>

    <div class= "container">
        <nav id = 'page'>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
    </div>

    <!-- /.container -->
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</body>

</html>
