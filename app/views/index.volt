<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>InvLab SMK Taruna Satria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {#
    <script src="{{ static_url('js/jquery-3.2.1.min.js') }}"></script>#}
    <!-- Bootstrap -->
    <link href="{{static_url('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{static_url('css/styles.css')}}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{static_url('js/jquery.js') }}"></script>
</head>

<body>

    {% if session.ses_username != null %}

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="{{url('')}}">InvLab <strong class="text text-info">SMK Taruna Satria</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    {% if session.ses_hak_akses == 'kepalaTIF' %}
                        <li><a href="{{url('')}}">Dashboard</a></li>
                        <li><a href="{{url('unit_pembelian/pembelian')}}">Pembelian</a></li>
                        <li><a href="{{url('unit_pembelian/data')}}">Unit Pembelian</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Master
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('barang/data')}}">Barang</a></li>
                                <li><a href="{{url('keuangan/data')}}">Keuangan</a></li>
                                <li><a href="{{url('labor/data')}}">Labor</a></li>
                            </ul>
                        </li>
                    {% elseif session.ses_hak_akses == 'administrator' %}
                        <li><a href="{{url('user/data')}}">User</a></li>
                    {% elseif session.ses_hak_akses == 'kepalasekolah' %}
                        <li><a href="{{url('laporan/data')}}">Laporan</a></li>
                    {% endif %}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ session.ses_nama }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('auth/profil') }}">Profil <span class="text text-info">{{ session.ses_hak_akses }}</span></a></li>
                            <li>
                                <a data-toggle="modal" data-target="#logoutDialog">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <h3>navbar</h3> {% endif %}
    <div class="container">
        {{ content() }}
    </div>
    <div class="modal fade" id="logoutDialog" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="">Konfirmasi logout</h4>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin keluar ?
                </div>
                <div class="modal-footer">
                    <form class="" action="{{ url('auth/logout') }}" method="post">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Yakin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery UI -->
    <script src="{{static_url('js/jquery-ui.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{static_url('bootstrap/js/bootstrap.min.js') }}"></script>

    {#datatable#}
    <script src="{{ static_url('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ static_url('vendors/datatables/dataTables.bootstrap.js') }}"></script>

    <script src="{{ static_url('js/custom.js') }}"></script>
    <script src="{{ static_url('js/tables.js') }}"></script>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        var pathname = window.location.pathname;
        $('ul.nav > li > a[href="' + pathname + '"]').parent().addClass('active');
    });
</script>
<script type="text/javascript">
    function printdiv(printpage) {

        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr +
            newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>
